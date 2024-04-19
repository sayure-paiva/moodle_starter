<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Lists the course categories
 *
 * @copyright 1999 Martin Dougiamas  http://dougiamas.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package course
 */

require_once "../config.php";
require_once $CFG->dirroot . '/course/lib.php';

$categoryid = optional_param('categoryid', 0, PARAM_INT); // Category id
$site = get_site();

if ($CFG->forcelogin) {
    require_login();
}

$heading = $site->fullname;


$PAGE->set_pagelayout('coursecategory');
$PAGE->set_primary_active_tab('#categoria-carreiras-recomendadas');
$PAGE->add_body_class('limitedwidth');
$courserenderer = $PAGE->get_renderer('core', 'course');

$PAGE->set_heading($heading);

// Esta variável armazena o html que gera a visão de TABs conforme o figma.
$tabs = '
<div class="d-flex align-items-center htopo">
    <ul class="nav hnav-tabs htabs">

        <li class="hnav-item htab">
            <a class="hnav-link active" data-toggle="tab" href="#categoria-carreiras-recomendadas">
                <div class="hicon">
                    <span class="bi bi-star mr-1"></span>
                    <span id="tabText" class="tex-white">Carreiras recomendadas</span>
                </div>
            </a>
        </li>
        <li class="hnav-item htab">
            <a id="categoria-todas-as-carreiras-link" class="hnav-link ' . $activeClass . '" data-toggle="tab" href="#categoria-todas-as-carreiras">
                <div class="hicon">
                    <span class="bi bi-lightning-charge mr-1"></span>
                    <span id="tabText" class="tex-white">Todas as carreiras</span>
                </div>
            </a>
        </li>

    </ul>
</div>';


function is_user_enrolled_in_category($categoryid, $userid) { // Função que verifica se o usuário já se inscreveu em algum curso da categoria
    global $DB;

    // Obter todos os cursos da categoria
    $courses = $DB->get_records('course', array('category' => $categoryid));

    // Verificar se o usuário está inscrito em pelo menos um curso da categoria
    foreach ($courses as $course) {
        // Consulta para obter os enrolids com base no courseid
        $enrolids = $DB->get_fieldset_select('enrol', 'id', 'courseid = ?', array($course->id));

        if (!empty($enrolids)) {
            foreach ($enrolids as $enrolid) {
                // Consulta para verificar a inscrição do usuário na tabela mdl_user_enrolments
                if ($DB->record_exists('user_enrolments', array('enrolid' => $enrolid, 'userid' => $userid))) {
                    return true; // O usuário está inscrito em pelo menos um dos tipos de enrolment
                }
            }
        }
    }

    return false; // O usuário não está inscrito em nenhum curso da categoria
}

function get_categories_data() { // função que faz a leitura do json para capturar as imagens das categorias/carreiras
    $json_file = file_get_contents('category-img.json');
    return json_decode($json_file, true);
}

function calcularCargaHorariaCategoria($categoryid) {
    global $DB;

    // Obtém todos os cursos na categoria
    $courses = $DB->get_records('course', array('category' => $categoryid), 'sortorder', 'id,fullname,summary');

    $carga_horaria_total = 0;

    foreach ($courses as $course) {
        // Obtenha a carga horária do curso (substitua 1 pelo ID correto do campo personalizado)
        $carga_horaria_curso = $DB->get_record('customfield_data', array('fieldid' => 1, 'instanceid' => $course->id));

        // Some a carga horária do curso à carga horária total da categoria
        $carga_horaria_total += $carga_horaria_curso->value;
    }

    return $carga_horaria_total;
}


function exibirCategorias($categoryid, $tabs, $categoryurl) {// Função que gera os cursos no formato de TABs e Cards
    global $USER;

    // Obtenha todas as categorias
    $categories = core_course_category::get_all();

    // Variavel que armazena o array de categorias e imagens
    $category_data = get_categories_data();

    // Renderiza as abas fixas (tabs)
    echo $tabs;

    // Conteúdo das categorias
    echo '<div class="tab-content">';

    // Página de carreiras recomendadas
    include 'carreiras_recomendadas.php';

    // Todas as carreiras
    echo '<div id="categoria-todas-as-carreiras" class="tab-pane fade">';
    echo '<div class="tab-space"></div>
                    <div class="tab-body">
                        <div class="tab-container">
                            <div class="tab-title">Todas as carreiras</div>
                            <div class="category-cards">';
    foreach ($categories as $category) {

        $svg_image_url = '';
        foreach ($category_data['categories'] as $category_info) { // percorre o array e define o svg correto para a categoria.
            if ($category_info['idcategoria'] == $category->id) {
                $svg_image_url = $category_info['imagem'];
                break;
            }
        }
        $carga_horaria_categoria = calcularCargaHorariaCategoria($category->id);
        
        echo '<div class="category-card">
                                    <div class="category-topo">
                                        <div class="category-icon">
                                            <div class="icon-svg">
                                            '.$svg_image_url.'
                                            </div>
                                        </div>';
        echo '<div class="category-name">' . $category->name . '</div>';
        echo '</div>
                                    <div class="category-body">
                                        <div class="category-desc">' . $category->description . '</div>
                                        <div class="category-horas">
                                            <div class="horas-svg">
                                                <i class="bi bi-clock"></i>
                                            </div>
                                            <div class="horas-text">' . $carga_horaria_categoria . 'H DE ESTUDO</div>
                                        </div>
                                    </div>';

        // Retorna true se o usuário tiver inscrito em um curso desta categoria
        $userEnrolled = is_user_enrolled_in_category($category->id, $USER->id);

        // Mostra o texto do botão com base na inscrição do usuário
        $button_text = $userEnrolled ? 'Continuar carreira' : 'Iniciar carreira';

        echo '<div class="category-nav">
                                            <a href="' . $categoryurl . '?categoryid=' . $category->id . '" class="d-flex">
                                                <div class="nav-text mr-2">' . $button_text . '</div>
                                                <div class="nav-svg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none">
                                                        <path
                                                            d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                                            fill="#FFEC80" />
                                                        <path
                                                            d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                                            fill="#FFEC80" />
                                                    </svg>
                                                </div>
                                            </a>
                                    </div>
                                </div>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

echo $OUTPUT->header();
echo $OUTPUT->skip_link_target();

$categoryurl = $CFG->wwwroot . '/course/cursos_soulcode.php';

/// Chame a função para exibir a visão personalizada dos cursos e categorias
exibirCategorias($categoryid, $tabs, $categoryurl);

// Trigger event, course category viewed.
$eventparams = array('context' => $PAGE->context, 'objectid' => $categoryid);
$event = \core\event\course_category_viewed::create($eventparams);
$event->trigger();

echo $OUTPUT->footer();

?>
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

if ($CFG->forcelogin) {
    require_login();
}

$PAGE->set_title('SoulCode Free');
$PAGE->set_pagelayout('coursecategory');

$courserenderer = $PAGE->get_renderer('core', 'course');

$tabs = '
<div class="d-flex align-items-center htopo">
    <ul class="nav hnav-tabs htabs">
        <li class="hnav-item htab">
            <a class="hnav-link active" data-toggle="tab">
                <div class="hicon">
                    <span class="bi bi-star mr-1"></span>
                    <span id="tabText" class="tex-white">Cursos</span>
                </div>
            </a>
        </li>
    </ul>
</div>';


function is_user_enrolled($courseid, $userid)
{ // Função que verifica se o usuário está inscrito em um curso específico
    global $DB;

    // Consulta para obter os enrolids com base no courseid
    $enrolids = $DB->get_fieldset_select('enrol', 'id', 'courseid = ?', array($courseid));

    if (!empty($enrolids)) {
        foreach ($enrolids as $enrolid) {
            // Consulta para verificar a inscrição do usuário na tabela mdl_user_enrolments
            if ($DB->record_exists('user_enrolments', array('enrolid' => $enrolid, 'userid' => $userid))) {
                return true; // O usuário está inscrito em pelo menos um dos tipos de enrolment
            }
        }
    }

    return false; // Retorna falso se não encontrar enrolids (curso não existe ou não tem inscrição)
}

function calc_diff_time($enddate) { //esta função verifica se o time está expirado e não renderiza o curso caso esteja expirado.
    $currentTimestamp = time();

    // Ajustar a data final para adequação do timestamp ao timezone correto.
    $enddate_ajustada = $enddate + (4 * 60 * 60);

    $dif_time = $enddate_ajustada - $currentTimestamp;
    
    return $dif_time;
}

function exibirCursos($tabs)
{ // Função que exibe os cursos no formato de cards

    global $DB, $USER;

    // Renderiza as abas fixas (tabs)
    echo $tabs;

    // Conteúdo das categorias
    echo '<div class="tab-content">';

    // Verifique se um termo de pesquisa foi fornecido
    if (!empty($searchTerm)) {
        // Execute a consulta no banco de dados para buscar os cursos com base no termo de pesquisa no campo fullname ou summary
        $sql = "fullname LIKE ? OR summary LIKE ?";
        $params = array('%' . $searchTerm . '%', '%' . $searchTerm . '%');
        $courses = $DB->get_records_select('course', $sql, $params, 'sortorder', 'id,fullname,summary');
    } else {
        // Obtenha os cursos da categoria atual (sem pesquisa)
        $courses = $DB->get_records('course', array('visible' => 1), 'sortorder', 'id,fullname,summary,enddate');
    }
    
    echo '<div class="tab-space"></div>
                    <div class="tab-body">
                        <div class="tab-container">
                        <div class="d-flex flex-column align-items-center">
                            <h3>Explore nossos cursos e amplie seus horizontes!</h3>
                            <p>Aproveite a demonstração por tempo limitado. Inscreva-se agora!</p>
                        </div>
                            <div class="category-cards">';

    // Exiba os cursos como cards
    foreach ($courses as $course) {

        //$courseimage = \core_course\external\course_summary_exporter::get_course_image($course);
        $svg_image = $DB->get_record('customfield_data', array('fieldid' => 2, 'instanceid' => $course->id));

        $carga_horaria = $DB->get_record('customfield_data', array('fieldid' => 1, 'instanceid' => $course->id));

        // Verifica se o usuário está inscrito no curso atual
        $is_enrolled = is_user_enrolled($course->id, $USER->id);

        // Mostra o texto do botão com base na inscrição do usuário
        $button_text = $is_enrolled ? 'Continuar curso' : 'Inscreva-se no curso';
        
        if(calc_diff_time($course ->enddate) > 0){ // se tiver com o prazo de fechamento expirado ele não vai renderizar os cards.
        echo '<div class="category-card" data-enddate="' . $course->enddate . '">
                                    <div class="category-topo">
                                        <div class="category-icon">
                                            <div class="icon-svg">
                                                <img src="' . $svg_image->value . '" alt="imagem categoria">            
                                            </div>
                                        </div>';
        echo '<div class="category-name">' . $course->fullname . '</div>';
        echo '</div>
                                    <div class="category-body">
                                        <div class="category-desc">' . $course->summary . '</div>
                                        <div class="category-horas">
                                            <div class="horas-svg">
                                                <i class="bi bi-clock"></i>
                                            </div>
                                            <div class="horas-text">' . $carga_horaria->value . 'H DE ESTUDO</div>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 justify-content-center">
                                        <div class="contador-container">
                                            <div class="contador-card">
                                                <div class="contador-card-item"><span class="contador-num" id="contador-dias">00</span></div>
                                                <div class="contador-card-item contador-text">dias</div>
                                            </div>
                                            <div class="contador-divisor">:</div>
                                            <div class="contador-card">
                                                <div class="contador-card-item"><span class="contador-num" id="contador-horas">00</span></div>
                                                <div class="contador-card-item contador-text">horas</div>
                                            </div>
                                            <div class="contador-divisor">:</div>
                                            <div class="contador-card">
                                                <div class="contador-card-item"><span class="contador-num" id="contador-minutos">00</span></div>
                                                <div class="contador-card-item contador-text">min.</div>
                                            </div>
                                            <div class="contador-divisor">:</div>
                                            <div class="contador-card">
                                                <div class="contador-card-item"><span class="contador-num" id="contador-segundos">00</span></div>
                                                <div class="contador-card-item contador-text">seg.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="category-nav">
                                    <a href="' . new moodle_url('/course/view.php', ['id' => $course->id]) . '" class="d-flex">
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
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

echo $OUTPUT->header();
echo $OUTPUT->skip_link_target();

/// Chame a função para exibir a visão personalizada dos cursos e categorias
exibirCursos($tabs);

echo $OUTPUT->footer();

?>
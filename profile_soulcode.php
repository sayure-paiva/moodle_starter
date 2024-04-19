<!-- user_profile_card.php -->

<?php
// Dentro do arquivo user_profile.php
require_once('../../config.php');
require_once('../../user/renderer.php');

// Verifica se o usuário está logado e se possui permissão para acessar a página
require_login();
global $USER;

// Cria um objeto do tipo moodle_page
$PAGE = new moodle_page();
$PAGE->set_url('/mod/profile/index.php');
$PAGE->set_title('Perfil do Usuário');

// Obtém o contexto atual
$context = context_system::instance();
// Define o contexto da página
$PAGE->set_context($context);

echo $OUTPUT->header();

// Cria uma instância do renderer personalizado passando o moodle_page e o template
$renderer = new core_user_renderer($PAGE, 'profile');

// Obtém o contexto do usuário
$usercontext = context_user::instance($USER->id);
$user = new stdClass();
$user->id = $USER->id;
$user->firstname = $USER->firstname;
$user->email = $USER->email;
$user->profileimageurl = moodle_url::make_pluginfile_url($usercontext->id, 'user', 'icon', null, '/', 'f1')->out(false);

echo '<pre>';
print_r($USER);
echo '</pre>';


// Renderiza a página de perfil do usuário
echo $renderer->user_profile_card($user);

// Finaliza o rodapé da página
echo $OUTPUT->footer();


?>


<style>
  .user-profile-card {
    border: 1px solid #ccc;
    padding: 10px;
    max-width: 300px;
    margin: 0 auto;
  }

  .avatar img {
    max-width: 100px;
    border-radius: 50%;
  }

  .user-info p {
    margin: 5px 0;
  }

  pre {
    color: #FFF;
  }
</style>

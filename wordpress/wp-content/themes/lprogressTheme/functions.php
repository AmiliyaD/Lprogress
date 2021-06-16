<?php
global $wpdb;
if ($_POST) {
    if($_POST['form-name'] == '' || $_POST['email'] == '' || $_POST['phone'] == '') {
        $ff = 'ффффф заполн';
        $_SESSION['message'] = 'Не все поля заполнены!';

    } 
    else {
        $_SESSION['message'] = 'Данные отправлены';
        $wpdb->insert('form_dataform', ['form_name' => $_POST['form-name'], 'phone' => $_POST['phone'], 'emailAdress' => $_POST['email'] ]);
        header('Location: index.php');
    }
    
    
}

// ТУТ ВСЕ НУЖНЫЕ НАМ ФУНКЦИИ WORDPRESS
// классы с виджетами
require_once(__DIR__ . '/widgets/widget-header.php');
require_once(__DIR__ . '/widgets/widget-condition.php');
require_once(__DIR__ . '/widgets/widget-weBest.php');
require_once(__DIR__ . '/widgets/widget-contact.php');
require_once(__DIR__ . '/widgets/widget-whyBest.php');
require_once(__DIR__ . '/widgets/widget-aboutUsText.php');
require_once(__DIR__ . '/widgets/widget-aboutUsNumber.php');
require_once(__DIR__ . '/widgets/widget-social.php');
require_once(__DIR__ . '/widgets/widget-footersocial.php');
require_once(__DIR__ . '/widgets/widget-headAll.php');
add_action('widgets_init', 'l_Sidebar');

// регистрируем меню
add_action('after_setup_theme', 'header_menu');

// классы меню
add_filter('nav_menu_css_class', 'menuClasses');
add_filter('nav_menu_link_attributes', 'aClasses');
add_action('wp_enqueue_scripts', 'my_theme');




// Добавляем стили для главной страницы
function my_theme()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/verstka/css/bootstrap.css');
    wp_enqueue_style('mystyle', get_template_directory_uri() . '/verstka/css/style.css');
    wp_enqueue_style('formStyle', get_template_directory_uri() . '/verstka/css/form.css');
}

function header_menu() {
    register_nav_menu('header', 'меню в шапке');
    register_nav_menu('footer', 'меню в подвале');
}

// добавляем новые css классы
function aClasses($atts) {
    $atts['class'] = 'main_a';
  
    return $atts;
    }
    function menuClasses($classes) {
        $classes[1] = 'nav-item';
        return $classes;
    }

// сайтбары
function  l_Sidebar() {
    // главное описание
    register_sidebar([
        'id' => 'head_sidebar',
        'name' => 'В шапке',
        'description' => 'название и описание'
    ]);
    // соц сети
    register_sidebar([
        'id' => 'society',
        'name' => 'Соц-сети в шапке',
        'description' => 'Соц-сети в шапке'
    ]);
    // о нас
    register_sidebar([
        'id' => 'about_us__sidebar',
        'name' => 'О нас в тексте',
        'description' => ' О Нас в тексте'
    ]);
    register_sidebar([
        'id' => 'about_numbers_head',
        'name' => 'Заголовок - О нас в цифрах',
        'description' => 'Заголовок - О Нас в цифрах'
    ]);
    register_sidebar([
        'id' => 'about_numbers',
        'name' => 'О нас в цифрах',
        'description' => 'О Нас в цифрах'
    ]);
 
    // условия
    register_sidebar([
        'id' => 'conditions',
        'name' => 'Заголовок - Условия',
      
    ]);
    register_sidebar([
        'id' => 'condition_1',
        'name' => 'Условия',
        'description' => 'Условия кредитования'
    ]);

    // лучшее
    register_sidebar([
        'id' => 'we_are_best_head',
        'name' => 'Заголовок - Чем мы лучше?',
 
    ]);
    register_sidebar([
        'id' => 'we_are_best',
        'name' => 'Чем мы лучше?',
  
    ]);

    register_sidebar([
        'id' => 'why_are_best_head',
        'name' => 'Заголовок - Почему мы лучше?',

    ]);
    register_sidebar([
        'id' => 'why_are_best',
        'name' => 'Почему мы лучше?',
        'description' => 'О том, ПОЧЕМУ мы лучше'
    ]);
    // контакты
    register_sidebar([
        'id' => 'contacts_header',
        'name' => 'Заголовок - Контакты',
        
    ]);
    register_sidebar([
        'id' => 'contacts',
        'name' => 'Контакты',
        'description' => 'Контакты'
    ]);
    register_sidebar([
        'id' => 'footer_social',
        'name' => 'Социальные сети в подвале',
        'description' => 'Социальные сети в подвале'
    ]);
// форма
register_sidebar([
    'id' => 'form_des_head',
    'name' => 'Заголовок - Страница формы',
    'description' => 'Форма'
]);
    register_sidebar([
        'id' => 'form_des',
        'name' => 'Страница формы',
        'description' => 'Форма'
    ]);
    register_sidebar([
        'id' => 'lang',
        'name' => 'Язык',
        'description' => 'Смена языка'
    ]);
    // регистрация виджетов
    register_widget('L_widget_condition');
    register_widget('L_widget_header');
    register_widget('L_widget_aboutText');
    register_widget('L_widget_aboutNumber');
    register_widget('L_widget_weBest');
    register_widget('L_widget_whyBest');
    register_widget('L_widget_social');
    register_widget('L_widget_contact');
    register_widget('L_widget_Footersocial');
    register_widget('L_widget_headAll');
}
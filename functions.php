<?php 
// cargar cmb2 
require_once dirname( __FILE__ ).'/inc/posttype.php';
if( !class_exists("CMB2") ){
    require_once( dirname(__FILE__)."/CMB2/init.php" );
    
}
require_once ( get_template_directory() . '/CMB2/cmb2.php' );
require_once dirname( __FILE__ ).'/inc/custom-field.php';
require_once dirname( __FILE__ ).'/inc/query-posts-type.php';
require_once dirname( __FILE__ ).'/inc/field-category.php';


// Cargar los estilos y los script de la pagina

function style(){

    wp_enqueue_style('normalice','https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(),'1.0.0'.'all');  
    wp_enqueue_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(),'1.0.0'.'all');
    wp_enqueue_style('material-icom','https://fonts.googleapis.com/icon?family=Material+Icons', array(),'4.7.0'.'all');
    wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.css',array(),'4','all');
    wp_enqueue_style('style',get_stylesheet_uri());
    // cargar los script de materialize y scripts
    wp_enqueue_script('materialize-js','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(),'1.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js',array(),'1.0.0', true);
    
    }
    
    add_action('wp_enqueue_scripts','style'); 

    // agregamos soporte al theme 

    function menus(){
        register_nav_menus( array(
            'header_menu' => __('header_menu', 'surgery'),
            'iconos_menu' => __('icono_menu', 'surgery')

        ));
    }
    add_action( 'init', 'menus' );
    //definimos los tamaños de las imagenes
    function sd_setup()
    {
    add_image_size( 'mediano', 510, 340, true );
    add_theme_support( 'post-thumbnails');
    register_nav_menus( array('header_menu' => esc_html__('MenuPrincipal','Dynamics-Surgery')));
    }
    //agregamos soporte al themes
    add_action('after_setup_theme', 'sd_setup' );

    // agregando soporte a widget
    add_action( 'widgets_init', 'widgets_sidebar' );
function widgets_sidebar(){
    register_sidebar(array(
        'name' => 'widgets Lateral',
        'id' => 'sidebar_widget',
        'before_widget' => '<div class"widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center text-ligth separador inverso">',
        'after_title' => '</h2>'

    ));
}

// limitar el contenido de las palabras 

    //Limitar con la funcion get_the_excerpt
    function excerpt($limit) {
        $excerpt = explode(' ', category_description($a), $limit);
        if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
        } else {
        $excerpt = implode(" ",$excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
        return $excerpt;
      }
      //Limitar con la funcion get_the_content
      function content($limit) {
        $content = explode(' ', get_the_content(), $limit);
        if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
        } else {
        $content = implode(" ",$content);
        }
        $content = preg_replace('/[.+]/','', $content);
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]>', $content);
        return $content;
      }

      // agregar campo a la seccion de categoria 
      
      add_action ( 'edit_category_form_fields', 'extra_category_fields');
//add extra fields to category edit form callback function

//eliminar wysiwyng de productos
add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'productos';
    remove_post_type_support( $post_type, 'editor');
}

function bp_mime_type ( $mime_types ) {
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;}
   
   add_filter('upload_mimes', 'bp_mime_type', 1, 1);
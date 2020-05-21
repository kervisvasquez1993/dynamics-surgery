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
require_once dirname( __FILE__ ).'/inc/relation.php';
require_once dirname( __FILE__ ).'/inc/contact_form_save.php';
require_once dirname( __FILE__ ).'/inc/database.php';
require_once dirname( __FILE__ ).'/inc/contacto.php';
require_once dirname( __FILE__ ).'/inc/custom_contact_form.php';
require_once dirname( __FILE__ ).'/inc/js_php.php';


function contact_form_menu()
{
   add_menu_page( 'Contacto', 'Contacto', 'Administrador', 'contact_form','contact_form_comments',  'dashicons-id-alt',20); 
}


function contact_form_comments(){
    echo 'hola';
}

add_action( 'admin_menu','contact_form_menu');


// Cargar los estilos y los script de la pagina

// Cargar los estilos y los script de la pagina

function style(){

    wp_enqueue_style('normalice','https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(),'1.0.0'.'all');  
    wp_enqueue_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(),'1.0.0'.'all');
    wp_enqueue_style('slider','https://unpkg.com/swiper/css/swiper.min.css', array(),'1.0.0'.'all');
    wp_enqueue_style('material-icom','https://fonts.googleapis.com/icon?family=Material+Icons', array(),'4.7.0'.'all');
    wp_enqueue_style('style',get_stylesheet_uri());
    // cargar los script de materialize y scripts
    wp_enqueue_script('materialize-js','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(),'1.0.0', true);
    wp_enqueue_script('slider-js','https://unpkg.com/swiper/js/swiper.min.js', array(),'1.0.0', true);
    if(is_page('contactanos')):
        wp_enqueue_script('script_contactanos', get_template_directory_uri().'/js/contact_form.js',array(),'1.0.0', true);
    endif;    
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
    register_sidebar(
        array(
        'name' => 'widgets Lateral',
        'id' => 'sidebar_widget',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center text-ligth separador inverso">',
        'after_title' => '</h4>'
             ));
    register_sidebar(
        array('name' => 'post relations',
        'id' => 'post_relations',
        'before_widget' => '<div class"post_relation">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="text-ligth">',
        'after_title' => '</h5>'
             ));
                     
}

// limitar el contenido de las palabras 
    //Limitar con la funcion get_the_excerpt
    function excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
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



      function get_excerpt(){
        $excerpt = get_the_content();
        $excerpt = preg_replace(" ([.*?])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, 100);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
        $excerpt = $excerpt.'... <a href="'.$permalink.'">Leer más</a>';
        return $excerpt;
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

//Renombrar el nombre de menú post o entradas por Noticias
function modificar_post_label() 
{
    global $menu;
    global $submenu;
    $menu[5][0] = 'Productos';
    $submenu['edit.php'][5][0] = 'Productos';
    $submenu['edit.php'][10][0] = 'A&ntilde;adir Producto';

    echo '';
}

//modificar el nombre de las entradas
function modificar_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Productos';
    $labels->singular_name = 'Productos';
    $labels->add_new = 'A&ntilde;adir Nueva';
    $labels->add_new_item = 'A&ntilde;adir Nuevo Producto';
    $labels->edit_item = 'Editar Producto';
    $labels->new_item = 'Nueva Producto';
    $labels->view_item = 'Ver Productos';
    $labels->search_items = 'Buscar Productos';
    $labels->not_found = 'No se han encontrado Producto';
    $labels->not_found_in_trash = 'No se han encontrado Producto en la papelera';
    $labels->all_items = 'Todas los Productos';
    $labels->menu_name = 'Productos';
    $labels->name_admin_bar = 'Productos';
}

add_action( 'admin_menu', 'modificar_post_label' );
add_action( 'init', 'modificar_post_object' );


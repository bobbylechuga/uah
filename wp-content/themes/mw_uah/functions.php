<?php
/**
 * Bootstrap Basic theme
 *
 * @package bootstrap-basic
 */


/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
    $content_width = 1170;
}


if (!function_exists('bootstrapBasicSetup')) {
    /**
     * Setup theme and register support wp features.
     */
    function bootstrapBasicSetup()
    {
        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
         *
         * copy from underscores theme
         */
        load_theme_textdomain('bootstrap-basic', get_template_directory() . '/languages');

        // add theme support title-tag
        add_theme_support('title-tag');

        // add theme support post and comment automatic feed links
        add_theme_support('automatic-feed-links');

        // enable support for post thumbnail or feature image on posts and pages
        add_theme_support('post-thumbnails');

        // allow the use of html5 markup
        // @link https://codex.wordpress.org/Theme_Markup
        add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

        // add support menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'bootstrap-basic'),
            'sociales' => 'Redes Sociale'
        ));

        // add post formats support
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

        // add support custom background
        add_theme_support(
            'custom-background',
            apply_filters(
                'bootstrap_basic_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => ''
                )
            )
        );
    }// bootstrapBasicSetup
}
add_action('after_setup_theme', 'bootstrapBasicSetup');


if (!function_exists('bootstrapBasicWidgetsInit')) {
    /**
     * Register widget areas
     */
    function bootstrapBasicWidgetsInit()
    {
        register_sidebar(array(
            'name'          => __('Header right', 'bootstrap-basic'),
            'id'            => 'header-right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));

        register_sidebar(array(
            'name'          => __('Navigation bar right', 'bootstrap-basic'),
            'id'            => 'navbar-right',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ));

        register_sidebar(array(
            'name'          => __('Sidebar left', 'bootstrap-basic'),
            'id'            => 'sidebar-left',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));

        register_sidebar(array(
            'name'          => __('Sidebar direcci&oacute;n', 'bootstrap-basic'),
            'id'            => 'sidebar-dir',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h1>',
            'after_title'   => '</h1>',
        ));

		 register_sidebar(array(
            'name'          => __('Sidebar Menu Header', 'bootstrap-basic'),
            'id'            => 'sidebar-menuheader',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h1>',
            'after_title'   => '</h1>',
        ));


        register_sidebar(array(
            'name'          => __('Sidebar Menu bienvenida', 'bootstrap-basic'),
            'id'            => 'sidebar-menu_bienvenida',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h1>',
            'after_title'   => '</h1>',
        ));




        register_sidebar(array(
            'name'          => __('Sidebar right', 'bootstrap-basic'),
            'id'            => 'sidebar-right',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));

        register_sidebar(array(
            'name'          => __('Footer left', 'bootstrap-basic'),
            'id'            => 'footer-left',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));

        register_sidebar(array(
            'name'          => __('Footer right', 'bootstrap-basic'),
            'id'            => 'footer-right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));

    }// bootstrapBasicWidgetsInit
}
add_action('widgets_init', 'bootstrapBasicWidgetsInit');


if (!function_exists('bootstrapBasicEnqueueScripts')) {
    /**
     * Enqueue scripts & styles
     */
    function bootstrapBasicEnqueueScripts()
    {
        global $wp_scripts;

        wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7');
        wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.3.7');
        wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.6.3');
        wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style('owl-style', get_template_directory_uri() . '/css/owl.carousel.css');
        wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css');
        wp_enqueue_style('pinochj-style', get_template_directory_uri() . '/css/render.css');

        wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js', array(), '3.3.1');
        wp_register_script('respond-script', get_template_directory_uri() . '/js/vendor/respond.min.js', array(), '1.4.2');
        $wp_scripts->add_data('respond-script', 'conditional', 'lt IE 9');
        wp_enqueue_script('respond-script');
        wp_register_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.min.js', array(), '3.7.3');
        $wp_scripts->add_data('html5-shiv-script', 'conditional', 'lte IE 9');
        wp_enqueue_script('html5-shiv-script');
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '3.3.7', true);
        wp_enqueue_script('owl-slider', get_template_directory_uri() . '/js/vendor/owl.carousel.min.js', array(), false, true);
        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), false, true);
        wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri());
    }// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');


/**
 * admin page displaying help.
 */
if (is_admin()) {
    require get_template_directory() . '/inc/BootstrapBasicAdminHelp.php';
    $bbsc_adminhelp = new BootstrapBasicAdminHelp();
    add_action('admin_menu', array($bbsc_adminhelp, 'themeHelpMenu'));
    unset($bbsc_adminhelp);
}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';


/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/widgets/BootstrapBasicSearchWidget.php';
require get_template_directory() . '/inc/template-widgets-hook.php';
//shortcode para la direccion
require get_template_directory() . '/inc/gmaps.php';
//Estilos por template
//require get_template_directory() . '/inc/estilos.php';


/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
the_post_thumbnail();

the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)

the_post_thumbnail( array(100,100) );

the_post_thumbnail( array(830,370) );  // Other resolutions

/* Funciones Pino y Chj */
add_filter('widget_text','do_shortcode');

function bajada($limit, $contenido) {
  /*Función para acortar las bajadas a una longitud de palabras establecida en $limit*/
  $content = explode(' ', $contenido, $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
	return $content;
}

function estilosEspecificos() {
  $frontpage_id = get_option( 'page_on_front' );
  $color_prin = get_post_field('color_principal', $frontpage_id);
  $color_sec = get_post_field('color_secundario', $frontpage_id);
  $fondo_sidebar = get_post_field('fondo_sidebar', $frontpage_id);
?>
  <style>
    .site-title-heading, .site-title-heading a {
      color: <?php echo $color_prin; ?> !important;
    }
    .navbar-default .navbar-nav>li>a {
      border-right: 1px solid <?php echo $color_prin; ?> !important;
    }
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
      border-top: 1px solid <?php echo $color_prin; ?> !important;
      border-bottom: 1px solid <?php echo $color_prin; ?> !important;
    }
    .navbar-default
    .navbar-nav>li>a:focus,
    .navbar-default .navbar-nav>li>a:hover {
        background-color: <?php echo $color_prin; ?> !important;
    }
    .pino-chj-contenido-noticia .leer-mas a,
    .pino-chj-contenido-noticia .lead {
      color: <?php echo $color_prin; ?> !important;
    }
    #noticias .titulo {
      color: <?php echo $color_prin; ?> !important;
      border-color: <?php echo $color_prin; ?> !important;
    }
    #footer-menu a, #footer-menu h3 {
      color: <?php echo $color_prin; ?> !important;
    }
    #menu-menu-sidebar {
      background: <?php echo $fondo_sidebar; ?> !important;
    }
    #menu-menu-sidebar .current-menu-item {
      background: <?php echo $color_prin; ?> !important;
    }
    #menu-menu-sidebar .current-menu-item a {
      color: #fff !important;
    }
    #menu-bienvenida .textwidget {
      background: <?php echo $fondo_sidebar; ?> !important;
    }
    .tlp-content .designation {
      color: <?php echo $color_prin; ?> !important;
      font-weight: 700;
    }
    #main-column .attachment .ex p,
    #main-column .post  .ex p,
    #main-column .page .ex p {
      color: <?php echo $color_prin; ?> !important;
    }
    .tituloacademico, h3 {
      color: <?php echo $color_prin; ?> !important;
    }
  </style>
<?php
  }

add_action( 'wp_head', 'estilosEspecificos' );

function postgradoShortcode($atts) {

?>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail" style="min-height:375px;">
            <img src="<?php echo $atts['imagen']?>" alt="<?php echo $atts['nombre']?>">
            <div class="caption">
              <h3><?php echo $atts['nombre']?></h3>
              <p><?php echo $atts['descripcion']?></p>
              <div style="position: absolute; bottom: 25px; width: 80%;"><a href="<?php echo $atts['url']?>" class="pull-right" target="_blank">Ver m&aacute;s &raquo;</a></div>
            </div>
          </div>
        </div>

<?php

}

add_shortcode('sc_postgrado', 'postgradoShortcode');

function _get_shortcodes( $the_content ) {

    $shortcode = [];
    $pattern = get_shortcode_regex();
    preg_match_all('/'.$pattern.'/uis', $the_content, $matches);

    for ( $i=0; $i < 40; $i++ ) {

        if ( isset( $matches[0][$i] ) ) {
           $shortcode[] = $matches[0][$i];
        }

    }

    return $shortcode;

}

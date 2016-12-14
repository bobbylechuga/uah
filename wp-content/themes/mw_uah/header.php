<?php
   /**
    * The theme header
    *
    * @package bootstrap-basic
    */
   ?>
<?php

$URL_SITIO = "http://socialesuah.mentalidadweb.cl";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>>
   <![endif]-->
   <!--[if IE 7]>
   <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>>
      <![endif]-->
      <!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<!--wordpress head-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
     <!--[if lt IE 8]>
     <p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
     <![endif]-->

  <div id="headermenu" class="container-fluid">
     <div class="container">
       <div class="row">
         <div class="col-sm-8">
             <ul id="menu-carrera-bienvenida" class="menu"><li id="menu-item-134" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134"><a href="#">Antropolog&iacute;a</a></li>
                <li id="menu-item-135" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-135"><a href="<?php echo $URL_SITIO; ?>/cipol/">Ciencias Pol&iacute;ticas</a></li>
                <li id="menu-item-191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-191"><a href="<?php echo $URL_SITIO; ?>/geografia/">Geograf&iacute;a</a></li>
                <li id="menu-item-192" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-192"><a href="<?php echo $URL_SITIO; ?>/periodismo/">Periodismo</a></li>
                <li id="menu-item-193" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-193"><a href="#">Sociolog&iacute;a</a></li>
                <li id="menu-item-194" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-194"><a href="#">Trabajo Social</a></li>
                <li id="menu-item-195" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-195"><a href="<?php echo $URL_SITIO; ?>/cisoc/">CISOC</a></li>
             </ul>
         </div>
         <div class="col-sm-1 tex-right">
           <!-- Iconos agregados por jquery -->
           <?php wp_nav_menu( array( 'theme_location' => 'sociales' )); ?>
         </div>
         <div class="col-sm-3">
           <p class="text-right pino-chj-networkname">Facultad de Ciencias Sociales</p>
         </div>
       </div>
     </div>
  </div>
<div class="container">
  <div class="page-container">
     <?php do_action('before'); ?>
     <header role="banner">
        <div class="row row-with-vspace site-branding">
           <div class="col-md-6 site-title">
              <h1 class="site-title-heading">
               <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                 <?php
                  $tituloDelSitio = explode("|", get_bloginfo('description'));
                  echo $tituloDelSitio[0]." <strong>".$tituloDelSitio[1]."</strong>";
                 ?>
               </a>
              </h1>
           </div>
           <div class="col-md-6 page-header-top-right">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
           </div>
        </div>
        <!--.site-branding-->
        <div class="row main-navigation">
           <div>
              <nav class="navbar navbar-default" role="navigation">
                 <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                    <span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                 </div>
                 <div class="collapse navbar-collapse navbar-primary-collapse">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
                    <?php dynamic_sidebar('navbar-right'); ?>
                 </div>
                 <!--.navbar-collapse-->
              </nav>
           </div>
        </div>
        <!--.main-navigation-->
     </header>
	 </div>
</div>

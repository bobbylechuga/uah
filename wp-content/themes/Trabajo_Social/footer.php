<?php
   /**
    * The theme footer
    *
    * @package bootstrap-basic
    */
   ?>
  <!--.site-content-->
<!-- 2 DIV REMOVIDOS -->
<!--.container page-container-->
<!--.container page-container-->
<div id="footer-menu" class="container-fluid  ">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-3">
                  <h3>CARRERA</h3>
                  <ul>
                     <?php wp_nav_menu( array( 'container_class' => 'menu-item', 'theme_location' =>   'primary' ) ); ?>
                  </ul>
               </div>
               <div class="col-md-3">
                  <h3>ADMISIÓN</h3>
                  <ul>
                     <li class="menu-item "><a href="#">Requisitos</a></li>
                     <li class="menu-item "><a href="#">Calendarios</a></li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <h3>POSTGRADOS</h3>
                  <ul>
                     <li class="menu-item "><a href="#">Diplomados</a></li>
                     <li class="menu-item "><a href="#">Magister</a></li>
                     <li class="menu-item "><a href="#">Doctorados</a></li>
                     <li class="menu-item "><a href="#">Educación Continua</a></li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <h3>INVESTIGACIÓN</h3>
                  <ul>
                     <?php wp_nav_menu( array( 'container_class' => 'menu-item', 'theme_location' =>   'primary' ) ); ?>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-3">
                  <h3>ACADÉMICOS</h3>
               </div>
               <div class="col-md-3">
                  <h3>ESTUDIANTES</h3>
               </div>
               <div class="col-md-3">
                  <h3>EXTENSIÓN</h3>
                  <ul>
                     <li class="menu-item "><a href="#">Noticias</a></li>
                     <li class="menu-item "><a href="#">Eventos</a></li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <h3>CONTACTO</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="site-footer" class="container-fluid  ">
   <div class=" container  ">
      <div class="row">
         <div class="col-md-10">
            <p class="address">Universidad Alberto Hurtado - Almirante Barroso 10, Santiago de Chile - Teléfono 56 2 2692 0200</p>
         </div>
         <div class="col-md-2">
            <div id="socialmedia-container" class=" pull-right">
               <img class="banners " src="<?php echo get_template_directory_uri(); ?>/img/behance.png">
               <img class="banners " src="<?php echo get_template_directory_uri(); ?>/img/twitter.png">
               <img class="banners" src="<?php echo get_template_directory_uri(); ?>/img/face.png">
            </div>
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-md-8">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-foot.png">
            <p class="address"></p>
         </div>
         <div class="col-md-4 "><img class="pull-right" src="<?php echo get_template_directory_uri(); ?>/img/cnap.png"></div>
      </div>
   </div>
</div>
<!--wordpress footer-->
<?php wp_footer(); ?>
</body>
</html>

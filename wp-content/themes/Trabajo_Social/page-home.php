<?php
   /*
   Template Name: Inicio Web
   */
   ?>
<?php get_header(); ?>
<?php
   global $wp_query;
   query_posts( array(
   	'showposts' => 3,
   	'order' => 'DESC',
   	'orderby'=>'date',
   	'post_status' => 'publish',
   	'cat'=>4)
   );
   //showposts=3&cat=957&orderby=date&order=DESC
   // query_posts('cat=10&orderby=date&order=desc&posts_per_page=5');
   $i=1;$count = 0;
?>
<div class="container pino-chj-slider-principal">
	<div class="nuevo-slider">
		<div class="item">
		  <div class="col-md-4">.col-md-8</div>
		  <div class="col-md-8 img-slider"><img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=78&txt=830%C3%97370&w=830&h=370"></div>
		</div>
		<div class="item">
		  <div class="col-md-4">2</div>
		  <div class="col-md-8 img-slider"><img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=78&txt=830%C3%97370&w=830&h=370"></div>
		</div>
	</div>
	<div class="row">
	  <div class="col-md-8 col-md-offset-4">
			<div class="controles">
				<a id="siguiente-slider" href="#0"  class="controles-slider"><i class="fa fa-angle-left" aria-hidden="true"></i></a><a id="anterior-slider" href="#1" class="controles-slider"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- /.carousel -->
<div id="4opciones" class="container">
   <div class="row">
      <div class="col-sm-3 ">
         <div class="caja" >
            <img class="img-responsive" src="<?php get_template() ?>/images/box1.jpg">
            <div class="opcionesimg">FACULTAD DE CCSS</div>
         </div>
      </div>
      <div class="col-sm-3">
         <div class="caja">
            <img class="img-responsive" src="<?php get_template() ?>/images/box2.jpg">
            <div class="opcionesimg">INVESTIGACIÓN</div>
         </div>
      </div>
      <div class="col-sm-3">
         <div class="caja">
            <img class="img-responsive" src="<?php get_template() ?>/images/box1.jpg">
            <div class="opcionesimg">ACADÉMICOS</div>
         </div>
      </div>
      <div class="col-sm-3">
         <div class="caja">
            <img class="img-responsive" src="<?php get_template() ?>/images/box2.jpg">
            <div class="opcionesimg">ESTUDIANTES</div>
         </div>
      </div>
   </div>
</div>
<div id="noticias">
   <div class="titulo">EXTENSION</div>
   <div class="container">
      <div class="row">
         <div class="col-sm-4">
            <div class="box1">
               <?php query_posts( 'cat=4&showposts=1' ); ?>
               <?php if (have_posts()): while (have_posts()) : the_post(); ?>
               <h2><a href="<?php the_permalink(); ?>"><?php single_cat_title(); ?></a></h2>
               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               <div class="fecha"><?php echo get_the_date(); ?></div>
               <?php the_excerpt(30); ?>
               <?php endwhile; else: ?>
               <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
               <?php endif; ?>
               <?php comments_template(); ?>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="box2">
               <?php query_posts( 'cat=3&showposts=1' ); ?>
               <?php if (have_posts()): while (have_posts()) : the_post(); ?>
               <h2><a href="<?php the_permalink(); ?>"><?php single_cat_title(); ?></a></h2>
               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               <div class="fecha"><?php echo get_the_date(); ?></div>
               <?php the_excerpt(); ?>
               <?php endwhile; else: ?>
               <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
               <?php endif; ?>
               <?php comments_template(); ?>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="box3">
               <?php query_posts( 'cat=5&showposts=1' ); ?>
               <?php if (have_posts()): while (have_posts()) : the_post(); ?>
               <h2><a  href="<?php the_permalink(); ?>"><?php single_cat_title(); ?></a></h2>
               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               <div class="fecha"><?php echo get_the_date(); ?></div>
               <?php the_excerpt(); ?>
               <?php endwhile; else: ?>
               <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
               <?php endif; ?>
               <?php comments_template(); ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php get_footer();

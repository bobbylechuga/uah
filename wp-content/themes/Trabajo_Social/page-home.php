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
<div class="fondo-gradiente">
	<div class="container pino-chj-slider-principal">
		<div class="nuevo-slider">
			<?php while (have_posts()) : the_post(); ?>
				<div class="item">
				  <div class="col-md-4 pino-chj-contenido-noticia">
						<h3><?php the_title(); ?></h3>
						<p class="lead"><?php echo get_the_excerpt(); ?></p>
						<p><?php echo bajada("30", get_the_content()); ?></p>
						<div class="leer-mas"><a href="<?php the_permalink(); ?>">Seguir leyendo <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></div>
					</div>
				  <div class="col-md-8 img-slider"><img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=78&txt=830%C3%97370&w=830&h=370"></div>
				</div>
			<?php  $i++; endwhile; wp_reset_query();?>
		</div>
		<div class="row">
		  <div class="col-md-8 col-md-offset-4">
				<div class="controles">
					<a id="anterior-slider" href="#0"  class="controles-slider"><i class="fa fa-angle-left" aria-hidden="true"></i></a><a id="siguiente-slider" href="#1" class="controles-slider"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.carousel -->
<?php get_footer(); ?>

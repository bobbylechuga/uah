

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
<!-- slider -->
  <div id="myCarousel" class="carousel slide  fondonaranjo" data-ride="carousel"> 
    <!-- Indicators -->
     <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
  
    

<div id="cajaslider" class="carousel-inner">



  <?php while (have_posts()) : the_post(); ?>
					
					<div  class="item ">

						<img style="width: 100%;height: 320px;" src="<?php the_post_thumbnail_url(); ?>" >
						<div class="carousel-caption">
							
								
<a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>

<p><?php the_excerpt(); ?></p>

						</div>
						
					</div>



					

   <div class="item <?php if ($i == 1) echo 'active'; ?>"> <a  href="<?php echo $link; ?>" ><img class="first-slide" src="<?php echo $image; ?>" alt="<?php echo get_the_title();?>"></a>
  
      </div>
       <?php  $i++; endwhile; ?>
      </div>
      <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </div>
<?php wp_reset_query(); ?>		
  <!-- /.carousel --> 







					<div id="4opciones" class="container">
							  <div class="row">
								  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/box1.jpg"><div class="opcionesimg">FACULTAD DE CCSS</div></div>
									</div>
									<div class="col-sm-3">
									<div class="caja"> <img class="img-responsive" src="<?php get_template() ?>/images/box2.jpg"><div class="opcionesimg">INVESTIGACIÓN</div></div>
									</div>
									<div class="col-sm-3">
									 <div class="caja"><img class="img-responsive" src="<?php get_template() ?>/images/box1.jpg"><div class="opcionesimg">ACADÉMICOS</div></div>
									</div>
									<div class="col-sm-3">
									 <div class="caja"><img class="img-responsive" src="<?php get_template() ?>/images/box2.jpg"><div class="opcionesimg">ESTUDIANTES</div></div>
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
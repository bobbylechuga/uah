<?php
/*
Template Name: 	noticias
*/


get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<div class="container">
<div class="row">

		


				<div class="col-md-12" content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						




 <div class="post">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

  <h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="ex text-justify"><?php the_excerpt(); ?></div>


<div class="container">
  <div class="row col-sm-12">
								 
		
						<?php query_posts( 'cat=4&showposts=6&paged=' . $paged ); ?>
						
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						
						<div class="col-sm-4">
						  <div class="caja_noticia">
						  <?php the_post_thumbnail(medium); ?>
						    <div class="cajontext">
						      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="fecha2"><?php echo get_the_date(); ?>
                  </div>
						    <?php the_excerpt(30); ?>
                </div>
              </div>
            </div>						
            
            <?php endwhile; ?>
  </div>
  <div class="row">
  	<div class="row col-sm-4"></div>						
		<div class="row col-sm-4" style="text-align:center;">						
						<?php next_posts_link(); ?>
            <?php previous_posts_link(); ?>
    </div>        
		<div class="row col-sm-4"></div>										
						<?php else: ?>

						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

						<?php endif; ?>
									
									
	</div>
</div>

 













					</main>
				</div>
	  </div>
	</div>
<?php get_footer(); ?> 
<?php
/*
Template Name: 	Academicos2
*/


get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>

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
								 
		
										
																		


						<?php query_posts( 'cat=4&showposts=6' ); ?>
						
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<div class="col-sm-3 ">
						<div class="caja">
						<?php the_post_thumbnail(medium); ?></div>
						<div class="cajontext">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

						<div class="fecha2"><?php echo get_the_date(); ?></div>
						<?php the_excerpt(30); ?>

</div>
</div>
						<?php endwhile; else: ?>

						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

						<?php endif; ?>
						<?php comments_template(); ?>


										
	
									


				
									
									
	</div>
</div>
 













					</main>
				</div>
	</div>
<?php get_footer(); ?> 
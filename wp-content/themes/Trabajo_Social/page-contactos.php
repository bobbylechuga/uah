<?php
/*
Template Name: contactos
*/

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<div class="container">
	<div class="row">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
		<div class="row pino-chj-contacto">
			<div class="container">
				<?php
					if ( have_posts() ) {
							while ( have_posts() ) {
									the_post();
				?>
									<div class="col-sm-3">
										<div class="caja">
	  									 <img class="img-responsive" src="<?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); echo $thumbnail_src[0]; ?>">
	  									 <div class="opcionesimg"><?php echo get_post( get_post_thumbnail_id() )->post_excerpt; ?></div>
	  								</div>
									</div>
									<div class="col-sm-9">
										<?php the_content(); ?>
									</div>
				<?php
							} // end while
					} // end if
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>

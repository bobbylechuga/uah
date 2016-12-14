<?php
/*
Template Name: 	academicos
*/


get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<div class="container">
	<div class="row pino-chj-ceromargen">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
		<div class="row">
			<?php echo do_shortcode('[tlpteam col="4" member="8" orderby="title" order="ASC" layout="4"]'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

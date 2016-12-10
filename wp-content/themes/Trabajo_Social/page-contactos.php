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
		<div class="row">
			<?php do_shortcode('[contactoMapa direccion="Cienfuegos 46, Santiago de Chile" lat="-33.444942" long="-70.663080"]'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

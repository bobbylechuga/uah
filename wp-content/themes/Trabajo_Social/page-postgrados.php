<?php
/*
Template Name: 	postgrados
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
		<?php 
		$res_doctorados = "";
		$res_maestrias = "";
		$res_diplomados = "";
		$res_cursos = "";
		
		if (have_posts()) : while (have_posts()) : the_post();?>
		
			<?php 
			  $shortcodes = _get_shortcodes( get_the_content() );
			  foreach ( $shortcodes as  $codigo) {
			  	  if (strpos($codigo, "doctorado") != false) {
			  	  	$res_doctorados .= $codigo;
			  	  } else if (strpos($codigo, "magister") != false) {
			  	  	$res_maestrias .= $codigo;
			  	  } else if (strpos($codigo, "diplomado") != false) {
			  	  	$res_diplomados .= $codigo;
			  	  } else if (strpos($codigo, "curso") != false) {
			  	  	$res_cursos .= $codigo;
			  	  }
            
			  	  
			  }
			?>
		<?php endwhile; endif; ?>
		
	</div>
	<?php if( $res_doctorados != "") { ?>
	<div class="row">
		<h3>Doctorados</h3>
		  <hr>
		  <?php do_shortcode( $res_doctorados ); ?>
	</div>
	<?php } ?>
	<?php if ( $res_maestrias != "") { ?>	
	<div class="row">
		  <h3>Maestr&iacute;as</h3>
		  <hr>
		  <?php do_shortcode( $res_maestrias ) ; ?>
	</div>
	<?php } ?>
	<?php if ( $res_diplomados != "") { ?>
	<div class="row">
		<h3>Diplomados</h3>
		  <hr>
		  <?php do_shortcode(  $res_diplomados ); ?>
	</div>	
	<?php } ?>
	<?php if ( $res_cursos != "") { ?>
	<div class="row">
		  <h3>Educaci&oacute;n continua</h3>
		  <hr>
		  <?php do_shortcode(  $res_cursos ); ?>
	</div>	
	<?php } ?>	
	
</div>
<?php get_footer(); ?>

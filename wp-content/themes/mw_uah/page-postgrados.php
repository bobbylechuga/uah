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
			  $contenido = get_the_content();
			  $shortcodes = _get_shortcodes( $contenido );
			  foreach ( $shortcodes as  $codigo ) {
			  	  $sc_vars = shortcode_parse_atts( $codigo );
			  	  if ($sc_vars["tipo"] == "doctorado") {
			  	  	$res_doctorados .= $codigo;
			  	  } else if ($sc_vars["tipo"] == "magister") {
			  	  	$res_maestrias .= $codigo;
			  	  } else if ($sc_vars["tipo"] == "diplomado") {
			  	  	$res_diplomados .= $codigo;
			  	  } else if ($sc_vars["tipo"] == "curso") {
			  	  	$res_cursos .= $codigo;
			  	  }
            
			  	  
			  }
			?>
		<?php endwhile; endif; ?>
		
  <?php if( $res_doctorados != "") { ?>
	<div class="row pino-chj-ceromargen">
		<h3>Doctorados</h3>
		  <hr>
	</div>
	<div class="row">
		  <?php do_shortcode( $res_doctorados ); ?>
	</div>
	<?php } ?>
	<?php if ( $res_maestrias != "") { ?>	
	<div class="row pino-chj-ceromargen">
		  <h3>Maestr&iacute;as</h3>
		  <hr>
	</div>
	<div class="row">
		  <?php do_shortcode( $res_maestrias ) ; ?>
	</div>
	<?php } ?>
	<?php if ( $res_diplomados != "") { ?>
	<div class="row pino-chj-ceromargen">
		<h3>Diplomados</h3>
		<hr>
	</div>
	<div class="row">
		  <?php do_shortcode(  $res_diplomados ); ?>
	</div>	
	<?php } ?>
	<?php if ( $res_cursos != "") { ?>
	<div class="row pino-chj-ceromargen">
		  <h3>Educaci&oacute;n continua</h3>
		  <hr>
	</div>
	<div class="row">
		  <?php do_shortcode(  $res_cursos ); ?>
	</div>	
	<?php } ?>	
	
</div>
<?php get_footer(); ?>

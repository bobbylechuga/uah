<?php
/*
Template Name: 	Bienvenida
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
  <div class="row">

		<div id="affixFrame" class="col-md-3">
			<div class="affix-menu hidden-xs hidden-sm" id="affixMenu">
			  <div  id="menu-bienvenida"><?php get_sidebar('bienvenida'); ?> </div>
        <!--
			  <div class="col-md-3" id="sidebar-bienvenida">
					<strong>Departamento de Trabajo Social </strong><br> <br>


					Cienfuegos 46, Santiago de Chile  <br>
					+56 22 8897410 <br>
					antropologia@uahurtado.cl
			  </div>-->
			</div>
	  </div>


				<div class="col-md-9" content-area" id="main-column">
					<main id="main" class="site-main" role="main">




<?php if (have_posts()) : while (have_posts()) : the_post();?>
 <div class="post">

  <h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="ex text-justify"><?php the_excerpt(); ?></div>
<div class="caja pull-left" style="margin:5px;margin-right: 12px;margin-bottom: 12px;"><?php the_post_thumbnail(medium); ?></div>

  <div class="entrytext">
   <?php the_content('<p class="serif">Leer el resto de esta página &raquo;</p>'); ?>
  </div>
 </div>
 <?php endwhile; endif; ?>








					</main>
				</div>
	</div>
</div>
<?php get_footer(); ?>

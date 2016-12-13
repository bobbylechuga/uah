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
			</div>
	  </div>
				<div class="col-md-9" content-area" id="main-column">
          <main id="main" class="site-main pino-chj-single" role="main">
      			<?php
      			while (have_posts()) {
      				the_post();
      				get_template_part('content', get_post_format());
      				echo "\n\n";
      				bootstrapBasicPagination();
      				echo "\n\n";
      				echo "\n\n";
      			} //endwhile;
      			?>
      		</main>
				</div>
	</div>
</div>
<?php get_footer(); ?>

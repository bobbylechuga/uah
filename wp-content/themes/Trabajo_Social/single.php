<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
  	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<?php get_sidebar('dir'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
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
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 

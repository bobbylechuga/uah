<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<header class="entry-header">
 		
<div class="row" style="margin-bottom: 10px;">
     
        	<div class="col-md-6"><div class="fecha"><?php echo get_the_date('Y-m-d'); ?></div></div>
           
        	<div class="col-md-6 pull-right">REDES </div>
			
  </div>


		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="ex text-justify"><?php the_excerpt(); ?></div>
<div class="caja pull-left" style="margin-bottom:10px;margin-right: 15px;"><?php the_post_thumbnail(medium); ?></div>
		<?php if ('post' == get_post_type()) { ?> 
		
		<?php } //endif; ?> 



	</header><!-- .entry-header -->

	
	<?php if (is_search()) { // Only display Excerpts for Search ?> 
	<div class="entry-summary">
		<?php the_excerpt(); ?> 
		<div class="clearfix"></div>
	</div><!-- .entry-summary -->
	<?php } else { ?> 
	<div class="entry-content text-justify">
		<?php the_content(bootstrapBasicMoreLinkText()); ?> 
		<div class="clearfix"></div>
		<?php 
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?> 
	</div><!-- .entry-content -->
	<?php } //endif; ?> 



	<div id="featured">
	<div class="titulo">Noticias Destacadas</div>
<?php
query_posts('posts_per_page=3&cat=4'); /*1, 2*/
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
<p><?php the_excerpt(); ?></p>
<hr>
<?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
</div>


	<footer class="entry-meta">
		<?php if ('post' == get_post_type()) { // Hide category and tag text for pages on Search ?> 
		<div class="entry-meta-category-tag">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list(__(', ', 'bootstrap-basic'));
				if (!empty($categories_list)) {
			?> 
			<span class="cat-links">
				
			</span>
			<?php } // End if categories ?> 

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list('', __(', ', 'bootstrap-basic'));
				if ($tags_list) {
			?> 
			<span class="tags-links">
				
			</span>
			<?php } // End if $tags_list ?> 
		</div><!--.entry-meta-category-tag-->
		<?php } // End if 'post' == get_post_type() ?> 

		<div class="entry-meta-comment-tools">
			<?php if (! post_password_required() && (comments_open() || '0' != get_comments_number())) { ?> 
			<span class="comments-link"></span>
			<?php } //endif; ?> 

			<?php bootstrapBasicEditPostLink(); ?> 
		</div><!--.entry-meta-comment-tools-->
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
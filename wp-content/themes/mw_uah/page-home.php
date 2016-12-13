<?php
   /*
   Template Name: Inicio Web
   */
   ?>
<?php
  get_header();
  dynamic_sidebar('sidebar-estilos');
?>
<?php
   global $wp_query;
   query_posts( array(
   	'showposts' => 3,
   	'order' => 'DESC',
   	'orderby'=>'date',
   	'post_status' => 'publish',
   	'cat'=>4)
   );
   //showposts=3&cat=957&orderby=date&order=DESC
   // query_posts('cat=10&orderby=date&order=desc&posts_per_page=5');
   $i=1;$count = 0;
?>

  <div class="fondo-gradiente container-fluid">
    <div class="container">
    	<div class="pino-chj-slider-principal">
    		<div class="nuevo-slider">
    			<?php while (have_posts()) : the_post(); ?>
    				<div class="item">
    				  <div class="col-md-4 pino-chj-contenido-noticia">
    						<h3><?php the_title(); ?></h3>
    						<p class="lead"><?php echo get_the_excerpt(); ?></p>
    						<p><?php echo bajada("30", get_the_content()); ?></p>
    						<div class="leer-mas"><a href="<?php the_permalink(); ?>">Seguir leyendo <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></div>
    					</div>
    				  <div class="col-md-8 img-slider"><img class="img-responsive" src="<?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); echo $thumbnail_src[0]; ?>"></div>
    				</div>
    			<?php  $i++; endwhile; wp_reset_query();?>
    		</div>
    		<div class="row">
    		  <div class="col-md-8 col-md-offset-4">
    				<div class="controles">
    					<a id="anterior-slider" href="#0"  class="controles-slider"><i class="fa fa-angle-left" aria-hidden="true"></i></a><a id="siguiente-slider" href="#1" class="controles-slider"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
<div class="container">
  <div id="4opciones" class=" pino-chj-4-opciones">
     <div class="row">
  		 <?php
  		 $gallery = get_post_gallery( get_the_ID(), false );
  			 /* Creo un array con los idsº  */
  			 $gids = explode( ",", $gallery['ids'] );
  			 /* hago un loop para todas las imagenes */
  			 foreach ($gids as $id) {
  					 $attachment = wp_prepare_attachment_for_js($id);
  				?>
  					 <a href="<?php echo $attachment['description']; ?>">
  						 <div class="col-sm-3">
  								<div class="caja">
  									 <img src="<?php echo $attachment['sizes']['full']['url']; ?>" class="img-responsive" alt="<?php echo $attachment['caption']; ?>" />
  									 <div class="opcionesimg"><?php echo $attachment['caption']; ?></div>
  								</div>
  						 </div>
  						</a>
  					 <?php
  			 }
  		 ?>

     </div>
  </div>
  <div id="noticias">
  	<div class="row">
  		<div class="titulo"><i class="fa fa-angle-double-down" aria-hidden="true"></i> EXTENSION</div>
  	</div>
  	<div class="row pino-chj-noticias">
  	<?php
  		$noticiasDestacadas = new WP_Query(
                                array( 'posts_per_page' => '5',
                                       'meta_key' =>
                                       '_is_ns_featured_post',
                                       'meta_value' => 'yes' ));
  		if ( $noticiasDestacadas->have_posts() ) {

  				while ( $noticiasDestacadas->have_posts() ) {
  					$noticiasDestacadas->the_post();
            $cajaimpar = "";
            if($cont%2 <> 0) {
              $cajaimpar = "box-impar";
            }
  	?>
          <div class="col-sm-4 col-md-4">
            <div class="box1 <?php echo $cajaimpar; ?>">
              <p class="pino-chj-nombre-categoria">
                <small><em><?php $cat = get_the_category(); echo '<a href="'.esc_url( get_category_link( $cat[0]->term_id ) ).'">'.$cat[0]->name.'</a>'; ?></em></small>
              </p>
              <h3><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
              <div class="fecha"><?php echo get_the_date(); ?></div>
              <p class="bajada"><?php echo bajada("50", strip_tags(get_the_content())); ?></p>
            </div>
          </div>
  	<?php
            $cont++;
  				}
  			wp_reset_postdata();
  		} else {
  			// no posts found
  		}
  	?>
  	 </div>
  </div>
</div>
<!-- /.carousel -->
<?php get_footer(); ?>

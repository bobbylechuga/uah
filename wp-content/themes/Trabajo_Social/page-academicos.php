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

<div class="row">

		


				<div class="col-md-12" content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						



<?php if (have_posts()) : while (have_posts()) : the_post();?>
 <div class="post">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

  <h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="ex text-justify"><?php the_excerpt(); ?></div>
 <div class="row" >
								  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/academicos/aca11.png"></div>
									<h2 class="nombreacademico">Omar Aguilar</h2>
									<h2 class="tituloacademico">Director Licenciatura en Sociología.</h2>
									<p class="detalleacademico">Doctor en Sociología, Universidad Alberto
Hurtado, Chile.
Master en Sociología, Universidad Católica de
Lovaina, Bélgica.
Licenciado en Sociología, Universidad de
Chile.
									</p>
									</div>
									  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/academicos/aca2.png"></div>
									<h2 class="nombreacademico">Oriana Bernasconi</h2>
									
									<p class="detalleacademico">Doctora en Sociología, London School of
Economics, Inglaterra.
Master en Estudios Culturales y Sociología,
Birmingham University, Inglaterra.
Licenciada en Sociología, P. Universidad
Católica de Chile.
									</p>
									</div>
									  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/academicos/aca3.png"></div>
									<h2 class="nombreacademico">Alexis Cortés</h2>
									<h2 class="tituloacademico">Vicerrector de Integración
y Director de la Dirección
de Cooperación Internacional</h2>
									<p class="detalleacademico">Doctor en Sociología por el Instituto de
Estudos Sociais e Políticos de la Universidad
del Estado de Rio de Janeiro (IESP-UERJ).
Master en Sociología IUPERJ-Brasil.
Licenciado en sociología PUC-Chile.
									</p>
									</div>
									  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/academicos/aca1.png"></div>
									<h2 class="nombreacademico">Francisco Lopez</h2>
									
									<p class="detalleacademico">Doctor en Sociología, Universidad Católica de
																Lovaina, Bélgica.
																Licenciado en Sociología, P. Universidad
																Católica de Chile.
																Licenciado en Filosofía, Universidad del
																Salvador, Argentina.
																Licenciado en Ciencias del Desarrollo, ILADES 
									</p>
									</div>
								</div>


 <div class="row" >
								  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/academicos/aca5.png"></div>
									<h2 class="nombreacademico">Alejandro Pelfini</h2>
									
									<p class="detalleacademico">Doctor en Sociología,
Albert-Ludwigs-Universität Freiburg;
Alemania.
Licenciado en Sociología, Universidad del
Salvador, Buenos Aires, Argentina 
									</p>
									</div>
									  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/academicos/aca6.png"></div>
									<h2 class="nombreacademico">Claudio Ramos</h2>
									<h2 class="tituloacademico">Director Programa de Doctorado
en Sociología</h2>
									<p class="detalleacademico">Doctor en Sociología, University of Texas at
Austin, Estados Unidos.
Master of Arts en Sociología, University of
Texas at Austin, Estados Unidos.
Magíster en Sociología, P. Universidad
Católica de Chile.
Licenciado en Sociología, P. Universidad
Católica de Chile
									</p>
									</div>
									  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/academicos/aca7.png"></div>
									<h2 class="nombreacademico">Carolina Stefoni </h2>
								
									<p class="detalleacademico">Doctora en Sociología, Universidad Alberto
Hurtado, Chile.
Magíster en Estudios Culturales, Universidad
de Birmingham, Inglaterra.
Licenciada en Sociología, P. Universidad
Católica de Chile.
									</p>
									</div>
									  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/academicos/aca8.png"></div>
									<h2 class="nombreacademico">María Paz Trebilcock</h2>
									<h2 class="tituloacademico">Director Licenciatura en Sociología.</h2>
									<p class="detalleacademico">Doctora en Sociología, Pontificia Universidad
Católica de Chile.
Magíster en Sociología, Pontificia Universidad
Católica de Chile.
Socióloga Pontificia Universidad Católica de
Chile, Chile. 
									</p>
									</div>
								</div>


 <div class="row" >
								  <div class="col-sm-3 ">
									<div class="caja" ><img class="img-responsive" src="<?php get_template() ?>/images/academicos/aca9.png"></div>
									<h2 class="nombreacademico">Sebastián Ureta</h2>
								
									<p class="detalleacademico">Ph.D en Media and Communications, London
School of Economics, Inglaterra.
Magíster en Sociología, P. Universidad
Católica de Chile.
Sociólogo, P. Universidad Católica de Chile.
									</p>
									</div>
									  <div class="col-sm-3 ">
									
									</div>
									  <div class="col-sm-3 ">
									
									</div>
									  <div class="col-sm-3 ">
									
									</div>
								</div>



 <?php endwhile; endif; ?>









					</main>
				</div>
	</div>
<?php get_footer(); ?> 
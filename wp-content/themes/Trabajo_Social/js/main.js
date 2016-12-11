/**
 * Main Javascript.
 * This file is for who want to make this theme as a new parent theme and you are ready to code your js here.
 */
 $ = jQuery;

 $(document).ready(function() {
  var owl = $(".nuevo-slider");
  owl.owlCarousel({
    slideSpeed : 300,
    paginationSpeed : 400,
    pagination : false,
    navigation : false,
    singleItem:true
  });
  $("#siguiente-slider").click(function(){
    owl.trigger('owl.next');
  });
  $("#anterior-slider").click(function(){
    owl.trigger('owl.prev');
  });

  /* Correccion clases acedemicos */
  var academicos = $("body").hasClass("page-template-page-academicos");
  if (academicos === true) {
    $(".single-team-area img").addClass("caja");
  }

  
  /* Correcciones header */
  /*
  var titulo = $(".site-title h1 a").text();
  titulo = titulo.split('|');
  var nuevoTitulo =  titulo[0]+' de <strong>'+titulo[1]+'</strong>';
  $(".site-title h1 a").html(nuevoTitulo);
  */

  /* Cambiar menu twitter, facebook por fontawsome */
  $("#menu-redes-sociales-top li").each(function(){
      var red = $(this).text();
      var li = $(this).find("a");
      if(red == "twitter") {
        $(li).html('<i class="fa fa-twitter" aria-hidden="true"></i>');
      }else if (red == "facebook") {
        $(li).html('<i class="fa fa-facebook" aria-hidden="true"></i>');
      }
  });
  
  /* Affix al menu de la banda izquierda */
  
  var bottomPos = 	$('#footer-menu').outerHeight(true) + $('#site-footer').outerHeight(true) + 40;

	$('#affixMenu').affix({
	  offset: {
	    top: $("#affixFrame").offset().top,
	    bottom: bottomPos
	  }
	});
  
});

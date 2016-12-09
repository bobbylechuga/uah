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
});

<?php
  add_shortcode('estilos_principal', 'estilos_shortcode');

  function estilos_shortcode() {
    add_action( 'wp_head', 'estilos' );

  }

  function estilos() {
?>
  <style>
    div {
      border: 1px solid  red;
    }
  </style>
<?php
  }
?>

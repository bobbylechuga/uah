<?php
  add_shortcode('contactoMapa', 'mapaDireccionShortcode');
  function mapaDireccionShortcode($atts) {
    $atributos = shortcode_atts( array(
        'direccion' => 'Direccion',
        'lat'       => 'latitud',
        'long'      => 'longitud'
    ), $atts );

    //echo $atributos['direccion'];
    $htmlMap = '
      <div class="pino-chj-mapa-contacto">
        <div id="map"></div>
      </div>
      <script type="text/javascript">
        function initMap() {
          var myLatLng = {
              lat: '.$atributos['lat'].',
              lng: '.$atributos['long'].'
          };

          var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 16,
            center: myLatLng
          });

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: "'.$atributos['direccion'].'"
          });
        }
      </script>
    ';
    return $htmlMap;
  }

?>

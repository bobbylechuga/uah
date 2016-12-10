<?php
  function mapaDireccionShortcode($atts) {
    $atributos = shortcode_atts( array(
        'direccion' => 'Direccion',
        'lat'       => 'latitud',
        'long'      => 'longitud'
    ), $atts );

    //echo $atributos['direccion'];

  ?>
  <div class="pino-chj-mapa-contacto">
    <div id="map"></div>
  </div>
  <script type="text/javascript">
    function initMap() {
      //-33.444942, -70.663080
      var myLatLng = {
          lat: <?php echo $atributos['lat']; ?>,
          lng: <?php echo $atributos['long']; ?>
      };

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: myLatLng
      });

      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: '<?php echo $atributos['direccion']; ?>'
      });
    }
  </script>
  <?php
  }

  add_shortcode('contactoMapa', 'mapaDireccionShortcode');
?>

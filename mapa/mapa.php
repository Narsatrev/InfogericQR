<!DOCTYPE html>
<html>
  <head>
    <title>Ubicacion</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
      <script src="../frameworks/jquery-2.1.4.js"></script>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 50%;
          width:50%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
      <form id="forma_loc">
        <input type="hidden" id="pos_lat"/>
        <input type="hidden" id="pos_long"/>          
      </form>
    <script>
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
          //Centro de Mexico
        center: {lat: 19.40184 , lng: -99.129639},
        zoom: 16
      });        
      var infoWindow = new google.maps.InfoWindow({map: map});        
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;
        geocodeLatLng(geocoder, map, infowindow);
      }

      function geocodeLatLng(geocoder, map, infowindow) {
                    
        var url_1=document.URL.split("?")[1].split("&");          
        
        var latlng = {lat: parseFloat(url_1[0].split("=")[1]), lng: parseFloat(url_1[1].split("=")[1])};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
              map.setZoom(16);
              var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
              infowindow.setContent(results[1].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No se encontraron resultados par esas coordenadas.');
            }
          } else {
            window.alert('Sucedió un error en la lectura del mapa: ' + status);
          }
        });
      }
        
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvWxQ7F8HVMo-GaDuHLX2SraNiVUifuak	
&callback=initMap"
    async defer></script>
  </body>
</html>
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
        
    ////////HASTA AQUI VA EN BASE.JS    
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };            
            ////enviar a servidor datos de localizacion
            $("#pos_lat").val(pos.lat);
            $("#pos_long").val(pos.lng);
            var lat=$("#pos_lat").val();
            var lng=$("#pos_long").val();
            
            var t= new Date();
            
            $.ajax({
                type:"POST",
                url:"alerta.php",
                data:{
                    'lat':lat,
                    'lng':lng,
                    'tiempo':t
                     },
                cache:false,
                success:function(data){  
                    alert(data);
                }
               });
            ////////HASTA AQUI VA EN BASE.JS
            
          infoWindow.setPosition(pos);
          infoWindow.setContent('Tu lugar zi');
          map.setCenter(pos);
            
            
        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });
      } else {
        handleLocationError(false, infoWindow, map.getCenter());
      }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
                            'Error: El sistema de geolocalizacion fallo..' :
                            'Error: tu browser no soporta geolocalizacion.');
    }  
        
        
        
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvWxQ7F8HVMo-GaDuHLX2SraNiVUifuak	
&callback=initMap"
    async defer></script>
  </body>
</html>
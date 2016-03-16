            function direccion(lat, long) {
                var dir="";
                var latitud_longitud = new google.maps.LatLng(lat, long);
                var geocoder = geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': latitud_longitud 
                }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        console.log(results);
                        if (results[1]) {
                            dir= results[0].formatted_address;
                        }else{
                            dir="La dirección no pudo recuperarse";
                        }
                    }
                });
                return dir;
            }

            ////////DESDE AQUI IMPORTADO DE MAPA.JS
              if(navigator.geolocation){
                  
                navigator.geolocation.getCurrentPosition(function(position) {
                  var pos={
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                  };            
                    ////enviar a servidor datos de localizacion
                    $("#pos_lat").val(pos.lat);
                    $("#pos_long").val(pos.lng);
                    
                    var lat=$("#pos_lat").val();
                    var lng=$("#pos_long").val();
                    
                    var dir= direccion(lat,lng);
                    var nombre=$("#nombre_pac_mapa").val();

                    var t= new Date();
                    $.ajax({
                        type:"POST",
                        url:"mapa/alerta.php",
                        data:{
                            'lat':lat,
                            'lng':lng,
                            'dir':dir,
                            'nombre':nombre,
                            'tiempo':t
                             },
                        cache:false,
                        success(data){
                            console.log("1");
                        }
                       });            
                });
              }
            ////////HASTA AQUI IMPORTADO DE MAPA.JS
            
            
            $("#button_QR").click(function(){
                var qrcode = new QRCode(document.getElementById("qrcode_paciente"), {
                   width : 100,
                   height : 100
                });
                qrcode.makeCode(window.location.href);
            });
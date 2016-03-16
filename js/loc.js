            
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

                    var t= new Date();
                    $.ajax({
                        type:"POST",
                        url:"mapa/alerta.php",
                        data:{
                            'lat':lat,
                            'lng':lng,
                            'tiempo':t
                             },
                        cache:false
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
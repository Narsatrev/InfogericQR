$("#big_button").click(function(){
   $("#take-picture").click();
});

window.upload = function(data_forma) {

var canvas=document.getElementById("canvas_qr");
var ctx=canvas.getContext("2d");

var imagen = new Image;    
imagen.src = URL.createObjectURL(data_forma);
    
imagen.onload = function() {
    var picWidth = this.width;
    var picHeight = this.height;
    var ratio = picHeight/picWidth;

    if (Number(picWidth) < 5000) {
        var newHeight = Math.round(Number(400) * ratio);
    } else {
        return false;
    };
    document.getElementById('canvas_qr').height = newHeight;
    ctx.drawImage(imagen,0,0, 400, newHeight);
};
    
};

function mandarPaginaPaciente(){
    
}

function showInfo(data) {
    if(data=="error decoding QR Code"){
        alert("Su imagen no contiene un código QR. Inténtelo de nuevo");
        location.reload();
    }else{
        if(data.substr(0,3)=='www'||data.substr(0,4)=='http'){
            var id=data.split("=")[1];
            
            $("#id_paciente").val(id);
            console.log($("#id_paciente").val());
            $("#forma_oculta_mistica").attr('action',data);
                        
            ////////DESDE AQUI IMPORTADO DE MAPA.JS
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
                        url:"mapa/alerta.php",
                        data:{
                            'lat':lat,
                            'lng':lng,
                            'tiempo':t
                             },
                        cache:false,
                        success:function(data){  
                            alert(data);
                            //
                            $("#forma_oculta_mistica").submit();
                            //
                        }
                       });            
                });
              }
            ////////DESDE AQUI IMPORTADO DE MAPA.JS
            
                                                                     
//            window.location.replace(data);
        }else{
            alert("El código no es una página web.");    
            location.reload();
        }
    }
}

function traducirQR(f){
	for(var i =0;i<f.length;i++){
        var lector_qr = new FileReader();
        lector_qr.onload = (function(file) {
        return function(e) {
            setTimeout(function(){
                qrcode.callback=showInfo;
                qrcode.decode(e.target.result);
            },250);
        };
        })(f[i]);
        lector_qr.readAsDataURL(f[i]);	
    }
}



    


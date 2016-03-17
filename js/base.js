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
        if((data.indexOf("http")>-1)||(data.indexOf("www")>-1)){
            var id=data.split("=")[1];            
            $("#id_paciente").val(id);
            $("#forma_oculta_mistica").attr('action',data);
            
            $("#forma_oculta_mistica").submit();                                
            
        }else{
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



    


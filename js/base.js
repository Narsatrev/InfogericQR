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
    console.log(data);
    if(data=="error decoding QR Code"){
        alert("Su imagen no contiene un código QR. Inténtelo de nuevo");
    }else{
        if(data.substr(0,3)=='www'||data.substr(0,4)=='http'){
            window.location.replace(data);
        }else{
            alert("El código no es una página web.");    
        }
    }
}

function traducirQR(f){
	for(var i =0;i<f.length;i++){
        var lector_qr=new FileReader();
        lector_qr.onload=(function(f) {
        return function(e){
            qrcode.callback=showInfo;
            qrcode.decode(e.target.result);
        };
        })(f[i]);
        lector_qr.readAsDataURL(f[i]);	
    }
}


    


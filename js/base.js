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
var wdthHghtRatio = picHeight/picWidth;
  console.log('wdthHghtRatio: ' + wdthHghtRatio);

  if (Number(picWidth) < 5000) {
    var newHeight = Math.round(Number(400) * wdthHghtRatio);
  } else {
    return false;
  };
    document.getElementById('canvas_qr').height = newHeight;
    ctx.drawImage(imagen,0,0, 400, newHeight);
};
};
var canvas_qr_decode=$("#canavas_qr");
qrcode.decode(canvas_qr_decode,function(data){
    console.log(data);
});

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


function setImageQR(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_qr_hidden').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}


function translateQR(){
    qrcode.callback = showInfo;
    var qr_img="";
    qrcode.decode(qr_img);    
}

function showInfo(data) {
    alert(data);
}

var file_name="";
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   $('#form_send_qr').on('submit',(function(e) {
        e.preventDefault();
        var data_qr = new FormData(this);
        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:data_qr,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));

    $("#take-picture").on("change", function() {
        console.log($(this).value);
        $("#form_send_qr").submit();
    });


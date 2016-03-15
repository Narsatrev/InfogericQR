<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="frameworks/bootstrap-3.3.4-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="frameworks/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/cuestionario.css" />
        <script src="frameworks/jquery-2.1.4.js"></script>
    </head>
    <body>
        <div id="margen_top" class="margen"></div>
        <form id="registro"  method="post" action="MenuDoctor.php" >
            <div id="div1" class="div-login" style="left:5%;">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Nombre</label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" style="width:100%;" name="nombre_paciente">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Edad</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;" name="edad">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Sexo</label>                        
                    </div>
                    <div class="col-sm-1">
                        F <input type="radio" name="sexo" value="F">                        
                    </div>
                    <div class="col-sm-1">
                        M <input type="radio" name="sexo" value="M">                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Estado Civil</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;" name="edo_civil">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Pago del seguro social</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;" name="seguro">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Escolaridad</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;" name="escolaridad">
                    </div>
                        
                </div>
                <div class="row">
                     <div class="col-sm-2">
                        <a class="home icon" href='MenuDoctor.php'></a>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <a class="next icon" onclick='nav_sig("#div1","#div2")'></a>
                    </div>
                </div>
            </div>
            <div id="div2" class="div-login" >
                 <div class="row">
                    <div class="col-sm-3">
                        <label>Peso</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;" name="peso">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Talla</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;" name="talla">
                    </div>
                        
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Tipo de sangre</label>
                    </div>
                    <div class="col-sm-2" >
                        <select style="width:100%; " name="tipo_sangre">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Tabaquismo</label>                        
                    </div>
                    <div class="col-sm-1">
                        Si <input type="radio" value="Si" name="tabaquismo">                        
                    </div>
                    <div class="col-sm-1">
                        No <input type="radio" value="No" name="tabaquismo">                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Auxiliares</label>                        
                    </div>
                    <div class="col-sm-9">
                        <div class="col-sm-3">
                            <input type="checkbox" name="auxiliares[]" value="Auditivo"> Auditivo                        
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" name="auxiliares[]" value="Visual"> Visual                       
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" name="auxiliares[]" value="De marcha"> De marcha                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Estado Nutricional</label>                        
                    </div>
                    <div class="col-sm-3">
                         <input type="text" style="width:100%;" name="edo_nutricional">           
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Datos médicos relevantes</label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" style="width:100%;" name="datos_medicos"></textarea>
                    </div>
                </div>
                 <div class="row">
                      <div class="col-sm-2">
                        <a class="prev icon" onclick='nav_ant("#div2","#div1")'></a>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <a class="next icon" onclick='nav_sig("#div2","#div3")'></a>
                    </div>
                </div>
            </div>
            <div id="div3" class="div-login">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Alergias</label>
                    </div>
                    <div class="col-sm-2" >
                        <a onclick='nueva_alergia()'>Agregar</a>
                    </div>
                </div>
                <div class="row">
                    <div id="alergias"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Medicamentos</label>
                    </div>
                    <div class="col-sm-2" >
                        <a onclick='nuevo_medicamento()'>Agregar</a>
                    </div>
                </div>
                <div class="row">
                    <div id="medicamentos"></div>
                </div>
                 <div class="row">
                      <div class="col-sm-2">
                        <a class="prev icon" onclick='nav_ant("#div3","#div2")'></a>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <a class="next icon" onclick='nav_sig("#div3","#div4")'></a>
                    </div>
                    </div>
                </div>
            <div id="div4" class="div-login" >
                <div class="row">
                    <div class="col-sm-3">
                        <label>En caso de emergencia contactar a:</label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" style="width:100%;" name="con_emergencia">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Teléfono de cuidador primario</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;" name="tel_primario">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Telefono opcional</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;" name="tel_opcional">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Dirección del paciente</label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" style="width:100%;" name="direccion">
                    </div>
                </div>
                 <div class="row">
                      <div class="col-sm-2">
                        <a class="prev icon" onclick='nav_ant("#div4","#div3")'></a>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <a class="next icon" onclick='nav_sig("#div4","#div5")'></a>
                    </div>
                </div>
            </div>            
             <div id="div5" class="div-login">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Anexos</label>
                    </div>
                    <div class="col-sm-7">
                        <input type=file accept="image/*">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-3">
                        <label>Descripción anexo</label>
                    </div>
                    <div class="col-sm-7">
                        <input type=text name="descripcion" style="width:100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Emergencias Recientes</label>
                    </div>
                    <div class="col-sm-2">
                       <a onclick="nuevo_emergencia()">Agregar</a>
                    </div>
                </div>
                  <div class="row">
                    <div id="emergencias_recientes"></div>
                </div>
                 <div class="row">
                      <div class="col-sm-2">
                        <a class="prev icon" onclick='nav_ant("#div5","#div4")'></a>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <button class="icon checked"></button>
                    </div>
                </div>
            </div>   
        </form>
        <div id="margen_bot" class="margen"></div>
    </body>
</html>
<script>
 $('#registro').submit(function(event){
     event.preventDefault;
     var $forma=$(this),
         nombre_paciente=$forma.find("input[name='nombre_paciente']").val(),
         edad=$forma.find("input[name='edad']").val(),
         sexo=$forma.find("input[name='sexo']").val(),
         edo_civil=$forma.find("input[name='edo_civil']").val(),
         peso=$forma.find("input[name='peso']").val(),
         talla=$forma.find("input[name='talla']").val(),
         tipo_sangre=$forma.find("select[name='tipo_sangre']").val(),
         tabaquismo=$forma.find("input[name='tabaquismo']").val(),
         edo_civil=$forma.find("input[name='edo_civil']").val(),
         auxiliares=$forma.find("input[name='auxiliares[]']:checked"),
         edo_nutricional=$forma.find("input[name='edo_nutricional']").val(),
         alergias=$forma.find("input[name='alergias[]']"),
         medicamentos=$forma.find("input[name='medicamentos[]']"),
        con_emergencia=$forma.find("input[name='con_emergencia']").val(),
         tel_primario=$forma.find("input[name='tel_primario']").val(),
         tel_opcional=$forma.find("input[name='tel_opcional']").val(),
         direccion=$forma.find("input[name='direccion']").val(),
         nombre_medico=$forma.find("input[name='nombre_medico']").val(),
        mail_doctor=$forma.find("input[name='mail_doctor']").val(),
        tel_doctor=$forma.find("input[name='tel_doctor']").val(),
        datos_medicos=$forma.find("input[name='datos_medicos']").val(),
        escolaridad=$forma.find("input[name='escolaridad']").val(),
         seguro_social=$forma.find("input[name='seguro']").val(),
         descripcion=$forma.find("input[name='descripcion']").val(),
         url=$forma.attr('action');
    var aux=[]; 
     var marcha,visual,auditivo;
     var num_med=medicamentos.length;
     var aux2=new Date();
     var medicina="";
     var alergia="";
     var fecha=aux2.getFullYear()+"-"+(aux2.getMonth()+1)+"-"+aux2.getDate();
        auxiliares.each(function(){
                aux.push($(this).val());
            });
     medicamentos.each(function(){
                medicina=medicina+$(this).val()+"*";
            });
     alergias.each(function(){
                alergia=alergia+$(this).val()+"*";
            });
     if($.inArray("Auditivo",aux)>-1){
        auditivo=1;   
     }else{
        auditivo=0;
     }
     if($.inArray("Visual",aux)>-1){
        visual=1;   
     }else{
        visual=0;
     }
     if($.inArray("De marcha",aux)>-1){
        marcha=1;   
     }else{
        marcha=0;
     }
     var auxiliar=auditivo+""+visual+""+marcha;
     var posting=$.post("php/alta_contacto.php",{con_emergencia:con_emergencia,tel_primario:tel_primario,tel_opcional:tel_opcional});
            posting.done(function(data){
                var posting2=$.post("php/alta_paciente.php",        
            {nombre_paciente:nombre_paciente, 
                      edad: edad,
                      sexo: sexo, 
                      tipo_sangre: tipo_sangre,
                      peso:peso,
                      talla:talla,
                      contacto:data,
                      tabaquismo:tabaquismo,
                      escolaridad:escolaridad,
                      edo_civil:edo_civil,
                      num_med:num_med,
                      direccion:direccion,
                      edo_nutricional:edo_nutricional,
                      seguro_social:seguro_social,
                      auxiliar:auxiliar, 
                      descripcion:descripcion,
                      fecha:fecha,
                      datos_medicos:datos_medicos,
                      medicina:medicina,
                      alergia:alergia});
                    posting2.done(function(data2){
                        
            });
    });        
}); 
    function nueva_alergia(){
        $('#alergias').append("<div class='row'><div class='col-sm-1'></div><div class='col-sm-5'><input type='text' name='alergias[]' style='width:100%;'/></div><div class='col-sm-2'><a>Quitar</a></div></div>");
    }
    function nuevo_medicamento(){
        $('#medicamentos').append("<div class='row'><div class='col-sm-1'></div><div class='col-sm-5'><input type='text' name='medicamentos[]' style='width:100%;'/></div><div class='col-sm-2'><a>Quitar</a></div></div>");
    }
    function nuevo_emergencia(){
        $('#emergencias_recientes').append("<div class='row'><div class='col-sm-1'>Fecha: </div><div class='col-sm-3'><input type='date' name='emergencia_fecha[]' style='width:100%;'/></div><div class='col-sm-2'>Descripción: </div><div class='col-sm-3'><input type='text' name='emergencia_descripcion[]' style='width:100%;'/></div><div class='col-sm-2'><a>Quitar</a></div></div>");
    }
    function nav_sig(origen,destino){
        $(origen).animate({left:'-100%'},800);
        $(destino).animate({left:'5%'},800);
    }
    function nav_ant(origen,destino){
        $(origen).animate({left:'200%'},800);
        $(destino).animate({left:'5%'},800);
    }
</script>
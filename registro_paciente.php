<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Frameworks/bootstrap-3.3.4-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="Frameworks/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
        <script src="Frameworks/jquery-2.1.4.js"></script>
    </head>
    <body>
        <form id="registro" method="post" action="">
            <div id="datos_generales" class="div-login" css="visibility:visible;">
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
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <button>-></button>
                    </div>
                </div>
            </div>
            <div id="datos_medicos" class="div-login" style="background:grey;" >
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
                        <select style="width:100%; height:100%;" name="tipo_sangre">
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
                    <div class="col-sm-1">
                        <input type="checkbox" name="auxiliares[]" value="Auditivo">Auditivo                        
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox" name="auxiliares[]" value="Visual">Visual                       
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="auxiliares[]" value="De marcha">De marcha                        
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
                      <div class="col-sm-2">
                        <button><-</button>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <button>-></button>
                    </div>
                </div>
            </div>
            <div id="medicamentos_alergias" class="div-login">
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
                        <button><-</button>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <button>-></button>
                    </div>
                </div>
            </div>
            <div id="contacto" class="div-login" style="background:grey;">
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
                        <button><-</button>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <button>-></button>
                    </div>
                </div>
            </div>            
            <div id="medico" class="div-login">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Médico de cabecera</label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" style="width:100%;" name="nombre_medico">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Contacto</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="email" style="width:100%;" placeholder="e.j nombre@empresa.com" name="mail_doctor">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Teléfono</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;" name="tel_doctor">
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
                        <button><-</button>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <button>-></button>
                    </div>
                </div>
            </div>
             <div id="anexos_emergencias" class="div-login">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Anexos</label>
                    </div>
                    <div class="col-sm-7">
                        <input type=file>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Emergencias Recientes</label>
                    </div>
                    <div class="col-sm-2">
                       <a>Agregar</a>
                    </div>
                </div>
                  <div class="row">
                    <div id="emergencias_recientes"></div>
                </div>
                 <div class="row">
                      <div class="col-sm-2">
                        <button><-</button>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <input type="submit" value="√">
                    </div>
                </div>
            </div>   
        </form>
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
         tel_principal=$forma.find("input[name='tel_principal']").val(),
         tel_opcional=$forma.find("input[name='tel_opcional']").val(),
         direccion=$forma.find("input[name='direccion']").val(),
         nombre_medico=$forma.find("input[name='nombre_medico']").val(),
        mail_doctor=$forma.find("input[name='mail_doctor']").val(),
        tel_doctor=$forma.find("input[name='tel_doctor']").val(),
        datos_medicos=$forma.find("input[name='datos_medicos']").val(),
        escolaridad=$forma.find("input[name='escolaridad']").val(),
         seguridad=$forma.find("input[name='seguridad']").val()
         url=$forma.attr('action');
        var aux=[];
     
     var marcha,visual,auditivo;
     var num_med=medicamentos.length;
        auxiliares.each(function(){
                aux.push($(this).val());
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
     auxiliar=auditivo+""+visual+""+marcha;
        var posting=$.post(url,{nombre_paciente:nombre_paciente,edad:edad,sexo:sexo,tipo_sangre:tipo_sangre,peso:peso,talla:talla,tabaquismo:tabaquismo,escolaridad:escolaridad,estado_civil:edo_civil,numero_medicamentos:num_med,direccion:direccion,contacto:con_emergencia,estado_nutricional:edo_nutricional,seguro_social:seguridad});
            posting.done(function(data){
                alert(data);
            });
     
 });
    function nueva_alergia(){
        $('#alergias').append("<div class='row'><div class='col-sm-1'></div><div class='col-sm-5'><input type='text' name='alergias[]' style='width:100%;'/></div><div class='col-sm-2'><a>Quitar</a></div></div>");
    }
    function nuevo_medicamento(){
        $('#medicamentos').append("<div class='row'><div class='col-sm-1'></div><div class='col-sm-5'><input type='text' name='medicamentos[]' style='width:100%;'/></div><div class='col-sm-2'><a>Quitar</a></div></div>");
    }
</script>
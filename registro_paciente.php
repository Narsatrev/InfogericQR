<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Frameworks/bootstrap-3.3.4-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="Frameworks/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
         <link href="css/bootstrap-toggle.min.css" rel="stylesheet">
    </head>
    <body>
        <form id="registro" method="post" action="#">
            <div id="datos_generales" class="div-login" css="visibility:visible;">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Nombre</label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" style="width:100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Edad</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Sexo</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Estado Civil</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Pago del seguro social</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Peso</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Talla</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;">
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
                        <label>Tipo de sangre</label>
                    </div>
                    <div class="col-sm-2" >
                        <select style="width:100%; height:100%;">
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
                        Si <input type="radio" value="Si">                        
                    </div>
                    <div class="col-sm-1">
                        No <input type="radio" value="No">                        
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
                        <label>Estdo Nutricional</label>                        
                    </div>
                    <div class="col-sm-3">
                         <input type="text" style="width:100%;">           
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
                        <a>Agregar</a>
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
                        <a>Agregar</a>
                    </div>
                </div>
                <div class="row">
                    <div id="alergias"></div>
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
                        <input type="text" style="width:100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Teléfono de cuidador primario</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Telefono opcional</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Dirección del paciente</label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" style="width:100%;">
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
                        <input type="text" style="width:100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Contacto</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="email" style="width:100%;" placeholder="e.j nombre@empresa.com">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <label>Teléfono</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" style="width:100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Datos médicos relevantes</label>
                    </div>
                    <div class="col-sm-7">
                        <textarea style="width:100%;"></textarea>
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
                        <button>√</button>
                    </div>
                </div>
            </div>
            
            
        </form>
    </body>
</html>
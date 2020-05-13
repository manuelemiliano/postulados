<style>

.no-mostrar,
.validaNacionalidad,
.no_mostrar_especialidad,
.no_mostrar_otra_especialidad,
.nomostrarfile{
    display: none;
}
input,
select{
    border-color: blue !important;
}

.checkLabora{
    display: none;
}
.bannerHome{
    display:block;
    width: 100%;          
}
.bannerHome img{    
    width: 55%;
    margin: 0 auto;
    display: block;
    padding-top: 36px;
    padding-bottom: 10px;
}
</style>
<div id="contenedor_principal">
    <div class="bannerHome">          
        <img alt="convocatoria" src="./images/convocatoria.jpg">
    </div>      
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    
                    <div class="kt-portlet__body">
                        
                        <form class="needs-validation" action="{{url('/registro')}}" method="POST" novalidate enctype='multipart/form-data'>
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">1.- Entidad en la que desea aplicar</h3>
                                </div>
                            </div>
                            @csrf
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="">Seleccione la entidad para su registro </label>
<select class="form-control" name="entidadMunicipio" id="selectMunicipio">
                                                                                    <option value="1">AGUASCALIENTES
                                                                                    </option><option value="2">BAJA CALIFORNIA
                                                                                    </option><option value="3">BAJA CALIFORNIA SUR
                                                                                    </option><option value="4">CAMPECHE
                                                                                    </option><option value="5">COAHUILA
                                                                                    </option><option value="6">COLIMA
                                                                                    </option><option value="7">CHIAPAS
                                                                                    </option><option value="8">CHIHUAHUA
                                                                                    </option><option value="9">DURANGO
                                                                                    </option><option value="10">GUANAJUATO
                                                                                    </option><option value="11">GUERRERO
                                                                                    </option><option value="12">HIDALGO
                                                                                    </option><option value="13">JALISCO
                                                                                    </option><option value="14">MÉXICO (ESTADO)
                                                                                    </option><option value="15">MICHOACÁN
                                                                                    </option><option value="16">MORELOS
                                                                                    </option><option value="17">NAYARIT
                                                                                    </option><option value="18">NUEVO LEÓN
                                                                                    </option><option value="19">OAXACA
                                                                                    </option><option value="20">PUEBLA
                                                                                    </option><option value="21">QUERÉTARO
                                                                                    </option><option value="23">SAN LUIS POTOSÍ
                                                                                    </option><option value="24">SINALOA
                                                                                    </option><option value="25">SONORA
                                                                                    </option><option value="26">TABASCO
                                                                                    </option><option value="27">TAMAULIPAS
                                                                                    </option><option value="28">TLAXCALA
                                                                                    </option><option value="29">VERACRUZ
                                                                                    </option><option value="30">YUCATÁN
                                                                                    </option><option value="31">ZACATECAS
                                                                                    </option><option value="51">CDMX
                                                                            </option></select>
                                </div>
                                <div class="col-md-7 mb-3">
                                    <label for="telefono_contacto">Disponibilidad para viajar de forma inmediata a otros municipios.</label>
                                    <select class="form-control" name="disponibilidadViajar">
                                        <option value="1">si</option>
                                        <option value="0">no</option>
                                    </select>
                                </div> 
                                
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="municipio">Municipio</label>
                                    <select class="form-control" name="municipio" id="municipio">
                                        <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">2.- Datos personales</h3>
                                </div>
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="curp">CURP</label>
                                    <input type="text" class="form-control" id="curp" name="curp" value="{{  old('curp','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();" required maxlength="18">
                                    <div class="invalid-feedback">
                                      La curp es requerida
                                    </div>
                                    {!! $errors->first('curp','<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="rfc">RFC con Homoclave</label>
                                    <input type="text" class="form-control" id="rfc" name="rfc" value="{{  old('rfc','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="13">
                                    {!! $errors->first('rfc','<small class="text-danger">:message</small>') !!}
                                </div>
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="nombre">Nombre(s)</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{  old('nombre','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    {!! $errors->first('nombre','<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="aPaterno">Primer apellido</label>
                                    <input type="text" class="form-control" id="aPaterno" name="aPaterno" value="{{  old('aPaterno','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    {!! $errors->first('aPaterno','<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="aMaterno">Segundo Apellido</label>
                                    <input type="text" class="form-control" id="aMaterno" name="aMaterno" value="{{  old('aMaterno','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    {!! $errors->first('aMaterno','<small class="text-danger">:message</small>') !!}
                                </div>
                            </div>  
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="fechaNacimiento">Fecha de nacimiento (DD/MM/AA)</label>
                                    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{  old('fechaNacimiento','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                {!! $errors->first('fechaNacimiento','<small class="text-danger">:message</small>') !!}
                            </div> 
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="nacionalidad">Nacionalidad</label>
                                    <select class="form-control" id="nacionalidad" name="nacionalidad">
                                        <option value="mexicana">Mexicana</option>
                                        <option value="extranjera">Extranjera</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input validaNacionalidad" type="checkbox" value="1" name="condicion" id="condicion">
                                        <label class="form-check-label validaNacionalidad" for="condicion">
                                            Tarjeta de INM temporal con permiso de trabajo
                                        </label>
                                    </div>
                                </div>
                                
                            </div>  
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">3.- Datos profesionales</h3>
                                </div>
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="nivelTecnico">Nivel de escolaridad</label>
                                    <select class="form-control" id="nivelTecnico" name="nivelTecnico">
                                        <optgroup label="Secundaria/Bachillerato con curso afín">
                                            <option value="Camillero">Camillero</option>
                                        </optgroup>
                                        <optgroup label="Bachillerato con carrera técnica">
                                            <option value="Técnico en Inhaloterapia">Técnico en Inhaloterapia</option>
                                            <option value="Técnico Radiólogo">Técnico Radiólogo</option>
                                            <option value="Técnico Laboratorista">Técnico Laboratorista</option>
                                            <option value="Tecnico en Enfermeria con Postecnico">Técnico en Enfermería con Postécnico</option>
                                        </optgroup>
                                        <optgroup label="Licenciatura">
                                            <option value="Médico general">Médico general</option>
                                            <option value="Medico general con especialidad">Médico general con especialidad</option>
                                            <option value="Enfermería">Enfermería</option>
                                            <option value="Enfermeria con especiadidad/postecnico">Enfermería con especiadidad/postécnico</option>
                                        </optgroup>
                                        <optgroup label="Ingeniero">
                                            <option value="Biomédico">Biomédico</option>
                                            <option value="Químico">Químico</option>
                                        </optgroup>

                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="licenciatura" class="no_mostrar_especialidad">Especialidad</label>
                                    <select class="form-control no_mostrar_especialidad" id="especialidad" name="especialidad">
                                      
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="enTramite">
                                        <label class="form-check-label" for="enTramite">En tramite <br> <b>(debe contar con documento de comprobación de cédula en trámite)</b></label>
                                    </div>
                                    <label for="noCedula">Número de Cédula</label>
                                    <input type="text" class="form-control"  id="noCedula" name="noCedula" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="10" disabled>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="otraEspecialidad" class="no_mostrar_otra_especialidad ">Otra especialidad</label>
                                    <input type="text" class="form-control  no_mostrar_otra_especialidad" placeholder="Especificar" id="otraEspecialidad" name="otraEspecialidad" value="" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                            </div>
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">4.- Datos de contacto</h3>
                                </div>
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="telefono">Télefono Particular</label>
                                    <input type="tel" class="form-control" placeholder="" id="telefono" name="telefono" value="" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="celularUno">Telefono Celular</label>
                                    <input type="tel" class="form-control" id="celularUno" name="celularUno" value="{{  old('celularUno','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    {!! $errors->first('celularUno','<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="celularDos">Telefono Celular 2</label>
                                    <input type="tel" class="form-control"  id="celularDos" name="celularDos" value="" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="correo">Correo electrónico</label>
                                    <input type="email" class="form-control" placeholder="" id="correo" name="correo" value="{{  old('correo','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    {!! $errors->first('correo','<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="correovalidar">Correo electrónico 2</label>
                                    <input type="email" class="form-control" placeholder="(Opcional)" id="correovalidar" " value="" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="direccion">Dirección </label>
                                    <input type="text" class="form-control" placeholder="" id="direccion" name="direccion" value="{{  old('direccion','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    {!! $errors->first('direccion','<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="codigoPostal">Codigo postal</label>
                                    <input type="number" class="form-control"  id="codigoPostal" name="codigoPostal" value="{{  old('codigoPostal','') }}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    {!! $errors->first('codigoPostal','<small class="text-danger">:message</small>') !!}
                                </div>
                            </div>
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">5.- Datos laborales</h3>
                                </div>
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="laboraluno">Actualmente labora en otra institución o dependencia</label>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" value="1" id="laboraluno" name="laboraDependencia">
                                    <label class="form-check-label" for="laboraluno">
                                        Si
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" value="0" id="laboraldos" name="laboraDependencia" checked>
                                    <label class="form-check-label" for="laboraldos">
                                        No
                                    </label>
                                    </div>
                                </div>
                                <div>
                                    <span id="mensajelabora" class="no-mostrar">
                                        <b>
                                        En caso de contar con un empleo en otra institución o dependencia deberá presentar la compatibilidad de empleo emitida por la Secretaría de la Función Pública.
                                        </b> 
                                    </span>
                                </div>
                            </div>
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">6.- Subida de archivos en digital</h3>
                                </div>
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="ineFile">INE</label>
                                    <input type="file" class="form-control-file" id="ineFile" name="ineFile" maxlength="18">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="rfcFile">RFC</label>
                                    <input type="file" class="form-control-file" id="rfcFile" name="rfcFile" maxlength=>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="cedulaFile">Cedula</label>
                                    <input type="file" class="form-control-file" id="cedulaFile" name="cedulaFile">
                                </div>
                            </div>  
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-4 mb-3">
                                    <label for="tituloFile">Titulo</label>
                                    <input type="file" class="form-control-file" id="tituloFile" name="tituloFile">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="certificado" class="certificado">Certificado</label>
                                    <input type="file" class="form-control-file certificado" id="certificado" name="certificadoFile">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="diplomaDelCurso" class="diplomaDelCurso certificado">Diploma del curso</label>
                                    <input type="file" class="form-control-file certificado" id="diplomaDelCurso" name="diplomaFile">
                                </div>
                            </div>
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">7.- Manifiesto bajo protesta de decir verdad</h3>
                                </div>
                            </div>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-7 mb-3">
                                    <label for="codigoPostal">Hago constar, bajo protesta de decir verdad que no me encuentro inhabilitado para desempeñarme en el servicio público, que no he ejercido acción legal en contra del Instituto de Seguridad y Servicios Sociales de los Trabajadores de los Estados, ni soy trabajador de base o confianza en el mismo.</label>
                                    <div class="form-check">
                                    <input type="hidden" name="terminosDeLabora" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" id="condicionmanifiesto" name="manifiesto">
                                    <label class="form-check-label" for="condicionmanifiesto">
                                        Acepto
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="registrar" disabled>Registrar</button>
                            <div class="form-row" style="margin-top:20px">
                                <div class="col-md-12 mb-3">
                                   <span style="font-size: 10px; text-align: justify; display: block">
                                        El ISSSTE será responsable del tratamiento de los datos personales proporcionados por usted, los cuales serán protegidos con base en lo dispuesto por la Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados, y demás normatividad que resulte aplicable. Los datos personales recabados serán utilizados para identificar plenamente al participante y verificar que cumple con cada uno de los requisitos mencionados en la convocatoria. Se informa que no se recabarán datos personales sensibles ni se realizarán transferencias de datos personales, salvo aquellas que sean necesarias para atender requerimientos de información de una autoridad competente que se encuentren debidamente fundados y motivados.
                                   </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </div>

<script type="text/javascript">
$(document).ready(function() {

    $('input:radio[name=terminosDeLabora]').click(function() {
        if ($('input:radio[name=terminosDeLabora]:checked').val() == 1){
            validacionEnvioFormulario()
        }else{
            $('#registrar').attr('disabled', 'disabled');
        }       
    });
    function validacionEnvioFormulario(){
        if($("#condicionmanifiesto").is(':checked')){
            $('#registrar').removeAttr('disabled');
        }else{
            $('#registrar').attr('disabled', 'disabled');
        }
    }
    $("#laboraluno").click(function() {
        $("#mensajelabora, .checkLabora").show();
        validacionEnvioFormulario()
    });
    $("#laboraldos").click(function() {
        $("#mensajelabora, .checkLabora").hide();  
        $('#registrar').removeAttr('disabled');
    });
/* Validar nacionalidad */
$('#nacionalidad').change(function() {
        if ($('#nacionalidad').val() == "mexicana")
        {
            $(".validaNacionalidad").css("display", "none");  
        };
        if ($('#nacionalidad').val() == "extranjera")
        {
            $(".validaNacionalidad").css("display", "block");  
        };
    });
/* Validar nacionalidad */
/* Comprobar terminos */
    $('#condicionmanifiesto').click(function() {
        if ($("#condicionmanifiesto").is(':checked') ) {
            validacionEnvioFormulario()
        } else {
            validacionEnvioFormulario()
            
        }
    });
/* Comprobar terminos */
/* Comprobar Cedula */
$('#enTramite').click(function() {
        if ($("#enTramite").is(':checked') ) {
            $('#noCedula').attr('disabled','disabled').val("En tramite");
        } else {
            $('#noCedula').removeAttr('disabled').val("")
        }
    });
/* Comprobar Cedula */
/* Validar nacionalidad */
//noCedula
//especialidad

var tecnicoenEnfermeriaConPostecnico = {
    val1 : 'Medicina Interna',
    val2 : 'Urgencias',
    val3 : 'Cuidados Intensivos',
    val4 : 'Pediatría',
    val5 : 'Quirúrgica',
    val6 : 'Terapia Intensiva',
    val7 : 'Anestesista Certificada'
}
medicoGeneralConEspecialidad = {
    val1: 'Urgencias',
    val2: 'Terapia Intensiva',
    val3: 'Medicina Interna ',
    val4: 'Neumología',
    val5: 'Infectología',
    val6: 'Pediatría',
    val7: 'Anestesiología',

};
enfermeriaConEspeciadidadPostecnico = {
    val1: 'Medicina Interna ',
    val2: 'Cuidados Intensivos',
    val3: 'Pediatría',
    val4: 'Quirúrgica',
    val5: 'Terapia Intensiva',
    val6: 'Anestesista Certificada',
    val7: 'Urgencias',
}
var selectNivelTecnico = $('#especialidad');
$('#nivelTecnico').change(function() {
        if ($('#nivelTecnico').val() == "Tecnico en Enfermeria con Postecnico")
        {
            $(".no_mostrar_especialidad, .no_mostrar_otra_especialidad").css("display", "block");
            $('#especialidad').empty()
            $.each(tecnicoenEnfermeriaConPostecnico, function(val, text) {
                selectNivelTecnico.append(
                    $('<option></option>').val(text).html(text)
                );
            });
            $("#diplomaDelCurso, #certificado").css("display", "block")
            $(".certificado").removeClass('nomostrarfile')
            $("#diplomaDelCurso, #certificado").css("display", "block")
            $("#noCedula").attr('disabled','disabled')
        };
        if ($('#nivelTecnico').val() == "Medico general con especialidad")
        {
            $(".no_mostrar_especialidad, .no_mostrar_otra_especialidad").css("display", "block");
            $('#especialidad').empty()
            $.each(medicoGeneralConEspecialidad, function(val, text) {
                
                selectNivelTecnico.append(
                    $('<option></option>').val(text).html(text)
                );
            }); 
        };
        if ($('#nivelTecnico').val() == "Enfermeria con especiadidad/postecnico")
        {
            $('#especialidad').empty()
            $(".no_mostrar_especialidad, .no_mostrar_otra_especialidad").css("display", "block");
            $.each(enfermeriaConEspeciadidadPostecnico, function(val, text) {
                
                selectNivelTecnico.append(
                    $('<option></option>').val(text).html(text)
                );
            }); 
            
        };
        if ($('#nivelTecnico').val() == "Camillero")
        {
            $('#especialidad').empty()
            $(".no_mostrar_especialidad, .no_mostrar_otra_especialidad").css("display", "none");  
            $("#noCedula").css("display", "").val("Curso relacionado con el puesto avalado por autoridad o institución con firma y sello").attr('disabled','disabled');
            $("#diplomaDelCurso, #certificado").css("display", "block") 
            $(".certificado").removeClass('nomostrarfile')
        };
        if ($('#nivelTecnico').val() == "Técnico en Inhaloterapia")
        {
            $('#especialidad').empty()
            $("#noCedula").css("display", "block").val("").attr('disabled','disabled');
            $(".no_mostrar_especialidad, .no_mostrar_otra_especialidad").css("display", "none");
            $("#diplomaDelCurso, #certificado").css("display", "block")
            $(".certificado").removeClass('nomostrarfile')
            
        };
        if ($('#nivelTecnico').val() == "Técnico Radiólogo")
        {
            $('#especialidad').empty()
            $("#noCedula").css("display", "block").val("").removeAttr('placeholder').attr('disabled','disabled');
            $(".no_mostrar_especialidad, .no_mostrar_otra_especialidad").css("display", "none");
            $("#diplomaDelCurso, #certificado").css("display", "block")
            $(".certificado").removeClass('nomostrarfile')
        };
        if ($('#nivelTecnico').val() == "Técnico Laboratorista")
        {
            $('#especialidad').empty()
            $("#noCedula").css("display", "block").val("").attr('disabled','disabled');
            $(".no_mostrar_especialidad, .no_mostrar_otra_especialidad").css("display", "none");
            $("#diplomaDelCurso, #certificado").css("display", "block")
            $(".certificado").removeClass('nomostrarfile')
        };
        if ($('#nivelTecnico').val() == "Médico general")
        {
            $('#especialidad').empty();
            $("#noCedula").css("display", "block").val("").removeAttr('disabled');
            $(".no_mostrar_especialidad").css("display", "none");
            $("#diplomaDelCurso, #certificado, .nomostrarfile").css("display", "none")
            $(".certificado").addClass('nomostrarfile')
            

        };
        if ($('#nivelTecnico').val() == "Enfermería")
        {
            $('#especialidad').empty();
            $("#noCedula").css("display", "block").val("").removeAttr('disabled');
            $(".no_mostrar_especialidad").css("display", "none");
            $("#diplomaDelCurso, #certificado, .nomostrarfile").css("display", "none")
            $(".certificado").addClass('nomostrarfile')
        };
        if ($('#nivelTecnico').val() == "Biomédico")
        {
            $('#especialidad').empty()
            $("#noCedula").css("display", "block").val("").removeAttr('disabled');
            $(".no_mostrar_especialidad, .no_mostrar_otra_especialidad").css("display", "none");
            $("#diplomaDelCurso, #certificado, .nomostrarfile").css("display", "none")
            $(".certificado").addClass('nomostrarfile')
        };
        if ($('#nivelTecnico').val() == "Químico")
        {
            $('#especialidad').empty()
            $("#noCedula").css("display", "block").val("").removeAttr('disabled');
            $(".no_mostrar_especialidad, .no_mostrar_otra_especialidad").css("display", "none");
            $("#diplomaDelCurso, #certificado, .nomostrarfile").css("display", "none")
            $(".certificado").addClass('nomostrarfile')
        };
    });
/* Validar nacionalidad */
/* Select municipio */
    function renderSelectMunicipios(datosMunicipios){
        var municipios = $('#municipio');
        $('#municipio').empty()
        console.log(datosMunicipios);
        $.each(datosMunicipios, function(val, text) {
            municipios.append(
                $('<option></option>').val(text.municipio).html(text.municipio)
            );
        }); 

    }
    function pedirMunicipoEntidad(Entidad){
        const enditad = Entidad;
            $.get("municipios/"+enditad, function(data, status){
               // console.log(data);
                renderSelectMunicipios(data)
            });
    }

    $('#selectMunicipio').change(function() {
        var entidadSeleccionada = $('#selectMunicipio').val();
        pedirMunicipoEntidad(entidadSeleccionada);
    });


    $(".descartar,.seleccionar").bind('click', function(e) {        
    // console.log(e.currentTarget.dataset);    

    var estadoPostulado = e.currentTarget.dataset.estadopostulado?0:1;
    


    }); 
/* Select municipio */
});
</script>

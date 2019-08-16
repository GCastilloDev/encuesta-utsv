
<label class="control-label"><legend>4.- Numeros telefónicos (con clave lada)</legend></label>

    <br><label>Teléfono fijo</label>
    <input  id="fijo" onchange="return validacionTelefonos('fijo','#btn2');" class="form-control" type="number" name="telFijo" placeholder="Número de teléfono">
    

    <label>Teléfono movil</label>
    <input  id="movil" onchange="return validacionTelefonos('movil','#btn2');" class="form-control" type="number" name="telMovil" placeholder="Número de teléfono"> 

    <label>Radio</label>
    <input  class="form-control" type="text" name="radio" placeholder="Radio">

    <label>Teléfono para recados</label>
    <input  id="recados" onchange="return validacionTelefonos('recados','#btn2');" class="form-control" type="number" name="telRecado" placeholder="Número de teléfono">

   <label>¿De quién es el número para recados?</label>
    <input  class="form-control" type="text" name="propietarioRecado" placeholder="Nombre del Propietario"> 
<br>
<label class="control-label"><legend>5.- Domicilios</legend></label> 
<br>

    <small><label>a) Particular</label></small>
    <p>Calle, número y código postal</p>
    <input  class="form-control" type="text" name="localizacion_a" placeholder="Calle, número y código postal">
    <p>Colonia</p>
    <input  class="form-control" type="text" name="colonia_a" placeholder="Nombre de la colonia">
    <p>Municipio</p>
    <input  class="form-control" type="text" name="municipio_a" placeholder="Nombre del municipio">
    <p>Estado</p>
    <input  class="form-control" type="text" name="estado_a" placeholder="Nombre del estado">
    <p>País</p>
    <input  class="form-control" type="text" name="pais_a" placeholder="Nombre del país">
    <br>
    <small><label>b) Laboral</label></small>
    <p>Calle, número y código postal</p>
    <input  class="form-control" type="text" name="localizacion_b" placeholder="Calle, número y código postal">
    <p>Colonia</p>
    <input  class="form-control" type="text" name="colonia_b" placeholder="Nombre de la colonia">
    <p>Municipio</p>
    <input  class="form-control" type="text" name="municipio_b" placeholder="Nombre del municipio">
    <p>Estado</p>
    <input  class="form-control" type="text" name="estado_b" placeholder="Nombre del estado">
    <p>País</p>
    <input  class="form-control" type="text" name="pais_b" placeholder="Nombre del país">
    <br>
    <small><label>c) Recados</label></small>
    <p>Calle, número y código postal</p>
    <input  class="form-control" type="text" name="localizacion_c" placeholder="Calle, número y código postal">
    <p>Colonia</p>
    <input class="form-control" type="text" name="colonia_c" placeholder="Nombre de la colonia">
    <p>Municipio</p>
    <input class="form-control" type="text" name="municipio_c" placeholder="Nombre del municipio">
    <p>Estado</p>
    <input class="form-control" type="text" name="estado_c" placeholder="Nombre del estado">
    <p>País</p>
    <input class="form-control" type="text" name="pais_c" placeholder="Nombre del país">
    <p>¿De quien es el domicilio para recados?</p>
    <input class="form-control" type="text" name="propietarioRecado_c" placeholder="Nombre del país">
    <br>

<label class="control-label"><legend>6.- Medios electrónicos</legend></label> 

    <br><label>Correo Personal 1</label>
    <input class="form-control" type="text" name="correoPersonal" placeholder="Correo Electronico"> 

    <label>correo laboral/institucional</label>
    <input  class="form-control" type="text" name="correoLaboral" placeholder="Correo Electronico Laboral"> 

    <label>facebook</label>
    <input  class="form-control" type="text" name="facebook" placeholder="Facebook">

    <label>twitter</label>
    <input  class="form-control" type="text" name="twitter" placeholder="Twitter">

    <label>Myspace</label>
    <input  class="form-control" type="text" name="myspace" placeholder="MySpace">

    <label>Skype</label>
    <input  class="form-control" type="text" name="skype" placeholder="Skype">

    <label>Otro</label>
    <input  class="form-control" type="text" name="otro" placeholder="Otro medio electrónicos">
    <br>

    <label class="control-label"><legend>7.- Referencias</legend></label> 

    <br>
    <small><label>a) familiar 1</small>
    <p>Nombre</p>
    <input class="form-control" type="text" name="nombre_familia_1" placeholder="Nombre del Familiar">
    <p>Teléfono</p>
    <input id="familiar1" class="form-control" onchange="return validacionTelefonos('familiar1','#btn2');" type="number" name="telefono_familia_1" placeholder="Número de teléfono">
    <p>Correo electrónico</p>
    <input class="form-control" type="email" name="correo_familia_1" placeholder="Correo electrónico">
    <br>
    <small><label>b) familiar 2</small>
    <p>Nombre</p>
    <input  class="form-control"  type="text" name="nombre_familia_2" placeholder="Nombre del Familiar">
    <p>Teléfono</p>
    <input  id="familiar2" onchange="return validacionTelefonos('familiar2','#btn2');" class="form-control" type="number" name="telefono_familia_2" placeholder="Número de teléfono">
    <p>Correo electrónico</p>
    <input class="form-control" type="email" name="correo_familia_2" placeholder="Correo electrónico">
    <br>
    <small><label>c) Laboral 1</small>
    <p>Nombre</p>
    <input  class="form-control" type="text" name="nombre_laboral_1" placeholder="Nombre del contacto laboral">
    <p>Teléfono</p>
    <input id="laboral1" onchange="return validacionTelefonos('laboral1','#btn2');" class="form-control" type="number" name="telefono_laboral_1" placeholder="Número de teléfono">
    <p>Correo electrónico</p>
    <input  class="form-control" type="email" name="correo_laboral_1" placeholder="Correo electrónico">
    <br>
    <small><label>d) Laboral 2</small>
    <p>Nombre</p>
    <input  class="form-control" type="text" name="nombre_laboral_2" placeholder="Nombre del contacto laboral">
    <p>Teléfono</p>
    <input  id="laboral2" onchange="return validacionTelefonos('laboral2','#btn2');" class="form-control" type="number" name="telefono_laboral_2" placeholder="Número de teléfono">
    <p>Correo electrónico</p>
    <input  class="form-control" type="email" name="correo_laboral_2" placeholder="Correo electrónico">
    <br>
    <small><label>e) Escolar 1</small>
    <p>Nombre</p>
    <input  class="form-control" type="text" name="nombre_escolar_1" placeholder="Nombre del contacto escolar">
    <p>Teléfono</p>
    <input  id="escolar1" onchange="return validacionTelefonos('escolar1','#btn2');" class="form-control"  type="number" name="telefono_escolar_1" placeholder="Número de teléfono">
    <p>Correo electrónico</p>
    <input  class="form-control" type="email" name="correo_escolar_1" placeholder="Correo electrónico">
    <br>
    <small><label>f) Escolar 2</small>
    <p>Nombre</p>
    <input  class="form-control" type="text" name="nombre_escolar_2" placeholder="Nombre del contacto escolar">
    <p>Teléfono</p>
    <input  id="escolar2" onchange="return validacionTelefonos('escolar2','#btn2');" class="form-control" type="number" name="telefono_escolar_2" placeholder="Número de teléfono">
    <p>Correo electrónico</p>
    <input  class="form-control" type="email" name="correo_escolar_2" placeholder="Correo electrónico">


    




 




    

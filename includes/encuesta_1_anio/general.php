<label class="control-label">0.- Genero</label>
    <select name="pg" required="" class="form-control">
        <option>Selecciona tu Genero</option>
        <option value="1">Hombre</option>
        <option value="2">Mujer</option>
    </select>

<label class="control-label">1.- Estado Civil</label>
    <select name="p1" required="" class="form-control">
        <option>Selecciona tu estado civil</option>
        <option value="1">Soltero (incluye divorciado y viudo)</option>
        <option value="2">Casado o unión libre</option>
    </select>

<label class="control-label">2.- Ultimo nivel de escolaridad completo</label>
    <select name="p2" required="" class="form-control">
        <option>Selecciona tu ultimo nivel de estudio</option>
        <option value="1">TSU</option>
        <option value="2">Licencia Profesional en alguna UT</option>
        <option value="3">Licencia Profesional en el extranjero</option>
        <option value="4">Ingeniería en alguna UT</option>
        <option value="5">Ingeniería (otra universidad)</option>
        <option value="6">Posgrado</option>                       
    </select>

<label class="control-label">3. En qué tipo de institución estudias actualmente</label>
    <select onchange="return seleccionarTipoUniversidad();" name="p3" id="tipoUniversidad" class="form-control">
        <option>Selecciona la universidad</option>
        <option value="1">No estudias actualmente</option>
        <option value="2">Una Universidad Tecnológica (distinta a donde estudiaste TSU)</option>
        <option value="3">Universidad pública</option>
        <option value="4">Universidad privada</option>
        <option value="5">Instituto Tecnológico</option> 
        <option value="6">Universidad Politécnica</option>
        <option value="7">UNAD: Universidad Abierta y a Distancia</option>
        <option value="8">Universidad en el extranjero</option>                       
    </select>
    <div id="txtNombreUniversidad">
        <label class="control-label">¿Cuál universidad en el extranjero?</label>
        <input class="form-control" type="text" name="nombreUni" placeholder="Nombre de la universidad"> 
    </div>
    


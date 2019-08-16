<label class="control-label">8.- Al concluir tus estudios en la UT ¿cuánto tiempo tardaste en encontrar tu primer empleo, en empezar a trabajar por tu cuenta o en un negocio familiar o propio?</label>

    <select required="" name="p8" id="8" onchange="return seleccionarPregunta7();" required="" class="form-control">
        <option>Selecciona una opción   </option>
        <option value="1">Ya estabas trabajando y continuaste haciéndolo </option>
        <option value="2">Te contrataron donde hiciste la estadía</option>
        <option value="3">Menos de 3 meses </option>
        <option value="4">De 3 a 6 meses</option>
        <option value="5">Más de 6 meses a un año</option>
        <option value="6">Más de un año</option>
        <option value="7">No has empezado a trabajar</option>
    </select>

<div id="9">
    <label class="control-label">9.- Indica la razón principal por la que no has empezado a trabajar.</label> 

    <select  name="p9" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">No he encontrado empleo con el salario que pretendo</option>
        <option value="2">No he encontrado empleo en el área de mi formación profesional</option>
        <option value="3">No he encontrado empleo de ningún tipo</option>
        <option value="4">Curso licenciatura/ingeniería en otra Institución de Educación Superior</option>
        <option value="5">Por situaciones médicas</option>
        <option value="6">Me ocupo de las labores del hogar</option>
        <option value="7">No he buscado empleo</option>
    </select>
</div>
<!-- el id que esta definido abajo es para ocultar el resto de los cuestionarios
en dado caso que el egresado diga que no trabaja, nt=no trabaja -->
<div id="nt">
    <label class="control-label">10.-¿Cuántos trabajos has tenido desde que egresaste de la UT? </label><small><p>Si desempeñas o desempeñaste más de un trabajo simultáneamente cuenta sólo los principales</p></small>
<input  type="number" name="p10" class="form-control" placeholder="ingrese el número">

<label class="control-label">11. ¿Trabajas actualmente?</label>
<select  name="p11" class="form-control">
    <option>Selecciona una opción</option>
    <option value="1">si</option>
    <option value="2">no</option>
</select>

<label class="control-label">12. ¿Cuál fue el último mes y año que laboraste? </label>
<div class="col-lg-12">
    <div class="col-lg-6">
        <label>Mes</label>
        <input  class="form-control" type="text" maxlength="10" name="mes-p12" placeholder="Ingrese el nombre del mes">
    </div>
    <div class="col-lg-6">
        <label>Año</label>
        <input  class="form-control" type="number" maxlength="4" name="anio-p12" placeholder="Ejemplo: 2018">
    </div>            
</div>

<label class="control-label">13. Marca de la siguiente lista, la razón principal por la que dejaste de trabajar. </label>
<select  name="p13" class="form-control">
    <option>Selecciona una opción</option>
    <option value="1">Renunciaste a tu empleo porque no te convenía</option>
    <option value="2">Fuiste despedido</option>
    <option value="3">Cerró la empresa</option>
    <option value="4">Terminó tu contrato y no se te re contrató</option>
    <option value="5">Estudias actualmente</option>
    <option value="6">Situaciones médicas</option>
    <option value="7">Te ocupas de las labores del hogar</option>
    <option value="8">No está actualmente en tus expectativas</option>
</select>

<label class="control-label">14. ¿Por qué medio obtuviste tu trabajo actual o el último que desempeñaste?</label>

<select name="p14"  class="form-control">
    <option>Selecciona una opción</option>
    <option value="1">Relación con la empresa en la que realizaste en la estadía</option>
    <option value="2">Bolsa de trabajo de la UT</option>
    <option value="3">Creaste tu propio negocio con apoyo de la incubadora de empresas de la UT</option>
    <option value="4">Amigos o familiares</option>
    <option value="5">Invitación de una empresa o institución</option>
    <option value="6">Relaciones hechas en empleos anteriores</option>
    <option value="7">Creaste tu propio negocio con tus medios propios</option>
    <option value="8">Te integraste a un negocio familiar</option>
    <option value="9">Buscaste por tu cuenta en periódicos, internet y/o agencias de empleo</option>
</select>

<label class="control-label">15. ¿En qué medida consideras que influyeron los siguientes factores en la obtención del empleo?</label>
<small><label>a) La buena imagen de la UT</label></small>
<select  name="p15-a" class="form-control">
    <option>Selecciona una opción</option>
    <option value="1">En gran medida</option>
    <option value="2">Bastante</option>
    <option value="3">En alguna medida</option>
    <option value="4">Casi nada</option>
    <option value="5">Nada</option>
</select> 

<small><label>b) La formación recibida.</label></small>
<select  name="p15-b" class="form-control">
    <option>Selecciona una opción</option>
    <option value="1">En gran medida</option>
    <option value="2">Bastante</option>
    <option value="3">En alguna medida</option>
    <option value="4">Casi nada</option>
    <option value="5">Nada</option>
</select> 

<small><label>c) Pertinencia de la carrera con las necesidades de la empresa.</label></small>
<select  name="p15-c" class="form-control">
    <option>Selecciona una opción</option>
    <option value="1">En gran medida</option>
    <option value="2">Bastante</option>
    <option value="3">En alguna medida</option>
    <option value="4">Casi nada</option>
    <option value="5">Nada</option>
</select> 

<small><label>d) Recomendaciones o relaciones personales con la empresa.</label></small>
<select  name="p15-d" class="form-control">
    <option>Selecciona una opción</option>
    <option value="1">En gran medida</option>
    <option value="2">Bastante</option>
    <option value="3">En alguna medida</option>
    <option value="4">Casi nada</option>
    <option value="5">Nada</option>
</select> 

<small><label>e) Habilidades personales para obtener el empleo.</label></small>
<select  name="p15-e" class="form-control">
    <option>Selecciona una opción</option>
    <option value="1">En gran medida</option>
    <option value="2">Bastante</option>
    <option value="3">En alguna medida</option>
    <option value="4">Casi nada</option>
    <option value="5">Nada</option>
</select> 

<small><label>f) Experiencia laboral previa</label></small>
<select  name="p15-f" class="form-control">
    <option>Selecciona una opción</option>
    <option value="1">En gran medida</option>
    <option value="2">Bastante</option>
    <option value="3">En alguna medida</option>
    <option value="4">Casi nada</option>
    <option value="5">Nada</option>
</select> 

<label>16. y 17.- Empresa</label>
<br>
    <div class="col-lg-12">
        <div class="col-lg-6">
            <small><label>Nombre</label></small>
            <input  class="form-control" type="text" name="nombre_16" placeholder="Nombre de la empresa">
            <small><label>Calle</label></small>
            <input  class="form-control" type="text" name="calle_16" placeholder="Nombre de la calle">
            <small><label>Colonia</label></small>
            <input  class="form-control" type="text" name="colonia_16" placeholder="Nombre de la colonia">
        </div>
        <div class="col-lg-6">
            <small><label>Municipio</label></small>
            <input  class="form-control" type="text" name="municipio_16" placeholder="Nombre del municipio">
            <small><label>Estado</label></small>
            <input  class="form-control" type="text" name="estado_16" placeholder="Nombre del estado">
        </div>    
    </div>         

<label>18.- Jefe inmediato</label>
    <div class="col-lg-12">
        <div class="col-lg-6">
            <small><label>Nombre</label></small>
            <input  class="form-control" type="text" name="nombre_18" placeholder="Nombre del jefe">
            <small><label>Puesto</label></small>
            <input  class="form-control" type="text" name="puesto_18" placeholder="Puesto del jefe (Nombre del puesto)">
            <small><label>Teléfono</label></small>
            <input  class="form-control" type="number" name="telefono_18" placeholder="Número telefónico del jefe">
        </div>
        <div class="col-lg-6">
            <small><label>Extención</label></small>
            <input  class="form-control" type="number" name="extencion_18" placeholder="Número de extensión del jefe">
            <small><label>Correo electrónico</label></small>
            <input  class="form-control" type="text" name="correo_18" placeholder="Correo electrónico">
        </div>    
    </div>  

    <label>19.- ¿A qué régimen jurídico pertenece la empresa donde trabajas actualmente o donde trabajaste en tu último empleo?</label>
    <select  name="p19" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Público</option>
        <option value="2">Privado</option>
    </select>

    <label>20. Rama de actividad económica de la empresa en la que trabajas actualmente o tuviste tu último empleo</label>
    <select  name="p20" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Agricultura, ganadería, silvicultura o pesca</option>
        <option value="2">Industria extractiva (minería, petrolera)</option>
        <option value="3">Industria de la construcción</option>
        <option value="4">Industria de transformación, manufactura</option>
        <option value="5">Industria automotriz, aeronáutica</option>
        <option value="6">Tecnologías de la información y comunicación</option>
        <option value="7">Comercio</option>
        <option value="8">Servicios (bancarios, turismo, transporte, etc.)</option>
        <option value="9">Salud</option>
        <option value="10">Educación</option>
        <option value="11">Servicios del estado (oficina de gobierno, aduanas, limpia, seguridad y vigilancia, agua, alcantarillado, alumbrado, etc.</option>
    </select>

    <label>21. Tamaño de la empresa donde trabajas actualmente o donde trabajaste por última vez</label>
    <select  name="p21" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Microempresa (de 1 a 20 empleados)</option>
        <option value="2">Pequeña (de 21 a  50 empleados)</option>
        <option value="3">Mediana (Entre 51 y 100 empleados)</option>
        <option value="4">Grande (más de 100 empleados)</option>
    </select>

    <label>22.. Puesto actual o último que desempeñaste</label>
    <select  name="p22" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Actividades no profesionales (oficios o actividades ajenas a su profesión)</option>
        <option value="2">Operario</option>
        <option value="3">Técnico especializado</option>
        <option value="4">Personal administrativo</option>
        <option value="5">Supervisor (mando medio)</option>
        <option value="6">Director, gerente (mando superior)</option>
        <option value="7">Propietario</option>
    </select>

    <label>23. ¿En qué medida coincide el  trabajo que tienes actualmente o el último que desempeñaste,<b style="color:#17A13E ;">con la formación que recibiste en la UT</b> ? </label>
    <select  name="p23" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Totalmente</option>
        <option value="2">Mucho</option>
        <option value="3">Medianamente</option>
        <option value="4">Poco</option>
        <option value="5">Nada</option>
    </select>

    <label>24.- Tipo de contratación que tienes en tu trabajo actual o último que desempeñaste</label>
    <select  name="p24" class="form-control">
        <option value="1">Selecciona una opción</option>
        <option value="2">Contrato por tiempo determinado</option>
        <option value="3">Contrato por tiempo indeterminado</option>
        <option value="4">Trabajador independiente</option>
        <option value="5">Por obra o proyecto terminado</option>
        <option value="6">Propietario o copropietario del negocio</option>
        <option value="7">Trabajo sin contrato</option>
    </select>

    <label>25.- ¿Por cuantas horas a la semana estás contratado o lo estabas en el último empleo que desempeñaste?</label>
    <select  name="p25" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Hasta 10 horas</option>
        <option value="2">11 a 20 horas </option>
        <option value="3">21 a 30 horas</option>
        <option value="4">31 a 40 horas</option>
        <option value="5">Más de 40 horas</option>
    </select>

    <label>26.- Ingreso mensual aproximado en tu empleo actual o el último que desempeñaste</label>
    <select  name="p26" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">1. Hasta dos salarios mínimos (menos de $4,802)</option>
        <option value="2">2. Más de dos, hasta cuatro salarios mínimos ($4,803 a $9,604)</option>
        <option value="3">3. Más de cuatro, hasta seis salarios mínimos ($9,605 a $14,407)</option>
        <option value="4">4. Más de seis, hasta ocho salarios mínimos ($14,408 a $19,209)</option>
        <option value="5">5. Más de ocho, hasta diez salarios mínimos ($19,210 a $24,012)</option>
        <option value="6">6. Más de diez salarios mínimos (más de $24,012)</option>
    </select>

    <label>27.- a. ¿Cuentas con las siguientes prestaciones? <u>Seguridad social</u></label>
    <select  name="p27a" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-b. ¿Cuentas con las siguientes prestaciones? <u>Goce de días de vacaciones</u></label>
    <select  name="p27b" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-c. ¿Cuentas con las siguientes prestaciones? <u>Prima vacacional</u></label>
    <select  name="p27c" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-d. ¿Cuentas con las siguientes prestaciones? <u>Aguinaldo</u></label>
    <select  name="p27d" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-e. ¿Cuentas con las siguientes prestaciones? <u>Reparto de utilidades</u></label>
    <select  name="p27e" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-f. ¿Cuentas con las siguientes prestaciones? <u>Ropa y herramientas de trabajo</u></label>
    <select  name="p27f" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-g. ¿Cuentas con las siguientes prestaciones? <u>Seguro privado de gastos médicos / vida</u></label>
    <select  name="p27g" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-h. ¿Cuentas con las siguientes prestaciones? <u>Servicios de transporte</u></label>
    <select  name="p27h" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-i. ¿Cuentas con las siguientes prestaciones? <u>Servicios de alimentación</u></label>
    <select  name="p27i" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-j. ¿Cuentas con las siguientes prestaciones? <u>Capacitación</u></label>
    <select  name="p27j" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-k. ¿Cuentas con las siguientes prestaciones? <u>Ingresos Adicionales (bonos de productividad, vales de despensa, opción de horas extras)</u></label>
    <select  name="p27k" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>27.-l. ¿Cuentas con las siguientes prestaciones? <u>Servicios deportivos y recreativos</u></label>
    <select  name="p27l" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>28.- ¿En el  trabajo que desempeñas actualmente o en el último que desempeñaste has tenido o tuviste ascensos?</label>
    <select  name="p28" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>

    <label>29.- ¿Cuánta gente tienes a tu cargo?</label>
    <select  name="p29" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Ninguna</option>
        <option value="2">Dos o Tres</option>
        <option value="3">Cuatro o cinco</option>
        <option value="4">Entre seis y diez</option>
        <option value="5">Más de diez</option>
    </select>

    <label>30.- Desde que egresaste a la fecha ¿Cómo consideras que ha cambiado tu situación económica?</label>
    <select  name="p30" class="form-control">
        <option>Selecciona una opción</option>
        <option value="1">Ha mejorado</option>
        <option value="2">Sin cambio</option>
        <option value="3">Ha emperorado</option>
    </select>

    <label>31. De las siguientes habilidades, indica</label>
    <br>
    <small><label>a) Qué tanto tu trabajo actual o el último que desempeñaste las requirió</label></small>
    <small><label>b) En qué medida la Universidad contribuyó a desarrollarlas</label></small>

    <br>
    
    <div class="col-lg-12">
        <small>a) Aplicar conocimientos específicos de la carrera.</small><br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-a-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-a-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    
    <div class="col-lg-12">
        <small>b) Manejo de equipo y herramientas especializadas.</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-b-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-b-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    

    
    <div class="col-lg-12">
        <small>c) Manejo de equipo de cómputo.</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-c-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-c-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12">
        <small>d) Dominio de idioma extranjero.</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-d-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-d-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>
    <div class="col-lg-12">
        <small>e) Destreza en la comunicación, ya sea oral, escrita o gráfica</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-e-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-e-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12">
        <small>f) Identificar, analizar y encontrar soluciones a problemas</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select name="p31-f-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-f-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12">
        <small>g) Buscar, obtener, procesar y utilizar información</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-g-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-g-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12">
        <small>h) Dirigir a tu grupo de trabajo para el logro de las metas laborales</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-h-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-h-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12">
        <small>i) Colaborar con tus compañeros de trabajo para cumplir metas laborales</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-i-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-i-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12">
        <small>j) Tomar decisiones en busca de mejores resultados en tus actividades laborales</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-j-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-j-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12">
        <small>k) Negociar acuerdo con tus compañeros de trabajo</small>
        <br>
        <div class="col-lg-6">
            <label>a)</label>
            <select  name="p31-k-a" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Frecuentemente</option>
                <option value="2">Ocasionalmente</option>
                <option value="3">Casi nunca</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>b)</label>
            <select  name="p31-k-b" class="form-control">
                <option>Selecciona una opción</option>
                <option value="1">Mucho</option>
                <option value="2">Poco</option>
                <option value="3">Nada</option>
            </select>
        </div>
    </div>

    <label>32. ¿Qué tan satisfecho estás con los siguientes aspectos de tu empleo actual o del último que desempeñaste?</label>
    <br>
    <small><label>a) Las actividades o funciones asignadas.</label></small>
        <select  name="p32-a" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>

        <small><label>b) Oportunidad de aplicar los conocimientos adquiridos en la UT</label></small>
        <select  name="p32-b" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>

        <small><label>c) El reconocimiento profesional </label></small>
        <select  name="p32-c" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>

        <small><label>d) Las oportunidades de desarrollo profesional </label></small>
        <select   name="p32-d" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>

        <small><label>e) Oportunidades de toma de decisiones sobre los procesos </label></small>
        <select  name="p32-e" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>

        <small><label>f) Oportunidad de usar mi creatividad </label></small>
        <select  name="p32-f" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>

        <small><label>g) La Remuneración económica</label></small>
        <select  name="p32-g" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>

        <small><label>h) La oportunidad de dirigir grupos de trabajo</label></small>
        <select  name="p32-h" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>

        <small><label>i) La oportunidad de trabajar en equipo con tus compañeros</label></small>
        <select  name="p32-i" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>

        <small><label>j) La oportunidad de negociar acuerdos</label></small>
        <select  name="p32-j" class="form-control">
            <option>Selecciona una opción</option>
            <option value="1">Totalmente</option>
            <option value="2">Mucho</option>
            <option value="3">Más o menos</option>
            <option value="4">Poco</option>
            <option value="5">Nada</option>
        </select>
</div>
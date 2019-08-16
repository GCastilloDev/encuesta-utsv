<style type="text/css" media="print">
  #jumbotron{
    
}
</style>
<meta charset="utf-8">
<?php 


require_once __DIR__ . '/../vendor/autoload.php';






ob_start();
?>
<link rel="stylesheet" href="css/bootstrap.min.css">

<page backtop="0%" backbottom="0%" backleft="0%" backright="0%">
	

<meta charset="utf-8">
<div id="cabecera">        
	
</div>
<br>
<div class="cuerpo">
  	 <br><br>
  <div>
    
      <P>CUESTIONARIO PARA MEDIR LA SATISFACCIÓN DE LOS EGRESADOS DE LA UNIVERSIDAD</P>
      <p><small>5B Técnico Superior Universitario o Profesional Asociado</small></p>
  </div>
    <div class="container">
      <br>
      
      <table class="table table-hover" style="border-collapse: collapse;
    width: 100%;">
          
          
          <tbody>
            <tr>
              <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Matricula</th>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $_SESSION['matricula']; ?></td>
            </tr>
            <tr>
              <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Nombre del Egresado</th>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $_SESSION['nombre']; ?></td>
            </tr>
            
          </tbody>
        </table>

        
        
        
        <br>
        <br>
        <h2>RESULTADO DE ENCUESTA</h2>
          
           <h3>I. DATOS GENERALES </h3><br>
    <div class="panel panel-header">0. Genero <br><br>                  
        1 Hombre
        <br>                
        2 Mujer
    <div class="panel panel-body">
        <h4>| <?php echo $pg; ?></h4>
    </div> 
    </div>                     
    <div class="panel panel-header">1. Estado Civil <br><br>                  
        1 Soltero (incluye divorciado y viudo)
        <br>                
        2 Casado o unión libre
    </div>
    <div class="panel panel-body">
        <h4>| <?php echo $q1; ?></h4>
    </div> 
    <div class="panel panel-header">
      2. Ultimo nivel de escolaridad completo: <br><br>                    
      1 TSU <br>             
      2 Licencia Profesional en alguna UT <br>               
      3 Licencia Profesional en el extranjero <br>               
      4 Ingeniería en alguna UT <br>              
      5 Ingeniería (otra universidad) <br>               
      6 Posgrado <br>
    </div>
    <div class="panel panel-body">
        <h4>| <?php echo $q2; ?></h4>
    </div>

    <div class="panel panel-header">
      3. En qué tipo de institución estudias actualmente: <br><br>                          
      1 No estudias actualmente <br>             
      2 Una Universidad Tecnológica (distinta a donde estudiaste TSU)<br>  
      3 Universidad pública<br>               
      4 Universidad privada<br>               
      5 Instituto Tecnológico<br>               
      6 Universidad Politécnica<br>               
      7 UNAD: Universidad Abierta y a Distancia<br>               
      8 Universidad en el extranjero<br>
    </div>
    <div class="panel panel-body">
        <h4>| <?php echo $q3; ?></h4>
    </div>

    <div class="panel panel-header">
      3a. ¿Cuál universidad en el extranjero?<br>
    </div>
    <div class="panel panel-body">
        <h4>| <?php echo $q4; ?></h4>
    </div>                   
                      
    <h3>II. DATOS DE CONTACTO</h3><br><br>                              
                    
    <div class="panel panel-header">
     4. Numeros telefónicos (con clave lada):<br>           
        Teléfono fijo: | <strong><?php echo $q5; ?></strong><br>                
        Teléfono movil: | <strong><?php echo $q6; ?></strong><br>                  
        Radio: | <strong><?php echo $q7; ?></strong><br>                 
        Teléfono para recados: | <strong><?php echo $q8; ?></strong>                 
        ¿De quién es el número para recados?: | <strong><?php echo $q9; ?></strong> <br>
    </div>
    <br>
    <div class="panel panel-header">
      5. Domicilios<br>
    </div>
    <div class="panel panel-body">
        a) Particular <br>              
        "Calle, número y código postal": <strong><?php echo $q10; ?></strong><br>    
        Colonia: <strong><?php echo $q11; ?></strong><br>               
        Municipio: <strong><?php echo $q12; ?></strong><br>               
        Estado: <strong><?php echo $q13; ?></strong><br>                
        País: <strong><?php echo $q14; ?></strong>                
           <br>           
        b) Laboral <br>                
        "Calle, número y código postal": <strong><?php echo $q15; ?></strong><br>       
        Colonia: <strong><?php echo $q16; ?></strong><br>               
        Municipio: <strong><?php echo $q17; ?></strong><br>               
        Estado: <strong><?php echo $q18; ?></strong><br>                
        País: <strong><?php echo $q19; ?></strong><br>                
          <br>
        c) Recados <br>                  
        "Calle, número y código postal": <strong><?php echo $q20; ?></strong><br>       
        Colonia: <strong><?php echo $q21; ?></strong><br>               
        Municipio: <strong><?php echo $q22; ?></strong><br>               
        Estado: <strong><?php echo $q23; ?></strong><br>                
        País: <strong><?php echo $q24; ?></strong><br> 
        ¿De quién es el domicilio para recados? <strong><?php echo $q25; ?></strong><br>  
    </div>
            
                                            
    <div class="panel panel-header">
      <br>6. Medios electrónicos <br>                  
        correo personal 1: <strong><?php echo $q26; ?></strong><br>                   
        correo personal 2: <strong><?php echo $q27; ?></strong><br>                  
        correo laboral/institucional: <strong><?php echo $q28; ?></strong><br>          
        facebook: <strong><?php echo $q28; ?></strong><br>                   
        twitter: <strong><?php echo $q29; ?></strong><br>                  
        Myspace: <strong><?php echo $q30; ?></strong><br>                  
        Skype: <strong><?php echo $q31; ?></strong><br>                  
        Otro: <strong><?php echo $q32; ?></strong><br>   
    </div> 
    <br>
    <div class="panel panel-header">
      <br>7. Referencias  <br>                  
                         
      a) Familiar 1 <br>                
      nombre: <strong><?php echo $q33; ?></strong><br>               
      teléfono:  <strong><?php echo $q34; ?></strong><br>                
      correo electrónico: <strong><?php echo $q35; ?></strong><br>                
            <br>          
      b) Familiar 2 <br>                
      nombre: <strong><?php echo $q36; ?></strong><br>                
      teléfono: <strong><?php echo $q37; ?></strong><br>                
      correo electrónico: <strong><?php echo $q38; ?></strong><br>                
           <br>           
      c) Laboral 1 <br>                  
      nombre: <strong><?php echo $q39; ?></strong><br>                
      teléfono: <strong><?php echo $q40; ?></strong><br>                
      correo electrónico: <strong><?php echo $q41; ?></strong><br>                
              <br>        
      d) Laboral 2 <br>               
      nombre: <strong><?php echo $q42; ?></strong><br>                
      teléfono: <strong><?php echo $q43; ?></strong><br>                
      correo electrónico: <strong><?php echo $q44; ?></strong><br>                
             <br>         
      e) Escolar 1 <br>               
      nombre: <strong><?php echo $q45; ?></strong><br>                
      teléfono: <strong><?php echo $q46; ?></strong><br>                
      correo electrónico: <strong><?php echo $q47; ?></strong><br>                
             <br>         
      f) Escolar 2 <br>               
      nombre: <strong><?php echo $q48; ?></strong><br>                
      teléfono: <strong><?php echo $q49; ?></strong><br>                
      correo electrónico: <strong><?php echo $q50; ?></strong><br>    
    </div>             
        <br><br>
        <h3> III. SITUACIÓN LABORAL  </h3>              
    <div class="panel panel-header">
      <br>8. Al concluir tus estudios en la UT ¿cuánto tiempo tardaste en encontrar tu primer empleo, en empezar a trabajar por tu cuenta o en un negocio familiar o propio? <br>  

      1 Ya estabas trabajando y continuaste haciéndolo <br>               
      2 Te contrataron donde hiciste la estadía <br>               
      3 Menos de 3 meses <br>               
      4 De 3 a 6 meses <br>               
      5 Más de 6 meses a un año <br>              
      6 Más de un año <br>               
      7 No has empezado a trabajar <br> 
      <br>
      <strong>| <?php echo $_POST['p8']; ?></strong>     
    </div>                  
        <br>              
    <?php  
      if ($_POST['p8'] == 7) {
    ?>    


    <div class="panel panel-header">
      <br>9. Indica la razón principal por la que no has empezado a trabajar. <br>                         
        1 No he encontrado empleo con el salario que pretendo <br>          
        2 No he encontrado empleo en el área de mi formación profesional <br>   
        3 No he encontrado empleo de ningún tipo <br>           
        4 Curso licenciatura/ingeniería en otra Institución de Educación Superior <br>          
        5 Por situaciones médicas <br>            
        6 Me ocupo de las labores del hogar <br>           
        7 No he buscado empleo <br>           
             
      <strong>| <?php echo $_POST['p9']; ?></strong>     
    </div>
       <h3>Como el egresado contestó que no labora, aqui terminó el cuestionario de la sección laboral.</h3>
    <?php
      }else{
    ?>  
      <div class="panel-header">
        <br>10. ¿Cuántos trabajos has tenido desde que egresaste de la UT?<br>
         <strong>R= <?php echo " " . $_POST['p10']; ?></strong>
      </div>                        
         <br>
      <div class="panel-header">
        <br>11. ¿Trabajas actualmente?<br>
        1 Sí <br>               
        2 No <br>
         <strong>| <?php echo $_POST['p11']; ?></strong>
      </div>                    
          <?php if ($_POST['p9'] == 2){ ?>
                <br>
                <div class="panel-header">
                  <br>12. ¿Cuál fue el último mes y año que laboraste?<br><br>
                  <strong>| <?php echo $_POST['mes-p12'] . " del " . $_POST['anio-p12'] ?></strong>
                </div>
                <br>
                <div class="panel-header">
                  13. Marca de la siguiente lista, la razón principal por la que dejaste de trabajar <br>               
                                   
                  1 Renunciaste a tu empleo porque no te convenía <br>          
                  2 Fuiste despedido <br>           
                  3 Cerró la empresa <br>           
                  4 Terminó tu contrato y no se te re contrató <br>            
                  5 Estudias actualmente <br>           
                  6 Situaciones médicas <br>          
                  7 Te ocupas de las labores del hogar <br>            
                  8 No está actualmente en tus expectativas <br><br>

                  <strong>| <?php echo $_POST['p13'] ; ?></strong>
                </div>
          <?php } ?>           
               <br>       
            <div class="panel-header">
              <br>14. ¿Por qué medio obtuviste tu trabajo actual o el último que desempeñaste?<br>                  
                                
              1 Relación con la empresa en la que realizaste en la estadía <br>           
              2 Bolsa de trabajo de la UT <br>              
              3 Creaste tu propio negocio con apoyo de la incubadora de empresas de la UT <br>                
              4 Amigos o familiares <br>              
              5 Invitación de una empresa o institución <br>              
              6 Relaciones hechas en empleos anteriores <br>              
              7 Creaste tu propio negocio con tus medios propios <br>               
              8 Te integraste a un negocio familiar <br>              
              9 Buscaste por tu cuenta en periódicos, internet y/o agencias de empleo <br>

                  <strong>| <?php echo $_POST['p14'] ; ?></strong>
            </div>

            <div class="panel-header">
              <br>15. ¿En qué medida consideras que influyeron los siguientes factores en la obtención del empleo?<br>                  
              1. En gran medida 2. Bastante 3. En alguna medida   4. Casi nada  5. Nada<br>                  
                                
              a) La buena imagen de la UT <strong>| <?php echo $_POST['p15-a'] ; ?></strong> <br>               
              b) La formación recibida. <strong>| <?php echo $_POST['p15-b'] ; ?></strong> <br>                 
              c) Pertinencia de la carrera con las necesidades de la empresa.  <strong>| <?php echo $_POST['p15-c'] ; ?></strong> <br>                 
              d) Recomendaciones o relaciones personales con la empresa.  <strong>| <?php echo $_POST['p15-d'] ; ?></strong> <br>                  
              e) Habilidades personales para obtener el empleo.  <strong>| <?php echo $_POST['p15-e'] ; ?></strong> <br>                
              f) Experiencia laboral previa  <strong>| <?php echo $_POST['p15-f'] ; ?></strong> <br>

                  
            </div>
            <br>
            <div class="panel-header">
              <br>16. y 17.Empresa <br>                  
              Nombre: <strong><?php echo $_POST['nombre_16']; ?></strong><br> Calle: <strong><?php echo $_POST['calle_16']; ?></strong><br> 
              Colonia: <strong><?php echo $_POST['colonia_16']; ?></strong><br> 
              Municipio: <strong><?php echo $_POST['municipio_16']; ?></strong><br>                 
              Estado: <strong><?php echo $_POST['estado_16']; ?></strong><br>   
            </div>
            <br>
            <div class="panel-header">
              <br>18.- Jefe inmediato<br>                  
              Nombre: <strong><?php echo $_POST['nombre_18']; ?></strong><br> Puesto: <strong><?php echo $_POST['puesto_18']; ?></strong><br> 
              Teléfono: <strong><?php echo $_POST['telefono_18']; ?></strong><br> 
              Extención: <strong><?php echo $_POST['extencion_18']; ?></strong><br>                 
              Correo: <strong><?php echo $_POST['correo_18']; ?></strong><br>   
            </div>
            <br>
            <div class="panel-header">
              <br>19. ¿A qué régimen jurídico pertenece la empresa donde trabajas actualmente o donde trabajaste en tu último empleo?<br>                                        
              1 Público <br>                
              2 Privado <br>
              <strong>| <?php echo $_POST['p19']; ?></strong><br>
            </div>         
            <br>
            <div class="panel-header">
              <br>20. Rama de actividad económica de la empresa en la que trabajas actualmente o tuviste tu último empleo <br>                            
              1 Agricultura, ganadería, silvicultura o pesca <br>              
              2 Industria extractiva (minería, petrolera) <br>              
              3 Industria de la construcción <br>                  
              4 Industria de transformación, manufactura <br>               
              5 Industria automotriz, aeronáutica <br>              
              6 Tecnologías de la información y comunicación <br>               
              7 Comercio <br>               
              8 Servicios (bancarios, turismo, transporte, etc.) <br>           
              9 Salud <br>              
              10  Educación <br>              
              11  Servicios del estado (oficina de gobierno, aduanas, limpia, seguridad y vigilancia, agua, alcantarillado, alumbrado, etc. <br>

              <strong>| <?php echo $_POST['p20']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>21. Tamaño de la empresa donde trabajas actualmente o donde trabajaste por última vez <br>                
                  
              1 Microempresa (de 1 a 20 empleados) <br>               
              2 Pequeña (de 21 a  50 empleados) <br>               
              3 Mediana (Entre 51 y 100 empleados) <br>                
              4 Grande (más de 100 empleados) <br>

              <strong>| <?php echo $_POST['p21']; ?></strong><br>
            </div>               
            <br>
            <div class="panel-header">
              <br>22. Puesto actual o último que desempeñaste                 
              escribe sólo un número de opción en la celda en gris <br>                  
              1 Actividades no profesionales (oficios o actividades ajenas a su profesión) <br>               
              2 Operario <br>               
              3 Técnico especializado <br>              
              4 Personal administrativo <br>              
              5 Supervisor (mando medio) <br>               
              6 Director, gerente (mando superior) <br>               
              7 Propietario <br>

              <strong>| <?php echo $_POST['p22']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>23. ¿En qué medida coincide el  trabajo que tienes actualmente o el último que desempeñaste, con la formación que recibiste en la UT? <br>                  
                                      
              5 Totalmente <br>               
              4 Mucho <br>                
              3 Medianamente <br>                
              2 Poco <br>               
              1 Nada <br>

              <strong>| <?php echo $_POST['p23']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>24. Tipo de contratación que tienes en tu trabajo actual o último que desempeñaste <br>
                
              1 Contrato por tiempo determinado <br>              
              2 Contrato por tiempo indeterminado <br>              
              3 Trabajador independiente <br>               
              4 Por obra o proyecto terminado <br>              
              5 Propietario o copropietario del negocio <br>              
              6 Trabajo sin contrato <br>

              <strong>| <?php echo $_POST['p24']; ?></strong><br>
            </div> 
            <br>
            <div class="panel-header">
              <br>25. ¿Por cuantas horas a la semana estás contratado o lo estabas en el último empleo que desempeñaste? <br>                         
              1 Hasta 10 horas <br>               
              2 11 a 20 horas <br>                 
              3 21 a 30 horas <br>              
              4 31 a 40 horas <br>              
              5 Más de 40 horas <br>

              <strong>| <?php echo $_POST['p25']; ?></strong><br>
            </div> 
            <br>
            <div class="panel-header">
              <br>26. Ingreso mensual aproximado en tu empleo actual o el último que desempeñaste <br>                
                                
              1. Hasta dos salarios mínimos (menos de $4,802) <br>        
              2. Más de dos, hasta cuatro salarios mínimos ($4,803 a $9,604) <br>        
              3. Más de cuatro, hasta seis salarios mínimos ($9,605 a $14,407) <br>         
              4. Más de seis, hasta ocho salarios mínimos ($14,408 a $19,209) <br>        
              5. Más de ocho, hasta diez salarios mínimos ($19,210 a $24,012) <br>        
              6. Más de diez salarios mínimos (más de $24,012) <br>

              <strong>| <?php echo $_POST['p26']; ?></strong><br>
            </div>           
            <br>
            <div class="panel-header">
              <br>27.a ¿Cuentas con las siguientes prestaciones? Seguridad social <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27a']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>27.b ¿Cuentas con las siguientes prestaciones? Goce de días de vacaciones <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27b']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>27.c ¿Cuentas con las siguientes prestaciones? Prima vacacional  <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27c']; ?></strong><br>
            </div> 
            <br>
            <div class="panel-header">
              <br>27.d ¿Cuentas con las siguientes prestaciones? Aguinaldo <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27d']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>27.e ¿Cuentas con las siguientes prestaciones? Reparto de utilidades <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27e']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>27.f ¿Cuentas con las siguientes prestaciones? Ropa y herramientas de trabajo <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27f']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>27.g ¿Cuentas con las siguientes prestaciones? Seguro privado de gastos médicos / vida <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27g']; ?></strong><br>
            </div>  
            <br>
            <div class="panel-header">
              <br>27.h ¿Cuentas con las siguientes prestaciones? Servicios de transporte <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27h']; ?></strong><br>
            </div>               
  
            <br>
            <div class="panel-header">
              <br>27.i ¿Cuentas con las siguientes prestaciones? Servicios de alimentación<br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27i']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>27.j ¿Cuentas con las siguientes prestaciones? Capacitación <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27j']; ?></strong><br>
            </div>          
            <br>
            <div class="panel-header">
              <br>27.k ¿Cuentas con las siguientes prestaciones? Ingresos Adicionales (bonos de productividad, vales de despensa, opción de horas extras)<br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27k']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
              <br>27.l ¿Cuentas con las siguientes prestaciones? Servicios deportivos y recreativos <br>                
                                
              1 Sí <br>               
              2 No <br>

              <strong>| <?php echo $_POST['p27l']; ?></strong><br>
            </div>  
             <br>
            <div class="panel-header">
                <br>28. ¿En el  trabajo que desempeñas actualmente o en el último que desempeñaste has tenido o tuviste ascensos? <br>

                1 Sí <br>               
                2 No <br>

                <strong>| <?php echo $_POST['p28']; ?></strong><br>
            </div> 
            <div class="panel-header">
                <br>29. ¿Cuánta gente tienes a tu cargo?<br>

                1 Ninguna <br>              
                2 Dos o Tres <br>               
                3 Cuatro o cinco <br>               
                4 Entre seis y diez <br>              
                5 Más de diez <br>

                <strong>| <?php echo $_POST['p29']; ?></strong><br>
            </div>                       
            <br>
            <div class="panel-header">
                <br> 30. Desde que egresaste a la fecha ¿Cómo consideras que ha cambiado tu situación económica? <br>

                1 Ha mejorado <br>              
                2 Sin cambio <br>               
                3 Ha emperorado <br>

                <strong>| <?php echo $_POST['p29']; ?></strong><br>
            </div>
            <br>
            <div class="panel-header">
                <br>31. De las siguientes habilidades, indica <br>             
                a) Qué tanto tu trabajo actual o el último que desempeñaste las requirió  <br>
                1. Frecuentemente   2. Ocasionalmente   3. Casi nunca <br><br> b) En qué medida la Universidad contribuyó a desarrollarlas <br>1.Mucho  2.Poco  3.Nada <br><br>        
                                                  
                a) Aplicar conocimientos específicos de la carrera. <br>
                <strong>| a) <?php echo $_POST['p31-a-a']; ?><br>| b) <?php echo $_POST['p31-a-b']; ?> </strong>  <br>              
                b) Manejo de equipo y herramientas especializadas. <br> <strong>| a) <?php echo $_POST['p31-b-a']; ?><br>| b) <?php echo $_POST['p31-b-b']; ?> </strong> <br>         
                c) Manejo de equipo de cómputo. <br><strong>| a) <?php echo $_POST['p31-c-a']; ?><br>| b) <?php echo $_POST['p31-c-b']; ?> </strong> <br>                
                d) Dominio de idioma extranjero. <br><strong>| a) <?php echo $_POST['p31-d-a']; ?><br>| b) <?php echo $_POST['p31-d-b']; ?> </strong> <br>                 
                e) Destreza en la comunicación, ya sea oral, escrita o gráfica <br><strong>| a) <?php echo $_POST['p31-e-a']; ?><br>| b) <?php echo $_POST['p31-e-b']; ?> </strong> <br>                
                f) Identificar, analizar y encontrar soluciones a problemas <br><strong>| a) <?php echo $_POST['p31-f-a']; ?><br>| b) <?php echo $_POST['p31-f-b']; ?> </strong> <br>
                g) Buscar, obtener, procesar y utilizar información <br><strong>| a) <?php echo $_POST['p31-g-a']; ?><br>| b) <?php echo $_POST['p31-g-b']; ?> </strong><br>       
                h) Dirigir a tu grupo de trabajo para el logro de las metas laborales <br><strong>| a) <?php echo $_POST['p31-h-a']; ?><br>| b) <?php echo $_POST['p31-h-b']; ?> </strong> <br>               
                i) Colaborar con tus compañeros de trabajo para cumplir metas laborales <br><strong>| a) <?php echo $_POST['p31-i-a']; ?><br>| b) <?php echo $_POST['p31-i-b']; ?> </strong> <br>                
                j) Tomar decisiones en busca de mejores resultados en tus actividades laborales <br><strong>| a) <?php echo $_POST['p31-j-a']; ?><br>| b) <?php echo $_POST['p31-j-b']; ?> </strong><br>          
                k) Negociar acuerdo con tus compañeros de trabajo <br> <strong>| a) <?php echo $_POST['p31-k-a']; ?><br>| b) <?php echo $_POST['p31-k-b']; ?> </strong><br>
            </div>          
               <br>     
             <div class="panel-header">
                <br>32. ¿Qué tan satisfecho estás con los siguientes aspectos de tu empleo actual o del último que desempeñaste? <br>                                   
                1. Totalmente   2. Mucho   3. Más o menos   4. Poco   5. Nada <br>                
                a) Las actividades o funciones asignadas.<strong>| <?php echo $_POST['p32-a']; ?> </strong><br>               
                b) Oportunidad de aplicar los conocimientos adquiridos en la UT <strong>| <?php echo $_POST['p32-b']; ?> </strong> <br>        
                c) El reconocimiento profesional <strong>| <?php echo $_POST['p32-c']; ?> </strong> <br>                
                d) Las oportunidades de desarrollo profesional <strong>| <?php echo $_POST['p32-d']; ?> </strong><br>             
                e) Oportunidades de toma de decisiones sobre los procesos <strong>| <?php echo $_POST['p32-e']; ?> </strong> <br>
                f) Oportunidad de usar mi creatividad <strong>| <?php echo $_POST['p32-f']; ?> </strong><br>                  
                g) La Remuneración económica <strong>| <?php echo $_POST['p32-g']; ?> </strong><br>                 
                h) La oportunidad de dirigir grupos de trabajo <strong>| <?php echo $_POST['p32-h']; ?> </strong><br>            
                i) La oportunidad de trabajar en equipo con tus compañeros <strong>| <?php echo $_POST['p32-i']; ?> </strong><br>
                j) La oportunidad de negociar acuerdos <strong>| <?php echo $_POST['p32-j']; ?> </strong><br>
             </div>         
                      
            <br><br>
    <?php 
      } 
    ?>                  
                  
      <h3> IV. EVALUACIÓN DE LA FORMACIÓN RECIBIDA </h3>       
              <br><br>    
             <div class="panel-header">
                <br>33. A partir de tu experiencia actual ¿Qué tan adecuados consideras los siguientes aspectos de tu formación profesional?<br>                  
                                       
                1. Totalmente   2. Mucho   3. Más o menos   4. Poco   5. Nada<br>            
                a) Contenidos teóricos.<strong>| <?php echo $_POST['p33-a']; ?> </strong> <br>                
                b) Prácticas en talleres y laboratorios. <strong>| <?php echo $_POST['p33-b']; ?> </strong><br>                 
                c) Prácticas realizadas en las empresas previas a la estadía.<strong>| <?php echo $_POST['p33-c']; ?> </strong> <br>                
                d) Visitas guiadas. <strong>| <?php echo $_POST['p33-d']; ?> </strong><br>                
                e) Estadía. <strong>| <?php echo $_POST['p33-e']; ?> </strong><br>                
                f) Equipo de talleres y laboratorios.<strong>| <?php echo $_POST['p33-f']; ?> </strong> <br>                  
                g) Programa de tutorías. <strong>| <?php echo $_POST['p33-g']; ?> </strong><br>                 
                h) Asesorías de tus profesores. <strong>| <?php echo $_POST['p33-h']; ?> </strong><br>                
                i) Enseñanza de idioma extranjero. <strong>| <?php echo $_POST['p33-i']; ?> </strong><br>                 
                j) Uso de herramientas informáticas (paquetería básica, navegación en internet, correo electrónico) <strong>| <?php echo $_POST['p33-j']; ?> </strong><br>                
                k) Formación integral (actividades culturales y deportivas). <strong>| <?php echo $_POST['p33-k']; ?> </strong><br>                 
                l) Proceso de enseñanza. <strong>| <?php echo $_POST['p33-l']; ?> </strong><br>                 
                m) Servicios de consulta en biblioteca. <strong>| <?php echo $_POST['p33-m']; ?> </strong><br>
             </div>
             <br>         
             <div class="panel-header">
                <br>34. La formación que recibiste en la Universidad Tecnológica ¿Qué tanto, cubrió tus expectativas?<br>                                    
                1 Superior a lo que esperabas <br>                
                2 Tal y como lo esperabas <br>              
                3 Inferior a lo que esperabas <br>

                <strong>| <?php echo $_POST['p34']; ?></strong><br>
             </div>      
             <br>
             <div class="panel-header">
                <br>35. Aconsejarías a un familiar o amigo estudiar en la UT?<br>                 
                                 
                1 Sí <br>                  
                2 No <br> 

                <strong>| <?php echo $_POST['p35']; ?></strong><br>
             </div>      
        
      </div>
    </body>

</div>
</page>
<?php




?>


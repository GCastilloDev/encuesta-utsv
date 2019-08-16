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
    
      <P>CUESTIONARIO PARA MEDIR LA SATISFACCIÓN DE LOS EGRESADOS DE LA UNIVERSIDAD </P>
      <p><small>5B Técnico Superior Universitario o Profesional Asociado</small></p>
  </div>
    <div class="container">
      <br>
      <?php 
        if ($fila = mysqli_fetch_assoc($r)) {
        $matricula = $fila['matricula'];
        $nombre = $fila['nombre'] . " " . $fila['apellido_paterno'] . " " . $fila['apellido_materno'];
        $carrera = $fila['nombre_carrera'];
        $correo = $fila['correo'];
       ?>
      <table class="table table-hover" style="border-collapse: collapse;
    width: 100%;">
          
          
          <tbody>
            <tr>
              <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Matricula</th>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $matricula; ?></td>
            </tr>
            <tr>
              <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Nombre del Egresado</th>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $nombre; ?></td>
            </tr>
            <tr>
              <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Nombre de la Carrera que Egresa</th>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $carrera; ?> </td>
            </tr>
            
            <tr>
              <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Correo Electronico</th>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $correo; ?></td>
            </tr>
          </tbody>
        </table>

        <?php }  ?>

        
        <br>
        <br>
        <h3>RESULTADO DE ENCUESTA</h3>
        

          <div class="panel panel-success">
            <div class="panel-heading">1.- La infraestructura física con que fue dotada la universidad tecnológica, le pareció? 
              <h4>  | <?php echo $q1; ?></h4>
            </div>
            <div class="panel-body">2.- ¿El equipamiento de los laboratorios y talleres le pareció?
              <h4>  | <?php echo $q2; ?></h4>
            </div>
            <div class="panel-heading">3.- ¿Los servicios prestados en la Bolsa de Trabajo de la Universidad como los considera?  
              <h4>  | <?php echo $q3; ?></h4>
            </div>
            <div class="panel-body">4.- ¿El nivel de conocimiento y dominio de los temas mostrado por sus profesores al momento de impartirle la cátedra le pareció?    
              <h4>  | <?php echo $q4; ?></h4>

            </div>
            <div class="panel-heading">5.- ¿El nivel de conocimiento y dominio de parte de los profesores en el manejo de los equipos que se encuentran en los laboratorios y talleres al momento de realizar las prácticas que su carrera requiere, lo considera?    
              <h4>  | <?php echo $q5; ?></h4>
            </div>
            <div class="panel-body">6.- ¿La experiencia práctica adquirida por parte suya, derivado de las visitas, prácticas en las empresas, las considera?       
              <h4>  | <?php echo $q6; ?></h4>

            </div>
            <div class="panel-heading">7.- ¿Cómo considera la preparación académica adquirida?  
              <h4>  | <?php echo $q7; ?></h4>
            </div>
            <div class="panel-body">8.- ¿Considera que la Estadía complementó su preparación para el mercado laboral?     
              <h4>  | <?php echo $q8; ?></h4>

            </div>
            <div class="panel-heading">9.- ¿Cómo califica el modelo educativo del nivel 5B Técnico Superior Universitario o Profesional Asociado?   
              <h4>  | <?php echo $q9; ?></h4>
            </div>
            
            
        </div>
        <br>
            <h3>Comentario</h3>
          <br>
          <div class="col-lg-12">
            <div class="form-group">
              <div style="width: 100%; height: auto; border-color: #57B157;" disabled="" name="comentarios" class="form-control" rows="5" id="comment" > <?php echo $q10; ?>
              </div>
            </div>
          </div>
      </div>
    </body>

</div>
</page>
<?php


require_once('GenerarPdf.php');
function montarPdf($archivo){
  return generarPdf($archivo, '6meses');
}



?>


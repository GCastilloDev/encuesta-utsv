
<?php 
  $consultaEgresados = "SELECT *, usuario.matricula FROM usuario INNER JOIN `egresado` ON egresado.idegresado = usuario.egresado_idegresado INNER JOIN encuesta ON encuesta.idencuesta = egresado.encuesta_idencuesta";


  include_once("../modelo/conexion.php");
  $dbConnect = new DatabaseConnect();
  $cdb = $dbConnect->dbConnectSimple();

  $res = mysqli_query($cdb,$consultaEgresados);
  

  $i = 0;
  $tabla = "";

  while ($row = mysqli_fetch_array($res)) {
    $idEgre = $row['idegresado'];
    $pdf = $row['pdf'];

    $registro = $row['fecha_registro'];

    list($anioR, $mesR, $diaR) = explode("-",$registro);
    $registroString = $diaR . " de " . obtMes($mesR) . " del " . $anioR; 

    $contesto = $row['fecha_contesto'];

    list($anioC, $mesC, $diaC) = explode("-",$contesto);
    $contestoString = $diaC . " de " . obtMes($mesC) . " del " . $anioC; 
    

      
        $btn = "<a onClick='return eliminar(".$row['matricula'].")'><button class='redondo btn btn-danger'><i class='glyphicon glyphicon-trash'></i></button></a>";
        $status = "";

        if ($row['contesto_encuesta'] == 'true') {
            $status = " <a style='cursor: pointer;' href='./encuesta-pdf/$pdf' target='_blank'><img src='./images/bien.png'></a><p style='cursor: pointer; color: blue;' >Listo</p>";
        }else{
            $status = " <img src='./images/pendiente.png'><p>Pendiente</p>";
        }

        $tabla.='{
        "nombre":"'.$row['nombre'].'",  
        "matricula":"'.$row['matricula'].'",
        "fechaRegistro":"'.$registroString.'",
        "fechaContesto":"'.$contestoString.'", 
        "status":"'.$status.'",
        "accion":"'.$btn.'"},';
        $i++;  
  } 

  $tabla =  substr($tabla, 0, strlen($tabla) - 1);

  echo '{"data":['.$tabla.']}';

  

function obtMes($mes){
  if ($mes == '1') {
      return "Enero";
  }else if($mes == '2'){
      return "Febrero";
  }else if($mes == '3'){
      return "Marzo";
  }else if($mes == '4'){
      return "Abril";
  }else if($mes == '5'){
      return "Mayo"; 
  }else if($mes == '6'){
      return "Junio"; 
  }else if($mes == '7'){
      return "Julio";
  }else if($mes == '8'){
      return "Agosto"; 
  }else if($mes == '9'){
      return "Septiembre";
  }else if($mes == '10'){
      return "Octubre"; 
  }else if($mes == '11'){
      return "Nobiembre";
  }else if($mes == '12'){
      return "Diciembre";
  }
  
}

 ?>

  
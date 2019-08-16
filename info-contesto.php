<?php session_start(); 

if (isset($_SESSION['idegresado']) && isset($_SESSION['idUsuario']) && isset($_SESSION['matricula']) && isset($_SESSION['nombre']) ) {

    $idE = $_SESSION['idegresado'];
    $idU = $_SESSION['idUsuario'];
    $mat = $_SESSION['matricula'];
    $nom = $_SESSION['nombre'];

    

}else{

    echo "<script>location.href='index.php';</script>";
    
}

?>  
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/estilo-encuesta.css">
<link rel="stylesheet" type="text/css" href="css/noty.min.css">
<link rel="stylesheet" type="text/css" href="css/toastr.min.css">
<link rel="stylesheet" type="text/css" href="css/alertify.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.noty.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/proton.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/validacionEncuesta1Anio.js"></script>
<script src="js/wizard.js"></script>
<script src="js/toastr.min.js"></script>
<script src="js/noty.min.js"></script>



<!------ Include the above in your HEAD tag ---------->
<div class="text-center page-header">
            <img src="./images/user2.png" align = "right" alt="usuario"/>
            
            <h1>SEGUIMIENTO DE EGRESADOS DE LA UTSV</h1>
        </div>
<div class="jumbotron">
    <div class="container">
        <div class="col-lg-4 ">
            <center><img class="responsive" height="130" src="images/sep.jpg"></center>
        </div>
        <div class="col-lg-3">
            <center>
            <small>SUBSECRETARIA DE EDUACIÒN SUPERIOR.</small>  <br><br>
            <small>COORDINACIÒN GENERAL</small><br>
            <small>DE UNIVERSIDADES TECNOLOGICAS</small><br><br>
            <small>Registro Nacional de Egresados</small><br>
            <small>de las Universidades Tecnologicas</small>
            </center>
        </div>
        <div class="col-lg-4">
                    <center><img class="responsive" height="130" src="images/logo.png"></center>
        </div>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p class="text-justify">
            Muchas gracias por tu cooperación, espere instrucciones del aplicador de la encuesta. <br><br>
            <a data-toggle="modal" data-target="#pdf">Ver Pdf</a>
                    <div class="col-lg-1"><a href="./modelo/cerrar_sesion.php"><button class="btn btn-danger">CERRAR SESIÓN</button></a></div>

        </p>
    </div>
</div>

 

<div id="pdf" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Encuesta</h4>
      </div>
      <div class="modal-body">
        
<iframe  src="./encuesta-pdf/16190490.pdf" style="width: 100%; height: 450px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 







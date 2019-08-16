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
<link rel="stylesheet" type="text/css" href="css/">
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
    <a href="./modelo/cerrar_sesion.php"><button class="btn btn-danger" align="right">Cerrar Sesión</button></a>
            <img src="./images/user2.png"  align = "right" alt="usuario"/>
            
            <h1>UTSV</h1>

        </div>
<div class="jumbotron">
    <div class="container">
        <div class="col-lg-4 ">
            <center><img class="img-responsive"  style="height: 100px;" src="images/sep.jpg"></center>
        </div>
        <div class="col-lg-4">
            <center>
            <small>SUBSECRETARIA DE EDUACIÒN SUPERIOR.</small>  <br><br>
            <small>COORDINACIÒN GENERAL</small><br>
            <small>DE UNIVERSIDADES TECNOLOGICAS</small><br><br>
            <small>Registro Nacional de Egresados</small><br>
            <small>de las Universidades Tecnologicas EGR_15</small>
            </center>
        </div>
        <div class="col-lg-4">
                    <center><img class="img-responsive"  src="images/logo.png"></center>
        </div>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p class="text-justify">
            <b>
                INSTRUCCIONES:                                        
                LEE CUIDADOSAMENTE CADA PREGUNTA ANTES DE CONTESTARLA.                                      
                LAS INSTRUCCIONES ESPECÍFICAS PARA CADA PREGUNTA ESTÁN SOMBREADAS                                       
                ESCRIBE EL NÚMERO QUE CORRESPONDA A TU RESPUESTA EN LAS CELDAS EN GRIS JUNTO A CADA PREGUNTA.                                       
            </b>
        </p>
    </div>
</div>
<div class="jumbotron" style="background: #FFF;">
    <div class="container">
        <p class="text-justify">
                Este cuestionario tiene por objeto recoger información sobre la experiencia laboral y escolar de los egresados de la UT. Su propósito es llevar a cabo un proceso permanente de revisión de la pertinencia de los planes y programas de estudio respecto a las demandas y requerimientos del mercado laboral. Las respuestas que tú proporciones son fundamentales para que esta tarea pueda cumplirse sobre la base de un conocimiento de la realidad educativa y ocupacional a la que el egresado se enfrenta.
                <br><br>
                Por favor contesta todas las preguntas de manera veraz. La información recabada tendrá un carácter estrictamente institucional. Te agradecemos de antemano el apoyo que prestes a la presente encuesta.                                  
        </p>
    </div>
</div>


          
<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Datos Generales</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Datos del Contacto</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Situacion Laboral</p>
        </div>
         <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Evaluación de la formación recibida</p>
        </div>
        
    </div>
</div>
<form  action="modelo/pEncuesta.php" method="post">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
            <div class="form-group">
                <h3> DATOS GENERALE S</h3>
                <div class="col-md-8">
                    <?php include_once('includes/encuesta_1_anio/general.php'); ?>
                        <br>
                        <button id="btn1" class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>    
                </div> 
            </div>
            
                
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> DATOS DEL CONTACTO</h3>
                <div class="col-md-8">
                    <?php include_once('includes/encuesta_1_anio/contacto.php'); ?>
                    <br>
                    <button id="btn2" class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div> 

            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> SITUACIÓN LABORAL</h3>
                <div class="col-md-8">
                    <?php include_once('includes/encuesta_1_anio/laboral.php'); ?>
                    <br>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>    
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Evaluación de la formación recibida</h3>
                <div class="col-md-8">
                    <?php include_once('includes/encuesta_1_anio/formacion_recibida.php'); ?>
                    
                <input type="submit" name="btnFinalizar" class="btn btn-success btn-lg pull-right" value="Finalizar">
                </div>


            </div>

            </div>
        </div>
        </form>
    </div>







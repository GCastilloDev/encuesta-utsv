<?php

session_start();

if (isset($_SESSION['idegresado']) && isset($_SESSION['idUsuario']) && isset($_SESSION['matricula']) && isset($_SESSION['nombre'])) {
    $idE = $_SESSION['idegresado'];
    $idU = $_SESSION['idUsuario'];
    $mat = $_SESSION['matricula'];
    $nom = $_SESSION['nombre'];
    $apPaterno = $_SESSION['apPaterno'];
    $apMaterno = $_SESSION['apMaterno'];
    $psw = $_SESSION['psw'];
    $encuesta_seis_meses = $_SESSION['encuesta_seis_meses'];
    $encuesta_un_anio = $_SESSION['encuesta_un_anio'];
} else {
    echo "<script>location.href='index.php';</script>";
}
?>  
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet">

    <title>UTSV | <?php echo $mat; ?> </title>
</head>

<body class="bg-light">

    <nav class="bg-success">
        <div class="container">

            <div class="row" style="padding-top: 10px;">
                <div class="col-12 text-center">
                    <img style="width: 180px;" class="img-responsive text-center" src="images/log-utsv-blanco.png"
                        alt="" />
                </div>
                <div class="col-12 text-center text-white" style="margin-top:10px">
                    <h4>Seguimiento de egresados de la Universidad Tecnologica del Sureste de Veracruz</h4>
                </div>

            </div>
        </div>

        <div class="row col-12 bg-success" style="padding: 0; margin: 0; height: 5px;">
        </div>
    </nav>

    <div class="container" style="margin-top:10px; margin-bottom: 10px">
        <div class="row">
            <div class="col-8">
                <h2>Bienvenido, <?php echo $nom.' '.$apPaterno.' '.$apMaterno; ?>!</h2>
            </div>
            <div class="col-4 text-right" style="padding: 0">
                <button type="button" onClick="window.location = './modelo/cerrar_sesion.php'"
                    class="btn btn-outline-danger btn-lg"><i class="fa fa-sign-out"></i> Cerrar Sesión</button>

            </div>
        </div>
    </div>

    <div class="container" style="margin-top:10px; margin-bottom: 10px;">
        <div class="row">
            <div class="col-4">
                <p class="text-center">
                    Encuesta satisfacción (6 meses):
                </p>
                <button type="button" class="btn btn-info btn-lg btn-block"

                onClick="window.location = 'Registro6meses.php?matricula=<?php echo $mat?>'"
                <?php if (strcmp($encuesta_seis_meses, 'false') == 0) {
    echo 'disabled';
}
                ?>
                >Contestar</button>
            </div>
            <div class="col-4">
                <p class="text-center">
                    Encuesta general (1 año):
                </p>
                <button type="button" class="btn btn-info btn-lg btn-block" 
                onClick="window.location = 'RegistroAnio.php?matricula=<?php echo $mat?>'"
                <?php if (strcmp($encuesta_un_anio, 'false') == 0) {
                    echo 'disabled';
                }
                ?>
                >Contestar</button>
            </div>
            <div class="col-4">
                <p class="text-center">
                    ¿Desea modificar sus datos?
                </p>
                <button type="button" class="btn btn-info btn-lg btn-block" onClick="activarCampos();">Modificar</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-top:30px; margin-bottom:50px">
                <form action="modelo/atualizarAlumnoDashboard.php" method="post">
                    <div class="form-group" style="display:none;">
                        <label for="exampleInputEmail1"> asdas </label>
                        <input type="text" name="idU" class="form-control" id=""
                           value="<?php echo $idU ?>" >
                    </div>
                    <div class="form-group" style="display:none;">
                        <label for="exampleInputEmail1"> asdads </label>
                        <input type="text" name="idE" class="form-control" id=""
                        value="<?php echo $idE ?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Matricula:</label>
                        <input type="text" name="matricula" class="form-control" id="matricula"
                            value="<?php echo $mat; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre(s):</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" 
                            value="<?php echo $nom; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido Paterno:</label>
                        <input type="text" name="apPaterno" class="form-control" id="apPaterno" 
                            value="<?php echo $apPaterno; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido Materno:</label>
                        <input type="text" name="apMaterno" class="form-control" id="apMaterno" 
                        value="<?php echo $apMaterno; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña:</label>
                        <input type="text" name="psw" class="form-control" id="psw"
                        value="<?php echo $psw; ?>" disabled>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" name="btnActualizar" id="btnActualizar" disabled>Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
        function activarCampos(){
            document.getElementById('matricula').removeAttribute('disabled');
            document.getElementById('nombre').removeAttribute('disabled');
            document.getElementById('apPaterno').removeAttribute('disabled');
            document.getElementById('apMaterno').removeAttribute('disabled');
            document.getElementById('psw').removeAttribute('disabled');
            document.getElementById('btnActualizar').removeAttribute('disabled');
        }
        
    </script>
</body>

</html>


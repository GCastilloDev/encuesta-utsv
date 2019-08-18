<?php

session_start();


if (isset($_POST['btnActualizar']))
{

    include_once 'conexion.php';

        $con = new DatabaseConnect();
        $cdb = $con->dbConnectSimple();

        $tUsuario = false;

        $matricula = $_POST['matricula'];
        $password = $_POST['psw'];
        $nombre = $_POST['nombre'];
        $aP = $_POST['apPaterno'];
        $aM = $_POST['apMaterno'];
        $idU = $_POST['idU'];
        $idE = $_POST['idE'];
        $encuesta_seis_meses = $_SESSION['encuesta_seis_meses'];
        $encuesta_un_anio = $_SESSION['encuesta_un_anio'];


        $_SESSION['matricula'] = $matricula;
        $_SESSION['psw'] = $password;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apPaterno'] = $aP;
        $_SESSION['apMaterno'] = $aM;
        $_SESSION['idU'] = $idU;
        $_SESSION['idE'] = $idE;
        $_SESSION['encuesta_seis_meses'] = $encuesta_seis_meses;
        $_SESSION['encuesta_un_anio'] = $encuesta_un_anio;
        


        $sql = "UPDATE usuario
        SET 
        matricula = '$matricula',
        contrasena = '$password'
        WHERE idusuario = '$idU'";

        $resUsuario = mysqli_query($cdb, $sql);

        $sql2 = "UPDATE egresado
        SET 
        matricula = '$matricula',
        nombre = '$nombre',
        apellidoP = '$aP',
        apellidoM = '$aM'
        WHERE idegresado = '$idE'";

        $resEgresado = mysqli_query($cdb, $sql2);
        
        
        
        if($resUsuario && $resEgresado){
            $tUsuario = true;
            echo
            "
            <script>
            alert('Datos actualizados con éxito!');
            window.location = '../alumno-dashboard.php';
            </script>
            ";
        }
        
    
        

        mysqli_close($cdb);
}
<?php

session_start(); 

if (isset($_SESSION['idegresado']) && isset($_SESSION['idUsuario']) && isset($_SESSION['matricula']) && isset($_SESSION['nombre']) ) {

    $idE = $_SESSION['idegresado'];
    $idU = $_SESSION['idUsuario'];
    $mat = $_SESSION['matricula'];
    $nom = $_SESSION['nombre'];
    $psw = $_SESSION['psw'];



}else{

    echo "<script>location.href='index.php';</script>";
    
}


echo $mat.'<br>'; 
echo $nom.'<br>'; 
echo $psw.'<br>'; 

<?php 
session_start();
$my_conexion_db = mysqli_connect('localhost', 'root','mipoepir', 'php_crud');

if($my_conexion_db ->connect_error){
    echo '<script>console.log("no tienes acceso a esta area")</script>';
    die ('Error en la conexion en la BD ' . $my_conexion_db->connect_error);
}


?>
<?php 

require("conexion.php");

if(isset($_POST["guardar_tarea"])){

   $titulo = $_POST["titulo_tarea"];
   $descripcion = $_POST["descripcion_tarea"];

   $query = "INSERT INTO `tareas` (`tarea_titulo`, `tarea_descripcion`) VALUES ('".$titulo."', '".$descripcion."')";
    $resultado = mysqli_query($my_conexion_db, $query);

    if(!$resultado){
        die("La consulta ha fallado");
    }

    $_SESSION['mensaje']='Nuevo registro guardado correctamente';
    $_SESSION['tipo_mensaje']='success';
    header("Location:index.php");

}

?>
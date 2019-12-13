<?php 

require("conexion.php");

if(isset($_GET['tarea_id'])){
    $id = $_GET['tarea_id'];

    $query = "DELETE FROM tareas WHERE tarea_id = $id";
    $resultado_eliminar = mysqli_query($my_conexion_db, $query);

    if(!$resultado_eliminar){
        die("Fallo la consulta");
    }

    $_SESSION['mensaje']='Tarea eliminada correctamente';
    $_SESSION['tipo_mensaje']='danger';
    header("Location:index.php");
}

?>
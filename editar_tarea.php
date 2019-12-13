<?php 

include("conexion.php");


if(isset($_GET['tarea_id'])){
    $id = $_GET['tarea_id'];    

    $query = "SELECT * FROM tareas WHERE tarea_id = $id";
    $resultado_editar = mysqli_query($my_conexion_db, $query);

    if(mysqli_num_rows($resultado_editar)==1){
       $row = mysqli_fetch_array($resultado_editar);
       $titulo = $row['tarea_titulo'];
       $descripcion = $row['tarea_descripcion'];

    }

}



if(isset($_POST['actualizar_tarea'])){
   $editar_id = $_GET['tarea_id'];
    $nuevo_titulo = $_POST['titulo_tarea'];
    $nueva_descripcion = $_POST['descripcion_tarea'];

$update_query= "UPDATE tareas set tarea_titulo = '$nuevo_titulo', tarea_descripcion = '$nueva_descripcion' WHERE tarea_id= $editar_id";
mysqli_query($my_conexion_db, $update_query);


    $_SESSION['mensaje']='Actualizado correctamente';
    $_SESSION['tipo_mensaje']='warning';
    header("Location:index.php");


}

?>

<?php include("includes/header.php");?>

<div class="container-fluid bg-dark p-2">
        <div class="container text-white d-flex justify-content-between">
            <h2>MySystem</h2>
            <a href="nuevo.php" class="btn btn-primary ">Nuevo Registro</a>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="card cards col-md-5 m-auto mt-4">
        <form action="editar_tarea.php" method="POST">
            <div class="form-group row">
                <label for="titulo" class="col-sm-2 col-form-label col-form-label-sm">Tarea</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $titulo;  ?>" name="titulo_tarea" class="form-control form-control-sm" id="titulo" placeholder="Actualiza el titulo">
                </div>
            </div>
            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label col-form-label-sm">Descripcion</label>
                <div class="col-sm-10">
                    <textarea type="textarea" name="descripcion_tarea" class="form-control form-control-sm" id="descripcion" placeholder="Actualiza"><?php echo $descripcion;?></textarea>
                </div>
            </div>
            <button class="btn btn-success btn-block" type="submit" name="actualizar_tarea">Actualizar Datos</button>
</form>
        </div>
    </div>
</div>


<?php include("includes/footerr.php");?>

 <?php include("includes/header.php");?>
 
 <div class="container-fluid bg-dark p-2">
        <div class="container text-white d-flex justify-content-between">
            <h2>MySystem</h2>
            <a href="nuevo.php" class="btn btn-primary ">Nuevo Registro</a>
        </div>
    </div>

    <div class="container p-2 p-sm-4">
        <div class="row">
            <div class="col-md-5">

            <?php if(isset($_SESSION['mensaje'])){ ?>
            <div class="alert alert-<?= $_SESSION['tipo_mensaje'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } session_unset();?>
<form action="guardar_tarea.php" method="POST">
            <div class="form-group row">
                <label for="titulo" class="col-sm-2 col-form-label col-form-label-sm">Tarea</label>
                <div class="col-sm-10">
                    <input type="text" name="titulo_tarea" class="form-control form-control-sm" id="titulo" placeholder="Titulo de la tarea">
                </div>
            </div>
            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
                <div class="col-sm-10">
                    <textarea type="textarea" name="descripcion_tarea" class="form-control form-control-sm" id="descripcion" placeholder="Titulo de la tarea"></textarea>
                </div>
            </div>
            <input class="btn btn-success btn-block" type="submit" value="Guardar Tarea" name="guardar_tarea">
</form>
            </div>
            <div class="col-md-7">
            <table class="table table-hover row-reverse">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo Tarea</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM `tareas`";
                    $resultados_tareas = mysqli_query($my_conexion_db, $query);
                    while($row = mysqli_fetch_array($resultados_tareas)){ ?>

                    <tr>
                    <th scope="row"><?php echo $row['tarea_id']?></th>
                    <td><?php echo $row['tarea_titulo']?></td>
                    <td><?php echo $row['tarea_descripcion']?></td>
                    <td><?php echo $row['tarea_fecha']?></td>
                    <td>
                        <a class="btn btn-warning btn-block" href="editar_tarea.php?tarea_id=<?php echo $row['tarea_id']?>">Editar</a>
                        <a class="btn btn-danger btn-block" href="eliminar_tarea.php?tarea_id=<?php echo $row['tarea_id']?>">Eliminar</a>            
                    </td>
                    </tr>

                    <?php }; ?>

                </tbody>
                </table>

            </div>
        </div>
    </div>


<?php include("includes/footer.php");?>











<?php include_once 'includes/header.php';?>

    
        
        <?php include_once 'includes/menu.php'; ?>;

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <!--<div class="row">
                            <div class="col-md-8 ">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Descripcion</th>
                                            <th>Fecha</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $query = "SELECT * FROM Tareas";
                                            $resultados = mysqli_query($con, $query);
                                            
                                            while($row = mysqli_fetch_array($resultados)){ ?>
                                                <tr>
                                                    <td><?php echo $row['titulo']?></td>
                                                    <td><?php echo $row['descripcion']?></td>
                                                    <td><?php echo $row['cuando']?></td>
                                                    <td>
                                                        <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                                                        <a href="borrar.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                            
                                                </tr>

                                        
                                            <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>-->
                    </div>
                </main>

<?php include_once 'includes/footer.php';?>
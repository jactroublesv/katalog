<?php include_once 'includes/header.php';?>
<?php include_once 'includes/menu.php';?>

            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Projects</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                        <div class="card mb-4">
                            <?php if(isset($_SESSION['alert'])){?>

                                <div class="alert alert-<?= $_SESSION['at']?> alert-dismissible fade show" role="alert">
                                <?= $_SESSION['alert'];?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                            <?php }//session_unset(); };?>
                        </div>
                </div>

                <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Accions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Accions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                include_once 'controller/db.php';

                                                $query = "SELECT * FROM proyectos";
                                                $resultados = mysqli_query($con, $query);
                                            
                                                while($row = mysqli_fetch_array($resultados)){ 
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['name']?></td>
                                                    <td><?php echo $row['description']?></td>
                                                    <td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['image']);?>"></td>
                                                    <td>
                                                        <a href="editproject.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                                                        <a href="controller/deleteProject.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                            
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </main>
                
    
<?php include_once 'includes/footer.php';?>

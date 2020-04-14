

<?php include_once 'includes/header.php';?>
<?php include_once 'includes/menu.php';?>          

    <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Projects</li>
            </ol>
        </div>             
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">                                
                    <div class="card shadow-lg border-0 rounded-lg mt-2">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit project</h3></div>
                            <div class="card-body">
                            <?php if(isset($_SESSION['messages'])){?>

                                <div class="alert alert-<?= $_SESSION['types']?> alert-dismissible fade show" role="alert">
                                <?= $_SESSION['messages'];?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                            <?php }//session_unset(); };?>

                            <?php 
                                include_once 'controller/db.php';
                                $id = $_REQUEST['id'];
                                $query = "SELECT * FROM proyectos WHERE id = $id";
                                $resultados = mysqli_query($con, $query);
                                        
                                $row = mysqli_fetch_array($resultados);

                            ?>
                            <form action="controller/editproject.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">

                                <div class="form-group"><label class="small mb-1" for="inputname">Name</label>                                    
                                    <input class="form-control py-4" name="name" value="<?php echo $row['name']?>" type="user" placeholder="Enter username" required autofocus/></div>
                                <div class="form-group"><label class="small mb-1" for="inputdescription">Description</label>
                                    <textarea class="form-control" name="description" rows="2" placeholder="Enter description"><?php echo $row['description']?></textarea>
                                </div>
                                <div class="form-group text-center">
                                <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['image']);?>">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="imagen" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" name="editproject" value="Edit">
                                </div>
                                            
                            </form>
                            </div>
                            <div class="card-footer text-center">
                           <div class="small"><a href="index.php">Go to home!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php include_once 'includes/footer.php';?>

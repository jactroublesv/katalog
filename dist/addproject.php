

<?php include_once 'includes/header.php';?>
<?php include_once 'includes/menu.php';?>          

    <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Add</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Projects</li>
            </ol>
        </div>             
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">                                
                    <div class="card shadow-lg border-0 rounded-lg mt-2">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add new project</h3></div>
                            <div class="card-body">
                            <?php if(isset($_SESSION['messages'])){?>

                                <div class="alert alert-<?= $_SESSION['types']?> alert-dismissible fade show" role="alert">
                                <?= $_SESSION['messages'];?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                            <?php }//session_unset(); };?>

                            <form action="controller/addproject.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group"><label class="small mb-1" for="inputname">Name</label>                                    
                                    <input class="form-control py-4" name="name" type="username" placeholder="Enter name" required autofocus/></div>
                                <div class="form-group"><label class="small mb-1" for="inputPassword">Description</label>
                                    <textarea class="form-control" name="description"  rows="2" placeholder="Enter description" ></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="imagen" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" name="addproject" value="Add">
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

<?php session_start();?>


<?php include_once'includes/header.php';?>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <?php if(isset($_SESSION['message'])){?>

                                            <div class="alert alert-<?= $_SESSION['type']?> alert-dismissible fade show" role="alert">
                                            <?= $_SESSION['message'];?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>

                                        <?php session_unset(); };?>
                                        <form action="controller/registrar.php" method="POST">
                                            <div class="form-group"><label class="small mb-1" for="inputUsername">Username</label>
                                            <input class="form-control py-4" name="username" id="inputUsername" type="user" aria-describedby="emailHelp" placeholder="Enter username" required/></div>
                                            <div class="form-row">
                                                
                                            <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control py-4" name="contra" type="password" placeholder="Enter password" required/></div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                    <input class="form-control py-4" name="contra2" type="password" placeholder="Confirm password" required/></div>
                                                
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" name="registrar" value="Create a account"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
<?php include_once'includes/footer.php';?>            


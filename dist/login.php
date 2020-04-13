<?php session_start(); ?>

<?php include_once'includes/header.php';?>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php if(isset($_SESSION['message'])){?>

                                            <div class="alert alert-<?= $_SESSION['type']?> alert-dismissible fade show" role="alert">
                                            <?= $_SESSION['message'];?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>

                                         <?php session_unset(); };?>
                                        <form action="controller/acceder.php" method="POST">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Username</label>
                                            <input class="form-control py-4" name="username" id="inputEmailAddress" type="user" placeholder="Enter username" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" name="contra" id="inputPassword" type="password" placeholder="Enter password" required/></div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" name="acceder" value="Login">
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">

<?php include_once'includes/footer.php';?>    

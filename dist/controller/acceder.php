<?php 
    include("db.php");
    session_start();

    if(isset($_POST['acceder'])){
        $user = $_POST['username'];
        $pass = $_POST['contra'];

        if($user OR $pass == null){
            $_SESSION['message'] = "Usuario y/o contrasena vacios";
            $_SESSION['type'] = 'danger';
                
            header("location: ../login.php");
        }

        $q = "SELECT * FROM usuarios WHERE user = '$user'";
        $r = mysqli_query($con, $q);
        $row = mysqli_fetch_array($r);

        $userpass = $row['pass'];

        $query = "SELECT COUNT(*) as contar FROM usuarios WHERE user = '$user' and pass = '$userpass'";
        $result = mysqli_query($con, $query);

        $array = mysqli_fetch_array($result);

        if($array['contar']>0){
            if (password_verify($pass, $userpass)) {
            $_SESSION['usuario'] = $user;
            header("location: ../index.php");
            }else{
                $_SESSION['message'] = "Usuario y/o contrasena incorrectos";
                $_SESSION['type'] = 'danger';
                
                header("location: ../login.php");
            }
        }

        

        
    }


?>
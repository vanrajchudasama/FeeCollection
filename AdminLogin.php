<?php
include_once("DBConnect/config.php");
session_start();
if(isset($_POST['login1'])){
    $username=$_POST['uname'];
    $pass=$_POST['pass'];
    $_SESSION['login_user']=$username;
   
    header("location: index.php");
}
else{echo "Invalid Username";}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid ">
       
    
            <div class="row justify-content-center">
                <div class=" col-12 mt-5 p-3 col-xl-3 bg rounded col-sm-6 col-md-5 shadow">
                    <form action="" class=" mt-5 mb-5" method="post">
                        <!-- <h1 class="text-center ">Login</h1> -->
                        <div class="text-center">
                            <img src="img/logo2.png" alt="" class="img-fluid">
                          
                        </div>
                       
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="no-border form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="no-border form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">check</label>
                            </div>
                        </div>
                        <input type="submit" name='login1' value="Login" class="btn-block btn btn-dark">
                        
                    </form>
                </div>
            </div>
        </div>
   


    <script src="js/jquery1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/java.js"></script>
</body>

</html>
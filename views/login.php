<?php 
session_start();
if( isset($_SESSION['s_username'])  ) {
    header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP LOGIN</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/paoloBootstrap.css" />
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css" />
    <link rel="stylesheet" href="../assets//css/stars.css" />
</head>

<body>

    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    
    <div class="container justify-content-center d-flex align-items-center" style="height:100vh;">

        <div class="row col-md-4 col-10 justify-content-center bg-dark d-flex flex-column shadow">
            <h1 class="shadow-text text-white display-4 ">Login</h1>
            <form id="loginForm" class="form-group container">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="username">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                <a href="" class="form-text text-cyan text-decoration-none">forgot your password?</a>
                <div class="input-group w-100 align-items-center justify-content-around flex-column gap-4 mt-3">
                    <button class="btn btn-success shadow-box-1 col-8">Login</button>
                </div>
            </form>
        </div>
    </div>


</body>
<script src="../assets/js/jquery-3.6.0.js"></script>
<script src="../codigo.js"></script>
<script src="../assets//js/popper.min.js"></script>
<script src="../assets//js/bootstrap.min.js"></script>
<script src="../assets/js/sweetalert2.all.min.js"></script>


</html>
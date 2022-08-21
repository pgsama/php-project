<?php 
session_start();
require_once '../app.php';
if( $_SESSION['s_username'] == null){
    header("Location: login.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>PHP CRUD</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/paoloBootstrap.css">
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css" />
    <link rel="stylesheet" href="../index.css" />
    <link rel="stylesheet" href="../assets//css/stars.css" />
</head>

<body>
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>

    <div class="container justify-content-center d-flex align-items-center flex-column" style="height:100vh;">
        <div class="input-group"></div>
        <div class="bg-dark position-fixed d-grid">
            <h1 class="text-center">logged as <?php echo $_SESSION["s_username"] ?></h1>
            <h3 class="text-center">listing products using mysql and php</h3>
            <hr>
            <div class="table-wrapper-scroll-y custom-scrollbar">
            <table class="table table-hover table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <?php echo "<th >Nº</th>"  ?>
                        <th>NAME</th>
                        <th>DETAILS</th>
                        <th>DATE</th>
                        <th>BY</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>Computer</td>
                        <td>i5 10400f UHD 630 Graphics</td>
                        <td>22/12/22</td>
                        <td>Paolo</td>
                        <td><button type="button" name="" id="" class="btn btn-dark border-white btn-block ">Edit</button></td>
                        <td><button type="button" name="" id="" class="btn btn-danger border-black btn-block ">Delete</button></td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>Computer</td>
                        <td>Ryzen 7 vega 8</td>
                        <td>22/12/22</td>
                        <td>Paolo</td>
                        <td><button type="button" name="" id="" class="btn btn-dark border-white btn-block ">Edit</button></td>
                        <td><button type="button" name="" id="" class="btn btn-danger border-black btn-block ">Delete</button></td>
                    </tr>
                </tbody>
            </table>
            </div>
            <hr>
            <button class="btn btn-cyan border-white m-33 my-2 justify-self-center" onclick="logout()">Log out!</button>
        </div>
    </div>

</body>
<script src="../assets/js/jquery-3.6.0.js"></script>
<script src="../codigo.js"></script>
<script src="../assets//js/popper.min.js"></script>
<script src="../assets//js/bootstrap.min.js"></script>
<script src="../assets/js/sweetalert2.all.min.js"></script>


</html>
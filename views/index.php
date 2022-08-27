<?php
session_start();
require_once '../app.php';
if ($_SESSION['s_username'] == null) {
    header("Location: login.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>PHP CRUD</title>
    <meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/paoloBootstrap.css">
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css" />
    <link rel="stylesheet" href="../index.css" />
    <link rel="stylesheet" href="../assets//css/stars.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container justify-content-center d-flex align-items-center flex-column" style="height:100vh;">
        <div class="bg-gray-dark position-fixed d-grid border border-gray rounded-2">
            <div class="window-header">
                <div class="w-5 d-flex m-3 justify-content-around">
                    <div class="bg-danger w-1 h-1 rounded-circle"> </div>
                    <div class="bg-yellow w-1 h-1 rounded-circle"> </div>
                    <div class="bg-success w-1 h-1 rounded-circle"> </div>
                </div>
                <div class="input-group align-items-center w-25 justify-content-around">
                    <button type="button" class="header-button px-2">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="header-button" onclick="logout()">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        sign out</button>
                </div>
            </div>
            <div class="table-wrapper-scroll-y custom-scrollbar p-2">

            <hr class="bg-gray">
                <table class="table table-hover table-bordered table-striped mb-0 ">
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
                    <tbody id="tbody">
                    </tbody>
                </table>
            </div>
            <p class="small text-gray text-center">this app is using php, sql «made by paolo»</p>
        </div>
    </div>

</body>
<script src="../assets/js/jquery-3.6.0.js"></script>
<script src="../codigo.js"></script>
<script src="./index.js"></script>
<script src="../assets//js/popper.min.js"></script>
<script src="../assets//js/bootstrap.min.js"></script>
<script src="../assets/js/sweetalert2.all.min.js"></script>

</html>
<?php 
session_start();
include_once './includes/redirect-to-index.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clients</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/grass-icon.ico"/>
    <!--===============================================================================================-->
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--===============================================================================================-->
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--===============================================================================================-->
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!--===============================================================================================-->
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>    

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!--===============================================================================================-->
    <!-- Include charts-->
    <?php 
    if($_SESSION['u_type_name'] == "Account"){
        include_once './includes/client-account.inc.php';
    } 
    else {
        include_once './includes/client-admin-executive.inc.php'; 
    }
    ?>

    
    <!--===============================================================================================-->
    
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <!--=======================================================================================-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Clients</li>
            </ol>

            <!--  Pie Chart Card-->
            <!--===================================================================================-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><i class="fa fa-users"></i> Client Information</h4></div>
                        <div class="card-body" style="height: 550px; width: 100%; font-family:FontAwesome;">

                            <div id="categoryPicker_div_employee_id" ></div>
                            <div id="categoryPicker_div_employee_name" style="padding-top: 10px;"></div>
                            <div class="row" style="padding-top: 10px;">
                                <div id="categoryPicker_div_employee_branch" style="padding-left: 17px;"></div>
                                <div id="categoryPicker_div_client_industry" style="padding-left: 20px;"></div>
                            </div>
                            <div id="table_div_employee" style="padding-top: 10px" ></div>

                        </div>
                        <div class="card-footer small text-muted"><br></div>
                    </div>
                </div> <!--End of <div class="col-lg-6">-->

                <!--  Pie Chart Card-->
                <!--===================================================================================-->
       
                
            </div> <!--End of <div class="row">-->

    
            
        </div> <!--<div class="container-fluid">-->
    </div>     <!--End of <div class="content-wrapper">-->

    <!-- Include template-dashboard.inc.php-->
    <!--===========================================================================================-->
    <?php include_once './includes/template-dashboard.inc.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <!--===========================================================================================-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    
</body>
</html>
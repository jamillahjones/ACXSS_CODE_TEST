<?php
include ("./includes/config.php"); 
$query =  "SELECT * FROM 'users' ORDER BY age";
$result = mysqli_query($connect, $query);
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACXSS CODE TEST</title>

    <!-- inject:css-->

    <link rel="stylesheet" href="assets/vendor_assets/css/bootstrap/bootstrap.css">
    
    <link rel="stylesheet" href="assets/style/style.css">

    <!-- endinject -->

</head>

<body class="layout-light side-menu overlayScroll">
    <main class="main-content">

        <div class="contents">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-wrap">
                        <div class="breadcrumb-main" style="width: 50%;">
                            <h4 class="text-capitalize breadcrumb-title" >ACXSS CODE TEST</h4>
                        </div>
                        <div style="width: 50%;">
                            <input id="mySearchBar" type="search" class="form-control form-control-lg" placeholder="Enter a name to search" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header color-dark fw-500">
                                ACXSS Users
                            </div>
                            <?php 
                            $sql = "SELECT * FROM `users`";
                            $result = mysqli_query($connect,$sql);
                            ?>
                            <div class="card-body p-0">
                                <div class="table4  p-25 bg-white mb-30">
                                    <div class="table-responsive">
                                        <table id="myAwesomeTable" class="table mb-0">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th>
                                                        <span class="userDatatable-title">Name</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Age</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Address</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <?php 
    while($rows = mysqli_fetch_assoc($result)) 
    {
        ?>
     <tr>
     <td><?php echo $rows['name']; ?></td></div>
     <td><?php echo $rows['age']; ?></td></div>
     <td><?php echo $rows['address']; ?></td></div>                                         
     </tr> 
     <?php
    }
    ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <footer class="footer-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p>2023 @<a href="#">ACXSS</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-right">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Team</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- ends: .Footer Menu -->
                    </div>
                </div>
            </div>
        </footer>
    </main>
   
    <!-- inject:js-->
    <script src="assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendor_assets/js/jquery/jquery-ui.js"></script>
    <script src="assets/theme_assets/js/main.js"></script>
    <script src="assets/js/test.js"></script>
    <!-- endinject-->
</body>

</html>
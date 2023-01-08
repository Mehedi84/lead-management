
<!-- start: Header -->
<?php include('layouts/header.php'); ?>
<!-- end : Header -->

        <!-- start: Main Menu -->
        <?php 
        // include('menu.php'); 
        include('layouts/sidebar.php'); 
        ?>
        <!-- end: Main Menu -->

        <!-- start: Content -->
            <?php include('layouts/navbar.php');  ?>

            <!-- start : main content section-->
            <?php
            if (count($_GET) > 0) {
                if (substr($_GET['p'], 0, 9) == 'home_real') {
                    include_once 'pages/dashboard.php';
                } else {
//                var_dump($_GET);
                    foreach ($_GET as $key => $filename) {
                        if (file_exists('pages/' . $filename . '.php')) {
                            include_once 'pages/' . $filename . '.php';
                        }else{
                            include_once 'pages/404.php';
                        }
                    }
                }
            } else {
                include_once 'pages/dashboard.php';
            }
            ?>
            <!-- end : main content section-->


<?php include('layouts/footer.php'); ?>



        
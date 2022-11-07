<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pharma &mdash; Colorlib Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/magnific-popup.css">
    <link rel="stylesheet" href="resources/css/jquery-ui.css">
    <link rel="stylesheet" href="resources/css/owl.carousel.min.css">
    <link rel="stylesheet" href="resources/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="resources/css/aos.css">
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
<?php
include("config.php");
/* $username=$_POST['username'];
$password=$_POST['password'];
$result=mysqli_query($conn,"SELECT cashier_id, first_name,last_name,staff_id,username FROM cashier WHERE username='$username' AND password='$password'");
$result = mysqli_query($conn,"SELECT * FROM cashier") or die(mysqli_error($conn));
while($row = mysqli_fetch_array( $result )) {
                echo '<td>' . $row['cashier_id'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
				echo '<td>' . $row['last_name'] . '</td>';
				echo '<td>' . $row['username'] . '</td>';
		 }*/
?>
<div class="site-wrap">
    <div class="site-navbar py-2">
        <div class="search-wrap">
            <div class="container">
                <a href="javascript:void(0);" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                </form>
            </div>
        </div>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <div class="site-logo">
                        <a href="customerindex.php" class="js-logo-clone">Pharma</a>
                    </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active"><a href="customerindex.php">Home</a></li>
                            <li><a href="customerCateProd.php">Store</a></li>
                            <?php
                            if(isset($_SESSION['useradmin'])){
                            ?>

                            <li><a href="adminCreateAdmin.php">Create Admin</a></li>
                            <li><a href="adminViewCategory.php">View And Create Category</a></li>
                            <li><a href="adminViewProducts.php">View And Create Product</a></li>
                            <li><a href="adminListOrders.php">List Order</a></li>

                            <?php
                            }else if(isset($_SESSION['usercustomer'])){
                            ?>

                            <li><a href="customerMyAcc.php">My Account</a></li>
                            <li><a href="customercontact.php">Contact</a></li>

                            <?php
                            }else{

                            ?>

                            <li><a href="customerRegister.php">Register</a></li>
                            <li><a href="customerlogin.php">Login</a></li>
                            <li><a href="customercontact.php">Contact</a></li>

                            <?php
                            }
                            ?>


                            <li class="has-children">
                                <a href="javascript:void(0);">Dropdown</a>
                                <ul class="dropdown">
                                    <?php
                                        $categoryIdRes = mysqli_query($conn,"select categoryid, categoryname, categoryImage from category;") or die(mysqli_error($conn));
                                        while($categoryDetailRow = mysqli_fetch_array( $categoryIdRes )) {
                                            echo '<li><a href="customerCateProd.php?categoryid=' . $categoryDetailRow['categoryid'] . '">' . $categoryDetailRow['categoryname'] . '</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>
                            <?php
                            }else if(isset($_SESSION['usercustomer'])){
                            ?>
                            <li><a href="customerabout.php">About</a></li>
                            <?php
                            }else{
                            ?>
                            <li><a href="customerabout.php">About</a></li>
                            <?php
                            }
                            ?>

                        </ul>
                    </nav>
                </div>
                <div class="icons">
                    <a href="javascript:void(0);" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                    <a href="customercart.php" class="icons-btn d-inline-block bag">
                        <span class="icon-shopping-bag"></span>
                        <span class="number">2</span>
                    </a>
                    <a href="javascript:void(0);" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                            class="icon-menu"></span></a>
                </div>
            </div>
        </div>
    </div>
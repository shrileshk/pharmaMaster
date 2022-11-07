<?php include("custheaderhead.php"); ?>
<div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="customerindex.php">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">List Orders</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-5 text-black">List Orders</h2>
                </div>
                <div class="col-md-12">

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Order Id</th>
                            <th scope="col">Login Id</th>
                            <th scope="col">Order Description</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $orderListResult = mysqli_query($conn,"select orderid,loginid,orderdesc from orders;") or die(mysqli_error($conn));
                            while($orderListRow = mysqli_fetch_array( $orderListResult )) {
                                echo '<tr class="bg-primary text-black">';
                                $orderDetailId=$orderListRow['orderid'];
                                echo '<th scope="row">'.$orderDetailId.'</th>';
                                $orderDetailLoginId=$orderListRow['loginid'];
                                $orderLoginDetail = mysqli_query($conn,"select loginid,email,password userlogin from userlogin where loginid=$orderDetailLoginId;") or die(mysqli_error($conn));
                                while($orderLoginRow = mysqli_fetch_array( $orderLoginDetail )){
                                    echo '<td>'.$orderDetailLoginId.' - '.$orderLoginRow['email'].'</td>';
                                }
                                $orderDetailDesc=$orderListRow['orderdesc'];
                                echo '<td>'.$orderDetailDesc.'</td>';
                                echo '<td><a href="adminViewOrder.php?vieworderid='.$orderDetailId.'">View</a></td>';
                                echo '</tr>';
                            }

                        ?>
                        </tbody>
                    </table>


                </div>

            </div>
        </div>
    </div>


    <div class="site-section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-white mb-4">Offices</h2>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 bg-white mb-3 rounded">
                        <span class="d-block text-black h6 text-uppercase">New York</span>
                        <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 bg-white mb-3 rounded">
                        <span class="d-block text-black h6 text-uppercase">London</span>
                        <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 bg-white mb-3 rounded">
                        <span class="d-block text-black h6 text-uppercase">Canada</span>
                        <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include("custfooter.php"); ?>
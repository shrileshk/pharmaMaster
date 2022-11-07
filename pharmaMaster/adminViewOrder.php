<?php include("custheaderhead.php"); ?>
<?php

if(isset($_POST['vieworderid'])){
$vieworderid=$_POST['vieworderid'];
$vieworderResult = mysqli_query($conn,"select select orderid,productid from orderitems where orderid=$vieworderid;") or die(mysqli_error($conn));

}

?>
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
                            <th scope="col">Product Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if(isset($_POST['vieworderid'])){
                            while($vieworderRow = mysqli_fetch_array( $vieworderResult )) {
                                echo '<tr class="bg-primary text-black">';
                                echo '<th scope="row">'.$vieworderRow['orderid'].'</th>';
                                $orderDetailProductid=$vieworderRow['productid'];
                                $orderProductDetail = mysqli_query($conn,"select productid,productname,productprice from product where productid=$orderDetailProductid;") or die(mysqli_error($conn));
                                while($orderProductRow = mysqli_fetch_array( $orderProductDetail )){
                                    echo '<td>'.$orderDetailProductid.'</td>';
                                    echo '<td>'.$orderProductRow['productname'].'</td>';
                                    echo '<td>'.$orderProductRow['productprice'].'</td>';

                                }
                                echo '</tr>';
                            }
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
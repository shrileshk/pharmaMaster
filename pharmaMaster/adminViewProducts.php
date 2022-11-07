<?php include("custheaderhead.php"); ?>
<?php

if(isset($_POST['upload'])){
$fileName = $_FILES['file']['name'];$fileType = $_FILES['file']['type'];
$fileSize = $_FILES['file']['size'];$fileTemp = $_FILES['file']['tmp_name'];
if(is_uploaded_file($fileTemp)){
$categoryId=$_POST['c_categoryid'];
$productName=$_POST['c_productname'];
$productPrice=$_POST['c_productprice'];
$productDescription=$_POST['c_description'];
$sqlCreateProductQuery = "insert into product(categoryid,productname,productImage,productprice,description) values($categoryId,'$productName','Uploaded_Images/$fileName',$productPrice,'$productDescription');";
$sqlInsertProdQuery = mysqli_query($conn,$sqlCreateProductQuery);
	if(move_uploaded_file($fileTemp, "Uploaded_Images/$fileName"))
	{ echo "File uploaded successfully."; }
	else{ echo "File upload failed."; }
}else{ echo "No file is selected."; }

?>
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h3 mb-5 text-black">View & Create Product</h2>
                    </div>
                    <div class="col-md-12">
                        <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                            <div class="p-3 p-lg-5 border">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_categoryid" class="text-black">category id <span class="text-danger">*</span></label>
                                        <select class="form-control" id="c_categoryid" name="c_categoryid">
                                        <?php
                                        $categoryIdRes = mysqli_query($conn,"select categoryid, categoryname, categoryImage from category;") or die(mysqli_error($conn));
                                        while($categoryDetailRow = mysqli_fetch_array( $categoryIdRes )) {
                                            echo '<option value="'.$categoryDetailRow['categoryid'].'">'.$categoryDetailRow['categoryname'].'</option>';
                                        ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_productname" class="text-black">product name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_productname" name="c_productname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="file" class="text-black">product Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="file" name="file">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_productprice" class="text-black">product price <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_productprice" name="c_productprice">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-md-12">
                                    <label for="c_description" class="text-black">Description </label>
                                    <textarea name="c_description" id="c_description" cols="30" rows="7" class="form-control"></textarea>
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="submit" name="upload" class="btn btn-primary btn-lg btn-block" value="Add Product">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="p-3 p-lg-5 border">
                            <ul class="w3-ul w3-border-top">
                                <?php
                                $productRowRes = mysqli_query($conn,"select productid,categoryid,productname,productImage,productprice,description from product;") or die(mysqli_error($conn));
                                    while($productDetailRow = mysqli_fetch_array( $productRowRes )) {
                                        echo '<li class="w3-theme-l4">';
                                        echo '<p>Product id : '.$productDetailRow['productid'].'</p>';
                                        echo '<p>Category id : '.$productDetailRow['categoryid'].'</p>';
                                        echo '<p>Productname : '.$productDetailRow['productname'].'</p>';
                                        ?>
                                        <p>
                                            <a href="<?php echo $productDetailRow['productImage'] ?>"><?php echo $productDetailRow['productImage'] ?></a>
                                            &nbsp;-&nbsp;
                                            <a href="<?php echo $productDetailRow['productImage'] ?>" download="<?php echo $productDetailRow['productImage'] ?>">Download</a>
                                        </p>
                                        <?php
                                        echo '<p>Product price : '.$productDetailRow['productprice'].'</p>';
                                        echo '<p>Description : '.$productDetailRow['description'].'</p>';
                                        echo '</li>';
                                    }
                                ?>
                            </ul>
                        </div>
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
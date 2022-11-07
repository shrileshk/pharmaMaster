<?php include("custheaderhead.php"); ?>
<?php
    $categoryIdRes = mysqli_query($conn,"select categoryid, categoryname, categoryImage from category;") or die(mysqli_error($conn));


if(isset($_POST['upload'])){
$fileName = $_FILES['file']['name'];$fileType = $_FILES['file']['type'];
$fileSize = $_FILES['file']['size'];$fileTemp = $_FILES['file']['tmp_name'];
if(is_uploaded_file($fileTemp)){
$categoryname=$_POST['c_categoryname'];
$sqlCreateCategoryQuery = "insert into category(categoryname, categoryImage) values('$categoryname','Uploaded_Images/$fileName');";
$sqlInsertCateQuery = mysqli_query($conn,$sqlCreateCategoryQuery);
	if(move_uploaded_file($fileTemp, "Uploaded_Images/$fileName"))
	{ echo "File uploaded successfully."; }
	else{ echo "File upload failed."; }
}else{ echo "No file is selected."; }

?>
    <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h3 mb-5 text-black">View & Create Categorys</h2>
                    </div>
                    <div class="col-md-12">

                        <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                            <div class="p-3 p-lg-5 border">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_fname" class="text-black">category name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_categoryname" name="c_categoryname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_lname" class="text-black">category Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="file" name="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="submit" name="upload" class="btn btn-primary btn-lg btn-block" value="Add Category">
                                    </div>
                                </div>
                            </div>
                        </form>
                            <div class="p-3 p-lg-5 border">
                                <ul class="w3-ul w3-border-top">
                                    <?php
                                        while($categoryDetailRow = mysqli_fetch_array( $categoryIdRes )) {
                                            echo '<li class="w3-theme-l4">';
                                            echo '<p>'.$categoryDetailRow['categoryid'].'</p>';
                                            echo '<p>'.$categoryDetailRow['categoryname'].'</p>';
                                            ?>
                                            <p>
                                                <a href="<?php echo $categoryDetailRow['categoryImage'] ?>"><?php echo $categoryDetailRow['categoryImage'] ?></a>
                                                &nbsp;-&nbsp;
                                                <a href="<?php echo $categoryDetailRow['categoryImage'] ?>" download="<?php echo $categoryDetailRow['categoryImage'] ?>">Download</a>
                                            </p>
                                            <?php
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
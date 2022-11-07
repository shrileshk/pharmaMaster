<?php include("custheaderhead.php"); ?>

<?php
$setCustFName=empty($_POST['c_fname'])?0:$_POST['c_fname'];
$setCustLName=empty($_POST['c_lname'])?0:$_POST['c_lname'];
$setCustEmail=empty($_POST['c_email'])?0:$_POST['c_email'];
$setCustPass=empty($_POST['c_password'])?0:$_POST['c_password'];
$setCustAge=empty($_POST['c_age'])?0:$_POST['c_age'];
$setCustPhone=empty($_POST['c_phone'])?0:$_POST['c_phone'];
$setCustAddress1=empty($_POST['c_address1'])?0:$_POST['c_address1'];
$setCustAddress2=empty($_POST['c_address2'])?0:$_POST['c_address2'];
$setCustCity=empty($_POST['c_city'])?0:$_POST['c_city'];
$setCustArea=empty($_POST['c_area'])?0:$_POST['c_area'];
$setCustPincode=empty($_POST['c_pincode'])?0:$_POST['c_pincode'];
?>

<div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="customerindex.php">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Registration Page</strong>
                </div>
            </div>
        </div>
    </div>
<?php
if(empty($_POST['c_fname'])&&empty($_POST['c_lname'])&&empty($_POST['c_email'])&&empty($_POST['c_password'])&&empty($_POST['c_age'])&&empty($_POST['c_phone'])&&empty($_POST['c_address1'])&&empty($_POST['c_address2'])&&empty($_POST['c_city'])&&empty($_POST['c_area'])&&empty($_POST['c_pincode'])){
?>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-5 text-black">User Registration</h2>
                </div>
                <div class="col-md-12">

                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">

                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_fname" class="text-black">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_email" class="text-black">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_email" class="text-black">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="c_password" name="c_password"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_email" class="text-black">Age <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_age" name="c_age" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_email" class="text-black">Phone <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="c_phone" name="c_phone" placeholder=""
                                           max="10">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_email" class="text-black">Address line 1 <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_address1" name="c_address1"
                                           placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_email" class="text-black">Address line 2 <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="c_address2" name="c_address2"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_email" class="text-black">City <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_city" name="c_city" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_email" class="text-black">Area <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="c_area" name="c_area"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_email" class="text-black">PinCode <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_pincode" name="c_pincode"
                                           placeholder="">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php
}else{
$sqlUserRegisterQuery = "insert into userlogin(email, password,priority) values('$setCustEmail','$setCustPass','1');insert into userInfo(loginid, firstname, lastname, userage, phone, email,address1, address2, city, area, pincode) values((SELECT LAST_INSERT_ID()),'$setCustFName','$setCustLName',$setCustAge,$setCustPhone,'$setCustEmail','$setCustAddress1', '$setCustAddress2', '$setCustCity', '$setCustArea', '$setCustPincode');";
echo '<div class="site-section"><div class="container"><div class="row"><div class="col-md-12"><h2 class="h3 mb-5 text-black">User Registration</h2></div><div class="col-md-12"><h2>';
if(mysqli_query($conn, $sqlUserRegisterQuery)){
    echo "Registration Completed Successfully.";
} else{
    echo "Unable to register user $sql. " . mysqli_error($conn);
}
echo '</h2></div></div></div></div>';
?>


<?php
}
?>

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
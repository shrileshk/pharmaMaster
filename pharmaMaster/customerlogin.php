<?php include("custheaderhead.php"); ?>
<?php
$setCustEmail=empty($_POST['c_email'])?0:$_POST['c_email'];
$setCustPass=empty($_POST['c_password'])?0:$_POST['c_password'];
?>
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="customerindex.php">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Login Page</strong>
                </div>
            </div>
        </div>
    </div>
<?php
if(empty($_POST['c_email'])&&empty($_POST['c_password'])){
?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-5 text-black">User Login</h2>
                </div>
                <div class="col-md-12">
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_email" class="text-black">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_email" class="text-black">password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="c_password" name="c_password"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
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
echo '<div class="site-section"><div class="container"><div class="row"><div class="col-md-12"><h2 class="h3 mb-5 text-black">User Registration</h2></div><div class="col-md-12"><h2>';
    $gotUserLoginId = mysqli_query($conn,"select loginid,email, password,priority userlogin from userlogin where email='$setCustEmail' AND password='$setCustPass';") or die(mysqli_error($conn));
    if (mysqli_num_rows($gotUserLoginId) == 1){
        $gotUserLoginRow = mysqli_fetch_array( $gotUserLoginId );
        $setCustEmailId=$gotUserLoginRow['loginid'];
        $setCustEmail=$gotUserLoginRow['email'];
        $setCustPass=$gotUserLoginRow['password'];
        $setCustPriority=$gotUserLoginRow['priority'];
        if($setCustPriority=="1"){
            $_SESSION['useradmin']=$gotUserLoginRow;
        }else if($setCustPriority=="2"){
            $_SESSION['usercustomer']=$gotUserLoginRow;
        }
        echo "Login Successfully.";
    }else{
        echo "Unable to Login - $sql. " . mysqli_error($conn);
    }
echo '</h2></div></div></div></div>';
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
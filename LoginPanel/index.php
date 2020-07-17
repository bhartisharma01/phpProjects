<?php 
session_start();
include "header.php";

if(isset($_REQUEST["submit"])) {
	// $FirstName=$_REQUEST['FirstName'];
	// $LastName=$_REQUEST['LastName'];
	$Email=$_REQUEST['Email'];
	$Password=$_REQUEST['Password'];
   
    $sql = "SELECT * FROM signup WHERE Email='$Email' and Password='$Password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
		$_SESSION['Email']=$Email;
	    $_SESSION['FirstName']=$FirstName;
	// 	$_SESSION['LastName']=$LastName;
		header('location:welcome.php');
	}
	else {
		?>
		 <span class="text-danger">
           <div class="alert alert-danger"> Wrong Email or Password 
               
           </div></span>
		<?php
	}


}
?>

<body style="background: #fff url(images/admin-login-background.png);background-attachment: fixed;background-repeat: repeat;" data-gr-c-s-loaded="true">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
 				<div class="admin-login-form">
 					<div class="admin-header-info">
 						<h3 class="admin-text">
 							Please Enter Your Information
 						</h3>
 					</div>
					<form action="" method="POST">
						<div class="form-group">
							<input type="email" name="Email" class="form-control" id="emailid"  placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" name="Password" class="form-control" id="password" placeholder="Password" required>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<input type="submit" name="submit" class="btn btn-primary admin-login-btn form-control"> 
								</div>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4 mt-2">
								<a href="signup.php" class="sign-up-link">Sign in instead</a></div>
							</div>
					</form>


										   
 				</div>
 			</div>

 			<div class="col-md-3"></div>

 		</div>
 	</div>

 

  
</body> 	
</html>
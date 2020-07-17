<?php include "header.php" ;
if(isset($_REQUEST["submit"])) {
    $FirstName=$_REQUEST['FirstName'];
    $LastName=$_REQUEST['LastName'];
    $Email=$_REQUEST['Email'];
    $Password=$_REQUEST['Password'];
    
    $DateofBirth=$_REQUEST['DateofBirth'];
    $sql = "SELECT * FROM signup WHERE Email='$Email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        ?>
       <span class="text-danger">
           <div class="alert alert-danger"> Email already exists
               
           </div></span>
      <?php 
    }
else{
$details="INSERT INTO `signup`(`FirstName`, `LastName`, `Email`, `Password`, `DateofBirth`) 
VALUES ('$FirstName','$LastName','$Email','$Password','$DateofBirth')";
mysqli_query($conn, $details);
header ('location:index.php');
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
 							Enter details to sign up
 						</h3>
 					</div>
					<form action="" method="POST">
                        <div class="form-group">
                            <input type="text" name="FirstName" class="form-control" id="firstname"  placeholder="First Name" required>
                        </div>
                        <div class="form-group">
							<input type="text" name="LastName" class="form-control" id="lastname"  placeholder="Last Name" required>
						</div>
						<div class="form-group">
							<input type="email" name="Email" class="form-control" id="emailid" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" name="Password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="dateofbirth" class="datebirth">Date of Birth</label>
							<input type="date" name="DateofBirth" class="form-control" id="dateofbirth"  placeholder="Date of Birth" required>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<input type="submit" name= "submit" class="btn btn-primary admin-login-btn form-control"> 
								</div>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4 mt-2">
								<a href="index.php" class="sign-up-link">Login</a></div>
							</div>
					</form>


										   
 				</div>
 			</div>

 			<div class="col-md-3"></div>

 		</div>
 	</div>

 

  
</body> 	
</html>
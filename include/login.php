<?php include_once("header.php"); ?>


<?php 
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['pasw'];

		$slq = "SELECT * FROM users WHERE email='$username' AND pass='$password'";

		$result = mysqli_query($conn, $slq);

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
				$_SESSION['username'] = $username;
				header("Location: symptom.php");
			}
		}else{
			echo "User Not found";
		}
	}


?>


<style>
         body {
            background-image: url("/healthcheck/image/loginbg.jpg") ;
            background-size: 1350px 700px;
         }
      </style>
<br><br><br>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 style="text-align: center;">Sign In</h3>
				
			</div>
			<div class="card-body">
				<form action="login.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="pasw">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="login">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links" style="padding-bottom: 20px;">
					Don't have an account?<a href="signup.php">Sign Up</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
<br><br><br><br><br><br><br>











<?php include_once("footer.php"); ?>
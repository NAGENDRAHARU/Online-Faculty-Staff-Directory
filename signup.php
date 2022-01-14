<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<link rel="stylesheet" href="css/styles.css">
<script type="text/javascript">
	 document.getElementById("register_btn").onclick = function () {
        location.href = "/login.php";
    };
</script>
</head>
<body>
<div class="banner">
	<div class="navbar">
		<img src="img/logo.png" class="logo">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</div>
 <div class="loginbox">
	<img src="img/faculty.png" class="avatar"/>
	<h1>SignUp Here</h1>
	<form class="myform" action="signup.php" method="post" name='loginform'>
	<p>Username:</p>
	<input type="text" name="username" class="inputvalues" placeholder="Type your Username" required><br>
	<p>Password:</p>
	<input type="password" name="password" class="inputvalues" placeholder="Type your Password" required><br>
	<p>Confirm Password:</p>
	<input type="password" name="cpassword" class="inputvalues" placeholder="Type your Password" required><br>
	<input type="submit" name="submit" value="SignUp" id="login_btn">
	<label><b>Already have an  account?</b></label><br>
	<a href="login.php"><input type="button" name="login" value="Login"  id="register_btn" ></a>
	</form>
	</div>
</div>
<?php
			if(isset($_POST['submit']))
			{
				$username=$_POST['username'];
				$email=$_POST['Email'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];

				if($password==$cpassword)
				{
				$query = "select * from users where username='$username'";
				$query_run = mysqli_query($con,$query);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. \nPlease try another username!")</script>';
						}
						else
						{
							$query = "insert into users(username,password) values('$username','$password')";
							$query_run= mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. \nWelcome....")</script>';
								header('location:login.php');
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. \nPlease try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password does not match..")</script>';
				}

			}
		?>
</body>
</html>

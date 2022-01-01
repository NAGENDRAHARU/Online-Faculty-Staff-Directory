<?php
session_start();
require 'dbconfig/config.php';
?>
<!doctype html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/styles.css">
<script>
function validateForm()
{
	var x = document.forms["myForm"]["username"].value;
	var y = document.forms["myForm"]["password"].value;
	if(x=="" && y==""){
		alert("Username and Password must be filled out..");
	}
	else if(x==""){
		alert("Username must be filled out..");
	}
	else if(y==""){
		alert("password must be filled out..");
	}
}
</script>
</head>
<body>
<div class="banner">
	<div class="navbar">
		<img src="img/logo.png" class="logo">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="signup.php">Signup</a></li>
		</ul>
	</div>
 <div class="loginbox">
	<img src="img/download.png" class="avatar">
	<h1>Login Here</h1>
	<form name="myForm" action="login.php" method="post" class="myform" onsubmit="return validateForm()">
	<p>Username</p>
	<input type="text" name="username" class="inputvalues" placeholder="Enter Username" value="<?php if(isset($_COOKIE["Name"])){ echo $_COOKIE["Name"];}?>"><br>
	<br><label><b>Password:</b></label><br>
	<input type="password" name="password" class="inputvalues" placeholder="Enter Password" value="<?php if(isset($_COOKIE["Password"])){echo $_COOKIE["Password"];}?>"><br><br>
	<input type="submit" name="submit" value="Login" id="login_btn" ><br>
	<br><b>New User?</b><br>
	<br><a href="signup.php"><input type="button" name="register" value="Register"></a>
	</form>
	</div>
</div>
<?php
		if(isset($_POST['submit']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			setcookie("Name",$username,time()+60*60*25*5);
			setcookie("Password",$password,time()+60*60*25*5);
			$query = "select * from users where username='$username' AND password='$password'";
			if($username!="" && $password!="")
			{
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['username']=$username;
				$_SESSION['status']="Active";
				header('location:search.php');
			}
			else
			{
				echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
			}
		}
		}
?>
</body>
</html>

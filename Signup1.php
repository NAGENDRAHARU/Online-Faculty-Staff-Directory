<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<link rel="stylesheet" href="css/styles1.css">
<style media="screen">
		<?php require 'nav.php'; ?>
</style>
<script type="text/javascript">
	 document.getElementById("register_btn").onclick = function () {
        location.href = "/login1.php";
    };
</script>
</head>
<div class="navbar">
 <a href="index.php">Home</a>
 <a href="#contact">Contact</a>
 <div class="topnav-right">
 <a href="Signup1.php">Signup</a>
 <a href="login1.php">Login</a>
 </div>
</div>
<body id="bod">
<div id="first">
<center>
<h1>SignUp</h1>
<img src="img/faculty.png" class="avatar"/>
</center>
<form class="myform" action="Signup1.php" method="post" name='loginform'>
<label><b>Username:</b></label><br>
<input type="text" name="username" class="inputvalues" placeholder="Type your Username" required><br>
<br><label><b>Email:</b></label><br>
<input type="email" name="Email" class="inputvalues" placeholder="Type your Email id" required><br>
<br><label><b>Password:</b></label><br>
<input type="password" name="password" class="inputvalues"placeholder="Type your Password" required><br><br>
<label><b> Confirm Password:</b></label><br>
<input type="password" name="cpassword" class="inputvalues"placeholder="Type your Password" required><br><br>
<input type="submit" name="submit" value="SignUp" id="login_btn" onclick="myFunction(document.loginform.username,document.loginform.password)"><br>
 <label><b>Already have an  account?</b></label>
<br>
<a href="login1.php"><input type="button" name="login" value="Login"  id="register_btn" ></a>
</form>
</div>
 <script>
            function myFunction(x,y) {
                // If x is not an alphabet or number
                var letters = /^[A-Za-z0-9]+$/;
                var letters1 =  /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                if(x.value.match(letters) && y.value.match(letters1))
                {
                    alert('Your name and password has been accepted');
                    return true;
                }
                else
                {
                    alert('Please input alphabet and numeric characters only');
                    return false;
                }
            }
   </script>
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
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into users(username,password) values('$username','$password')";
							$query_run= mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome....")</script>';

							}
							if($query_run)
							{
								header('location:login1.php');
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
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
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}

			}
		?>
</body>
</html>

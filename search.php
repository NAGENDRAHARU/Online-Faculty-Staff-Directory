<?php
session_start();
if($_SESSION['status']!="Active")
{
    header("location:login1.php");
}
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Search</title>
<style>
body
{
	font-family:serif;
	background-image:url("back.jpg");
	background-size:1280px 720px;
}
.wrap
{
	position:absolute;
	width:30%;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
}
.search
{
	width:100%;
	position:relative;
}
.searchterm
{
	float:left;
	width:100%;
	border:3px solid #00B4CC;
	padding:11px;
	font-size:17px;
	outline:none;
}
.searchbtn
{
	position:absolute;
	width:50px;
	height:47.5px;
	border:1px solid #00B4CC;
	background-color:#00B4CC;
	text-align:center;
	color:#fff;
	cursor:pointer;
	font-size:20px;
}
.navbar {
  overflow: hidden;
  background-color:transparent;
  position: fixed;
  top: 0;
  width: 100%;
  border-radius:5px;
  }
.navbar a {
  float: left;
  display: block;
  color: #2980b9;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-radius:15px;
}
.navbar a:hover {
  background: #ddd;
  color: black;
  }
.topnav-right {
  float: right;
}
</style>
</head>
<body>
	<?php
	echo $_SESSION['username'];
	?>
	<div class="navbar">
 <a href="#contact">Contact</a>
 <div class="topnav-right">
 <a href="logout.php">Logout</a>
 </div>
</div>'
	<div align="center" class='heading'>
	<center>
		<h1 style='color:#3498db'>Discover Faculty With Great Profile</h1>
	</center>
</div>
<div class="wrap">
<div class="search">
<input type="text" class="searchterm" name="search" placeholder="What are you looking for?" required>
<button type="submit" class="searchbtn">
<i class="fa fa-search"></i>
</button>
</div>
</div>
</body>
</html>
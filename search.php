<?php
session_start();
if($_SESSION['status']!="Active")
{
    header("location:login.php");
}
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Search</title>
<style>
body
{
	font-family: serif;
	background-image: url("img/back.jpg");
	background-size: cover;
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
  top: 0;
  width: 100%;
  border-radius:5px;
  color: #3498db;
  }
.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
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
<div class="navbar">
 <a href="#contact">Contact</a>
 <div class="topnav-right">
 <a href="logout.php">Logout</a>
 </div>
</div>
	<div align="center" class='heading'>
	<center>
		<h1 style='color:#3498db'>Discover Faculty With Great Profile</h1>
	</center>
</div>
<form action="" method="get">
<div class="wrap">
<div class="search">
<input type="text" class="searchterm" name="search" placeholder="Whom are you looking for ?" required>
<button type="submit" name="submit" class="searchbtn">
<i class="fa fa-search"></i>
</button>
</div>
</div>
</form>
<?php
if(isset($_GET['submit']))
{
$name = $_GET['search'];
$_SESSION['search'] = $name;
echo '<script type="text/javascript">alert('."$name".')</script>';
}
?>
</body>
</html>

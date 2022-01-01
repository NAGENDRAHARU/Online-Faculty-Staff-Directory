<?php
session_start();
require 'dbconfig/config.php';
if($_SESSION['status']!="Active")
{
    header("location:login.php");
}
?>
<html>
<head>
<title>Search</title>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
<style>
*{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
.wrap
{
	position:absolute;
	width:30%;
	top:30%;
	left:50%;
	transform:translate(-50%,-50%);
}
.search
{
	width:80%;
	position:relative;
  background-color: #fff;
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
	border:1px solid #00B4CC;
	background-color:#00B4CC;
	text-align:center;
	color:#fff;
	cursor:pointer;
	font-size:20px;
}
.banner{
  width: 100%;
  height: 100vh;
  background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("/img/background.jpg");
  background-size: cover;
  background-position: center;
}
.navbar{
  width: 85%;
  margin: auto;
  padding: 35px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.logo{
   width: 120px;
   cursor: pointer;
}
.navbar ul li{
  list-style: none;
  display: inline-block;
  margin: 0 20px;
  position: relative;
}
.navbar ul li a{
  text-decoration: none;
  color: #fff;
  text-transform: uppercase;
}
.navbar ul li::after{
  content: '';
  height: 3px;
  width: 0;
  background: #3498db;
  position: absolute;
  left: 0;
  bottom: -10px;
  transition: 0.5s;
}
.navbar ul li:hover::after{
  width: 100%;
}
</style>
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
 <div align="center" class='heading'>
	<center>
		<h1 style='color:#3498db'>Discover Faculty With Great Profile</h1>
	</center>
</div>
<form action="search.php" method="get">
  <div class="input-group wrap">
    <div id="search-autocomplete" class="search form-outline">
      <input type="text" name="search" id="form1" class="searchterm form-control" required/>
      <label class="form-label" for="form1">Search</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary searchbtn">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>
</div>
<?php
if(isset($_GET['submit']))
{
$name = $_GET['search'];
$_SESSION['search'] = $name;
$query = "select * from professors where name like '%$name%'";
$query_run = mysqli_query($con,$query);
if(mysqli_num_rows($query_run) > 0){
header('location:faculty.php');
}
else{
  echo '<script type="text/javascript">alert("No search results found..")</script>';
}
}
?>
</body>
</html>

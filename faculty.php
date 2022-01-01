<?php
session_start();
require 'dbconfig/config.php';
if($_SESSION['status']!="Active")
{
    header("location:login.php");
}
$search = $_SESSION['search'];
$query = "select * from professors where name like '%$search%'";
$query_run = mysqli_query($con,$query);
$rows=mysqli_fetch_array($query_run);
echo '<!DOCTYPE html>
<html>
<head>
<title>'.$rows["name"].'</title>
<style>
*{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
table,th,td
{
	border:1px solid black;
	border-collapse:collapse;
	background-color:lightblue;
}
th
{
	text-align:center;
}
table
{
	border-spacing: 5px;
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
  content: '.';
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
<br><br><br>
<div align="center">
<table>
<tr>
<td colspan="1"><img src="facultyimg/'.$rows["no"].'.jpg"><td>
<td colspan="2">
	<b>'.$rows["name"].'</b><br>
	'.$rows["designation"].'<br>
	<b>Area:</b>'.$rows["area"].'<br>
	<b>Affiliation:</b>'.$rows["affiliation"].'<br>
	<b>Email:</b>'.$rows["email"].'
</td>
</tr>
<tr>
<th colspan="4"><b>Education:</b></th>
</tr>
<tr>
<td colspan="2">
'.explode(",", $rows["edu1"])[0].'
</td>
<td>
'.explode(",", $rows["edu1"])[1].'
</td>
<td>
'.explode(",", $rows["edu1"])[2].'
</td>
</tr>
<tr>
<td colspan="2">'.explode(",", $rows["edu2"])[0].'</td>
<td>'.explode(",", $rows["edu2"])[1].'</td>
<td>'.explode(",", $rows["edu2"])[2].'</td>
</tr>
<tr>
<td colspan="4"><b>Other Details:</b><br>
	<br><b>Research Interests:</b><br>
    '.'-> '.$rows["interests"].'
	<br><b>Selected Publications:</b><br>
	  '.'-> '.$rows["publications"].'
	<br><b>Academic Experience</b><br>
	  '.'-> '.$rows["experience"].'
	<br><b>Organized Conference/workshop/seminar:</b><br>
	  '.'-> '.$rows["workshop"].'
	<br><b>Workshop Attended:</b><br>
	  '.'-> '.$rows["attended"].'
</td>
</tr>
</table>
</div>
</div>
</body>
';
?>

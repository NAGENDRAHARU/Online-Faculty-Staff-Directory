<?php
session_start();
if($_SESSION['status']!="Active")
{
    header("location:login1.php");
}
require 'nav.php'
$search = $_GET['search'];
$query = "select * from professors where name='$search'";
$query_run = mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0){
  $rows=mysqli_fetch_array($query_run)
  echo '<!DOCTYPE html>
  <html>
  <head>
  <title>'.$rows["name"].'</title>
  <style>
  body
  {
  	background-image:url("img/back.jpg");
  	background-size: cover;
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
  </style>
  </head>
  <body>
  	<div class="navbar">
   <a href="#contact">Contact</a>
   <div class="topnav-right">
   <a href="logout.php">Logout</a>
   </div>
  </div>
  <br><br><br>
  <div align="center">
  <table>
  <tr>
  <td colspan="1"><img src="'.$rows["no"].'.jpg"><td>
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
  '.split(",", $rows["edu1"])[0].'
  </td>
  <td>
  '.split(",", $rows["edu1"])[1].'
  </td>
  <td>
  '.split(",", $rows["edu1"])[2].'
  </td>
  </tr>
  <tr>
  <td colspan="2">'.split(",", $rows["edu2"])[0].'</td>
  <td>'.split(",", $rows["edu2"])[1].'</td>
  <td>'.split(",", $rows["edu2"])[2].'</td>
  </tr>
  <tr>
  <td colspan="4"><b>Other Details:</b><br>
  	<br>
  	<b>Research Interests:</b><br>
      '->.$rows["interests"].'
  	<b>Selected Publications:</b><br>
  	  '->.$rows["publications"].'
  	<b>Academic Experience</b><br>
  	  '->.$rows["experience"].'
  	<b>Organized Conference/workshop/seminar:</b><br>
  	  '->.$rows["workshop"].'
  	<b>Workshop Attended:</b><br>
  	  '->.$rows["attended"].'
  </td>
  </tr>
  </table>
  </div>
  </body>
'
}
else {
  echo '<script type="text/javascript">alert("No search results found..")</script>';
}
?>

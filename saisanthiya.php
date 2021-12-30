<?php
session_start();
if($_SESSION['status']!="Active")
{
    header("location:login1.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>MS.D.Sai Santhiya</title>
<style>
body
{
	background-image:url("back.jpg");
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
.navbar {
  overflow: hidden;
  background-color:#1abc9c;
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
<td colspan="1"><img src="saisanthiya.jpg" alt="sai santhiya"><td>
<td colspan="2">
	<b>MS.D.Sai Santhiya</b><br>
	Assistant Professor(O.G)<br>
	<b>Area:</b>Network Security, Big Data<br>
	<b>Affiliation:</b>Department of Information Technology, SRM Institute of Science and Technology (formerly known as SRM University), Kattankulathur Campus<br>
	<b>Email:</b> saisanthiya.d@ktr.srmuniv.ac.in
</td>
</tr>
<tr>
<th colspan="4"><b>Education:</b></th>
</tr>
<tr>
<td colspan="2"><?php 
	$xml=simplexml_load_file("saisanthiya.xml") or die("Error: Cannot create object");
	echo $xml->Education->Degree;
	?>
</td>
<td>
	<?php 
	$xml=simplexml_load_file("saisanthiya.xml") or die("Error: Cannot create object");
	echo $xml->Education->Branch;
	?>
</td>
<td>
	<?php 
	$xml=simplexml_load_file("saisanthiya.xml") or die("Error: Cannot create object");
	echo $xml->Education->College;
	?>
</td>
</tr>
<tr>
<td colspan="2">B.E</td>
<td>Computer Science</td>
<td>Arulmigu Meenakshi Amman College of Engineering </td>
</tr>
<tr>
<td colspan="4"><b>Other Details:</b><br>
	<br>
	<b>Research Interests:</b><br>
    <?php 
	$xml=simplexml_load_file("saisanthiya.xml") or die("Error: Cannot create object");
	echo "->".$xml->Education->ReasearchInterests."<br><br>";
	?>
	<b>Selected Publications:</b><br>
	<?php 
	$xml=simplexml_load_file("saisanthiya.xml") or die("Error: Cannot create object");
	echo "->".$xml->Education->SelectedPublications."<br><br>";
	?>
	<b>Academic Experience</b><br>
	<?php 
	$xml=simplexml_load_file("saisanthiya.xml") or die("Error: Cannot create object");
	echo "->".$xml->Education->AcademicExperience."<br><br>";
	?>
	<b>Organized Conference/workshop/seminar:</b><br>
	<?php 
	$xml=simplexml_load_file("saisanthiya.xml") or die("Error: Cannot create object");
	echo "->".$xml->Education->OrganizedConference."<br><br>";
	?>
	<b>Workshop Attended:</b><br>
	<?php 
	$xml=simplexml_load_file("saisanthiya.xml") or die("Error: Cannot create object");
	echo "->".$xml->Education->WorkshopAttended."<br><br>";
	?>
</td>
</tr>
</table>
</div>
</body>

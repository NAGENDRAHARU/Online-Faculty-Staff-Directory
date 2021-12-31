<?php
session_start();
require 'nav.php';
?>
<!doctype html>
<html>
<head>
<title>Home</title>	
<link rel="stylesheet" href="homecss.css">
</head>
<body>
<div class="navbar">
 <a href="index.php">Home</a>
 <a href="#contact">Contact</a>
 <div class="topnav-right">
 <a href="Signup1.php">Signup</a>
 <a href="login1.php">Login</a>
 </div>
</div>
<div class="title">
<center>
<h1>
SRM FACULTY STAFF DIRECTORY
</h1>
</center>
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="1.jpeg" style="width:100%; height: 100%;">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="2.jpeg" style="width:100%; height: 100%;">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="3.jpeg" style="width:100%; height: 100%;">
  </div>
 <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<p style='color:black'>
  Online faculty directory enables user to effortlessly view college/university faculty details. Student can simply view different college/university faculty details anywhere required at any time as this application is handy. This system is built with effective graphical user interface which enables user openness. User can search faculty details and view their particular details such as name, department, courses, area of expertise, and professional interest. This system reduced time and cost of user. Here there are two entities who will access this system i.e. admin and student. Admin is authorized to add and manage all the faculty details. User can directly search for faculty and view their details. Data in database are maintained securely without any maintenance cost.
</p>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

</body>
</html>

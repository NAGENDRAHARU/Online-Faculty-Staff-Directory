<?php
session_start();
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
<script type="text/javascript">
const basicAutocomplete = document.querySelector('#search-autocomplete');
const data = ['One', 'Two', 'Three', 'Four', 'Five'];
const dataFilter = (value) => {
return data.filter((item) => {
  return item.toLowerCase().startsWith(value.toLowerCase());
});
};
</script>
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
<form action="faculty.php" method="get">
  <div class="input-group wrap">
    <div id="search-autocomplete" class="search form-outline">
      <input type="text" name="search" id="form1" class="searchterm form-control" />
      <label class="form-label" for="form1">Search</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary searchbtn">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>
<?php
if(isset($_GET['submit']))
{
$name = $_GET['search'];
$_SESSION['search'] = $name;
}
?>
</body>
</html>

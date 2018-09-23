<! DOCTYPE html>
	<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Information</title>
	<link rel="stylesheet" type="text/css" href="design.css" media="max-device-height">
	<style>
body{
  background: url(picture/picture1.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
}


input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
		border-style: solid;
    border-color: red green blue blue;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date]{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}


	input[type=submit],[type=reset] {
		background-color: #4CAF50; /* Green */
     border: none;
     color: white;
     padding: 20px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     margin: 4px 2px;
     cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
		border-radius: 12px;
}
input[type=reset]:hover{
	background-color: #ff0000;
	border-radius: 12npx;
}
div {
    border-radius: 5px;
    background-color: #E8E8E8;
    padding: 20px;
}
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 20px 45px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: #99994d;
}
h1{
	color: #00e6e6;
	font-family: sans-serif;
	background-color: #e60000;
	padding: 50px 60px;
	page-break-inside: auto;
 border-radius: 4px;
 max-height: 150%;
 font-size: 40px;
 margin: 0px 0px;

}
hr{
	margin: 0px 0px;
}
h3{
	color:#6600ff;
	font-family: sans-serif;
	font-size:20px;
}
h4{
	color: #d83a2d;
	font-family: sans-serif;
	background-color:#b49d80;
	padding: 10px 30px;
	page-break-inside: auto;
 border-radius: 6px;
 font-size: 40px;

}
label{
	font-size: 20px;
}
	</style>
</head>
	<body >

			<h1 align= "center">Student Information</h1>
		<hr/>

<div>
		<form action="" method="post" name="">
	<label for="fname">Studnt id</label>
		<input type="text" name="Studentid" placeholder="Enter Your name"  >
		<label for="fname">First name</label>
		<input type="text" name="Firstname" placeholder="Enter your First name" >
		<label>Middle name</label>
		<input type="text" name="Middlename" placeholder="Enter your Middle name">
		<label>Last name</label>
		<input type="text" name="Lastname" placeholder="Enter your Last name">
		<label>Street no</label>
		<input type="text" name="Streetno" placeholder="Enter your Street no">
		<label>Street Name</label>
		<input type="text" name="Streetname" placeholder="Enter your Street name">
		<label>City</label>
			<input type="text" name="City" placeholder="Enter your City name">
		<label>Department Name</label>
			<input type="text" name="Department" placeholder="Enter your Department name">
			<label>Birth Of Date</label>
			<input type="date" name="Dateofbirth" placeholder="Enter your Birth Of Date">

		<label>Semester</label>
				<input type="text" name="Semester" placeholder="Enter your Semester name">
			<label>Year</label>
			<select name="Year" >

				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
			</select>

	<input type="submit" name="Submit" value="Submit">
	<input type="reset" name="Reset" value="Reset">
</form>
</div>

<?php
include_once("config.php");
if(isset($_POST['Submit'])){
$Studentid = $_POST['Studentid'];
$Firstname = $_POST['Firstname'];
$Middlename = $_POST['Middlename'];
$Lastname = $_POST['Lastname'];
$Streetno = $_POST['Streetno'];
$Streetname = $_POST['Streetname'];
$City = $_POST['City'];
$Department = $_POST['Department'];
$Dateofbirth = $_POST['Dateofbirth'];
$Semester = $_POST['Semester'];
$Year = $_POST['Year'];

$result = "INSERT INTO student(Studentid,Firstname,Middlename,Lastname,Streetno,Streetname,City,
Department,Dateofbirth,Semester,Year) VALUES ('$Studentid','$Firstname','$Middlename','$Lastname',
'$Streetno','$Streetname','$City','$Department','$Dateofbirth','$Semester','$Year')";

$result = mysqli_query($conn,$result);

echo "<h4 align = 'center'>Information Added</h1>";

	}
?>

<h3 align= "center">Do You Want To see Who Registration This Form?</h3>
 <p align="center"><a href="view.php">VIEW</a></p>

		</body>
	</html>

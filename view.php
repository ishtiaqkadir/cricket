<?php
include_once("config.php");

$result = " SELECT Studentid,Firstname,Middlename,Lastname,Streetno,Streetname,City,Department,Dateofbirth,Semester,Year from student";
$result = mysqli_query($conn,$result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title >View Student Information</title>
<style media="screen">
	body{
		font-family: sans-serif;
		background: url(picture/picture2.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		background-attachment: fixed;
	}
	table,th,td{
		border: 2px solid black;
		border-collapse: collapse;
		opacity: 1.5;

	}
	th,td {
		padding: 10px;
		text-align: center;
		border-color: red;
		color: white;
	}
	tr:nth-child(even){
		background-color:	#e6673d;
	}
tr:nth-child(odd){
background-color: #ff0000;
}
table{
	width: 90%;
}
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 20px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: #7a7a52;
}
h1{
	color: #00e6e6;
	font-family: sans-serif;
	background-color:#ff4d4d;
	padding: 50px 30px;
	page-break-inside: auto;
border-radius: 6px;
margin: 0px 0px;
}
h3{
	color: #66ff66;
	font-family: sans-serif;
	font-size:20px;
}
div{
	font-size: 17px;
}
hr{
	margin: 0px 0px;
}
</style>
</head>
<body>

	<h1 align= "center">Student Information</h1>
	<hr>

<div>	<table align = "center">

       <tr>
    <th>Student id</th>
    <th >First name</th>
    <th>Middle name</th>
    <th>Last name</th>
    <th>Street no</th>
    <th>Street name</th>
    <th>City</th>
    <th>Department</th>
    <th>Date of birth</th>
    <th>Semester</th>
    <th>Year</th>

  </tr></div>

	<?php
	while($res = mysqli_fetch_array($result)) {
	?>
		<tr>
		<td><?php echo $res['Studentid']; ?></td>

		<td><?php echo $res['Firstname'];?></td>
        <td><?php echo $res['Middlename'];?></td>
        <td><?php echo $res['Lastname']; ?></td>

    		<td><?php echo $res['Streetno'];?></td>
            <td><?php echo $res['Streetname'];?></td>
            <td><?php echo $res['City'];?></td>
            <td><?php echo $res['Department']; ?></td>

        		<td><?php echo $res['Dateofbirth'];?></td>
                <td><?php echo $res['Semester'];?></td>
                <td><?php echo $res['Year']; ?></td>
		</tr>

	<?php
		}
		?>

	</table>
	<hr/>

<h3 align= "center">Do You Want To Sign Up?? </h3>
<p align="center"><a href="form.php">Registration Form</a></p>



</body>
</html>

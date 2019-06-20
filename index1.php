<!DOCTYPE html>
<html>
<head>
	<style >
	body{
		background-image:url('dark1.jpg');
        background-repeat: no-repeat;
    }
    table.centre{
    	margin-left: auto;
    	margin-right: auto;
    }
	</style>
	<title>sin_up</title>
</head>
<body>
	<form method="post" action="" >
		<table class="centre">
			<tr><td><b>Name: </b></td>
				<td><input type="text" name="name" value=""></td></tr>
			<br><br>
			<tr><td><b>User_id: </b></td>
				<td><input type="text" name="user" value=""></td></tr>
			<br><br>
			<tr><td><b>Age: </b></td>
				<td><input type="text" name="age" value=""></td></tr>
			<br><br>	
			<tr><td><b>Section: </b></td>
				<td><input type="text" name="section" value=""></td></tr>
			<br><br>    
			<tr><td><b>Mobile_no: </b></td> 
				<td><input type="text" name="no" value=""></td></tr>
			<br><br>
			<tr><td><b>Email_id: </b></td> 
				<td><input type="text" name="email" value=""></td></tr>
			<br><br>
			<tr><td><b>Passward: </b></td>
				<td><input type="passward" name="pass" value=""></td></tr>	
			<br><br>
			<tr><td><input type="submit" name="submit" value="SIN UP"></td></tr>
		</table>
	</form>

<?php

require 'index2.php';
if(isset($_POST['submit']))
{
	$nm=$_POST['name'];
    $usr = $_POST['user'];
    $sec=$_POST['section'];
    $age= $_POST['age'];
    $mob=$_POST['no'];
    $eml=$_POST['email'];
    $pas=$_POST['pass'];

 $query="INSERT INTO `st`(`name`, `user`, `secctin`, `age`, `no`, `email`, `password`) values('$nm','$usr','$sec','$age','$mob','$eml','$pas')";

$result=mysqli_query($ansh,$query);
	header("location:index.php");


}

 ?>

</body>
</html>
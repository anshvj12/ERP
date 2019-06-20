<!DOCTYPE html>
<html>
<head>
	<style >
	body{
		background-image:url('dark1.jpg');
        background-repeat: no-repeat;
    }
    table.centre{
    	margin-left:auto;
    	margin-right: auto;
    }
    </style>

	<title>changin password</title>
</head>
<body>
</html><?php

require 'index2.php';
$user=$_GET['user'];
$query="SELECT * from `st` where user='$user'";
$res=mysqli_query($ansh,$query);
$data=mysqli_fetch_array($res);

?>
<form method="post" action="" >
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<table class="centre">
		<tr><td>ENTER NEW PASSWORD</td>
        <td><input type ="text" name="password" value=""></td></tr>
        <tr><td><input type ="submit" name="submit" value="submision"></td></tr>
    </table>
<input type="hidden" name=user value=<?php echo $_GET['user']; ?>>
</form>

<?php

if(isset($_POST['submit']))
{
	$user=$_POST['user'];
	$pass=$_POST['password'];
	$query="UPDATE `st` SET `password`='$pass' WHERE user='$user'";
	$res=mysqli_query($ansh,$query);

	header("location:index.php");
}


?>
</body>
</html>



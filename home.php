<!DOCTYPE html>
<html>
<head>
	<style >
	body{
		background-image:url('dark2.jpg');
        background-repeat: no-repeat;
    }
    </style>
	<title></title>
</head>
<body>


<?php
require 'index2.php';

if(isset($_POST['submit']))
{
	$user = $_POST['user'];
	$pass= $_POST['password'];
	$query="SELECT * FROM `st` WHERE user='$user' and password='$pass'";

    $res=mysqli_query($ansh,$query);
    
    if($data=mysqli_fetch_array($res))
    {
	echo "NAME:";
    echo $data['name'];
    echo "<br>";
	echo "USER ID:";
    echo $data['user'];
    echo "<br>";
	echo "AGE:";
    echo $data['age'];
    echo "<br>";
	echo "MOBILE NUMBER:";
    echo $data['no'];
    echo "<br>";
	echo "EMAIL ID:";
    echo $data['email'];
    echo "<br>";
    }
    else{
    	echo "user and password is invailid <br><br> Go Back <br><br>Then Enter an vailid user id and password";
    }
  
}
else{
	echo "invailid user id and password";
}

?>



</body>
</html>


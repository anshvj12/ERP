<!DOCTYPE html>
<html>
<head>
	<style>
	body{

        background-image:url('login.jpg');
        background-repeat: no-repeat;
    }
    a{
    	text-decoration: none;
    }
    </style>
	<title>login_page</title>

</head>
<body>
<form method="post" action="home.php" >
	<table >
		<tr><td>USER ID</td>
			<td><input type ="text" name="user" ></td></tr>
		<br><br>
		<tr><td>PASSWORD </td>
			<td><input type ="password" name="password"></td></tr>
		<br><br>
        <tr><td><input type ="submit" name="submit" value="SIN IN"></tr></td>
    </table>
</form>
<br>

<a href="userid.php">FORGET PASSWORD </a>
&nbsp&nbsp

<a href="index1.php" >SIN UP</a>

</body>
</html>
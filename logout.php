<?php session_start(); ?>

<html>

<head>

<title></title>
<link rel="stylesheet" type="text/css" href="css.css" />
</head>

<body>

<div id="content2">
<?php
ob_start();

	

	$host="localhost"; // Host name 

	$username="www"; // Mysql username 

	$password="CRYURet4CNztqPWp"; // Mysql password 

	$db_name="androidTest"; // Database name 

	$tbl_name="members"; // Table name

	$login;

	$salt="Gl/$Jk";// this put on to make the password more secure

	

	// Connect to server and select databse.

	mysql_connect($host, $username, $password)or die("cannot connect"); 

	// this select the date base
	mysql_select_db($db_name)or die("cannot select DB");
	
$username = $_SESSION['username'];
$password = $_SESSION['password'];

if($_SESSION['loggedIn'] == ture){
		   $sql2="UPDATE `$tbl_name` SET login=0 WHERE username='$username' AND password='$password'";
		   $result2=mysql_query($sql2);
		   unset($_SESSION);
		   session_destroy();
		    
		   header("Location:index.php");
		   }
		   else{
			   echo 'you are not log out';
			   };
			   
?>

</div>

</body>

</html>
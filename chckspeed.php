<?php 



	session_start();

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



	$post_username = $_sesstion['username']; 

	$post_password = md5($salt.$_sesstion['password'].$salt);

	$speed = $_post['speed']
		
		$sql2="UPDATE `$tbl_name` SET speed='$speed' WHERE username='$post_username' AND password='$post_password'";
		$result2 = mysql_query($sql2);
		
	}

	else {

		$error = $post_username . " you have the wrong Username or Password";
        echo $error;
		
				
	}

	

	ob_end_flush();

	

?>
 
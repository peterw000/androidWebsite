<?php 



	session_start();

	ob_start();

	

	$host="localhost"; // Host name 

	$username="www"; // Mysql username 

	$password="CRYURet4CNztqPWp"; // Mysql password 

	$db_name="androidtest"; // Database name 

	$tbl_name="members"; // Table name

	$salt="Gl/$Jk";// this put on to make the password more secure

	

	// Connect to server and select databse.

	mysql_connect($host, $username, $password)or die("cannot connect"); 

	// this select the date base
	mysql_select_db($db_name)or die("cannot select DB");



	$post_username = $_POST['username']; 

	$post_password = md5($salt.$_POST['password'].$salt);

	  

	$sql = "SELECT * FROM $tbl_name WHERE username='$post_username' AND password='$post_password'";

	$result = mysql_query($sql);

	

	$count = mysql_num_rows($result);

	if($count==1) {
		//this is done to show you are login
		$_SESSION['loggedIn'] = true;
		//this stores the name of the users
		$_SESSION['username'] = $post_username;
		$_SESSION['password'] = $post_password;
		//this show that users has log in
		echo'you have successful login, '.$_SESSION['username'].'<br>';
		
		$sql2="UPDATE `$tbl_name` SET login=1 WHERE username='$post_username' AND password='$post_password'";
		$result2 = mysql_query($sql2);
		
		$sql3="UPDATE `$tbl_name` SET views= views + 1 WHERE username='$post_username' AND password='$post_password'";
		$result3 = mysql_query($sql3);
		
	}

	else {

		$error = $post_username . " you have the wrong Username or Password";
        echo $error;
		
				
	}

	

	ob_end_flush();

	

?>
 
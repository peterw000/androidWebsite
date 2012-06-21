
		<?php 

	ob_start();

	$host="localhost"; // Host name 

	$username="www"; // Mysql username 

	$password="CRYURet4CNztqPWp"; // Mysql password 

	$db_name="androidtest"; // Database name 

	$tbl_name="members"; // Table name

	$salt="G4*UtR";// this put on to make the password more secure

	// Connect to server and select databse.

	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 

	mysql_select_db("$db_name")or die("cannot select DB");



	$username=$_POST['username'];

	

	if ($_POST['password'] == $_POST['repassword'])

	{

	$password=md5($salt.$_POST['password'].$salt);

	};



	$check= "SELECT * FROM `$tbl_name` WHERE username = '$username'";

       	$result = mysql_query($check);

        $count = mysql_num_rows($result);

        
        if ($count == 0)

         {

          $sql="INSERT INTO `$tbl_name` ( `username`, `password`) VALUES ('$username', '$password')";

	$result=mysql_query($sql);


	header("location:index.php");

         }else {

           echo "this username or email has already been used";

         };

        





	ob_end_flush();

?>
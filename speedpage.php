<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit uploadS</title>
<link rel="stylesheet" type="text/css"  href="css.css" />
</head>
<header id="header">
    	<div id="header">
        	<img src="headerlogo.png" alt="Fruit R Us logo" />
            
            <form action = "checklogin.php" method="post">
            
            <table>
            	
                	<td><p style="margin-left:10px;">Username: <input type="text" name="username" style="width:100px; 
							border-radius: 10px 10px 10px 10px; 
							-moz-border-radius: 10px 10px 10px 10px;
							-WebKit-border-radius: 10px 10px 10px 10px; margin-left:10px;"/> </p></td>
                   <td> <p style="margin-left:10px;">Password:<input type="password" name="password"style="width:100px; 
							border-radius: 10px 10px 10px 10px; 
							-moz-border-radius: 10px 10px 10px 10px;
							-WebKit-border-radius: 10px 10px 10px 10px; margin-left:10px;"/></p></td>
				<td><input type="submit" name="submit" value="login" style=" width:100px; margin-left:10px;" /></td>
                
            </table>
            </form>
            
            <div id="register">
<?php
if($_SESSION['loggedIn'] == true) { ?>
<a href="logout.php" style="width:100px;">Log Out</a> 
<? }; 
if($_SESSION['loggedIn'] == false) { ?>
<a href="register.php" style="width:100px;">Register</a>
<? }; ?>
</div>
 </div>
            <div id="nav">
        		<ul>
                   <li><a href="index.php" id="homenav">Home</a></li>
            	</ul>
           </div>
        </div>
    </header>
<section>
        <div id= "sectioncontent">
<?php
	if(isset($_POST['formSubmit'])) 
	{
		$aCountries = $_POST['formCountries'];
		
		if(!isset($aCountries)) 
		{
			echo("<p>You didn't select any countries!</p>\n");
		} 
		else 
		{
			$nCountries = count($aCountries);
			
			echo("<p>You selected $nCountries countries: ");
			for($i=0; $i < $nCountries; $i++)
			{
				echo($aCountries[$i] . " ");
			}
			echo("</p>");
		}
	}
?>

<form action="checkspeed.php" method="post">
	<label for='formCountries[]'>Select a speed:</label><br>
	<select multiple="multiple" name="speed">
		<option value="0">Off</option>
		<option value="1">Slow</option>
		<option value="2">Medium</option>
		<option value="3">Fast</option>		
	</select><br>
	<input type="submit" name="formSubmit" value="Submit" >
</form>
</div>
    </section>


  

  
 
<body>
</body>
</html>
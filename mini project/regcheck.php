<?php 
$ID = $_REQUEST['ID'];
$password = $_REQUEST['password'];
$Confirm_Password= $_REQUEST['Confirm Password'];
$Name = $_REQUEST['Name'];
$fname = $_REQUEST['fname'];



if($name == null || $password == null || $ID == null||$password!=$Confirm_Password {
	echo "Please write your Name,ID,Password carefully";
  }  
	else{
		$user = $ID."|".$Name."|".$password."|".."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		header('location: login.html');	

    }

?>
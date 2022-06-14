<?php 
session_start();
$email= $_REQUEST['email'];


if($email == null){
	echo "null email";
}else{
	
	
		echo "done";
	}
?>
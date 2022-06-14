<?php 
session_start();
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$number = '0123456789';


if($firstname == null|| $lastname==null){
	echo "null username";
}else{
	
	
		echo "done";
	}
?>
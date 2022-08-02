<?php 
	session_start();
    $id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$date = $_REQUEST['sd'];
	$phone = $_REQUEST['pn'];
    $country = $_REQUEST['country'];
	$location = $_REQUEST['lc'];
	$postaalcode = $_REQUEST['pc'];
    $bankname = $_REQUEST['bn'];
	$bankaccount = $_REQUEST['bc'];
	$category = $_REQUEST['category'];
    $investamount = $_REQUEST['ia'];
	$shortmsg = $_REQUEST['comment'];
 



	if($id == null|| $name == null || $date == null || $phone == null || $location == null || $postaalcode == null || $bankname == null || $bankaccount == null || $investamount == null || $shortmsg == null){
		echo "Please fillup all required details";
	}else{

		$user = $id."|".$name."|".$date."|".$phone."|".$country."|".$location."|".$postaalcode."|".$bankname."|".$bankaccount."|".$category."|".$investamount."|".$shortmsg."\r\n";
		$file = fopen('invest.txt', 'a');
		fwrite($file, $user);
        
		header('location: isubmitted.php');
	}
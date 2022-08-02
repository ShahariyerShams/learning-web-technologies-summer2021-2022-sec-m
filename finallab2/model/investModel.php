<?php 
    require_once "db.php";

    function investinfo($user){
        $conn = getConnection();
		$sql = "insert into invest values('{$user['id']}','{$user['name']}','{$user['sd']}','{$user['pn']}','{$user['country']}','{$user['lc']}','{$user['pc']}','{$user['bn']}','{$user['bc']}','{$user['catagory']}','{$user['ia']}','{$user['comment']}'";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>
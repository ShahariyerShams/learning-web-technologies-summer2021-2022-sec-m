<?php


		


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<p align="right"><a href="dashbord.php">Dashbord</a>
</head>
<body>
	<table border="1px">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Invested In</td>
			<td>Investment Ammount</td>
			<td>Total Interest</td>
			<td>Action</td>
		</tr>
		<?php
		$file = fopen('invest.txt', 'r');
				
				while (!feof($file)) {
					$user = fgets($file);
					if($user == null){
						break;
					}
					
					$ab = explode("|", $user);
		?>
		<tr>
			<td><?=trim($ab[0])?></td>
			<td><?=trim($ab[1])?></td>
			<td><?=trim($ab[9])?></td>
			<td><?=$ab[10]?></td>
			<td><?=$ab[10]*0.1?></td>
			<td><a href="withdraw.php"><button>Withdraw</button></a></td>
		</tr>
		
		<?php
	}
	
	
?>
	</table>

</body>
</html>
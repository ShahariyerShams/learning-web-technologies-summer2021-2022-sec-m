<?php


		


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1px">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Donated In</td>
			<td>Donation Ammount</td>
			<td>Token of Reward</td>
		</tr>
		<?php
		$file = fopen('donation.txt', 'r');
				
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
			<td><?=$ab[10]?></td>
		</tr>
		<?php
	}


?> 
    <p  align="right"><a href="dashbord.php">Dashbord</a>
	</table>

</body>
</html>
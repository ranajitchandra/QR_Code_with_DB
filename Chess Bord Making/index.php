<!DOCTYPE html>
<html>
	<head>
		<title>Chess Bord</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Chess Bord</h1>
		<div> 
			<form action="" method="post">
				<input type="text" name="num" placeholder="Put Number" required>
				<input type="submit" name="submit" value="Enter">
			</form>
			
			<table>
				<?php
				
					if(isset($_POST["submit"])){
						$num = $_POST["num"];
						for($i=1; $i <=$num; $i++){
							echo "<tr>";
							for($j=1; $j<=$num; $j++){
								if(($i+$j)%2==0){
									echo "<td class='new'></td>";
								}else{
									echo "<td></td>";
								}
								
							}
							echo "</tr>";
						}
					}
				?>
			</table>
			
		</div>
	</body>
</html>
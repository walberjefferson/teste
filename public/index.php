<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Teste PHP</title>
</head>
<body>
	
	<?php
	#phpinfo();

	echo "Hoje é dia " . date('d/m/Y');
	echo " agora são " . date('H:i:s');
	?>

<?php 

	function linha($semana)
	{
		echo "<tr>";
		for($i = 0; $i <= 6; $i++){
			if(isset($semana[$i])){
				echo "<td>{$semana[$i]}</td>";
			}else{
				echo "<td></td>";
			}

		}
		echo "</tr>";
	}

	function calendario(){
		$dia = 1;
		$semana = array();

		while($dia <= 31){
			array_push($semana, $dia);
			if(count($semana) == 7){
				linha($semana);
				$semana = array();
			}
			$dia++;
		}
		linha($semana);
	}

	?>

<br>
	<table border="1">
		<tr>
			<td>Dom</td>
			<td>Seg</td>
			<td>Ter</td>
			<td>Qua</td>
			<td>Qui</td>
			<td>Sex</td>
			<td>Sab</td>
		</tr>
		<?php calendario(); ?>
	</table>


</body>
</html>

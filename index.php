<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Анимированная статистика</title>
</head>
<body>
	<table id = 'maintable'>
		<tr>
			<td>
				<?php 
					$anim1 = new animtion;
					$anim1 -> setOtdName(1);
					$anim1 -> getOtdName();
					
				?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
		</tr>
	</table>
</body>
</html>

<?php
	class animtion
	{
		var $otdel;
		
		function setOtdName($otd)
		{
			$this->otdel = $otd;
		}
		function getOtdName()
		{
			echo $this->otdel;
		}
	}

?>

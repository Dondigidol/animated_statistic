<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/jquery.js"></script>
	<title>Анимированная статистика</title>
</head>
<body>
	<table class = 'maintable'>
		<tr>
			<td class='otdels' id='otdel1'> 
				<div class = 'bg'>
					<div class='stages' id = 'stage1'>
				
					</div>					
				</div>
			</td>
			<td class='otdels' id='otdel2'>
				<div class = 'bg'>
					<div class='stages' id = 'stage2'>
				
					</div>					
				</div>
			</td>
			<td class='otdels' id='otdel3'>
				<div class = 'bg'>
					<div class='stages' id = 'stage3'>
				
					</div>					
				</div>
			</td>
			<td class='otdels' id='otdel4'>
				<div class = 'bg'>
					<div class='stages' id = 'stage4'>
				
					</div>					
				</div>
			</td>
			<td class='otdels' id='otdel5'>
				<div class = 'bg'>
					<div class='stages' id = 'stage5'>
				
					</div>					
				</div>
			</td>
		</tr>
	</table>
	<table class='maintable'>
		<tr>
			<td class='otdels' id='otdel6'>
				<div class = 'bg'>
					<div class='stages' id = 'stage6'>
				
					</div>					
				</div>
			</td>		
			<td class='otdels' id='otdel7'>
				<div class = 'bg'>
					<div class='stages' id = 'stage7'>
				
					</div>					
				</div>
			</td>		
			<td class='otdels' id='otdel8'>
				<div class = 'bg'>
					<div class='stages' id = 'stage8'>
				
					</div>					
				</div>
			</td>			
			<td class='otdels' id='otdel9'>
				<div class = 'bg'>
					<div class='stages' id = 'stage9'>
				
					</div>			
				</div>

			</td>
			<td class='otdels' id='otdel10'>
				<div class = 'bg'>
					<div class='stages' id = 'stage10'>
					
					</div>				
				</div>
			</td>			
		</tr>
	</table>
	<table class = 'maintable'>
		<tr>
			<td class='otdels' id='otdel11'>
				<div class = 'bg'>
					<div class='stages' id = 'stage11'>
					
					</div>				
				</div>
			</td>		
			<td class='otdels' id='otdel12'>
				<div class = 'bg'>
					<div class='stages' id = 'stage12'>
					
					</div>				
				</div>
			</td>		
			<td class='otdels' id='otdel13'>
				<div class = 'bg'>
					<div class='stages' id = 'stage13'>
				
					</div>
				</div>
			</td>		
			<td class='otdels' id='otdel14'>
				<div class = 'bg'>
					<div class='stages' id = 'stage14'>
				
					</div>
				</div>
			</td>			
			<td class='otdels' id='otdel15'>
				<div class = 'bg'>
					<div class='stages' id = 'stage15'>
				
					</div>
				</div>				
			</td>			
		</tr>
	</table>
	
	<script>
		$(document).ready(function(){
			$(".maintable td").css({"height": $(window).height()/3 +"px", "width": $(window).height()/3/1.75 + "px"});
			$(".bg").css({"background-image":"url(img/bg.png)", "width":"100%", "height":"100%", "background-size":"cover"});
			//setInterval(getTO, 60000);
			getParams();
			getTO();
			
		});
		
		var stages;
		
		function getParams()
		{
			$.ajax({
				type: 'POST',
				url: 'aj/getParams.php',
				success: function(data)
				{
					$("#stage1").html(data);
				}
			})
		}
		
		function getTO()
		{
			var otdel, sumTO, stage;
			var plan = 1000000;
			$.ajax({
				type: 'POST',
				url: 'aj/getTO.php',
				success: function(data)
				{
					stage=plan/25;
					var obj = $.parseJSON(data);
					for (var x in obj)
					{
						otdel = obj[x]['otdel'];
						sumTO = Math.round(parseFloat(obj[x]['summa']));
						// $("#stage" + otdel).html(otdel + " | "+ sumTO);
						curstage = Math.floor(sumTO / stage);
						$("#stage" + otdel).html(otdel);
						$("#stage" + otdel).css({"background-image":"url(img/stage" + curstage + ".png)", "width":"100%", "height":"100%", "background-size":"cover"});
					}
					
					
					
				}
			});
		}

	</script>
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
		function setBg($path)
		{
			echo('<div style="width: 100%; height: 100%; background-image: url(' . $path . '); background-size: cover;"></div>');
		}
	}

?>



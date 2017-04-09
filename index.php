<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/jquery.js"></script>
	<title>Анимированная статистика</title>
</head>
<body>
	<div id = 'header'>
		<input type=number id='koef' value=1 onchange='setkoef();'></input>
	</div>
	<div class='main'>
		<div id='mainbg'>
		
		</div>
		<div id='maincontent'>
			<table class = 'maintable'>
				<tr>
					<td class='otdels'> 
						<div class = 'bg'>
							<div class='stages' id = 'stage1'>
						
							</div>					
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						</div>
					</td>
					<td class='otdels'>
						<div class = 'bg'>
							<div class='stages' id = 'stage2'>
						
							</div>					
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>
					</td>
					<td class='otdels' id='otdel3'>
						<div class = 'bg'>
							<div class='stages' id = 'stage3'>
						
							</div>					
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>						
					</td>
					<td class='otdels' id='otdel4'>
						<div class = 'bg'>
							<div class='stages' id = 'stage4'>
						
							</div>					
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>						
					</td>
					<td class='otdels' id='otdel5'>
						<div class = 'bg'>
							<div class='stages' id = 'stage5'>
						
							</div>					
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
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
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						
						</div>						
					</td>			
					<td class='otdels' id='otdel7'>
						<div class = 'bg'>
							<div class='stages' id = 'stage7'>
						
							</div>					
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>						
					</td>			
					<td class='otdels' id='otdel8'>
						<div class = 'bg'>
							<div class='stages' id = 'stage8'>
						
							</div>					
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>						
					</td>			
					<td class='otdels' id='otdel9'>
						<div class = 'bg'>
							<div class='stages' id = 'stage9'>
						
							</div>			
						</div>

					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>						
					</td>
					<td class='otdels' id='otdel10'>
						<div class = 'bg'>
							<div class='stages' id = 'stage10'>
							
							</div>				
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
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
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>						
					</td>			
					<td class='otdels' id='otdel12'>
						<div class = 'bg'>
							<div class='stages' id = 'stage12'>
							
							</div>				
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>						
					</td>			
					<td class='otdels' id='otdel13'>
						<div class = 'bg'>
							<div class='stages' id = 'stage13'>
						
							</div>
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>					
					</td>			
					<td class='otdels' id='otdel14'>
						<div class = 'bg'>
							<div class='stages' id = 'stage14'>
						
							</div>
						</div>
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div id = 'otdel1' class = 'otdelnum'>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>						
					</td>			
					<td class='otdels' id='otdel15'>
						<div class = 'bg'>
							<div class='stages' id = 'stage15'>
						
							</div>
						</div>				
					</td>
					<td class = 'otdinfo'>
						<div class = 'tableinfo'>
							<div>Отдел</div>
							<div>Уровень</div>
							<div>ТО руб.</div>
							<div>ТО %</div>
						
						</div>						
					</td>			
				</tr>
			</table>
		</div>
	</div>
	<script>
		$(document).ready(function()
		{
			$(".otdels").css({
				"height": ($(window).height() - $('#header').height())/3 +"px",
				"width": $(window).height()/3/1.75 + "px"
			});
			$(".otdinfo").css({
				"width": $(".otdels").width() *0.6 + "px"
			});
			$(".bg").css({
				"background-image":"url(img/bg.png)",
				"width":"100%",
				"height":"100%",
				"background-size":"cover"
			});
			$("#mainbg").css({
				/* "width": $(".maintable").width(), 
				"height": $(".maintable").height()*2,  */
/* 				"position": "absolute",
				"border-bottom": "100px solid red",
				"border-left": "50px solid transparent",
				"border-right": "50px solid transparent",
				"height": "0",
				"width": "100px" */
			});
			
			$(".tableinfo").css({
				"width": $(".otdinfo").width(),
				"background": "#fde910",
				"font": "10px Helvetica, Arial, sans-serif",
				"border-collapse": "collapse"
			});
				
			$(".main").css({
				"width": $(".maintable").width(),
				"height": ($(window).height() - $('#header').height()) +"px",
				/* "border": "1px solid red", */
				"margin": "0 auto",
				"position": "relative"
			});
			
			
			getParams();
			
			getTotalTO();
			setInterval(getTO, 80000);
			//getTO();
			
		});
		
		var stages, k;
		var plan = [];
		var totalTO = [];
		
		function setkoef()
		{
			k = $("#koef").val();
			getTO();
		}
		
		
		function getParams()
		{
			$.ajax({
				type: 'POST',
				url: 'aj/getParams.php',
				success: function(data)
				{
					var obj = $.parseJSON(data);
					for(var x=0; x<=obj.length-1; x++)
					{
						plan[x] = obj[x];
					}
					
				}
			})
		}
		
		function getTotalTO()
		{
			var otdel, sumTO, stage;
			$.ajax({
				type: 'POST',
				url: 'aj/getTotalTO.php',
				success: function(data)
				{
					var obj = $.parseJSON(data);
					for(var x=0; x<=obj.length-1; x++)
					{
						totalTO[x] = obj[x];
					}
					alert('Загружено!');
				}
			});
		}
		
		function getTO()
		{
			var otdel, sumTO, stage;
			$.ajax({
				type: 'POST',
				url: 'aj/getTO.php',
				success: function(data)
				{
					var obj = $.parseJSON(data);
					for (var x=0; x<15; x++)
					{
						otdel = x + 1;
						stage = plan[x]/25;
						sumTO = Math.round(parseFloat(obj[x]));
						curstage = Math.floor((sumTO + totalTO[x]) * k / stage);
						if (curstage>25)
						{
							curstage = 25;
						}
						
						$("#stage" + otdel).html(curstage);
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



<?php
	include("data.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>chart created with amCharts | amCharts</title>
		<meta name="description" content="chart created using amCharts live editor" />
		
		<!-- amCharts javascript sources -->
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- amCharts javascript code -->
<script>
	$(document).ready(function(){
		$("#cur-gra").css('color','#fb1');
	});
</script>
<script type="text/javascript">
			AmCharts.makeChart("chartdiv",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonText": "[[title]] of [[category]]:[[value]]",
							"bullet": "round",
							"id": "AmGraph-1",
							"title": "CAD->USD",
							"valueField": "column-1"
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"title": "Conversion rate"
						}
					],
					"allLabels": [],
					"balloon": {},
					"legend": {
						"enabled": true,
						"useGraphSettings": true
					},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "XE CAD->USD"
						}
					],
					"dataProvider": [
						{
							"category": "<?php
										include("data.php"); 
										echo $xval[0];?>",
							"column-1": "<?php
										include("data.php"); 
										echo $yval[0];?>"
						},
						{
							"category": "S<?php
										include("data.php"); 
										echo $xval[1];?>",
							"column-1": "<?php
										include("data.php"); 
										echo $yval[1];?>"
						},
						{
							"category": "<?php
										include("data.php"); 
										echo $xval[2];?>",
							"column-1": "<?php
										include("data.php"); 
										echo $yval[2];?>"
						},
						{
							"category": "<?php
										include("data.php"); 
										echo $xval[3];?>",
							"column-1": "<?php
										include("data.php"); 
										echo $yval[3];?>"
						},
						{
							"category": "<?php
										include("data.php"); 
										echo $xval[4];?>",
							"column-1": "<?php
										include("data.php"); 
										echo $yval[4];?>"
						},
						{
							"category": "<?php
										include("data.php"); 
										echo $xval[5];?>",
							"column-1": "<?php
										include("data.php"); 
										echo $yval[5];?>"
						},
						{
							"category": "<?php
										include("data.php"); 
										echo $xval[6];?>",
							"column-1": "<?php
										include("data.php"); 
										echo $yval[6];?>"
						},
						{
							"category": "<?php
										include("data.php"); 
										echo $xval[7];?>",
							"column-1": "<?php
										include("data.php"); 
										echo $yval[7];?>"
						}
					]
				}
			);
		</script>
		
<script>
			$('a').css('display','none');
		</script>
<script> alert(<?php echo $xval[0]; ?>) </script>
<link href="currency-graph.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			include('headder.php');
		?>
		<div id="chartdiv" style="width: 100%; height: 75vh; background-color: #FFFFFF;" ></div>
		<h3><?php
		include("data.php"); 
			echo $xval[0];?></h3>
	</body>
</html>
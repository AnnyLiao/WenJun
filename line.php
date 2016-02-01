<!DOCTYPE HTML>
<html>
<?php require_once('connect.php'); ?>
<?php 
$who = $_GET['who'];
$candidate1 = '';
$candidate2 = '';
$candidate3 = '';
if($who == 'president'){
	$candidate1 = '蔡英文';
	$candidate2 = '朱立倫';
	$candidate3 = '宋楚瑜';
}else if($who == 'vice-president'){
	$candidate1 = '陳建仁';
	$candidate2 = '王如玄';
	$candidate3 = '徐欣瑩';
}

date_default_timezone_set('Asia/Taipei'); //默認時區
$Cday = date("Y-m-d",time());  
$day=array($Cday);//今天
$d1=strtotime($Cday); 
$december = strtotime('2015-12-01');
$Days=round(($d1-$december)/3600/24);

for($d = 1; $d <= $Days; $d++){
  $day2 = date("Y-m-d",strtotime("-".$d." day"));
  array_push($day, $day2);
}
?>
<head>  
	<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{

			animationEnabled: true,
			axisX:{

				gridColor: "Silver",
				tickColor: "silver",
				valueFormatString: "DD/MMM"

			},                        
                        toolTip:{
                          shared:true
                        },
			theme: "theme1",
			axisY: {
				gridColor: "Silver",
				tickColor: "silver"
			},
			legend:{
				verticalAlign: "center",
				horizontalAlign: "right"
			},
			data: [
			{        
				type: "line",
				showInLegend: true,
				lineThickness: 2,
				name: <?php echo "'".$candidate1."'"; ?>,
				markerType: "square",
				color: "#20B2AA",
				dataPoints: [
				<?php
					for($i = 0; $i < sizeof($day); $i++){

					$result = mysql_query("SELECT `COUNT`, `DATE` FROM `keywords` WHERE `CATEGORY` = '$candidate1' and `DATE` = '$day[$i]'");
					$num_rows = mysql_num_rows($result);
					$date = explode('-', $day[$i]);
					if($num_rows == 0){
						
				?>
				{ x: new Date(<?php echo $date[0];?>, <?php echo $date[1]-1;?>, <?php echo $date[2];?>), y: 0 },
				<?php
					}else{
					while($row = mysql_fetch_row($result))
    				{        
				?>
				{ x: new Date(<?php echo $date[0];?>, <?php echo $date[1]-1;?>, <?php echo $date[2];?>), y: <?php echo $row[0]; ?> },
				<?php } }}?>
				]
			},
			{        
				type: "line",
				showInLegend: true,
				name: <?php echo "'".$candidate2."'"; ?>,
				color: "#003C9D",
				lineThickness: 2,

				dataPoints: [
				<?php
					for($i = 0; $i < sizeof($day); $i++){
					$result = mysql_query("SELECT `COUNT`, `DATE` FROM `keywords` WHERE `CATEGORY` = '$candidate2' and `DATE` = '$day[$i]'");
					$num_rows = mysql_num_rows($result);
					$date = explode('-', $day[$i]);
					if($num_rows == 0){
						
				?>
				{ x: new Date(<?php echo $date[0];?>, <?php echo $date[1]-1;?>, <?php echo $date[2];?>), y: 0 },
				<?php
					}else{
					while($row = mysql_fetch_row($result))
    				{        
				?>
				{ x: new Date(<?php echo $date[0];?>, <?php echo $date[1]-1;?>, <?php echo $date[2];?>), y: <?php echo $row[0]; ?> },
				<?php } }}?>
				]
			},
			{        
				type: "line",
				showInLegend: true,
				name: <?php echo "'".$candidate3."'"; ?>,
				color: "#FFA07A",
				lineThickness: 2,

				dataPoints: [
				<?php
					for($i = 0; $i < sizeof($day); $i++){
					$result = mysql_query("SELECT `COUNT`, `DATE` FROM `keywords` WHERE `CATEGORY` = '$candidate3' and `DATE` = '$day[$i]'");
					$num_rows = mysql_num_rows($result);
					$date = explode('-', $day[$i]);
					if($num_rows == 0){
						
				?>
				{ x: new Date(<?php echo $date[0];?>, <?php echo $date[1]-1;?>, <?php echo $date[2];?>), y: 0 },
				<?php
					}else{
					while($row = mysql_fetch_row($result))
    				{        
				?>
				{ x: new Date(<?php echo $date[0];?>, <?php echo $date[1]-1;?>, <?php echo $date[2];?>), y: <?php echo $row[0]; ?> },
				<?php } }}?>
				]
			}
			

			
			],
          legend:{
            cursor:"pointer",
            itemclick:function(e){
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              	e.dataSeries.visible = false;
              }
              else{
                e.dataSeries.visible = true;
              }
              chart.render();
            }
          }
		});

chart.render();
}
</script>
<script type="text/javascript" src="js/canvasjs.js"></script>
</head>
<body>
	<div id="chartContainer" style="height: 300px; width: 100%;">
	</div>
</body>
</html>

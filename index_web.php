<!doctype html>
<?php include("connect.php");
session_start();
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

$rw = array();
$num = array();
$date = array();
$IdC =array();

?>

<html lang='en' class='no-js'>
<head>
  <meta charset='utf-8' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="image/x-icon" href="img/logo.png" rel="icon"><!--載入圖示-->
  <title>婉君踹共網</title>
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/simple-timeline.css">
  <link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/style-t.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css" />
  <link rel="stylesheet" type="text/css" href="css/style1.css" />
</head>

<body>

  <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
  <div class="jquery-script-clear"></div>

  <div id='flash'>
    <button class='yselect' id="yprev"><</button>
    <p class='currentYear'>0</p>
    <button class='yselect' id="ynext">></button>
    <div class='dateRight'>
      <p class='currentDate'>0</p>
    </div>
    <div id='timelineWrap'>
      <div class='months'>
        <div class='monthLine firstlast' style="left: 0px"></div>
        <div class='monthLine' style="left: 70.833px"></div>
        <div class='monthLine' style="left: 140.666px"></div>
        <div class='monthLine' style="left: 210.999px"></div>
        <div class='monthLine' style="left: 281.332px"></div>
        <div class='monthLine' style="left: 351.665px"></div>
        <div class='monthLine' style="left: 421.998px"></div>
        <div class='monthLine' style="left: 492.331px"></div>
        <div class='monthLine' style="left: 562.664px"></div>
        <div class='monthLine' style="left: 632.997px"></div>
        <div class='monthLine' style="left: 703.33px"></div>
        <div class='monthLine' style="left: 773.663px"></div>
        <div class='monthLine firstlast' style="left: 849px"></div>
      </div>
    </div>
    <div id="contentWrap row">
      <div class="large-1 columns">
        <div class='dbuttons'>
          <button class='dselect' id='dprev'><</button>
        </div>
      </div>

      <!--=========================================
        顯示前三關鍵字-時間軸
      =========================================-->

    
    
      <?php 
      /*day1~7的文章*/
      for ( $x=0 ; $x < sizeof($day) ; $x++ ) { //自動跑1~7天的文章?>
      <div class='tlcontainer large-10 columns row' data-date='<?php echo $day[$x];?>'> 
        <div class='large-12 columns'> 
          <!--day1~7：前三關鍵字-->
          <p class="eventTitle" style="display:none;">
          <?php
            $i=3*$x+1;
            $sql1="SELECT Keyword FROM weblink WHERE Date='$day[$x]' GROUP BY Keyword";
            $result1=mysql_query($sql1) or die('MySQL query error');
           
  		      while($row=mysql_fetch_array($result1))
            { ?>
              
            <?php
              echo $row['Keyword']; 
              unset($_SESSION['a'.$i]);
              $_SESSION['a'.$i]=$row['Keyword']; //把點擊到的關鍵字寫入session
              $i++;
            ?>
          <?php }?></p>
    
          <!--day1~7：前三關鍵字-->	
		 
          <div class="eventDate"><?php echo $day[$x];?></div>
          <p class="eventContent">
          <!--day1~7：新聞列表-關鍵字-->
          <?php
            $i=3*$x+1;
            $sql2="SELECT Keyword FROM weblink WHERE Date='$day[$x]' GROUP BY Keyword";
            $result2=mysql_query($sql2) or die('MySQL query error');
           
  		      while($row=mysql_fetch_array($result2)){?>
  	         <div class="fun-fact"><div class="fun-fact-digit"><label for="modal-<?php echo $i;?>"><?php echo $row['Keyword'];?></label></div></div>
          <?php $i++; } ?></p>
          <!--day1~7：新聞列表-關鍵字-->
  		  </div>
      </div>
      <?php } ?>
	
      <!--=========================================
        顯示前三關鍵字-時間軸
      =========================================-->


      <div class=" large-1 columns">
        <div class='dbuttons'>
          <button class ='dselect' id='dnext'>></button>
        </div>
      </div>
    </div>
  </div>

  <!--=========================================
    彈跳視窗內文-顯示新聞文章列表
  =========================================-->
  <!--day1~7內文-->
  <?php
    
    for ( $x=0; $x<sizeof($day); $x++ ) { //x為自動跑除了1~7天的新聞列表
      $count = 0;
      $days=$day[$x]; //跑day1~day7
      
      for ( $i=((3*$x)+1); $i<=(3*($x+1)); $i++ ) {
	    /*彈跳視窗 第一天 是 modal-1 、 modal-2 、 modal-3 ，故 i=1
		         第二天 是 modal-4 、 modal-5 、 modal-6 ，故 i=4
				 第三天 是 modal-7 、 modal-8 、 modal-9 ，故 i=7
				 第四天 是 modal-10 、 modal-11 、 modal-12 ，故 i=10
				 第五天 是 modal-13 、 modal-14 、 modal-15 ，故 i=13
				 第六天 是 modal-16 、 modal-17 、 modal-18 ，故 i=16
				 第七天 是 modal-19 、 modal-20 、 modal-21 ，故 i=19*/
  ?>
	
  <input class="modal-state" id="modal-<?php echo $i;?>" type="checkbox" />  <!--呼叫新聞連結的彈跳視窗 -->
  <div class="modal">
      <label class="modal__bg" for="modal-<?php echo $i;?>"></label>
	  
      <div class="modal__inner">
		<div id="top<?php echo $i;?>"></div>
        <label class="modal__close" for="modal-<?php echo $i;?>" ></label>
        <h2 style="font-size: 2em; font-family: '微軟正黑體'; text-shadow:3px 3px #cccccc; font-weight: bold;"><?php echo $_SESSION['a'.$i];?></h2>
		
		<div style="margin-bottom: 5%;">
        <?php
          
          $key=$_SESSION['a'.$i];
          $sql3="SELECT Keyword,Web,Links,Title,Date FROM weblink WHERE Date='$days' AND Keyword='$key' and (`PN_Comment` != '') GROUP BY Web ORDER BY Keyword ASC";
          $result3=mysql_query($sql3) or die('MySQL query error');
		  $r3=mysql_query($sql3) or die('MySQL query error');
		  while($data = mysql_fetch_array($r3)){
			echo  '<a href="#'.$data['Date'].$data['Web'].$data['Keyword'].'" class="a_demo_two" style="margin-right: 1%;">'.$data['Web'].'</a>';
		  
		  }?></div>
		  <?php
          while($row=mysql_fetch_array($result3)){?>
			
            <div id="<?php echo $row['Date'].$row['Web'].$row['Keyword'];?>" style="box-shadow:4px 4px 12px 4px rgba(20%,20%,40%,0.5); margin-bottom: 2%;">
            <a href="#top<?php echo $i;?>" class="a_demo_one"  style="float:right;">Top</a>
			<p style="font-size: 20px; font-weight: bold; width: 15%;"><?php  echo $row['Web']; ?></p>
			
            <?php 
              $Web=$row['Web'];
              $sql4="SELECT id,Keyword,Web,Links,Title,PN_Comment FROM weblink WHERE Date='$days' AND Keyword='$key' AND Web='$Web' and (`PN_Comment` != '') ORDER BY Keyword ASC";
              $result4=mysql_query($sql4) or die('MySQL query error');
			
              while($row=mysql_fetch_array($result4)){ ?>
                <label style="font-size: 20px; font-weight: 300;">&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $row['Links'];?>" target=_blank><?php echo $row['Title'];?></a><div id="chartContainer<?php echo $days.$count;?>" style="height: 200px; width: 50%;"></div></label>
                <?php array_push($IdC, $row['id'].'-'.$count); $count++; }?>
            </div>
          <?php }?>
		  
      </div>
  </div>
  <?php } ?>

    

  <?php 

    array_push($rw, $count);
    //$row[$x] = $count;
    //array_push($num['num'], $ary);
    //$num[$x] = $array;
    array_push($date, $days);
    //$date[$x] = $days;
    

    
  }?>
  
  <!--day1~7內文-->

  <!--=========================================
      彈跳視窗內文-顯示新聞文章列表
  =========================================-->
  

  <script type="text/javascript">
  window.onload = function () {
    <?php
    for($q = 0; $q < sizeof($IdC); $q++){
      $idc = explode('-', $IdC[$q]);
      $sql="SELECT * FROM weblink WHERE id = $idc[0]";
      $line = mysql_query($sql) or die('MySQL query error');
      //$num_rows = mysql_num_rows($line);
      while($row=mysql_fetch_array($line)){
        $dat = explode('-', $row['Date']);
        $SS = explode(';', $row['PN_Comment']);
    ?>
    var chart<?php echo $dat[1].$dat[2].$idc[1];?> = new CanvasJS.Chart("chartContainer<?php echo $row['Date'].$idc[1];?>",
    {
    animationEnabled: true,
    theme: "theme2",
    data: [
    {        
      type: "pie",
      indexLabelFontFamily: "Garamond",       
      indexLabelFontSize: 15,
      indexLabelFontWeight: "bold",
      startAngle:0,
      indexLabelFontColor: "MistyRose",       
      indexLabelLineColor: "darkgrey", 
      indexLabelPlacement: "inside", 
      toolTipContent: "{name}: {y}%",
      showInLegend: false, 
      dataPoints: [
        {  y: <?php echo $SS[0]; ?>, name: "Positive", legendMarkerType: "triangle"},
        {  y: <?php echo $SS[1]; ?>, name: "Negative", legendMarkerType: "square"}
      ]
    }
    ]
    });
    chart<?php echo $dat[1].$dat[2].$idc[1];?>.render();
    <?php } ?>
    <?php } ?>
  }
  </script>

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script> 
  <script src="simple-timeline.jquery.js"></script>
  <script type="text/javascript" src="js/canvasjs.min.js"></script>
   
  <script>
    $('div.tlcontainer').simpleTimeline();
  </script>
  
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  


</body>
</html>


	
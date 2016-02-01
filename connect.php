<?php
header("Content-Type:text/html;charset=utf8");
/*以下四個變數是要設定你的mysql相關設定*/
$dbhost='localhost';
$dbuser='root';
$dbpass='08122027';
$dbname='test';
/*以上四個變數是要設定你的mysql相關設定*/

$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die('Error with MySQL connection'); //建立連線

//以下是設定相關的編碼和選擇要使用的資料庫
mysql_query("SET NAMES 'utf8'"); 
mysql_select_db($dbname);
?>

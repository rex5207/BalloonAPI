<?php header('Access-Control-Allow-Origin: *'); ?>

<?php

$db_server = "127.0.0.1";
$db_user = "";
$db_passwd = "";
$db_name = "";
 
if(!@mysql_connect($db_server, $db_user, $db_passwd)){
    die("gg");
}
 
mysql_query("SET NAMES utf8");

if(!@mysql_select_db($db_name)){
        die("gg");
}

$name = $_POST['name'];
$message = $_POST['message'];
$balloontype = $_POST['balloontype'];
$sql = "SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'nthugra' AND TABLE_NAME = 'msgboard'";
$result = mysql_query($sql);
while($value = mysql_fetch_array($result)){//顯示動態及留言
	echo $value['AUTO_INCREMENT'];
}
?>

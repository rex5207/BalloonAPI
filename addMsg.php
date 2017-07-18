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
$name_FB = $_POST['name_FB'];
$message = $_POST['message'];
$balloontype = $_POST['balloontype'];
if(!isset($message) || trim($message)===''){
	return ;
}
$sql = "INSERT INTO msgboard(name,name_FB,message,balloontype,time) VALUES ('$name','$name_FB','$message','$balloontype',CURRENT_TIMESTAMP)";
mysql_query($sql);
$id = mysql_insert_id();
echo $id;
?>

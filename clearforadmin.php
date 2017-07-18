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

$sql = "UPDATE msgboard SET approved = 0 WHERE approved = 2 AND isFly = 0";
mysql_query($sql);

?>

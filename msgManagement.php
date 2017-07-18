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

$sql = "SELECT * FROM msgboard WHERE isFly = 0 AND approved = 0 ORDER BY id limit 10";
$result = mysql_query($sql);
$totalballoon = array();
while($row = mysql_fetch_array($result)){//顯示動態及留言
        $balloonArray = array('id' => $row['id'],
                              'name' => $row['name'],
                              'message' => $row['message']);
	$sql2 = "UPDATE msgboard SET approved = 2 WHERE id = ".$row['id'];
        mysql_query($sql2);	
	array_push($totalballoon, $balloonArray);
}

echo json_encode($totalballoon);

?>

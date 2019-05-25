<?php


$db_host		= 'localhost';
$db_user		= 'admin_shop';
$db_pass		= '123456';
$db_database	= 'my_shop'; 

$link = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_database,$link) or die(" ".mysql_error());
mysql_query("SET names utf8");

?>

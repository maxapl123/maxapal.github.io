<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
define('myeshop', true);    
include("db_connect.php");
$result = mysql_query("SELECT * FROM cart WHERE cart_id = '{$_POST['id']}' AND cart_ip = '{$_SERVER['REMOTE_ADDR']}'",$link);
If (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);    
$new_count = (int)$_POST['count'];
if ($new_count > 0)
{
$update = mysql_query ("UPDATE cart SET cart_count='$new_count' WHERE cart_id='{$_POST['id']}' AND cart_ip = '{$_SERVER['REMOTE_ADDR']}'",$link);
echo $new_count;       
}
else
{
echo $row["cart_count"]; 
}
}
}
?>
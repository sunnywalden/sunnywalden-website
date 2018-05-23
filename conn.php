<?php
$mysql_server_name='127.0.0.1';
$mysql_username='walden';
$mysql_password='walden0209';
$mysql_database='walden';
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database) or die("数据库连接错误!");
mysql_select_db($mysql_database,$conn) or die("数据库访问错误".mysql_error());
mysql_query("set names utf-8");
?>

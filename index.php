<?php
$conn = @mysql_connect("localhost","walden","walden0209");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
} else {
    echo "连接数据库成功！";
}
?>

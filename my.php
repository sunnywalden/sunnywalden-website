<?php  
session_start();  
  
//检测是否登录，若没登录则转向登录界面  
if(!isset($_SESSION['count'])){  
    header("Location:index.html");  
    exit();  
}  
//包含数据库连接文件  
include('conn.php');  
$account = $_SESSION['count'];  
//$username = $_SESSION['username'];  
$user_query = mysql_query("select * from sunny where count = '$account' limit 1");  
$row = mysql_fetch_array($user_query);  
echo '用户信息：<br />';  
echo '用户账号:',$account.'<br />';  
//echo '用户名：',$username,'<br />';  
echo '<a href="login.php?action=logout">注销</a> 登录<br />';  
?>
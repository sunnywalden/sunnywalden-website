<?php 
if($_POST['username'] == '') 
echo '您的登陆名不能为空。<a href="login.html">请重新填写</a>'; 
else 
echo '您的登陆名是：' . $_POST['username']; 
?> 

<? 
include "conn.php"; 
$UserName=$_POST["UserName"]; 
$mima1=$_POST["mima1"]; 
$mima2=$_POST["mima2"]; 
$xin=$_POST["xin"]; 
$nian=$_POST["nian"]; 
$dianhua=$_POST["dianhua"]; 
$email=$_POST["email"]; 
$qq=$_POST["qq"]; 
$sql="INSERT INTO 'my_china'.'chuche' ('id','UserName' ,'mima1' ,'mima2' ,'xin' ,'nian' ,'dianhua' ,'email' ,'qq' )VALUES (NULL , '$UserName', '$mima1', '$mima2', '$xin', '$nian', '$dianhua', '$email', '$qq')"; 
mysql_query($sql); 
echo "<script> alert('用户注册成功！');</script>"; 
echo "<script> window.location='zc.php';</script>"; 
?>

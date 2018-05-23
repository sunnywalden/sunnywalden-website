<?php
session_start();//开启session
$link=mysql_connect('localhost','walden','walden0209');//数据库连接，填入对应参数
if(!$link){
 echo "数据库连接失败!请稍后再试!";
}else{
 mysql_select_db('walden',$link);//选中数据库
 mysql_query("set names utf-8");//设置编码
}
//获取表单提交数据
$account=$_POST['count'];
//$password=md5($_POST['passwd']);
$password=$_POST['passwd'];
//查询判断
$sql="select 1 from sunny where count='$account' and passwd='$password' limit 1";
$rec=mysql_query($sql) or die ("执行失败");
if(mysql_num_rows($rec)>0){
    $_SESSION['count']=$account;//session存储，记录登录状态
    echo $account.'欢迎回来!进入<a href="my.php">用户中心</a><br />';
}else{
   exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');//登录失败
}

//注销登录  
if($_GET['action'] == "logout"){  
    unset($_SESSION['count']);  
    echo '注销登录成功！点击此处 <a href="index.html">登录</a>';  
    exit;  
}  

?>

<?php
session_start();//开启session
$conn=mysql_connect('localhost','walden','walden0209');//数据库连接，填入对应参数
if(!$conn){
 die('Could not connect: ' . mysql_error());
}else{
 mysql_select_db('walden',$conn);//选中数据库
 mysql_query("set names utf-8");//设置编码
}
//获取表单提交数据
$account=$_POST['count'];
//$password=md5($_POST['passwd']);
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$birth=$_POST['birth'];
$password=$_POST['passwd'];
//查询判断
$sql="insert into sunny values('$account','$name','$password','$email','$mobile','$birth')";
$rec=mysql_query($sql,$conn);
if($rec){
    $_SESSION['count']=$account;//session存储，记录登录状态
    echo $account.'账户创建成功，请'.'<a href="index.html">登录</a>';
}else{
   exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');//登录失败
}

//注销登录  
if($_GET['action'] == "logout"){
    unset($_SESSION['count']);
    echo '注销登录成功！点击此处 <a href="index.html">登录</a>';
    exit;
}
mysql_close($conn);
?>

<?php
session_start();
require_once('../inc/conn_pdo.php');
//设置该页面的编码为utf-8
header("Content-Type:text/html;charset=utf-8");
//接收表单传递过来的值并赋给相应的变量$admin_name和$admin_pass
$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];

//查找数据库中是否存在用户记录
//方式一
$sql="select * from admin where admin_name='".$admin_name."' and admin_pass='".$admin_pass."'";
$rows = $dbh->query($sql);
$total_num = $rows->rowCount();

/*//方式二
$sql = "select * from admin where admin_name= :admin_name and admin_pass= :admin_pass";
$sth = $dbh->prepare($sql);
$sth->execute(array(':admin_name' => $admin_name, ':admin_pass' => $admin_pass));
$rows = $sth->fetchAll();
$total_num = count($rows);

//方式三
$sql = "select * from admin where admin_name= ? and admin_pass= ?";
$sth = $dbh->prepare($sql);
$sth->execute(array($admin_name,$admin_pass));
$rows = $sth->fetchAll();
$total_num = count($rows);*/

if ($total_num>0) {
    $_SESSION['ischecked']="ok";
    $_SESSION['admin_name']=$_POST['admin_name'];
    echo "<script>alert('登陆成功!');window.location.href='index.php'</script>";
    exit;
}else{
    echo "<script>alert('你的帐号或密码不正确!');window.location.href='login.php'</script>";
    exit;
}
//关闭数据库连接
$dbh = null;
/*
 mysqli
 */
/*session_start();
require_once('../inc/conn_mysqli.php');
//设置该页面的编码为utf-8
header("Content-Type:text/html;charset=utf-8");
//接收表单传递过来的值并赋给相应的变量$admin_name和$admin_pass
$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];
//方式四 mysqli
$sql="select * from admin where admin_name='".$admin_name."' and admin_pass='".$admin_pass."'";
$result = $mysqli->query($sql);
$row=mysqli_num_rows($result);

//判断是否找到相应的数据记录
if ($row>0) {
	$_SESSION['ischecked']="ok";
	$_SESSION['admin_name']=$_POST['admin_name'];
	echo "<script>alert('登陆成功!');window.location.href='index.php'</script>";
	exit;
}else{
	echo "<script>alert('你的帐号或密码不正确!');window.location.href='login.php'</script>";
	exit;
}
//关闭数据库连接
$mysqli->close();*/
?>
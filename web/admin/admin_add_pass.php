<?php
require_once('session.php');
require_once ('../inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<body>
<?php
$admin_name=$_POST['admin_name'];
if ($admin_name==""){
    echo "<script>alert('帐号不能为空！');history.go(-1)</script>";
    exit;
}elseif(mysql_fetch_array(mysql_query("select * from admin where admin_name='".$_POST['admin_name']."'"))>0){
    echo "<script>alert('该帐号已存在，请换另一个帐号！');window.location.href='admin_add.php'</script>";
    exit;
}

$admin_pass=$_POST['admin_pass'];
if ($admin_pass==""){
    echo "<script>alert('密码不能为空！');history.go(-1)</script>";
    exit;
}
$sql_add="insert into admin (admin_name,admin_pass) values ('".$admin_name."','".$admin_pass."')";
mysql_query($sql_add,$conn);
echo "<script>alert('添加成功！');window.location.href='admin_list.php';</script>";
exit;
mysql_close($conn);
?>
</body>
</html>

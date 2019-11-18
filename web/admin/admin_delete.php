<?php
require_once('session.php');
require_once ('../inc/conn_pdo.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>删除管理员</title>
</head>
<body>
<?php

$sql="delete from admin where id=?";
$sth = $dbh->prepare($sql);
$sth->execute(array($_GET['id']));

echo "<script>alert('删除成功!');window.location.href='admin_list.php'</script>";
$dbh = null;
?>
</body>
</html>
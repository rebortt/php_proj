<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
	if ($_POST['qqnum']==""){
		echo "<script>alert('QQ号码不能为空！');history.go(-1)</script>";
		exit;
	}

    $sql_add="insert into qq (title,qqnum,truename) values (?,?,?)";
    $sth = $dbh->prepare($sql_add);
    $sth->execute(array($_POST['title'], $_POST['qqnum'], $_POST['truename']));

    echo "<script>alert('添加成功！');window.location.href='qq_list.php';</script>";
    $dbh = null;
?>
</body>
</html>

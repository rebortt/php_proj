<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
$sql = "delete from friend where id= :id";
$sth = $dbh->prepare($sql);
$sth->execute(array(':id' => $_GET['id']));
echo "<script>alert('删除成功');window.location.href='friend_list.php'</script>";
$dbh = null;
?>
</body>
</html>
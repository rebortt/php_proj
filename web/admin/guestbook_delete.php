<?php
require_once('session.php');
require_once ('../inc/conn_pdo.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>删除留言</title>
</head>
<body>
<?php
$sql="delete from guestbook where id='".$_GET['id']."'";
$count = $dbh->exec($sql);
echo "<script>alert('删除成功!');window.location.href='guestbook.php'</script>";
$dbh = null;
?>
</body>
</html>
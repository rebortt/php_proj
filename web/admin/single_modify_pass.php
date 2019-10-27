<?php
require_once('session.php');
require_once('../inc/conn.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title></title>
</head>
<body>
<?php
$sql="update single set title='".$_POST['title'].
    "',comefrom='".$_POST['comefrom'].
    "',pubdate='".$_POST['pubdate'].
    "',keywords='".$_POST['keywords'].
    "',description='".$_POST['description'].
    "',content='".$_POST['content']."' where id='".$_GET['id']."'";
mysql_query($sql,$conn);
echo "<script>alert('修改成功！');window.location.href='single_list.php';</script>";
mysql_close($conn);
?>
</body>
</html>

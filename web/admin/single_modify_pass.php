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
$pubdate=trim($_POST['pubdate']);
$keywords=trim($_POST['keywords']);
$description=trim($_POST['description']);
$sql="update single set title='".$_POST['title'].
    "',comefrom='".$_POST['comefrom'].
    "',pubdate='".$pubdate.
    "',keywords='".$keywords.
    "',description='".$description.
    "',content='".$_POST['content']."' where id='".$_GET['id']."'";

if(!mysql_query($sql,$conn))
{
    die('Can\'t update single:' .mysql_error());
}else{
    echo "<script>alert('修改成功！');window.location.href='single_list.php';</script>";
}
mysql_close($conn);
?>
</body>
</html>

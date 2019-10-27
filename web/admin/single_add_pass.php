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
$pubdate = trim($_POST['pubdate']);
$keywords = trim($_POST['keywords']);
$description = trim($_POST['description']);
$sql_add="insert into single (title,comefrom,pubdate,keywords,description,content) values
('".$_POST['title']."','".$_POST['comefrom']."','".$pubdate."','".$keywords
    ."','".$description."','".$_POST['content']."')";
if(!mysql_query($sql_add,$conn))
{
    die('Can\'t insert into DataBase:' .mysql_error());
}else{
    echo "<script>alert('添加成功！');window.location.href='single_list.php';</script>";
}
exit;
mysql_close($conn);
?>
</body>
</html>


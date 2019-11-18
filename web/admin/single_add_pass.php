<?php
require_once('session.php');
require_once ('../inc/conn_pdo.php');
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

$sql_add="insert into single (title,comefrom,pubdate,keywords,description,content) values(?,?,?,?,?,?)";
$sth = $dbh->prepare($sql_add);
$sth->execute(array($_POST['title'], $_POST['comefrom'],$pubdate,$keywords,$description,$_POST['content']));

echo "<script>alert('添加成功！');window.location.href='single_list.php';</script>";
$dbh = null;
?>
</body>
</html>


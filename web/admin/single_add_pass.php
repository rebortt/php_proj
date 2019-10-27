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
$sql="insert into single(title,comefrom,pubdate,keywords,description,content) values('".
    $_POST['title']."','".$_POST['comefrom']."','".$_POST['pubdate']."','".$_POST['keywords']."','".
    $_POST['description']."','".$_POST['content']."')";
mysql_query($sql,$conn);
?>
</body>
</html>

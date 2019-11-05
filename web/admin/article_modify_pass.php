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
/* 处理推荐位数据 */
$posid="";
if($_POST['posid']<>''){
    foreach($_POST['posid'] as $i){
        $posid .= $i.",";
    }
    $posid = substr($posid,0,-1);
}

$pubdate = trim($_POST['pubdate']);
$keywords = trim($_POST['keywords']);
$description = trim($_POST['description']);

$sql="update article set title='".$_POST['title'].
    "',comefrom='".$_POST['comefrom'].
    "',pubdate='".$pubdate.
    "',keywords='".$keywords.
    "',description='".$description.
    "',content='".$_POST['content'].
    "',posid='".$posid."' where id='".$_GET['id']."'";

if(!mysql_query($sql,$conn))
{
    die('修改失败:' .mysql_error());
}else{
    echo "<script>alert('修改成功！');window.location.href='article_list.php';</script>";
}
mysql_close($conn);
?>
</body>
</html>

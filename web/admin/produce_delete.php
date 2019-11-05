<?php
require_once('session.php');
require_once ('../inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>删除产品</title>
</head>
<body>
<?php
$sql="delete from produce where id='".$_GET['id']."'";
mysql_query($sql,$conn);
echo "<script>alert('删除成功!');window.location.href='produce_list.php'</script>";
mysql_close($conn);
?>
</body>
</html>
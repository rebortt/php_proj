<?php
require_once('session.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>退出后台</title>
</head>
<body>
<?php
session_unset();
session_destroy();
echo "<script>alert('退出成功！');window.parent.location.href='login.php'</script>";
?>
</body>
</html>

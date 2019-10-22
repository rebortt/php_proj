<?php
require_once('session.php');
require_once ('../inc/conn.php');
$sql="select * from admin where id='".$_GET['id']."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员列表</title>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="form_add" id="form_add" action="admin_modify_pass.php?id=<?=$row['id']?>" method="post" >
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td height="35" colspan="6" class="tt">修改管理员</td>
        </tr>
        <tr>
            <td width="6%" height="35">帐号</td>
            <td width="30%"><input name="admin_name" type="text" id="admin_name" value="<?=$row['admin_name']?>" disabled='disabled' /></td>
            <td width="8%">密码</td>
            <td width="47%"><input name="admin_pass" type="password" id="admin_pass" size="25" placeholder="若修改，请输入新密码！" /></span></td>
            <td width="9%" colspan="2"><input type="submit" name="button" id="button" value="修改" /></td>
        </tr>
    </table>
</form>
</body>
</html>
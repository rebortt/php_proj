<?php
require_once('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员列表</title>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="form_add" id="form_add" action="admin_add_pass.php" method="post" >
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td class="tt" colspan="6">添加管理员</td>
        </tr>
        <tr>
            <td width="6%" height="35"><span style="color:#F30">*</span>帐号</td>
            <td width="30%"><input type="text" name="admin_name" id="admin_name" /></td>
            <td width="13%"><span style="color:#F30">*</span>密码</td>
            <td width="28%"><input name="admin_pass" type="password" id="admin_pass" size="30" /></td>
            <td width="23%" colspan="2"><input type="submit" name="button" id="button" value="添加" /></td>
        </tr>
    </table>
</form>
</body>
</html>
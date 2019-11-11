<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');

$sql="select * from slide where id='".$_GET['id']."'";
$rows = $dbh->query($sql);
$row = $rows->fetch();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改焦点幻灯片</title>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<link href="css/table.css" rel="stylesheet" type="text/css" />
<script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script>
	KindEditor.ready(function(K) {
				var editor = K.editor({
					allowFileManager : true
				});
	            K('#image3').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							showRemote : false,
							imageUrl : K('#url3').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url3').val(url);
								editor.hideDialog();
							}
						});
					});
				});
			});
</script>
</head>
<body>
<form name="form1" id="form1" action="slide_modify_pass.php?id=<?=$row['id']?>" method="post" >
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td height="41" colspan="2" class="tt">修改焦点幻灯</td>
    </tr>
    <tr>
      <td width="14%" height="35"><span style="color:#F60">*</span>标题：</td>
      <td width="86%"><input name="title" type="text" id="title" value="<?=$row['title']?>" /></td>
    </tr>
    <tr>
      <td height="35">链接：</td>
      <td><input name="link" type="text" id="link" value="<?=$row['link']?>" /></td>
    </tr>
    <tr>
      <td height="35"><span style="color:#F60">*</span>缩略图：</td>
      <td><input name="thumbnail" type="text" id="url3" value="<?=$row['thumbnail']?>" size="20" />
          <input type="button" id="image3" value="上传" /></td>
    </tr>
    <tr>
      <td height="35"><span style="color:#F60">*</span>排序：</td>
      <td><input name="orderid" type="text" id="orderid" value="<?=$row['orderid']?>" size="10" /></td>
    </tr>
    <tr>
      <td height="35" colspan="2"><input type="submit" name="button" id="button" value="提交" /></td>
    </tr>
  </table>
</form>
</body>
</html>

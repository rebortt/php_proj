<?php
require_once('session.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>添加焦点幻灯</title>
    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="css/table.css" type="text/css" />
    <script charset="UTF-8" src="kindeditor/kindeditor-min.js"></script>
    <script charset="UTF-8" src="kindeditor/lang/zh_CN.js"></script>
    <script>
        var editor;
        KindEditor.ready(function(K){
            var editor=K.editor({
                allowFileManager:true
            });
            K('#slide_image').click(function(){
                editor.loadPlugin('image',function(){
                    editor.plugin.imageDialog({
                        showRemote:true,
                        imageUrl:K('#slide_url').val(),
                        clickFn:function(url,title,width,height,border,align){
                            K('#slide_url').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
        });
    </script>
</head>
<body>
<form id="form1" name="form1" method="post" action="slide_add_pass.php">
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="2" class="tt">添加幻灯</td>
        </tr>
        <tr>
            <td width="15%" height="35">
                <span style="color:#F30">*</span>标题：
            </td>
            <td width="85%">
                <input name="title" type="text" id="title" size="50" />
            </td>
        </tr>
        <tr>
            <td height="35">链接：
            </td>
            <td>
                <input name="link" type="text" id="link" />
            </td>
        </tr>
        <tr>
            <td height="35">
                <span style="color:#F30">*</span>缩略图：
            </td>
            <td>
                <input name="thumbnail" type="text" id="slide_url" value="" />
                <input type="button" id="slide_image" value="选择图片" />
            </td>
        </tr>
        <tr>
            <td height="35">
                <span style="color:#F30">*</span>排序：
            </td>
            <td>
                <input id="orderid" name="orderid" type="text" size="20" />
            </td>
        </tr>
        <tr>
            <td height="35" colspan="2">
                <input type="submit" name="Submit" value="提交" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>

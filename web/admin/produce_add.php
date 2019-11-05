<?php
require_once('session.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>添加文章</title>
    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="css/table.css" type="text/css" />
    <script charset="UTF-8" src="kindeditor/kindeditor-min.js"></script>
    <script charset="UTF-8" src="kindeditor/lang/zh_CN.js"></script>
    <script>
        var editor;
        KindEditor.ready(function(K){
            editor=K.create('textarea[name="content"]',{
                allowFileManager:true
            });
            K('#image3').click(function(){
                editor.loadPlugin('image',function(){
                    editor.plugin.imageDialog({
                        showRemote:true,
                        imageUrl:K('#url3').val(),
                        clickFn:function(url,title,width,height,border,align){
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
<form id="form1" name="form1" method="post" action="produce_add_pass.php">
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="2" class="tt">添加产品</td>
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
            <td height="35">来源：
            </td>
            <td>
                <input name="comefrom" type="text" id="comefrom" value="本站" />
            </td>
        </tr>
        <tr>
            <td height="35">发布日期：
            </td>
            <td>
                <?php
                date_default_timezone_set('UTC');
                $pubdate = date("Y/m/d");
                ?>
                <input name="pubdate" type="text" id="pubdate" value="<?=$pubdate?>" />
            </td>
        </tr>
        <tr>
            <td height="35">
                <span style="color:#F30">*</span>缩略图：
            </td>
            <td>
                <input name="thumbnail" type="text" id="url3" value="" />
                <input type="button" id="image3" value="选择图片" />（建议大小为70*70）
            </td>
        </tr>
        <tr>
            <td height="68">关键词：</td>
            <td>
                <label for="keywords"></label>
                <textarea name="keywords" cols="60" rows="3" id="keywords"></textarea>
            </td>
        </tr>
        <tr>
            <td height="68">描述：</td>
            <td>
                <textarea name="description" cols="60" rows="3" id="url3"></textarea>
            </td>
        </tr>
        <tr>
            <td height="353">
                <span style="color:#F30">*</span>内容：
            </td>
            <td>
                <textarea name="content" style="width:800px;height:300px;"></textarea>
            </td>
        </tr>
        <tr>
            <td height="35">推荐位：</td>
            <td>
                <input name="posid[]" type="checkbox" id="posid" value="setindex" />首页推荐&nbsp;&nbsp;
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

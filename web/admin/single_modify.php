<?php
require_once('session.php');
require_once('../inc/conn.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title></title>
    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
    <link href="css/table.css" rel="stylesheet" type="text/css" />
    <script src="kindeditor/kindeditor-min.js"></script>
    <script src="kindeditor/lang/zh_CN.js"></script>
    <script>
        var editor;
        KindEditor.ready(function (K) {
            editor=K.create('textarea[name='content']',{
                allowFileManager:true
            });
            K('#image3').click(function(){
                editor.loadPlugin('image',function () {
                    editor.plugin.imageDialog({
                        showRemote:false,
                        imageUrl:K('#url3').val(),
                        clickFn:function(url,title,width,height,border,align){
                            K('#url3').val(url);
                            editor.hideDialog();
                        }
                    })
                });
            });
        });
    </script>
</head>
<body>
<?php
$sql="select * from single where id='".$_GET['id']."'";
$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
?>
<form id="form1" name="form1" method="post" action="single_modify_pass.php?id=<?php echo $rs['id']?>">
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="2" class="tt">修改单页</td>
        </tr>
        <tr>
            <td width="15%" height="35">
                <span style="color:#F30">*</span>标题：
            </td>
            <td width="85%">
                <input name="title" type="text" id="title" size="50" value="<?php echo $rs['title'] ?>"/>
            </td>
        </tr>
        <tr>
            <td height="35">来源：
            </td>
            <td>
                <input name="comefrom" type="text" id="comefrom" value="<?php echo $rs['comefrom'] ?>" />
            </td>
        </tr>
        <tr>
            <td height="35">发布日期：
            </td>
            <td>
                <input name="pubdate" type="text" id="pubdate" value="<?php echo $rs['pubdate'] ?>" />
            </td>
        </tr>
        <tr>
            <td height="68">关键字：</td>
            <td>
                <label for="keywords"></label>
                <textarea name="keywords" cols="60" rows="3" id="keywords">
                    <?php echo $rs['keywords'] ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td height="68">描述：</td>
            <td>
                <textarea name="description" cols="60" rows="3" id="url3">
                    <?php echo $rs['description'] ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td height="353">
                <span style="color:#F30">*</span>内容：
            </td>
            <td>
                <textarea name="content" id="content" style="width:800px;height:300px;visibility:hidden;">
                    <?php echo htmlspecailchars($rs['content']) ?>
                </textarea>
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

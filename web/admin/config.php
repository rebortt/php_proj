<?php
require_once('session.php');
require_once('../inc/conn.php');
$sql = "select * from config";
$result = mysql_query($sql);
$rs = mysql_fetch_array($result);
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>网站基本配置</title>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
    <link href="kindeditor/themes/default/default.css" type="text/css" rel="stylesheet" />
    <script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
    <script>
        var editor;
        KindEditor.ready(function(K){
            var editor=K.editor({
                allowFileManager:true
            });
            //上传网站Logo
            K('#image3').click(function(){
                editor.loadPlugin('image',function(){
                    editor.plugin.imageDialog({
                        showRemote:false,
                        imageUrl:K('#site_logo').val(),
                        clickFn:function(url,title,width,height,border,align){
                            K('#site_logo').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            //上传公司二维码
            K('#image4').click(function(){
                editor.loadPlugin('image',function(){
                    editor.plugin.imageDialog({
                        showRemote:false,
                        imageUrl:K('#company_ewm').val(),
                        clickFn:function(url,title,width,height,border,align){
                            K('#company_ewm').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
        });
    </script>
</head>
<body>
<form id="form1" name="form1" method="post" action="config_save.php">
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td height="35" colspan="3" class="tt">网站基础配置</td>
        </tr>
        <tr>
            <td width="16%" height="33">网站标题：</td>
            <td colspan="2">
                <label for="site_title"></label>
                <input name="site_title" type="text" id="site_title" value="<?=isset($rs['site_title'])?$rs['site_title']:'' ?>" size="40" />
            </td>
        </tr>
        <tr>
            <td height="33">网站logo</td>
            <td colspan="2">
                <input name="site_logo" type="text" id="site_logo" value="<?php echo isset($rs['site_logo'])?$rs['site_logo']:'' ?>" size="40" />
                <input type="button" id="image3" value="上传" />
            </td>
        </tr>
        <tr>
            <td height="33">公司二维码</td>
            <td colspan="2">
                <input name="company_ewm" type="text" id="company_ewm" value="<?php echo isset($rs['company_ewm'])?$rs['company_ewm']:'' ?>" size="40" />
                <input type="button" id="image4" value="上传" />
            </td>
        </tr>
        <tr>
            <td height="32">网站地址：</td>
            <td width="53%">
                <input name="site_url" type="text" id="site_url" value="<?php echo isset($rs['site_url'])?$rs['site_url']:'' ?>" size="40" />
            </td>
        </tr>
        <tr>
            <td height="64">网站关键字：</td>
            <td>
                <textarea name="site_keywords" cols="60" rows="3" id="site_keywords">
                    <?php echo isset($rs['site_keywords'])?$rs['site_keywords']:'' ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td height="64">网站描述：</td>
            <td>
                <textarea name="site_description" cols="60" rows="3" id="site_description">
                    <?php echo isset($rs['site_description'])?$rs['site_description']:'' ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td height="62">底部版权信息（支持html标记）：</td>
            <td colspan="2">
                <textarea name="site_copyright" cols="60" rows="3" id="site_copyright">
                    <?php echo isset($rs['site_copyright'])?$rs['site_copyright']:'' ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td height="32">公司名称：</td>
            <td colspan="2">
                <label for="company_name"></label>
                <input name="company_name" type="text" id="company_name" value="<?php echo isset($rs['company_name'])?$rs['company_name']:'' ?>" size="40" />
            </td>
        </tr>
        <tr>
            <td height="32">联系电话：</td>
            <td colspan="2">
                <input name="company_phone" type="text" id="company_phone" value="<?php echo isset($rs['company_phone'])?$rs['company_phone']:'' ?>" size="40" />
            </td>
        </tr>
        <tr>
            <td height="32">传真：</td>
            <td colspan="2">
                <input name="company_fax" type="text" id="company_fax" value="<?php echo isset($rs['company_fax'])?$rs['company_fax']:'' ?>" size="40" />
            </td>
        </tr>
        <tr>
            <td height="32">电子邮箱：</td>
            <td colspan="2">
                <input name="company_email" type="text" id="company_email" value="<?php echo isset($rs['company_email'])?$rs['company_email']:'' ?>" size="40" />
            </td>
        </tr>
        <tr>
            <td height="32">微信：</td>
            <td colspan="2">
                <input name="company_weixin" type="text" id="company_weixin" value="<?php echo isset($rs['company_weixin'])?$rs['company_weixin']:'' ?>" size="40" />
            </td>
        </tr>
        <tr>
            <td height="32">公司地址：</td>
            <td colspan="2">
                <label for="company_address"></label>
                <input name="company_address" type="text" id="company_address" value="<?php echo isset($rs['company_address'])?$rs['company_address']:'' ?>" size="80" />
            </td>
        </tr>
        <tr>
            <td height="32" colspan="3">
                <input type="submit" name="Submit" value="修改" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>



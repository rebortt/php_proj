<?php
require_once('session.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>添加文章</title>
    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
    <script charset="UTF-8" src="kindeditor/kindeditor-min.js"></script>
    <script charset="UTF-8" src="kindeditor/lang/zh_CN.js"></script>
    <script>
        var editor;
        KindEditor.ready(function(K){
            editor=K.create('textarea[name="content"]',{
                allowFileManager:true
            });
            //上传缩略图
            K('#image4').click(function(){
                editor.loadPlugin('image',function(){
                    editor.plugin.imageDialog({
                        showRemote:false,
                        imageUrl:K('#thumbnail').val(),
                        clickFn:function(url,title,width,height,border,align){
                            K('#thumbnail').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
        });
    </script>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
    <style>
        *{
            font-size:12px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <h4>添加产品</h4>
    <form id="form1" name="form1" method="post" action="produce_add_pass.php">
        <div class="form-group">
            <label for="title"><span style="color:#F30">*</span>标题：</label>
            <input id="title" name="title" class="form-control col-md-9"  type="text" size="50" />
        </div>
        <div class="form-group">
            <label for="comefrom">来源：</label>
            <input id="comefrom" name="comefrom" class="form-control col-md-9" type="text" size="50" />
        </div>
        <div class="form-group">
            <label for="pubdate">发布日期：</label>
            <?php
            date_default_timezone_set('UTC');
            $pubdate = date("Y/m/d");
            ?>
            <div class="input-group mb-3">
                <input id="pubdate" name="pubdate" class="form-control col-md-9" type="text" size="50" value="<?=$pubdate?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="thumbnail">缩略图：</label>
            <div class="input-group mb-3">
                <input id="thumbnail" name="thumbnail" class="form-control col-md-9"  type="text" size="40"
                       value="" />
                <div class="input-group-append">
                    <button id="image4" class="btn btn-secondary" type="button">上传</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="keywords">关键字：</label>
            <textarea id="keywords" name="keywords" class="form-control col-md-9"  type="text" size="50"></textarea>
        </div>
        <div class="form-group">
            <label for="description">描述：</label>
            <textarea id="description" name="description" class="form-control col-md-9"  type="text" size="50"></textarea>
        </div>
        <div class="form-group">
            <label for="content"><span style="color:#F30">*</span>内容：</label>
            <textarea id="content" name="content" class="form-control col-md-9"  type="text" size="50"></textarea>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" id="posid" name="posid[]" value="setindex">首页推荐
            </label>
        </div>
        <button type="submit" class="btn btn-primary">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
    </form>
</div>
</body>
</html>

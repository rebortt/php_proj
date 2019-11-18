<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
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
            editor=K.create('textarea[name="content"]',{
                allowFileManager:true
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
            font-size:14px;
        }
    </style>

</head>
<body>
<?php
$sql="select * from article where id='".$_GET['id']."'";
$rows = $dbh->query($sql);
$rs = $rows->fetch();
?>
<div class="container-fluid">
    <h4>修改文章</h4>
    <form id="form1" name="form1" method="post" action="article_modify_pass.php?id=<?=$rs['id']?>" >
        <div class="form-group">
            <label for="title"><span style="color:#F30">*</span>标题：</label>
            <input id="title" name="title" class="form-control col-md-9"  type="text" size="50" value="<?=$rs['title'] ?>"/>
        </div>
        <div class="form-group">
            <label for="comefrom">来源：</label>
            <input id="comefrom" name="comefrom" class="form-control col-md-9" type="text" size="50" value="<?=$rs['comefrom'] ?>" />
        </div>
        <div class="form-group">
            <label for="pubdate">发布日期：</label>
            <div class="input-group mb-3">
                <input id="pubdate" name="pubdate" class="form-control col-md-9" type="text" size="50" value="<?=$rs['pubdate'] ?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="keywords">关键字：</label>
            <textarea id="keywords" name="keywords" class="form-control col-md-9"  type="text" size="50">
                <?=$rs['keywords'] ?>
            </textarea>
        </div>
        <div class="form-group">
            <label for="description">描述：</label>
            <textarea id="description" name="description" class="form-control col-md-9"  type="text" size="50">
                <?=$rs['description'] ?>
            </textarea>
        </div>
        <div class="form-group">
            <label for="content"><span style="color:#F30">*</span>内容：</label>
            <textarea id="content" name="content" class="form-control col-md-9"  type="text" size="50">
                <?=htmlspecialchars($rs['content']) ?>
            </textarea>
        </div>
        <?php
        $posid_array=explode(",",$rs['posid']);
        ?>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" id="posid" name="posid[]" value="setindex"
                    <?php
                    if(in_array("setindex",$posid_array)){
                        echo "checked='checked'";
                    }
                    ?>
                >首页推荐
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" id="posid" name="posid[]" value="settop"
                    <?php
                    if(in_array("settop",$posid_array)){
                        echo "checked='checked'";
                    }
                    ?>
                >首页置顶
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
        </div>

    </form>
</div>
</body>
</html>
<?php
$dbh = null;
?>
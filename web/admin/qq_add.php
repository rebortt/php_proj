<?php
require_once('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加QQ客服</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
    <style>
        *{font-size:12px;}
        label{text-align: right;}
    </style>
</head>
<body>
<div class="container-fluid">
    <h4>添加QQ客服</h4>
    <form id="form2" name="form2" method="post" action="qq_add_pass.php">
        <div class="form-group row">
            <label for="title" class="col-md-2 col-form-label">标题：</label>
            <input id="title" name="title" class="form-control col-md-6"  type="text" size="50" />
        </div>
        <div class="form-group row">
            <label for="qqnum" class="col-md-2 col-form-label">号码：</label>
            <input id="qqnum" name="qqnum" class="form-control col-md-6" type="text" size="50" />
        </div>
        <div class="form-group row">
            <label for="truename" class="col-md-2 col-form-label">客服姓名：</label>
            <input id="truename" name="truename" class="form-control col-md-6"  type="text" size="50" />
        </div>
        <button type="submit" class="btn btn-primary offset-4">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
    </form>
</div>
</body>
</html>

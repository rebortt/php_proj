<?php
require_once('session.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <!--<link href="css/main.css" rel="stylesheet" type="text/css">-->
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>企业网站管理系统</title>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background-color:#f7f8f9;
        }
        div
        {
            position: absolute;
            width: 100%;
        }
        #topFrame{
            width:100%;
            height:110px;
        }
        #leftFrame{
            width:18%;
            float:left;
        }
        #mainFrame{
            width:82%;
            float:right;
        }
        #bottomFrame{
            width:100%;
            height:25px;
        }
    </style>
</head>
<body>
    <div>
        <iframe id="topFrame" name="topFrame" frameboder="0" style="border:none;!important" scrolling="no" src="top.php"></iframe>
        <iframe id="leftFrame" name="leftFrame" frameboder="0" style="border:none;!important" src="left.php"></iframe>
        <iframe id="mainFrame" name="mainFrame" frameboder="0" style="border:none;!important" src="right.php"></iframe>
        <iframe id="bottomFrame" name="bottomFrame" frameboder="0" style="border:none;!important" scrolling="no" src="bottom.php"></iframe>
    </div>
</body>

<script language="javascript">
    //输入你希望根据页面高度自动调整高度的iframe的名称的列表
    //用逗号把每个iframe的ID分隔. 例如: ["myframe1", "myframe2"]，可以只有一个窗体，则不用逗号。
    //定义iframe的ID
    var iframeids=["leftFrame","mainFrame"];
    //如果用户的浏览器不支持iframe是否将iframe隐藏 yes 表示隐藏，no表示不隐藏
    var iframehide="yes";
    function dyniframesize()
    {
        var dyniframe=new Array();
        var maxHeight=0;
        for (i=0; i<iframeids.length; i++)
        {
            if (document.getElementById)
            {
                //自动调整iframe高度
                dyniframe[dyniframe.length] = document.getElementById(iframeids[i]);
                if (dyniframe[i] && !window.opera)
                {
                    dyniframe[i].style.display="block";
                    if (dyniframe[i].contentDocument && dyniframe[i].contentDocument.body.offsetHeight){
                        //如果用户的浏览器是NetScape
                        var height = dyniframe[i].contentDocument.body.offsetHeight;
                       //dyniframe[i].height = dyniframe[i].contentDocument.body.offsetHeight;
                        if(height<=maxHeight){
                            dyniframe[i].height = height;
                        }else{
                            maxHeight = height;
                            for (j=0; j<=i; j++){
                                dyniframe[j].height = maxHeight;
                            }
                        }
                    }else if (dyniframe[i].Document && dyniframe[i].Document.body.scrollHeight){
                        //如果用户的浏览器是IE
                        //dyniframe[i].height = dyniframe[i].Document.body.scrollHeight;
                        var height = dyniframe[i].Document.body.scrollHeight;
                        if(height<=maxHeight){
                            dyniframe[i].height = height;
                        }else{
                            maxHeight = height;
                            for (j=0; j<=i; j++){
                                dyniframe[j].height = maxHeight;
                            }
                        }
                    }
                }
            }
            //根据设定的参数来处理不支持iframe的浏览器的显示问题
            if ((document.all || document.getElementById) && iframehide=="no")
            {
                var tempobj=document.all? document.all[iframeids[i]] : document.getElementById(iframeids[i]);
                tempobj.style.display="block";
            }
        }
    }
    if (window.addEventListener)
        window.addEventListener("load", dyniframesize, false);
    else if (window.attachEvent)
        window.attachEvent("onload", dyniframesize);
    else
        window.onload=dyniframesize;
</script>
</html>

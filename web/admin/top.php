<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title></title>
    <style type="text/css">
        body{
            margin-left:0px;
            margin-top:0px;
            margin-right:0px;
            margin-bottom:0px;
        }
    </style>
</head>
<body>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" align="center">
        <tr style="background-image:url('images/top_back.gif');">
            <td width="36%" valign="middle" style="background:url('images/logo_left.png') no-repeat 10px center;
            font-size:30px;height:60px">&nbsp;</td>
            <td width="64%" valign="bottom" align="right" style="color:#FFF;font-size:12px;">
                当前时间：
                <span id="time">
                    <script>
                        document.getElementById('time').innerHTML=new Date().toLocaleString()+'星期'+
                            '日一二三四五六'.charAt(new Date().getDay());
                        function setTime(){
                            document.getElementById('time').innerHTML=new Date().toLocaleString()+'星期'+
                                '日一二三四五六'.charAt(new Date().getDay());
                        }
                        setInterval(setTime,1000);
                    </script>
                </span>
            </td>
        </tr>
        <tr style="background-image:url(images/top_bg.gif);height:16px;">
            <td width="36%" style="color:#000000;font-size:12px;">
                欢迎您：<span style="color:#f30;font-weight:600;"><?=$_SESSION["admin_name"]?></span>
                ，您现在登录的是企业网站管理系统
            </td>
            <td width="64%" align="right" style="color:#000000;">
                <input type="button" value="退出" onclick="window.parent.location.href='loginout.php'"
                style="margin-top:-3px;height:21px;margin-right:5px;"/>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link href="css/right.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/dtree.js"></script>
    <title></title>
    <style type="text/css">
        body{
            margin:0px;
            background-color:#eef2fb;
        }
        td{
            font-family: Arial, Helvetica, sans-serif;
            font-size:12px;
        }
        .table_southidc{
            background-color:#c66800;
            margin-bottom:5px;
        }
        .tr_southidc{
            background-color:#ecf5ff;
        }
    </style>
</head>
<body>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
        <tr>
            <td valign="top" background="images/mail_leftbg.gif" width="17">
                <img src="images/left-top-right.gif" width="17" height="29">
            </td>
            <td valign="top" background="images/content-bg.gif">
                <table id="table2" class="left_topbg" border="0" cellspacing="0" cellpadding="0" width="100%" height="31">
                    <tbody>
                    <tr>
                        <td height="31">
                            <div class="titlebt">欢迎界面</div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
            <td valign="top" background="images/mail_rightbg.gif" width="16">
                <img src="images/nav-right-bg.gif" width="16" height="29">
            </td>
        </tr>
        <tr>
            <td valign="center" background="images/mail_leftbg.gif">&nbsp;</td>
            <td bgcolor="#f7f8f9" valign="top">
                <table border="0" cellspacing="0" cellpadding="0" width="98%" align="center">
                    <tbody>
                    <tr>
                        <td valign="top" colspan="2">&nbsp;</td>
                        <td width="7%">&nbsp;</td>
                        <td valign="top" width="40%">&nbsp;</td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="4"><p>
                                <span class="left_bt">感谢您使用企业网站管理系统</span><br><br>
                                <span class="left_txt">&nbsp;<img src="images/ts.gif" width="16" height="16">提示：<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在使用的是企业网站管理系统！</span>
                                <span class="left_txt"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    该系统使用方便，操作简单，只需会打字，会上网，就能够理网站内容！<br>
                                    企业网站管理系统是您建立中小型企业网站的首选方案！
                                </span>
                            </p>
                            <p><span class="left_txt"><br></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td height="40" colspan="4">
                            <table class="line_table" border="0" cellspacing="0" cellpadding="0"
                                   width="100%" height="205">
                                <tbody>
                                <tr>
                                    <td class="left_bt2" height="27" background="images/news-title-bg.gif"
                                        width="31%">&nbsp;&nbsp;&nbsp;程序说明</td>
                                    <td class="left_bt2" background="images/news-title-bg.gif"
                                        width="69%"></td></tr>
                                <tr>
                                    <td height="102" valign="top" colspan="2">
                                        <table width="95%" height="153" border="0"
                                               align="center" cellpadding="2" cellspacing="1">
                                            <tbody>
                                            <tr>
                                                <td height="23" width="48%">用户名：<?=$_SESSION["admin_name"]?></td>
                                                <td width="52%">ip：<?=$_SERVER['REMOTE_ADDR']?></td></tr>
                                            <tr>
                                                <td height="23" width="48%">身份过期：<?=ini_get('session.gc_maxlifetime')?></td>
                                                <td width="52%">现在时间：<?php
                                                    date_default_timezone_set('prc');
                                                    echo date("y-m-d h:i:s");
                                                    ?></td></tr>
                                            <tr>
                                                <td height="23" width="48%">服务器域名：<?=$_SERVER["HTTP_HOST"]?></td>
                                                <td width="52%">脚本解释引擎：<?=$_SERVER['SERVER_SOFTWARE']?></td></tr>
                                            <tr>
                                                <td height="23">获取php运行方式：<?=php_sapi_name()?></td>
                                                <td>浏览器版本：<?=$_SERVER['HTTP_USER_AGENT']?></td></tr>
                                            <tr>
                                                <td height="23">服务器端口：<?=$_SERVER['SERVER_PORT']?></td>
                                                <td>系统类型及版本号：<?=php_uname()?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="5" colspan="2">&nbsp</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="2%">&nbsp;</td>
                        <td class="left_txt" width="51%"><br>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </td>
            <td background="images/mail_rightbg.gif">&nbsp;</td></tr>
        <tr>
            <td valign="bottom" background="images/mail_leftbg.gif">
                <img src="images/buttom_left2.gif" width="17" height="17">
            </td>
            <td background="images/buttom_bgs.gif">
                <img src="images/buttom_bgs.gif" width="17" height="17">
            </td>
            <td valign="bottom" background="images/mail_rightbg.gif">
                <img src="images/buttom_right2.gif" width="16" height="17">
            </td>
        </tr>
        </tbody>
    </table>
</body>
</html>

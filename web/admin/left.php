<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <!--<link href="css/main.css" rel="stylesheet" type="text/css">-->
    <script type="text/javascript" src="js/dtree.js"></script>
    <title></title>
    <style type="text/css">
        body{
            margin-left:0px;
            margin-top:0px;
            background-color:#ecf4ff;
        }
        .index_link{
            font-size:14px;
        }
        .dtree{
            font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
            font-size:12px;
            color:#0000ff;
            white-space:nowrap;
        }
        .dtree img{
            border:0px;
            vertical-align:middle;
        }
        .dtree a{
            color:#333;
            text-decoration: none;
        }
        .dtree a.node, .dtree a.nodeSel{
            white-space:nowrap;
            padding:1px 2px 1px 2px;
        }
        .dtree a.node:hover,.dtree a.nodeSel:hover{
            color:#0000ff;
        }
        .dtree a.nodeSel{
            background-color:#AED0F4;
        }
        .dtree.clip{
            overflow:hidden;
        }
    </style>
</head>
<body>
    <table width="96%" border="0" cellpadding="10" cellspacing="0" align="center">
        <tr>
            <td valign="top">
                <div class="menu">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                        <tr>
                            <td height="25">
                                <a href="javascript:d.openAll();">
                                    <img src="images/view_detailed.gif" width="15" height="15" border="0" align="center"
                                         alt="展开列表" />
                                </a>
                                <a href="javascript:d.closeAll();">
                                    <img src="images/view_tree.gif" width="15" height="15" border="0" align="center"
                                         alt="收缩列表" />
                                </a>
                                <a class="index_link" href="right.php" target="mainFrame">系统首页</a> | <a class="index_link" href="../" target="_blank">网站首页</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <script type="text/javascript">
                                    d = new dTree('d');
                                    d.config.target="mainFrame";
                                    d.add(0,-1,'系统内容管理');
                                    d.add(1,0,'网站基本配置','');
                                    d.add(11,1,'设置网站信息','config.php');
                                    d.add(2,0,'管理员管理','');
                                    d.add(21, 2, '添加管理员', 'admin_add.php');
                                    d.add(22, 2, '管理员列表', 'admin_list.php');
                                    d.add(3, 0, '单页管理', '');
                                    d.add(31, 3, '添加单页', 'single_add.php');
                                    d.add(32, 3, '单页列表', 'single_list.php');
                                    d.add(4, 0, '文章管理', '');
                                    d.add(41, 4, '添加文章', 'article_add.php');
                                    d.add(42, 4, '文章列表', 'article_list.php');
                                    d.add(5, 0, '产品管理', '');
                                    d.add(51, 5, '添加产品', 'produce_add.php');
                                    d.add(52, 5, '产品列表', 'produce_list.php');
                                    d.add(6, 0, '留言管理', '');
                                    d.add(61, 6, '留言列表', 'guestbook.php');
                                    d.add(7, 0, '焦点幻灯管理', '');
                                    d.add(71, 7, '添加焦点幻灯', 'slide_add.php');
                                    d.add(72, 7, '焦点幻灯列表', 'slide_list.php');
                                    d.add(8, 0, 'QQ客服管理', '');
                                    d.add(81, 8, '添加客服', 'qq_add.php');
                                    d.add(82, 8, '客服列表', 'qq_list.php');
                                    d.add(9, 0, '友情链接管理', '');
                                    d.add(91, 9, '添加友情链接', 'friend_add.php');
                                    d.add(92, 9, '友情链接列表', 'friend_list.php');
                                    d.add(10, 0, '退出系统', '');
                                    d.add(101, 10, '退出', 'loginout.php');
                                    document.write(d);
                                </script>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>

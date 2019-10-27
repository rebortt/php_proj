<?php
require_once('session.php');
require_once('../inc/conn.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>单页列表</title>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td class="tt" colspan="5">菜单管理</td>
        </tr>
        <tr>
            <td width="6%" height="35">单页ID</td>
            <td width="19%">标题</td>
            <td width="29%">发布日期</td>
            <td colspan="2">操作</td>
        </tr>
        <?php
            //记录的总条数
            $total_num=mysql_num_rows(mysql_query("select id from single"));
            //设置每页显示的记录数
            $pagesize=10;
            //计算总页数
            $page_num=ceil($total_num/$pagesize);
            //设置页数
            $page=$_GET['page'];
            if($page<1 || $page==''){
                $page=1;
            }
        if($page>$page_num){
            $page=$page_num;
        }
        //计算记录的偏移量
        $offset=$pagesize*($page-1);
        //上一页、下一页
        $prepage=($page<>1)?$page-1:$page;
        $nextpage=($page<>$page_num)?$page+1:$page;
        //读取指定的记录数
        $sql="select * from single limit $offset,$pagesize";
        $result=mysql_query($sql);
        while($row=mysql_fetch_array($result)) {
            ?>
            <tr>
                <td height="31"><?php echo $rs['id'] ?></td>
                <td><?php echo $rs['title'] ?></td>
                <td><?php echo $rs['pubdate'] ?></td>
                <td width="12%">
                    <input type="button" name="button" id="button" value="修改"
                           onclick="window.location.href='single_modify.php?id=<?php echo $row['id'] ?>'"/>
                </td>
                <td width="11%">
                    <input type="button" name="button2" id="button2" value="删除"
                           onclick="window.location.href='single_delete.php?id=<?php echo $row['id'] ?>'"/>
                </td>
            </tr>
            <?php
        }
        ?>
            <tr>
                <td height="43" colspan="5" align="center">
                    <?=$page?>/<?=$page_num?>&nbsp;&nbsp;
                    <a href="?page=1">首页</a>&nbsp;&nbsp;
                    <a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;
                    <a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;
                    <a href="?page=<?=$page_num?>">尾页</a>&nbsp;&nbsp;
                </td>
            </tr>
    </table>
</body>
<?php
mysql_close($conn);
?>
</html>
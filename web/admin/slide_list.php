<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
//记录的总条数
$rows = $dbh->query("select * from slide");
$total_num = $rows->rowCount();
//每页记录数
$pagesize=5;
//总页数
$page_num=ceil($total_num/$pagesize);
//设置页数
$page=isset($_GET['page'])?$_GET['page']:1;
if($page<1 || $page==''){
    $page=1;
}
if($page>$page_num){
    $page=$page_num;
}
//计算机记录的偏移量
$offset=$pagesize*($page-1);
//上一页、下一页
$prepage=($page<>1)?$page-1:$page;
$nextpage=($page<>$page_num)?$page+1:$page;

$sql="select * from slide order by id desc limit $offset,$pagesize";
$rows = $dbh->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>焦点幻灯列表</title>
        <link href="css/table.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function AutoResizeImage(maxWidth,maxHeight,objImg){
                var img = new Image();
                img.src = objImg.src;
                var hRatio;
                var wRatio;
                var Ratio = 1;
                var w = img.width;
                var h = img.height;
                wRatio = maxWidth / w;
                hRatio = maxHeight / h;
                if (maxWidth ==0 && maxHeight==0){
                    Ratio = 1;
                }else if (maxWidth==0){//
                    if (hRatio<1) Ratio = hRatio;
                }else if (maxHeight==0){
                    if (wRatio<1) Ratio = wRatio;
                }else if (wRatio<1 || hRatio<1){
                    Ratio = (wRatio<=hRatio?wRatio:hRatio);
                }
                if (Ratio<1){
                    w = w * Ratio;
                    h = h * Ratio;
                }
                objImg.height = h;
                objImg.width = w;
            }
        </script>
    </head>
    <body>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td height="41" colspan="5" class="tt">焦点幻灯列表</td>
        </tr>
        <tr>
            <td height="35">标题</td><td>链接</td><td width="26%">缩略图</td><td>排序</td><td width="15%">操作</td>
        </tr>
        <tr>
            <?php
            if($total_num>0){
                foreach ($rows as $row) {
            ?>

            <td width="38%" height="70"><?php echo $row['title']?></td>
            <td width="13%"><?php if($row['link']==''){echo '无';}else{?><a target="new" href="<?=$row['link']?>">查看</a><?php }?></td>
            <td><img src="<?=$row['thumbnail']?>" width="0" height="0" onload="AutoResizeImage(0,60,this)"></td>
            <td width="8%"><?=$row['orderid']?></td>
            <td><input type="submit" name="button" id="button" value="修改" onclick="window.location.href='slide_modify.php?id=<?=$row['id']?>'" />&nbsp;&nbsp;
                <input type="button" name="button2" id="button2" value="删除" onclick="window.location.href='slide_delete.php?id=<?=$row['id']?>'" /></td>
        </tr>
        <?php
        }
        }else{
            echo "<tr><td colspan='5' height='31' style='color:red;font-size:13px'>暂无记录</td></tr>";
        }
        ?>
        <tr>
            <td height="43" colspan="5" align="center"> <?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">首页</a>&nbsp;&nbsp;	<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>"> 尾页</a></td>
        </tr>
    </table>
    </body>
</html>
<?php $dbh = null; ?>
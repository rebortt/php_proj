<?php
require_once('session.php');
require_once('../inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员列表</title>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="form_add" id="form_add" action="admin_add_pass.php" method="post" >
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td class="tt" colspan="2">管理员列表</td>
        </tr>
        <tr>
            <td height="35">帐号</td>
            <td width="25%">操作</td>
        </tr>
        <?php
        //记录的总条数
        $total_num=mysql_num_rows(mysql_query("select id from admin"));
        //设置每页显示的记录数
        $pagesize=10;
        //计算总页数
        $page_num=ceil($total_num/$pagesize);
        //设置页数
        $page=isset($_GET['page'])?$_GET['page']:1;
        if($page<1 || $page==''){
            $page=1;
        }
        if($page>$page_num){
            $page=$page_num;
        }
        //计算记录的编移量
        $offset=$pagesize*($page-1);
        //上一页、下一页
        $prepage=($page<>1)?$page-1:$page;
        $nextpage=($page<>$page_num)?$page+1:$page;
        //读取指定记录数
        $sql="select * from admin limit $offset,$pagesize";
        $result=mysql_query($sql);
        if($total_num>0){
            while($row=mysql_fetch_array($result)){

                echo "<tr>".
                    "<td height='35'>".$row['admin_name']."</td>".
                    "<td><input type='button' name='button' id='button' value='修改' onclick='window.location.href=\"admin_modify.php?id=".$row['id']."\"' />".
                        "    <input type='button' name='button2' id='button2' value='删除' onclick='window.location.href=\"admin_delete.php?id=".$row['id']."\"' ";
                                if($row['admin_name']=='admin'){echo "disabled='disabled'";}
                echo "/>".
                        "</td>".
                    "</tr>";

            }
        }else{
            echo "<tr><td colspan='2' height='31' style='color:red;font-size:13px'>暂无记录</td></tr>";
        }
        ?>
        <tr>
            <td height="35" colspan="2" align="center"> <?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">首页</a>&nbsp;&nbsp;	<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>"> 尾页</a> </td>
        </tr>
    </table>
</form>
</body>
</html>
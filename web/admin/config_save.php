<?php
require_once('session.php');
require_once('../inc/conn.php');
//设置该页面的编码为utf-8
header("Content-Type:text/html;charset=utf-8");
//接收表单传递过来的值并组织sql语句
$update_sql = "update config set site_title='".$_POST['site_title'].
    "',site_url='".$_POST['site_url'].
    "',site_logo='".$_POST['site_logo'].
    "',company_ewm='".$_POST['company_ewm'].
    "',site_keywords='".$_POST['site_keywords'].
    "',site_description='".$_POST['site_description'].
    "',site_copyright='".$_POST['site_copyright'].
    "',company_name='".$_POST['company_name'].
    "',company_phone='".$_POST['company_phone'].
    "',company_fax='".$_POST['company_fax'].
    "',company_email='".$_POST['company_email'].
    "',company_weixin='".$_POST['company_weixin'].
    "',company_address='".$_POST['company_address'].
    "'";
mysql_query($update_sql,$conn);
echo "<script>alert('修改成功！');window.location.href='config.php';</script>";
exit;
mysql_close($conn);
?>
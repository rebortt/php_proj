<?php
    $username = "root";     //用戶名
    $password = "";     //密码
    $dbname = "company";     //数据库名
    $mysqli = new mysqli("localhost:3306", $username, $password,  $dbname);
    if(!$mysqli) {
        die('Could not connect:' .mysqli_connect_error());
    }
    //设置编码为utf8
    $mysqli->set_charset('UTF-8');
?>
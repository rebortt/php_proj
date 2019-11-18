<?php
	$dbms='mysql';     //数据库类型
	//$servername = "localhost";     //host 如果PDO可以找到mysql.sock或者mysqld.sock则用这个
	$servername = "127.0.0.1";     //host 解决PDO连接数据库报错：SQLSTATE[HY000] [2002] No such file or directory，原因PDO无法找到mysql.sock或者mysqld.sock
	$username = "root";     //用戶名
	$password = "";     //密碼
	$dbname = "company";     //数据库名

	$dsn="$dbms:host=$servername;dbname=$dbname";

	try {
		$dbh = new PDO($dsn, $username, $password); //初始化一个PDO对象
	} catch (PDOException $e) {
		die ("Error!: " . $e->getMessage() . "<br/>");
	}
?>

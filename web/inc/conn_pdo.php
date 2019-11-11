<?php
	$dbms='mysql';     //数据库类型
	$servername = "localhost";     //host
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

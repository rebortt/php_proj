<?php
session_start();
if (empty($_SESSION['admin_name']) && $_SESSION['ischecked']<>"ok"){
	echo "<script>window.location.href='login.php'</script>";
	exit;
}
?>
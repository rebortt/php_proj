<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>企业网站管理系统1.0</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function chk(theForm){
if (theForm.admin_name.value == ""){
alert("请输入帐号！");
theForm.admin_name.focus();
return (false);
}
else if (theForm.admin_pass.value == ""){
alert("请输入密码！");
theForm.admin_pass.focus();
return (false);
}else{
	return true;
	}
}
</script>
</head>
<body>
<div id="main">
  <div id="wrapper">
    <form action="login_check.php" method="Post" id="form1" onSubmit="return chk(this)">
      <div id="sys_name">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>问道茶具网站后台</p>
      </div>
      <ul id="cont">
        <li>
          <label class="lb" for="uname">帐号</label>
          <input name="admin_name" id="uname" type="text" class="ip" value="" maxlength="18" />
        </li>
        <li>
          <label class="lb" for="pwd">密码</label>
          <input name="admin_pass" id="pwd" type="password" class="ip" value="" maxlength="10" />
        </li>
        
        <li><span>
          <input  type="image" src="images/ente.png" title="登录系统"/>
          </span></li>
      </ul>
      <p id="copy"></p>
    </form>
  </div>
</div>
</body>
</html>

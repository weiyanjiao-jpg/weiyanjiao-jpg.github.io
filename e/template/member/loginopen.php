<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>登录</title>
<link href="<?=$public_r['newsurl']?>skin/moyu_cp004/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=$public_r['newsurl']?>skin/moyu_cp004/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="<?=$public_r['newsurl']?>skin/moyu_cp004/css/animate.css" rel="stylesheet">
<link href="<?=$public_r['newsurl']?>skin/moyu_cp004/css/style.css" rel="stylesheet">
<script type="text/javascript" src="<?=$public_r['newsurl']?>e/data/js/ajax.js"></script>
</head>

<body>
<div class="wrapper wrapper-content animated">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-content">
<div class="project-list table-responsive">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="form1" method="post" action="../doaction.php">
    <input type=hidden name=ecmsfrom value="<?=ehtmlspecialchars($_GET['from'])?>">
    <input type=hidden name=prtype value="<?=ehtmlspecialchars($_GET['prt'])?>">
    <input type=hidden name=enews value=login>
    <tr> 
      <td height="25" colspan="2"><div align="center">会员登陆</div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="24%" height="25">用户名：</td>
      <td width="76%" height="25"><input name="username" type="text" id="username"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">密码：</td>
      <td height="25"><input name="password" type="password" id="password"></td>
    </tr>
	 <tr bgcolor="#FFFFFF">
      <td height="25">保存：</td>
      <td height="25"> 
        <select name="lifetime">
          <option value="0">不保存</option>
		  <option value="3600">一小时</option>
		  <option value="86400">一天</option>
		  <option value="2592000">一个月</option>
		  <option value="315360000">永久</option>
        </select>
     </td>
    </tr>
    <?php
	if($public_r['loginkey_ok'])
	{
	?>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">验证码：</td>
      <td height="25">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="52"><input name="key" type="text" id="key" size="6"> 
                  </td>
                  <td id="loginshowkey"><a href="#EmpireCMS" onClick="edoshowkey('loginshowkey','login','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a></td>
                </tr>
            </table>
      </td>
    </tr>
    <?php
	}	
	?>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"><input type="submit" name="Submit" value="登陆"> <input type="button" name="button" value="注册" onClick="window.open('../register/');"></td>
    </tr>
	</form>
  </table>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Mainly scripts --> 
<script src="<?=$public_r['newsurl']?>skin/moyu_cp004/js/jquery-2.1.1.js"></script> 
<script src="<?=$public_r['newsurl']?>skin/moyu_cp004/js/bootstrap.min.js"></script> 
<script src="<?=$public_r['newsurl']?>skin/moyu_cp004/js/plugins/metisMenu/jquery.metisMenu.js"></script> 
<script src="<?=$public_r['newsurl']?>skin/moyu_cp004/js/plugins/slimscroll/jquery.slimscroll.min.js"></script> 

<!-- Custom and plugin javascript --> 
<script src="<?=$public_r['newsurl']?>skin/moyu_cp004/js/inspinia.js"></script> 
<script src="<?=$public_r['newsurl']?>skin/moyu_cp004/js/plugins/pace/pace.min.js"></script> 
</body>
</html>
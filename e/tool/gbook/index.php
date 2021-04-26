<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('gb');//关闭模块
//分类id
$bid=(int)$_GET['bid'];
$gbr=$empire->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=10;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if(!$public_r['usetotalnum'])
{
	$totalnum=0;
}
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$empire->gettotal($totalquery);//取得总条数
}
if($public_r['usetotalnum'])
{
	$search.="&totalnum=$num";
}
//checkpageno
eCheckListPageNo($page,$line,$num);
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板 - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$bname?>" />
<meta name="description" content="<?=$bname?>" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
[!--temp.dtheader--]
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>现在的位置：<a href=../../../>首页</a>&nbsp;>&nbsp;<?=$bname?>
</td>
</tr>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
	<tr>
		<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
			<tr>
				<td align="center" bgcolor="#E1EFFB"><strong><?=$bname?></strong></td>
			</tr>
			<tr>
				<td align="left" valign="top"><table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
						<tr>
							<td height="100%" valign="top" bgcolor="#FFFFFF"> 
<?
while($r=$empire->fetch($sql))
{
	$r['retext']=nl2br(stripSlashes($r[retext]));
	$r['lytext']=nl2br(stripSlashes($r[lytext]));
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#F4F9FD" class="tableborder">
										<tr class="header">
											<td width="55%" height="23">发布者: <?=stripSlashes($r[name])?> </td>
											<td width="45%">发布时间: <?=$r[lytime]?> </td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23" colspan="2"><table border="0" width="100%" cellspacing="1" cellpadding="8" bgcolor='#cccccc'>
													<tr>
														<td width='100%' bgcolor='#FFFFFF' style='word-break:break-all'> <?=$r[lytext]?> </td>
													</tr>
												</table>
												
<?
if($r[retext])
{
?>

												<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
													<tr>
														<td><img src="../../data/images/regb.gif" width="18" height="18" /><strong><font color="#FF0000">回复:</font></strong> <?=$r[retext]?> </td>
													</tr>
												</table>
												
<?
}
?> </td>
										</tr>
									</table>
								<br />
								
<?
}
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1">
									<tr>
										<td>分页: <?=$listpage?></td>
									</tr>
								</table>
								<form action="../../enews/index.php" method="post" name="form1" id="form1">
									<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1"class="tableborder">
										<tr class="header">
											<td colspan="2" bgcolor="#F4F9FD"><strong>请您留言:</strong></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="20%">姓名:</td>
											<td width="722" height="23"><input name="name" type="text" id="name" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系邮箱:</td>
											<td height="23"><input name="email" type="text" id="email" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系电话:</td>
											<td height="23"><input name="mycall" type="text" id="mycall" /></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>留言内容(*):</td>
											<td height="23"><textarea name="lytext" cols="60" rows="12" id="lytext"></textarea></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23">&nbsp;</td>
											<td height="23"><input type="submit" name="Submit3" value="提交" />
											<input type="reset" name="Submit22" value="重置" />
											<input name="enews" type="hidden" id="enews" value="AddGbook" /></td>
										</tr>
									</table>
								</form></td>
						</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
</table></td>
</tr>
</table>
<!-- 网站底部 -->
<footer>
  <div class="footer box">
    <div class="wxbox">
      <ul>
        <li><img src="/skin/style/img/weixin.jpg"><span>微信公众号</span></li>
        <li><img src="/skin/style/img/weixin.jpg"><span>我的微信</span></li>
      </ul>
    </div>
    <div class="endnav">
      <p><b>站点声明：</b></p>
      <p>1、本站个人博客模板，均为站长本人设计，个人可以使用，但是未经许可不得用于任何商业目的。</p>
      <p>2、所有文章未经授权禁止转载、摘编、复制或建立镜像，如有违反，追究法律责任。举报邮箱：912037469@qq.com</p>
      <p>Copyright <a href="http://www.juguize.com/" target="_blank">http://www.juguize.com/</a> All Rights Reserved. 备案号：<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow"><?=$public_r['add_home_beian']?></a> <a href="/sitemap.xml" target="_blank">网站地图</a></p>
    </div>
  </div>
</footer>
<div class="toolbar-open"></div>
<!-- 右侧联系方式 -->
<div class="toolbar">
  <div class="toolbar-close"><span id="closed"></span></div>
  <div class="toolbar-nav">
    <ul id="toolbar-menu">
      <li><i class="side-icon-user"></i>
        <section>
          <div class="userinfo">
              <script src="/e/member/login/loginjs.php"></script>
          </div>
        </section>
      </li>
      <li><i class="side-icon-qq"></i>
        <section class="qq-section">
          <div class="qqinfo"><a href="#">前端设计交流群①</a><a href="#">前端设计交流群②</a><a href="http://wpa.qq.com/msgrd?v=3&uin=912037469&site=qq&menu=yes">站长QQ</a></div>
        </section>
      </li>
      <li><i class="side-icon-weixin"></i>
        <section class="weixin-section">
          <div class="weixin-info">
            <p>个人微信扫码</p>
<img src="/skin/style/img/weixin.jpg">
<p class="text12">工作时间</p>
            <p class="text12">周一至周日 9:00-21:00</p>
          </div>
        </section>
      </li>
      <li><i class="side-icon-dashang"></i>
        <section class="dashang-section">
          <p>如果你觉得本站很棒，可以通过扫码支付打赏哦！</p>
          <ul>
            <li><img src="/skin/style/img/weixin.jpg">微信收款码</li>
            <li><img src="/skin/style/img/weixin.jpg">支付宝收款码</li>
          </ul>
        </section>
      </li>
    
    </ul>
  </div>
</div>
<!-- 移动端底部导航 -->
<div class="endmenu">
<ul>
<li><a href="/"><i class="iconfont icon-shouye"></i>首页</a></li>
<li><a href="#"><i class="iconfont icon-fenlei"></i>分类</a></li>
<li><a href="#"><i class="iconfont icon-navicon-wzgl"></i>所有</a></li>
<li><a href="#"><i class="iconfont icon-My"></i>我的</a></li>
</ul>
</div>
<a href="#" title="返回顶部" class="icon-top"></a>
 <!-- 百度推送 -->
 <?=$public_r['add_home_tuisong']?>
<!-- 百度统计 -->
 <?=$public_r['add_home_tongji']?>
</body>
</html>
<?php
db_close();
$empire=null;
?>
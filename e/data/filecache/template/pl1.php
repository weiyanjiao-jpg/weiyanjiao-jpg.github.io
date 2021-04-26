<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$pagetitle?> 信息评论 - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$pagetitle?> 信息评论" />
<meta name="description" content="<?=$pagetitle?> 信息评论" />
<style type="text/css">
<!--
body,Table{ color: #222; font-size: 12px; }
a { color: #222; text-decoration: none; }
a:hover { color: #f00; text-decoration: underline; }
h1 { font-size:32px; font-weight: bold; }
h2 { color: #1e3a9e; font-size: 25px; font-weight: bold;  }
.you { color: #1f3a87; font-size: 14px; }
.text { font-size: 14px; padding-left: 5px; padding-right: 5px; line-height: 20px}
.re a { color: #1f3a87; }
.name { color: #1f3a87; }
.name a { color: #1f3a87; text-decoration: underline;}
.retext { background-color: #f3f3f3; width: 100%; float: left; padding-top: 22px; padding-bottom: 22px; border-top: 1px solid #ccc; }
.retext textarea { width: 535px; height: 130px; float: left; margin-left: 60px; border-top-style: inset; border-top-width: 2px; border-left-style: inset; border-left-width: 2px; }
.hrLine{BORDER-BOTTOM: #807d76 1px dotted;}

.ecomment {margin:0;padding:0;}
.ecomment {margin-bottom:12px;overflow-x:hidden;overflow-y:hidden;padding-bottom:3px;padding-left:3px;padding-right:3px;padding-top:3px;background:#FFFFEE;padding:3px;border:solid 1px #999;}
.ecommentauthor {float:left; color:#F96; font-weight:bold;}
.ecommenttext {clear:left;margin:0;padding:0;}
-->
</style>
<script src="/e/data/js/ajax.js"></script>
</head>

<body topmargin="0">
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td width="210"><a href="/"><img src="/skin/default/images/logo.gif" border="0" /></a></td>
    <td><h1>网友评论</h1></td>
    <td><div align="right"><a href="#tosaypl"><strong><font color="#FF0000">我也评两句</font></strong></a></div></td>
  </tr>
</table>
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#222">
  <tr>
    <td height="2"></td>
  </tr>
</table>
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td height="42"> 
      <h2>评论：<a href="<?=$titleurl?>" target="_blank"><font color="#1e3a9e"><?=$title?></font></a></h2></td>
    <td><div align="right"><a href="<?=$titleurl?>" target="_blank">查看原文</a></div></td>
  </tr>
</table>
<hr align="center" width="766" size=1 class=hrline>
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#384EA3">
  <form action="../enews/index.php" method="post" name="infopfenform">
    <input type="hidden" name="enews" value="AddInfoPfen" />
    <input type="hidden" name="classid" value="<?=$classid?>" />
    <input type="hidden" name="id" value="<?=$id?>" />
    <tr> 
      <td width="50%" height="27" valign="middle"><font color="#FFFFFF">&nbsp;评分: 
        <input type="radio" name="fen" value="1">
        1分 
        <input type="radio" name="fen" value="2">
        2分 
        <input name="fen" type="radio" value="3" checked>
        3分 
        <input type="radio" name="fen" value="4">
        4分 
        <input type="radio" name="fen" value="5">
        5分 
        <input type="submit" name="Submit" value="提交">
        </font></td>
      <td width="50%" valign="middle"><div align="center"><font color="#FFFFFF">平均得分: 
          <strong><span id="pfendiv"><?=$pinfopfen?></span></strong> 分，共有 <strong><?=$infopfennum?></strong> 
          人参与评分</font></div></td>
    </tr>
  </form>
</table>
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
  <tr> 
    <td height="30" bgcolor="#FFFFFF"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td width="17%">&nbsp;&nbsp;&nbsp;网友评论</td>
          <td width="83%"><div align="right"><?=$listpage?>&nbsp;&nbsp;&nbsp;</div></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td bgcolor="#f8fcff"> 
<?php
while($r=$empire->fetch($sql))
{
	$plusername=$r[username];
	if(empty($r[username]))
	{
		$plusername=$fun_r['nomember'];
	}
	if($r[userid])
	{
		$plusername="<a href='$public_r[newsurl]e/space/?userid=$r[userid]' target='_blank'>$r[username]</a>";
	}
	$saytime=date('Y-m-d H:i:s',$r['saytime']);
	//ip
	$sayip=ToReturnXhIp($r[sayip]);
	$saytext=RepPltextFace(stripSlashes($r['saytext']));//替换表情
	$includelink=" onclick=\"javascript:document.saypl.repid.value='".$r[plid]."';document.saypl.saytext.focus();\"";
?>
 
      <table width="96%" border="0" align="center" cellpadding="3" cellspacing="1" style="word-break:break-all; word-wrap:break-all;">
        <tr> 
          <td height="30"><span class="name">本站网友 <?=$plusername?></span> <font color="#666666">ip:<?=$sayip?></font></td>
          <td><div align="right"><font color="#666666"><?=$saytime?> 发表</font></div></td>
        </tr>
        <tr valign="top"> 
          <td height="50" colspan="2" class="text"><?=$saytext?></td>
        </tr>
        <tr> 
          <td height="30">&nbsp;</td>
          <td><div align="right" class="re"><a href="#tosaypl"<?=$includelink?>>回复</a>&nbsp; 
              <a href="JavaScript:makeRequest('../pl/doaction.php?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=1&doajax=1&ajaxarea=zcpldiv<?=$r[plid]?>','EchoReturnedText','GET','');">支持</a>[<span id="zcpldiv<?=$r[plid]?>"><?=$r[zcnum]?></span>]&nbsp; 
              <a href="JavaScript:makeRequest('../pl/doaction.php?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=0&doajax=1&ajaxarea=fdpldiv<?=$r[plid]?>','EchoReturnedText','GET','');">反对</a>[<span id="fdpldiv<?=$r[plid]?>"><?=$r[fdnum]?></span>]
            </div></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr>
          <td background="/skin/default/images/plhrbg.gif"></td>
        </tr>
      </table>
      
<?
}
?>
 
      <div align="right"><br />
        <?=$listpage?>&nbsp;&nbsp;&nbsp;<br />
        <br />
        <font color="#FF0000">网友评论仅供网友表达个人看法，并不表明本站同意其观点或证实其描述&nbsp;&nbsp;&nbsp;</font><br><br> </div></td>
  </tr>
  <script>
  function CheckPl(obj)
  {
  	if(obj.saytext.value=="")
  	{
  		alert("错误，评论不能为空");
  		obj.saytext.focus();
  		return false;
  	}
  	return true;
  }
  </script>
  <form action="../pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
  <tr id="tosaypl"> 
    <td bgcolor="#f8fcff"> <table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
            <td width="13%" height="28">&nbsp;&nbsp;&nbsp;<span class="you">我也评两句</span></td>
            <td valign="middle">用户名： 
              <input name="username" type="text" id="username" size="12" value="<?=$lusername?>" />
            密码： 
            <input name="password" type="password" id="password" size="12" value="<?=$lpassword?>" />
            验证码： 
            <input name="key" type="text" id="key" size="6" />
              <img src="/e/ShowKey/?v=pl" align="middle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/e/ShowKey/?v=pl&t='+Math.random()" title="看不清楚,点击刷新" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/e/member/register/" target="_blank">还没有注册？</a></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td bgcolor="#f8fcff"> <table width="100%" border="0" cellspacing="1" cellpadding="3" class="retext">
        <tr> 
          <td width="78%"><div align="center"> 
              <textarea name="saytext" cols="58" rows="6" id="saytext"></textarea>
            </div></td>
          <td width="22%" rowspan="2"> <div align="center">
              <input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
                匿名发表<br>
                <br />
              <input name="imageField" type="submit" id="imageField" value=" 提 交 " />
            </div></td>
        </tr>
        <tr> 
          <td><div align="center"> 
              <script src="/d/js/js/plface.js"></script>
            </div></td>
        </tr>
      </table> </td>
  </tr>
  <input name="id" type="hidden" id="id" value="<?=$id?>" />
  <input name="classid" type="hidden" id="classid" value="<?=$classid?>" />
  <input name="enews" type="hidden" id="enews" value="AddPl" />
  <input name="repid" type="hidden" id="repid" value="0" />
  </form>
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
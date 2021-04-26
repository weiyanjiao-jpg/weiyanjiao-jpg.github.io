<?php
require("../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../class/db_sql.php");
require("../data/dbcache/class.php");
require LoadLang("pub/fun.php");
require("../class/schallfun.php");
$link=db_connect();
$empire=new mysqlquery();
eCheckCloseMods('sch');//关闭模块
$searchtime=time();
$totalnum=(int)$_GET['totalnum'];
$sear=(int)$_GET['sear'];
if(!$public_r['usetotalnum'])
{
	$totalnum=0;
}
$firstsearch=0;
if($sear<1)
{
	$firstsearch=1;
	//搜索间隔
	$lastsearchtime=(int)getcvar('lastschalltime');
	if($lastsearchtime)
	{
		if($searchtime-$lastsearchtime<$public_r[schalltime])
		{
			printerror('SchallOutTime','',1);
		}
	}
	//设置最后搜索时间
	esetcookie('lastschalltime',$searchtime,$searchtime+3600*24);
}
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$page_line=$public_r['schallpagenum'];//每页显示链接数
$line=$public_r['schallnum'];//每页显示记录数
$offset=$start+$page*$line;//总偏移量
//编码
$iconv='';
$char='';
$targetchar='';
if($ecms_config['sets']['pagechar']!='gb2312')
{
	include_once(ECMS_PATH.'e/class/doiconv.php');
	$iconv=new Chinese('');
	$char=$ecms_config['sets']['pagechar']=='big5'?'BIG5':'UTF8';
	$targetchar='GB2312';
}
$schallr=ReturnSearchAllSql($_GET);
require("../data/dbcache/SearchAllTb.php");
$keyboard=$schallr['keyboard'];
$query="select id,classid from {$dbtbpre}enewssearchall where ".$schallr['where'];
if($totalnum<1)
{
	$totalquery="select count(*) as total from {$dbtbpre}enewssearchall where ".$schallr['where'];
	$num=$empire->gettotal($totalquery);
	if(empty($num))
	{
		printerror('SchallNotRecord','',1);
	}
}
else
{
	$num=$totalnum;
}
$search=$schallr['search'].'&sear=1';
if($public_r['usetotalnum'])
{
	$search.='&totalnum='.$num;
}
//checkpageno
eCheckListPageNo($page,$line,$num);
$query.=" order by infotime desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['SearchAllNav'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜索 - Powered by EmpireCMS</title>
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
<style type="text/css">
<!--
.r {
display:inline;
font-weight:normal;
margin:0;
font-size:16px;
margin-top:10px;
}
.a{color:green}
.fl{color:#77c}
-->
</style>
</head>
<body class="listpage">
[!--temp.dtheader--]
<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr valign="top">
		<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;搜索</td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><form action='index.php' method="GET" name="search_news" id="search_news">
							<table width="100%" border="0" cellspacing="6" cellpadding="0">
								<tr>
									<td height="32">关键字：
										<input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>" size="42" />
                    <select name="field" id="field">
                      <option value="1">全文</option>
                      <option value="2">标题</option>
                      <option value="3">内容</option>
                    </select> 
                    <input type="submit" name="Submit22" value="搜索" />
                    <font color="#666666">(多个关键字请用&quot;空格&quot;隔开)</font> </td>
								</tr>
							</table>
						</form>
						<table width="100%" border="0" cellpadding="0" cellspacing="6">
							<tr>
								<td>系统搜索到约有<strong><?=$num?></strong>项符合<strong><?=$keyboard?></strong>的查询结果</td>
							</tr>
						</table>
						
<?php
$no=$offset;
$subnum=120;
$formatdate="Y-m-d H:i:s";
while($r=$empire->fetch($sql))
{
	$tbname=$class_r[$r[classid]]['tbname'];
	if(empty($tbname))
	{
		continue;
	}
	$titlefield=$schalltb_r[$tbname]['titlefield'];
	$smalltextfield=$schalltb_r[$tbname]['smalltextfield'];
	$infor=$empire->fetch1("select id,classid,titlepic,newstime,isurl,titleurl,".$titlefield.",".$smalltextfield." from {$dbtbpre}ecms_".$tbname." where id='$r[id]' limit 1");
	if(empty($infor['id']))
	{
		continue;
	}
	$no++;
	$titleurl=sys_ReturnBqTitleLink($infor);
	$titlepic=$infor['titlepic']?$infor['titlepic']:$public_r['newsurl']."e/data/images/notimg.gif";
	$smalltext=SubSchallSmalltext($infor[$smalltextfield],$subnum);
	$title=DoReplaceFontRed($infor[$titlefield],$keyboard);
	$smalltext=DoReplaceFontRed($smalltext,$keyboard);
	$newstime=date($formatdate,$infor['newstime']);
?>

						<h2 class="r"><span><?=$no?>.</span> <a class="l" href="<?=$titleurl?>" target="_blank"><?=$title?></a></h2>
						<table width="80%" border="0" cellpadding="0" cellspacing="0">
							<tbody>
							<tr>
								<td><?=$smalltext?></td>
							</tr>
							<tr>
								<td><span class="a"><?=$titleurl?> - <?=$newstime?></span></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							</tbody>
						</table>
						
<?php
}
db_close();
$empire=null;
?>

						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list_page">
							<tr>
								<td><?=$listpage?></td>
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
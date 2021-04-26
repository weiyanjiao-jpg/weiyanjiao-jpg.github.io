<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
 <head> 
  <title>编号:DG050 - 帝国视界演示站</title> 
  <meta name="keywords" content="关键词1，关键词2，关键词3" /> 
  <meta name="description" content="这里是网站描述内容部分，可在后台系统设置自由编辑" /> 
  <meta http-equiv="Content-Language" content="zh-CN" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" /> 
  <meta name="applicable-device" content="pc,mobile" /> 
  <link rel="shortcut icon" href="/favicon.ico" />  
  <link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" rev="stylesheet" href="/skin/D_News/css/default.css" type="text/css" media="screen" /> 
  <script src="/skin/D_News/js/common.js" type="text/javascript"></script> 
 </head> 
 <body> 
  <div id="wrap"> 
  <!--公共头部-->
     <div id="topnav"> 
    <span> 
    <script src="/e/member/login/loginjs.php"></script>
	</span>
    <?=$public_r['add_home_notice']?> 
   </div> 
   <div id="head"> 
    <h2><a href="/" title="<?=$public_r['add_home_name']?>"></a></h2> 
    <dl id="ad1"> 
    <script src=/d/js/acmsd/thea1.js></script> 
    </dl> 
    <div class="clear"></div> 
   </div> 
   <div id="nav"> 
    <ul> 
     <li class=""><a href="/" title="网站首页">首页</a></li> 
<?php
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath from [!db.pre!]enewsclass where bclassid=0 and showclass=0 order by myorder limit 8',20,24,0); $bqno=0;
while($bqr=$empire->fetch($ecms_bq_sql))
{
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
if($bqr[classid] != '23' ){
?>
<li class=""><a href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>" title="<?=$bqr[classname]?>" target="_self" ><?=$bqr[classname]?></a>
</li>
<?php
}
}
?>
    </ul> 
   </div> 
   <nav id="navs-wrap"> 
    <div id="logos"> 
     <h1><a href="/" title="<?=$public_r['add_home_name']?>"> <?=$public_r['add_home_name']?> </a></h1> 
    </div> 
    <div class="menu-icon">
     导航
    </div> 
    <ul id="navs" class="menu"> 
     <li class="searchBtn"><a name="search">本站搜索</a></li> 
     <? @sys_ShowClassByTemp('0',12,0,0);?>
    </ul> 
   </nav> 
  <!--公共头部-->
   <div id="left"> 
    <div id="place">
     <strong>你的位置：</strong>
     <a href="/">首页</a>
    </div> 
    <div id="lieb"> 
     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',20,18,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
     <dl> 
      <dt>
       <span><a target="_blank" href="<?=$bqsr[classurl]?> " title="查看 <?=$bqsr[classname]?> 分类下的更多文章"><?=$bqsr[classname]?></a></span> 
       <h2><a target="_blank" href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></h2> 
      </dt> 
      <dd> 
       <div id="tu">
        <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"><img src="<?=$bqr[titlepic]?$bqr[titlepic]:'/e/data/images/notimg.gif'?>" alt="<?=$bqr['title']?>" /></a>
       </div> 
       <div id="zi1">
        <a target="_blank" href="<?=$bqsr['titleurl']?>"> <?=esub($bqr[smalltext],150)?>...</a> 
        <p></p> 
       </div> 
       <p class="tags">发布时间：<?=date('Y-m-d',$bqr[newstime])?> | 评论：<span id="sourceId::783" class="cy_cmt_count"><?=$bqr['plnum']?></span> | 浏览：<span><?=$bqr[onclick]?></span> | 作者：<?=$bqr[username]?></p> 
      </dd> 
      <div class="clear"></div> 
     </dl>
	 <?php
}
}
?>
    </div> 
   </div> 
   <div id="post-nav">
    <script>
	$(function(){
		$.post(
			"/e/extend/showpage/ajax.php",
			{enews:'listpage',listid:1,enewstype:4,pageno:''},
			function(data){
				$("#post-nav").append(data);
			}
		)	
	})
</script>
   </div> 
   <div id="right"> 
    <dl id="ss"> 
     <form onsubmit="return checkSearchForm()" method="post" name="searchform" action="/e/search/index.php"> 
      <input type="hidden" value="title" name="show" /> 
      <input type="hidden" value="1" name="tempid" /> 
      <input type="hidden" value="news" name="tbname" /> 
      <input name="mid" value="1" type="hidden" /> 
      <input name="dopost" value="search" type="hidden" /> 
      <input type="text" name="keyboard" id="edtSearch" class="text" value="输入搜索关键词" onblur="if($(this).val() == ''){$(this).val('输入搜索关键词');}" onfocus="if($(this).val() == '输入搜索关键词'){$(this).val('');}" x-webkit-speech="" /> 
      <input type="submit" id="btnPost" name="submit" class="submit" value="搜索" /> 
     </form> 
     <div class="clear"></div> 
    </dl> 
	<!--AD2-->
    <dl class="function"> 
     <dd class="function_c"> 
      <div>
       <script src=/d/js/acmsd/thea2.js></script>
      </div> 
     </dd> 
    </dl> 
    <dl class="function"> 
     <dt class="function_t">
      推荐阅读
     </dt> 
     <dd class="function_c"> 
      <ul>
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',10,18,0,'isgood=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
         <li><a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>"><?=$bqr[title]?></a></li>
      <?php
}
}
?>		 
      </ul> 
     </dd> 
    </dl> 
	<!--AD3-->
    <dl class="function"> 
     <dd class="function_c"> 
      <div>
       <script src=/d/js/acmsd/thea3.js></script>
      </div> 
     </dd> 
    </dl> 
    <dl class="function"> 
     <dt class="function_t">
      最热文章
     </dt> 
     <dd class="function_c"> 
      <ul> 
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,10,4,0,'','onclick DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
       <li><a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>" > <?=$bqr[title]?></a></li> 
	  <?php
}
}
?>	
      </ul> 
     </dd> 
    </dl> 
	<!--AD4-->
    <dl class="function"> 
     <dd class="function_c"> 
      <div>
       <script src=/d/js/acmsd/thea4.js></script>
      </div> 
     </dd> 
    </dl> 
    <dl class="function" id="divTags"> 
     <dt class="function_t">
      话题列表
     </dt> 
     <dd class="function_c"> 
      <ul> 
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewstags order by num DESC limit 30",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
       <?echo '<li class="tag-name"><a href="/tags-'.urlencode($bqr['tagid']).'-0.html" title="'.$bqr['num'].'个话题">'.$bqr['tagname'].'<span class="tag-count"> ('.$bqr['num'].')</span></a></li> ';?>
	  <?php
}
}
?>
      </ul> 
     </dd> 
    </dl> 
    <dl class="function"> 
     <dd class="function_c"> 
      <div>
       <!--AD-->
      </div> 
     </dd> 
    </dl> 
    <dl class="function"> 
     <dt class="function_t">
      随机阅读
     </dt> 
     <dd class="function_c"> 
      <ul>
      <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_ecms_news order by rand() limit 10',10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
       <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> <?=$bqr['title']?></a></li> 
	  <?php
}
}
?>
      </ul> 
     </dd> 
    </dl> 
   </div> 
   <div class="clear"></div> 
   <div id="links"> 
    <ul> 
     <li><strong>友情链接</strong>：</li> 
	 <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 order by myorder',100,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
     <li><a href="<?=$bqr[lurl]?>" target="_blank"> <?=$bqr[lname]?> </a></li> 
	<?php
}
}
?>
     <div class="clear"></div> 
    </ul> 
   </div> 
<!-- 公共底部 --> 
   <div class="footer" id="footer"> 
    <span> </span> 
    <p>2016-2020 <?=$public_r['add_home_url']?> <?=$public_r['add_home_beian']?> 
    <p id="BY-NC-ND"> 移植作品，版权归原作者所有，若侵犯了您的权益，请联系我们处理，谢谢！ | 本主题由 <a href="http://www.juguize.com/" target="_blank"><?=$public_r['add_home_name']?></a> 仿制开发 </p> 
   </div>  
 <!-- 百度推送 --> 
 <?=$public_r['add_home_tuisong']?> 
 <!-- 百度统计 --> 
 <?=$public_r['add_home_tongji']?> 

<!-- 公共底部 --> 
   <script id="cy_cmt_num" src="/skin/D_News/js/plugins.list.count.js?clientId=cyt032NB9">
</script> 
   <script type="text/javascript" src="/skin/D_News/js/plugins.count.js"></script> 
   <div id="simplemodal-container"></div> 
   <div id="searchbar"> 
    <p>全站搜索</p> 
    <form onsubmit="return checkSearchForm()" method="post" name="searchform" action="/e/search/index.php"> 
     <input type="hidden" value="title" name="show" /> 
     <input type="hidden" value="1" name="tempid" /> 
     <input type="hidden" value="news" name="tbname" /> 
     <input name="mid" value="1" type="hidden" /> 
     <input name="dopost" value="search" type="hidden" /> 
     <input type="text" name="keyboard" id="edtSearch" class="text" value="输入搜索关键词" onblur="if($(this).val() == ''){$(this).val('输入搜索关键词');}" onfocus="if($(this).val() == '输入搜索关键词'){$(this).val('');}" x-webkit-speech="" /> 
     <input type="submit" id="btnPost" name="submit" class="submit" value="搜索" /> 
    </form> 
   </div> 
  </div> 
  <script src="/skin/D_News/js/inbody.js" type="text/javascript"></script>  
 </body>
</html>
<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="Content-Language" content="zh-CN" /> 
  <title><?=$grpagetitle?>-<?=$public_r[sitename]?></title> 
  <meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
  <meta name="description" content="<?=$grpagetitle?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" /> 
  <meta name="applicable-device" content="pc,mobile" /> 
  <link rel="shortcut icon" href="/favicon.ico" /> 
  <link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" rev="stylesheet" href="/skin/D_News/css/default.css" type="text/css" media="screen" /> 
  <script type="text/javascript" src="/e/data/js/ajax.js"></script>
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
     <?=$grurl?>
    </div> 
    <div id="info"> 
     <dl id="title"> 
      <h1><a href="<?=$grtitleurl?>" rel="bookmark"><?=$ecms_gr[title]?></a></h1> 
      <p> </p>
      <div id="ckepop"></div> <?=date('Y-m-d H:i:s',$ecms_gr[newstime])?> | 
      <script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></span>人围观 | 
      <a href="#divCommentPost">评论:<script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2></script></a>
      <a href="#SOHUCS" id="changyan_count_unit"></a> 
      <p></p> 
     </dl> 
     <dl id="ad2"> 
      <!--AD--> 
     </dl> 
     <dl id="zi"> 
      <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>  
      <dl class="pagebar" style="margin: 10px 0px;
text-align: center;"> 
      </dl> <br><br>
      <div class="bdsharebuttonbox">
       <a href="#" class="bds_more" data-cmd="more"></a>
       <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
       <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
       <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
       <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
       <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
      </div> 
      <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script> <br><br>
      <nav class="nav-single"> 
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_news where id<'$navinfor[id]' and classid='$navinfor[classid]' order by id desc limit 1",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
       <a href="<?=$bqsr[titleurl]?>" rel="prev"><span class="meta-nav"><span class="post-nav">&lt;&nbsp;上一篇</span><br /> <?=$bqr[title]?></span> </a> 
	  <?php
}
}
?>
	  
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_news where id>'$navinfor[id]' and classid='$navinfor[classid]' order by id limit 1",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
       <a href="<?=$bqsr[titleurl]?>" rel="next"><span class="meta-nav"><span class="post-nav">下一篇&nbsp;&gt;</span><br /> <?=$bqr[title]?></span> </a> 
	  <?php
}
}
?>
       <div class="clear"></div> 
      </nav> 
      <div id="ad3">
       <!--AD-->
      </div> 
      <div class="context_box">
       标签：<? @sys_eShowTags('selfinfo',10,0,'',0,'','',0,'','tagname');?> 
       <span> 
        <!--AD--></span> 
      </div> 
      <div id="guan"> 
       <h4>相关内容推荐：</h4> 
       <ul> 
	   <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select *  from phome_ecms_news where title like '%$navinfor[keyboard]%' or keyboard like '%$navinfor[keyboard]%' order by id desc limit 12",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><span><?=date('Y-m-d',$bqr[newstime])?></span><a href="<?=$bqsr['titleurl']?>" rel="bookmark" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></li> 
	   <?php
}
}
?>
       </ul> 
      </div> 
      <div id="ad4">
       <!--AD-->
      </div> 
      <div class="post" id="divCommentPost"> 
<!-- 评论 开始 -->
<div class="pinglun">
<div class="pl-520am" data-id="<?=$ecms_gr[id]?>" data-classid="<?=$ecms_gr[classid]?>" data-showhot="0"></div>
<script type="text/javascript" src="/e/extend/lgyPl/api.js"></script>
</div>
<!-- 评论 结束 --> 
     </dl>
    </div> 
    <div class="clr"></div> 
    <div id="post-nav">
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_news where id<'$navinfor[id]' and classid='$navinfor[classid]' order by id desc limit 1",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
     <a href="<?=$bqsr[titleurl]?>" class="prev" title="<?=$bqr[title]?>"> </a> 
	<?php
}
}
?>
     <!--下一篇--> 
	 <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_news where id>'$navinfor[id]' and classid='$navinfor[classid]' order by id limit 1",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
     <a href="<?=$bqsr[titleurl]?>" class="next" title="<?=$bqr[title]?>"> </a> 
	 <?php
}
}
?>
    </div> 
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
	<!--AD9-->
    <dl class="function"> 
     <dd class="function_c"> 
      <div>
       <script src=/d/js/acmsd/thea9.js></script>
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
	<!--AD10-->
    <dl class="function"> 
     <dd class="function_c"> 
      <div>
       <script src=/d/js/acmsd/thea10.js></script>
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
	<!--AD11-->
    <dl class="function"> 
     <dd class="function_c"> 
      <div>
       <script src=/d/js/acmsd/thea11.js></script>
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
	<!--AD12-->
    <div id="box"> 
     <div id="float" class="div1"> 
      <dl class="function"> 
       <dd class="function_c"> 
        <div>
         <script src=/d/js/acmsd/thea12.js></script>
        </div> 
       </dd> 
      </dl> 
     </div> 
    </div> 
   </div> 
   <div class="clear"></div> 
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
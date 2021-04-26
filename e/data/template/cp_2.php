<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?></td>
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
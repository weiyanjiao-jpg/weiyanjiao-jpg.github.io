<?php
if(!defined('InEmpireCMS'))
{
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>信息提示(</title>
    <style>
    body{font: 500 0.875em/20px Microsoft Yahei, Hiragino Sans GB,Arial,WenQuanYi Micro Hei, sans-serif; padding: 55px 10px;font-size: 100%; color: #666;}
    p {margin: 0; }
    .container {max-width: 380px;_width: 380px;margin: 0 auto;}
    .panel {margin-bottom: 20px; background-color: #ffffff; border: 1px solid transparent; border-radius: 4px; -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); }
    .panel-body {padding: 15px; text-align: center; }
    .panel-body:before, .panel-body:after {display: table; content: " "; }
    .panel-body:after {clear: both; }
    .panel-body:before, .panel-body:after {display: table; content: " "; }
    .panel-body:after {clear: both; }
    .panel-heading {padding: 10px 15px; border-bottom: 1px solid transparent; border-top-right-radius: 3px; border-top-left-radius: 3px; }
    .panel-title {margin-top: 0; margin-bottom: 0; font-size: 16px; }
    .panel-title > a {color: inherit; }
    .panel-footer {text-align: center; padding: 10px 15px; background-color: #f5f5f5; border-top: 1px solid #dddddd; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; }
    .panel-footer a{font-size: 12px; color: #666;text-decoration: none;}
    .panel-primary {border-color: #428bca; }
    .panel-primary > .panel-heading {color: #ffffff; background-color: #428bca; border-color: #428bca; }
    .panel-primary > .panel-heading + .panel-collapse .panel-body {border-top-color: #428bca; }
    .panel-primary > .panel-footer + .panel-collapse .panel-body {border-bottom-color: #428bca; }
    </style>
  <SCRIPT language=javascript>
  var secs=5;//5秒
  for(i=1;i<=secs;i++) 
  { window.setTimeout("update(" + i + ")", i * 1000);} 
  function update(num) 
  { 
  if(num == secs) 
  { history.go(-1); } 
  else 
  { } 
  }
  </SCRIPT>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">帝国模板网（www.juguize.com）提示：</div>
            </div>
            <div class="panel-body">
                <p><?=$error?></p>
            </div>
            <div class="panel-footer">
                 <a href="<?=$gotourl?>">如果您的浏览器没有自动跳转，请点击这里</a><br>
				 <a href="http://www.juguize.com/">更多帝国CMS模板请访问：www.juguize.com </a>
            </div>
        </div>
    </div>
</body>
</html>
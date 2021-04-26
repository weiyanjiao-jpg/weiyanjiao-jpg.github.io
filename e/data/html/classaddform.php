<?php
if(!defined('InEmpireCMS'))
{exit();}
?><tr bgcolor='#FFFFFF' height=25><td>栏目图标</td><td>
<input name="lanpic" type="text" id="lanpic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars($addr[lanpic])?>" size="60">
</td></tr><tr bgcolor='#FFFFFF' height=25><td>是否热门栏目（1是热门，0不是热门）</td><td><select name="hot" id="hot"><option value="0"<?=$addr[hot]=="0"||$ecmsfirstpost==1?' selected':''?>>0</option><option value="1"<?=$addr[hot]=="1"?' selected':''?>>1</option></select></td></tr>
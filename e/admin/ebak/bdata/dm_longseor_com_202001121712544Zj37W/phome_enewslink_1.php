<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslink`;");
E_C("CREATE TABLE `phome_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslink` values('1',0xe7bd91e7bb9ce890a5e99480e59fb9e8aead,'',0x687474703a2f2f7777772e6c6f6e6773656f722e636f6d2f,'2019-02-18 17:04:56','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `phome_enewslink` values('8',0xe5b89de59bbd434d53e6a8a1e69dbf,'',0x687474703a2f2f7777772e6a756775697a652e636f6d2f,'2019-12-14 09:06:54','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('9',0xe5b89de59bbd434d53e5858de8b4b9e6a8a1e69dbf,'',0x687474703a2f2f7777772e6a756775697a652e636f6d2f,'2019-12-14 09:07:09','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('10',0xe7bd91e7ab99e6a8a1e69dbf,'',0x687474703a2f2f7777772e6a756775697a652e636f6d2f,'2019-12-14 09:07:15','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('5',0xe7bd91e7bb9ce890a5e99480e8aebae59d9b,'',0x687474703a2f2f7777772e31356c6f752e636e2f,'2019-02-18 17:05:52','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `phome_enewslink` values('6',0xe5819ae7bd91e7ab99e69599e7a88b,'',0x687474703a2f2f7777772e7275696b65686c2e636f6d2f,'2019-02-18 17:06:31','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");

@include("../../inc/footer.php");
?>
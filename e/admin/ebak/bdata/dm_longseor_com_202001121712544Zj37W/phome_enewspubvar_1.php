<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspubvar`;");
E_C("CREATE TABLE `phome_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspubvar` values('1',0x686f6d655f626569616e,0xe7bd91e7ab99e5a487e6a188e58fb7,0xe7b2a4494350e5a48738383838383838383838,'','0','0','1');");
E_D("replace into `phome_enewspubvar` values('2',0x686f6d655f746f6e676a69,0xe7bd91e7ab99e7bb9fe8aea1e4bba3e7a081,'','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('3',0x686f6d655f747569736f6e67,0xe887aae58aa8e68ea8e98081e4bba3e7a081,'','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('4',0x686f6d655f7171,0xe88194e7b3bb5151,0x3132333435363738,'','0','0','1');");
E_D("replace into `phome_enewspubvar` values('5',0x686f6d655f686f6d6573,0xe7ab99e782b9e5908de7a7b0,0xe5b89de59bbde8a786e7958ce6a8a1e69dbfe7bd91,'','0','0','1');");
E_D("replace into `phome_enewspubvar` values('9',0x686f6d655f75726c,0xe7ab99e782b9e59f9fe5908d,0x687474703a2f2f64656d6f2e6c6f6e6773656f722e636f6d,'','0','0','1');");
E_D("replace into `phome_enewspubvar` values('8',0x686f6d655f6e616d65,0xe7ab99e995bfe5908de7a7b0,0xe5b89de59bbde8a786e7958c,'','0','0','1');");
E_D("replace into `phome_enewspubvar` values('6',0x686f6d655f6d61696c,0xe88194e7b3bbe982aee7aeb1,0x383838383838384071712e636f6d,'','0','0','1');");
E_D("replace into `phome_enewspubvar` values('7',0x686f6d655f6e6f74696365,0xe5a4b4e983a8e585ace5918a,0x3c6120687265663d222322207461726765743d225f626c616e6b223ee8bf99e9878ce698afe9a696e9a1b5e585ace5918ae69687e5ad97efbc8ce58fafe59ca8e5908ee58fb03ee7b3bbe7bb9f3ee689a9e5b195e58f98e9878f3ee9a696e9a1b5e585ace5918ae4b8ade4bfaee694b9efbc813c2f613e,'','0','0','1');");

@include("../../inc/footer.php");
?>
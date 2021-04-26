<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserlist`;");
E_C("CREATE TABLE `phome_enewsuserlist` (
  `listid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `listname` varchar(60) NOT NULL DEFAULT '',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `filepath` varchar(120) NOT NULL DEFAULT '',
  `filetype` varchar(12) NOT NULL DEFAULT '',
  `totalsql` text NOT NULL,
  `listsql` text NOT NULL,
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `lencord` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`listid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuserlist` values('2',0xe9a696e9a1b5e58897e8a1a8,0xe7bd91e7ab99e5908de7a7b0,0x2e2e2f2e2e2f,0x2e68746d6c,0x73656c65637420636f756e74282a2920617320746f74616c2066726f6d205b2164622e707265215d65636d735f6e657773,0x73656c656374202a2066726f6d205b2164622e707265215d65636d735f6e657773206f726465722062792069642064657363,'0','25','11',0xe7bd91e7ab99e585b3e994aee8af8d,0xe7bd91e7ab99e68f8fe8bfb0,'0');");

@include("../../inc/footer.php");
?>
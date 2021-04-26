<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmemberadd`;");
E_C("CREATE TABLE `phome_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `regipport` varchar(6) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmemberadd` values('1',0xe9be99e5a4a7e6b885,0x393132303337343639,0x393431323033373436394071712e636f6d,0x3133303237393532323636,0x3133303237393532323039,0xe6b7b1e59cb3e5b882e9be99e58d8ee696b0e58cbae6b091e6b2bbe8a197e98193,0x353138303030,'1',0x38363738393738383838,0xe6b7b1e59cb3e5b882e9be99e58d8ee696b0e58cbae6b091e6b2bbe8a197e98193,'','','','','','2',0x3131362e37372e37352e323530,'1578799800',0x3138332e3233362e37382e3631,'4',0x3534373335,0x3536373335);");

@include("../../inc/footer.php");
?>
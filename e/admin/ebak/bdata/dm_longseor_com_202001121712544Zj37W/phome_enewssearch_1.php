<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('1',0xe7a7a6e5a78be79a87,'1548409148',0x7469746c65,'1',0x3131392e3132322e39302e313035,'','3',0x6e65777374696d65,'0',0x3637376462333733666337646530373362373336646562343433636331336334,0x6e657773,'0','0',0x20616e642028287469746c65204c494b45202725e7a7a6e5a78be79a8725272929,'0');");
E_D("replace into `phome_enewssearch` values('2',0xe5889be4b89a,'1578820032',0x7469746c65,'1',0x3131362e37372e37332e313836,'','25',0x6e65777374696d65,'0',0x3630306130316532343065663934393837383662363138613961623231656563,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e5889be4b89a25272929,'0');");
E_D("replace into `phome_enewssearch` values('3',0xe9a9ace4ba91,'1576290491',0x7469746c65,'3',0x3131362e372e39362e3539,'','10',0x6e65777374696d65,'0',0x3366626130383437313036626138653833306530323531613733613663383036,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e9a9ace4ba9125272929,'0');");
E_D("replace into `phome_enewssearch` values('4',0xe7a791e68a80,'1559888503',0x7469746c65,'1',0x3131392e3132322e39302e34,'','7',0x6e65777374696d65,'0',0x3863316432626634613537643534333363633932366263306535396332303164,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e7a791e68a8025272929,'0');");

@include("../../inc/footer.php");
?>
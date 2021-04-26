<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuser`;");
E_C("CREATE TABLE `phome_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  `salt2` varchar(20) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  `preipport` varchar(6) NOT NULL DEFAULT '',
  `addipport` varchar(6) NOT NULL DEFAULT '',
  `uprnd` varchar(32) NOT NULL DEFAULT '',
  `wname` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `wxno` varchar(80) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuser` values('1',0x61646d696e,0x3738356437323562303561623335616164656362313833623631656364363435,0x38387851644f5751717453427a4b3533754f304d,'','1','0','1','0',0x7176313253737a70,'51','1578792579',0x3138332e3233362e37382e3631,'','','0','1578745274',0x3138332e3233362e37382e3631,'1548395479',0x3131362e372e39372e3530,0x79474c36697670436574374f34326932686737655862496d5859663568375354416d50324b4149475148396d6830594a,0x48416d5578536869393555524a376b6554364574,0x3535383138,0x3533323231,0x36353131,'','','','','');");
E_D("replace into `phome_enewsuser` values('2',0x61646d696e32,0x6537376239393765663763653065353837656162633430353735303963623162,0x6f367a6e786344716870336c6a33484459534a32,0x7c317c337c327c347c31317c31327c,'1','0','1','0',0x577a6d6b6c455735,'1','1559980538',0x3131362e37372e37352e323530,'','','0','0','','1559980518',0x3131362e37372e37352e323530,0x6b57424e39456967326f336a66744f616736383847306a30576b6f6849457748726e6a50625a6a364f6e506842626f48,0x55534d6e3648637477766b4a5464717236764247,0x3537363137,0x3537353932,0x3537353932,'','','','','');");

@include("../../inc/footer.php");
?>
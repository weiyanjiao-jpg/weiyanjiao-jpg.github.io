<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspl_set`;");
E_C("CREATE TABLE `phome_enewspl_set` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pltime` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plsize` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plincludesize` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plkey_ok` tinyint(1) NOT NULL DEFAULT '0',
  `plface` text NOT NULL,
  `plfacenum` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `plgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plclosewords` text NOT NULL,
  `plf` text NOT NULL,
  `plmustf` text NOT NULL,
  `pldatatbs` text NOT NULL,
  `defpltempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pl_num` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pldeftb` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plurl` varchar(200) NOT NULL DEFAULT '',
  `plmaxfloor` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plquotetemp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspl_set` values('1','20','500','0','0',0x7c7c5b2fe5beaee7ac915d232377782e6769667c7c5b2fe699955d2323792e6769667c7c5b2fe5bf83e88ab1e68092e694be5d232378686e662e6769667c7c5b2fe9bc93e68e8c5d2323677a2e6769667c7c5b2fe59388e6aca05d23236861782e6769667c7c5b2fe997ade598b45d2323627a2e6769667c7c5b2fe591b2e789995d232363792e6769667c7c5b2fe5aeb3e7be9e5d232368782e6769667c7c5b2fe8a1b05d232373687561692e6769667c7c5b2fe581b7e7ac915d232374782e6769667c7c2fe68a98e7a3a85d23237a6d2e6769667c7c5b2fe99abee8bf875d23236e672e6769667c7c5b2fe7a4bae788b15d232373612e6769667c7c5b2fe58fafe788b15d23236b612e6769667c7c5b2fe6b3aa5d23236c65692e6769667c7c5b2fe985b75d2323636f6f6c2e6769667c7c5b2fe59090e8a1805d23237475782e6769667c7c5b2fe6969ce79cbce7ac915d232377732e6769667c7c5b2fe7ac91e593ad5d23237863792e6769667c7c5b2fe5bcba5d2323712e6769667c7c,'10','0','','','',0x2c312c,'1','12','1',0x2f652f706c2f,'0',0x3c64697620636c6173733d5c2265636f6d6d656e745c223e0d0a3c7370616e20636c6173733d5c2265636f6d6d656e74617574686f725c223ee5bc95e794a820405b212d2d757365726e616d652d2d5defbc9a3c2f7370616e3e0d0a3c64697620636c6173733d5c2265636f6d6d656e74746578745c223e5b212d2d706c746578742d2d5d3c2f6469763e0d0a3c2f6469763e);");

@include("../../inc/footer.php");
?>
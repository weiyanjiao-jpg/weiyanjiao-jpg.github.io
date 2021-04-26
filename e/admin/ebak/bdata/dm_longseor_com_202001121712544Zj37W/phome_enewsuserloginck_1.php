<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserloginck`;");
E_C("CREATE TABLE `phome_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuserloginck` values('1',0x3463306464376565373835626337623462663035666435316463383839626564);");
E_D("replace into `phome_enewsuserloginck` values('2',0x3131303339343262313061393937306133633035383562666536363336306639);");

@include("../../inc/footer.php");
?>
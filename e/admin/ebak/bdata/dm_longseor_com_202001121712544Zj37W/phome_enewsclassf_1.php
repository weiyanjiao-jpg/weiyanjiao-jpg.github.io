<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclassf`;");
E_C("CREATE TABLE `phome_enewsclassf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassf` values('1',0x6c616e706963,0xe6a08fe79baee59bbee6a087,0x74657874,0x0d0a3c696e707574206e616d653d5c226c616e7069635c2220747970653d5c22746578745c222069643d5c226c616e7069635c222076616c75653d5c223c3f3d2465636d736669727374706f73743d3d313f5c225c223a6568746d6c7370656369616c63686172732824616464725b6c616e7069635d293f3e5c222073697a653d5c2236305c223e0d0a,'','0',0x56415243484152,0x323535,'',0x3630);");
E_D("replace into `phome_enewsclassf` values('2',0x686f74,0xe698afe590a6e783ade997a8e6a08fe79baeefbc8831e698afe783ade997a8efbc8c30e4b88de698afe783ade997a8efbc89,0x73656c656374,0x3c73656c656374206e616d653d5c22686f745c222069643d5c22686f745c223e3c6f7074696f6e2076616c75653d5c22305c223c3f3d24616464725b686f745d3d3d5c22305c227c7c2465636d736669727374706f73743d3d313f5c272073656c65637465645c273a5c275c273f3e3e303c2f6f7074696f6e3e3c6f7074696f6e2076616c75653d5c22315c223c3f3d24616464725b686f745d3d3d5c22315c223f5c272073656c65637465645c273a5c275c273f3e3e313c2f6f7074696f6e3e3c2f73656c6563743e,'','0',0x56415243484152,0x323535,0x303a64656661756c747c31,'');");

@include("../../inc/footer.php");
?>
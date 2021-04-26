<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0',0xe69585e4ba8be6b187,'','0','10','10','1','0','1','','1',0x6775736869687569,0x2e68746d6c,'','0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','1','1','10',0xe69585e4ba8be6b187,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0',0x2c312c,'1','2','0','','1','1','0','0','0','0','','1','6','0','0','','1','0','1','0','','0','0','0','','0','0','15','15','1548395893','0','','0','1577611326');");
E_D("replace into `phome_enewsclass` values('2','0',0xe4ba92e88194e7bd912b,'','0','12','10','1','0','1','','1',0x68756c69616e77616e67,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','3','','10','1','1','10',0xe4ba92e88194e7bd912b,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','1','0','','0','0','1','0','','0','0','0','','0','0','15','15','1548395928','0','','0','1577611337');");
E_D("replace into `phome_enewsclass` values('3','0',0xe7a791e68a80e6b4be,'','0','10','10','1','0','1','','1',0x6b656a69706169,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','2','','10','1','1','10',0xe7a791e68a80e6b4be,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','1','0','','0','0','1','0','','0','0','0','','0','0','14','14','1548395975','0','','0','1577611331');");
E_D("replace into `phome_enewsclass` values('4','0',0xe696b0e997bbe5a4b4e69da1,'','0','10','10','1','0','1','','1',0x746f757469616f,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','4','','10','1','1','10',0xe696b0e997bbe5a4b4e69da1,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','1','0','','0','0','1','0','','0','0','0','','0','0','12','12','1548396024','0','','0','1577611342');");
E_D("replace into `phome_enewsclass` values('5','0',0xe585b3e4ba8ee68891e4bbac,0x7c,'0','25','10','0','0','1','','0',0x6775616e7975776f6d656e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','8','','10','1','1','10',0xe585b3e4ba8ee68891e4bbac,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548396252','0','','0','1577611497');");
E_D("replace into `phome_enewsclass` values('10','5',0xe68a95e7a8bfe9a1bbe79fa5,'','0','25','10','0','1','0',0x7c357c,'0',0x6775616e7975776f6d656e2f746f7567616f78757a6869,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe68a95e7a8bfe9a1bbe79fa5,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1552977984','0','','0','1577541701');");
E_D("replace into `phome_enewsclass` values('9','5',0xe5b9bfe5918ae59088e4bd9c,'','0','25','10','0','1','0',0x7c357c,'0',0x6775616e7975776f6d656e2f6775616e6767616f68657a756f,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe5b9bfe5918ae59088e4bd9c,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1552977963','0','','0','1577541695');");
E_D("replace into `phome_enewsclass` values('8','5',0xe88194e7b3bbe68891e4bbac,'','0','25','10','0','1','0',0x7c357c,'0',0x6775616e7975776f6d656e2f6c69616e7869776f6d656e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe88194e7b3bbe68891e4bbac,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1552977910','0','','0','1577541690');");
E_D("replace into `phome_enewsclass` values('11','0',0xe7a791e68a80e9a291e98193,'','0','10','10','1','0','1','','1',0x6b656a6970696e64616f,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','5','','10','1','1','10',0xe7a791e68a80e9a291e98193,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','1','0','','0','0','1','0','','0','0','0','','0','0','13','13','1553000774','0','','0','1577611347');");
E_D("replace into `phome_enewsclass` values('12','0',0xe6b1bde8bda6e9a291e98193,'','0','12','10','1','0','1','','1',0x716963686570696e64616f,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','6','','10','1','1','10',0xe6b1bde8bda6e9a291e98193,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','1','0','','0','0','1','0','','0','0','0','','0','0','17','17','1553001867','0','','0','1577611352');");
E_D("replace into `phome_enewsclass` values('13','0',0xe5a8b1e4b990e9a291e98193,'','0','10','10','1','0','1','','1',0x79756c6570696e64616f,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','7','','10','1','1','10',0xe5a8b1e4b990e9a291e98193,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','6','1','0','','0','0','1','0','','0','0','0','','0','0','0','0','1559990310','0','','0','1578795758');");
E_D("replace into `phome_enewsclass` values('15','5',0x54414753e4b8ade5bf83,'','0','25','10','0','0','0',0x7c357c,'0',0x6775616e7975776f6d656e2f74616773,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0x54414753e4b8ade5bf83,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe8bf99e9878ce698afe6a08fe79baee7ae80e4bb8befbc8ce8afb7e7a7bbe6ada5e5908ee58fb02de6a08fe79bae2de7aea1e79086e6a08fe79bae2de59fbae69cace5b19ee680a72de6a08fe79baee7ae80e4bb8be4b8ade8bf9be8a18ce4bfaee694b9efbc81,'','1','0','0','0','0','0','0','','0','0','0','','0','4','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1578805931','0','','0','1578805961');");

@include("../../inc/footer.php");
?>
<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstags`;");
E_C("CREATE TABLE `phome_enewstags` (
  `tagid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` char(20) NOT NULL DEFAULT '',
  `num` int(10) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tagtitle` char(60) NOT NULL DEFAULT '',
  `tagkey` char(100) NOT NULL DEFAULT '',
  `tagdes` char(255) NOT NULL DEFAULT '',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tagid`),
  UNIQUE KEY `tagname` (`tagname`),
  KEY `isgood` (`isgood`),
  KEY `cid` (`cid`),
  KEY `num` (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstags` values('1',0xe7be8ee4baba,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('2',0xe5b08fe7b1b3,'4','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('3',0xe7a791e68a80,'49','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('4',0xe5889be4b89a,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('5',0xe9acbce590b9e781af,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('6',0xe7b2bee7bb9de5a5b3e78e8b,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('7',0xe5beaee5ba97,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('8',0xe9a9ace4ba91,'4','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('9',0xe69cbae6a2b0e4b98be5aeb6,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('10',0xe6bbb4e6bbb4,'2','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('11',0xe79bb4e692ad,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('12',0xe691a9e68b9c,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('13',0xe8b0b7e6ad8c,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('14',0xe5bdb1e8a786,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('15',0xe691a9e68b9c2ee7a791e68a80,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('16',0xe699bae883bde69184e5838fe5a4b4,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('17',0xe799bee5baa6,'2','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('18',0xe88bb9e69e9c,'3','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('19',0xe68a96e99fb3,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('20',0xe5beaee4bfa1,'2','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('21',0xe696b0e8a5bfe585b0,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('22',0xe5ae9de9a9ac,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('23',0xe5a594e9a9b0,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('24',0xe5a4a7e4bc97,'2','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('25',0xe69fb3e4bca0e5bf97,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('26',0x54434c,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('27',0xe78e8be585b4,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('28',0x6f666f,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('29',0xe58d8ee7b1b3,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('30',0xe5a5a5e696afe58da1,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('31',0xe7be8ee59bbd,'2','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('32',0xe4babae5b7a5e699bae883bd,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('33',0xe4bc81e9b985e58fb7,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('34',0xe58e9fe5889b4950,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('35',0xe5b08fe5a4a9e6898d,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('36',0xe99381e5a898e5ad90,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('37',0xe7a4bee4baa4,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('38',0xe7be8ee59ba2,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('39',0xe4ba9ae9a9ace9808a,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('40',0xe998bfe9878c,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('41',0xe7bd91e69893e794b5e59586,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('42',0xe7a791e5ada6e5aeb6,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('43',0xe58d8ee4b8ba6e6f766134,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('44',0xe9bb91e9b2a8,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('45',0xe6b8b8e6888fe6898be69cba,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('46',0xe891a3e5b08fe5a790,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('47',0xe6b3a2e99fb3,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('48',0xe697a5e69cac,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('49',0xe6b395e59bbd,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('50',0xe99bb7e5869b,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('51',0x69506164,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('52',0x7669766f,'2','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('53',0x7669766f583237,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('54',0xe994a4e5ad90,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('55',0xe6898be69cba,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('56',0xe99480e9878fe586a0e5869b,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('57',0x3647,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('58',0xe68a80e69caf,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('59',0xe5b08fe7baa2e4b9a6,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('60',0xe58d8ee4b8ba,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('61',0xe4b889e6989f,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('62',0xe7baa2e7b1b34e6f74653750726f,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('63',0xe9aa81e9be99363735,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('64',0xe5b08fe9b98fe6b1bde8bda6,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('65',0xe7a68fe789b9,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('66',0xe9809fe885be,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('67',0xe69cace794b0e69db0e5beb7,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('68',0xe9a286e5858b,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('69',0x535556,'4','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('70',0xe8b1aae58d8e535556,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('71',0xe99bb7e5858be890a8e696af5258,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('72',0xe5a587e7919e,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('73',0xe4b880e6b1bde4b8b0e794b0,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('74',0xe6a087e9858d384154,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('75',0xe99b85e99881,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('76',0xe5a4a9e7b181,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('77',0xe8b5b7e4ba9a,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('78',0xe4bf9de697b6e68db7,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('79',0xe59bbde4baa7e8bda6,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('80',0xe587afe8bfaae68b89e5858b,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('81',0xe6b7b7e59088e58aa8e58a9b535556,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('82',0xe5a4a7e4bc97e98094e8a782,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('83',0xe4b8ade7baa7535556,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('84',0xe5a4a7e4bc97e98094e8a7824c,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('85',0xe98094e8a782,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('86',0xe99fa9e7b3bbe8bda6,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('87',0xe699aee68b89e5a49a,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('88',0xe58f8ce58d81e4b880,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('89',0xe891a3e6988ee78fa0,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('90',0xe696b0e4b889e69dbf,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('91',0xe8af81e79b91e4bc9a,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('92',0xe5bcbae7949fe68ea7e882a1,'1','0','0','','','','0');");

@include("../../inc/footer.php");
?>
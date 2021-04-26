<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1',0x61646d696e,'2019-01-25 13:51:37',0x3131362e372e39372e3530,'1','','0',0x36393930);");
E_D("replace into `phome_enewslog` values('2',0x61646d696e,'2019-02-18 16:58:57',0x3131362e372e39362e3533,'1','','0',0x38303836);");
E_D("replace into `phome_enewslog` values('3',0x61646d696e,'2019-02-18 16:58:58',0x3131392e3132322e38382e323239,'1','','0',0x32373037);");
E_D("replace into `phome_enewslog` values('4',0x41646d696e5f4c6f6e67,'2019-03-18 18:34:42',0x3131362e372e39362e3235,'0','','0',0x3235383933);");
E_D("replace into `phome_enewslog` values('5',0x61646d696e,'2019-03-18 18:34:49',0x3131392e3132322e39302e323335,'1','','0',0x3236353931);");
E_D("replace into `phome_enewslog` values('6',0x41646d696e5f4c6f6e67,'2019-03-18 20:36:48',0x3131362e37372e37332e313836,'0','','0',0x3535363038);");
E_D("replace into `phome_enewslog` values('7',0x61646d696e,'2019-03-18 20:36:51',0x3131362e37372e37332e313836,'1','','0',0x3535363132);");
E_D("replace into `phome_enewslog` values('8',0x41646d696e5f4c6f6e67,'2019-03-19 08:40:48',0x3131392e3132322e39302e34,'0','','0',0x3138343935);");
E_D("replace into `phome_enewslog` values('9',0x61646d696e,'2019-03-19 08:40:57',0x3131392e3132322e38392e3539,'1','','0',0x3334363539);");
E_D("replace into `phome_enewslog` values('10',0x41646d696e5f4c6f6e67,'2019-03-19 11:52:18',0x3131362e372e39362e3637,'0','','0',0x3132343032);");
E_D("replace into `phome_enewslog` values('11',0x61646d696e,'2019-03-19 11:52:24',0x3131362e372e39362e3637,'1','','0',0x3132353730);");
E_D("replace into `phome_enewslog` values('12',0x61646d696e,'2019-03-19 16:56:49',0x3131392e3132322e39302e34,'1','','0',0x3139393637);");
E_D("replace into `phome_enewslog` values('13',0x61646d696e,'2019-03-19 18:11:35',0x3131362e372e39362e3539,'1','','0',0x32333236);");
E_D("replace into `phome_enewslog` values('14',0x41646d696e5f4c6f6e67,'2019-03-19 21:03:25',0x3131362e37372e37332e313835,'0','','0',0x3535353132);");
E_D("replace into `phome_enewslog` values('15',0x61646d696e,'2019-03-19 21:03:28',0x3131362e37372e37332e313835,'1','','0',0x3535353137);");
E_D("replace into `phome_enewslog` values('16',0x61646d696e,'2019-03-20 08:18:45',0x3131392e3132322e38392e3534,'1','','0',0x3135303233);");
E_D("replace into `phome_enewslog` values('17',0x61646d696e,'2019-03-20 12:27:53',0x3131362e372e39392e3630,'1','','0',0x3139333634);");
E_D("replace into `phome_enewslog` values('18',0x61646d696e,'2019-03-20 18:23:34',0x3131392e3132322e38392e3534,'1','','0',0x3133333732);");
E_D("replace into `phome_enewslog` values('19',0x61646d696e,'2019-03-20 19:29:12',0x3131362e37372e37332e313835,'1','','0',0x3630363133);");
E_D("replace into `phome_enewslog` values('20',0x61646d696e,'2019-03-21 08:45:07',0x3131392e3132322e38382e323033,'1','','0',0x3131393833);");
E_D("replace into `phome_enewslog` values('21',0x61646d696e,'2019-03-21 12:50:40',0x3131362e372e39382e313132,'1','','0',0x3336363330);");
E_D("replace into `phome_enewslog` values('22',0x61646d696e,'2019-03-21 14:27:10',0x3131392e3132322e38382e313633,'1','','0',0x3432303033);");
E_D("replace into `phome_enewslog` values('23',0x61646d696e,'2019-03-21 19:30:32',0x3131362e37372e37332e313834,'1','','0',0x3530373431);");
E_D("replace into `phome_enewslog` values('24',0x61646d696e,'2019-03-21 22:35:21',0x3131362e37372e37332e313834,'1','','0',0x3535323733);");
E_D("replace into `phome_enewslog` values('25',0x61646d696e,'2019-03-22 08:09:44',0x3131392e3132322e38392e323136,'1','','0',0x34373638);");
E_D("replace into `phome_enewslog` values('26',0x61646d696e,'2019-03-22 12:53:36',0x3131392e3132322e38392e323136,'1','','0',0x34333330);");
E_D("replace into `phome_enewslog` values('27',0x61646d696e,'2019-03-22 14:15:07',0x3131392e3132322e39312e313037,'1','','0',0x3530383332);");
E_D("replace into `phome_enewslog` values('28',0x61646d696e,'2019-03-22 21:07:32',0x3131362e37372e37332e313836,'1','','0',0x3530303236);");
E_D("replace into `phome_enewslog` values('29',0x61646d696e,'2019-03-23 15:53:45',0x3131362e37372e37332e313836,'1','','0',0x3531383731);");
E_D("replace into `phome_enewslog` values('30',0x61646d696e,'2019-06-07 11:37:58',0x3131362e37372e37352e323530,'1','','0',0x3539363436);");
E_D("replace into `phome_enewslog` values('31',0x61646d696e,'2019-06-08 14:07:59',0x3131362e37372e37352e323530,'1','','0',0x3535323337);");
E_D("replace into `phome_enewslog` values('32',0x61646d696e32,'2019-06-08 15:55:38',0x3131362e37372e37352e323530,'1','','0',0x3537363137);");
E_D("replace into `phome_enewslog` values('33',0x61646d696e,'2019-06-09 02:50:53',0x3131362e37372e37352e323530,'1','','0',0x3534343536);");
E_D("replace into `phome_enewslog` values('34',0x41646d696e5f4c6f6e67,'2019-06-09 02:51:06',0x3131362e37372e37352e323530,'0','','0',0x3534343636);");
E_D("replace into `phome_enewslog` values('35',0x61646d696e,'2019-06-09 02:51:12',0x3131362e37372e37352e323530,'1','','0',0x3534343732);");
E_D("replace into `phome_enewslog` values('36',0x41646d696e5f4c6f6e67,'2019-06-09 02:52:15',0x3131362e37372e37352e323530,'0','','0',0x3534353837);");
E_D("replace into `phome_enewslog` values('37',0x61646d696e,'2019-06-09 02:52:22',0x3131362e37372e37352e323530,'1','','0',0x3534353933);");
E_D("replace into `phome_enewslog` values('38',0x61646d696e,'2019-06-09 02:52:55',0x3131362e37372e37352e323530,'1','','0',0x3534363330);");
E_D("replace into `phome_enewslog` values('39',0x61646d696e,'2019-06-09 11:27:35',0x3131362e37372e37352e323530,'1','','0',0x3530343036);");
E_D("replace into `phome_enewslog` values('40',0x61646d696e,'2019-06-09 13:15:05',0x3131362e37372e37352e323530,'1','','0',0x3539313034);");
E_D("replace into `phome_enewslog` values('41',0x61646d696e,'2019-12-13 00:04:56',0x3138332e3233362e37382e3539,'0','','0',0x3633343832);");
E_D("replace into `phome_enewslog` values('42',0x61646d696e,'2019-12-13 00:05:01',0x3138332e3233362e37382e3539,'1','','0',0x3633343838);");
E_D("replace into `phome_enewslog` values('43',0x61646d696e,'2019-12-13 09:20:07',0x3131392e3132322e38392e313638,'1','','0',0x3532333333);");
E_D("replace into `phome_enewslog` values('44',0x61646d696e,'2019-12-14 08:18:38',0x3131392e3132322e38382e313137,'1','','0',0x3431333731);");
E_D("replace into `phome_enewslog` values('45',0x61646d696e,'2019-12-18 14:01:58',0x3131392e3132322e38382e313735,'1','','0',0x3131343931);");
E_D("replace into `phome_enewslog` values('46',0x61646d696e,'2019-12-18 21:14:21',0x3138332e3233362e37382e3435,'1','','0',0x3538353530);");
E_D("replace into `phome_enewslog` values('47',0x61646d696e,'2019-12-19 15:35:43',0x3131392e3132322e38382e323435,'1','','0',0x3330333636);");
E_D("replace into `phome_enewslog` values('48',0x61646d696e,'2019-12-25 21:00:27',0x3138332e3233362e37382e3335,'1','','0',0x3630383533);");
E_D("replace into `phome_enewslog` values('49',0x61646d696e,'2019-12-26 08:42:57',0x3131392e3132322e39312e323531,'1','','0',0x3334393031);");
E_D("replace into `phome_enewslog` values('50',0x61646d696e,'2019-12-27 20:31:47',0x3138332e3233362e37382e3436,'1','','0',0x3538373131);");
E_D("replace into `phome_enewslog` values('51',0x61646d696e,'2019-12-28 15:12:55',0x3138332e3233362e37382e3436,'1','','0',0x3535353937);");
E_D("replace into `phome_enewslog` values('52',0x61646d696e,'2019-12-28 17:56:23',0x3138332e3233362e37382e3436,'1','','0',0x3630303837);");
E_D("replace into `phome_enewslog` values('53',0x61646d696e,'2019-12-29 15:48:33',0x3138332e3233362e37382e3436,'1','','0',0x3535373136);");
E_D("replace into `phome_enewslog` values('54',0x61646d696e,'2019-12-29 15:48:35',0x3138332e3233362e37382e3436,'1','','0',0x3535373234);");
E_D("replace into `phome_enewslog` values('55',0x61646d696e,'2019-12-29 23:55:07',0x3138332e3233362e37382e3436,'1','','0',0x3634373137);");
E_D("replace into `phome_enewslog` values('56',0x61646d696e,'2019-12-30 08:20:01',0x3131392e3132322e38382e3730,'1','','0',0x3539343631);");
E_D("replace into `phome_enewslog` values('57',0x61646d696e,'2019-12-31 14:29:23',0x3131392e3132322e39312e3530,'1','','0',0x3433323637);");
E_D("replace into `phome_enewslog` values('58',0x61646d696e,'2019-12-31 17:46:51',0x3131392e3132322e39312e3530,'1','','0',0x3435323033);");
E_D("replace into `phome_enewslog` values('59',0x61646d696e,'2020-01-11 20:21:14',0x3138332e3233362e37382e3631,'1','','0',0x3533323231);");
E_D("replace into `phome_enewslog` values('60',0x61646d696e,'2020-01-12 09:29:39',0x3138332e3233362e37382e3631,'1','','0',0x3535383138);");

@include("../../inc/footer.php");
?>
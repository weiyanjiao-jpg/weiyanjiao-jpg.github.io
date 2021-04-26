<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstagsdata`;");
E_C("CREATE TABLE `phome_enewstagsdata` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagid` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`),
  KEY `tagid` (`tagid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=158 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstagsdata` values('1','1','1','1','1548396282','1');");
E_D("replace into `phome_enewstagsdata` values('2','2','1','2','1548396392','1');");
E_D("replace into `phome_enewstagsdata` values('3','3','1','2','1548396392','1');");
E_D("replace into `phome_enewstagsdata` values('4','3','1','3','1548396498','1');");
E_D("replace into `phome_enewstagsdata` values('5','3','1','4','1548396545','1');");
E_D("replace into `phome_enewstagsdata` values('6','3','1','5','1548396683','1');");
E_D("replace into `phome_enewstagsdata` values('7','4','1','6','1548396716','1');");
E_D("replace into `phome_enewstagsdata` values('8','3','1','6','1548396716','1');");
E_D("replace into `phome_enewstagsdata` values('9','5','1','7','1548396776','1');");
E_D("replace into `phome_enewstagsdata` values('10','6','1','7','1548396776','1');");
E_D("replace into `phome_enewstagsdata` values('11','3','1','7','1548396776','1');");
E_D("replace into `phome_enewstagsdata` values('12','3','1','8','1548396824','1');");
E_D("replace into `phome_enewstagsdata` values('13','3','1','9','1548396984','1');");
E_D("replace into `phome_enewstagsdata` values('14','7','1','11','1548397277','1');");
E_D("replace into `phome_enewstagsdata` values('15','3','1','11','1548397277','1');");
E_D("replace into `phome_enewstagsdata` values('16','3','1','12','1548397344','1');");
E_D("replace into `phome_enewstagsdata` values('17','8','1','13','1548397397','1');");
E_D("replace into `phome_enewstagsdata` values('18','3','1','13','1548397397','1');");
E_D("replace into `phome_enewstagsdata` values('19','8','1','14','1548397397','1');");
E_D("replace into `phome_enewstagsdata` values('20','3','1','14','1548397397','1');");
E_D("replace into `phome_enewstagsdata` values('21','3','2','15','1548397560','1');");
E_D("replace into `phome_enewstagsdata` values('22','9','2','15','1548397560','1');");
E_D("replace into `phome_enewstagsdata` values('23','10','2','16','1548397609','1');");
E_D("replace into `phome_enewstagsdata` values('24','3','2','16','1548397609','1');");
E_D("replace into `phome_enewstagsdata` values('25','3','2','17','1548397651','1');");
E_D("replace into `phome_enewstagsdata` values('26','3','2','18','1548397732','1');");
E_D("replace into `phome_enewstagsdata` values('27','11','2','19','1548397762','1');");
E_D("replace into `phome_enewstagsdata` values('28','3','2','19','1548397762','1');");
E_D("replace into `phome_enewstagsdata` values('29','3','2','20','1548397807','1');");
E_D("replace into `phome_enewstagsdata` values('30','12','2','21','1548397844','1');");
E_D("replace into `phome_enewstagsdata` values('31','3','2','21','1548397844','1');");
E_D("replace into `phome_enewstagsdata` values('32','13','2','22','1548397876','1');");
E_D("replace into `phome_enewstagsdata` values('33','3','2','22','1548397876','1');");
E_D("replace into `phome_enewstagsdata` values('34','14','2','23','1548397944','1');");
E_D("replace into `phome_enewstagsdata` values('35','3','2','23','1548397944','1');");
E_D("replace into `phome_enewstagsdata` values('36','15','2','24','1548397981','1');");
E_D("replace into `phome_enewstagsdata` values('37','3','2','25','1548398025','1');");
E_D("replace into `phome_enewstagsdata` values('38','16','2','26','1548398061','1');");
E_D("replace into `phome_enewstagsdata` values('39','3','2','26','1548398061','1');");
E_D("replace into `phome_enewstagsdata` values('40','17','3','27','1548398341','1');");
E_D("replace into `phome_enewstagsdata` values('41','3','3','27','1548398341','1');");
E_D("replace into `phome_enewstagsdata` values('42','18','3','28','1548398380','1');");
E_D("replace into `phome_enewstagsdata` values('43','3','3','28','1548398380','1');");
E_D("replace into `phome_enewstagsdata` values('44','19','3','29','1548398423','1');");
E_D("replace into `phome_enewstagsdata` values('45','20','3','29','1548398423','1');");
E_D("replace into `phome_enewstagsdata` values('46','3','3','29','1548398423','1');");
E_D("replace into `phome_enewstagsdata` values('47','21','3','30','1548398523','1');");
E_D("replace into `phome_enewstagsdata` values('48','3','3','30','1548398523','1');");
E_D("replace into `phome_enewstagsdata` values('49','22','3','31','1548398556','1');");
E_D("replace into `phome_enewstagsdata` values('50','23','3','31','1548398556','1');");
E_D("replace into `phome_enewstagsdata` values('51','24','3','31','1548398556','1');");
E_D("replace into `phome_enewstagsdata` values('52','3','3','31','1548398556','1');");
E_D("replace into `phome_enewstagsdata` values('53','18','3','32','1548398606','1');");
E_D("replace into `phome_enewstagsdata` values('54','3','3','32','1548398606','1');");
E_D("replace into `phome_enewstagsdata` values('55','25','3','33','1548398636','1');");
E_D("replace into `phome_enewstagsdata` values('56','3','3','33','1548398636','1');");
E_D("replace into `phome_enewstagsdata` values('57','26','3','34','1548398672','1');");
E_D("replace into `phome_enewstagsdata` values('58','3','3','34','1548398672','1');");
E_D("replace into `phome_enewstagsdata` values('59','2','3','35','1548398730','1');");
E_D("replace into `phome_enewstagsdata` values('60','3','3','35','1548398730','1');");
E_D("replace into `phome_enewstagsdata` values('61','27','3','36','1548398814','1');");
E_D("replace into `phome_enewstagsdata` values('62','10','3','36','1548398814','1');");
E_D("replace into `phome_enewstagsdata` values('63','28','3','36','1548398814','1');");
E_D("replace into `phome_enewstagsdata` values('64','3','3','36','1548398814','1');");
E_D("replace into `phome_enewstagsdata` values('65','29','3','37','1548398989','1');");
E_D("replace into `phome_enewstagsdata` values('66','3','3','37','1548398989','1');");
E_D("replace into `phome_enewstagsdata` values('67','30','3','38','1548399022','1');");
E_D("replace into `phome_enewstagsdata` values('68','3','3','38','1548399022','1');");
E_D("replace into `phome_enewstagsdata` values('69','31','3','39','1548399115','1');");
E_D("replace into `phome_enewstagsdata` values('70','3','3','39','1548399115','1');");
E_D("replace into `phome_enewstagsdata` values('71','32','3','40','1548399144','1');");
E_D("replace into `phome_enewstagsdata` values('72','3','3','40','1548399144','1');");
E_D("replace into `phome_enewstagsdata` values('73','20','4','41','1548399484','1');");
E_D("replace into `phome_enewstagsdata` values('74','3','4','41','1548399484','1');");
E_D("replace into `phome_enewstagsdata` values('75','3','4','42','1548399517','1');");
E_D("replace into `phome_enewstagsdata` values('76','33','4','43','1548399598','1');");
E_D("replace into `phome_enewstagsdata` values('77','3','4','43','1548399598','1');");
E_D("replace into `phome_enewstagsdata` values('78','8','4','44','1548399690','1');");
E_D("replace into `phome_enewstagsdata` values('79','3','4','44','1548399690','1');");
E_D("replace into `phome_enewstagsdata` values('80','3','4','45','1548399712','1');");
E_D("replace into `phome_enewstagsdata` values('81','34','4','46','1548399802','1');");
E_D("replace into `phome_enewstagsdata` values('82','3','4','46','1548399802','1');");
E_D("replace into `phome_enewstagsdata` values('83','17','4','47','1548399835','1');");
E_D("replace into `phome_enewstagsdata` values('84','3','4','47','1548399835','1');");
E_D("replace into `phome_enewstagsdata` values('85','35','4','48','1548399879','1');");
E_D("replace into `phome_enewstagsdata` values('86','3','4','48','1548399879','1');");
E_D("replace into `phome_enewstagsdata` values('87','36','4','49','1548399968','1');");
E_D("replace into `phome_enewstagsdata` values('88','3','4','49','1548399968','1');");
E_D("replace into `phome_enewstagsdata` values('89','37','4','50','1548400005','1');");
E_D("replace into `phome_enewstagsdata` values('90','3','4','50','1548400005','1');");
E_D("replace into `phome_enewstagsdata` values('91','8','4','51','1548400032','1');");
E_D("replace into `phome_enewstagsdata` values('92','38','4','51','1548400032','1');");
E_D("replace into `phome_enewstagsdata` values('93','39','4','51','1548400032','1');");
E_D("replace into `phome_enewstagsdata` values('94','40','4','51','1548400032','1');");
E_D("replace into `phome_enewstagsdata` values('95','3','4','51','1548400032','1');");
E_D("replace into `phome_enewstagsdata` values('96','41','4','52','1548400093','1');");
E_D("replace into `phome_enewstagsdata` values('97','3','4','52','1548400093','1');");
E_D("replace into `phome_enewstagsdata` values('98','42','11','53','1553000858','1');");
E_D("replace into `phome_enewstagsdata` values('99','43','11','54','1553000928','1');");
E_D("replace into `phome_enewstagsdata` values('100','44','11','55','1553000968','1');");
E_D("replace into `phome_enewstagsdata` values('101','45','11','55','1553000968','1');");
E_D("replace into `phome_enewstagsdata` values('102','2','11','56','1553001006','1');");
E_D("replace into `phome_enewstagsdata` values('103','46','11','56','1553001006','1');");
E_D("replace into `phome_enewstagsdata` values('104','47','11','57','1553001049','1');");
E_D("replace into `phome_enewstagsdata` values('105','48','11','57','1553001049','1');");
E_D("replace into `phome_enewstagsdata` values('106','49','11','57','1553001049','1');");
E_D("replace into `phome_enewstagsdata` values('107','50','11','58','1553001116','1');");
E_D("replace into `phome_enewstagsdata` values('108','2','11','58','1553001116','1');");
E_D("replace into `phome_enewstagsdata` values('109','51','11','59','1553001144','1');");
E_D("replace into `phome_enewstagsdata` values('110','18','11','59','1553001144','1');");
E_D("replace into `phome_enewstagsdata` values('111','52','11','60','1553001181','1');");
E_D("replace into `phome_enewstagsdata` values('112','53','11','60','1553001181','1');");
E_D("replace into `phome_enewstagsdata` values('113','54','11','61','1553001248','1');");
E_D("replace into `phome_enewstagsdata` values('114','55','11','61','1553001248','1');");
E_D("replace into `phome_enewstagsdata` values('115','56','11','61','1553001248','1');");
E_D("replace into `phome_enewstagsdata` values('116','31','11','62','1553001289','1');");
E_D("replace into `phome_enewstagsdata` values('117','57','11','62','1553001289','1');");
E_D("replace into `phome_enewstagsdata` values('118','58','11','62','1553001289','1');");
E_D("replace into `phome_enewstagsdata` values('119','59','11','63','1553001329','1');");
E_D("replace into `phome_enewstagsdata` values('120','52','11','64','1553001357','1');");
E_D("replace into `phome_enewstagsdata` values('121','60','11','64','1553001357','1');");
E_D("replace into `phome_enewstagsdata` values('122','61','11','64','1553001357','1');");
E_D("replace into `phome_enewstagsdata` values('123','62','11','65','1553001392','1');");
E_D("replace into `phome_enewstagsdata` values('124','63','11','65','1553001392','1');");
E_D("replace into `phome_enewstagsdata` values('125','64','12','66','1549027489','1');");
E_D("replace into `phome_enewstagsdata` values('126','65','12','67','1549027541','1');");
E_D("replace into `phome_enewstagsdata` values('127','24','12','68','1549027576','1');");
E_D("replace into `phome_enewstagsdata` values('128','66','12','68','1549027576','1');");
E_D("replace into `phome_enewstagsdata` values('129','67','12','69','1549027626','1');");
E_D("replace into `phome_enewstagsdata` values('130','68','12','70','1549027656','1');");
E_D("replace into `phome_enewstagsdata` values('131','69','12','71','1549027690','1');");
E_D("replace into `phome_enewstagsdata` values('132','70','12','71','1549027690','1');");
E_D("replace into `phome_enewstagsdata` values('133','71','12','71','1549027690','1');");
E_D("replace into `phome_enewstagsdata` values('134','69','12','72','1549027733','1');");
E_D("replace into `phome_enewstagsdata` values('135','72','12','72','1549027733','1');");
E_D("replace into `phome_enewstagsdata` values('136','73','12','73','1549027771','1');");
E_D("replace into `phome_enewstagsdata` values('137','74','12','74','1549027809','1');");
E_D("replace into `phome_enewstagsdata` values('138','75','12','75','1549027849','1');");
E_D("replace into `phome_enewstagsdata` values('139','76','12','75','1549027849','1');");
E_D("replace into `phome_enewstagsdata` values('140','77','12','76','1553002301','1');");
E_D("replace into `phome_enewstagsdata` values('141','78','12','77','1549027994','1');");
E_D("replace into `phome_enewstagsdata` values('142','79','12','78','1549028061','1');");
E_D("replace into `phome_enewstagsdata` values('143','80','12','79','1549028092','1');");
E_D("replace into `phome_enewstagsdata` values('144','69','12','80','1560014033','1');");
E_D("replace into `phome_enewstagsdata` values('145','81','12','80','1560014033','1');");
E_D("replace into `phome_enewstagsdata` values('146','82','12','80','1560014033','1');");
E_D("replace into `phome_enewstagsdata` values('147','69','12','81','1560014084','1');");
E_D("replace into `phome_enewstagsdata` values('148','83','12','81','1560014084','1');");
E_D("replace into `phome_enewstagsdata` values('149','84','12','81','1560014084','1');");
E_D("replace into `phome_enewstagsdata` values('150','85','12','82','1560014140','1');");
E_D("replace into `phome_enewstagsdata` values('151','86','12','82','1560014140','1');");
E_D("replace into `phome_enewstagsdata` values('152','87','12','82','1560014140','1');");
E_D("replace into `phome_enewstagsdata` values('153','88','1','84','1548398418','1');");
E_D("replace into `phome_enewstagsdata` values('154','89','1','85','1576651284','1');");
E_D("replace into `phome_enewstagsdata` values('155','90','2','86','1577450414','1');");
E_D("replace into `phome_enewstagsdata` values('156','91','2','87','1548397665','1');");
E_D("replace into `phome_enewstagsdata` values('157','92','2','88','1577450730','1');");

@include("../../inc/footer.php");
?>
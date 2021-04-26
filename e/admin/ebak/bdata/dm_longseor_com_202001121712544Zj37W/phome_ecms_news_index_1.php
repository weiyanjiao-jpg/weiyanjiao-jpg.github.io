<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('1','1','1','1548396282','1548396379','1576201078','1');");
E_D("replace into `phome_ecms_news_index` values('2','1','1','1548396392','1548396494','1576201069','1');");
E_D("replace into `phome_ecms_news_index` values('3','1','1','1548396498','1548396542','1552918573','1');");
E_D("replace into `phome_ecms_news_index` values('4','1','1','1548396545','1548396622','1552918559','1');");
E_D("replace into `phome_ecms_news_index` values('5','1','1','1548396683','1548396705','1553006776','1');");
E_D("replace into `phome_ecms_news_index` values('6','1','1','1548396716','1548396773','1553006765','1');");
E_D("replace into `phome_ecms_news_index` values('7','1','1','1548396776','1548396821','1553006758','1');");
E_D("replace into `phome_ecms_news_index` values('8','1','1','1548396824','1548396861','1553006750','1');");
E_D("replace into `phome_ecms_news_index` values('9','1','1','1548396984','1548397060','1548402832','1');");
E_D("replace into `phome_ecms_news_index` values('11','1','1','1548397277','1548397331','1576201129','1');");
E_D("replace into `phome_ecms_news_index` values('12','1','1','1548397344','1548397396','1560002299','1');");
E_D("replace into `phome_ecms_news_index` values('13','1','1','1548397397','1548397500','1559986542','1');");
E_D("replace into `phome_ecms_news_index` values('15','2','1','1548397560','1548397605','1548398207','1');");
E_D("replace into `phome_ecms_news_index` values('16','2','1','1548397609','1548397648','1548398221','1');");
E_D("replace into `phome_ecms_news_index` values('17','2','1','1548397651','1548397729','1548398237','1');");
E_D("replace into `phome_ecms_news_index` values('18','2','1','1548397732','1548397759','1559988306','1');");
E_D("replace into `phome_ecms_news_index` values('19','2','1','1548397762','1548397794','1552957622','1');");
E_D("replace into `phome_ecms_news_index` values('20','2','1','1548397807','1548397836','1552957613','1');");
E_D("replace into `phome_ecms_news_index` values('21','2','1','1548397844','1548397873','1552957604','1');");
E_D("replace into `phome_ecms_news_index` values('22','2','1','1548397876','1548397942','1552957597','1');");
E_D("replace into `phome_ecms_news_index` values('23','2','1','1548397944','1548397978','1552957591','1');");
E_D("replace into `phome_ecms_news_index` values('24','2','1','1548397981','1548398022','1552957584','1');");
E_D("replace into `phome_ecms_news_index` values('25','2','1','1548398025','1548398058','1552957578','1');");
E_D("replace into `phome_ecms_news_index` values('26','2','1','1548398061','1548398148','1552957571','1');");
E_D("replace into `phome_ecms_news_index` values('27','3','1','1548398341','1548398377','1548399230','1');");
E_D("replace into `phome_ecms_news_index` values('28','3','1','1548398380','1548398420','1548399238','1');");
E_D("replace into `phome_ecms_news_index` values('29','3','1','1548398423','1548398521','1548399383','1');");
E_D("replace into `phome_ecms_news_index` values('30','3','1','1548398523','1548398553','1548399347','1');");
E_D("replace into `phome_ecms_news_index` values('31','3','1','1548398556','1548398604','1548399354','1');");
E_D("replace into `phome_ecms_news_index` values('32','3','1','1548398606','1548398633','1548399365','1');");
E_D("replace into `phome_ecms_news_index` values('33','3','1','1548398636','1548398669','1553009682','1');");
E_D("replace into `phome_ecms_news_index` values('34','3','1','1548398672','1548398711','1553009671','1');");
E_D("replace into `phome_ecms_news_index` values('35','3','1','1548398730','1548398811','1553009665','1');");
E_D("replace into `phome_ecms_news_index` values('36','3','1','1548398814','1548398986','1553009656','1');");
E_D("replace into `phome_ecms_news_index` values('37','3','1','1548398989','1548399018','1553009649','1');");
E_D("replace into `phome_ecms_news_index` values('38','3','1','1548399022','1548399114','1553009643','1');");
E_D("replace into `phome_ecms_news_index` values('39','3','1','1548399115','1548399141','1553009636','1');");
E_D("replace into `phome_ecms_news_index` values('40','3','1','1548399144','1548399228','1553009629','1');");
E_D("replace into `phome_ecms_news_index` values('41','4','1','1548399484','1548399514','1548400198','1');");
E_D("replace into `phome_ecms_news_index` values('42','4','1','1548399517','1548399595','1548400207','1');");
E_D("replace into `phome_ecms_news_index` values('43','4','1','1548399598','1548399687','1548400313','1');");
E_D("replace into `phome_ecms_news_index` values('44','4','1','1548399690','1548399709','1548400320','1');");
E_D("replace into `phome_ecms_news_index` values('45','4','1','1548399712','1548399799','1548400348','1');");
E_D("replace into `phome_ecms_news_index` values('46','4','1','1548399802','1548399833','1548400358','1');");
E_D("replace into `phome_ecms_news_index` values('47','4','1','1548399835','1548399876','1548400366','1');");
E_D("replace into `phome_ecms_news_index` values('48','4','1','1548399879','1548399959','1548400375','1');");
E_D("replace into `phome_ecms_news_index` values('49','4','1','1548399968','1548400002','1553332538','1');");
E_D("replace into `phome_ecms_news_index` values('50','4','1','1548400005','1548400029','1553332529','1');");
E_D("replace into `phome_ecms_news_index` values('51','4','1','1548400032','1548400090','1559880107','1');");
E_D("replace into `phome_ecms_news_index` values('52','4','1','1548400093','1548400146','1578806977','1');");
E_D("replace into `phome_ecms_news_index` values('53','11','1','1553000858','1553000925','1553001596','1');");
E_D("replace into `phome_ecms_news_index` values('54','11','1','1553000928','1553000966','1553001588','1');");
E_D("replace into `phome_ecms_news_index` values('55','11','1','1553000968','1553001004','1553001578','1');");
E_D("replace into `phome_ecms_news_index` values('56','11','1','1553001006','1553001045','1553001570','1');");
E_D("replace into `phome_ecms_news_index` values('57','11','1','1553001049','1553001114','1553001557','1');");
E_D("replace into `phome_ecms_news_index` values('58','11','1','1553001116','1553001142','1553001550','1');");
E_D("replace into `phome_ecms_news_index` values('59','11','1','1553001144','1553001179','1553001541','1');");
E_D("replace into `phome_ecms_news_index` values('60','11','1','1553001181','1553001246','1553001523','1');");
E_D("replace into `phome_ecms_news_index` values('61','11','1','1553001248','1553001287','1553001533','1');");
E_D("replace into `phome_ecms_news_index` values('62','11','1','1553001289','1553001326','1553001512','1');");
E_D("replace into `phome_ecms_news_index` values('63','11','1','1553001329','1553001354','1553001503','1');");
E_D("replace into `phome_ecms_news_index` values('64','11','1','1553001357','1553001388','1553001490','1');");
E_D("replace into `phome_ecms_news_index` values('65','11','1','1553001392','1553001444','1553001480','1');");
E_D("replace into `phome_ecms_news_index` values('66','12','1','1549027489','1553001938','1553002657','1');");
E_D("replace into `phome_ecms_news_index` values('67','12','1','1549027541','1553001974','1553002648','1');");
E_D("replace into `phome_ecms_news_index` values('68','12','1','1549027576','1553002024','1553002640','1');");
E_D("replace into `phome_ecms_news_index` values('69','12','1','1549027626','1553002053','1553002632','1');");
E_D("replace into `phome_ecms_news_index` values('70','12','1','1549027656','1553002088','1553002623','1');");
E_D("replace into `phome_ecms_news_index` values('71','12','1','1549027690','1553002131','1553002614','1');");
E_D("replace into `phome_ecms_news_index` values('72','12','1','1549027733','1553002169','1553002605','1');");
E_D("replace into `phome_ecms_news_index` values('73','12','1','1549027771','1553002207','1553002598','1');");
E_D("replace into `phome_ecms_news_index` values('74','12','1','1549027809','1553002246','1553002589','1');");
E_D("replace into `phome_ecms_news_index` values('75','12','1','1549027849','1553002299','1553002578','1');");
E_D("replace into `phome_ecms_news_index` values('76','12','1','1549027901','1553002390','1553002570','1');");
E_D("replace into `phome_ecms_news_index` values('77','12','1','1549027994','1553002418','1553002562','1');");
E_D("replace into `phome_ecms_news_index` values('78','12','1','1549028061','1553002489','1553002552','1');");
E_D("replace into `phome_ecms_news_index` values('79','12','1','1549028092','1553002520','1553002543','1');");
E_D("replace into `phome_ecms_news_index` values('80','12','1','1548954833','1560014081','1560014355','1');");
E_D("replace into `phome_ecms_news_index` values('81','12','1','1548954884','1560014137','1560014345','1');");
E_D("replace into `phome_ecms_news_index` values('82','12','1','1548954940','1560014198','1560014333','1');");
E_D("replace into `phome_ecms_news_index` values('83','1','1','1576286761','1576286830','1577635099','1');");
E_D("replace into `phome_ecms_news_index` values('84','1','1','1548398418','1576651282','1577449974','1');");
E_D("replace into `phome_ecms_news_index` values('85','1','1','1548398484','1576651363','1577449966','1');");
E_D("replace into `phome_ecms_news_index` values('86','2','1','1548397652','1577450475','1577450548','1');");
E_D("replace into `phome_ecms_news_index` values('87','2','1','1548397665','1577450720','1577450720','1');");
E_D("replace into `phome_ecms_news_index` values('88','2','1','1548397725','1577450785','1577450805','1');");

@include("../../inc/footer.php");
?>
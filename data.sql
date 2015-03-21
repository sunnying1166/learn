/*
MySQL Backup
Source Server Version: 5.6.14
Source Database: learnchinese
Date: 2015/3/20 21:46:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `abbsent`
-- ----------------------------
DROP TABLE IF EXISTS `abbsent`;
CREATE TABLE `abbsent` (
  `abbsentid` int(11) NOT NULL AUTO_INCREMENT,
  `abbsentsd` varchar(10) NOT NULL,
  `abbsentque` text NOT NULL,
  `abbsentans` text NOT NULL,
  PRIMARY KEY (`abbsentid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `addpun`
-- ----------------------------
DROP TABLE IF EXISTS `addpun`;
CREATE TABLE `addpun` (
  `addpunid` int(11) NOT NULL AUTO_INCREMENT,
  `addpunsd` varchar(10) NOT NULL,
  `addpunques` text NOT NULL,
  `addpunans` text NOT NULL,
  PRIMARY KEY (`addpunid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `examplesent`
-- ----------------------------
DROP TABLE IF EXISTS `examplesent`;
CREATE TABLE `examplesent` (
  `examsentid` int(11) NOT NULL AUTO_INCREMENT,
  `phrid` int(11) DEFAULT NULL,
  `examsentsd` varchar(10) DEFAULT NULL,
  `examsent1` varchar(150) NOT NULL,
  `examsent2` varchar(150) DEFAULT NULL,
  `examsent3` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`examsentid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `fillpara`
-- ----------------------------
DROP TABLE IF EXISTS `fillpara`;
CREATE TABLE `fillpara` (
  `fillparaid` int(11) NOT NULL AUTO_INCREMENT,
  `fillparasd` varchar(10) NOT NULL,
  `paracont` text NOT NULL,
  `fillsent1` text NOT NULL,
  `fillsent2` text,
  `fillsent3` text,
  `fillsent4` text,
  PRIMARY KEY (`fillparaid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `fillphrase`
-- ----------------------------
DROP TABLE IF EXISTS `fillphrase`;
CREATE TABLE `fillphrase` (
  `fillphrid` int(11) NOT NULL AUTO_INCREMENT,
  `fillphrsd` varchar(10) NOT NULL,
  `fillphrtitle` varchar(16) NOT NULL,
  `fillphrans` varchar(4) NOT NULL,
  `fpwrongans1` varchar(4) DEFAULT NULL,
  `fpwrongans2` varchar(4) DEFAULT NULL,
  `fpwrongans3` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`fillphrid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `fillsentence`
-- ----------------------------
DROP TABLE IF EXISTS `fillsentence`;
CREATE TABLE `fillsentence` (
  `fillsenid` int(11) NOT NULL AUTO_INCREMENT,
  `fillsensd` varchar(10) NOT NULL,
  `fillsentitle` varchar(60) NOT NULL,
  `fillsenans` varchar(30) NOT NULL,
  `fillsenmark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fillsenid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `illsentence`
-- ----------------------------
DROP TABLE IF EXISTS `illsentence`;
CREATE TABLE `illsentence` (
  `illsentid` int(11) NOT NULL AUTO_INCREMENT,
  `illsentsd` varchar(10) NOT NULL,
  `illsentques` text NOT NULL,
  `illsentans` text NOT NULL,
  PRIMARY KEY (`illsentid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `knowledge`
-- ----------------------------
DROP TABLE IF EXISTS `knowledge`;
CREATE TABLE `knowledge` (
  `knldid` int(11) NOT NULL AUTO_INCREMENT,
  `knldcont` text NOT NULL,
  `knldlevel` int(11) DEFAULT NULL,
  `knldremark` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`knldid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `ordersent`
-- ----------------------------
DROP TABLE IF EXISTS `ordersent`;
CREATE TABLE `ordersent` (
  `ordersentid` int(11) NOT NULL AUTO_INCREMENT,
  `ordersentsd` varchar(10) NOT NULL,
  `ordersent1` text NOT NULL,
  `ordersent2` text NOT NULL,
  `ordersent3` text,
  `ordersent4` text,
  `ordersent5` text,
  `ordersent6` text,
  `ordersentans` varchar(10) NOT NULL,
  PRIMARY KEY (`ordersentid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `phrase`
-- ----------------------------
DROP TABLE IF EXISTS `phrase`;
CREATE TABLE `phrase` (
  `phrid` int(11) NOT NULL AUTO_INCREMENT,
  `phrsd` varchar(10) NOT NULL,
  `phrcont` varchar(16) NOT NULL,
  `phrpinyin` varchar(27) NOT NULL,
  `phrwordnum` int(11) NOT NULL,
  `phrclass` varchar(40) DEFAULT NULL,
  `phrmean` varchar(300) DEFAULT NULL,
  `phrnsyn` varchar(50) DEFAULT NULL,
  `phrautonym` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`phrid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `poem`
-- ----------------------------
DROP TABLE IF EXISTS `poem`;
CREATE TABLE `poem` (
  `poemid` int(11) NOT NULL AUTO_INCREMENT,
  `poetid` int(11) DEFAULT NULL,
  `poemsd` varchar(10) NOT NULL,
  `poemsentnum` int(11) NOT NULL,
  `poemcont` varchar(10) NOT NULL,
  `poemexplain` varchar(100) NOT NULL,
  `poemskill` text NOT NULL,
  `famouslabel` int(11) NOT NULL,
  `endlabel` int(11) NOT NULL,
  `writelabel` int(11) NOT NULL,
  PRIMARY KEY (`poemid`),
  KEY `poetid` (`poetid`),
  CONSTRAINT `poetid` FOREIGN KEY (`poetid`) REFERENCES `poetry` (`poetid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `poetry`
-- ----------------------------
DROP TABLE IF EXISTS `poetry`;
CREATE TABLE `poetry` (
  `poetid` int(11) NOT NULL AUTO_INCREMENT,
  `poetsd` varchar(10) NOT NULL,
  `poettitle` varchar(60) NOT NULL,
  `poetauthor` varchar(10) NOT NULL,
  `poetaudesc` text,
  `poettheme` varchar(300) DEFAULT NULL,
  `poetcont` varchar(200) NOT NULL,
  `poetmark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`poetid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `reading`
-- ----------------------------
DROP TABLE IF EXISTS `reading`;
CREATE TABLE `reading` (
  `readingid` int(11) NOT NULL AUTO_INCREMENT,
  `readingsd` varchar(10) NOT NULL,
  `readingtitle` varchar(20) DEFAULT NULL,
  `readingcont` text,
  `readingque1` int(11) NOT NULL,
  `readingque2` int(11) NOT NULL,
  `readingque3` int(11) NOT NULL,
  `readingque4` int(11) DEFAULT NULL,
  `readingremark` text,
  PRIMARY KEY (`readingid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `readingques`
-- ----------------------------
DROP TABLE IF EXISTS `readingques`;
CREATE TABLE `readingques` (
  `readingquesid` int(11) NOT NULL AUTO_INCREMENT,
  `readingquestitle` text NOT NULL,
  `readingquesans` varchar(100) NOT NULL,
  PRIMARY KEY (`readingquesid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `sentence`
-- ----------------------------
DROP TABLE IF EXISTS `sentence`;
CREATE TABLE `sentence` (
  `sentid` int(11) NOT NULL AUTO_INCREMENT,
  `sentsd` varchar(10) NOT NULL,
  `sentcont` varchar(50) NOT NULL,
  `sentexplain` text NOT NULL,
  `sentskill` text,
  PRIMARY KEY (`sentid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `stretchsent`
-- ----------------------------
DROP TABLE IF EXISTS `stretchsent`;
CREATE TABLE `stretchsent` (
  `stretsentid` int(11) NOT NULL AUTO_INCREMENT,
  `stretsentsd` varchar(10) NOT NULL,
  `stretsentques` text NOT NULL,
  `stretsentans` text NOT NULL,
  PRIMARY KEY (`stretsentid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `text`
-- ----------------------------
DROP TABLE IF EXISTS `text`;
CREATE TABLE `text` (
  `textid` int(11) NOT NULL AUTO_INCREMENT,
  `textsd` varchar(10) NOT NULL,
  `texttitle` varchar(30) NOT NULL,
  `textauthor` varchar(10) NOT NULL,
  `textautdesc` varchar(300) DEFAULT NULL,
  `textlevel` int(11) NOT NULL,
  `textmark` text,
  `textcont` text NOT NULL,
  `texttheme` text,
  PRIMARY KEY (`textid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `tiezi`
-- ----------------------------
DROP TABLE IF EXISTS `tiezi`;
CREATE TABLE `tiezi` (
  `tzid` bigint(20) NOT NULL AUTO_INCREMENT,
  `tztime` datetime NOT NULL,
  `tzuserid` int(11) NOT NULL,
  `tzcont` text NOT NULL,
  `tzfollowid` int(11) DEFAULT NULL,
  `tzzanum` int(11) DEFAULT '0',
  `tzzanuserid` varchar(255) DEFAULT NULL,
  `tzcollectnum` int(11) DEFAULT '0',
  `tzcollectuserid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tzid`),
  KEY `tzuserid` (`tzuserid`),
  CONSTRAINT `tzuserid` FOREIGN KEY (`tzuserid`) REFERENCES `user` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` int(11) unsigned DEFAULT NULL,
  `regtime` datetime NOT NULL,
  `logtimes` int(11) NOT NULL,
  `phoaddr` varchar(200) DEFAULT NULL,
  `ugrade` int(11) DEFAULT NULL,
  `uterm` int(11) NOT NULL,
  `ulevel` int(11) NOT NULL,
  `umark` bigint(20) NOT NULL,
  `uremark` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `nickname` varchar(50) NOT NULL,
  `textversion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `word`
-- ----------------------------
DROP TABLE IF EXISTS `word`;
CREATE TABLE `word` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `wsd` varchar(10) NOT NULL,
  `zixing` varchar(5) NOT NULL,
  `zipinyin` varchar(20) NOT NULL,
  `zibihua` int(11) NOT NULL,
  `zijieshi` varchar(300) NOT NULL,
  `ziremark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `yicuobihua`
-- ----------------------------
DROP TABLE IF EXISTS `yicuobihua`;
CREATE TABLE `yicuobihua` (
  `ycbhid` int(11) NOT NULL AUTO_INCREMENT,
  `wid` int(11) DEFAULT NULL,
  `ycbhsd` varchar(10) NOT NULL,
  `ycbhzixing` varchar(10) NOT NULL,
  `rightbh` int(11) NOT NULL,
  `wrongbh1` int(11) DEFAULT NULL,
  `wrongbh2` int(11) DEFAULT NULL,
  `wrongbh3` int(11) DEFAULT NULL,
  PRIMARY KEY (`ycbhid`),
  KEY `FK_mistook_bihua` (`wid`),
  CONSTRAINT `FK_mistook_bihua` FOREIGN KEY (`wid`) REFERENCES `word` (`wid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `yicuopinyin`
-- ----------------------------
DROP TABLE IF EXISTS `yicuopinyin`;
CREATE TABLE `yicuopinyin` (
  `yxpyid` int(11) NOT NULL AUTO_INCREMENT,
  `wid` int(11) DEFAULT NULL,
  `yxpysd` varchar(10) NOT NULL,
  `ycpyzixing` varchar(10) NOT NULL,
  `rightpy` varchar(20) NOT NULL,
  `wrongpy1` varchar(20) DEFAULT NULL,
  `wrongpy2` varchar(20) DEFAULT NULL,
  `wrongpy3` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`yxpyid`),
  KEY `FK_mistook_pinyin` (`wid`),
  CONSTRAINT `FK_mistook_pinyin` FOREIGN KEY (`wid`) REFERENCES `word` (`wid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `yicuozixing`
-- ----------------------------
DROP TABLE IF EXISTS `yicuozixing`;
CREATE TABLE `yicuozixing` (
  `yczxid` int(11) NOT NULL AUTO_INCREMENT,
  `wid` int(11) DEFAULT NULL,
  `yczxsd` varchar(10) NOT NULL,
  `rightzx` varchar(5) NOT NULL,
  `wrongzx1` varchar(5) DEFAULT NULL,
  `wrongzx2` varchar(5) DEFAULT NULL,
  `wrongzx3` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`yczxid`),
  KEY `FK_mistook_zixing` (`wid`),
  CONSTRAINT `FK_mistook_zixing` FOREIGN KEY (`wid`) REFERENCES `word` (`wid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `abbsent` VALUES ('1','03031000','爸爸在床上听到窗外一阵阵的欢呼声。','爸爸听到欢呼声。'), ('2','03031000','在草地上，盛开着许多美丽的花儿。','盛开着花儿。'), ('3','03030000','矫健的秃鹰在天空中盘旋。','秃鹰在盘旋。'), ('4','03031000','雷锋是伟大的共产主义战士。','雷锋是战士。'), ('5','03031000','我们在教室里聚精会神地看录像。','我们看录像。'), ('6','03031000','爸爸的书架上放着各种各样的书','书架上放着书。');
INSERT INTO `addpun` VALUES ('1','03031000','毛泽东主席宣布_ _中华人民共和国中央人民政府今天成立了_ _ ','：“  ！” '), ('2','03031000','总攻开始了_军号声_枪声_炮声_喊杀声_立刻混成一片_震动着山谷_','，、、、，，。'), ('3','03031000','我决心做到以下几点_一_每天按时做好作业_二_看一些儿童读物_','：、；、。'), ('4','03031000','我们都是来自五湖四海_为了一个共同的革命目标_走到一起来了_','，，。');
INSERT INTO `examplesent` VALUES ('1','1','03031000','1.精心之作','2.妈妈精心地把房间布置了一番。',NULL), ('2','2','03031000','①他从小就希望做一个医生。','②这个希望不难实现。','③青少年是我们的未来，是我们的希望。'), ('3','3','03031000','①被老师批评了，他依然是我行我素，不思悔改。','②二十年不见了，你依然还是那么的美。',''), ('4','4','03031000','1.海燕在黑色的海面上高傲地飞舞','2.雪片像扯破了的棉絮一样在空中飞舞',NULL), ('5','5','03031000','1.他正佝偻着腰拼命地往上爬，眼看就要爬到山的鞍部。','2.我的千军万马就要去杀敌！就要去拼命！就要去流血！',NULL), ('6','6','03031000','1.一个中卫在侧面奔跑。','2.奔跑前后，要认真做好充分的热身活动和整理活动。',NULL), ('7','7','03031000','1.她在抖动一条毛毯。','2.她的下巴一直抖动。',NULL), ('8','8','03031000','1.人们发现了他的秘密，他不禁大惊失色。','2.他读了信以后，大惊失色。',NULL), ('9','9','03031000','1.正如十年磨一剑，不少历经困苦、千呼万唤始出来的论著，充满着哲理和逻辑之美，却少有人欣赏。','2.● 中国形容美人，说是“千呼万唤始出来，犹把琵琶半遮面。”',NULL), ('10','10','03031000','1.这些已经散尽的时间，我们又要去哪里寻找呢？',NULL,NULL), ('11','11','03031000','1.李德才一口回绝说情的事，运涛垂头丧气走出来',NULL,NULL), ('12','12','03031000','1.我家附近有座磨坊。',NULL,NULL), ('13','13','03031000','1.他不顾炎热继续工作。','2.中国革命是十月革命的继续。','3.法国人的晚宴常常继续到午夜甚至更迟。');
INSERT INTO `fillpara` VALUES ('1','03031000','　　我们去放风筝。一个人用手托着，另一个人牵着线，站在远远的地方，说声“放”，那线一紧一松，风筝就凌空飞起，渐渐高过树梢了。牵线人飞快地跑起来。风筝越飞越高，在空中翩翩飞舞着，我们快活地喊叫着，在田野里拼命地奔跑。村里人看见了，说：“放得这么高！”','另一个人牵着线','风筝就凌空飞起','在田野里拼命地奔跑',NULL), ('2','03031000','　　从早晨玩到下午，我们还是歇不下来，牵着风筝在田野里奔跑。风筝越飞越高，似乎飞到了云彩上。忽然吹来一阵风，线嘣地断了。风筝在空中抖动了一下，便极快地飞走了。我们大惊失色，千呼万唤，那风筝越来越小，倏地便没了踪影。','似乎飞到了云彩上','风筝在空中抖动了一下','我们大惊失色','倏地便没了踪影');
INSERT INTO `fillphrase` VALUES ('1','03031000','（）心','精',NULL,NULL,NULL), ('2','03031000','希（）','望',NULL,NULL,NULL), ('3','03031000','（）然','依',NULL,NULL,NULL), ('4','03031000','飞（）','舞',NULL,NULL,NULL), ('5','03031000','（）命','拼',NULL,NULL,NULL), ('6','03031000','（）跑','奔',NULL,NULL,NULL), ('7','03031000','（）动','抖',NULL,NULL,NULL), ('8','03031000','大（）失色','惊',NULL,NULL,NULL), ('9','03031000','千（）万（）','呼 唤',NULL,NULL,NULL), ('10','03031000','（）找','寻',NULL,NULL,NULL), ('11','03031000','（）头（）气','垂 丧',NULL,NULL,NULL), ('12','03031000','磨（）','坊',NULL,NULL,NULL), ('13','03031000','（）续','继',NULL,NULL,NULL);
INSERT INTO `fillsentence` VALUES ('1','03030901','江上秋风动___','客情',NULL), ('2','03030901','夜深___一灯明','篱落',NULL), ('3','03030902','每逢佳节___','倍思亲',NULL), ('4','03030902','遍插___少一人','茱萸',NULL), ('5','03031000','我们精心做着，心中充满了___。','憧憬和希望',NULL), ('6','03031000','那线一紧一松，风筝就___，渐渐高过树梢了。','凌空飞起',NULL), ('7','03031000','我们大惊失色，千呼万唤，那风筝越来越小，___。','倏地便没了踪影',NULL), ('8','03031000','我们向那房子跑去，___我们的“幸福鸟”……','继续寻找',NULL);
INSERT INTO `illsentence` VALUES ('1','03031000','上课的时候，发言很积极。','上课的时候，同学们发言很积极'), ('2','03031000','解放军叔叔击落了五架敌机和三艘军舰。','解放军叔叔击落了五架敌机。 '), ('3','03031000','骄傲自满是学习上的阻碍。','骄傲自满是学习的阻碍。 '), ('4','03030000','这些是唐朝出土的文物。','这些是唐朝的文物。 '), ('5','03031100','看了这部电视剧，都留下了深刻的印象。','这部电视剧，给我留下了深刻的印象。'), ('6','03031000','多读好书，可以丰富和提高我们的知识。 ','多读好书，可以丰富我们的知识。'), ('7','03031000','我最喜欢读的报纸是《小学生语文学习》和《中国少年报》。','《小学生语文学习》和《中国少年报》是我最喜欢读的报纸。 ');
INSERT INTO `knowledge` VALUES ('1','“四书”指：《大学》、《中庸》、《论语》和《孟子》。','1',NULL), ('2','民间四大传说：牛郎织女、孟姜女哭长城、梁山伯与祝英台、白蛇传。','1',NULL), ('3','民间四大传说：牛郎织女、孟姜女哭长城、梁山伯与祝英台、白蛇传。','1',NULL), ('4','春秋战国时期，文化\"百家争鸣\"。代表人物有：儒家的孔子和孟子，道家的老子和庄子，法家的韩非子。','2',NULL), ('5','三国时期“三曹”指曹操、曹丕和曹植三父子。集中体现“建安风骨”特点的代表作家。北宋时期“三苏”指苏洵、苏轼和苏辙三父子。','1',NULL), ('6','班：汉朝史学家、政治家班固、班超、班昭兄妹。其中班 昭是我国第一位女史学家。书法史上“二王”指王羲之、王献之父子。','1',NULL), ('7','古代四大美人：西施(沉鱼)西施浣沙、王昭君(落雁)昭君出塞、杨玉环(闭月)贵妃醉酒、貂蝉(羞花)貂蝉拜月。','1',NULL), ('8','文房四宝：湖笔、徽墨、宣纸、端砚。','1',NULL), ('9','文房四宝：湖笔、徽墨、宣纸、端砚。','1',NULL), ('10','明清四大古典小说是《 红楼梦 》、《 三国演义 》《 西游记》、《 水浒传 》。','2',NULL);
INSERT INTO `ordersent` VALUES ('1','03031000','我们快活地喊叫着，在田野里拼命地奔跑。','一个人用手托着，另一个人牵着线，站在远远的地方，','我们去放风筝。','牵线人飞快地跑起来。','村里人看见了，说：“放得这么高！”','风筝越飞越高，在空中翩翩飞舞着，','324615'), ('2','03031000','见远远的水面上半沉半浮着一个巨大的木轮，不停地转着，','我们都哭了，在田野里四处寻找，','那是我们村的水磨坊。','找了半个下午，还是没有踪影。','将水扬起来，半圈儿水在闪着白光。','我们垂头丧气地坐在田埂上，一抬头，','246153');
INSERT INTO `phrase` VALUES ('1','03031000','精心','jīng xīn','2','形容词','专心；周密细心','悉心 用心 细心','敷衍 草率 粗略'), ('2','03031000','希望','xī wàng','2',NULL,'①心里想着达到某种目的或出现某种情况。\r\n②希望达到地某种目的或出现的某种情况；愿望。\r\n③希望所寄托的对象。','希冀 期望','绝望'), ('3','03031000','依然','yī rán','2','副词','指照往常、依旧的意思。也指依恋不舍的样子。','依旧',NULL), ('4','03031000','飞舞','feī wǔ','2','动词','飞翔飘舞；飞翔盘旋。','飞翔、航行、飞行、翱翔、飘动',''), ('5','03031000','拼命','pīn mìng','2',NULL,'豁出性命去干某事。',NULL,NULL), ('6','03031000','奔跑','bēn pǎo','2','动词','快速地跑。','飞跑、奔驰、驰骋、奔走','缓步、步行、停止、走路'), ('7','03031000','抖动','dǒu dòng','2','动词','用手有力地振动物体。颤动。','颤动。',NULL), ('8','03031000','大惊失色','dà jīng shī sè','4',NULL,'形容十分慌张，脸被吓得变了。','胆战心惊、心惊肉跳、面如土色','不动声色、若无其事、从容不迫'), ('9','03031000','千呼万唤','qiān hū wàn huàn','4','','形容再三催促','呼天喊地',NULL), ('10','03031000','寻找','xún zhǎo','2','动词','找；觅求','找寻',NULL), ('11','03031000','垂头丧气',' chuí tóu sàng qì','4',NULL,'形容失望懊丧的样子','灰心丧气、无精打采','得意洋洋、昂首挺胸、神采奕奕'), ('12','03031000','磨坊','mò fáng','2','名词','磨面粉等的作坊',NULL,NULL), ('13','03031000','继续','jì xù','2',NULL,'连续下去、不中断进程','连续 持续','中断 中止 停止 间歇');
INSERT INTO `poem` VALUES ('1','1','03030901','1','萧萧梧叶送寒声','萧萧秋风吹动梧桐树叶，送来阵阵寒意','无','1','1','1'), ('2','1','03030901','2','江上秋风动客情','客游在外的诗人不禁思念起自己的家乡','诗的前两句写郁闷孤独之情，可提示学生从生机勃勃的盛夏景象和黄叶飘飞的深秋的对比中体会作者的感情，但不要过分渲染。','0','1','0'), ('3','1','03030901','3','知有儿童挑促织','料想是孩子们在捉蟋蟀','无','0','1','0'), ('4','1','03030901','4','夜深篱落一灯明','他忽然看到远处篱笆下的灯火','后两句描写的图景令诗人倍感亲切，也许他会由此想起了自己的家乡和童年，所以感情略显舒缓。','1','0','1'), ('5','2','03030902','1','独在异乡为异客','“我”一个人客居异乡','无','0','1','1'), ('6','2','03030902','2','每逢佳节倍思亲','每次遇到重阳佳节就加倍思念家乡亲人','诗人的思乡之情在前两句中得到了直接抒发','0','1','0'), ('7','2','03030902','3','遥知兄弟登高处','这时候，“我”想远方的弟兄们一定登上了高处','无','1','1','1'), ('8','2','03030902','4','遍插茱萸少一人','弟兄们身上都佩带了茱萸，只是少了一个人','无','0','0','0');
INSERT INTO `poetry` VALUES ('1','03030901','9　古 诗 两 首\r\n　　夜书所见\r\n9　古 诗 两 首\r\n　　夜书所见\r\n','叶绍翁','(生卒年不详)　字嗣宗，号靖逸，祖籍建安(今福建建瓯)，本姓李，后嗣于龙泉(今属浙江)叶氏。南宋诗人。他是江湖派诗人，诗以七言绝句最佳，写景抒情，字句精丽，长于白描。有的写江南水乡景色，颇饶风味；有的写田家的生活片断，平易含蓄，词淡意远，耐人寻味。《游园不值》最为著名，历来为人们所传诵。\r\n\r\n \r\n\r\n叶绍翁的诗都收在诗集《靖逸小集》中。另外，他还著有《四朝闻见录》，其中杂叙南宋高宗、孝宗、光宗、宁宗四朝轶事，颇有史料价值。\r\n\r\n(生卒年不详)　字嗣宗，号靖逸，祖籍建安(今福建建瓯)，本姓李，后嗣于龙泉(今属浙江)叶氏。南宋诗人。他是江湖派诗人，诗以七言绝句最佳，写景抒情，字句精丽，长于白描。有的写江南水乡景色，颇饶风味；有的写田家的生活片断，平易含蓄，词淡意远，耐人寻味。《游园不值》最为著名，历来为人们所传诵。\r\n\r\n \r\n\r\n叶绍翁的诗都收在诗集《靖逸小集》中。另外，他还著有《四朝闻见录》，其中杂叙南宋高宗、孝宗、光宗、宁宗四朝轶事，颇有史料价值。\r\n\r\n','南宋诗人叶绍翁的《夜书所见》先是写客游在外，因秋风落叶，感到孤独郁闷，由看到远处篱笆下的灯火，料想是小孩在捉蟋蟀，不禁回忆起自己的故乡和童年的生活，于是那种郁闷之情又被一种亲切之感所代替。\r\n南宋诗人叶绍翁的《夜书所见》先是写客游在外，因秋风落叶，感到孤独郁闷，由看到远处篱笆下的灯火，料想是小孩在捉蟋蟀，不禁回忆起自己的故乡和童年的生活，于是那种郁闷之情又被一种亲切之感所代替。\r\n南宋诗人叶绍翁的《夜书所见》先是写客游在外，因秋风落叶，感到孤独郁闷，由看到远处篱笆下的灯火，料想是小孩在捉蟋蟀，不禁回忆起自己的故乡和童年的生活，于是那种郁闷之情又被一种亲切之感所代替。\r\n','萧萧梧叶送寒声<br>江上秋风动客情<br>知有儿童挑促织<br>夜深篱落一灯明<br>',NULL), ('2','03030902','九月九日忆山东兄弟','王维','王维：(701—761)　字摩诘，太原祁(今属山西)人。其父迁居蒲州(今山西永济西)。盛唐诗坛上极负盛名的诗人。又因官至尚书右丞，所以人称王右丞。晚年居蓝田辋川，过着亦官亦隐的优闲生活。有《王右丞集》。\r\n\r\n \r\n\r\n王维擅长各种诗体，尤以五言律诗和绝句著称。前期诗歌，富于进取精神，讥刺贵戚宦官，谴责纨绔子弟，反映边塞生活，抒写游侠意气，情调慷慨激昂，充满浪漫主义豪情。后期诗歌，因世途险恶，崇奉佛教，而以描写田园山水景物、表达闲情逸致、宣扬隐士生活和佛教禅理为主。不过最能代表他艺术成就的还是山水田园诗。他的山水田园诗不但数量多，而且状物精细传神，语言清新凝练，色彩鲜明如画。与孟浩然齐名，称“王孟”。王维除诗作优美外，还擅图画，是当时著名画手，这种特长也增强了他诗歌的艺术魅力。宋代大诗人苏轼在《书摩诘蓝田烟雨图》说道：“味摩诘之诗，诗中有画；观摩诘之画，画中有诗。”所评极为精当。\r\n王维：(701—761)　字摩诘，太原祁(今属山西)人。其父迁居蒲州(今山西永济西)。盛唐诗坛上极负盛名的诗人。又因官至尚书右丞，所以人称王右丞。晚年居蓝田辋川，过着亦官亦隐的优闲生活。有《王右丞集》。\r\n\r\n \r\n\r\n王维擅长各种诗体，尤以五言律诗和绝句著称。前期诗歌，富于进取精神，讥刺贵戚宦官，谴责纨绔子弟，反映边塞生活，抒写游侠意气，情调慷慨激昂，充满浪漫主义豪情。后期诗歌，因世途险恶，崇奉佛教，而以描写田园山水景物、表达闲情逸致、宣扬隐士生活和佛教禅理为主。不过最能代表他艺术成就的还是山水田园诗。他的山水田园诗不但数量多，而且状物精细传神，语言清新凝练，色彩鲜明如画。与孟浩然齐名，称“王孟”。王维除诗作优美外，还擅图画，是当时著名画手，这种特长也增强了他诗歌的艺术魅力。宋代大诗人苏轼在《书摩诘蓝田烟雨图》说道：“味摩诘之诗，诗中有画；观摩诘之画，画中有诗。”所评极为精当。\r\n王维：(701—761)　字摩诘，太原祁(今属山西)人。其父迁居蒲州(今山西永济西)。盛唐诗坛上极负盛名的诗人。又因官至尚书右丞，所以人称王右丞。晚年居蓝田辋川，过着亦官亦隐的优闲生活。有《王右丞集》。\r\n\r\n \r\n\r\n王维擅长各种诗体，尤以五言律诗和绝句著称。前期诗歌，富于进取精神，讥刺贵戚宦官，谴责纨绔子弟，反映边塞生活，抒写游侠意气，情调慷慨激昂，充满浪漫主义豪情。后期诗歌，因世途险恶，崇奉佛教，而以描写田园山水景物、表达闲情逸致、宣扬隐士生活和佛教禅理为主。不过最能代表他艺术成就的还是山水田园诗。他的山水田园诗不但数量多，而且状物精细传神，语言清新凝练，色彩鲜明如画。与孟浩然齐名，称“王孟”。王维除诗作优美外，还擅图画，是当时著名画手，这种特长也增强了他诗歌的艺术魅力。宋代大诗人苏轼在《书摩诘蓝田烟雨图》说道：“味摩诘之诗，诗中有画；观摩诘之画，画中有诗。”所评极为精当。\r\n王维：(701—761)　字摩诘，太原祁(今属山西)人。其父迁居蒲州(今山西永济西)。盛唐诗坛上极负盛名的诗人。又因官至尚书右丞，所以人称王右丞。晚年居蓝田辋川，过着亦官亦隐的优闲生活。有《王右丞集》。\r\n\r\n \r\n\r\n王维擅长各种诗体，尤以五言律诗和绝句著称。前期诗歌，富于进取精神，讥刺贵戚宦官，谴责纨绔子弟，反映边塞生活，抒写游侠意气，情调慷慨激昂，充满浪漫主义豪情。后期诗歌，因世途险恶，崇奉佛教，而以描写田园山水景物、表达闲情逸致、宣扬隐士生活和佛教禅理为主。不过最能代表他艺术成就的还是山水田园诗。他的山水田园诗不但数量多，而且状物精细传神，语言清新凝练，色彩鲜明如画。与孟浩然齐名，称“王孟”。王维除诗作优美外，还擅图画，是当时著名画手，这种特长也增强了他诗歌的艺术魅力。宋代大诗人苏轼在《书摩诘蓝田烟雨图》说道：“味摩诘之诗，诗中有画；观摩诘之画，画中有诗。”所评极为精当。\r\n王维：(701—761)　字摩诘，太原祁(今属山西)人。其父迁居蒲州(今山西永济西)。盛唐诗坛上极负盛名的诗人。又因官至尚书右丞，所以人称王右丞。晚年居蓝田辋川，过着亦官亦隐的优闲生活。有《王右丞集》。\r\n\r\n \r\n\r\n王维擅长各种诗体，尤以五言律诗和绝句著称。前期诗歌，富于进取精神，讥刺贵戚宦官，谴责纨绔子弟，反映边塞生活，抒写游侠意气，情调慷慨激昂，充满浪漫主义豪情。后期诗歌，因世途险恶，崇奉佛教，而以描写田园山水景物、表达闲情逸致、宣扬隐士生活和佛教禅理为主。不过最能代表他艺术成就的还是山水田园诗。他的山水田园诗不但数量多，而且状物精细传神，语言清新凝练，色彩鲜明如画。与孟浩然齐名，称“王孟”。王维除诗作优美外，还擅图画，是当时著名画手，这种特长也增强了他诗歌的艺术魅力。宋代大诗人苏轼在《书摩诘蓝田烟雨图》说道：“味摩诘之诗，诗中有画；观摩诘之画，画中有诗。”所评极为精当。\r\n王维：(701—761)　字摩诘，太原祁(今属山西)人。其父迁居蒲州(今山西永济西)。盛唐诗坛上极负盛名的诗人。又因官至尚书右丞，所以人称王右丞。晚年居蓝田辋川，过着亦官亦隐的优闲生活。有《王右丞集》。\r\n\r\n \r\n\r\n王维擅长各种诗体，尤以五言律诗和绝句著称。前期诗歌，富于进取精神，讥刺贵戚宦官，谴责纨绔子弟，反映边塞生活，抒写游侠意气，情调慷慨激昂，充满浪漫主义豪情。后期诗歌，因世途险恶，崇奉佛教，而以描写田园山水景物、表达闲情逸致、宣扬隐士生活和佛教禅理为主。不过最能代表他艺术成就的还是山水田园诗。他的山水田园诗不但数量多，而且状物精细传神，语言清新凝练，色彩鲜明如画。与孟浩然齐名，称“王孟”。王维除诗作优美外，还擅图画，是当时著名画手，这种特长也增强了他诗歌的艺术魅力。宋代大诗人苏轼在《书摩诘蓝田烟雨图》说道：“味摩诘之诗，诗中有画；观摩诘之画，画中有诗。”所评极为精当。\r\n','《九月九日忆山东兄弟》是一首抒写乡情的千古绝唱，作者是唐代著名诗人王维，他当时只有十七岁，正在长安谋取功名。恰逢重阳佳节，作者孤身飘泊于繁华热闹的帝都，倍感孤单，非常思念家乡亲人。情之所至，诗人直抒胸臆，写出了“独在异乡为异客，每逢佳节倍思亲”这样传诵千古的名句。\r\n\r\n','独在异乡为异客<br>每逢佳节倍思亲<br>遥知兄弟登高处<br>遍插茱萸少一人<br>',NULL);
INSERT INTO `reading` VALUES ('1','03031000','小草','马路边，河岸上，不起眼的小草使大自然充满生机。 \n春天，一阵微微的春风吹来，小草和刚睡醒的伙伴们跳起了欢快的舞蹈。他们一边跳舞，一边随着春风生长。夏天，太阳把大地烤（kǎo ）得火热。人们来到草地上，往小草身上一坐，小草像一位慈(cí)爱的母亲把人们抱在怀里，让劳累的人们消除酷(kù )热带来的疲(pí )劳。秋天，一阵凉风吹来，她一下子变得面黄肌瘦。寒风把冬天请来了，小草的根深深地钻进泥土里。等第二年春天来了，她又从土里钻出来。真是“                     ，                       。” \n我爱小草，爱她强大的生命力和宽广的胸怀。','1','2','3','4',NULL), ('2','03031000','太阳花','我喜欢太阳花，它是夏天里常见的一种最普通的花。  \n太阳花的茎有红色的，有绿色的。那茎很嫩，似乎用手一掐就会冒出水来。  太阳花的叶子很特别，小而厚，叶表面像涂了一层薄薄的蜡，光洁、碧绿。  \n\n\n\n\n\n\n\n\n\n太阳花的花朵颜色格外鲜艳，有的洁白如玉，有的鲜红似火，有的金黄若金，而那粉红的就像抹了一层淡淡的胭脂，花朵并不大，多层花瓣的自然娇艳，单层花瓣的更是那么俏丽，真讨人喜欢。  \n我喜欢太阳花，不只在于它的颜色鲜艳，更因为它有顽强的生命力，它不怕日晒、风吹、雨淋，那样子总是蓬蓬勃勃的，只掐下一枝小小的茎，插在泥土里，不久就会生根开花。','5','6','7','8',NULL);
INSERT INTO `readingques` VALUES ('1','根据短文内容，在文中横线上准确地填上一句诗。','野火烧不尽,春风吹又生。'), ('2','文章按照       、       、       、       的顺序写小草。','春天  夏天  秋天  冬天'), ('3','从文中找出“严寒”的两个反义词。（ ）（ ）','火热  酷热'), ('4','短文是围绕                                       来写的。','5、齐白石爷爷画画获得成功的原因是什么？请你用“因为……所以……”的句式写出来。（4分） \n三、小     草 \n马路边，河岸上，不起眼的小草使大自然充满生机。'), ('5','从文中找出与“洁白如玉”的“如”意思相同的三个词写下来。        （    ）    （    ）    （    ）','像、似、若'), ('6','短文先写太阳花的      ，再写太阳花的      ，最后写太阳花的      。 ','茎、叶、花'), ('7','短文的开头和结尾的关系是（ ）。','首尾照应'), ('8',' 作者为什么喜欢太阳花？','因为它的颜色鲜艳，更因为它有顽强的生命力。5、美人蕉。叶子大，花朵鲜艳。');
INSERT INTO `sentence` VALUES ('1','03031000','童年的时候，我们这些孩子，最大的快乐就是做风筝，放风筝。','课文开门见山点明，做风筝和放风筝是“我们”这些孩子“最大的快乐”。','开门见山，点出主旨。'), ('2','03031000','我们精心做着，心中充满了憧憬和希望。','风筝显然给童年的“我们”带来了很多的乐趣，留下了深刻的印象，这些乐趣可以从文中孩子们的心情变化看出来，这些心情变化是通过具体事例及一些动作、神态的描写来表现的。',NULL), ('3','03031000','风筝越飞越高，在空中翩翩飞舞着，我们快活地喊叫着，在田野里拼命地奔跑。','放风筝的时候，“我们快活地喊叫着，在田野里拼命地奔跑”。孩子们的心情心情变化是通过具体事例及一些动作、神态的描写来表现的。',NULL), ('4','03031000','我们都哭了，在田野里四处寻找，找了半个下午，还是没有踪影。','放风筝是一种有益的游戏，游戏对孩子来说，就是快乐，就是幸福，就是美好憧憬。所以丢失了风筝，才使孩子们伤心地哭了。',NULL), ('5','03031000','我们向那房子跑去，继续寻找我们的“幸福鸟”……','课文最后一句话意味深长，孩子们之所以这样苦苦寻找丢失的风筝，是因为在风筝的身上，寄托着他们的快乐，寄托着他们的幸福，寄托着他们对未来的憧憬和希望。',NULL);
INSERT INTO `stretchsent` VALUES ('1','03031000','她笑了。','听完我给她讲的笑话，她捂着肚子笑了。'), ('2','03031000','小鸟在唱歌。','一群可爱的小鸟子在树枝上叽叽喳喳地唱歌。'), ('3','03031000','小草发芽了。','春天来了，小草发芽了。'), ('4','03031000','岩石上长着珊瑚。','海底的岩石上长着美丽的珊瑚。');
INSERT INTO `text` VALUES ('1','03031000','风筝','贾平凹','中国著名作家。','4',NULL,'&nbsp&nbsp童年的时候，我们这些孩子，最大的快乐就是做风筝，放风筝。<br>&nbsp&nbsp在芦塘里拔几根细苇，再找来几张纸，我们便做起风筝来。做一个蝴蝶样的吧。我们精心做着，心中充满了憧憬和希望。风筝做好了，却什么也不像了。我们依然快活，把它叫做“幸福鸟”，还把我们的名字写在上面。<br>&nbsp&nbsp我们去放风筝。一个人用手托着，另一个人牵着线，站在远远的地方，说声“放”，那线一紧一松，风筝就凌空飞起，渐渐高过树梢了。牵线人飞快地跑起来。风筝越飞越高，在空中翩翩飞舞着，我们快活地喊叫着，在田野里拼命地奔跑。村里人看见了，说：“放得这么高！”。<br>&nbsp&nbsp从早晨玩到下午，我们还是歇不下来，牵着风筝在田野里奔跑。风筝越飞越高，似乎飞到了云彩上。忽然吹来一阵风，线嘣地断了。风筝在空中抖动了一下，便极快地飞走了。我们大惊失色，千呼万唤，那风筝越来越小，倏地便没了踪影。<br>&nbsp&nbsp我们都哭了，在田野里四处寻找，找了半个下午，还是没有踪影。我们垂头丧气地坐在田埂上，一抬头，看见远远的水面上半沉半浮着一个巨大的木轮，不停地转着，将水扬起来，半圈儿水在闪着白光。那是我们村的水磨坊。<br>&nbsp&nbsp“那儿找过了吗？”<br>&nbsp&nbsp“没找过，说不定‘幸福鸟’就落在那儿呢。”大家说。<br>&nbsp&nbsp我们向那房子跑去，继续寻找我们的“幸福鸟”……','这篇精读课文是贾平凹的作品，写了“我”童年时候和伙伴们做风筝、放风筝的情景。文章语言朴实，多于白描而极少雕饰，笔调亲切、温馨、自然。文章既写了“我们”放风筝时自由自在、无拘无束的快乐，也写了放风筝时的伤心；同时还体现了孩子们对幸福和希望的憧憬。文章自始至终，充满了童真童趣，使人如临其境，如见其景，如可触摸。'), ('2','03031100','秋天的雨','陶金鸿','女,浙江教育学院教授, 美术系副教授。','3',NULL,'&nbsp&nbsp秋天的雨，是一把钥（yào）匙（shi）。它带着清凉和温柔，轻轻地，轻轻地，趁你没留意，把秋天的大门打开了。<br>&nbsp&nbsp秋天的雨，有一盒五彩缤（bīn）纷的颜料。你看，它把黄色给了银杏树，黄黄的叶子像一把把小扇子，扇哪扇哪，扇走了夏天的炎热。它把红色给了枫树，红红的枫叶像一枚枚邮票，飘哇飘哇，邮来了秋天的凉爽。金黄色是给田野的，看，田野像金色的海洋。橙红色是给果树的，橘子、柿子你挤我碰，争着要人们去摘呢！菊花仙子得到的颜色就更多了，紫红的、淡黄的、雪白的……美丽的菊花在秋雨里频频点头。<br>&nbsp&nbsp秋天的雨，藏着非常好闻的气味。梨香香的，菠萝甜甜的，还有苹果、橘子，好多好多香甜的气味，都躲在小雨滴里呢！小朋友的脚，常被那香味勾住。<br>&nbsp&nbsp秋天的雨，吹起了金色的小喇叭，它告诉大家，冬天快要来了。小喜鹊衔来树枝造房子，小松鼠找来松果当粮食，小青蛙在加紧挖洞，准备舒舒服服地睡大觉。松柏穿上厚厚的、油亮亮的衣裳，杨树、柳树的叶子飘到树脚下。它们都在准备过冬了。<br>&nbsp&nbsp秋天的雨，带给大地的是一曲丰收的歌，带给小朋友的是一首欢乐的歌。','这是一篇抒情意味很浓的散文，名为写秋雨，实际在写秋天。课文的内容丰富多彩，作者抓住秋天的特点，从秋天的到来写起，写了秋天缤纷的色彩，秋天的丰收景象，还有深秋中各种动物、植物准备过冬的情景。'), ('3','03031200','听听，秋的声音','毕国瑛','女,山东人。当代诗人。','2',NULL,'<br>&nbsp&nbsp听听，<br>&nbsp&nbsp秋的声音，<br>&nbsp&nbsp大树抖抖手臂，<br>&nbsp&nbsp “刷刷”， <br>&nbsp&nbsp是黄叶道别的声音。<br><br>&nbsp&nbsp听听，<br>&nbsp&nbsp秋的声音，<br>&nbsp&nbsp蟋蟀振动着翅膀，<br>&nbsp&nbsp “嚁嚁”， <br>&nbsp&nbsp是和阳台告别的歌韵。<br>&nbsp&nbsp一排排大雁追上白云，<br>&nbsp&nbsp撒下一阵暖暖的叮咛；<br><br>&nbsp&nbsp一阵阵秋风掠过田野，<br>&nbsp&nbsp送来一片丰收的歌吟。<br><br>&nbsp&nbsp听听，<br>&nbsp&nbsp走进秋，<br>&nbsp&nbsp走进这辽阔的音乐厅，<br>&nbsp&nbsp你好好地去听秋的声音。<br>&nbsp&nbsp秋的声音，<br>&nbsp&nbsp在每一片叶子里，<br>&nbsp&nbsp在每一朵花里，<br>&nbsp&nbsp在每一滴水里，<br>&nbsp&nbsp在每一颗展开的谷粒里。<br><br>&nbsp&nbsp听听，<br>&nbsp&nbsp秋的声音，<br>&nbsp&nbsp从远方匆匆走来，<br>&nbsp&nbsp向远方匆匆走去。<br><br>&nbsp&nbsp听听，<br>&nbsp&nbsp我们听到了秋的声音。','本课是一首现代诗，是略读课文。作者抓住秋天里大自然一些声响，用诗的语言，赞美了秋天。');
INSERT INTO `tiezi` VALUES ('1','2015-02-27 09:52:00','1','大家好，初来乍到，请多多关照。','0','1','2','0',NULL), ('2','2015-02-28 09:53:22','2','我也是，哈哈','1','0',NULL,'0',NULL), ('3','2015-03-01 09:54:01','3','怎么修改病句，晶晶从小养成了讲卫生。','0','0',NULL,'0',NULL), ('4','2015-03-01 09:55:38','1','这样改，晶晶从小养成了讲卫生的好习惯。\r\n 晶晶从小养成了讲卫生的好习惯。\r\n 晶晶从小养成了讲卫生的好习惯。\r\n 晶晶从小养成了讲卫生的好习惯。晶晶从小养成了讲卫生的好习惯。\r\n 这样改，晶晶从小养成了讲卫生的好习惯。  ','3','1','3','0',NULL), ('5','2015-03-02 09:56:44','4','好无聊啊，大家都寒假都在家干嘛了呢？','0','3','1&2&3','0',NULL), ('6','2015-03-02 09:57:58','5','写作业，睡觉，玩呗','5','0',NULL,'0',NULL), ('7','2015-03-03 09:58:40','2','还不如去学校耍得开心！！！','5','0',NULL,'0',NULL), ('8','2015-03-03 09:59:26','3','________，白铁无辜铸佞臣。急，在线等。','0','0',NULL,'0',NULL), ('9','2015-03-03 10:01:01','4','青山有幸埋忠骨','8','1','3','0',NULL), ('10','2015-03-04 10:01:46','5','春天来了，小伙伴们一起去春游吧。啦啦啦啦啦啦','0','4','1&2&3&4','0',NULL);
INSERT INTO `user` VALUES ('1','1234567@qq.com','111111','0','2015-01-03 08:30:00','0','','1','1','1','1','','','小星星','人教版'), ('2','1234568@qq.com','111111','1','2015-02-01 08:30:00','1',NULL,'3','1','1','50','好学生',NULL,'学海无涯','人教版'), ('3','1234560@qq.com','111111','0','2015-03-07 19:57:31','2',NULL,'3','1','1','50','',NULL,'爱学习的好孩子','人教版'), ('4','1234569@qq.com','111111','1','2015-03-02 20:58:24','3',NULL,'2','1','1','100',NULL,NULL,'狼外婆','人教版'), ('5','1234567@163.com','111111','0','2015-02-07 20:00:48','2',NULL,'3','1','2','200',NULL,NULL,'北极star','苏教版'), ('6','1234568@163.com','111111','1','2015-01-26 20:02:22','2',NULL,'3','1','2','200',NULL,NULL,'星星点灯','人教版'), ('7','1234569@163.com','111111','1','2015-03-07 20:03:36','3',NULL,'3','1','2','200',NULL,NULL,'慢羊羊村长','人教版'), ('8','1234560@163.com','111111','0','2015-03-13 20:04:44','2',NULL,'3','1','1','300',NULL,NULL,'hellobaby','人教版');
INSERT INTO `word` VALUES ('1','03030901','促','cù','9','1. 近，时间紧迫：～膝。～席（坐近）。急～。短～。仓～。\r\n\r\n2. 催，推动：～使。～进。敦～。督～。催～。',NULL), ('2','03030902','忆','yì','4','1. 回想，想念：回～。追～。～苦思甜。\r\n\r\n2. 记得，记住：记～。记～犹新。',NULL), ('3','03030902','异','yì','6','1.不同的：～乎。～说。～常。～己（与自己意见不同或利害相冲突的人）。～端（旧时指不符合正统思想的主张或教义，如“～～邪说”）。～化。～性。～样。大同小～。～曲同工。\r\n\r\n2. 分开：离～。～居。\r\n\r\n3. 另外的，别的：～日。～地。～国。～乡。～类。\r\n\r\n4. 特别的：奇～。～闻。～彩。奇才～能（特殊的才能）。\r\n\r\n5. 奇怪：惊～。诧～。怪～。',NULL), ('4','03030902','逢','féng','10','1. 遇到：～遇。久别重～。～凶化吉。狭路相～。\r\n\r\n2. 迎合，巴结：～迎。～君之恶。\r\n\r\n3. 姓。',NULL), ('5','03030902','佳','jiā','8','1. 美，好的：～美。～妙。～句。～作。～音。～节。～境。～期。～人。～丽（ａ．美丽；ｂ．美女）。～偶。～酿。美酒～肴。',NULL), ('6','03030902','倍','bèi','10','1. 等于原数的两个：加～。事～功半。～道而行（兼程而行）。\r\n\r\n2. 某数的几倍等于用几乘某数：二的五～是十。\r\n\r\n3.更加，非常：“每逢佳节～思亲”。～加。～儿精神。\r\n\r\n4. 增益：“焉用亡郑以～邻？”',NULL), ('7','03030902','插','chā','9','1. 扎进去，把细长或薄的东西放进去：～入。～秧。～花。～座。～头。～翅难飞。\r\n\r\n2. 加入，参与：～班。～话。～曲。～图。～页。～叙。安～。',NULL), ('8','03091000','依','yī','8','1. 靠，仗赖：～靠。～傍（a.依靠；b.摹仿，多指艺术、学问）。～恋。～偎。～存。～附。归～。\r\n\r\n2. 按照：～照。～旧。～据。～次。\r\n\r\n3. 顺从，答应：～从。～顺。～允。\r\n\r\n4. 亲密的样子：“有～其士”。',NULL), ('9','03031000','歇','xiē','9','1. 休息：～憩。～脚。～晌。安～。～凉。～心。\r\n\r\n2. 停止：～止。～业。～工。停～。间～。～班。～后语。\r\n\r\n3. 很短的一段时间：过了一～。',NULL), ('10','03031000','丧','sàng','8','1. 跟死了人有关的事：～事。～礼。～亡。～假（jià）。～乱。治～。吊～。                                                     2. 丢掉，失去：～失。～生。～偶。～胆。～气（不吉利，倒霉。“气”读轻声）。颓～（情绪低落，精神委靡）。懊～。沮～。～权辱国。～尽天良（良心全部失去了）。','多音字'), ('11','03031000','磨','mò','11','1. 粉碎粮食的工具：石～。电～。～盘。～坊（亦作“磨房”）。推～。\r\n\r\n2. 用磨将粮食加工成所需的状态：～面。～米。～豆腐。\r\n\r\n3. 掉转：这个胡同太窄，～不过车来。','多音字'), ('12','03031000','坊','fáng','7','1. 小手工业者的工作场所：作～。','多音字');
INSERT INTO `yicuobihua` VALUES ('1','1','03030901','促','9','8','7','10'), ('2','2','03030902','忆','4','3','5','6'), ('3','3','03030902','异','6','5','7','8'), ('4','4','03030902','逢','10','11','9','12'), ('5','5','03030902','佳','8','7','6','9'), ('6','6','03030902','倍','10','11','9','12'), ('7','7','03030902','插','9','10','8','11'), ('8','8','03031000','依','8','9','10','7'), ('9','9','03031000','歇','9','8','10','11'), ('10','10','03031000','丧','8','9','10','7'), ('11','11','03031000','磨','11','10','12','13'), ('12','12','03031000','坊','7','8','6','9');
INSERT INTO `yicuopinyin` VALUES ('1','1','03030901','促','cu','chu','ca','zu'), ('2','2','03030902','忆','yi','ya','xi','xa'), ('3','3','03030902','异','yi','xi','ya','la'), ('4','4','03030902','逢','feng','fang','fen','fan'), ('5','5','03030902','佳','jia','ja','xia','jan'), ('6','6','03030902','倍','bei','bai','be','ba'), ('7','7','03030902','插','cha','ca','sha','zha'), ('8','8','03031000','依','yi','ya','xi','zi'), ('9','9','03031000','歇','xie','xue','xe','xve'), ('10','10','03031000','丧','sang','shang','song','sing'), ('11','11','03031000','磨','mo','ma','shi','chuang'), ('12','12','03031000','坊','fang','feng','gang','fan');
INSERT INTO `yicuozixing` VALUES ('1','1','03030901','促','足','优','但'), ('2','2','03030902','忆','异','已','亿'), ('3','3','03030902','异','亿','义','依'), ('4','4','03030902','逢','峰','锋','缝'), ('5','5','03030902','佳','准','维','住'), ('6','6','03030902','倍','赔','陪','佳'), ('7','7','03030902','插','抽','查','拆'), ('8','8','03031000','依','衣','侬','伊'), ('9','9','03031000','歇','喝','歌','葛'), ('10','10','03031000','丧','桑','来','衣'), ('11','11','03031000','磨','摩','蘑','麻'), ('12','12','03031000','坊','仿','防','访');

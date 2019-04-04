/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : lzserver

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-12-20 15:13:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lz_ increase
-- ----------------------------
DROP TABLE IF EXISTS `lz_ increase`;
CREATE TABLE `lz_ increase` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增',
  `sid` int(11) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL COMMENT '通过时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_ increase
-- ----------------------------

-- ----------------------------
-- Table structure for lz_activity
-- ----------------------------
DROP TABLE IF EXISTS `lz_activity`;
CREATE TABLE `lz_activity` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `theme` varchar(100) DEFAULT NULL COMMENT '主题',
  `unit` varchar(100) DEFAULT NULL COMMENT '单位',
  `address` varchar(100) DEFAULT NULL COMMENT '地区',
  `project` varchar(100) DEFAULT NULL COMMENT '方案',
  `number` int(10) DEFAULT NULL COMMENT '人数',
  `start_time` int(11) DEFAULT NULL COMMENT '开始时间',
  `over_time` int(11) DEFAULT NULL COMMENT '结束时间',
  `state` varchar(100) DEFAULT '0' COMMENT '状态',
  `intro` varchar(255) DEFAULT NULL COMMENT '活动简介',
  `initiator` varchar(10) DEFAULT NULL COMMENT '发起人',
  `audit_number` varchar(10) DEFAULT NULL COMMENT '审核人员',
  `issue_number` varchar(10) DEFAULT NULL COMMENT '发布人员',
  `initiator_time` int(11) DEFAULT NULL COMMENT '发起日期',
  `audit_time` int(11) DEFAULT NULL COMMENT '审核日期',
  `issue_time` int(11) DEFAULT NULL COMMENT '发布日期',
  `isdelete` tinyint(4) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `reason` varchar(255) DEFAULT NULL COMMENT '原因',
  `tid` int(11) DEFAULT NULL COMMENT '‘学院id’',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_activity
-- ----------------------------
INSERT INTO `lz_activity` VALUES ('1', '春节联欢晚会', '商学院软件部17php', '商学院软件部班级', '/tmp/uploads/20181213\\da9f4e91284dfb12e2f88472319e14d7.png', '44', '1269383742', '1269389741', '2', '盛大', '刘兆顺', '1', '1', '2018', '2018', '1544954817', '1', '0', ' ', null);
INSERT INTO `lz_activity` VALUES ('12', '2019年商学院元旦晚会', '商学院', '大礼堂', '/tmp/uploads/20181217\\01d4ddf81709954b6b07dcc4a126688f.docx', '10', '1545062400', '1545148800', '2', '2019年商学院元旦晚会定于2018年12月18日于学院大礼堂举行', '韩主任', '1', '1', '1545028842', '2018', '1545029093', '0', '0', null, null);
INSERT INTO `lz_activity` VALUES ('2', '沉思南京', '商务系软件部PHP班', '商务中心', '/tmp/uploads/20181213\\06a86337a38c5998722b0e2ca234ad7c.txt', '1', '1269189742', '1269389742', '4', '民族、', '张孝宇', '1', '0', '2018', '2018', null, '0', '0', '', null);
INSERT INTO `lz_activity` VALUES ('3', '集体朗诵', '商务系软件部PHP班', '北京人人民大会堂', '/tmp/uploads/20181213\\b538d464a3be0b3307ebf251eb6811f5.jpg', '126', '1269389745', '1269389743', '4', '国家项目级比赛', '刘淑媛', '1', '0', '2018', '2018', null, '0', '0', '', null);
INSERT INTO `lz_activity` VALUES ('5', '电竞比赛', '商务系软件部PHP班', '商务中心', '/tmp/uploads/20181213\\a4a4279b3601d44cc25575eb1c1e9464.docx', '22', '1269389740', '1269389745', '2', '网络游戏', '赵顺', '1', '1', '2018', '2018', '2018', '0', '0', '', null);
INSERT INTO `lz_activity` VALUES ('6', '我爱阅读', '商务系软件部PHP班', '商务中心', '/tmp/uploads/20181213\\cc84296aff855dd501c590122004aa27.jpg', '11', '1269389749', '1269389746', '4', '朗诵比赛', '张孝宇', '1', '0', '2018', '2018', null, '1', '0', '对不起', null);
INSERT INTO `lz_activity` VALUES ('10', '程序猿狂欢节', '商务系软件部PHP班', '商务中心', '/tmp/uploads/20181216\\f2526f236a7e4a299bca4c2c98564b95.docx', '44', '1544900580', '1544990640', '1', '狂欢节', '刘兆顺', '1', '0', '1544959003', '2018', null, '0', '0', null, null);
INSERT INTO `lz_activity` VALUES ('52', '1', '1', '1', null, '1', '1543253400', '1543471800', '5', '1', '1', '0', '0', '1545201172', null, null, '1', '0', null, null);

-- ----------------------------
-- Table structure for lz_admin_access
-- ----------------------------
DROP TABLE IF EXISTS `lz_admin_access`;
CREATE TABLE `lz_admin_access` (
  `role_id` smallint(6) unsigned NOT NULL DEFAULT '0',
  `node_id` smallint(6) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0',
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of lz_admin_access
-- ----------------------------
INSERT INTO `lz_admin_access` VALUES ('6', '141', '3', '91');
INSERT INTO `lz_admin_access` VALUES ('6', '140', '3', '91');
INSERT INTO `lz_admin_access` VALUES ('6', '139', '3', '91');
INSERT INTO `lz_admin_access` VALUES ('6', '138', '3', '91');
INSERT INTO `lz_admin_access` VALUES ('6', '137', '3', '91');
INSERT INTO `lz_admin_access` VALUES ('6', '91', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '136', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('6', '134', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('6', '132', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('6', '131', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('6', '130', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('6', '109', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('6', '106', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('6', '81', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '142', '3', '84');
INSERT INTO `lz_admin_access` VALUES ('6', '129', '3', '84');
INSERT INTO `lz_admin_access` VALUES ('6', '96', '3', '84');
INSERT INTO `lz_admin_access` VALUES ('6', '95', '3', '84');
INSERT INTO `lz_admin_access` VALUES ('6', '94', '3', '84');
INSERT INTO `lz_admin_access` VALUES ('6', '93', '3', '84');
INSERT INTO `lz_admin_access` VALUES ('6', '92', '3', '84');
INSERT INTO `lz_admin_access` VALUES ('6', '84', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '126', '3', '77');
INSERT INTO `lz_admin_access` VALUES ('6', '125', '3', '77');
INSERT INTO `lz_admin_access` VALUES ('6', '124', '3', '77');
INSERT INTO `lz_admin_access` VALUES ('6', '123', '3', '77');
INSERT INTO `lz_admin_access` VALUES ('6', '121', '3', '77');
INSERT INTO `lz_admin_access` VALUES ('6', '120', '3', '77');
INSERT INTO `lz_admin_access` VALUES ('6', '77', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '116', '3', '85');
INSERT INTO `lz_admin_access` VALUES ('6', '108', '3', '85');
INSERT INTO `lz_admin_access` VALUES ('6', '103', '3', '85');
INSERT INTO `lz_admin_access` VALUES ('6', '99', '3', '85');
INSERT INTO `lz_admin_access` VALUES ('6', '85', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '115', '3', '65');
INSERT INTO `lz_admin_access` VALUES ('6', '114', '3', '65');
INSERT INTO `lz_admin_access` VALUES ('6', '112', '3', '65');
INSERT INTO `lz_admin_access` VALUES ('6', '110', '3', '65');
INSERT INTO `lz_admin_access` VALUES ('6', '107', '3', '65');
INSERT INTO `lz_admin_access` VALUES ('6', '104', '3', '65');
INSERT INTO `lz_admin_access` VALUES ('6', '65', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '113', '3', '64');
INSERT INTO `lz_admin_access` VALUES ('6', '111', '3', '64');
INSERT INTO `lz_admin_access` VALUES ('6', '100', '3', '64');
INSERT INTO `lz_admin_access` VALUES ('6', '97', '3', '64');
INSERT INTO `lz_admin_access` VALUES ('6', '64', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '24', '3', '23');
INSERT INTO `lz_admin_access` VALUES ('6', '23', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '26', '3', '22');
INSERT INTO `lz_admin_access` VALUES ('6', '7', '3', '6');
INSERT INTO `lz_admin_access` VALUES ('6', '8', '3', '6');
INSERT INTO `lz_admin_access` VALUES ('6', '22', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '25', '3', '22');
INSERT INTO `lz_admin_access` VALUES ('6', '6', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('6', '1', '1', '0');
INSERT INTO `lz_admin_access` VALUES ('1', '141', '3', '91');
INSERT INTO `lz_admin_access` VALUES ('1', '140', '3', '91');
INSERT INTO `lz_admin_access` VALUES ('1', '138', '3', '91');
INSERT INTO `lz_admin_access` VALUES ('1', '137', '3', '91');
INSERT INTO `lz_admin_access` VALUES ('1', '91', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('1', '136', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('1', '135', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('1', '134', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('1', '132', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('1', '131', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('1', '130', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('1', '109', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('1', '106', '3', '81');
INSERT INTO `lz_admin_access` VALUES ('1', '81', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('1', '122', '3', '77');
INSERT INTO `lz_admin_access` VALUES ('1', '120', '3', '77');
INSERT INTO `lz_admin_access` VALUES ('1', '77', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('1', '118', '3', '85');
INSERT INTO `lz_admin_access` VALUES ('1', '117', '3', '85');
INSERT INTO `lz_admin_access` VALUES ('1', '116', '3', '85');
INSERT INTO `lz_admin_access` VALUES ('1', '99', '3', '85');
INSERT INTO `lz_admin_access` VALUES ('1', '85', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('1', '113', '3', '64');
INSERT INTO `lz_admin_access` VALUES ('1', '100', '3', '64');
INSERT INTO `lz_admin_access` VALUES ('1', '64', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('1', '24', '3', '23');
INSERT INTO `lz_admin_access` VALUES ('1', '23', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('1', '26', '3', '22');
INSERT INTO `lz_admin_access` VALUES ('1', '25', '3', '22');
INSERT INTO `lz_admin_access` VALUES ('1', '22', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('1', '8', '3', '6');
INSERT INTO `lz_admin_access` VALUES ('1', '7', '3', '6');
INSERT INTO `lz_admin_access` VALUES ('1', '6', '2', '1');
INSERT INTO `lz_admin_access` VALUES ('1', '1', '1', '0');

-- ----------------------------
-- Table structure for lz_admin_article
-- ----------------------------
DROP TABLE IF EXISTS `lz_admin_article`;
CREATE TABLE `lz_admin_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `adjunct` text COMMENT '附件',
  `date` int(11) DEFAULT NULL COMMENT '日期',
  `issuer` tinyint(3) DEFAULT NULL COMMENT '发布人',
  `p_id` tinyint(3) DEFAULT NULL COMMENT '二级学院id',
  `grade` varchar(10) DEFAULT 'A' COMMENT '成绩',
  `staff_check` tinyint(3) DEFAULT NULL COMMENT '考核人员',
  `check_date` int(11) DEFAULT NULL COMMENT '考核时间',
  `status` tinyint(1) DEFAULT '1',
  `isdelete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_admin_article
-- ----------------------------
INSERT INTO `lz_admin_article` VALUES ('1', '志愿者（义工）管理制度', '<p>第一章 总则\r\n第一条 为倡导“奉献、友爱、互助、进步”的志愿者精神，规范和促进社区志愿服务活动，为推动社区精神文明和和谐社区建设，健全和完善社区保障体系，特制定本制度。\r\n第二条 社区志愿服务是指在各级党委、政府的倡导和扶持下，从社区成员多种需求出发，组建以社区居民为主体的组织网络，开展各种无偿公益服务，协助解决社区问题，倡导社区居民互助，共同推动社区建设的公益服务活动。\r\n社区志愿服务的主体是社区志愿者各社区志愿者组织。\r\n第三条 社区志愿者是在本办事处各社区志愿者组织登记并获得其同意，自愿为他人和社会提供无偿服务的人员。</p>', '', '1543939200', '1', '3', 'B', '1', '1543939200', '2', '0');
INSERT INTO `lz_admin_article` VALUES ('2', '志愿者服务管理办法', '<p>为加强志愿者队伍的管理，充分发挥文化志愿者服务社会、服务大众的作用，推动文化志愿者队伍的建设，结合文化志愿者服务的性质和特点，制定《管理办法》。\r\n\r\n一、 宗旨\r\n坚持党的基本路线，遵守宪法、法律、法规和国家政策，组织、指导和推动图书馆文化志愿服务，促进公共文化服务体系的建立和完善。自愿参与、义务工作、提升自我、服务社会。</p>', '', '1544025600', '1', '3', 'A', '1', '1544025600', '2', '0');
INSERT INTO `lz_admin_article` VALUES ('8', '志愿者管理制度', '<p><b>第一章&nbsp;&nbsp;总&nbsp;&nbsp;则</b></p><p><b>第一条&nbsp;&nbsp;</b>为加强神华爱心志愿者管理，促进实施工作规范化、制度化、科学化，特制定本制度。</p><p><b>第二条&nbsp;</b>&nbsp;本制度适用于所有神华爱心志愿者。</p><p><b>第三条&nbsp;</b>&nbsp;本制度所指的志愿者，是指不为物质报酬，基于良知、信念和责任，自愿参与神华公益基金会（以下简称神华基金会）组织开展的各项公益活动，愿无偿为公益事业提供服务和帮助的人。</p><p><b>第四条&nbsp;&nbsp;</b>神华公益基金会办公室（以下简称办公室）为神华爱心志愿者的组织管理机构。</p><p>&nbsp;</p><p><b>第二章&nbsp;&nbsp;志愿者基本要求</b></p><p><b>第五条</b>&nbsp;&nbsp;神华爱心志愿者招募主要采取主动报名形式，通过发布需求、接收简历、人员筛选、约见面试、确定人选等基本流程确定人选。</p><p><b>第六条</b>&nbsp;&nbsp;&nbsp;神华爱心志愿者，必须具备下列条件：</p><p>1.神华集团及其子（分）公司员工；</p><p>2.对神华基金会所进行的活动有所了解，认同神华基金会的工作理念、宗旨，自愿参加基金会的志愿服务活动；</p><p>3.具有较强的社会责任感和奉献精神；</p><p>4.具有团队合作精神，吃苦耐劳，对工作认真负责；</p><p>5.具备为神华基金会组织开展的有关活动提供志愿服务所必需的技能和时间；</p><p>6.具备与所参加的志愿服务项目及活动相适应的基本素质。</p><p><b>第七条</b>&nbsp;&nbsp;加入神华基金会的志愿者，均需与神华基金会签署《神华公益基金会志愿服务承诺书》（附件一）</p><p>&nbsp;</p><p><b>第三章&nbsp;&nbsp;志愿者的权利和义务</b></p><p><b>第八条&nbsp;&nbsp;</b>神华爱心志愿者的权利：<b></b></p><p>1.了解神华基金会的运作流程，参加基金会组织提供的各类培训；</p><p>2.要求获得从事志愿服务的必需条件和必要保障；</p><p>3.志愿服务工作得到考核和认可之后，可获得神华基金会提供的志愿服务证明；</p><p>4.就志愿服务工作对神华基金会提出建议和意见；</p><p>5.有权参加神华基金会的相关活动；</p><p>6.有权获取神华基金会的相关活动资料。</p><p><b>第九条&nbsp;</b>&nbsp;神华爱心志愿者的义务：</p><p>1.履行志愿服务承诺，服从管理，按照神华基金会的安排参加志愿服务活动；</p><p>2.自觉维护神华基金会形象，不得以志愿者身份从事任何以营利为目的或违背社会公德的活动；</p><p>3.在未征得基金会允许的前提下，不得超出约定的服务范围以神华基金会志愿者的身份对外开展活动；</p><p>4.不得对外披露在神华基金会从事志愿服务期间获得的神华基金会及相关利益人的各种非公开信息；</p><p>5.相关法律、法规及规章制度规定的其它义务。</p><p>&nbsp;</p><p><b>第四章&nbsp;&nbsp;申请加入与退出</b></p><p><b>第十条&nbsp;</b>&nbsp;申请人需填写统一格式的《神华爱心志愿者申请表》（附件二），并获得所在部门或单位负责人签字同意、加盖部门或单位公章后提交至办公室。</p><p><b>第十一条</b>&nbsp;&nbsp;办公室定期对申请者进行筛选，经过考察合格者即成为神华爱心志愿者，由办公室颁发志愿者证书，并组织志愿者审核小组定期审核。</p><p><b>第十二条&nbsp;</b>&nbsp;退出神华爱心志愿者应提交书面申请，并交回神华爱心志愿者证书；神华爱心志愿者如有严重违反志愿者要求和志愿精神的行为，经神华基金会研究决定，予以除名；神华爱心志愿者因工作调动或其他原因离开神华集团或其子（分）公司，按自行退出办理，不再办理有关手续，但其档案将在神华基金会保存三年。</p><p>&nbsp;</p><p><b>第五章&nbsp;&nbsp;志愿者培训和管理</b></p><p><b>第十三条&nbsp;</b>&nbsp;神华基金会为神华爱心志愿者提供培训，帮助神华爱心志愿者熟悉工作内容和工作方法，提升志愿服务理念、知识和有关技能。</p><p><b>第十四条&nbsp;</b>&nbsp;神华基金会负责建立神华爱心志愿者档案库，按小组分类进行制度化和规范化管理。</p><p><b>第十五条</b>&nbsp;&nbsp;神华爱心志愿者定期填写《神华爱心志愿者服务时间登记表》（附件三），办公室按季度和年度汇总，以此作为神华爱心志愿工作评估的依据。</p><p>&nbsp;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>第六章&nbsp;&nbsp;志愿者的评估和考核</b></p><p><b>第十六条</b>&nbsp;&nbsp;志愿者服务建立小时服务制，以完成志愿服务的小时作为志愿者的基本标准；计算时数以登记表的记录为主要考核依据。</p><p><b>第十七条</b>&nbsp;&nbsp;神华基金会依据考核结果及小组组长推荐，办公室在一定周期组织相关人员统一审查并评选优秀志愿者，为优秀志愿者颁发证书。</p><p><b>第十八条&nbsp;&nbsp;</b>神华爱心志愿者服务、活动及事迹等在神华基金会网站上定期更新。<b></b></p><p><b>第十九条&nbsp;</b>&nbsp;神华爱心志愿者有如下行为，视为自动退出神华基金会：</p><p>1.做出有损神华基金会声誉，造成重大社会不良影响；</p><p>2.加入志愿者后不参加志愿者活动和培训的。</p><p>&nbsp;</p><p><b>第七章&nbsp;&nbsp;志愿者保密协定及争议处理</b></p><p><b>第二十条&nbsp;</b>&nbsp;办公室需确保志愿者的个人资料保密。</p><p><b>第二十一条&nbsp;</b>&nbsp;如有需要在公众或公共媒体公布神华爱心志愿者姓名或经神华爱心志愿者指定的化名，将不涉及个人其他隐私。</p><p><b>第二十二条</b>&nbsp;&nbsp;神华爱心志愿者要尊重服务对象和合作伙伴的隐私和工作机密，对于机构的项目资料等，未经负责人同意，不得对外泄露或公布。</p><p><b>第二十三条&nbsp;</b>&nbsp;神华爱心志愿者应对自己的行为负责，承担因不符合或违反规定而导致的相关责任。</p><p><b>第二十四条</b>&nbsp;&nbsp;神华爱心志愿者如有违纪或违反社会公德的行为，给神华基金会造成严重影响的，经调查核实后，神华基金会有权做出终止使用该神华爱心志愿者的决定，并在网站和媒体上予以公告。</p><p><b>第二十五条</b>&nbsp;&nbsp;神华爱心志愿者如在履行职责并行使相关权利的时候，有其他违反法律法规的行为，一经发现，将依据法律交由相关部门处置。</p><p><b>第二十六条&nbsp;</b>&nbsp;如神华爱心志愿者对机构和服务有任何意见或不满，可向神华基金会负责人反映意见，谋求做出改善。如若双方就某一问题发生较大争议，可协商解决。</p>', null, '1544457600', '1', '5', 'B', '1', '1545187890', '2', '0');
INSERT INTO `lz_admin_article` VALUES ('19', '志愿者管理办法', '<section><div id=\"imageszoom\"><p align=\"center\"><strong>第一章&nbsp; 总&nbsp; 则</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp; 第一条 为组织和动员社会各界人士以志愿服务的形式参与发展中国人民与世界各国人民之间的友好事业，推动国际合作，维护世界和平，促进共同发展，加强对志愿者工作的管理，特制定本办法。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;第二条 志愿者（Volunteer，也称志愿人员、义工、志工）是指不以物质报酬为目的，基于良知、信念和责任，利用自己的时间、技能等资源，自愿参与本基金会组织开展的各项工作和活动，无偿为本基金会公益事业提供服务和帮助的人。</p><p align=\"center\"></p>\r\n<p align=\"center\"><strong>第二章&nbsp; 加入与退出</strong></p><p>&nbsp;&nbsp;&nbsp;&nbsp;第三条 基本条件：</p><p>&nbsp;&nbsp;&nbsp;&nbsp;（一）年满18周岁，身体健康；</p><p>&nbsp;&nbsp;&nbsp;&nbsp;（二）具有良好的思想道德品质和社会奉献精神；</p><p>&nbsp;&nbsp;&nbsp;&nbsp;（三）遵守国家的各项法律、法规和规章制度；</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;（四）具备为本基金会组织开展的有关活动提供志愿服务所必需的技能和时间。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;第四条 本基金会常年招募志愿者，并根据工作需要制定长期性志愿者招募计划和短期性志愿者招募计划。招募长期性志愿者应明确服务内容、服务时间和所需条件；短期性志愿者的招募由各部门根据项目基金活动需要，\r\n提出志愿者招募计划，或者直接推荐志愿者人选。有关志愿者的招募由项目部门统一负责，报秘书长办公室审批。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;第五条 志愿者可根据本基金会网站和其他媒体公布的服务需求信息，下载或向本基金会索取申请表格，填报并寄送本基金会，或者通过电子信箱递交加入申请表。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;第六条 申请者经本基金会批准确认，填写相关表格后即为本基金会注册志愿者。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;第七条 在履行志愿服务之前，本基金会与志愿者签订志愿者服务协议书。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;第八条 志愿者若遇特殊情况中止服务，须向本基金会提出书面申请。</p>\r\n<p align=\"center\"></p><p align=\"center\"><strong>第三章　权利和义务</strong></p><p>&nbsp;&nbsp;&nbsp;&nbsp;第九条&nbsp; 权利</p><p>&nbsp;&nbsp;&nbsp;&nbsp;（一）参加志愿服务活动；　　</p><p>&nbsp;&nbsp;&nbsp;&nbsp;（二）接受本基金会提供的与服务相关的志愿服务培训；　　</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;（三）获得从事志愿服务的必需条件和必要保障；</p><p>　　（四）优先获得志愿者组织和其他志愿者提供的服务；</p><p>　　（五）对志愿服务工作提出意见和建议； 　　</p><p>&nbsp;&nbsp;&nbsp;&nbsp;（六）相关法律、法规、政策所赋予的权利；　　</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;（七）可申请取消注册志愿者身份。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;第十条&nbsp; 义务</p><p>&nbsp;&nbsp;&nbsp; （一）遵守中国法律法规，志愿服务，不计报酬；</p><p>&nbsp;&nbsp;&nbsp; （二）遵守本基金会的有关规定，履行服务承诺，服从管理，按照本基金会管理部门的安排积极参加服务活动；</p>\r\n<p>&nbsp;&nbsp;&nbsp; （三）自觉抵制任何以志愿者身份从事的赢利活动或其他违背社会公德的活动（行为）；</p><p>&nbsp;&nbsp;&nbsp; （四）自觉维护本基金会志愿者的形象；</p><p>&nbsp;&nbsp;&nbsp; （五）自觉维护服务对象的合法权益；</p><p>&nbsp;&nbsp;&nbsp; （六）履行相关法律法规及其他规章制度规定的其它义务。</p>\r\n<p align=\"center\"></p><p align=\"center\"><strong>第四章　志愿服务</strong></p><p>&nbsp;&nbsp;&nbsp;&nbsp;第十一条&nbsp; 志愿者服务领域：符合本基金会宗旨和本基金会所开展的各类公益项目、活动；促进中外民间交往的活动；与和平、发展相关的其他公益活动。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;第十二条 志愿者服务形式包括但不限于翻译、文秘、档案、法律服务、财务服务、项目活动、礼仪接待、导游服务、后勤保障及本基金会其他工作的需要。</p><p align=\"center\"></p><p align=\"center\"><strong>第五章　组织与管理</strong></p><p>&nbsp;&nbsp;&nbsp; 第十三条 组织机构 　　</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;（一）本基金会负责志愿者工作的规划、协调和指导；　　</p><p>&nbsp;&nbsp;&nbsp;&nbsp;（二）本基金会负责注册志愿者的管理服务，建立健全宣传动员、注册登记、管理培训、考核评价、激励表彰等制度。 　</p><p>&nbsp;&nbsp;&nbsp;&nbsp;第十四条 日常管理</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;（一）凡申请成为本基金会志愿者，须填写《中国友好和平发展基金会志愿人员申请表》（后附个人简历），经志愿者录用部门审核后，报秘书长办公室及理事会审批。审批通过后，本基金会与申请者签订志愿服务协议，开始计算志愿服务期限。</p>\r\n<p>&nbsp;&nbsp;&nbsp; 以集体形式为本基金会大型公益活动提供志愿服务的临时志愿者，以集体名义与本基金会签订志愿服务协议，在协议后附上志愿者名单，并由志愿者本人签字认同志愿服务协议内容。</p><p>&nbsp;&nbsp;&nbsp; 本基金会为志愿者统一标识。志愿者在参加志愿服务时，要统一佩戴本基金会志愿者统一标识。</p>\r\n<p>&nbsp;&nbsp;&nbsp; （二）本基金会志愿者需接受相关志愿服务培训。由本基金会项目部门负责组织对志愿者进行培训，或由本基金会指派专业的第三方志愿者培训机构对志愿者进行培训。</p>\r\n<p>&nbsp;&nbsp;&nbsp; （三）志愿者由本基金会项目部门统一管理。管理内容包括：指导志愿者按照我基金会的有关规定和志愿服务协议开展工作，检查志愿者工作，评估其志愿服务质量，填写《志愿者服务评估表》。项目部门负责统一建立和管理志愿者档案和志愿者信息库。</p>\r\n<p>&nbsp;&nbsp;&nbsp; （四）项目部门如发现志愿者违反志愿服务协议的情况，可提前解除协议，报秘书长办公室及理事会批准后由项目部门办理。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;（五）本基金会对在开展活动中提供良好服务、表现出色的志愿者，采取以下鼓励措施：</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;1.将志愿者的表现和工作成绩反馈给其所在的单位或社区，或在本基金会自办刊物、网站进行宣传、推介；</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.向中国志愿者协会、北京市青年志愿者协会组织推荐，参与有关奖项的评比；</p><p>&nbsp;&nbsp;&nbsp;&nbsp;3.本基金会作为公益性组织，可作为在校学生实习基地，并为志愿者做出实习鉴定；</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;4.志愿者若申请本基金会项目资助，在同等条件下，享有优先权；</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;5.根据本制度上述原则，本基金会招募的长期性或短期性志愿者，均为本基金会提供无偿志愿服务。但本基金会亦或根据具体项目基金活动情况对服务于相应活动的长期性或短期性志愿者象征性地提供小额志愿服务补贴，相应费用从项目基金活动费用中列支。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;（六）凡有以下行为之一的志愿者，本基金会将注销其志愿者资格：</p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.违反国家有关法律法规的；</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.违反本基金会相关规定和本管理办法的；</p><p>&nbsp;&nbsp;&nbsp;&nbsp;3.向本基金会申请自愿退出的。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;（七）志愿者服务期满，志愿服务协议自动解除。若志愿者愿意继续提供志愿服务，须由本人提出书面申请，由项目部门对其志愿服务进行评估，提出是否续签协议的意见，经秘书长办公室及理事会审批后，交项目部门办理手续。</p><p align=\"center\"></p><p align=\"center\"><strong>第六章&nbsp; 附则</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;第十五条 本办法解释权属于中国友好和平发展基金会。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;第十六条 本办法自批准之日起执行。</p><p></p></div></section>\r\n', '20181219\\e2170c91ac0cd553e03a85f74492e722.doc', '1545148800', '1', '19', 'A', '1', '1545187431', '2', '0');

-- ----------------------------
-- Table structure for lz_admin_exchange
-- ----------------------------
DROP TABLE IF EXISTS `lz_admin_exchange`;
CREATE TABLE `lz_admin_exchange` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `stu_id` int(10) DEFAULT NULL COMMENT '学生id',
  `long_time` int(10) DEFAULT NULL COMMENT '总换时长',
  `exchange_time` int(10) DEFAULT NULL COMMENT '兑换时间',
  `remaining_time` int(10) DEFAULT NULL COMMENT '当前剩余时长',
  `do_redeem` int(10) DEFAULT NULL COMMENT '兑换积分',
  `credits` int(10) DEFAULT NULL COMMENT '现有学分',
  `status` int(10) DEFAULT NULL COMMENT '是否',
  PRIMARY KEY (`eid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_admin_exchange
-- ----------------------------
INSERT INTO `lz_admin_exchange` VALUES ('1', '298', '300', '900', '0', '15', '1350', '0');
INSERT INTO `lz_admin_exchange` VALUES ('2', '298', '61', '60', '1', '3', '3', null);

-- ----------------------------
-- Table structure for lz_admin_group
-- ----------------------------
DROP TABLE IF EXISTS `lz_admin_group`;
CREATE TABLE `lz_admin_group` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL DEFAULT '' COMMENT 'icon小图标',
  `sort` int(11) unsigned NOT NULL DEFAULT '50',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `isdelete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of lz_admin_group
-- ----------------------------
INSERT INTO `lz_admin_group` VALUES ('1', '系统管理', '&#xe61d;', '2', '1', '', '0', '1450752856', '1481180175');
INSERT INTO `lz_admin_group` VALUES ('2', '工具', '&#xe616;', '3', '1', '', '0', '1476016712', '1481180175');
INSERT INTO `lz_admin_group` VALUES ('3', '规章制度', '&amp;#xe623;', '50', '1', '', '0', '1544061495', '1544081680');
INSERT INTO `lz_admin_group` VALUES ('4', '往期活动管理', '&amp;#xe681;', '3', '1', '', '0', '1544061577', '1544081989');
INSERT INTO `lz_admin_group` VALUES ('5', '学院管理', '&amp;#xe62b;', '50', '1', '', '0', '1544061683', '1544082104');
INSERT INTO `lz_admin_group` VALUES ('6', '志愿者管理', '&amp;#xe638', '50', '1', '', '0', '1544061887', '1544081291');
INSERT INTO `lz_admin_group` VALUES ('7', ' 活动管理', '&amp;#xe687;', '50', '1', '', '0', '1544062514', '1544081808');
INSERT INTO `lz_admin_group` VALUES ('8', '成绩管理', '&amp;#xe618;', '50', '1', '', '0', '1544063969', '1544081967');
INSERT INTO `lz_admin_group` VALUES ('9', '岗位管理', '&amp;#xe637;', '50', '1', '', '0', '1544074754', '1544082050');
INSERT INTO `lz_admin_group` VALUES ('10', '111', '', '50', '1', '', '1', '1544142883', '1544142883');

-- ----------------------------
-- Table structure for lz_admin_node
-- ----------------------------
DROP TABLE IF EXISTS `lz_admin_node`;
CREATE TABLE `lz_admin_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '节点类型，1-控制器 | 0-方法',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '50',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `isdelete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`),
  KEY `isdelete` (`isdelete`),
  KEY `sort` (`sort`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=143 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of lz_admin_node
-- ----------------------------
INSERT INTO `lz_admin_node` VALUES ('1', '0', '1', 'Admin', '后台管理', '后台管理，不可更改', '1', '1', '1', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('2', '1', '1', 'AdminGroup', '分组管理', ' ', '2', '1', '1', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('3', '1', '1', 'AdminNode', '节点管理', ' ', '2', '1', '2', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('4', '1', '1', 'AdminRole', '角色管理', ' ', '2', '1', '3', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('5', '1', '1', 'AdminUser', '用户管理', '', '2', '1', '4', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('6', '1', '0', 'Index', '首页', '', '2', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('7', '6', '0', 'welcome', '欢迎页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('8', '6', '0', 'index', '未定义', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('9', '1', '2', 'Generate', '代码自动生成', '', '2', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('10', '1', '2', 'Demo/excel', 'Excel一键导出', '', '2', '0', '2', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('11', '1', '2', 'Demo/download', '下载', '', '2', '0', '3', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('12', '1', '2', 'Demo/downloadImage', '远程图片下载', '', '2', '0', '4', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('13', '1', '2', 'Demo/mail', '邮件发送', '', '2', '0', '5', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('14', '1', '2', 'Demo/qiniu', '七牛上传', '', '2', '0', '6', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('15', '1', '2', 'Demo/hashids', 'ID加密', '', '2', '0', '7', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('16', '1', '2', 'Demo/layer', '丰富弹层', '', '2', '0', '8', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('17', '1', '2', 'Demo/tableFixed', '表格溢出', '', '2', '0', '9', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('18', '1', '2', 'Demo/ueditor', '百度编辑器', '', '2', '0', '10', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('19', '1', '2', 'Demo/imageUpload', '图片上传', '', '2', '0', '11', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('20', '1', '2', 'Demo/qrcode', '二维码生成', '', '2', '0', '12', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('21', '1', '1', 'NodeMap', '节点图', '', '2', '1', '5', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('22', '1', '1', 'WebLog', '操作日志', '', '2', '1', '6', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('23', '1', '1', 'LoginLog', '登录日志', '', '2', '1', '7', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('59', '1', '2', 'one.two.three.Four/index', '多级节点', '', '2', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('24', '23', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('25', '22', '0', 'index', '列表', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('26', '22', '0', 'detail', '详情', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('27', '21', '0', 'load', '自动导入', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('28', '21', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('29', '5', '0', 'add', '添加', '', '3', '0', '51', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('30', '21', '0', 'edit', '编辑', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('31', '21', '0', 'deleteForever', '永久删除', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('32', '9', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('33', '9', '0', 'generate', '生成方法', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('34', '5', '0', 'password', '修改密码', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('35', '5', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('36', '5', '0', 'add', '添加', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('37', '5', '0', 'edit', '编辑', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('38', '4', '0', 'user', '用户列表', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('39', '4', '0', 'access', '授权', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('40', '4', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('41', '4', '0', 'add', '添加', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('42', '4', '0', 'edit', '编辑', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('43', '4', '0', 'forbid', '默认禁用操作', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('44', '4', '0', 'resume', '默认恢复操作', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('45', '3', '0', 'load', '节点快速导入测试', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('46', '3', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('47', '3', '0', 'add', '添加', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('48', '3', '0', 'edit', '编辑', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('49', '3', '0', 'forbid', '默认禁用操作', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('50', '3', '0', 'resume', '默认恢复操作', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('51', '2', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('52', '2', '0', 'add', '添加', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('53', '2', '0', 'edit', '编辑', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('54', '2', '0', 'forbid', '默认禁用操作', '', '2', '0', '0', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('55', '2', '0', 'resume', '默认恢复操作', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('56', '1', '2', 'one', '一级菜单', '', '2', '1', '13', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('60', '56', '2', 'two', '二级', '', '3', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('61', '60', '2', 'three', '三级菜单', '', '4', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('62', '61', '2', 'Four', '四级菜单', '', '5', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('63', '1', '5', 'Teaching', '学院管理', '', '2', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('64', '1', '4', 'PastAct', '往期活动列表', '', '2', '1', '4', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('65', '1', '6', 'StuApply', '待审核列表', '', '2', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('85', '1', '3', 'AdminArticle', '文章管理', '', '2', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('77', '1', '7', 'Pactivity', '正在进行', '', '2', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('76', '1', '7', 'Activity', '以往项目', '', '2', '1', '50', '1', '1');
INSERT INTO `lz_admin_node` VALUES ('84', '1', '9', 'Jobclass', '岗位列表', '', '2', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('81', '1', '8', 'StuActInfo', '学生成绩', '', '2', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('91', '1', '6', 'StuApproved', '志愿者列表', '', '2', '1', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('92', '84', '0', 'add', '添加', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('90', '0', '6', 'StuApproved', '志愿者列表', '', '1', '1', '50', '1', '1');
INSERT INTO `lz_admin_node` VALUES ('93', '84', '0', 'edit', '修改', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('94', '84', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('95', '84', '0', 'forbid', '默认禁用', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('96', '84', '0', 'resume', '默认恢复操作', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('97', '64', '0', 'add', '添加', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('98', '63', '0', 'add', '添加', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('99', '85', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('100', '64', '0', 'edit', '编辑', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('101', '63', '0', 'edit', '修改', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('102', '63', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('103', '85', '0', 'add', '添加', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('104', '65', '0', 'show', '显示', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('105', '63', '0', 'delete', '删除', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('106', '81', '0', 'lay', '查看详情', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('107', '65', '0', 'index', '显示', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('108', '85', '0', 'edit', '编辑', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('109', '81', '0', 'edit', '修改', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('110', '65', '0', 'status', '状态 通过退回', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('111', '64', '0', 'delete', '删除', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('112', '65', '0', 'edit', '修改', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('113', '64', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('114', '65', '0', 'xi', '系', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('115', '65', '0', 'ban', '班级', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('116', '85', '0', 'details', '查看详情', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('117', '85', '0', 'grade', '评分', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('118', '85', '0', 'check', '审核', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('119', '0', '7', 'index', '查看首页', '', '1', '0', '50', '1', '1');
INSERT INTO `lz_admin_node` VALUES ('120', '77', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('121', '77', '0', 'edit', '添加', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('122', '77', '0', 'audit', '学生处审批', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('123', '77', '0', 'issue', '发布活动', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('124', '77', '0', 'over', '结束活动', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('125', '77', '0', 'status', '申请人员审批', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('126', '77', '0', 'jobsta', '申请岗位审批', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('127', '5', '0', 'modal_upload_img', '图片上传', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('128', '5', '0', 'upimg', '图片裁剪', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('129', '84', '0', 'ldel', '删除', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('130', '81', '0', 'index', '首页', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('131', '81', '0', 'delete', '删除', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('132', '81', '0', 'recycleBin', '回收站', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('133', '85', '0', 'grade_check', '评分', '', '3', '0', '50', '1', '1');
INSERT INTO `lz_admin_node` VALUES ('134', '81', '0', 'addedit', '二级学院审核状态', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('135', '81', '0', 'addedits', '学院审核状态', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('136', '81', '0', 'filter', '搜索', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('137', '91', '0', 'show', '详情弹出层', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('138', '91', '0', 'index', '内容显示', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('139', '91', '0', 'edit', '修改', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('140', '91', '0', 'xi', '三级系', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('141', '91', '0', 'ban', '三级班', '', '3', '0', '50', '1', '0');
INSERT INTO `lz_admin_node` VALUES ('142', '84', '0', 'delete', '第三级删除', '', '3', '0', '50', '1', '1');

-- ----------------------------
-- Table structure for lz_admin_node_load
-- ----------------------------
DROP TABLE IF EXISTS `lz_admin_node_load`;
CREATE TABLE `lz_admin_node_load` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '名称',
  `status` tinyint(4) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='节点快速导入';

-- ----------------------------
-- Records of lz_admin_node_load
-- ----------------------------
INSERT INTO `lz_admin_node_load` VALUES ('4', '编辑', 'edit', '1');
INSERT INTO `lz_admin_node_load` VALUES ('5', '添加', 'add', '1');
INSERT INTO `lz_admin_node_load` VALUES ('6', '首页', 'index', '1');
INSERT INTO `lz_admin_node_load` VALUES ('7', '删除', 'delete', '1');

-- ----------------------------
-- Table structure for lz_admin_role
-- ----------------------------
DROP TABLE IF EXISTS `lz_admin_role`;
CREATE TABLE `lz_admin_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '名称',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `isdelete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `level` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parentId` (`pid`),
  KEY `status` (`status`),
  KEY `isdelete` (`isdelete`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of lz_admin_role
-- ----------------------------
INSERT INTO `lz_admin_role` VALUES ('1', '0', '领导组学生处', ' ', '1', '0', '1208784792', '1545200160', null);
INSERT INTO `lz_admin_role` VALUES ('2', '0', '网编组', ' ', '1', '0', '1215496283', '1454049929', null);
INSERT INTO `lz_admin_role` VALUES ('3', '0', '二级学院第一个老师', '他是老师', '1', '0', '1544065939', '1544065939', null);
INSERT INTO `lz_admin_role` VALUES ('4', '0', '二级学院第一个语文老师', '', '1', '0', '1544066800', '1544066800', null);
INSERT INTO `lz_admin_role` VALUES ('6', '0', '二级学院', '测试', '1', '0', '1544766604', '1545200149', null);
INSERT INTO `lz_admin_role` VALUES ('7', '0', '交通工程学院', '交通工程学院', '1', '0', '1545030203', '1545030203', null);

-- ----------------------------
-- Table structure for lz_admin_role_user
-- ----------------------------
DROP TABLE IF EXISTS `lz_admin_role_user`;
CREATE TABLE `lz_admin_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of lz_admin_role_user
-- ----------------------------
INSERT INTO `lz_admin_role_user` VALUES ('6', '8');
INSERT INTO `lz_admin_role_user` VALUES ('7', '4');
INSERT INTO `lz_admin_role_user` VALUES ('7', '8');
INSERT INTO `lz_admin_role_user` VALUES ('6', '16');
INSERT INTO `lz_admin_role_user` VALUES ('1', '20');

-- ----------------------------
-- Table structure for lz_admin_user
-- ----------------------------
DROP TABLE IF EXISTS `lz_admin_user`;
CREATE TABLE `lz_admin_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `account` char(32) NOT NULL DEFAULT '',
  `realname` varchar(255) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `coll` varchar(5) DEFAULT NULL COMMENT '所属学院',
  `password` char(32) NOT NULL DEFAULT '',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0',
  `last_login_ip` char(15) NOT NULL DEFAULT '',
  `login_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '',
  `mobile` char(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `isdelete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `accounlzassword` (`account`,`password`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of lz_admin_user
-- ----------------------------
INSERT INTO `lz_admin_user` VALUES ('1', '/uploads/20181217120653.png', 'admin', '超级管理员', '', 'e10adc3949ba59abbe56e057f20f883e', '1545217250', '127.0.0.1', '603', 'tianpian0805@gmail.com', '13121126169', '我是超级管理员', '1', '0', '1222907803', '1451033528');
INSERT INTO `lz_admin_user` VALUES ('2', '', 'demo', '测试人员', '5', 'e10adc3949ba59abbe56e057f20f883e', '1545098133', '127.0.0.1', '7', '', '', '', '1', '0', '1476777133', '1477399793');
INSERT INTO `lz_admin_user` VALUES ('0', '', 'admins', '待审核', '1', '', '0', '', '0', '', '', '[审批需要勿删]', '1', '0', '0', '0');
INSERT INTO `lz_admin_user` VALUES ('4', '/uploads/20181216191908.png', 'user', '用户', '6', 'd41d8cd98f00b204e9800998ecf8427e', '1544686343', '127.0.0.1', '2', '', '', '', '1', '0', '1544408637', '1544959150');
INSERT INTO `lz_admin_user` VALUES ('8', '/uploads/20181217113104.png', 'demos', '王瑾', '4', 'e10adc3949ba59abbe56e057f20f883e', '1545201298', '127.0.0.1', '18', 'tianpian8888@gmail.com', '13121126169', '我是管理员', '1', '0', '1222907803', '1544959119');
INSERT INTO `lz_admin_user` VALUES ('16', '/uploads/20181217155253.png', '01002', '王老师', '3', 'd41d8cd98f00b204e9800998ecf8427e', '1545031000', '127.0.0.1', '1', '123@126.com', '13211122222', '123', '1', '0', '1545030907', '1545100791');
INSERT INTO `lz_admin_user` VALUES ('15', '/uploads/20181216192029.png', 'twoadmin', '第二个测试', '5', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', '0', '', '', '测试数据', '1', '0', '1544779934', '1545100799');
INSERT INTO `lz_admin_user` VALUES ('21', '/uploads/20181218154559.png', 'wangyixiao', '王义晓', '5', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', '0', 'tianpian8888@gmail.com', '13154678912', '', '1', '0', '1545101399', '1545119168');
INSERT INTO `lz_admin_user` VALUES ('19', '/uploads/20181218154728.png', 'ceshi', '测试啊啊1', '1', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', '0', 'tianpian8888@gmail.com', '13154678912', '', '1', '0', '1545100447', '1545119254');
INSERT INTO `lz_admin_user` VALUES ('20', '/uploads/20181218154709.png', '8889', '翟金凯', '6', 'e10adc3949ba59abbe56e057f20f883e', '1545201891', '127.0.0.1', '6', '12232442@qq.com', '18306543639', '项目管理员', '1', '0', '1545101030', '1545119233');
INSERT INTO `lz_admin_user` VALUES ('22', '/uploads/20181219102604.png', 'ss', '屎屎', '1', 'e10adc3949ba59abbe56e057f20f883e', '0', '', '0', 'tianpian8888@gmail.com', '13154678912', '', '1', '0', '1545186394', '1545186394');
INSERT INTO `lz_admin_user` VALUES ('23', '/uploads/20181219110027.png', 'aa', '测试啊啊啊', '1', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', '0', 'tianpian8888@gmail.com', '13154678912', '', '1', '0', '1545188446', '1545188462');

-- ----------------------------
-- Table structure for lz_applications
-- ----------------------------
DROP TABLE IF EXISTS `lz_applications`;
CREATE TABLE `lz_applications` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `aid` int(10) unsigned DEFAULT NULL COMMENT '活动方案id',
  `sid` int(10) unsigned DEFAULT NULL COMMENT '参与学生id',
  `filingdate` datetime DEFAULT NULL COMMENT '申请日期',
  `status` int(1) DEFAULT '0' COMMENT '状态',
  `auditor` int(10) DEFAULT NULL COMMENT '审核人员',
  `moddate` datetime DEFAULT NULL COMMENT '审核日期',
  `reason` varchar(255) DEFAULT '人数已满' COMMENT '原因',
  `isdelete` varchar(2) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_applications
-- ----------------------------
INSERT INTO `lz_applications` VALUES ('1', '5', '1', '2018-12-13 19:05:27', '1', '1', '2018-12-13 20:57:19', '不好意思', '0');
INSERT INTO `lz_applications` VALUES ('2', '5', '298', '2019-01-04 20:03:59', '0', null, null, '人数已满', '0');
INSERT INTO `lz_applications` VALUES ('3', '3', '298', '2018-12-17 20:04:37', '0', null, null, '人数已满', '0');
INSERT INTO `lz_applications` VALUES ('4', '6', '298', '2018-12-25 20:04:40', '0', null, null, '人数已满', '0');

-- ----------------------------
-- Table structure for lz_experience
-- ----------------------------
DROP TABLE IF EXISTS `lz_experience`;
CREATE TABLE `lz_experience` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `sid` int(10) DEFAULT NULL COMMENT '学生id',
  `area` varchar(200) DEFAULT NULL COMMENT '工作地区',
  `company` varchar(200) DEFAULT NULL COMMENT '公司名称',
  `Jobduties` varchar(200) DEFAULT NULL COMMENT '工作职务',
  `starttime` int(10) DEFAULT NULL COMMENT '开始时间',
  `endtime` int(10) DEFAULT NULL COMMENT '结束时间',
  `zid` char(50) DEFAULT NULL,
  PRIMARY KEY (`eid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=318 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_experience
-- ----------------------------
INSERT INTO `lz_experience` VALUES ('1', '1', '山东交通技师学院1', '大智软件开发', '无工作职位', '2147483647', '2147483647', '1544007075');
INSERT INTO `lz_experience` VALUES ('2', '1', '中银软件园', 'BUG公司', '普通职员', '2147483647', '2147483647', '1544007075');
INSERT INTO `lz_experience` VALUES ('3', '1', '工作地区', '公司名称', '无工作职位', '2147483647', '2147483647', '1544007075');
INSERT INTO `lz_experience` VALUES ('259', '240', '临沂', '工厂', '员工', '2147483647', '2147483647', '1544953442');
INSERT INTO `lz_experience` VALUES ('258', '239', '临沂', '工厂', '员工', '2147483647', '2147483647', '1544953367');
INSERT INTO `lz_experience` VALUES ('260', '240', '北京', '工厂', '员工', '2147483647', '2147483647', '1544953473');
INSERT INTO `lz_experience` VALUES ('261', '241', '北京', '工厂', '员工', '2147483647', '2147483647', '1544953663');
INSERT INTO `lz_experience` VALUES ('286', '257', '上海', '上海科技', '程序员', '2018', '2018', '1545009727');
INSERT INTO `lz_experience` VALUES ('287', '257', '上海', '上海科技', '程序员', '2018', '2018', '1545009797');
INSERT INTO `lz_experience` VALUES ('292', '295', '广西', '广西科技', '程序员', '2018', '2018', '1545016843');
INSERT INTO `lz_experience` VALUES ('289', '263', '济宁', '济宁科技', '程序员', '2018', '2018', '1545011859');
INSERT INTO `lz_experience` VALUES ('306', null, '', '', '', '0', '0', '1545094840');
INSERT INTO `lz_experience` VALUES ('305', '306', '', '', '', '0', '0', '1545092373');
INSERT INTO `lz_experience` VALUES ('304', '305', '', '', '', '0', '0', '1545090923');
INSERT INTO `lz_experience` VALUES ('303', '304', '', '', '', '0', '0', '1545051566');
INSERT INTO `lz_experience` VALUES ('302', '303', '', '', '', '0', '0', '1545050767');
INSERT INTO `lz_experience` VALUES ('301', '302', '', '', '', '0', '0', '1545050668');
INSERT INTO `lz_experience` VALUES ('300', '301', '', '', '', '0', '0', '1545050111');
INSERT INTO `lz_experience` VALUES ('299', '300', '', '', '', '0', '0', '1545049892');
INSERT INTO `lz_experience` VALUES ('297', '298', '测试地区', '测试公司', '测试植物', '2018', '2018', '1545018078');
INSERT INTO `lz_experience` VALUES ('296', '297', '长城', '长城科技', '程序盐', '2018', '2018', '1545017945');
INSERT INTO `lz_experience` VALUES ('295', '297', '长城', '成成科技', '程序员', '2018', '2018', '1545017883');
INSERT INTO `lz_experience` VALUES ('298', '299', '临沂河东', '临沂大智信息科技有限公司', 'php程序员', '2018', '2018', '1545027697');
INSERT INTO `lz_experience` VALUES ('283', '255', '临沂', '工厂', '员工', '2018', '2018', '1545007487');
INSERT INTO `lz_experience` VALUES ('274', '252', '临沂', '工厂', '流水线生产', '2018', '2018', '1544965270');
INSERT INTO `lz_experience` VALUES ('273', '251', '临沂', '工厂', '流水线生产', '2018', '2018', '1544965071');
INSERT INTO `lz_experience` VALUES ('262', '242', '北京', '工厂', '员工', '2147483647', '2147483647', '1544953767');
INSERT INTO `lz_experience` VALUES ('265', '243', '菏泽', '菏泽', '菏泽', '2147483647', '2147483647', '1544954091');
INSERT INTO `lz_experience` VALUES ('285', '256', '河北', '河北科技', '程序员', '2018', '2018', '1545007856');
INSERT INTO `lz_experience` VALUES ('284', '256', '河南', '河南科技', '程序员', '2018', '2018', '1545007805');
INSERT INTO `lz_experience` VALUES ('267', '245', '青岛', '青岛科技', '程序员', '2147483647', '2147483647', '1544955855');
INSERT INTO `lz_experience` VALUES ('268', '246', '武汉', '武汉科技', '程序员', '2147483647', '2147483647', '1544955976');
INSERT INTO `lz_experience` VALUES ('269', '247', 'l临沂', 'l临沂科技', '员工', '2147483647', '2147483647', '1544960287');
INSERT INTO `lz_experience` VALUES ('270', '248', '临沂', '林益科技', '程序员', '2147483647', '2147483647', '1544961969');
INSERT INTO `lz_experience` VALUES ('271', '249', '临沂', '工厂', '流水线生产', '2018', '2018', '1544964862');
INSERT INTO `lz_experience` VALUES ('272', '250', '临沂', '工厂', '流水线生产', '2018', '2018', '1544965007');
INSERT INTO `lz_experience` VALUES ('293', '295', '广西', '广西科技', '程序员', '2018', '2018', '1545016906');
INSERT INTO `lz_experience` VALUES ('291', '267', '潍坊', '潍坊科技', '程序员', '2018', '2018', '1545012180');
INSERT INTO `lz_experience` VALUES ('290', '265', '黄岛', '黄导科技', '程序盐', '2018', '2018', '1545012014');
INSERT INTO `lz_experience` VALUES ('264', '254', '菏泽', '菏泽', '菏泽', '2147483647', '2147483647', '1544954044');
INSERT INTO `lz_experience` VALUES ('307', '308', '临沂', '大致公司', '程序员', '2018', '2018', '1545095341');
INSERT INTO `lz_experience` VALUES ('308', '309', '山东沂南', '沂南服装厂', '流水线员工', '2018', '2018', '1545098028');
INSERT INTO `lz_experience` VALUES ('316', '315', '', '', '', '0', '0', '1545114387');
INSERT INTO `lz_experience` VALUES ('314', '314', '临沂', '临沂科技', '敲代码', '2018', '2018', '1545113066');
INSERT INTO `lz_experience` VALUES ('310', '311', '', '', '', '0', '0', '1545104433');
INSERT INTO `lz_experience` VALUES ('311', '312', '南京', '南京工厂', '程序员', '2018', '2018', '1545104543');
INSERT INTO `lz_experience` VALUES ('312', '313', '临沂', '临沂大智信息科技公司', '敲代码', '2018', '2018', '1545106682');
INSERT INTO `lz_experience` VALUES ('313', '313', '菏泽', '菏泽科技公司', '敲代码', '2018', '2018', '1545106747');
INSERT INTO `lz_experience` VALUES ('315', '314', '河北', '河北科技', '程序员', '2018', '2018', '1545113253');
INSERT INTO `lz_experience` VALUES ('317', null, '1', '1', '1', '2018', '2018', '1545116027');

-- ----------------------------
-- Table structure for lz_file
-- ----------------------------
DROP TABLE IF EXISTS `lz_file`;
CREATE TABLE `lz_file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '文件类型，1-image | 2-file',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '文件名',
  `original` varchar(255) NOT NULL DEFAULT '' COMMENT '原文件名',
  `domain` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_file
-- ----------------------------
INSERT INTO `lz_file` VALUES ('1', '1', 'image/jphyxchs_1xfgjjtnu1q85c0e0f303dfa7.jpg', '14876553442271222.jpg', '', 'image/jpeg', '28210', '1544425266');
INSERT INTO `lz_file` VALUES ('2', '3', '/tmp/uploads/20181211\\0718a6f7875ee5b853443bb6e403068f.jpg', '14876553442271222.jpg', '', 'image/jpeg', '28210', '1544509279');
INSERT INTO `lz_file` VALUES ('3', '3', '/tmp/uploads/20181211\\4802ef6dec220134c068fba25a07dd3e.jpg', '14876553442271222.jpg', '', 'image/jpeg', '28210', '1544509415');
INSERT INTO `lz_file` VALUES ('4', '3', '/tmp/uploads/20181211\\15fa61aa238b7488f809f0b6a44aea4f.jpg', '01d2b25ab1337fa80120be14b5660a.jpg@1280w_1l_2o_100sh.jpg', '', 'image/jpeg', '386273', '1544509553');
INSERT INTO `lz_file` VALUES ('5', '3', '/tmp/uploads/20181211\\027a38f6eaf20d1c38f311a6a02efa5b.jpg', '1-1p1031j505454.jpg', '', 'image/jpeg', '59656', '1544516292');
INSERT INTO `lz_file` VALUES ('6', '3', '/tmp/uploads/20181213\\7639aa6c3d7a81c97e0ab32c9033dfae.jpg', '1-1p1040943590-l.jpg', '', 'image/jpeg', '12949', '1544662131');
INSERT INTO `lz_file` VALUES ('7', '3', '/tmp/uploads/20181213\\a75074f975f862a682af90f88808bf67.jpg', '1-1p1040934390-l.jpg', '', 'image/jpeg', '15412', '1544664144');
INSERT INTO `lz_file` VALUES ('8', '3', '/tmp/uploads/20181213\\e01eb4b924ce16cccf7a706764c4f747.jpg', '1-1p104093i20-l.jpg', '', 'image/jpeg', '17078', '1544665584');
INSERT INTO `lz_file` VALUES ('9', '3', '/tmp/uploads/20181214\\95d4212707d89c6d1aba854813d5f69b.jpg', '0c6f463eed216802291a97356efd6a9e.jpg', '', 'image/jpeg', '616691', '1544776140');
INSERT INTO `lz_file` VALUES ('10', '3', '/tmp/uploads/20181214\\befe8847442624cd8676441351fabbe8.jpg', '01d2b25ab1337fa80120be14b5660a.jpg@1280w_1l_2o_100sh.jpg', '', 'image/jpeg', '386273', '1544776314');
INSERT INTO `lz_file` VALUES ('11', '3', '/tmp/uploads/20181216\\5a905b09a86bd89bea070c0f1c4f5d7c.jpg', '1-1p1031k2330-l.jpg', '', 'image/jpeg', '91199', '1544958344');
INSERT INTO `lz_file` VALUES ('12', '3', '/tmp/uploads/20181216\\307c220416f23a8a61b3fcf05bdf297c.jpeg', '2c026a2824226ab699f286b171c106ec.jpeg', '', 'image/jpeg', '86270', '1544964697');
INSERT INTO `lz_file` VALUES ('13', '3', '/tmp/uploads/20181218\\79dbc8388c228bda3a31e151d753b8be.jpg', '4ed577d5499c829498122f5bfb1b4e8d.jpg', '', 'image/jpeg', '99761', '1545103148');
INSERT INTO `lz_file` VALUES ('14', '3', '/tmp/uploads/20181218\\2f8637efce1aaf186fede974ef02f979.jpg', '7bf1b6ba84534845a482baf1804eafb0.jpg', '', 'image/jpeg', '281654', '1545104071');
INSERT INTO `lz_file` VALUES ('15', '3', '/tmp/uploads/20181218\\b4a375464f3fb7816eb8d7f3955c56d4.jpg', '6f2bcaee51de7a3c2a80edb709354087.jpg', '', 'image/jpeg', '47939', '1545104122');
INSERT INTO `lz_file` VALUES ('16', '1', 'image/jpti4j9c_72j38d0uhukg5c18b350e33f3.jpg', '5abd0172fb1966040afe7f2e5c313d4d.jpg', '', 'image/jpeg', '25021', '1545122643');
INSERT INTO `lz_file` VALUES ('17', '1', 'image/jpti5fo0_c1xv6m0fc7w5c18b37a0ac31.jpg', '14876553442271222.jpg', '', 'image/jpeg', '28210', '1545122682');

-- ----------------------------
-- Table structure for lz_honor
-- ----------------------------
DROP TABLE IF EXISTS `lz_honor`;
CREATE TABLE `lz_honor` (
  `hid` int(10) NOT NULL AUTO_INCREMENT,
  `sid` int(10) DEFAULT NULL COMMENT '学生id',
  `award_name` varchar(50) DEFAULT NULL COMMENT '奖项名称',
  `award_unit` varchar(50) DEFAULT NULL COMMENT '颁奖单位',
  `award_date` datetime DEFAULT NULL COMMENT '获奖日期',
  `zid` char(50) DEFAULT NULL,
  PRIMARY KEY (`hid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=307 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_honor
-- ----------------------------
INSERT INTO `lz_honor` VALUES ('1', '1', '最佳BUG奖', '大智软件开发', '2018-12-13 00:00:00', '0');
INSERT INTO `lz_honor` VALUES ('2', '1', '最佳BUG奖', '大智软件开发', '2018-12-13 00:00:00', '0');
INSERT INTO `lz_honor` VALUES ('3', '2', '奖项', '奖项', '2018-12-05 00:00:00', '0');
INSERT INTO `lz_honor` VALUES ('4', '2', '最佳BUG奖', '大智软件开发', '2018-12-13 20:41:43', '0');
INSERT INTO `lz_honor` VALUES ('5', '2', '荣誉奖', '交院', '2018-12-05 00:00:00', '0');
INSERT INTO `lz_honor` VALUES ('6', '2', '奖励', '奖励', '2018-11-28 00:00:00', '0');
INSERT INTO `lz_honor` VALUES ('7', '136', '荣誉奖', '交院', '2018-12-05 00:00:00', '0');
INSERT INTO `lz_honor` VALUES ('8', '136', '荣誉奖', '交院', '2018-12-05 00:00:00', '0');
INSERT INTO `lz_honor` VALUES ('9', '244', '顺顺', '学校', '2018-12-16 00:00:00', '1544954090');
INSERT INTO `lz_honor` VALUES ('10', '243', '讲讲', '讲讲', '2018-12-05 00:00:00', '1544954091');
INSERT INTO `lz_honor` VALUES ('11', '244', '顺顺', '学校', '2018-12-23 00:00:00', '1544954075');
INSERT INTO `lz_honor` VALUES ('12', '243', '奖励', '奖励', '2018-11-29 00:00:00', '1544954076');
INSERT INTO `lz_honor` VALUES ('13', '248', '最高工资奖', '林益科技', '2018-12-13 00:00:00', '1544961969');
INSERT INTO `lz_honor` VALUES ('14', '247', '奖励', '奖励', '2018-12-05 00:00:00', '1544960287');
INSERT INTO `lz_honor` VALUES ('15', '245', '优秀奖', '青岛科技', '2018-12-06 00:00:00', '1544955855');
INSERT INTO `lz_honor` VALUES ('16', '246', '科技奖', '武汉科技', '2018-12-06 00:00:00', '1544955976');
INSERT INTO `lz_honor` VALUES ('269', '256', '科技奖1', '交院', '2018-12-13 00:00:00', '1545007844');
INSERT INTO `lz_honor` VALUES ('266', '252', '没有', '没有', '2018-12-14 00:00:00', '1544954090');
INSERT INTO `lz_honor` VALUES ('268', '255', '进步奖', '交院', '2018-12-13 00:00:00', '1545007487');
INSERT INTO `lz_honor` VALUES ('270', '256', '科技奖2', '交院', '2018-12-07 00:00:00', '1545007856');
INSERT INTO `lz_honor` VALUES ('275', '257', '科技奖', '交院', '2018-12-05 00:00:00', '1545009773');
INSERT INTO `lz_honor` VALUES ('276', '257', '进步奖', '交院', '2018-12-19 00:00:00', '1545009786');
INSERT INTO `lz_honor` VALUES ('277', '257', '成就奖', '交院', '2018-12-05 00:00:00', '1545009797');
INSERT INTO `lz_honor` VALUES ('282', '295', '科技成就奖', '交院', '2018-12-13 00:00:00', '1545016881');
INSERT INTO `lz_honor` VALUES ('280', '265', '科技奖', '教院', '2018-12-06 00:00:00', '1545012014');
INSERT INTO `lz_honor` VALUES ('279', '263', '成就奖', '交院', '2018-12-06 00:00:00', '1545011859');
INSERT INTO `lz_honor` VALUES ('281', '267', '科技奖', '交院', '2018-12-06 00:00:00', '1545012180');
INSERT INTO `lz_honor` VALUES ('283', '295', '科技成就奖', '交院', '2018-12-04 00:00:00', '1545016906');
INSERT INTO `lz_honor` VALUES ('289', '299', '山东省大学生电子与信息大赛二等奖', '山东省人社厅', '2018-10-10 00:00:00', '1545027697');
INSERT INTO `lz_honor` VALUES ('285', '297', '科技奖', '交院', '2018-12-05 00:00:00', '1545017920');
INSERT INTO `lz_honor` VALUES ('286', '297', '科技成就奖', '教院', '2018-11-28 00:00:00', '1545017932');
INSERT INTO `lz_honor` VALUES ('287', '297', '科技长久将', '交院', '2018-11-29 00:00:00', '1545017945');
INSERT INTO `lz_honor` VALUES ('288', '298', '测试奖励', '测试单位', '2018-12-20 00:00:00', '1545018078');
INSERT INTO `lz_honor` VALUES ('305', '314', '成就奖', '交院', '2018-12-06 00:00:00', '1545113253');
INSERT INTO `lz_honor` VALUES ('292', '302', '', '', '0000-00-00 00:00:00', '1545050668');
INSERT INTO `lz_honor` VALUES ('293', '303', '', '', '0000-00-00 00:00:00', '1545050767');
INSERT INTO `lz_honor` VALUES ('295', '305', '', '', '0000-00-00 00:00:00', '1545090923');
INSERT INTO `lz_honor` VALUES ('296', '306', '', '', '0000-00-00 00:00:00', '1545092373');
INSERT INTO `lz_honor` VALUES ('297', null, '', '', '0000-00-00 00:00:00', '1545094840');
INSERT INTO `lz_honor` VALUES ('306', '315', '', '', '0000-00-00 00:00:00', '1545114387');
INSERT INTO `lz_honor` VALUES ('298', '308', '', '', '0000-00-00 00:00:00', '1545095341');
INSERT INTO `lz_honor` VALUES ('299', '309', '没有', '没有', '2018-11-28 00:00:00', '1545098028');
INSERT INTO `lz_honor` VALUES ('300', '310', '', '', '0000-00-00 00:00:00', '1545099132');
INSERT INTO `lz_honor` VALUES ('301', '311', '', '', '0000-00-00 00:00:00', '1545104433');
INSERT INTO `lz_honor` VALUES ('302', '312', '没有', '没有', '2018-11-30 00:00:00', '1545104543');
INSERT INTO `lz_honor` VALUES ('303', '313', '代码奖', '交院', '2018-12-18 00:00:00', '1545106734');
INSERT INTO `lz_honor` VALUES ('304', '313', '代码奖', '交院', '2018-12-18 00:00:00', '1545106747');

-- ----------------------------
-- Table structure for lz_jobclass
-- ----------------------------
DROP TABLE IF EXISTS `lz_jobclass`;
CREATE TABLE `lz_jobclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '岗位id',
  `pname` char(100) NOT NULL COMMENT '岗位名称',
  `pid` int(11) DEFAULT NULL COMMENT '所属管理id',
  `status` varchar(2) DEFAULT '1' COMMENT '状态',
  `isdelete` varchar(2) DEFAULT '0',
  `describe` varchar(255) DEFAULT NULL COMMENT '岗位描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_jobclass
-- ----------------------------
INSERT INTO `lz_jobclass` VALUES ('1', '志愿队伍主席', '0', '1', '0', '带领所有本队伍志愿者一起工作');
INSERT INTO `lz_jobclass` VALUES ('2', '文宣部主席', '1', '1', '0', '负责队伍的所有宣传活动,并带领本队的人协助队伍主席进行宣传活动,');
INSERT INTO `lz_jobclass` VALUES ('4', '文宣部副队长1', '2', '1', '0', '带领所有本队伍志愿者一起工作');
INSERT INTO `lz_jobclass` VALUES ('5', '文宣部副队长2', '2', '1', '0', '带领所有本队伍志愿者一起工作');
INSERT INTO `lz_jobclass` VALUES ('11', '宣传员', '2', '1', '0', '带领所有本队伍志愿者一起工作');
INSERT INTO `lz_jobclass` VALUES ('13', '布景员', '2', '1', '0', '带领所有本队伍志愿者一起工作');
INSERT INTO `lz_jobclass` VALUES ('23', '秘书处组长', '22', '1', '0', '秘书处组长');
INSERT INTO `lz_jobclass` VALUES ('18', '文宣部副队长1', '2', '1', '0', '带领所有本队伍志愿者一起工作');
INSERT INTO `lz_jobclass` VALUES ('21', '布景员', '2', '1', '1', '带领所有本队伍志愿者一起工作');
INSERT INTO `lz_jobclass` VALUES ('20', '宣传员', '2', '1', '0', '带领所有本队伍志愿者一起工作');
INSERT INTO `lz_jobclass` VALUES ('24', '秘书处队长', '22', '1', '0', '秘书');
INSERT INTO `lz_jobclass` VALUES ('22', '秘书处', '1', '1', '0', '秘书');
INSERT INTO `lz_jobclass` VALUES ('19', '文宣部副队长2', '2', '1', '1', '带领所有本队伍志愿者一起工作');
INSERT INTO `lz_jobclass` VALUES ('25', '队员1', '22', '1', '0', '队员');
INSERT INTO `lz_jobclass` VALUES ('26', '队员2', '22', '1', '0', '队员');

-- ----------------------------
-- Table structure for lz_login_log
-- ----------------------------
DROP TABLE IF EXISTS `lz_login_log`;
CREATE TABLE `lz_login_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `login_ip` char(15) NOT NULL DEFAULT '',
  `login_location` varchar(255) NOT NULL DEFAULT '',
  `login_browser` varchar(255) NOT NULL DEFAULT '',
  `login_os` varchar(255) NOT NULL DEFAULT '',
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_login_log
-- ----------------------------
INSERT INTO `lz_login_log` VALUES ('1', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-06 10:30:31');
INSERT INTO `lz_login_log` VALUES ('2', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-06 11:08:48');
INSERT INTO `lz_login_log` VALUES ('3', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-06 11:34:57');
INSERT INTO `lz_login_log` VALUES ('4', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-06 15:01:44');
INSERT INTO `lz_login_log` VALUES ('5', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-06 15:18:10');
INSERT INTO `lz_login_log` VALUES ('6', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-06 15:32:36');
INSERT INTO `lz_login_log` VALUES ('7', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-06 19:32:05');
INSERT INTO `lz_login_log` VALUES ('8', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-06 19:35:20');
INSERT INTO `lz_login_log` VALUES ('9', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-06 20:27:08');
INSERT INTO `lz_login_log` VALUES ('10', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-07 07:36:24');
INSERT INTO `lz_login_log` VALUES ('11', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-07 07:56:35');
INSERT INTO `lz_login_log` VALUES ('12', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-07 07:59:18');
INSERT INTO `lz_login_log` VALUES ('13', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-07 08:23:58');
INSERT INTO `lz_login_log` VALUES ('14', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-07 08:42:22');
INSERT INTO `lz_login_log` VALUES ('15', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-07 09:03:34');
INSERT INTO `lz_login_log` VALUES ('16', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-07 09:06:23');
INSERT INTO `lz_login_log` VALUES ('17', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-07 09:21:04');
INSERT INTO `lz_login_log` VALUES ('18', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-07 09:31:01');
INSERT INTO `lz_login_log` VALUES ('19', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-07 09:31:09');
INSERT INTO `lz_login_log` VALUES ('20', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(62.0)', 'Windows 10', '2018-12-07 09:37:37');
INSERT INTO `lz_login_log` VALUES ('21', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-07 14:19:53');
INSERT INTO `lz_login_log` VALUES ('22', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-07 14:23:14');
INSERT INTO `lz_login_log` VALUES ('23', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-08 14:50:46');
INSERT INTO `lz_login_log` VALUES ('24', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-08 15:05:56');
INSERT INTO `lz_login_log` VALUES ('25', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-08 15:47:07');
INSERT INTO `lz_login_log` VALUES ('26', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-08 15:47:35');
INSERT INTO `lz_login_log` VALUES ('27', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-08 18:04:21');
INSERT INTO `lz_login_log` VALUES ('28', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-09 18:13:30');
INSERT INTO `lz_login_log` VALUES ('29', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-09 18:16:23');
INSERT INTO `lz_login_log` VALUES ('30', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-09 18:47:43');
INSERT INTO `lz_login_log` VALUES ('31', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-09 19:08:17');
INSERT INTO `lz_login_log` VALUES ('32', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-09 21:02:45');
INSERT INTO `lz_login_log` VALUES ('33', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-10 07:50:07');
INSERT INTO `lz_login_log` VALUES ('34', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-10 07:52:18');
INSERT INTO `lz_login_log` VALUES ('35', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 09:03:44');
INSERT INTO `lz_login_log` VALUES ('36', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-10 09:05:03');
INSERT INTO `lz_login_log` VALUES ('37', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 09:28:03');
INSERT INTO `lz_login_log` VALUES ('38', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(58.0.3029.110)', 'Windows 10', '2018-12-10 09:28:44');
INSERT INTO `lz_login_log` VALUES ('39', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 09:29:33');
INSERT INTO `lz_login_log` VALUES ('40', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-10 09:33:06');
INSERT INTO `lz_login_log` VALUES ('41', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-10 09:34:28');
INSERT INTO `lz_login_log` VALUES ('42', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 09:34:30');
INSERT INTO `lz_login_log` VALUES ('43', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(71.0.3578.80)', 'Windows 10', '2018-12-10 09:35:57');
INSERT INTO `lz_login_log` VALUES ('44', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 09:46:33');
INSERT INTO `lz_login_log` VALUES ('45', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-10 09:52:41');
INSERT INTO `lz_login_log` VALUES ('46', '4', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 10:24:38');
INSERT INTO `lz_login_log` VALUES ('47', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 10:41:51');
INSERT INTO `lz_login_log` VALUES ('48', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 10:49:50');
INSERT INTO `lz_login_log` VALUES ('49', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 10:54:45');
INSERT INTO `lz_login_log` VALUES ('50', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-10 11:39:25');
INSERT INTO `lz_login_log` VALUES ('51', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-10 11:50:14');
INSERT INTO `lz_login_log` VALUES ('52', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(58.0.3029.110)', 'Windows 10', '2018-12-10 13:17:29');
INSERT INTO `lz_login_log` VALUES ('53', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 14:03:20');
INSERT INTO `lz_login_log` VALUES ('54', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 14:16:36');
INSERT INTO `lz_login_log` VALUES ('55', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 14:16:41');
INSERT INTO `lz_login_log` VALUES ('56', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-10 14:19:21');
INSERT INTO `lz_login_log` VALUES ('57', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 14:20:16');
INSERT INTO `lz_login_log` VALUES ('58', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 15:18:57');
INSERT INTO `lz_login_log` VALUES ('59', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-10 15:53:46');
INSERT INTO `lz_login_log` VALUES ('60', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-10 15:56:26');
INSERT INTO `lz_login_log` VALUES ('61', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(58.0.3029.110)', 'Windows 10', '2018-12-10 18:54:10');
INSERT INTO `lz_login_log` VALUES ('62', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-10 19:29:28');
INSERT INTO `lz_login_log` VALUES ('63', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-10 19:33:50');
INSERT INTO `lz_login_log` VALUES ('64', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-10 20:11:56');
INSERT INTO `lz_login_log` VALUES ('65', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-11 08:02:15');
INSERT INTO `lz_login_log` VALUES ('66', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-11 08:05:25');
INSERT INTO `lz_login_log` VALUES ('67', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-11 08:22:16');
INSERT INTO `lz_login_log` VALUES ('68', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-11 08:49:10');
INSERT INTO `lz_login_log` VALUES ('69', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-11 09:15:15');
INSERT INTO `lz_login_log` VALUES ('70', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-11 15:11:19');
INSERT INTO `lz_login_log` VALUES ('71', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-11 15:38:31');
INSERT INTO `lz_login_log` VALUES ('72', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-11 15:40:25');
INSERT INTO `lz_login_log` VALUES ('73', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-11 15:42:33');
INSERT INTO `lz_login_log` VALUES ('74', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-11 15:55:29');
INSERT INTO `lz_login_log` VALUES ('75', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-11 16:20:35');
INSERT INTO `lz_login_log` VALUES ('76', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-11 16:25:06');
INSERT INTO `lz_login_log` VALUES ('77', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-11 16:35:32');
INSERT INTO `lz_login_log` VALUES ('78', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-11 18:40:08');
INSERT INTO `lz_login_log` VALUES ('79', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-11 18:43:19');
INSERT INTO `lz_login_log` VALUES ('80', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-11 18:48:40');
INSERT INTO `lz_login_log` VALUES ('81', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-11 19:06:28');
INSERT INTO `lz_login_log` VALUES ('82', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-11 19:09:17');
INSERT INTO `lz_login_log` VALUES ('83', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-11 19:24:31');
INSERT INTO `lz_login_log` VALUES ('84', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-11 19:44:24');
INSERT INTO `lz_login_log` VALUES ('85', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-12 07:56:30');
INSERT INTO `lz_login_log` VALUES ('86', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-12 08:47:14');
INSERT INTO `lz_login_log` VALUES ('87', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(58.0.3029.110)', 'Windows 10', '2018-12-12 12:29:23');
INSERT INTO `lz_login_log` VALUES ('88', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-12 15:00:02');
INSERT INTO `lz_login_log` VALUES ('89', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-12 18:13:28');
INSERT INTO `lz_login_log` VALUES ('90', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-12 19:40:00');
INSERT INTO `lz_login_log` VALUES ('91', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-13 07:49:37');
INSERT INTO `lz_login_log` VALUES ('92', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-13 08:12:34');
INSERT INTO `lz_login_log` VALUES ('93', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-13 08:17:41');
INSERT INTO `lz_login_log` VALUES ('94', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-13 08:34:12');
INSERT INTO `lz_login_log` VALUES ('95', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-13 08:55:22');
INSERT INTO `lz_login_log` VALUES ('96', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-13 09:23:47');
INSERT INTO `lz_login_log` VALUES ('97', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-13 09:36:07');
INSERT INTO `lz_login_log` VALUES ('98', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-13 09:51:22');
INSERT INTO `lz_login_log` VALUES ('99', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-13 09:58:43');
INSERT INTO `lz_login_log` VALUES ('100', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.110)', 'Windows 10', '2018-12-13 10:01:22');
INSERT INTO `lz_login_log` VALUES ('101', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-13 10:11:12');
INSERT INTO `lz_login_log` VALUES ('102', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-13 10:58:47');
INSERT INTO `lz_login_log` VALUES ('103', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-13 11:41:41');
INSERT INTO `lz_login_log` VALUES ('104', '8', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-13 15:30:44');
INSERT INTO `lz_login_log` VALUES ('105', '4', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-13 15:32:27');
INSERT INTO `lz_login_log` VALUES ('106', '2', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-13 15:34:11');
INSERT INTO `lz_login_log` VALUES ('107', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-13 16:19:30');
INSERT INTO `lz_login_log` VALUES ('108', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-13 17:03:52');
INSERT INTO `lz_login_log` VALUES ('109', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-13 17:12:41');
INSERT INTO `lz_login_log` VALUES ('110', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-13 19:17:44');
INSERT INTO `lz_login_log` VALUES ('111', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-13 21:01:03');
INSERT INTO `lz_login_log` VALUES ('112', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-14 12:33:21');
INSERT INTO `lz_login_log` VALUES ('113', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-14 12:35:10');
INSERT INTO `lz_login_log` VALUES ('114', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-14 12:38:16');
INSERT INTO `lz_login_log` VALUES ('115', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-14 12:40:25');
INSERT INTO `lz_login_log` VALUES ('116', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-14 12:53:42');
INSERT INTO `lz_login_log` VALUES ('117', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-14 12:54:21');
INSERT INTO `lz_login_log` VALUES ('118', '1', '127.0.0.1', '本机地址 本机地址  ', 'Edge(17.17134)', 'Windows 10', '2018-12-14 12:54:51');
INSERT INTO `lz_login_log` VALUES ('119', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-14 12:59:10');
INSERT INTO `lz_login_log` VALUES ('120', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(58.0.3029.110)', 'Windows 10', '2018-12-14 13:10:48');
INSERT INTO `lz_login_log` VALUES ('121', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(71.0.3578.98)', 'Windows 98', '2018-12-14 13:11:00');
INSERT INTO `lz_login_log` VALUES ('122', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-14 13:14:22');
INSERT INTO `lz_login_log` VALUES ('123', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-14 13:39:58');
INSERT INTO `lz_login_log` VALUES ('124', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-14 13:43:53');
INSERT INTO `lz_login_log` VALUES ('125', '8', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-14 13:53:16');
INSERT INTO `lz_login_log` VALUES ('126', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-14 14:06:13');
INSERT INTO `lz_login_log` VALUES ('127', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-14 14:21:19');
INSERT INTO `lz_login_log` VALUES ('128', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Mac', '2018-12-14 14:56:32');
INSERT INTO `lz_login_log` VALUES ('129', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-14 15:05:48');
INSERT INTO `lz_login_log` VALUES ('130', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-14 15:20:51');
INSERT INTO `lz_login_log` VALUES ('131', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-14 15:21:59');
INSERT INTO `lz_login_log` VALUES ('132', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-14 16:21:50');
INSERT INTO `lz_login_log` VALUES ('133', '8', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-14 16:22:54');
INSERT INTO `lz_login_log` VALUES ('134', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-14 16:47:53');
INSERT INTO `lz_login_log` VALUES ('135', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-14 17:34:04');
INSERT INTO `lz_login_log` VALUES ('136', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-16 17:02:06');
INSERT INTO `lz_login_log` VALUES ('137', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-16 17:25:27');
INSERT INTO `lz_login_log` VALUES ('138', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-16 17:28:27');
INSERT INTO `lz_login_log` VALUES ('139', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-16 17:32:18');
INSERT INTO `lz_login_log` VALUES ('140', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(71.0.3578.98)', 'Windows 98', '2018-12-16 17:33:16');
INSERT INTO `lz_login_log` VALUES ('141', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Mac', '2018-12-16 17:33:36');
INSERT INTO `lz_login_log` VALUES ('142', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-16 17:53:01');
INSERT INTO `lz_login_log` VALUES ('143', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-16 18:04:02');
INSERT INTO `lz_login_log` VALUES ('144', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-16 18:10:40');
INSERT INTO `lz_login_log` VALUES ('145', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Mac', '2018-12-16 18:34:12');
INSERT INTO `lz_login_log` VALUES ('146', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-16 18:41:13');
INSERT INTO `lz_login_log` VALUES ('147', '8', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-16 19:51:38');
INSERT INTO `lz_login_log` VALUES ('148', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-16 20:08:33');
INSERT INTO `lz_login_log` VALUES ('149', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-16 20:27:39');
INSERT INTO `lz_login_log` VALUES ('150', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-16 21:08:02');
INSERT INTO `lz_login_log` VALUES ('151', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(71.0.3578.98)', 'Windows 98', '2018-12-17 08:00:42');
INSERT INTO `lz_login_log` VALUES ('152', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-17 08:12:33');
INSERT INTO `lz_login_log` VALUES ('153', '8', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 08:22:53');
INSERT INTO `lz_login_log` VALUES ('154', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 08:28:31');
INSERT INTO `lz_login_log` VALUES ('155', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-17 08:31:54');
INSERT INTO `lz_login_log` VALUES ('156', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-17 09:03:25');
INSERT INTO `lz_login_log` VALUES ('157', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 09:38:37');
INSERT INTO `lz_login_log` VALUES ('158', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-17 10:19:10');
INSERT INTO `lz_login_log` VALUES ('159', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 10:26:44');
INSERT INTO `lz_login_log` VALUES ('160', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-17 11:37:00');
INSERT INTO `lz_login_log` VALUES ('161', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 13:42:04');
INSERT INTO `lz_login_log` VALUES ('162', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 13:57:08');
INSERT INTO `lz_login_log` VALUES ('163', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Mac', '2018-12-17 14:05:05');
INSERT INTO `lz_login_log` VALUES ('164', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-17 14:12:01');
INSERT INTO `lz_login_log` VALUES ('165', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-17 14:12:14');
INSERT INTO `lz_login_log` VALUES ('166', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-17 14:12:39');
INSERT INTO `lz_login_log` VALUES ('167', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 15:16:15');
INSERT INTO `lz_login_log` VALUES ('168', '16', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 15:16:40');
INSERT INTO `lz_login_log` VALUES ('169', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 15:32:31');
INSERT INTO `lz_login_log` VALUES ('170', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-17 15:36:54');
INSERT INTO `lz_login_log` VALUES ('171', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-17 15:41:30');
INSERT INTO `lz_login_log` VALUES ('172', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-17 15:53:55');
INSERT INTO `lz_login_log` VALUES ('173', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-17 15:56:48');
INSERT INTO `lz_login_log` VALUES ('174', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-17 16:01:08');
INSERT INTO `lz_login_log` VALUES ('175', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-18 07:45:27');
INSERT INTO `lz_login_log` VALUES ('176', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(71.0.3578.98)', 'Windows 98', '2018-12-18 07:55:43');
INSERT INTO `lz_login_log` VALUES ('177', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-18 08:01:20');
INSERT INTO `lz_login_log` VALUES ('178', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 08:01:57');
INSERT INTO `lz_login_log` VALUES ('179', '8', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 08:02:58');
INSERT INTO `lz_login_log` VALUES ('180', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-18 08:39:12');
INSERT INTO `lz_login_log` VALUES ('181', '8', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 09:53:35');
INSERT INTO `lz_login_log` VALUES ('182', '8', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Mac', '2018-12-18 09:55:20');
INSERT INTO `lz_login_log` VALUES ('183', '2', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-18 09:55:36');
INSERT INTO `lz_login_log` VALUES ('184', '8', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(63.0)', 'Windows 10', '2018-12-18 09:56:13');
INSERT INTO `lz_login_log` VALUES ('185', '8', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-18 09:57:03');
INSERT INTO `lz_login_log` VALUES ('186', '8', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-18 10:02:36');
INSERT INTO `lz_login_log` VALUES ('187', '8', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-18 10:11:58');
INSERT INTO `lz_login_log` VALUES ('188', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 10:24:17');
INSERT INTO `lz_login_log` VALUES ('189', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-18 10:24:40');
INSERT INTO `lz_login_log` VALUES ('190', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-18 10:24:44');
INSERT INTO `lz_login_log` VALUES ('191', '8', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-18 10:25:03');
INSERT INTO `lz_login_log` VALUES ('192', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Mac', '2018-12-18 10:25:13');
INSERT INTO `lz_login_log` VALUES ('193', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-18 10:25:52');
INSERT INTO `lz_login_log` VALUES ('194', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-18 10:26:36');
INSERT INTO `lz_login_log` VALUES ('195', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 10:45:37');
INSERT INTO `lz_login_log` VALUES ('196', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 10:47:20');
INSERT INTO `lz_login_log` VALUES ('197', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 10:48:10');
INSERT INTO `lz_login_log` VALUES ('198', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 10:56:49');
INSERT INTO `lz_login_log` VALUES ('199', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 11:01:28');
INSERT INTO `lz_login_log` VALUES ('200', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 11:17:47');
INSERT INTO `lz_login_log` VALUES ('201', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 11:30:24');
INSERT INTO `lz_login_log` VALUES ('202', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 14:12:34');
INSERT INTO `lz_login_log` VALUES ('203', '8', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 15:20:06');
INSERT INTO `lz_login_log` VALUES ('204', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 17:04:18');
INSERT INTO `lz_login_log` VALUES ('205', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-18 17:42:18');
INSERT INTO `lz_login_log` VALUES ('206', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-18 17:43:08');
INSERT INTO `lz_login_log` VALUES ('207', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-18 20:51:30');
INSERT INTO `lz_login_log` VALUES ('208', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.110)', 'Mac', '2018-12-18 20:53:23');
INSERT INTO `lz_login_log` VALUES ('209', '1', '0.0.0.0', '保留地址 保留地址  ', 'Safari(605.1.15)', 'Mac', '2018-12-18 21:03:47');
INSERT INTO `lz_login_log` VALUES ('210', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(68.0.3440.75)', 'Windows 10', '2018-12-19 07:36:53');
INSERT INTO `lz_login_log` VALUES ('211', '8', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 07:37:53');
INSERT INTO `lz_login_log` VALUES ('212', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(71.0.3578.98)', 'Windows 98', '2018-12-19 07:46:39');
INSERT INTO `lz_login_log` VALUES ('213', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 08:03:43');
INSERT INTO `lz_login_log` VALUES ('214', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(58.0.3029.110)', 'Windows 10', '2018-12-19 08:19:31');
INSERT INTO `lz_login_log` VALUES ('215', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-19 08:43:00');
INSERT INTO `lz_login_log` VALUES ('216', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-19 09:13:15');
INSERT INTO `lz_login_log` VALUES ('217', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 10:02:05');
INSERT INTO `lz_login_log` VALUES ('218', '20', '127.0.0.1', '本机地址 本机地址  ', 'Edge(17.17134)', 'Windows 10', '2018-12-19 10:19:16');
INSERT INTO `lz_login_log` VALUES ('219', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 11:23:06');
INSERT INTO `lz_login_log` VALUES ('220', '20', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:02:43');
INSERT INTO `lz_login_log` VALUES ('221', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:03:48');
INSERT INTO `lz_login_log` VALUES ('222', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 14:05:19');
INSERT INTO `lz_login_log` VALUES ('223', '1', '0.0.0.0', '保留地址 保留地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 14:11:17');
INSERT INTO `lz_login_log` VALUES ('224', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-19 14:25:46');
INSERT INTO `lz_login_log` VALUES ('225', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:25:55');
INSERT INTO `lz_login_log` VALUES ('226', '8', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-19 14:27:48');
INSERT INTO `lz_login_log` VALUES ('227', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 14:29:16');
INSERT INTO `lz_login_log` VALUES ('228', '20', '127.0.0.1', '本机地址 本机地址  ', 'Edge(17.17134)', 'Windows 10', '2018-12-19 14:34:15');
INSERT INTO `lz_login_log` VALUES ('229', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 14:34:38');
INSERT INTO `lz_login_log` VALUES ('230', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:34:41');
INSERT INTO `lz_login_log` VALUES ('231', '20', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 14:35:17');
INSERT INTO `lz_login_log` VALUES ('232', '8', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(71.0.3578.98)', 'Windows 98', '2018-12-19 14:35:41');
INSERT INTO `lz_login_log` VALUES ('233', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(71.0.3578.98)', 'Windows 98', '2018-12-19 14:36:14');
INSERT INTO `lz_login_log` VALUES ('234', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:37:45');
INSERT INTO `lz_login_log` VALUES ('235', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:40:02');
INSERT INTO `lz_login_log` VALUES ('236', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:40:22');
INSERT INTO `lz_login_log` VALUES ('237', '20', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(70.0.3538.102)', 'Windows 10', '2018-12-19 14:43:58');
INSERT INTO `lz_login_log` VALUES ('238', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:44:10');
INSERT INTO `lz_login_log` VALUES ('239', '20', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 14:44:53');
INSERT INTO `lz_login_log` VALUES ('240', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:45:33');
INSERT INTO `lz_login_log` VALUES ('241', '1', '127.0.0.1', '本机地址 本机地址  ', 'Chrome(64.0.3282.140)', 'Windows 10', '2018-12-19 14:48:22');
INSERT INTO `lz_login_log` VALUES ('242', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:49:02');
INSERT INTO `lz_login_log` VALUES ('243', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:57:07');
INSERT INTO `lz_login_log` VALUES ('244', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 14:59:56');
INSERT INTO `lz_login_log` VALUES ('245', '1', '0.0.0.0', '保留地址 保留地址  ', 'Chrome(70.0.3538.67)', 'Windows 10', '2018-12-19 15:04:46');
INSERT INTO `lz_login_log` VALUES ('246', '1', '127.0.0.1', '本机地址 本机地址  ', 'Firefox(64.0)', 'Windows 10', '2018-12-19 19:00:50');

-- ----------------------------
-- Table structure for lz_node_map
-- ----------------------------
DROP TABLE IF EXISTS `lz_node_map`;
CREATE TABLE `lz_node_map` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(255) NOT NULL DEFAULT '' COMMENT '模块',
  `controller` varchar(255) NOT NULL DEFAULT '' COMMENT '控制器',
  `action` varchar(255) NOT NULL DEFAULT '' COMMENT '方法',
  `method` char(6) NOT NULL DEFAULT '' COMMENT '请求方式',
  `comment` varchar(255) NOT NULL DEFAULT '' COMMENT '节点图描述',
  PRIMARY KEY (`id`),
  KEY `map` (`method`,`module`,`controller`,`action`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=328 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='节点图';

-- ----------------------------
-- Records of lz_node_map
-- ----------------------------
INSERT INTO `lz_node_map` VALUES ('1', 'admin', 'Activity', 'index', 'ALL', 'Activity ');
INSERT INTO `lz_node_map` VALUES ('2', 'admin', 'Activity', 'recycleBin', 'ALL', 'Activity ');
INSERT INTO `lz_node_map` VALUES ('3', 'admin', 'Activity', 'table', 'ALL', 'Activity ');
INSERT INTO `lz_node_map` VALUES ('4', 'admin', 'Activity', 'deleteForever', 'ALL', 'Activity 永久删除');
INSERT INTO `lz_node_map` VALUES ('5', 'admin', 'Activity', 'add', 'ALL', 'Activity 添加');
INSERT INTO `lz_node_map` VALUES ('6', 'admin', 'Activity', 'edit', 'ALL', 'Activity 编辑');
INSERT INTO `lz_node_map` VALUES ('7', 'admin', 'Activity', 'delete', 'ALL', 'Activity 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('8', 'admin', 'Activity', 'recycle', 'ALL', 'Activity 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('9', 'admin', 'Activity', 'forbid', 'ALL', 'Activity 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('10', 'admin', 'Activity', 'resume', 'ALL', 'Activity 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('11', 'admin', 'Activity', 'clear', 'ALL', 'Activity 清空回收站');
INSERT INTO `lz_node_map` VALUES ('12', 'admin', 'Activity', 'saveOrder', 'ALL', 'Activity 保存排序');
INSERT INTO `lz_node_map` VALUES ('16', 'admin', 'AdminArticle', 'index', 'ALL', 'AdminArticle ');
INSERT INTO `lz_node_map` VALUES ('17', 'admin', 'AdminArticle', 'recycleBin', 'ALL', 'AdminArticle ');
INSERT INTO `lz_node_map` VALUES ('18', 'admin', 'AdminArticle', 'edit', 'ALL', 'AdminArticle ');
INSERT INTO `lz_node_map` VALUES ('19', 'admin', 'AdminArticle', 'add', 'ALL', 'AdminArticle ');
INSERT INTO `lz_node_map` VALUES ('20', 'admin', 'AdminArticle', 'download', 'ALL', 'AdminArticle ');
INSERT INTO `lz_node_map` VALUES ('21', 'admin', 'AdminArticle', 'details', 'ALL', 'AdminArticle ');
INSERT INTO `lz_node_map` VALUES ('22', 'admin', 'AdminArticle', 'grade', 'ALL', 'AdminArticle ');
INSERT INTO `lz_node_map` VALUES ('23', 'admin', 'AdminArticle', 'delete', 'ALL', 'AdminArticle 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('24', 'admin', 'AdminArticle', 'recycle', 'ALL', 'AdminArticle 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('25', 'admin', 'AdminArticle', 'forbid', 'ALL', 'AdminArticle 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('26', 'admin', 'AdminArticle', 'resume', 'ALL', 'AdminArticle 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('27', 'admin', 'AdminArticle', 'deleteForever', 'ALL', 'AdminArticle 永久删除');
INSERT INTO `lz_node_map` VALUES ('28', 'admin', 'AdminArticle', 'clear', 'ALL', 'AdminArticle 清空回收站');
INSERT INTO `lz_node_map` VALUES ('29', 'admin', 'AdminArticle', 'saveOrder', 'ALL', 'AdminArticle 保存排序');
INSERT INTO `lz_node_map` VALUES ('31', 'admin', 'AdminGroup', 'index', 'ALL', 'AdminGroup 首页');
INSERT INTO `lz_node_map` VALUES ('32', 'admin', 'AdminGroup', 'recycleBin', 'ALL', 'AdminGroup 回收站');
INSERT INTO `lz_node_map` VALUES ('33', 'admin', 'AdminGroup', 'add', 'ALL', 'AdminGroup 添加');
INSERT INTO `lz_node_map` VALUES ('34', 'admin', 'AdminGroup', 'edit', 'ALL', 'AdminGroup 编辑');
INSERT INTO `lz_node_map` VALUES ('35', 'admin', 'AdminGroup', 'delete', 'ALL', 'AdminGroup 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('36', 'admin', 'AdminGroup', 'recycle', 'ALL', 'AdminGroup 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('37', 'admin', 'AdminGroup', 'forbid', 'ALL', 'AdminGroup 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('38', 'admin', 'AdminGroup', 'resume', 'ALL', 'AdminGroup 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('39', 'admin', 'AdminGroup', 'deleteForever', 'ALL', 'AdminGroup 永久删除');
INSERT INTO `lz_node_map` VALUES ('40', 'admin', 'AdminGroup', 'clear', 'ALL', 'AdminGroup 清空回收站');
INSERT INTO `lz_node_map` VALUES ('41', 'admin', 'AdminGroup', 'saveOrder', 'ALL', 'AdminGroup 保存排序');
INSERT INTO `lz_node_map` VALUES ('46', 'admin', 'AdminNode', 'index', 'ALL', 'AdminNode 首页');
INSERT INTO `lz_node_map` VALUES ('47', 'admin', 'AdminNode', 'recycleBin', 'ALL', 'AdminNode 回收站');
INSERT INTO `lz_node_map` VALUES ('48', 'admin', 'AdminNode', 'sort', 'ALL', 'AdminNode 保存排序');
INSERT INTO `lz_node_map` VALUES ('49', 'admin', 'AdminNode', 'load', 'ALL', 'AdminNode 节点快速导入');
INSERT INTO `lz_node_map` VALUES ('50', 'admin', 'AdminNode', 'indexOld', 'ALL', 'AdminNode 首页');
INSERT INTO `lz_node_map` VALUES ('51', 'admin', 'AdminNode', 'add', 'ALL', 'AdminNode 添加');
INSERT INTO `lz_node_map` VALUES ('52', 'admin', 'AdminNode', 'edit', 'ALL', 'AdminNode 编辑');
INSERT INTO `lz_node_map` VALUES ('53', 'admin', 'AdminNode', 'delete', 'ALL', 'AdminNode 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('54', 'admin', 'AdminNode', 'recycle', 'ALL', 'AdminNode 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('55', 'admin', 'AdminNode', 'forbid', 'ALL', 'AdminNode 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('56', 'admin', 'AdminNode', 'resume', 'ALL', 'AdminNode 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('57', 'admin', 'AdminNode', 'deleteForever', 'ALL', 'AdminNode 永久删除');
INSERT INTO `lz_node_map` VALUES ('58', 'admin', 'AdminNode', 'clear', 'ALL', 'AdminNode 清空回收站');
INSERT INTO `lz_node_map` VALUES ('59', 'admin', 'AdminNode', 'saveOrder', 'ALL', 'AdminNode 保存排序');
INSERT INTO `lz_node_map` VALUES ('61', 'admin', 'AdminNodeLoad', 'index', 'ALL', 'AdminNodeLoad 首页');
INSERT INTO `lz_node_map` VALUES ('62', 'admin', 'AdminNodeLoad', 'recycleBin', 'ALL', 'AdminNodeLoad 回收站');
INSERT INTO `lz_node_map` VALUES ('63', 'admin', 'AdminNodeLoad', 'add', 'ALL', 'AdminNodeLoad 添加');
INSERT INTO `lz_node_map` VALUES ('64', 'admin', 'AdminNodeLoad', 'edit', 'ALL', 'AdminNodeLoad 编辑');
INSERT INTO `lz_node_map` VALUES ('65', 'admin', 'AdminNodeLoad', 'forbid', 'ALL', 'AdminNodeLoad 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('66', 'admin', 'AdminNodeLoad', 'resume', 'ALL', 'AdminNodeLoad 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('67', 'admin', 'AdminNodeLoad', 'deleteForever', 'ALL', 'AdminNodeLoad 永久删除');
INSERT INTO `lz_node_map` VALUES ('68', 'admin', 'AdminNodeLoad', 'clear', 'ALL', 'AdminNodeLoad 清空回收站');
INSERT INTO `lz_node_map` VALUES ('69', 'admin', 'AdminNodeLoad', 'saveOrder', 'ALL', 'AdminNodeLoad 保存排序');
INSERT INTO `lz_node_map` VALUES ('76', 'admin', 'AdminRole', 'user', 'ALL', 'AdminRole 用户列表');
INSERT INTO `lz_node_map` VALUES ('77', 'admin', 'AdminRole', 'access', 'ALL', 'AdminRole 授权');
INSERT INTO `lz_node_map` VALUES ('78', 'admin', 'AdminRole', 'index', 'ALL', 'AdminRole 首页');
INSERT INTO `lz_node_map` VALUES ('79', 'admin', 'AdminRole', 'recycleBin', 'ALL', 'AdminRole 回收站');
INSERT INTO `lz_node_map` VALUES ('80', 'admin', 'AdminRole', 'add', 'ALL', 'AdminRole 添加');
INSERT INTO `lz_node_map` VALUES ('81', 'admin', 'AdminRole', 'edit', 'ALL', 'AdminRole 编辑');
INSERT INTO `lz_node_map` VALUES ('82', 'admin', 'AdminRole', 'delete', 'ALL', 'AdminRole 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('83', 'admin', 'AdminRole', 'recycle', 'ALL', 'AdminRole 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('84', 'admin', 'AdminRole', 'forbid', 'ALL', 'AdminRole 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('85', 'admin', 'AdminRole', 'resume', 'ALL', 'AdminRole 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('86', 'admin', 'AdminRole', 'deleteForever', 'ALL', 'AdminRole 永久删除');
INSERT INTO `lz_node_map` VALUES ('87', 'admin', 'AdminRole', 'clear', 'ALL', 'AdminRole 清空回收站');
INSERT INTO `lz_node_map` VALUES ('88', 'admin', 'AdminRole', 'saveOrder', 'ALL', 'AdminRole 保存排序');
INSERT INTO `lz_node_map` VALUES ('91', 'admin', 'AdminUser', 'password', 'ALL', 'AdminUser 修改密码');
INSERT INTO `lz_node_map` VALUES ('92', 'admin', 'AdminUser', 'modal_upload_img', 'ALL', 'AdminUser ');
INSERT INTO `lz_node_map` VALUES ('93', 'admin', 'AdminUser', 'upimg', 'ALL', 'AdminUser ');
INSERT INTO `lz_node_map` VALUES ('94', 'admin', 'AdminUser', 'index', 'ALL', 'AdminUser 首页');
INSERT INTO `lz_node_map` VALUES ('95', 'admin', 'AdminUser', 'recycleBin', 'ALL', 'AdminUser 回收站');
INSERT INTO `lz_node_map` VALUES ('96', 'admin', 'AdminUser', 'add', 'ALL', 'AdminUser 添加');
INSERT INTO `lz_node_map` VALUES ('97', 'admin', 'AdminUser', 'edit', 'ALL', 'AdminUser 编辑');
INSERT INTO `lz_node_map` VALUES ('98', 'admin', 'AdminUser', 'delete', 'ALL', 'AdminUser 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('99', 'admin', 'AdminUser', 'recycle', 'ALL', 'AdminUser 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('100', 'admin', 'AdminUser', 'forbid', 'ALL', 'AdminUser 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('101', 'admin', 'AdminUser', 'resume', 'ALL', 'AdminUser 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('102', 'admin', 'AdminUser', 'deleteForever', 'ALL', 'AdminUser 永久删除');
INSERT INTO `lz_node_map` VALUES ('103', 'admin', 'AdminUser', 'clear', 'ALL', 'AdminUser 清空回收站');
INSERT INTO `lz_node_map` VALUES ('104', 'admin', 'AdminUser', 'saveOrder', 'ALL', 'AdminUser 保存排序');
INSERT INTO `lz_node_map` VALUES ('106', 'admin', 'Applications', 'index', 'ALL', 'Applications 首页');
INSERT INTO `lz_node_map` VALUES ('107', 'admin', 'Applications', 'recycleBin', 'ALL', 'Applications 回收站');
INSERT INTO `lz_node_map` VALUES ('108', 'admin', 'Applications', 'add', 'ALL', 'Applications 添加');
INSERT INTO `lz_node_map` VALUES ('109', 'admin', 'Applications', 'edit', 'ALL', 'Applications 编辑');
INSERT INTO `lz_node_map` VALUES ('110', 'admin', 'Applications', 'delete', 'ALL', 'Applications 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('111', 'admin', 'Applications', 'recycle', 'ALL', 'Applications 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('112', 'admin', 'Applications', 'forbid', 'ALL', 'Applications 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('113', 'admin', 'Applications', 'resume', 'ALL', 'Applications 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('114', 'admin', 'Applications', 'deleteForever', 'ALL', 'Applications 永久删除');
INSERT INTO `lz_node_map` VALUES ('115', 'admin', 'Applications', 'clear', 'ALL', 'Applications 清空回收站');
INSERT INTO `lz_node_map` VALUES ('116', 'admin', 'Applications', 'saveOrder', 'ALL', 'Applications 保存排序');
INSERT INTO `lz_node_map` VALUES ('121', 'admin', 'Demo', 'excel', 'ALL', 'Demo Excel一键导出');
INSERT INTO `lz_node_map` VALUES ('122', 'admin', 'Demo', 'download', 'ALL', 'Demo 下载文件');
INSERT INTO `lz_node_map` VALUES ('123', 'admin', 'Demo', 'downloadImage', 'ALL', 'Demo 下载远程图片');
INSERT INTO `lz_node_map` VALUES ('124', 'admin', 'Demo', 'mail', 'ALL', 'Demo 发送邮件');
INSERT INTO `lz_node_map` VALUES ('125', 'admin', 'Demo', 'ueditor', 'ALL', 'Demo 百度编辑器');
INSERT INTO `lz_node_map` VALUES ('126', 'admin', 'Demo', 'qiniu', 'ALL', 'Demo 七牛上传');
INSERT INTO `lz_node_map` VALUES ('127', 'admin', 'Demo', 'hashids', 'ALL', 'Demo ID加密');
INSERT INTO `lz_node_map` VALUES ('128', 'admin', 'Demo', 'layer', 'ALL', 'Demo 丰富弹层');
INSERT INTO `lz_node_map` VALUES ('129', 'admin', 'Demo', 'tableFixed', 'ALL', 'Demo 表格溢出');
INSERT INTO `lz_node_map` VALUES ('130', 'admin', 'Demo', 'imageUpload', 'ALL', 'Demo 图片上传回调');
INSERT INTO `lz_node_map` VALUES ('131', 'admin', 'Demo', 'qrcode', 'ALL', 'Demo 二维码生成');
INSERT INTO `lz_node_map` VALUES ('136', 'admin', 'Exchange', 'index', 'ALL', 'Exchange 首页');
INSERT INTO `lz_node_map` VALUES ('137', 'admin', 'Exchange', 'recycleBin', 'ALL', 'Exchange 回收站');
INSERT INTO `lz_node_map` VALUES ('138', 'admin', 'Exchange', 'add', 'ALL', 'Exchange 添加');
INSERT INTO `lz_node_map` VALUES ('139', 'admin', 'Exchange', 'edit', 'ALL', 'Exchange 编辑');
INSERT INTO `lz_node_map` VALUES ('140', 'admin', 'Exchange', 'delete', 'ALL', 'Exchange 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('141', 'admin', 'Exchange', 'recycle', 'ALL', 'Exchange 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('142', 'admin', 'Exchange', 'forbid', 'ALL', 'Exchange 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('143', 'admin', 'Exchange', 'resume', 'ALL', 'Exchange 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('144', 'admin', 'Exchange', 'deleteForever', 'ALL', 'Exchange 永久删除');
INSERT INTO `lz_node_map` VALUES ('145', 'admin', 'Exchange', 'clear', 'ALL', 'Exchange 清空回收站');
INSERT INTO `lz_node_map` VALUES ('146', 'admin', 'Exchange', 'saveOrder', 'ALL', 'Exchange 保存排序');
INSERT INTO `lz_node_map` VALUES ('151', 'admin', 'Index', 'index', 'ALL', 'Index ');
INSERT INTO `lz_node_map` VALUES ('152', 'admin', 'Index', 'welcome', 'ALL', 'Index 欢迎页');
INSERT INTO `lz_node_map` VALUES ('153', 'admin', 'Index', 'update', 'ALL', 'Index ');
INSERT INTO `lz_node_map` VALUES ('154', 'admin', 'Jobclass', 'index', 'ALL', 'Jobclass 首页');
INSERT INTO `lz_node_map` VALUES ('155', 'admin', 'Jobclass', 'ldel', 'ALL', 'Jobclass ');
INSERT INTO `lz_node_map` VALUES ('156', 'admin', 'Jobclass', 'add', 'ALL', 'Jobclass 添加');
INSERT INTO `lz_node_map` VALUES ('157', 'admin', 'Jobclass', 'edit', 'ALL', 'Jobclass 编辑');
INSERT INTO `lz_node_map` VALUES ('158', 'admin', 'Jobclass', 'recycleBin', 'ALL', 'Jobclass 回收站');
INSERT INTO `lz_node_map` VALUES ('159', 'admin', 'Jobclass', 'delete', 'ALL', 'Jobclass 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('160', 'admin', 'Jobclass', 'recycle', 'ALL', 'Jobclass 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('161', 'admin', 'Jobclass', 'forbid', 'ALL', 'Jobclass 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('162', 'admin', 'Jobclass', 'resume', 'ALL', 'Jobclass 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('163', 'admin', 'Jobclass', 'deleteForever', 'ALL', 'Jobclass 永久删除');
INSERT INTO `lz_node_map` VALUES ('164', 'admin', 'Jobclass', 'clear', 'ALL', 'Jobclass 清空回收站');
INSERT INTO `lz_node_map` VALUES ('165', 'admin', 'Jobclass', 'saveOrder', 'ALL', 'Jobclass 保存排序');
INSERT INTO `lz_node_map` VALUES ('169', 'admin', 'LoginLog', 'index', 'ALL', 'LoginLog 首页');
INSERT INTO `lz_node_map` VALUES ('170', 'admin', 'LoginLog', 'saveOrder', 'ALL', 'LoginLog 保存排序');
INSERT INTO `lz_node_map` VALUES ('172', 'admin', 'NodeMap', 'load', 'ALL', 'NodeMap 自动导入');
INSERT INTO `lz_node_map` VALUES ('173', 'admin', 'NodeMap', 'index', 'ALL', 'NodeMap 首页');
INSERT INTO `lz_node_map` VALUES ('174', 'admin', 'NodeMap', 'recycleBin', 'ALL', 'NodeMap 回收站');
INSERT INTO `lz_node_map` VALUES ('175', 'admin', 'NodeMap', 'add', 'ALL', 'NodeMap 添加');
INSERT INTO `lz_node_map` VALUES ('176', 'admin', 'NodeMap', 'edit', 'ALL', 'NodeMap 编辑');
INSERT INTO `lz_node_map` VALUES ('177', 'admin', 'NodeMap', 'deleteForever', 'ALL', 'NodeMap 永久删除');
INSERT INTO `lz_node_map` VALUES ('178', 'admin', 'NodeMap', 'saveOrder', 'ALL', 'NodeMap 保存排序');
INSERT INTO `lz_node_map` VALUES ('179', 'admin', 'Pactivity', 'index', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('180', 'admin', 'Pactivity', 'audit', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('181', 'admin', 'Pactivity', 'edit', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('182', 'admin', 'Pactivity', 'table', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('183', 'admin', 'Pactivity', 'issue', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('184', 'admin', 'Pactivity', 'over', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('185', 'admin', 'Pactivity', 'post', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('186', 'admin', 'Pactivity', 'applications', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('187', 'admin', 'Pactivity', 'status', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('188', 'admin', 'Pactivity', 'jobs', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('189', 'admin', 'Pactivity', 'jobsta', 'ALL', 'Pactivity ');
INSERT INTO `lz_node_map` VALUES ('190', 'admin', 'Pactivity', 'recycleBin', 'ALL', 'Pactivity 回收站');
INSERT INTO `lz_node_map` VALUES ('191', 'admin', 'Pactivity', 'add', 'ALL', 'Pactivity 添加');
INSERT INTO `lz_node_map` VALUES ('192', 'admin', 'Pactivity', 'delete', 'ALL', 'Pactivity 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('193', 'admin', 'Pactivity', 'recycle', 'ALL', 'Pactivity 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('194', 'admin', 'Pactivity', 'forbid', 'ALL', 'Pactivity 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('195', 'admin', 'Pactivity', 'resume', 'ALL', 'Pactivity 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('196', 'admin', 'Pactivity', 'deleteForever', 'ALL', 'Pactivity 永久删除');
INSERT INTO `lz_node_map` VALUES ('197', 'admin', 'Pactivity', 'clear', 'ALL', 'Pactivity 清空回收站');
INSERT INTO `lz_node_map` VALUES ('198', 'admin', 'Pactivity', 'saveOrder', 'ALL', 'Pactivity 保存排序');
INSERT INTO `lz_node_map` VALUES ('210', 'admin', 'PastAct', 'recycleBin', 'ALL', 'PastAct ');
INSERT INTO `lz_node_map` VALUES ('211', 'admin', 'PastAct', 'index', 'ALL', 'PastAct ');
INSERT INTO `lz_node_map` VALUES ('212', 'admin', 'PastAct', 'add', 'ALL', 'PastAct ');
INSERT INTO `lz_node_map` VALUES ('213', 'admin', 'PastAct', 'edit', 'ALL', 'PastAct ');
INSERT INTO `lz_node_map` VALUES ('214', 'admin', 'PastAct', 'lay', 'ALL', 'PastAct ');
INSERT INTO `lz_node_map` VALUES ('215', 'admin', 'PastAct', 'delete', 'ALL', 'PastAct 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('216', 'admin', 'PastAct', 'recycle', 'ALL', 'PastAct 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('217', 'admin', 'PastAct', 'forbid', 'ALL', 'PastAct 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('218', 'admin', 'PastAct', 'resume', 'ALL', 'PastAct 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('219', 'admin', 'PastAct', 'deleteForever', 'ALL', 'PastAct 永久删除');
INSERT INTO `lz_node_map` VALUES ('220', 'admin', 'PastAct', 'clear', 'ALL', 'PastAct 清空回收站');
INSERT INTO `lz_node_map` VALUES ('221', 'admin', 'PastAct', 'saveOrder', 'ALL', 'PastAct 保存排序');
INSERT INTO `lz_node_map` VALUES ('225', 'admin', 'Post', 'index', 'ALL', 'Post 首页');
INSERT INTO `lz_node_map` VALUES ('226', 'admin', 'Post', 'add', 'ALL', 'Post 添加');
INSERT INTO `lz_node_map` VALUES ('227', 'admin', 'Post', 'edit', 'ALL', 'Post 编辑');
INSERT INTO `lz_node_map` VALUES ('228', 'admin', 'Post', 'recycleBin', 'ALL', 'Post 回收站');
INSERT INTO `lz_node_map` VALUES ('229', 'admin', 'Post', 'delete', 'ALL', 'Post 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('230', 'admin', 'Post', 'recycle', 'ALL', 'Post 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('231', 'admin', 'Post', 'forbid', 'ALL', 'Post 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('232', 'admin', 'Post', 'resume', 'ALL', 'Post 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('233', 'admin', 'Post', 'deleteForever', 'ALL', 'Post 永久删除');
INSERT INTO `lz_node_map` VALUES ('234', 'admin', 'Post', 'clear', 'ALL', 'Post 清空回收站');
INSERT INTO `lz_node_map` VALUES ('235', 'admin', 'Post', 'saveOrder', 'ALL', 'Post 保存排序');
INSERT INTO `lz_node_map` VALUES ('240', 'admin', 'Pub', 'login', 'ALL', 'Pub 用户登录页面');
INSERT INTO `lz_node_map` VALUES ('241', 'admin', 'Pub', 'loginFrame', 'ALL', 'Pub 小窗口登录页面');
INSERT INTO `lz_node_map` VALUES ('242', 'admin', 'Pub', 'index', 'ALL', 'Pub 首页');
INSERT INTO `lz_node_map` VALUES ('243', 'admin', 'Pub', 'logout', 'ALL', 'Pub 用户登出');
INSERT INTO `lz_node_map` VALUES ('244', 'admin', 'Pub', 'checkLogin', 'ALL', 'Pub 登录检测');
INSERT INTO `lz_node_map` VALUES ('245', 'admin', 'Pub', 'password', 'ALL', 'Pub 修改密码');
INSERT INTO `lz_node_map` VALUES ('246', 'admin', 'Pub', 'profile', 'ALL', 'Pub 查看用户信息|修改资料');
INSERT INTO `lz_node_map` VALUES ('247', 'admin', 'StuActInfo', 'index', 'ALL', 'StuActInfo ');
INSERT INTO `lz_node_map` VALUES ('248', 'admin', 'StuActInfo', 'recycleBin', 'ALL', 'StuActInfo ');
INSERT INTO `lz_node_map` VALUES ('249', 'admin', 'StuActInfo', 'edit', 'ALL', 'StuActInfo ');
INSERT INTO `lz_node_map` VALUES ('250', 'admin', 'StuActInfo', 'lay', 'ALL', 'StuActInfo ');
INSERT INTO `lz_node_map` VALUES ('251', 'admin', 'StuActInfo', 'addedit', 'ALL', 'StuActInfo ');
INSERT INTO `lz_node_map` VALUES ('252', 'admin', 'StuActInfo', 'addedits', 'ALL', 'StuActInfo ');
INSERT INTO `lz_node_map` VALUES ('253', 'admin', 'StuActInfo', 'add', 'ALL', 'StuActInfo 添加');
INSERT INTO `lz_node_map` VALUES ('254', 'admin', 'StuActInfo', 'delete', 'ALL', 'StuActInfo 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('255', 'admin', 'StuActInfo', 'recycle', 'ALL', 'StuActInfo 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('256', 'admin', 'StuActInfo', 'forbid', 'ALL', 'StuActInfo 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('257', 'admin', 'StuActInfo', 'resume', 'ALL', 'StuActInfo 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('258', 'admin', 'StuActInfo', 'deleteForever', 'ALL', 'StuActInfo 永久删除');
INSERT INTO `lz_node_map` VALUES ('259', 'admin', 'StuActInfo', 'clear', 'ALL', 'StuActInfo 清空回收站');
INSERT INTO `lz_node_map` VALUES ('260', 'admin', 'StuActInfo', 'saveOrder', 'ALL', 'StuActInfo 保存排序');
INSERT INTO `lz_node_map` VALUES ('262', 'admin', 'StuApply', 'show', 'ALL', 'StuApply ');
INSERT INTO `lz_node_map` VALUES ('263', 'admin', 'StuApply', 'index', 'ALL', 'StuApply ');
INSERT INTO `lz_node_map` VALUES ('264', 'admin', 'StuApply', 'status', 'ALL', 'StuApply ');
INSERT INTO `lz_node_map` VALUES ('265', 'admin', 'StuApply', 'edit', 'ALL', 'StuApply ');
INSERT INTO `lz_node_map` VALUES ('266', 'admin', 'StuApply', 'xi', 'ALL', 'StuApply ');
INSERT INTO `lz_node_map` VALUES ('267', 'admin', 'StuApply', 'ban', 'ALL', 'StuApply ');
INSERT INTO `lz_node_map` VALUES ('268', 'admin', 'StuApply', 'recycleBin', 'ALL', 'StuApply 回收站');
INSERT INTO `lz_node_map` VALUES ('269', 'admin', 'StuApply', 'add', 'ALL', 'StuApply 添加');
INSERT INTO `lz_node_map` VALUES ('270', 'admin', 'StuApply', 'delete', 'ALL', 'StuApply 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('271', 'admin', 'StuApply', 'recycle', 'ALL', 'StuApply 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('272', 'admin', 'StuApply', 'forbid', 'ALL', 'StuApply 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('273', 'admin', 'StuApply', 'resume', 'ALL', 'StuApply 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('274', 'admin', 'StuApply', 'deleteForever', 'ALL', 'StuApply 永久删除');
INSERT INTO `lz_node_map` VALUES ('275', 'admin', 'StuApply', 'clear', 'ALL', 'StuApply 清空回收站');
INSERT INTO `lz_node_map` VALUES ('276', 'admin', 'StuApply', 'saveOrder', 'ALL', 'StuApply 保存排序');
INSERT INTO `lz_node_map` VALUES ('277', 'admin', 'StuApproved', 'show', 'ALL', 'StuApproved ');
INSERT INTO `lz_node_map` VALUES ('278', 'admin', 'StuApproved', 'index', 'ALL', 'StuApproved ');
INSERT INTO `lz_node_map` VALUES ('279', 'admin', 'StuApproved', 'edit', 'ALL', 'StuApproved ');
INSERT INTO `lz_node_map` VALUES ('280', 'admin', 'StuApproved', 'add', 'ALL', 'StuApproved 添加');
INSERT INTO `lz_node_map` VALUES ('281', 'admin', 'StuApproved', 'xi', 'ALL', 'StuApproved ');
INSERT INTO `lz_node_map` VALUES ('282', 'admin', 'StuApproved', 'ban', 'ALL', 'StuApproved ');
INSERT INTO `lz_node_map` VALUES ('283', 'admin', 'StuApproved', 'recycleBin', 'ALL', 'StuApproved 回收站');
INSERT INTO `lz_node_map` VALUES ('284', 'admin', 'StuApproved', 'delete', 'ALL', 'StuApproved 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('285', 'admin', 'StuApproved', 'recycle', 'ALL', 'StuApproved 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('286', 'admin', 'StuApproved', 'forbid', 'ALL', 'StuApproved 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('287', 'admin', 'StuApproved', 'resume', 'ALL', 'StuApproved 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('288', 'admin', 'StuApproved', 'deleteForever', 'ALL', 'StuApproved 永久删除');
INSERT INTO `lz_node_map` VALUES ('289', 'admin', 'StuApproved', 'clear', 'ALL', 'StuApproved 清空回收站');
INSERT INTO `lz_node_map` VALUES ('290', 'admin', 'StuApproved', 'saveOrder', 'ALL', 'StuApproved 保存排序');
INSERT INTO `lz_node_map` VALUES ('292', 'admin', 'Teaching', 'index', 'ALL', 'Teaching ');
INSERT INTO `lz_node_map` VALUES ('293', 'admin', 'Teaching', 'add', 'ALL', 'Teaching ');
INSERT INTO `lz_node_map` VALUES ('294', 'admin', 'Teaching', 'edit', 'ALL', 'Teaching ');
INSERT INTO `lz_node_map` VALUES ('295', 'admin', 'Teaching', 'tdel', 'ALL', 'Teaching ');
INSERT INTO `lz_node_map` VALUES ('296', 'admin', 'Teaching', 'recycleBin', 'ALL', 'Teaching 回收站');
INSERT INTO `lz_node_map` VALUES ('297', 'admin', 'Teaching', 'delete', 'ALL', 'Teaching 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('298', 'admin', 'Teaching', 'recycle', 'ALL', 'Teaching 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('299', 'admin', 'Teaching', 'forbid', 'ALL', 'Teaching 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('300', 'admin', 'Teaching', 'resume', 'ALL', 'Teaching 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('301', 'admin', 'Teaching', 'deleteForever', 'ALL', 'Teaching 永久删除');
INSERT INTO `lz_node_map` VALUES ('302', 'admin', 'Teaching', 'clear', 'ALL', 'Teaching 清空回收站');
INSERT INTO `lz_node_map` VALUES ('303', 'admin', 'Teaching', 'saveOrder', 'ALL', 'Teaching 保存排序');
INSERT INTO `lz_node_map` VALUES ('307', 'admin', 'Upload', 'index', 'ALL', 'Upload 首页');
INSERT INTO `lz_node_map` VALUES ('308', 'admin', 'Upload', 'upload', 'ALL', 'Upload 文件上传');
INSERT INTO `lz_node_map` VALUES ('309', 'admin', 'Upload', 'remote', 'ALL', 'Upload 远程图片抓取');
INSERT INTO `lz_node_map` VALUES ('310', 'admin', 'Upload', 'listImage', 'ALL', 'Upload 图片列表');
INSERT INTO `lz_node_map` VALUES ('314', 'admin', 'WebLog', 'index', 'ALL', 'WebLog 列表');
INSERT INTO `lz_node_map` VALUES ('315', 'admin', 'WebLog', 'detail', 'ALL', 'WebLog 详情');
INSERT INTO `lz_node_map` VALUES ('317', 'admin', 'one.two.three.Four', 'index', 'ALL', 'Four 首页');
INSERT INTO `lz_node_map` VALUES ('318', 'admin', 'one.two.three.Four', 'recycleBin', 'ALL', 'Four 回收站');
INSERT INTO `lz_node_map` VALUES ('319', 'admin', 'one.two.three.Four', 'add', 'ALL', 'Four 添加');
INSERT INTO `lz_node_map` VALUES ('320', 'admin', 'one.two.three.Four', 'edit', 'ALL', 'Four 编辑');
INSERT INTO `lz_node_map` VALUES ('321', 'admin', 'one.two.three.Four', 'delete', 'ALL', 'Four 默认删除操作');
INSERT INTO `lz_node_map` VALUES ('322', 'admin', 'one.two.three.Four', 'recycle', 'ALL', 'Four 从回收站恢复');
INSERT INTO `lz_node_map` VALUES ('323', 'admin', 'one.two.three.Four', 'forbid', 'ALL', 'Four 默认禁用操作');
INSERT INTO `lz_node_map` VALUES ('324', 'admin', 'one.two.three.Four', 'resume', 'ALL', 'Four 默认恢复操作');
INSERT INTO `lz_node_map` VALUES ('325', 'admin', 'one.two.three.Four', 'deleteForever', 'ALL', 'Four 永久删除');
INSERT INTO `lz_node_map` VALUES ('326', 'admin', 'one.two.three.Four', 'clear', 'ALL', 'Four 清空回收站');
INSERT INTO `lz_node_map` VALUES ('327', 'admin', 'one.two.three.Four', 'saveOrder', 'ALL', 'Four 保存排序');

-- ----------------------------
-- Table structure for lz_one_two_three_four
-- ----------------------------
DROP TABLE IF EXISTS `lz_one_two_three_four`;
CREATE TABLE `lz_one_two_three_four` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '四级控制器主键',
  `field1` varchar(255) DEFAULT NULL COMMENT '字段一',
  `option` varchar(255) DEFAULT NULL COMMENT '选填',
  `select` varchar(255) DEFAULT NULL COMMENT '下拉框',
  `radio` varchar(255) DEFAULT NULL COMMENT '单选',
  `checkbox` varchar(255) DEFAULT NULL COMMENT '复选框',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `textarea` varchar(255) DEFAULT NULL COMMENT '文本域',
  `date` varchar(255) DEFAULT NULL COMMENT '日期',
  `mobile` varchar(255) DEFAULT NULL COMMENT '手机号',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `sort` smallint(5) DEFAULT '50' COMMENT '排序',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态，1-正常 | 0-禁用',
  `isdelete` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '删除状态，1-删除 | 0-正常',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='四级控制器';

-- ----------------------------
-- Records of lz_one_two_three_four
-- ----------------------------
INSERT INTO `lz_one_two_three_four` VALUES ('1', 'yuan1994', 'lzadmin', '2', '1', null, '2222', 'htlzs://github.com/yuan1994/lzadmin', '2016-12-07', '13012345678', 'tianpian0805@gmail.com', '50', '1', '0', '1481947278', '1481947353');

-- ----------------------------
-- Table structure for lz_organizers
-- ----------------------------
DROP TABLE IF EXISTS `lz_organizers`;
CREATE TABLE `lz_organizers` (
  `sid` int(11) NOT NULL,
  `aid` int(11) DEFAULT NULL,
  `post` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_organizers
-- ----------------------------
INSERT INTO `lz_organizers` VALUES ('1', '5', '0');

-- ----------------------------
-- Table structure for lz_past_act
-- ----------------------------
DROP TABLE IF EXISTS `lz_past_act`;
CREATE TABLE `lz_past_act` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `aid` int(10) NOT NULL COMMENT '活动方案表ID',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '活动内容',
  `releasetime` int(100) NOT NULL COMMENT '发布日期',
  `iu_id` int(11) NOT NULL COMMENT '发布人ID',
  `status` int(10) NOT NULL COMMENT '状态',
  `isdelete` int(10) NOT NULL DEFAULT '0',
  `img` varchar(255) NOT NULL COMMENT '图片',
  `coll` int(10) NOT NULL COMMENT '所属学院',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_past_act
-- ----------------------------
INSERT INTO `lz_past_act` VALUES ('1', '2', '我哭了，心里好难受啊啊啊！！！', '&lt;p&gt;由于找不到session文件夹，把我愁死了，心里难受&lt;br/&gt;&lt;/p&gt;', '1545103085', '1', '1', '0', '/uploads/20181218152912.png', '0');
INSERT INTO `lz_past_act` VALUES ('2', '6', '开心就好，我是中国人', '&lt;p&gt;阅读使我快乐，我太开心了&lt;br/&gt;&lt;/p&gt;', '1545103150', '1', '1', '0', '/uploads/20181218152840.png', '0');
INSERT INTO `lz_past_act` VALUES ('3', '10', '这个是标题我要打字', '&lt;p&gt;元旦晚会我很开心&lt;br/&gt;&lt;/p&gt;', '1545104073', '1', '1', '0', '/uploads/20181218152819.png', '0');
INSERT INTO `lz_past_act` VALUES ('4', '50', '我爱读书，读书爱我', '&lt;p&gt;阅读使我快乐，我很快乐&lt;br/&gt;&lt;/p&gt;', '1545104123', '1', '1', '0', '/uploads/20181218152755.png', '0');
INSERT INTO `lz_past_act` VALUES ('5', '3', '测试头像了', '&lt;p&gt;几天不见，冬天来了&lt;/p&gt;', '1545114501', '1', '1', '0', '/uploads/20181218152408.png', '0');
INSERT INTO `lz_past_act` VALUES ('6', '5', '第二遍测试头像', '&lt;p&gt;测试头像了&lt;br/&gt;&lt;/p&gt;', '1545114836', '1', '1', '0', '/uploads/20181218152620.png', '0');
INSERT INTO `lz_past_act` VALUES ('7', '1', '好难过，真的好难过', '&lt;p&gt;好难过，这真的不是我想要的结果&lt;br/&gt;&lt;/p&gt;', '1545120075', '1', '1', '0', '/uploads/20181218160113.png', '0');
INSERT INTO `lz_past_act` VALUES ('8', '12', '学生自己努力工作真的&ldquo;很好&ldquo;', '&lt;p&gt;集体朗诵学生朗诵爱马仕的恢复健康拉水电费看见暗红色的减肥快乐哈是登录尽快回复&lt;/p&gt;', '1545120171', '1', '1', '0', '/uploads/20181218160250.png', '0');

-- ----------------------------
-- Table structure for lz_post_apply
-- ----------------------------
DROP TABLE IF EXISTS `lz_post_apply`;
CREATE TABLE `lz_post_apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增表id',
  `aid` int(11) NOT NULL,
  `sid` int(11) NOT NULL COMMENT '学生id',
  `poid` int(11) NOT NULL COMMENT '岗位id',
  `time` datetime DEFAULT NULL COMMENT '申请日期',
  `state` int(3) DEFAULT '0' COMMENT '状态',
  `audit` int(255) DEFAULT '0' COMMENT '审核人员',
  `atime` datetime DEFAULT NULL COMMENT '审核日期',
  `isdelete` varchar(2) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_post_apply
-- ----------------------------
INSERT INTO `lz_post_apply` VALUES ('1', '5', '1', '4', '2018-12-13 19:03:56', '1', '1', '0000-00-00 00:00:00', '0');
INSERT INTO `lz_post_apply` VALUES ('2', '5', '137', '4', null, '0', '0', null, '0');
INSERT INTO `lz_post_apply` VALUES ('3', '5', '2', '4', null, '0', '0', null, '0');
INSERT INTO `lz_post_apply` VALUES ('4', '5', '127', '4', null, '0', '0', null, '0');
INSERT INTO `lz_post_apply` VALUES ('5', '5', '128', '4', null, '0', '0', null, '0');
INSERT INTO `lz_post_apply` VALUES ('6', '5', '129', '4', null, '0', '0', null, '0');
INSERT INTO `lz_post_apply` VALUES ('7', '5', '130', '4', null, '0', '0', null, '0');
INSERT INTO `lz_post_apply` VALUES ('8', '5', '131', '4', null, '0', '0', null, '0');
INSERT INTO `lz_post_apply` VALUES ('9', '5', '243', '4', null, '0', '0', null, '0');
INSERT INTO `lz_post_apply` VALUES ('10', '5', '239', '4', null, '0', '0', null, '0');
INSERT INTO `lz_post_apply` VALUES ('11', '5', '1', '4', null, '0', '0', null, '0');

-- ----------------------------
-- Table structure for lz_stu_act_info
-- ----------------------------
DROP TABLE IF EXISTS `lz_stu_act_info`;
CREATE TABLE `lz_stu_act_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `a_id` smallint(5) NOT NULL COMMENT '活动方案id',
  `secschool` varchar(30) DEFAULT NULL COMMENT '二级学院',
  `content` text COMMENT '感悟内容',
  `images` varchar(300) DEFAULT NULL COMMENT '现场照片',
  `grade` varchar(10) DEFAULT NULL COMMENT '成绩',
  `sec_assessor` smallint(5) DEFAULT NULL COMMENT '学生审核人员',
  `sec_ass_date` datetime DEFAULT NULL COMMENT '学生审核日期',
  `sec_ass_status` tinyint(3) DEFAULT NULL COMMENT '二级学院审核状态',
  `assessor` smallint(5) DEFAULT NULL COMMENT '审核人员',
  `ass_date` datetime DEFAULT NULL COMMENT '审核日期',
  `ass_status` tinyint(3) DEFAULT '0' COMMENT '审核状态',
  `status` varchar(255) DEFAULT NULL,
  `isdelete` int(10) DEFAULT '1',
  `condition` int(3) DEFAULT NULL COMMENT '只能修改一次成绩条件',
  `sid` int(3) DEFAULT NULL COMMENT '学生id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_stu_act_info
-- ----------------------------
INSERT INTO `lz_stu_act_info` VALUES ('3', '1', ' 1', '世间最可恶，是耳朵睡着的人，闭上眼睛，装作什么也看不见，什么也挺听不见，实则内心犹如明镜，一切心知肚明。(文/江孝良） 不敢面对现实，故作沉睡！逃避奋斗的过程，极其懦弱。时常做梦，是一种完全清醒的梦，梦想着奇迹出现，梦想人生路上，障碍自动清零，梦想目标 ', '\\static\\admin\\images\\tim00g.jpg', 'D', '8', '2018-12-06 16:26:50', '1', '1', '2018-12-06 16:26:45', '1', '1', '0', '0', '298');
INSERT INTO `lz_stu_act_info` VALUES ('2', '2', '1', '那天是愚人节，在家闲的无聊，打开QQ分组，本想找一个人“愚”一下，看着一个个逐渐陌生的名字，不知道该怎么做，最后随机选了一个大约很长时间，长到接近两年都没有联系的朋友，确定目标后，打开了聊天窗口，几经犹豫，终于用键盘迟钝的在会话框上打了两个字“你是”', '\\static\\admin\\images\\tim00g.jpg', 'A', '2', '2018-12-06 16:26:50', '1', '4', '2018-12-06 16:26:45', '1', '1', '0', '0', '2');
INSERT INTO `lz_stu_act_info` VALUES ('4', '3', ' 1', '在很久以前，有一匹千里马，年轻能干，它每天早上都把的毛发打理的干干净净，然后等着它心中的伯乐出现！ 有一天，一个商人来到它的身边！ 商人说：我是一名客商，需要一匹年轻能干的马，长途跋涉来为我运送货物，不知道你愿意跟我走吗？ 马很不情愿的说：我可是要征战 ', '\\static\\admin\\images\\tim00g.jpg', 'C', '1', '2018-12-06 16:26:50', '1', '8', '2018-12-06 16:26:45', '1', '1', '0', '0', '1');
INSERT INTO `lz_stu_act_info` VALUES ('94', '12', '1', '在很久以前，有一匹千里马，年轻能干，它每天早上都把的毛发打理的干干净净，然后等着它心中的伯乐出现！ 有一天，一个商人来到它的身边！ 商人说：我是一名客商，需要一匹年轻能干的马，长途跋涉来为我运送货物，不知道你愿意跟我走吗？ 马很不情愿的说：我可是要征战', '\\static\\admin\\images\\tim00g.jpg', 'B', '1', '2018-12-19 11:13:08', '1', '1', '2018-12-19 11:13:23', '1', '1', '0', '0', '1');
INSERT INTO `lz_stu_act_info` VALUES ('93', '12', '1', '那天是愚人节，在家闲的无聊，打开QQ分组，本想找一个人“愚”一下，看着一个个逐渐陌生的名字，不知道该怎么做，最后随机选了一个大约很长时间，长到接近两年都没有联系的朋友，确定目标后，打开了聊天窗口，几经犹豫，终于用键盘迟钝的在会话框上打了两个字“你是”', '\\static\\admin\\images\\tim00g.jpg', 'A', '8', '2018-12-13 11:13:13', '1', '8', '2018-12-19 11:13:26', '1', '1', '0', '0', '298');
INSERT INTO `lz_stu_act_info` VALUES ('95', '12', '1', '那天是愚人节，在家闲的无聊，打开QQ分组，本想找一个人“愚”一下，看着一个个逐渐陌生的名字，不知道该怎么做，最后随机选了一个大约很长时间，长到接近两年都没有联系的朋友，确定目标后，打开了聊天窗口，几经犹豫，终于用键盘迟钝的在会话框上打了两个字“你是”	', '\\static\\admin\\images\\tim00g.jpg', 'A+', '1', '2018-12-19 11:16:21', '1', '4', '2018-12-19 11:16:30', '1', '1', '0', '0', '2');
INSERT INTO `lz_stu_act_info` VALUES ('96', '3', '1', '世间最可恶，是耳朵睡着的人，闭上眼睛，装作什么也看不见，什么也挺听不见，实则内心犹如明镜，一切心知肚明。(文/江孝良） 不敢面对现实，故作沉睡！逃避奋斗的过程，极其懦弱。时常做梦，是一种完全清醒的梦，梦想着奇迹出现，梦想人生路上，障碍自动清零，梦想目标', '\\static\\admin\\images\\tim00g.jpg', 'C', '2', '2018-12-19 11:17:55', '1', '1', '2018-12-19 11:18:02', '1', '1', '0', '0', '2');
INSERT INTO `lz_stu_act_info` VALUES ('97', '6', null, null, null, null, null, null, null, null, null, '0', null, '1', null, '298');
INSERT INTO `lz_stu_act_info` VALUES ('98', '5', null, null, null, null, null, null, null, null, null, '0', null, '1', null, '298');

-- ----------------------------
-- Table structure for lz_stu_apply
-- ----------------------------
DROP TABLE IF EXISTS `lz_stu_apply`;
CREATE TABLE `lz_stu_apply` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` char(20) DEFAULT NULL COMMENT '姓名',
  `sex` tinyint(10) DEFAULT NULL COMMENT '性别',
  `college` char(20) DEFAULT NULL COMMENT '学院',
  `department` char(20) DEFAULT NULL COMMENT '所在系',
  `class` char(20) DEFAULT NULL COMMENT '班级',
  `post` char(20) DEFAULT NULL COMMENT '职务',
  `phone` char(20) DEFAULT NULL COMMENT '联系方式',
  `house` char(100) DEFAULT NULL COMMENT '户口所在地',
  `speciality` char(20) DEFAULT NULL COMMENT '特长',
  `status` int(10) NOT NULL DEFAULT '0' COMMENT '状态',
  `user` varchar(50) DEFAULT NULL COMMENT '用户名',
  `password` char(50) DEFAULT NULL COMMENT '密码',
  `isdelete` int(10) DEFAULT '0' COMMENT '是否',
  `serialnumber` char(32) DEFAULT NULL COMMENT '学生编号',
  `photo` varchar(200) DEFAULT NULL COMMENT '头像',
  `log` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=329 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_stu_apply
-- ----------------------------
INSERT INTO `lz_stu_apply` VALUES ('295', '张版', '1', '3', '9', '15', '班长', '15678907657', '临沂', '唱歌', '0', 'lisisi', '1a1dc91c907325c69271ddf0c944bc72', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('1', '苏菲娅', '1', '1', '21', '22', '小队长', '13589695797', '山东省临沂市义堂镇', '会跳舞', '0', 'sufei', 'c4ca4238a0b923820dcc509a6f75849b', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('250', '李强里', '1', '3', '0', '0', '小队长', '15678546789', '临沂', '唱歌', '0', 'uuuu', '1a1dc91c907325c69271ddf0c944bc72', '0', null, null, '1');
INSERT INTO `lz_stu_apply` VALUES ('122', '王强', '1', '1', '34', '24', '学生', '15674563458', '临沂', '唱歌', '0', 'user', '1a1dc91c907325c69271ddf0c944bc72', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('249', '李强', '1', '3', '21', '0', '班长', '15678546789', '临沂', '唱歌', '0', 'userr', '1a1dc91c907325c69271ddf0c944bc72', '0', null, '/uploads/20181218161717.png', '0');
INSERT INTO `lz_stu_apply` VALUES ('130', '赵四', '1', '1', '34', '24', '学生', '15674563458', '临沂', '唱歌', '0', 'user', '1a1dc91c907325c69271ddf0c944bc72', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('128', '王花花', '1', '1', '34', '24', '班长', '15674563458', '临沂', '唱歌', '0', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('256', '高明', '1', '1', '35', '38', '卫生委员', '15678976568', '临沂', '唱歌', '0', 'gaoming', '1a1dc91c907325c69271ddf0c944bc72', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('257', '王猛', '1', '3', '21', '0', '学习委员', '15678908765', '临沂', '唱歌', '0', 'usertt', '1a1dc91c907325c69271ddf0c944bc72', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('54', '李猛', '1', '3', '9', '15', '班长', '15678909876', '临沂', '唱歌', '0', 'limemg', '1a1dc91c907325c69271ddf0c944bc72', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('264', '范飞亚', '0', '3', '21', '40', '学生', '15678909876', '临沂', '跳舞', '0', '11', '4297f44b13955235245b2497399d7a93', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('265', '李强国', '1', '4', '23', '24', '班长', '15678908769', '临沂', '唱歌', '0', 'liqiamg', '1a1dc91c907325c69271ddf0c944bc72', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('266', '李思成', '0', '4', '23', '43', '学生', '15678909876', '临沂', '会代码', '0', '1', '4297f44b13955235245b2497399d7a93', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('267', '张明明', '1', '1', '35', '38', '班长', '15678976568', '山东省临沂市罗庄区', '唱歌', '0', 'ui', '1a1dc91c907325c69271ddf0c944bc72', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('297', '张图', '1', '4', '23', '24', '班长', '15678907657', '临沂', '唱歌', '0', 'usert', '1a1dc91c907325c69271ddf0c944bc72', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('298', '测试', '1', '1', '35', '38', '班长', '15678908776', '临沂', '测试特长', '0', 'ceshi', '1a1dc91c907325c69271ddf0c944bc72', '0', '', '20181219143249', '1');
INSERT INTO `lz_stu_apply` VALUES ('299', '王三', '1', '3', '9', '41', '班长', '13211122222', '山东省临沂市罗庄区册山街道办事处', '篮球', '0', 'wangsan', '4297f44b13955235245b2497399d7a93', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('292', '李克强', '0', '4', '10', '16', '学生', '135896957971', '山东省临沂市罗庄区', '有钱', '0', '11', '4297f44b13955235245b2497399d7a93', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('251', '毛岸英', '1', '3', '0', '0', '学生', '15678546789', '临沂', '唱歌', '0', '11', '1a1dc91c907325c69271ddf0c944bc72', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('252', '李强里', '1', '3', '0', '0', '学生', '15678546789', '临沂', '唱歌', '0', '11dd', '1a1dc91c907325c69271ddf0c944bc72', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('24', '张丽丽', '0', '1', '34', '24', '学生', '13456789765', '临沂', '唱歌', '0', 'lili', '1a1dc91c907325c69271ddf0c944bc72', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('248', '王蒙', '0', '4', '23', '24', '学生', '15678456780', '临沂', '唱歌', '0', 'uu', '1a1dc91c907325c69271ddf0c944bc72', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('247', '张有力', '1', '3', '23', '0', '学生', '15678906547', '临沂', '唱歌', '0', 'userrr', 'f1290186a5d0b1ceab27f4e77c0c5d68', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('300', '张有', '1', '0', '23', '15', '学生', '15674747474', '临沂', '唱歌', '0', '111111', '1f0b539445c675b0551acb9b284e40f8', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('301', '颤三', '1', '0', '23', '15', '学生', '15678909876', '临沂', '唱歌', '0', 'userddd', 'e3ceb5881a0a1fdaad01296d7554868d', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('302', '张力', '1', '0', '23', '15', '学生', '15678908755', '临沂', '唱歌', '0', 'uuuu2', '1f0b539445c675b0551acb9b284e40f8', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('303', '张力力', '1', '3', '9', '15', '学生', '13456789065', '临沂', '唱歌', '0', 'vnfeidub', '1f0b539445c675b0551acb9b284e40f8', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('304', '张开', '1', '3', '23', '15', '学生', '15678907657', '临沂', '唱歌', '0', 'vreg', 'dc013b6de2de358c58849c14727c5f33', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('305', '张三', '1', '0', '23', '15', '学生', '15678976568', '临沂临沂', '唱歌', '0', '111', '96e79218965eb72c92a549dd5a330112', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('306', '张丽丽1', '0', '1', '35', '38', '学生', '15678907658', '临沂', '唱歌', '1', 'zhanglili', '1f0b539445c675b0551acb9b284e40f8', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('307', '李大1', '1', '3', '9', '15', '学生', '156723456789', '临沂', '唱歌', '1', 'zhangzhang', '1f0b539445c675b0551acb9b284e40f8', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('308', '张三1', '1', '3', '9', '15', '学生', '15678909876', '临沂', '唱歌', '1', 'zhangzhang1', '1f0b539445c675b0551acb9b284e40f8', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('309', '张锋', '1', '1', '35', '38', '班长', '15678909768', '临沂', '唱歌', '1', 'zhengfeng', '96e79218965eb72c92a549dd5a330112', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('310', '张力', '1', '4', '23', '24', '学生', '15678909876', '临沂', '唱歌', '1', '11111111111', '96e79218965eb72c92a549dd5a330112', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('311', '李鑫', '1', '3', '9', '15', '学生', '15678909876', '临沂', '唱歌', '1', 'zhagdadada', '96e79218965eb72c92a549dd5a330112', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('312', '高明', '1', '1', '35', '38', '学生', '15689098793', '临沂', '唱歌', '0', 'zhang11', '96e79218965eb72c92a549dd5a330112', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('313', '张迪娣', '0', '1', '35', '38', '班长', '15678909876', '山东省临沂市沂南县大庄镇河阳社区', '唱歌', '0', 'zhangdidi', '1f0b539445c675b0551acb9b284e40f8', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('314', '王华', '1', '14', '23', '19', '班长', '15678909876', '山东省临沂市沂南县大庄镇河阳社区', '唱歌', '0', 'meng', 'd9a07834404334b0e4406138d3da0f54', '0', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('315', '苗西', '0', '1', '23', '43', '班长', '13456789095', '山东省临沂市沂南县大庄镇河阳社区', '跳舞', '0', 'yonghuming', '70ab42d345dd3ebac0204d07ef28fdf1', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('316', '张丽丽', '0', '1', '23', '43', '班长', '13456789095', '山东省临沂市沂南县大庄镇河阳社区', '跳舞', '0', 'yonghuming', '70ab42d345dd3ebac0204d07ef28fdf1', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('317', '张思思', '1', '0', '0', '0', '', '156789087687', '', '唱歌', '0', 'zhangzhang', 'passs111', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('318', '张思思', '1', '0', '0', '0', '', '156789087687', '', '唱歌', '0', 'zhangzhang', 'passs111', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('326', '张力', '1', '3', '16', '24', '班长', '12345678899', '临沂', '唱歌', '1', 'userrrr', 'passssss', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('325', '张力', '1', '3', '16', '24', '班长', '12345678899', '临沂', '唱歌', '1', 'userrrr', 'passssss', '1', '', null, '0');
INSERT INTO `lz_stu_apply` VALUES ('324', '22', null, '14', '选择系别', '选择班级', '11', '11', '11', '11', '0', '11', '22', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('328', '', null, '选择学院', '选择系别', '选择班级', '', '', '', '', '0', '', '', '0', null, null, '0');
INSERT INTO `lz_stu_apply` VALUES ('327', '张力', '1', '3', '选择系别', '选择班级', '班长', '12345678899', '临沂', '唱歌', '0', 'userrrr', '', '0', null, null, '0');

-- ----------------------------
-- Table structure for lz_stu_apply_copy1
-- ----------------------------
DROP TABLE IF EXISTS `lz_stu_apply_copy1`;
CREATE TABLE `lz_stu_apply_copy1` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` char(20) DEFAULT NULL COMMENT '姓名',
  `sex` tinyint(10) DEFAULT NULL COMMENT '性别',
  `college` char(20) DEFAULT NULL COMMENT '学院',
  `department` char(20) DEFAULT NULL COMMENT '所在系',
  `class` char(20) DEFAULT NULL COMMENT '班级',
  `post` char(20) DEFAULT NULL COMMENT '职务',
  `phone` char(20) DEFAULT NULL COMMENT '联系方式',
  `house` char(100) DEFAULT NULL COMMENT '户口所在地',
  `speciality` char(20) DEFAULT NULL COMMENT '特长',
  `status` int(10) NOT NULL DEFAULT '0' COMMENT '状态',
  `user` varchar(50) DEFAULT NULL COMMENT '用户名',
  `password` char(50) DEFAULT NULL COMMENT '密码',
  `isdelete` int(10) DEFAULT '0' COMMENT '是否',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=215 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_stu_apply_copy1
-- ----------------------------
INSERT INTO `lz_stu_apply_copy1` VALUES ('1', '李成文', '0', '1', '21', '14', '学生', '14444444444', '山东省临沂市', '学习', '0', 'ergou', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('137', '颤三', '1', '6', '27', '31', '班长', '15645678904', '临沂', '唱歌', '0', 'ul', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('2', '苏菲娅', '1', '6', '20', '32', '小队长', '13589695797', '山东省临沂市义堂镇', '会跳舞', '1', 'sufei', 'c4ca4238a0b923820dcc509a6f75849b', '1');
INSERT INTO `lz_stu_apply_copy1` VALUES ('150', '李成文', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'uaser12greg', 'd596618d8e4c569c277096157bf8ecb9', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('149', '李成文', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'uaser12', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('148', '李成文', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'uaser12', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('147', '李成文', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'uaser1', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('146', '李成文', '1', '3', '21', '22', '班长', '15678956784', '临沂', '唱歌', '0', 'uaser1', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('145', '李成文', '1', '3', '21', '22', '班长', '15678956784', '临沂', '唱歌', '0', 'uaser', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('144', '李成文', '1', '3', '21', '22', '班长', '15678956784', '临沂', '唱歌', '0', 'uaser', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('143', '张三', '1', '3', '选择系别', '选择班级', '班长', '15678965457', '临沂', '唱歌', '0', 'ulqbtrhgbtrhtr', '2463056b62eb62ae583cc55f62d0901b', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('142', '张三', '1', '3', '选择系别', '选择班级', '班长', '15678965457', '临沂', '唱歌', '0', 'ulq', '2463056b62eb62ae583cc55f62d0901b', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('141', '张三', '1', '3', '选择系别', '选择班级', '班长', '15678965457', '临沂', '唱歌', '0', 'ulq', '6512bd43d9caa6e02c990b0a82652dca', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('136', '张强', '1', '3', '选择系别', '选择班级', '班长', '15634567865', '临沂', '唱歌', '0', 'liqiang', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('138', '颤三', '1', '6', '选择系别', '选择班级', '班长', '15645678904', '临沂', '唱歌', '0', 'ull', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('139', '张三', '1', '3', '21', '22', '班长', '15678965457', '临沂', '唱歌', '0', 'ulq', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('140', '张三', '1', '3', '21', '22', '班长', '15678965457', '临沂', '唱歌', '0', 'ulq', '633de4b0c14ca52ea2432a3c8a5c4c31', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('135', '张三', '1', '3', '选择系别', '选择班级', '班长', '15678945678', '临沂', '唱歌', '0', 'u', 'ee11cbb19052e40b07aac0ca060c23ee', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('134', '张三', '1', '3', '21', '22', '班长', '15678945678', '临沂', '唱歌', '0', 'uuu', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('132', '张三', '1', '3', '21', '22', '班长', '15678945678', '临沂', '唱歌', '0', 'uuu', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('133', '张三', '1', '3', '21', '22', '班长', '15678945678', '临沂', '唱歌', '0', 'uuu', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('131', '王强', '1', '1', '选择系别', '选择班级', '班长', '15674563458', '临沂', '唱歌', '0', 'user', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('130', '王强', '1', '1', '34', null, '班长', '15674563458', '临沂', '唱歌', '0', 'user', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('129', 'name', '1', '1', '34', null, '班长', '15674563458', '临沂', '唱歌', '0', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('127', '张三', '1', '4', '10', '16', '班长', '15678945678', '临沂', '唱歌', '0', 'usress', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('128', 'name', '1', '1', '34', null, '班长', '15674563458', '临沂', '唱歌', '0', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('126', '张三', '1', '4', '10', '16', '班长', '15678945678', '临沂', '唱歌', '0', 'usre', 'ee11cbb19052e40b07aac0ca060c23ee', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('125', '张三', '1', '4', '10', '16', '班长', '15678945678', '临沂', '唱歌', '0', 'usre', 'ee11cbb19052e40b07aac0ca060c23ee', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('151', '李成文', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'uaser12greg', 'd596618d8e4c569c277096157bf8ecb9', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('152', '李成文', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'uaser1e', 'e30a77a726a19a10c62a5ed215f56160', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('153', '李成文', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'fwef', '7c3daa31f887c333291d5cf04e541db5', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('154', '李成文', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'fe', '114c1a13ef24e600434a683b9ee9f7f1', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('155', '李成文', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'ge4gr', '46ec877e0175973d3849a81528cecae3', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('156', '李成文1', '1', '3', '选择系别', '选择班级', '班长', '15678956784', '临沂', '唱歌', '0', 'ge4gr', '46ec877e0175973d3849a81528cecae3', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('157', '李四', '1', '3', '21', '22', '班长', '15678796457', '临沂', '唱歌', '0', 'yonhuh', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('158', '李四', '1', '3', '21', '22', '班长', '15678796457', '临沂', '唱歌', '0', 'yonhuh', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('159', '张明', '1', '3', '选择系别', '选择班级', '班长', '15678956789', '临沂', '唱歌', '0', 'yonghu', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('160', '李才', '1', '3', '21', '22', '班长', '14567896578', '临沂', '唱歌', '0', 'qiao', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('161', '李司棋', '1', '4', '10', '16', '班长', '15674567890', '临沂', '唱歌', '0', 'liz', '1a1dc91c907325c69271ddf0c944bc72', '0');
INSERT INTO `lz_stu_apply_copy1` VALUES ('214', 'de', '1', '3', '选择系别', '选择班级', 'd', '12', 'e31', 'df', '0', 'dfedffd', '1aabac6d068eef6a7bad3fdf50a05cc8', '0');

-- ----------------------------
-- Table structure for lz_teaching
-- ----------------------------
DROP TABLE IF EXISTS `lz_teaching`;
CREATE TABLE `lz_teaching` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `catname` varchar(50) DEFAULT NULL COMMENT '名称',
  `pid` int(11) DEFAULT NULL COMMENT '父级id',
  `codes` varchar(20) DEFAULT NULL COMMENT '编号',
  `isdelete` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_teaching
-- ----------------------------
INSERT INTO `lz_teaching` VALUES ('2', '临沂职业学院', '0', '01', '0');
INSERT INTO `lz_teaching` VALUES ('3', '现代服务学院', '0', '03', '0');
INSERT INTO `lz_teaching` VALUES ('4', '商贸物流学院', '0', '04', '0');
INSERT INTO `lz_teaching` VALUES ('5', '信息工程学院', '0', '05', '0');
INSERT INTO `lz_teaching` VALUES ('6', '机电工程学院', '0', '06', '0');
INSERT INTO `lz_teaching` VALUES ('7', '音乐表演专业', '3', '0301', '0');
INSERT INTO `lz_teaching` VALUES ('8', '市场营销专业', '4', '0401', '0');
INSERT INTO `lz_teaching` VALUES ('9', '计算机应用技术专业', '5', '0501', '0');
INSERT INTO `lz_teaching` VALUES ('10', '17322', '8', '', '0');
INSERT INTO `lz_teaching` VALUES ('11', '17323', '9', '07', '0');
INSERT INTO `lz_teaching` VALUES ('12', '17324', '7', '09', '0');
INSERT INTO `lz_teaching` VALUES ('13', '17325', '7', '13', '0');
INSERT INTO `lz_teaching` VALUES ('14', '会计金融学院', '0', '02', '0');
INSERT INTO `lz_teaching` VALUES ('15', '会计专业', '14', '0201', '0');
INSERT INTO `lz_teaching` VALUES ('16', '旅游管理专业', '3', '0302', '0');
INSERT INTO `lz_teaching` VALUES ('17', '17333', '21', '05', '0');
INSERT INTO `lz_teaching` VALUES ('18', '国际商务专业', '4', '0402', '0');
INSERT INTO `lz_teaching` VALUES ('19', '17344', '23', '11', '0');
INSERT INTO `lz_teaching` VALUES ('20', '计算机网络技术专业', '5', '0502', '0');
INSERT INTO `lz_teaching` VALUES ('21', '机电一体化技术专业', '6', '0601', '0');
INSERT INTO `lz_teaching` VALUES ('22', '数控技术专业', '6', '0602', '0');
INSERT INTO `lz_teaching` VALUES ('23', '财务管理专业', '14', '0202', '0');
INSERT INTO `lz_teaching` VALUES ('24', '17355', '16', '15', '0');
INSERT INTO `lz_teaching` VALUES ('25', '17366', '16', '17', '0');
INSERT INTO `lz_teaching` VALUES ('26', '17377', '8', '19', '0');
INSERT INTO `lz_teaching` VALUES ('27', '17327', '20', '21', '0');
INSERT INTO `lz_teaching` VALUES ('28', '17322', '20', '23', '0');
INSERT INTO `lz_teaching` VALUES ('29', '会计', '2', '0101', '0');
INSERT INTO `lz_teaching` VALUES ('30', '现代服务', '2', '0102', '0');
INSERT INTO `lz_teaching` VALUES ('31', '16321', '18', '02', '0');
INSERT INTO `lz_teaching` VALUES ('32', '16322', '18', '01', '0');
INSERT INTO `lz_teaching` VALUES ('33', '16323', '22', '03', '0');
INSERT INTO `lz_teaching` VALUES ('34', '16324', '22', '04', '0');
INSERT INTO `lz_teaching` VALUES ('35', '18311', '21', '06', '0');
INSERT INTO `lz_teaching` VALUES ('36', '18312', '9', '08', '0');
INSERT INTO `lz_teaching` VALUES ('37', '18313', '15', '10', '0');
INSERT INTO `lz_teaching` VALUES ('38', '18314', '23', '12', '0');
INSERT INTO `lz_teaching` VALUES ('39', '18315', '11', '14', '0');
INSERT INTO `lz_teaching` VALUES ('40', '18316', '15', '16', '0');
INSERT INTO `lz_teaching` VALUES ('41', '18317', '30', '18', '0');
INSERT INTO `lz_teaching` VALUES ('42', '18318', '29', '20', '0');
INSERT INTO `lz_teaching` VALUES ('43', '18319', '29', '22', '0');
INSERT INTO `lz_teaching` VALUES ('44', '18320', '30', '24', '0');
INSERT INTO `lz_teaching` VALUES ('1', '学生处', '0', null, '0');

-- ----------------------------
-- Table structure for lz_vol_apply
-- ----------------------------
DROP TABLE IF EXISTS `lz_vol_apply`;
CREATE TABLE `lz_vol_apply` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` char(20) DEFAULT NULL COMMENT '姓名',
  `sex` tinyint(10) DEFAULT NULL COMMENT '性别',
  `college` char(20) DEFAULT NULL COMMENT '学院',
  `department` char(20) DEFAULT NULL COMMENT '所在系',
  `class` char(20) DEFAULT NULL COMMENT '班级',
  `post` char(20) DEFAULT NULL COMMENT '职务',
  `phone` char(20) DEFAULT NULL COMMENT '联系方式',
  `house` char(100) DEFAULT NULL COMMENT '户口所在地',
  `speciality` char(20) DEFAULT NULL COMMENT '特长',
  `status` int(10) NOT NULL DEFAULT '0' COMMENT '状态',
  `code` int(20) DEFAULT NULL COMMENT '编码',
  `worktime` int(20) DEFAULT NULL COMMENT '总工作时长',
  `user` char(50) DEFAULT NULL COMMENT '用户名',
  `password` char(20) DEFAULT NULL COMMENT '密码',
  `post_id` int(10) DEFAULT '0' COMMENT '岗位id',
  `z_id` int(20) unsigned DEFAULT NULL COMMENT '志愿者编号',
  `isdelete` int(10) DEFAULT NULL COMMENT '是否',
  `sid` int(11) DEFAULT NULL COMMENT '学生审核表id',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=299 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_vol_apply
-- ----------------------------
INSERT INTO `lz_vol_apply` VALUES ('1', '李二狗', '0', '商学院', '软件系', '16322', '副队长', '13589695797', '山东省临沂市罗庄区高度街道', '会跳舞', '1', '0', '100', 'ergou', '2222', '0', '1', '1', '3');
INSERT INTO `lz_vol_apply` VALUES ('2', '苏菲娅', '0', '1', '选择系别', '选择班级', '小队长', '13589695797', '山东省临沂市罗庄区高度街道', '会唱歌', '2', '0', '200', 'sufei', '11111', '0', '2', '0', '4');
INSERT INTO `lz_vol_apply` VALUES ('298', '苏烈', '0', '商学院', '软件部', '16552', '小队长', '13589695797', '山东省临沂市罗庄区高度街道', '会吃饭', '1', '0', '150', 'sulie', '111', '0', '1', '0', '3');

-- ----------------------------
-- Table structure for lz_web_log_001
-- ----------------------------
DROP TABLE IF EXISTS `lz_web_log_001`;
CREATE TABLE `lz_web_log_001` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '日志主键',
  `uid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `ip` char(15) NOT NULL DEFAULT '' COMMENT '访客ip',
  `location` varchar(255) NOT NULL DEFAULT '' COMMENT '访客地址',
  `os` varchar(255) NOT NULL DEFAULT '' COMMENT '操作系统',
  `browser` varchar(255) NOT NULL DEFAULT '' COMMENT '浏览器',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT 'url',
  `module` varchar(255) NOT NULL DEFAULT '' COMMENT '模块',
  `controller` varchar(255) NOT NULL DEFAULT '' COMMENT '控制器',
  `action` varchar(255) NOT NULL DEFAULT '' COMMENT '方法',
  `method` char(6) NOT NULL DEFAULT '' COMMENT '请求方式',
  `data` text COMMENT '请求的param数据，serialize后的',
  `create_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '操作时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `ip` (`ip`),
  KEY `create_at` (`create_at`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=41328 DEFAULT CHARSET=utf8 COMMENT='网站日志';

-- ----------------------------
-- Records of lz_web_log_001
-- ----------------------------

-- ----------------------------
-- Table structure for lz_web_log_all
-- ----------------------------
DROP TABLE IF EXISTS `lz_web_log_all`;
CREATE TABLE `lz_web_log_all` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '日志主键',
  `uid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `ip` char(15) NOT NULL DEFAULT '' COMMENT '访客ip',
  `location` varchar(255) NOT NULL DEFAULT '' COMMENT '访客地址',
  `os` varchar(255) NOT NULL DEFAULT '' COMMENT '操作系统',
  `browser` varchar(255) NOT NULL DEFAULT '' COMMENT '浏览器',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT 'url',
  `module` varchar(255) NOT NULL DEFAULT '' COMMENT '模块',
  `controller` varchar(255) NOT NULL DEFAULT '' COMMENT '控制器',
  `action` varchar(255) NOT NULL DEFAULT '' COMMENT '方法',
  `method` char(6) NOT NULL DEFAULT '' COMMENT '请求方式',
  `data` text COMMENT '请求的param数据，serialize后的',
  `create_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '操作时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE,
  KEY `ip` (`ip`) USING BTREE,
  KEY `create_at` (`create_at`) USING BTREE
) ENGINE=MRG_MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC INSERT_METHOD=LAST UNION=(`lz_web_log_001`) COMMENT='网站日志';

-- ----------------------------
-- Records of lz_web_log_all
-- ----------------------------

-- ----------------------------
-- Table structure for lz_work_sheet
-- ----------------------------
DROP TABLE IF EXISTS `lz_work_sheet`;
CREATE TABLE `lz_work_sheet` (
  `sid` int(11) NOT NULL COMMENT '学生id',
  `a_id` int(11) NOT NULL COMMENT '活动id',
  `times` int(11) NOT NULL COMMENT '获得时长',
  `post` int(11) DEFAULT NULL COMMENT '岗位',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_work_sheet
-- ----------------------------

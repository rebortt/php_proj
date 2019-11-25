create database company;
use company;

CREATE TABLE config(
    id int(11) NOT NULL AUTO_INCREMENT,
    site_title varchar(50) DEFAULT NULL COMMENT '网站标题',
    site_url varchar(50) DEFAULT NULL COMMENT '网站地址',
    site_logo varchar(100) DEFAULT NULL,
    site_keywords text COMMENT '网站关键字',
    site_description text COMMENT '网站描述',
    site_copyright varchar(100) DEFAULT NULL COMMENT '版权信息',
    company_name varchar(50) DEFAULT NULL COMMENT '公司名称',
    company_phone varchar(20) DEFAULT NULL COMMENT '公司联系电话',
    company_fax varchar(20) DEFAULT NULL,
    company_email varchar(30) DEFAULT NULL COMMENT '公司电子邮箱',
    company_weixin varchar(30) DEFAULT NULL COMMENT '微信',
    company_ewm varchar(100) DEFAULT NULL COMMENT '公司二维码',
    company_address varchar(50) DEFAULT NULL COMMENT '公司地址',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `config` VALUES (1, '问道茶具有限公司', 'localhost/web/index.html', '/php_proj/web/admin/kindeditor/attached/image/20191125/20191125023131_79906.png', '问道', '一个卖茶具的网站', '问道茶具版权所有', '问道茶具贸易有限公司', '020-83821189', '020-83821190', 'wendao@163.com', '83821189', '/php_proj/web/admin/kindeditor/attached/image/20191125/20191125022636_45527.png', '广州市增城区中新镇闻到茶具有限公司');

CREATE TABLE admin(
    id int(11) NOT NULL AUTO_INCREMENT,
    admin_name varchar(50) DEFAULT NULL COMMENT '管理员账号',
    admin_pass varchar(50) DEFAULT NULL COMMENT '管理员密码',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
insert into admin values(1,'admin','admin');

CREATE TABLE slide(
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(100) DEFAULT NULL COMMENT '幻灯标题',
    thumbnail varchar(255) DEFAULT NULL COMMENT '幻灯缩略图',
    link varchar(100) DEFAULT NULL COMMENT '链接地址',
    orderid int(11) DEFAULT NULL COMMENT '排序id',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `slide` VALUES (13, 'banner1', '/php_proj/web/admin/kindeditor/attached/image/20191125/20191125023355_70260.jpg', 'http://localhost/slide1.php', 1), (14, 'banner2', '/php_proj/web/admin/kindeditor/attached/image/20191125/20191125023500_14122.jpg', 'http://localhost/slide2.php', 2);

CREATE TABLE single(
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(50) DEFAULT NULL COMMENT '单页标题',
    comefrom varchar(20) DEFAULT NULL COMMENT '来源',
    pubdate varchar(20) DEFAULT NULL COMMENT '发布日期',
    keywords text COMMENT '关键字',
    description text COMMENT '描述',
    content text COMMENT '内容',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `single` VALUES (10, '关于我们', '本站', '2019/11/04', '关于我们', '关于我们', '问道茶具贸易有限公司，是中国最大的茶叶经营企业和全球最大的绿茶出口企业。其前身成立于1950年，该公司致力于为全球客户提供了绿色、健康、优质的茶叶饮品。');

CREATE TABLE article(
    id int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
    title varchar(50) DEFAULT NULL COMMENT '文章标题',
    comefrom varchar(20) DEFAULT NULL COMMENT '来源',
    pubdate varchar(20) DEFAULT NULL COMMENT '发布日期',
    keywords text CHARACTER SET utf8mb3 COMMENT '关键字',
    description text CHARACTER SET utf8mb3 COMMENT '描述',
    content text CHARACTER SET utf8mb3 COMMENT '内容',
    posid varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL COMMENT '推荐位',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `article` VALUES (8, '爱茶人士注意啦', '本站', '2019/11/25', '注意', '爱茶人士注意啦', '<pre>高性价比的新茶上市，茶叶门户网站及微信公众平台也频频举行各类团购茶样派发活动，爱茶人士只需稍加留心</pre>', 'setindex,settop'), (9, '养生茶，喝出男性健康', '本站', '2019/11/25', '养生茶，喝出男性健康', '养生茶，喝出男性健康', '养生茶，喝出男性健康', 'setindex'), (10, '茶事起源：“六朝以前的茶事”', '本站', '2019/11/25', '茶事起源：“六朝以前的茶事”', '茶事起源：“六朝以前的茶事”', '<pre>茶事起源：<span style=\"font-family:\'Consolas\';\">“</span>六朝以前的茶事<span style=\"font-family:\'Consolas\';\">”</span></pre>', 'setindex'), (11, '红碎茶红艳的颜色、鲜爽的香气和很高的营养价值', '本站', '2019/11/25', '红碎茶红艳的颜色、鲜爽的香气和很高的营养价值', '红碎茶红艳的颜色、鲜爽的香气和很高的营养价值', '<pre>红碎茶红艳的颜色、鲜爽的香气和很高的营养价值</pre>', 'setindex'), (12, '中国古代史料中的茶字和世界各国对茶字的音译', '本站', '2019/11/25', '中国古代史料中的茶字和世界各国对茶字的音译', '中国古代史料中的茶字和世界各国对茶字的音译', '<pre>中国古代史料中的茶字和世界各国对茶字的音译</pre>', 'setindex'), (13, '茶是用来喝的 一杯陈年普洱味道', '本站', '2019/11/25', '茶是用来喝的 一杯陈年普洱味道', '茶是用来喝的 一杯陈年普洱味道', '<pre>茶是用来喝的 一杯陈年普洱味道</pre>', 'setindex');

CREATE TABLE produce(
    id int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
    title varchar(50) DEFAULT NULL COMMENT '产品标题',
    comefrom varchar(20) DEFAULT NULL COMMENT '来源',
    pubdate varchar(20) DEFAULT NULL COMMENT '发布日期',
    thumbnail varchar(100) DEFAULT NULL COMMENT '缩略图',
    keywords text COMMENT '关键字',
    description text COMMENT '描述',
    content text COMMENT '内容',
    posid varchar(50) DEFAULT NULL COMMENT '推荐位',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `produce` VALUES (8, '茶具一', '本站', '2019/11/25', '/php_proj/web/admin/kindeditor/attached/image/20191125/20191125030244_67370.jpg', '茶具一', '茶具一', '茶具一', 'setindex'), (9, '茶具二', '本站', '2019/11/25', '/php_proj/web/admin/kindeditor/attached/image/20191125/20191125030306_53552.jpg', '茶具二', '茶具二', '茶具二   ', 'setindex');

CREATE TABLE guestbook(
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(50) DEFAULT NULL COMMENT '留言标题',
    pubdate varchar(50) DEFAULT NULL COMMENT '留言时间',
    name varchar(30) DEFAULT NULL COMMENT '称呼',
    tel varchar(20) DEFAULT NULL COMMENT '手机号码',
    qq varchar(15) CHARACTER SET utf32 DEFAULT NULL COMMENT 'qq',
    email varchar(30) DEFAULT NULL COMMENT '邮箱',
    content text COMMENT '留言内容',
    deal varchar(5) DEFAULT '否' NULL COMMENT '是否处理',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE qq(
    id int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
    title varchar(30) DEFAULT NULL COMMENT '标题',
    qqnum varchar(15) DEFAULT NULL COMMENT 'QQ号码',
    truename varchar(20) DEFAULT NULL COMMENT '客服姓名',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE friend(
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(20) DEFAULT NULL COMMENT '标题',
    url varchar(50) DEFAULT NULL COMMENT '链接地址',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `friend` VALUES (2, '茶文艺网', 'http://www.baidu.com'), (3, '中国茶叶网', 'http://www.baidu.com');
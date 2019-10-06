CREATE TABLE `config`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `site_title` varchar(50) DEFAULT NULL COMMENT '网站标题',
    `site_url` varchar(50) DEFAULT NULL COMMENT '网站地址',
    `site_logo` varchar(100) DEFAULT NULL,
    `site_keywords` text COMMENT '网站关键字',
    `site_description` text COMMENT '网站描述',
    `site_copyright` varchar(100) DEFAULT NULL COMMENT '版权信息',
    `company_name` varchar(50) DEFAULT NULL COMMENT '公司名称',
    `company_phone` varchar(20) DEFAULT NULL COMMENT '公司联系电话',
    `company_fax` varchar(20) DEFAULT NULL,
    `company_email` varchar(30) DEFAULT NULL COMMENT '公司电子邮箱',
    `company_weixin` varchar(30) DEFAULT NULL COMMENT '微信',
    `company_ewm` varchar(100) DEFAULT NULL COMMENT '公司二维码',
    `company_address` varchar(50) DEFAULT NULL COMMENT '公司地址',
    PRIMARY KEY(`id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE admin(
    id int(11) NOT NULL AUTO_INCREMENT,
    admin_name varchar(50) DEFAULT NULL COMMENT '管理员账号',
    admin_pass varchar(50) DEFAULT NULL COMMENT '管理员密码',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE slide(
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(100) DEFAULT NULL COMMENT '幻灯标题',
    thumbnail varchar(255) DEFAULT NULL COMMENT '幻灯缩略图',
    link varchar(100) DEFAULT NULL COMMENT '链接地址',
    orderid int(11) DEFAULT NULL COMMENT '排序id',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
    id int(11) NOT NULL COMMENT 'id',
    title varchar(30) DEFAULT NULL COMMENT '标题',
    qqnum varchar(15) DEFAULT NULL COMMENT 'QQ号码',
    truename varchar(20) DEFAULT NULL COMMENT '客服姓名',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE friend(
    id int(11) NOT NULL,
    title varchar(20) DEFAULT NULL COMMENT '标题',
    url varchar(50) DEFAULT NULL COMMENT '链接地址',
    PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
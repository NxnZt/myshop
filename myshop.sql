--创建数据库myshop
create database if not exists myshop;

--后台用户表
create table adminuser(
	id int not null auto_increment primary key comment '用户id',
	username varchar(32) not null unique comment '用户名',
	pass char(32) not null comment '密码',
	status tinyint(1) comment '状态: 1,启用 2,禁用'
)engine=innodb default charset=utf8;

--前台用户表
create table user(
	id int not null auto_increment primary key comment '前台用户id',
	username varchar(32) not null unique comment '用户名',
	name varchar(32),
	pass char(32) not null comment '密码',
	sex tinyint(1) default 1 comment '1:男，0:女',
	address varchar(255) comment '地址',
	email varchar(50) comment '邮箱',
	addtime int comment '时间'
)engine=innodb default charset utf8;

--商品分类表
create table categary(
	id int not null auto_increment primary key comment '分类id',
	name varchar(32) comment '分类名称',
	pid int comment '父类id'
)engine=innodb default charset utf8;

--商品信息表
create table goods(
	id int not null auto_increment primary key comment '商品id',
	cate_id int not null comment '分类id',
	goods_name varchar(255) not null comment '商品名称',
	price double(6,2),
	goods_img varchar(255),
	status tinyint(1) default 1 comment '1：新品 2：精品 3：热销',
	store int default 0 comment '库存',
	addtime int comment '添加时间'
)engine=innodb default charset utf8;

--商品图片
create table goods_img(
	id int not null auto_increment primary key comment '图片id',
	goods_id int not null comment '商品id',
	image_url varchar(255) not null comment '商品图片',
	is_face tinyint(1) default 0 comment '是否为封面'
)engine=innodb default charset utf8;

--订单表
create table `order`(
	id int not null auto_increment primary key comment '订单id',
	uid int not null comment '用户id',
	linkname varchar(255) comment '联系人',
	address varchar(255) not null comment '地址',
	phone varchar(16) comment '电话',
	addtime int comment '下单时间',
	total double(8,2) comment '订单总价',
	`status` tinyint(1) default 0 comment '订单状态 0 已下单 1 已付款 2 已发货 3 订单过期'
)engine=innodb default charset utf8;

--订单详情表
create table detail(
	id int not null auto_increment primary key comment '订单详情id',
	order_id int not null comment '订单id',
	goods_id int not null comment '商品id',
	goods_name varchar(255) not null comment '商品名称',
	goods_price double(6,2) not null comment '商品单价',
	goods_num int not null comment '商品数量'
)engine=innodb default charset utf8;
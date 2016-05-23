<?php

/********************************





2007-3-7





********************************/

@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 

@header("Cache-Control: no-cache, must-revalidate"); 

@header("Pragma: no-cache"); 





//if(defined("_LANMU")) die("后台正在维护中,暂停一段时间");



if(!defined('_ROOT')){ die("Secure Die!");}

define('_IN_ADMIN', 1);
/* s.wx2015/7/24.定义新版编辑器引入路径-------------------------------------------------------------e */
if( !defined('BJQ_PATH') )	define('BJQ_PATH', 'templates/froala_editor/');
//--e




include_once(_ROOT . "/../include/checksession.php");



///////// DATABASE SETUP

define('_TABLE_PRE', '');





	////调用全局变量

	$db_config_file = "/home/httpd/DB_CONFIG.php";

	if(eregi("/wayes_sys/", __FILE__)){

		$db_config_file = "/home/httpd/WY_DB_CONFIG.php";

		if(!defined('_COMMON_DATABASE')) define('_COMMON_DATABASE', 'wayes_common.');///两个地方,header.inc.php 和 database.php





	}else{

		if(!defined('_COMMON_DATABASE')) define('_COMMON_DATABASE', 'homekoo_common.');///两个地方,header.inc.php 和 database.php



	}



	if(file_exists($db_config_file)){

		include $db_config_file;

		$tmp_db_key = defined("JINGXIANG_SERVER") ? "homekoo_wwww" : "homekoo";



		if(($_SERVER["argc"] == 3 && ($_SERVER["argv"][2] == 2 || $_SERVER["argv"][2] == 3))){

			$tmp_db_key = "homekoo_wwww";

		}



		define("_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);







		define("MAIN_DATABASE_HOST",_DATABASE_HOST);

		define("MAIN_DATABASE_NAME","homekoo_common");

		define("MAIN_DATABASE_USER",_DATABASE_USER);

		define("MAIN_DATABASE_PWD",_DATABASE_PWD);



		define("MAIN_DATABASE_PCONNECT", 0);



		///从数据库

		$tmp_db_key = "homekoo_slave";



		define("_DATABASE_HOST_SLAVE",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_DATABASE_NAME_SLAVE",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_DATABASE_USER_SLAVE",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_DATABASE_PWD_SLAVE",$ALL_DB_CONFIG[$tmp_db_key][pw]);



		///新后台数据库

		$tmp_db_key = "homekoo_sys";



		define("_SYS_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_SYS_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_SYS_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_SYS_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);





		///客户表1后台数据库

		$tmp_db_key = "homekoo_sys_m1";



		define("_SYS_M1_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_SYS_M1_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_SYS_M1_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_SYS_M1_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);





		///客户表2后台数据库

		$tmp_db_key = "homekoo_sys_m2";



		define("_SYS_M2_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_SYS_M2_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_SYS_M2_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_SYS_M2_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);





		$tmp_db_key = "homekoo_sys2";//旧151



		define("_SYS2_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_SYS2_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_SYS2_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_SYS2_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);





		$tmp_db_key = "homekoo_sys_tongji";//206



		define("_SYS_TONGJI_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_SYS_TONGJI_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_SYS_TONGJI_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_SYS_TONGJI_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);







		$tmp_db_key = "homekoo_sys_tongji2";//41



		define("_SYS_TONGJI2_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_SYS_TONGJI2_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_SYS_TONGJI2_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_SYS_TONGJI2_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);







		define("_DATABASE_HOST_54",$ALL_DB_CONFIG[54][host]);//54服务器

		define("_DATABASE_NAME_54",$ALL_DB_CONFIG[54][dbname]);

		define("_DATABASE_USER_54",$ALL_DB_CONFIG[54][user]);

		define("_DATABASE_PWD_54",$ALL_DB_CONFIG[54][pw]);





		define("_DATABASE_HOST_49",$ALL_DB_CONFIG[49][host]);//49服务器

		define("_DATABASE_NAME_49",$ALL_DB_CONFIG[49][dbname]);

		define("_DATABASE_USER_49",$ALL_DB_CONFIG[49][user]);

		define("_DATABASE_PWD_49",$ALL_DB_CONFIG[49][pw]);





		define("_DATABASE_HOST_240",$ALL_DB_CONFIG[240][host]);//240,145服务器

		define("_DATABASE_NAME_240",$ALL_DB_CONFIG[240][dbname]);

		define("_DATABASE_USER_240",$ALL_DB_CONFIG[240][user]);

		define("_DATABASE_PWD_240",$ALL_DB_CONFIG[240][pw]);





		define("_DATABASE_HOST_39",$ALL_DB_CONFIG[39][host]);//39服务器

		define("_DATABASE_NAME_39",$ALL_DB_CONFIG[39][dbname]);

		define("_DATABASE_USER_39",$ALL_DB_CONFIG[39][user]);

		define("_DATABASE_PWD_39",$ALL_DB_CONFIG[39][pw]);



		define("_DATABASE_HOST_8",$ALL_DB_CONFIG[old_51][host]);//147统计服务器

		define("_DATABASE_NAME_8",$ALL_DB_CONFIG[old_51][dbname]);

		define("_DATABASE_USER_8",$ALL_DB_CONFIG[old_51][user]);

		define("_DATABASE_PWD_8",$ALL_DB_CONFIG[old_51][pw]);





		define("_DATABASE_HOST_146",$ALL_DB_CONFIG[db146][host]);//146服务器

		define("_DATABASE_NAME_146",$ALL_DB_CONFIG[db146][dbname]);

		define("_DATABASE_USER_146",$ALL_DB_CONFIG[db146][user]);

		define("_DATABASE_PWD_146",$ALL_DB_CONFIG[db146][pw]);





		define("_DATABASE_HOST_WX",$ALL_DB_CONFIG[dbwx][host]);//76服务器

		define("_DATABASE_NAME_WX",$ALL_DB_CONFIG[dbwx][dbname]);

		define("_DATABASE_USER_WX",$ALL_DB_CONFIG[dbwx][user]);

		define("_DATABASE_PWD_WX",$ALL_DB_CONFIG[dbwx][pw]);







		define("_DATABASE_HOST_WX_NEW",$ALL_DB_CONFIG[dbwx_new][host]);//微信2

		define("_DATABASE_NAME_WX_NEW",$ALL_DB_CONFIG[dbwx_new][dbname]);

		define("_DATABASE_USER_WX_NEW",$ALL_DB_CONFIG[dbwx_new][user]);

		define("_DATABASE_PWD_WX_NEW",$ALL_DB_CONFIG[dbwx_new][pw]);





		define("_DATABASE_HOST_WX_JITUAN",$ALL_DB_CONFIG[dbwx_jituan][host]);//微信 集团

		define("_DATABASE_NAME_WX_JITUAN",$ALL_DB_CONFIG[dbwx_jituan][dbname]);

		define("_DATABASE_USER_WX_JITUAN",$ALL_DB_CONFIG[dbwx_jituan][user]);

		define("_DATABASE_PWD_WX_JITUAN",$ALL_DB_CONFIG[dbwx_jituan][pw]);







		define("_DATABASE_HOST_ZHIXIAO_WEIXIN",$ALL_DB_CONFIG[db_zhixiao_weixin][host]);//4服务器

		define("_DATABASE_NAME_ZHIXIAO_WEIXIN",$ALL_DB_CONFIG[db_zhixiao_weixin][dbname]);

		define("_DATABASE_USER_ZHIXIAO_WEIXIN",$ALL_DB_CONFIG[db_zhixiao_weixin][user]);

		define("_DATABASE_PWD_ZHIXIAO_WEIXIN",$ALL_DB_CONFIG[db_zhixiao_weixin][pw]);







		$tmp_db_key = "db152";//152



		define("_DB152_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_DB152_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_DB152_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_DB152_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);





		$tmp_db_key = "db144";//144



		define("_DB144_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_DB144_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_DB144_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_DB144_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);







		unset($ALL_DB_CONFIG);

	}else{

	////调用结束

		

		die("配置文件找不到!");

	



	}



	if(defined("IS_TMP_SYS") && !defined("SYS_UPGRADE_ING")) define("SYS_UPGRADE_ING", IS_TMP_SYS);





define("_DATABASE_PCONNECT", 0);

//////////////

define('_UPLOAD_DIR', _ROOT . '/images'.date("Y"));



define('_UPLOAD_DIR_HTTP', 'images'.date("Y"));//



define('_UPLOAD_MODE', 2);//上传模式（当存在同名文件时）：1是覆盖原有文件，2是新建文件，3是跳过

////////////

////////

define('_TEMPLATE', _ROOT . '/templates');



define('_HTTP_PATH', defined("BENDI_SERVER") ? 'http://bendi.homekoo.com/sys/' : 'http://www.homekoo.com/sys/');//







define('_AUTH_UID', '_uid');



define('_AUTH_USER', '_username');



define('_AUTH_PWD',  '_password');



define('_AUTH_TIME', '_login_time');





define('_AUTH_ADMIN_ADDCODE', 'aadf26er4sd');//随机码





define('_DATE_FORMAT', 'Y-m-d');



//

define('_PAGESIZE', defined('_IN_ADMIN') ? 20 : 20);



define('_FTP_UPLOAD_DIR', 'newupload');//ftp上传的目录，用于导入户型的jpg，koc文件



//include_once("./include/check.php");







//插入上传页面

include_once(_ROOT . "/include/function.php");



make_class("_cache");




include_once(_ROOT . "/../include/database.php");





include_once(_ROOT . "/include/class._base.php");



////////

$op = get_para('op', '', 'trim');

$id = get_para('id');

$page = get_para('page', 1);

/////////



make_class('_db');

make_class('_db2');

make_class("_sess");



make_class("_mysession");

make_class("_group");

make_class("_admin");

make_class("_admin_login_record");

make_class("_member");

make_class("_log");



make_class("_tg_loupan");

///////检查权限



$can_edit_ad_groups = array();////可以编辑广告的权限





$PROVINCE_ARRAY = array(1 => '广东', '广西', '贵州', '北京', '重庆', '福建', '甘肃', '海南', '安徽', '河北', '黑龙江', '河南', '湖北', '湖南', '江苏', '江西', '吉林', '辽宁', '内蒙古', '宁夏', '青海', '山东', '上海', '山西', '陕西', '四川', '天津', '新疆', '西藏', '云南', '浙江', '台湾', '澳门', '香港');





//栏目

//<?php if($_member->is_admin || in_array('buy_juan', $tmp_info)){ ? >

$LANMU_ARRAY = array('NO' => '没定义栏目', 'U' => '首页管理', 'S' => '会员管理', 'T' => '管理员权限管理', 'V' => '留言管理',  'S1' => '跳转信息', 'S2' => '管理操作记录', 'link' => '友情连接', 'ad' => '广告管理', 'S3' => '楼盘管理', 'S4' => '省市区管理', 'S5' => '楼盘户型管理', 'S6' => '评论管理', 'S7' => '单体空间管理', 'S8' => '全景图（pn3）管理', 'S9' => '设计方案管理 ', 'S10' => '文章管理',  'S12' => '建材家居广场管理', 'S13' => '标准单体空间管理', 'S14' => '户型/pn3广告管理', 'S15' => '工作统计管理','S11' => '装修公司管理', 'S16' => '装修公司管理2', 'S17' => '委托设计管理', 'S18' => '委托信息市场管理', 'S19' => '会员上传图片管理', 'S20' => '3d模型分类列表', 'K' => '访问统计', 'mymodel' => '模型管理', 'myhome_design' => '修改我家的装修方案管理', 'buy_juan' => '购买优惠券管理', 'jiangpin_detail_list' => '奖品详细列表', 'cuxiao' => '促销打折管理', 'js_call' => '文章调用规则管理', 'Q' => '我家我设计软件升级管理', 'Q2' => '橱柜软件升级管理', 'KJ' => '空间布置', 'qq_group' => 'QQ群管理', 'kitprj' => '橱柜项目软件升级管理', 'tpm' => 'tpm软件升级管理', 'soft_visit_info' => '软件收集信息管理', 'taocan' => '套餐管理', 'taocan_product' => '套餐产品管理', 'taocan_product_ku' => '套餐产品库管理', 'taocan_peijian' => '套餐配件管理', 'taocan_peijian_ku' => '套餐配件库管理', 'taocan_pic' => '套餐图片管理', 'taocan_ask' => '套餐问答管理', 'taocan_comment' => '套餐留言管理', 'taocan_order' => '套餐订单管理', 'taocan_order_detail' => '套餐订单详情管理', 'taocan_apply_credit' => '申请积分管理', 'taocan_order_product' => '套餐订单产品管理', 'taocan_cailiao' => '套餐板材说明管理', 'SHOP' => '尚品门店管理', 'cailiao' => '材料管理', 'taocan_diaocha' => '套餐调查管理', 'taocan_diaocha_xuanxiang' => '套餐调查选项管理', 'taocan_diaocha_result' => '套餐调查结果管理', 'taocan_huxing' => '套餐适合户型管理', 'free_designer' => '免费设计设计师管理', 'taocan_bz_layout' => '套餐平面布置管理', 'taocan_cart' => '套餐购物车管理', 'taocan_design' => '方案定制管理', 'taocan_juan' => '代金卷管理', 'free_design_apply' => '免费设计申请跟进管理', 'laws_space' => '交换空间报名管理', 'tags' => '关键字管理', 'taocan_xilie' => '套餐系列管理', 'taocan_lipin' => '礼品管理', 'taocan_lipin_apply' => '礼品申请管理', 'taocan_help' => '帮助中心管理', 'taocan_zx' => '购买咨询管理', 'ip_do' => '要处理的IP管理', 'ip_pb' => '屏蔽IP管理', 'model_admin' => '软件模型管理', 'yongjin_setting' => '佣金支付设置管理', 'taocan_pinpai' => '模型品牌管理', 'taocan_model_cat' => '模型分类管理', 'taocan_model' => '套餐模型管理', 'taocan_model_designer' => '模型下载收藏管理', 'taocan_fav' => '套餐收藏夹管理', 'site_setting' => '网站变量管理', 'site_go' => '网站跳转时间段管理', 'taocan_pic_zuobiao' => '套餐图片坐标管理', 'tuangou_apply' => '团购发起帖管理', 'tuangou_zhaoji' => '团购召集管理', 'dp_design' => '搭配场方案管理', 'dp_caizhi' => '搭配场材质管理', 'dp_design_detail' => '搭配场方案详情管理', 'taocan_wenjuan' => '商务问卷调查管理', 'chugui_shili' => '厨柜设计实例管理', 'taocan_bz_room' => '套餐标准房间管理', 'taocan_bz_room2' => '房型检查', 'diy_flash_group' => '自定义flash广告组管理', 'diy_flash' => '自定义flash广告管理', 'diy_flash_pic' => '自定义flash广告大图管理', 'sp_AgentRecord' => '400坐席记录管理', 'sp_CallRecord' => '400呼叫记录管理', 'zuoxi400' => '400坐席管理', 'sns_admin' => 'sns客户管理员管理', 'taocan_talk' => '沟通记录管理', 'callcenter' => '400客服管理后台', 'zt_loupan' => '专题楼盘管理', 'shop_news' => '门店资讯管理', 'shop_news_page' => '门店资讯翻页管理', 'zt_huxing' => '专题户型管理', 'zt_huxing_taocan' => '专题户型方案管理', 'show_product_cat' => '展示产品分类管理', 'show_product' => '展示产品管理', 'cansai_jieduan' => '参赛阶段管理', 'cansai_zuopin' => '参赛作品管理', 'cansai_zuopin' => '参赛作品管理', 'cansai_vote' => '投票记录管理', 'taocan_bbs' => '套餐软件用户交流管理', 'zt_tpl' => '楼盘专题模板管理', 'taocan_product_pic' => '产品参考图片管理', 'chugui_article' => '橱柜文章管理', 'chugui_flash' => '橱柜FLASH管理', 'spzp_soft' => '尚品软件用户管理', 'spzp_soft_downlist' => '尚品软件用户下载记录管理', 'auto_send_email' => '随机发送邮件管理', 'ofroom' => '上门量尺申请管理', 'tuangou_product_cat' => '团购活动产品展示分类管理', 'tuangou_product' => '团购活动产品展示管理', 'tel400' => '400来电记录管理', 'member_fankui' => '会员来电反馈管理', 'good_anli' => '成功案例管理', 'good_anli_design' => '成功案例方案管理', 'taocan_wenjuan2' => '商务问卷调查2管理', 'member_fankui_update' => '会员反馈更改记录管理', 'spzp_product_need' => '尚品产品建议管理', 'spzp_product_comment' => '尚品产品Comment管理', 'jiameng' => '加盟专区管理', 'jiameng_apply' => '加盟申请表管理', 'taocan_mianliao' => '套餐可选面料管理', 'taocan_pn3_pic' => '套餐pn3材料管理', 'pages' => '关于尚品管理', 'pages_content' => '关于尚品内容管理', 'sms_version' => '短信版本管理', 'sms_send' => '短信发送记录管理', 'sms_send_detail' => '短信发送详细记录管理', 'search_keyword' => '来源关键字管理', 'liangchi_time_update' => '计划量尺时间修改记录管理', 'ms_time' => '秒杀抢购时间段管理', 'ms_product' => '秒杀产品管理', 'ms_comment' => '秒杀产品点评管理', 'ms_order' => '秒杀产品订单管理', 'ms_mianliao' => '秒杀产品面料管理', 'ms_product_pic' => '秒杀产品图片管理', 'ms_product_detail' => '秒杀产品详情管理', 'ms_mianliao_cat' => '秒杀产品面料分类管理', 'newsys_log' => '新后台修改日志管理', 'search_keyword_tongji' => '来源数量统计记录管理', 'chat_gg' => '聊天室公告管理', 'search_keyword_result' => '关键字排名统计管理', 'zt_loupan_editor' => '专题楼盘管理系统编辑权限', 'zt_loupan_designer' => '专题楼盘管理系统设计师权限', 'zt_huxing_taocan_index' => '楼盘户型关联方案管理', 'zt_huxing_ext' => '楼盘户型额外信息管理', 'zt_huxing_jindu' => '楼盘户型进度管理', 'zt_huxing_taocan_index' => '楼盘户型关联方案管理', 'visit_follow' => '访客跟踪管理', 'daiyanren' => '新居代言人管理', 'chufang_guishen_cailiao' => '厨房柜身材料管理', 'chufang_mianban_cailiao' => '厨房面板材料管理', 'chufang_lashou_ku' => '厨房拉手库管理', 'zt_loupan_ask' => '专题楼盘在线问答管理', 'zt_loupan_message' => '专题楼盘留言管理', 'daiyanren100' => '100代言人管理', 'daiyanren_fangan' => '100代言人家具配套方案管理', 'daiyanren_tpl' => '代言人模版管理', 'mydesigner' => '方案设计师管理', 'page_time' => '网页运行时间管理', 'all_sys' => '总后台管理', 'lzurl' => '录制网址管理', 'taocan_ext' => '套餐额外表管理', 'taocan_shenpi' => '套餐审核管理', 'designer_ext' => '设计师额外信息表管理', 'bisai_mingti' => '设计师比赛命题管理', 'baisai_zuopin' => '设计师参赛作品管理', 'bisai_gundong' => '头部滚动信息管理', 'bisai_message' => '互动留言板管理', 'baisai_vote' => '设计师作品投票管理', 'from_code' => '对外开放广告代码管理', 'from_code_visit' => '广告代码访问记录管理', 'vote_jilu' => '新居测试记录管理', 'soft_pt_design' => '家具配套方案管理', 'apply_unit' => '申请模型管理', 'kouhao' => '口号征集管理', 'ip_go_record' => 'IP跳转记录管理', 'taocan_product_ku_record' => '套餐产品库价格修改记录管理', 'taocan_product_ku_taocan_record' => '套餐产品库修改套餐记录管理', 'taocan_product_ku_taocan_product_record' => '套餐产品库修改套餐产品记录管理', 'out_views_apply' => '外网流量统计申请管理', 'out_views_day' => '外网流量每日统计管理', 'out_views_detail' => '外网流量详情管理', 'zhineng_zuopin' => '智能版软件作品管理', 'anli_user' => '免费量房案例客户管理', 'anli_room' => '免费量房案例房间管理', 'fankui_gj' => '客户跟进信息管理', 'sp_flash_fengge' => '尚品flash顾客生活测试管理', 'sp_flash_city' => '尚品flash城市管理', 'sp_flash_word' => '尚品flash装饰风格流行词管理', 'sp_flash_product' => '尚品flash推荐产品管理', 'sp_flash_cailiao' => '尚品flash板材管理', 'sp_flash_left_lanmu' => '尚品flash首页左边栏目管理', 'sp_flash_right_lanmu' => '尚品flash首页右边栏目管理', 'apply_user' => '模型申请帐号管理', 'apply_user_money' => '模型申请帐号充值记录管理', 'apply_down_record' => '模型申请下载记录管理', 'apply_card' => '模型充值卡号管理', 'sp_flash_style' => '尚品flash风格管理', 'mydiy_form' => '自定义搜索表单管理', 'tuijian_fanli' => '推荐量房获得返利管理', 'soft_product_check' => '橱柜软件模型选择表管理', 'doorstyle_check' => '橱柜软件门板模型选择表管理', 'doorstyle_brand' => '门板品牌管理', 'search_default' => '方案户型默认搜索条件管理', 'wayes_shop' => '维意门店管理', 'wayes_ofroom' => '维意上门量尺申请管理', 'wayes_article' => '维意文章管理','wayes_article_cat' => '维意文章分类管理', 'wayes_taocan' => '维意方案管理', 'wayes_taocan_pic' => '维意方案展示大图管理', 'wayes_flash' => '维意首页flash管理', 'wayes_menu' => '维意导航菜单管理', 'wayes_tuijian' => '维意首页推荐套餐名称管理', 'wayes_tuijian_taocan' => '维意首页推荐套餐列表管理', 'fankui_design' => '量房客户方案管理', 'material_check' => '橱柜软件材质模型选择表管理', 'article_keyword' => '文章关键字管理', 'bz_room_data' => '自动匹配户型数据管理', 'sp_ip_record' => '访问特别网页IP记录管理', 'search_pipei_tiaojian' => '搜索匹配户型条件管理', 'search_pipei_result' => '搜索匹配户型结果管理', 'fankui_design_guanli' => '量房设计管理管理', 'company_ip' => '公司人员IP管理', 'wayes_search_flow' => '维意搜索跟踪管理', 'wayes_visit_flow' => '网站跟踪访问管理', 'fankui_sourse_type' => '客户来源管理', 'chugui_pinpai' => '橱柜产品品牌管理', 'homekoo_guodu_flow' => '过渡页跟踪管理', 'soft_suohao' => '软件锁号管理', 'search_pipei_bumanyi' => '搜索匹配不满意管理', 'search_pipei_mission' => '搜索匹配方案任务管理', 'room_post_search' => '房型搜索记录管理', 'good_user' => '活跃会员管理','group_mail_admin' => '邮件群发管理', 'db_tongji' => '数据库统计管理', 'db_tongji_detail' => '数据库统计详情表管理', 'yeji_month_yaoqiu' => '三地每月业绩要求管理', 'caizhi_pinpai' => '材质品牌管理', 'dx_fangan' => '典型空间问题方案管理', 'baidu_keyword_report' => '百度关键词报告管理', 'baidu_keyword' => '百度关键词管理', 'baidu_unit' => '百度关键词单元管理', 'baidu_plan' => '百度关键词计划管理', 'baidu_account' => '百度帐号管理', 'baidu_report_update' => '百度报告下载上传记录管理', 'baidu_keyword_url' => '百度设置网址管理', 'baidu_keyword_url_update' => '百度设置网址记录管理', 'keyword_taocan' => '套餐关键字管理', 'keyword_article' => '资讯关键字管理', 'good_keyword_article' => '核心资讯关键字管理', 'keyword_article_cat' => '文章关键字分类管理', 'baidu_idea' => '百度创意管理', 'baidu_ban_keyword' => '百度已有屏蔽关键词管理', 'baidu_set_ban_keyword' => '百度手工设置屏蔽关键词管理', 'dasai_zuopin' => '三亚大赛作品管理', 'dasai_zuopin_pic' => '三亚大赛作品图片管理', 'dasai_vote' => '三亚大赛投票记录管理','wayes_flash_fengge' => '维意flash顾客生活测试管理' ,'wayes_flash_city' => '维意flash城市管理' ,'wayes_flash_word' => '维意flash装饰风格流行词管理' ,'wayes_flash_product' => '维意flash推荐产品管理' ,'wayes_flash_cailiao' => '维意flash板材管理' ,'wayes_flash_left_lanmu' => '维意flash首页左边栏目管理' ,'wayes_flash_right_lanmu' => '维意flash首页右边栏目管理' ,'wayes_flash_style' => '维意flash风格管理', 'free_mydesign' => '免费设计对应方案管理', 'baidu_idea_report' => '百度创意报告管理', 'yx_user' => '营销用户管理', 'yx_record' => '营销记录管理', 'yx_mission' => '营销任务管理', 'yx_mission_record' => '营销任务运行记录管理', 'ip_article' => '文章访问IP记录管理', 'chugui_apply' => '图库需求反馈管理', 'chugui_apply_guiti' => '图库需求柜体管理', 'chugui_apply_door' => '图库需求门板管理', 'chugui_apply_caizhi' => '图库需求材质管理', 'chugui_apply_wujin' => '图库需求五金电器管理', 'baidu_keyword_update' => '百度关键字下载上传记录管理', 'gx_school' => '高校学校管理', 'gx_xi' => '高校系管理', 'gx_user' => '高校报名人员管理', 'gx_day_ip' => '高校IP每天来源记录管理', 'gx_ip_detail' => '高校IP详细来源记录管理', 'gx_day_post' => '高校发帖每天记录管理', 'gx_post_detail' => '高校发帖详细记录管理', 'gx_article' => '高校推广广告版本管理', 'baidu_op_record' => '百度软件操作记录管理', 'good_keyword_article_cat' => '品牌关键字分类管理', 'article_tpl' => '品牌文章模板管理', 'article_tpl_record' => '品牌文章生成记录管理', 'taocan_search_html' => '套餐搜索静态页管理', 'homekoo_article' => '新居文章采集库管理', 'taocan_search_num' => '套餐搜索有记录管理', 'tg_loupan' => '推广楼盘管理', 'tg_fankui_type' => '推广客户状态表管理', 'tuangou_zhuanti' => '团购专题页面管理', 'yx_tongji_sms' => '营销邮件额外内容管理', 'keyword_zhuanti' => '关键字专题管理', 'keyword_zhuanti_cat' => '关键字专题栏目管理', 'keyword_zhuanti_article' => '关键字专题文章管理', 'yx_tongji_sms_send_record' => '营销统计发送短信记录管理', 'liangchi_tongji_sms_send_record' => '每天量尺统计发送短信记录管理', 'tg_loupan_talk_send' => '推广楼盘沟通发送记录管理', 'tg_loupan_qi_send' => '推广楼盘短信发送记录', 'tg_qun_send' => '推广楼盘邮件发送记录', 'zhuanti_choujiang_record' => '专题抽奖记录管理', 'pachong_record' => '百度爬虫跟踪记录管理', 'yx_email_tpl' => '邮件发送模版管理', 'yx_email_wait_send_list' => '邮件发送队列管理', 'yx_sms_tpl' => '短信发送模版管理', 'weike_designer' => '精英设计师管理', 'weike_designer_taocan' => '精英设计师设计的方案管理', 'weike_designer_loupan' => '精英设计师设计的楼盘管理', 'sms_send_record' => '短信发送记录管理', 'member_fankui_tuijian_record' => '客户推荐记录管理', 'member_fankui_get_card_record' => '客户获得购物卡记录管理', 'taocan_del_record' => '套餐删除记录管理', 'bz_layout_mrs' => '户型平面mrs管理', 'soft_shouji_xml' => '软件收集资料管理', 'soft_suohao_user' => '软件锁号用户管理', 'cancel_rec_email' => '取消订阅邮箱管理', 'liangchi_kehu' => '量尺本客户信息管理', 'liangchi_room' => '量尺本房间信息管理', 'liangchi_room_canshu' => '量尺本房间参数信息管理', 'liangchi_room_data' => '量尺本房间数据信息管理', 'liangchi_furs_canshu' => '量尺本物件参数信息管理', 'liangchi_furs_data' => '量尺本物件数据信息管理', 'liangchi_xtd' => '量尺本房间XTD文件管理', 'designer_tongji_week' => '设计师每周统计管理', 'shop_tongji_week' => '团队每周统计管理', 'fenji_luyin' => '分机录音管理', 'zt_tuangou_question' => '专题团购活动-常见问题管理', 'zt_tuangou_buyreason' => '专题团购活动-购买理由管理', 'zt_tuangou' => '专题团购活动权限', 'zt_tuangou_banners' => '专题团购活动-广告管理管理', 'zt_tuangou_layout_model' => '专题团购活动-视图模块管理', 'zt_tuangou_configuration' => '专题团购活动-活动配置管理', 'zt_tuangou_content' => '专题团购活动-活动内容管理', 'server_disk' => '服务器空间管理', 'sp_flash_message' => '尚品flash-意见反馈管理', 'admin_login_record' => '后台账号登陆时间记录管理', 'member_visit_record' => '客户被查看记录管理', 'admin_phone' => '后台账号手机管理', 'yaoqing_designer_sms' => '邀请设计师短信记录管理', 'baidu_keyword_tiaojia_record' => '关键字调价记录管理', 'tg_site_taocan_son' => '推广站-套餐对应管理', 'tg_site_class' => '推广站-文章分类管理', 'tg_site_article' => '推广站-文章管理', 'tg_site_banner' => '推广站-首页图片管理', 'weibo' => '微博内容管理', 'dajinjuan_sn' => '代金券序列号管理', 'daijinjuan_send_record' => '代金券序列号发送记录管理', 'tuiguang_zhuanyi_record' => '推广跟进人转移记录管理', 'gj_user_reject_liangchi' => '直销人员因故不能量尺管理', 'local_server_baodao' => '本地服务器报到记录管理', 'designer_reject_record' => '设计师拒绝接收客户记录管理', 'fankui_to_gj_user_record' => '客户转设计师记录管理', 'tg_site_user' => '新站用户管理', 'zhuanti_loupan' => '团购专题关联楼盘管理', 'fenchi_sms_record' => '分尺发送给设计师短信记录管理', 'fankui_designer_change_record' => '客户设计师转移记录管理', 'loupan_search_record' => '楼盘搜索记录管理', 'loupan_read_record' => '楼盘查看记录管理', 'taocan_cat' => '套餐分类管理', 'taocan_cat_index' => '套餐分类关系管理', 'taocan_cat_pic' => '套餐分类对应效果图管理', 'liangchi_diaocha' => '量房报名调查管理', 'liangchi_diaocha_xuanxiang' => '量房报名调查选项管理', 'liangchi_diaocha_xuanxiang_record' => '量房报名调查选项记录管理', 'liangchi_diaocha_record' => '量房报名调查文本内容记录管理', 'from_taocan_liangfang_record' => '从套餐过来报名记录管理', 'from_taocan_visit_record' => '从套餐点击到报名页面记录管理', 'need_xuanran_record' => '需要渲染的房间记录管理', 'xuanran_pic_record' => '房间渲染图片管理', 'new_index_dingzhi' => '新首页全屋家具定制体验管理', 'wayes_photo' => '维意型行色摄管理', 'wayes_photo_detail' => '维意型行色摄-图片管理', 'designer_team' => '设计中心小组管理', 'liangchi_kehu_file' => '量尺本客户文件管理', 'right_tip_article' => '右下角浮动内容管理', 'kefu_fenpei_record' => '客服分配客户记录管理', 'right_win_record' => '右边浮动窗口显示或查看记录管理', 'taocan_edit_record' => '套餐操作记录管理', 'soft_shop' => '设计师组或门店管理', 'soft_user_login_record' => '锁号用户登录记录管理', 'zhixiao_designer' => '直销设计师图片管理管理', 'huxing_designer' => '楼盘户型设计师管理', 'page_zt_huxing' => '户型页面资料填写管理', 'fankui_shiji_dan_record' => '设计师修改实际下单时间记录管理', 'jd_dingzhi' => '套餐详情页经典的房间定制管理', 'taocan_anli' => '套餐详情页成功案例管理', 'koc_mianji_update_record' => 'koc面积更新记录管理', 'taocan_bz_room_update_record' => '套餐标准房间更新记录管理', 'kefu_cacel_type' => '客服打回原因管理', 'caiwei_year' => '财位年份对应设置管理', 'remai_product_buy' => '热卖推荐立即抢购管理', 'remai_product_tiyang' => '热卖推荐立即体验管理', 'mykeyword_file' => '分析关键字文件管理', 'mykeyword' => '分析关键字管理', 'mykeyword_keys' => '分解的关键字管理', 'kefu_url' => '客服网址链接管理', 'mykeyword_ban_keys' => '否定的关键字管理', 'sale_cancel_time_record' => '销售跟进时间清除记录表管理', 'ds_check_page_record' => '设计师检查页面记录管理', 'lipin_qg' => '礼品抢购的产品管理', 'lipin_qg_record' => '礼品抢购记录管理', 'ofroom_xuqiu' => '量房的需求和爱好管理', 'xinpin_gg_pic' => '新品发布广告图管理', 'zt_anli_cat' => '专题案例分类管理', 'zt_anli_detail' => '专题案例详情管理', 'zt_seo' => '专题SEO信息管理', 'soft_mission_file' => '软件任务上传结果管理', 'soft_mission_pic' => '软件任务上传结果图片管理', 'zt_xg_cat' => '专题效果图分类管理', 'zt_xg_pic' => '专题效果图上传管理', 'index_hot_cat' => '首页热门分类管理', 'kp_index_hot_cat' => '首页宽屏热门分类管理', 'index_lanmu' => '首页页面栏目管理', 'index_lanmu_cat' => '首页页面栏目分类管理', 'bz_room_group' => '标准房间归类管理', 'hot_loupan_dingzhi_tuijian' => '热门楼盘全屋定制推荐管理', 'gundong_ad_lanmu' => '滚动广告大栏目管理', 'gundong_ad_lanmu_pic' => '滚动广告大栏目图片管理', 'quanwu_lanmu_cat' => '首页全屋定制顶部分类管理', 'tiyan_pic' => '苹果应用体验照片管理', 'tiyan_pic_detail' => '苹果应用体验照片详情照片管理', 'soft_api_tongji' => '软件api调用统计管理', 'tuiguang_team' => '推广团队管理', 'kefu_team' => '客服团队管理', 'baidu_zz_group' => '统计跟踪纵轴词管理', 'baidu_zz_type' => '统计跟踪类型管理', 'baidu_zz_cat' => '统计跟踪分类管理', 'baidu_zz_keyword' => '统计跟踪关键词管理', 'showhome_apply' => '嘉年华邀请函管理', 'showhome_apply_pic' => '嘉年华邀请函上传美图管理', 'showhome_article' => '嘉年华图片列表管理', 'zhixiao_team_week_shoukuan_record' => '团队周收款记录管理', 'zhixiao_user_week_shoukuan_record' => '个人周收款记录管理', 'weike_ofroom' => '威客发布任务管理', 'baidu_word_cat' => '词根类别管理', 'baidu_word' => '词根管理', 'baidu_key' => '关键词管理', 'taocan_fengge' => '套餐风格描述管理', 'soft_shouji_zuhe' => '软件收集组合统计管理', 'baidu_jihua_danyuan' => '百度计划单元管理', 'taocan_jiajuxiu_record' => '套餐设置家具秀记录管理', 'baidu_jihua_danyuan_zuhe' => '百度计划单元组合方式管理', 'taocan_designer' => '套餐设计师管理', 'taocan_designer_index' => '套餐分配设计师管理', 'taocan_fengge_des' => '套餐对应风格介绍管理', 'taocan_fangxing_fengge' => '套餐对应房型风格介绍管理', 'bbs_index_pic' => '论坛首页图片管理', 'bbs_index_article' => '论坛首页文章推荐管理', 'yx_yeji_phone' => '每日需要收业绩短信的手机管理', 'baidu_chuangyi' => '百度创意库管理', 'baidu_chuangyi_index' => '百度创意库关联单元管理', 'search_hot_loupan' => '我搜我家-热搜楼盘管理', 'search_hot_huxing' => '我搜我家-热搜户型管理', 'search_hot_room' => '我搜我家-热搜房型管理', 'bbs_thread_keyword' => '论坛主题关键字管理', 'fankui_liangchi_send_record' => '确定量尺时间短信记录管理', 'soft_shouji_guanzhu' => '云帐号关注管理', 'bz_room_keyword' => '户型关键词管理', 'taocan_keyword' => '套餐关键词管理', 'weike_anli' => '威客任务完成案例管理', 'zhidao_search_question' => '百度知道-搜索问题列表管理', 'zhidao_luru_question' => '百度知道-录入问题列表管理', 'zhidao_question_cat1' => '百度知道-问题一级分类管理', 'zhidao_question_cat2' => '百度知道-问题二级分类管理', 'zhidao_question_cat3' => '百度知道-问题三级分类管理', 'zhidao_huashu_cat1' => '百度知道-话术一级分类管理', 'zhidao_huashu_cat2' => '百度知道-话术二级分类管理', 'zhidao_huashu' => '百度知道-话术管理', 'fankui_choujiang_record' => '客户抽奖记录管理', 'taocan_need_shenpi_record' => '套餐重新审核记录管理', 'yx_email_read_record' => '营销系统邮件被查看记录管理', 'yx_email_open_link_record' => '营销系统邮件被打开网站记录管理', 'yx_email_baoming_record' => '营销系统邮件报名记录管理', 'yx_email_error_record' => '不能发送邮箱记录管理', 'yx_email_tongji' => '邮件发送统计管理', 'zhidao_user' => '百度知道-知道系统帐号管理', 'taocan_test_upload' => '套餐上传测试管理', 'qq_tmp' => 'QQ号码临时添加管理', 'zhidao_seo_cat1' => '网站SEO-一级分类管理', 'zhidao_seo_cat2' => '网站SEO-二级分类管理', 'zhidao_seo_cat3' => '网站SEO-三级分类管理', 'zhidao_seo_luru' => '网站SEO-录入标题列表管理', 'zhidao_seo_word' => '网站SEO-伪原创替换词管理', 'baidu_idea_tmp' => '百度创意临时表管理', 'zhidao_seo_user' => '网站SEO-论坛使用帐号管理', 'app_gg' => '新居app-公告管理', 'app_pic_gg' => '新居app-图片广告管理', 'taocan_542_index' => '套餐542对应效果图关系管理', 'member_loupan_tongji' => '客户楼盘临时统计管理', 'app_youhui' => '新居app-优惠管理', 'app_miaosha' => '新居app-限时秒杀管理', 'app_feedback' => '新居app-意见反馈管理', 'app_order' => '新居app-秒杀订单管理', 'weibo_search' => '微博内容查询管理', 'soft_code_setting' => '激活码设置管理', 'taocan_hot_paihang' => '套餐详情页热销排行管理', 'soft_chufang_kehu' => '厨房生活云体验客户信息管理', 'soft_chufang_kehu_file' => '厨房生活云体验客户文件管理', 'soft_app_setting' => 'app标识设置管理', 'soft_app_setting' => 'app标识设置管理', 'soft_app_tuisong_record' => 'app苹果推送记录管理', 'soft_app_tuisong_detail_record' => 'app苹果推送详细记录管理', 'site_seo_diy' => '网站自定义SEO设置管理', 'site_seo_key' => '网站SEO替换词管理', 'taocan_mianban_ku' => '非厨房面板库管理', 'taocan_mianban_record' => '非厨房面板关联记录管理', 'no_shenpi_taocan_visit_record' => '未审核套餐访问记录管理', 'zx_article' => '装修频道文章管理', 'zx_article_cat' => '装修频道文章分类管理', 'soft_guwen_kehu' => '云顾问客户信息管理', 'custom_article' => '定制导购频道文章管理', 'custom_article_cat' => '定制导购频道文章分类管理', 'custom_gg' => '定制导购频道广告管理', 'soft_guwen_article' => '云顾问文章信息管理', 'j_carnival_setting' => '家具团购配置管理', 'taocan_des' => '套餐描述管理', 'zt_lanmu' => '空间定制专题-栏目管理', 'zt_detail' => '空间定制专题-专题资料管理', 'zt_hot_tags' => '空间定制专题-热门标签管理', 'soft_guwen_fengge' => '云顾问风格对应图片管理', 'soft_guwen_price' => '云顾问价格对应表管理', 'soft_shouji_dat' => '软件收集data资料管理', 'index_daoshu' => '首页倒计时管理', 'index_daoshu_shiduan' => '首页倒计时时段管理', 'soft_guwen_mianji' => '云顾问空间区间管理', 'dt_url_record' => '动态网址跳转记录管理', 'app_down_record' => 'app下载统计管理', 'ipad_pic_cat' => 'ipad推荐图片分类管理', 'ipad_pic' => 'ipad推荐图片管理', 'friend_link_kongjian' => '空间定制友情链接管理', 'friend_link_fengge' => '风格定制友情链接管理', 'friend_link_zuhe' => '组合定制友情链接管理', 'soft_pinpai_fengge' => '软件品牌对应风格管理', 'yun_account_apply' => '云帐号申请管理', 'taocan_center_pic_record' => '中间套餐图片点击记录管理', 'taocan_paixu_setting' => '三个栏目套餐排序设置管理', 'taocan_paixu_detail' => '三个栏目排序详情管理', 'yun_xg_account' => '云效果图帐号管理', 'yun_xg_pingjia' => '云效果评价内容管理', 'taocan_list_visit_record' => '网站列表页访问记录管理', 'ipad_fengxiang' => 'ipad分享内容管理', 'hr_article_cat' => '人事招聘-文章分类管理', 'hr_article' => '人事招聘-文章管理', 'hr_banner_cat' => '人事招聘-banner分类管理', 'hr_banner' => '人事招聘-banner管理', 'hr_zhiwei1_cat' => '人事招聘-校园职位分类管理', 'hr_zhiwei1' => '人事招聘-校园职位管理', 'hr_zhiwei1_index' => '人事招聘-校园人才库管理', 'hr_zhiwei2_cat' => '人事招聘-社会职位分类管理', 'hr_zhiwei2' => '人事招聘-社会职位管理', 'hr_zhiwei2_index' => '人事招聘-社会人才库管理', 'hr_user' => '人事招聘-用户管理', 'hr_jianli' => '人事招聘-用户简历管理', 'hr_jianli_gzjl' => '人事招聘-用户简历-工作经历管理', 'hr_jianli_jybj' => '人事招聘-用户简历-教育培训背景管理', 'hr_jianli_file' => '人事招聘-用户简历-附件管理', 'heka2012' => '2012中秋贺卡管理', 'user_guanzhu_record' => '客户关注记录管理', 'user_read_record' => '客户最近浏览记录管理', 'new_search_keyword' => '网站搜索关键词管理', 'new_search_replace_keyword' => '网站搜索替换关键词管理', 'new_search_record' => '网站搜索记录管理', 'new_search_detail_record' => '网站搜索详细记录管理', 'new_search_chai_record' => '网站搜索拆分词语管理', 'soft_bumen1' => '一级管理部门管理', 'soft_bumen2' => '二级管理部门管理', 'soft_bumen3' => '三级管理部门管理', 'soft_fengge_kongjian' => '风格系列对应品牌空间管理', 'hot_dingzhi_tuijian' => '最热定制推荐管理', 'hot_dingzhi_tuijian_cat' => '最热定制推荐分类管理', 'homepage_make_html' => '生成首页静态文件', 'html_auto_update_record' => '静态文件自动更新记录管理', 'new_search_hot_keyword' => '网站搜索热门关键词管理', 'leitai_record' => '直销擂台记录管理', 'peitong_liangchi_record' => '陪同量尺进度表管理', 'online_ip_check_record' => '实时IP检查管理', 'spzptuangou_auto_update_record' => '团购目录更新记录管理', 'bancai_tuijian_taocan_record' => '板材推荐套餐记录管理', 'taocan_bag' => '套餐打包组合管理', 'tj_need_url' => '需要统计的网址管理', 'new_search_zt' => '网站搜索专题列表管理', 'taocan_fengge_icon' => '风格对应小图标管理', 'tj_need_url_keyword' => '网址的关键词点击数管理', 'tj_need_url_day' => '网址每天点击数管理', 'tj_need_url_keyword_day' => '网址的关键词每天点击数管理', 'tj_site_keyword' => '网站关键词点击管理', 'tj_site_url' => '网站网址点击管理', 'tj_site_keyword_day' => '网站关键词每天点击管理', 'tj_site_url_day' => '网站网址每天点击管理', 'sp_pindao_tiying' => '乐厨频道特色定制体验管理', 'sp_pindao_fengge_taocan' => '乐厨频道潮流风格推荐套餐管理', 'zuhe_jd_tuijian' => '组合频道经典定制推荐管理', 'yigui_style_tuijian' => '衣柜频道-亮点推荐管理', 'yigui_style_dingzhi' => '衣柜频道-特色定制管理', 'yigui_style_fengge' => '衣柜频道-潮流风格管理', 'new_search_right_gg' => '新搜索右边广告管理', 'new_search_zhuti' => '新搜索主题管理', 'new_search_zhuti_article' => '新搜索主题文章管理', 'new_search_zhuti_other_article' => '新搜索主题文章对应关联文章管理', 'new_search_zhuti_other_taocan' => '新搜索主题文章对应关联图片管理', 'new_search_zhuti_article_record' => '新搜索主题文章好评记录管理', 'wap_gg' => '手机端5个广告位管理', 'zt_message' => '专题客户留言区管理', 'new_search_zhuti_keyword_index' => '新搜索主题文章对应核心关键词管理', 'zhengti_yigui_tuijian' => '整体衣柜频道-亮点推荐管理', 'zhengti_yigui_dingzhi' => '整体衣柜频道-特色定制管理', 'zhengti_yigui_fengge' => '整体衣柜频道-潮流风格管理', 'dianshi_gui_tuijian' => '电视柜频道-亮点推荐管理', 'dianshi_gui_dingzhi' => '电视柜频道-特色定制管理', 'dianshi_gui_fengge' => '电视柜频道-潮流风格管理', 'dingzhi_chuang_cat' => '定制床分类管理', 'dingzhi_chuang_tuijian' => '定制床频道-亮点推荐管理', 'dingzhi_chuang_dingzhi' => '定制床频道-特色定制管理', 'dingzhi_chuang_fengge' => '定制床频道-潮流风格管理', 'dingzhi_chuang_gongyi' => '定制床频道-床屏工艺管理', 'tg_sourse' => '推广来源设置管理', 'member_fankui_jieshou_record' => '接收客户记录管理', 'taobao_kefu_wangwang' => '淘宝客服旺旺号对应关系管理', 'taobao_kefu_zhibiao_record' => '淘宝客服详细指标记录管理', 'taobao_ztc_record' => '直通车效果记录管理', 'taobao_yx_yeji_record' => '淘宝营销业绩汇总记录管理','new_search_fangan_keyword' => '网站方案搜索关键词管理' ,'new_search_fangan_replace_keyword' => '网站方案搜索替换关键词管理','new_search_article_keyword' => '网站文章搜索关键词管理' ,'new_search_article_replace_keyword' => '网站文章搜索替换关键词管理' , 'seo_url_record' => '网站SEO来源设置管理','new_search_wuxiao_keyword' => '网站搜索无效词管理','tg_site_dingzhi_banner' => '定制类频道广告图片管理', 'new_search_wenti' => '智能搜索-常见问题解答管理', 'xinju_zhidao_top_cat' => '新居知道-头部焦点文章分类管理', 'xinju_zhidao_top_article' => '新居知道-头部焦点文章管理', 'xinju_zhidao_cat' => '新居知道-问题分类管理', 'xinju_zhidao_question_cat' => '新居知道-大家都在问-问答分类管理', 'xinju_zhidao_question' => '新居知道-大家都在问-系列问答管理', 'xinju_zhidao_hot_keyword' => '新居知道-热搜关键词管理', 'xinju_zhidao_hot_question' => '新居知道-热门问题管理', 'xinju_zhidao_tuijian_article' => '新居知道-右边问题推荐管理', 'diansys_yeji_day_record' => '直销每天业绩短信发送记录管理', 'diansys_yeji_day_send_user' => '直销每天业绩短信发送人管理', 'newsys_yeji_day_record' => '客服每天业绩短信发送记录管理', 'newsys_yeji_day_send_user' => '客服每天业绩短信发送人管理', 'tgsys_yeji_day_record' => '推广每天业绩短信发送记录管理', 'tgsys_yeji_day_send_user' => '推广每天业绩短信发送人管理', 'new_search_zhuiwen_record' => '搜索文章追问记录管理', 'gj_user_tingchi_record' => '设计师停尺记录管理', 'top_search_tuijian_keyword' => '头部搜索框推荐词管理', 'bottom_search_tuijian_keyword' => '底部弹窗搜索框推荐词管理', 'yidong_index_gg' => '移动版-首页广告管理', 'yidong_index_kj_link' => '移动版-首页频道下空间连接管理', 'yidong_index_text_gg_link' => '移动版-首页频道下文字广告连接管理', 'yidong_index_quanwu_loupan' => '移动版-首页全屋定制楼盘推荐管理', 'company_off_record' => '公司离职人员记录管理', 'search_form_keyword' => '搜索框默认内容管理', 'zx_pindao_cuxiao' => '装修频道内容页促销活动管理', 'zx_pindao_zt_tuijian' => '装修频道首页精彩专题管理', 'dingzhi_chuang_pingshen' => '定制床-床屏-床身资料管理', 'baidu_soft_tisheng_keyword' => '百度提升软件关键词设置管理', 'baidu_soft_tisheng_keyword_record' => '百度提升软件关键词记录管理', 'baidu_soft_tisheng_keyword_fenpei_record' => '百度提升软件关键词分配记录管理', 'tuijian_new_huodong' => '推荐最新优惠活动管理', 'diansys_yeji_week_send_user' => '直销每周业绩短信发送人管理', 'diansys_yeji_week_record' => '直销每周业绩短信记录管理', 'chufang_fengge_index' => '厨房风格对应关系管理', 'zhixiao_yun_tongji' => '直销云管理统计管理', 'search_tongji_day_record' => '智能搜索短信发送记录管理', 'search_tongji_day_send_user' => '智能搜索短信发送人管理', 'site_tongji_pindao_url' => '网站频道统计网址管理', 'site_tongji_pindao_url_record' => '网站频道统计网址记录管理', 'dingzhi_shili' => '2013定制案例管理', 'dingzhi_shili_ds' => '2013定制案例第二块管理', 'dingzhi_shili_room' => '2013定制案例第三块管理', 'dingzhi_shili_tuijian' => '2013定制案例推荐管理',  'tongji_yuan' => '网站独立页面统计-源管理管理', 'tongji_yuan_url' => '网站独立页面统计-网址管理管理', 'tongji_yuan_data' => '网站独立页面统计-数据管理管理', 'list_search_hot_keyword' => '列表搜索热门词管理', 'search_hot_question' => '搜索热门问题管理', 'xc_choujiang_setting' => '现场抽奖设置管理', 'xc_choujiang_phone' => '现场抽奖手机资料填写管理', 'cj_wenti_tiyan' => '体验中心-常见问题解答管理', 'cj_wenti_zhixiao' => '直销频道-常见问题解答管理', 'cj_wenti_quanwu' => '全屋频道-常见问题解答管理', 'hr_mail' => '人才-邮件记录管理', 'index_kp_gg' => '首页宽屏版-广告管理', 'index_kp_rexiao_link' => '首页宽屏版-热销新品右边文字连接管理', 'index_kp_rexiao_center' => '首页宽屏版-热销新品大图内容管理', 'index_kp_rexiao_bottom' => '首页宽屏版-热销新品小图内容管理', 'index_kp_fengge_cat' => '首页宽屏版-风格速递左边分类管理', 'index_kp_fengge_pic' => '首页宽屏版-风格速递图片管理', 'index_kp_quanwu_pic' => '首页宽屏版-全屋搭配图片管理', 'index_kp_baibian_pic' => '首页宽屏版和宅屏版-百变空间图片管理', 'index_kp_shipai' => '首页宽屏版-网友实拍管理', 'zt_go_setting' => '专题跳转设置管理', 'bbs_list_gg' => '论坛列表页广告管理', 'list_kp_dingzhi_paihang' => '宽屏列表页-定制排行管理', 'list_kp_xinpin_tuijian' => '宽屏列表页-新品推荐管理', 'list_kp_jiaju_shipai' => '宽屏列表页-网友家居实拍管理', 'list_kp_hot_search' => '宽屏列表页-网友热搜关键词管理', 'list_kp_bottom_pic' => '宽屏列表页-底部图片内容管理', 'pic_index_hot_pic' => '图库频道首页-热门装修效果图管理', 'zhixiao_sheji_zhuli' => '直销设计助理管理', 'index_kuan_zai_gg' => '首页头部(新居快报上面)宽屏-窄屏图片管理', 'index_kuan_right_gg' => '首页头部宽屏右边广告图片管理', 'index_dingzhi_daren_right_gg' => '首页定制达人右边广告图片管理', 'index_baibian_tuijian' => '首页百变定制方案推荐管理', 'kp_list_header_gg' => '宽屏列表页头部广告管理', 'zhixiao_chengjiao_lv_pk_setting' => '直销成交率最差PK设置管理', 'kp_index_gg' => '宽屏首页广告图管理', 'admin_check_record' => '管理员帐号检查记录管理', 'index_dingzhi_daren_gg' => '首页底部定制达人内容管理', 'kp_kj_pindao_gg' => '新版空间频道页广告管理', 'kp_kj_pindao_baibian' => '新版空间频道页百变栏目管理', 'kp_kj_pindao_daogou' => '新版空间频道页定制导购管理', 'kp_kj_pindao_hot_search' => '新版空间频道页热搜关键词管理', 'kp_kj_pindao_xiu' => '新版空间频道页定制秀场管理', 'kp_kj_pindao_gexing' => '新版空间频道页个性定制管理', 'kp_list_hot_tuijian' => '新版列表页最热定制推荐管理', 'kp_kongjian_lanmu_tuijian' => '新版空间频道各栏目推荐连接管理', 'kp_gndz_tuijian' => '新版首页功能定制方案推荐管理', 'kp_baibian_dingzhi' => '新版首页百变定制管理', 'kp_baibian_dingzhi_detail' => '新版首页百变定制对应图片管理', 'kp_quanwu_right_gg' => '新版首页全屋定制右边广告管理', 'kp_gndz_search' => '新版首页功能定制搜索推荐管理', 'kp_guodu_dingzhi' => '新版过渡页特色定制专题管理', 'chat_keyword_cat' => '聊天记录关键词分组管理', 'chat_keyword' => '聊天记录关键词管理', 'chat_keyword_day_record' => '聊天记录关键词每天统计管理', 'chat_day_record' => '聊天记录每天统计管理', 'jiaju_diy_bancai' => '家具DIY体验馆-板材库管理', 'jiaju_diy_qiangmian' => '家具DIY体验馆-墙面库管理', 'jiaju_diy_dimian' => '家具DIY体验馆-地面库管理', 'jiaju_diy_record' => '家具DIY体验馆-套餐记录管理', 'jiaju_diy_xg_record' => '家具DIY体验馆-效果图记录管理', 'site_channel_static_list' => '网站频道转静态页面管理', 'fankui_wufa_fenpei_sms_record' => '客户无法分配短信记录管理', 'keyword_talk_index' => '关键词对应聊天内容管理', 'zx_url_tags' => '装修频道标签管理', 'weixin_question' => '微信趣味问答管理', 'zx_tags' => '装修频道标签管理', 'weixin_choujiang' => '微信抽奖记录管理', 'dingzhi2013_article' => '定制攻略2013文章管理', 'dingzhi2013_gg' => '定制攻略2013图片广告管理', 'pindao_diy_gg' => '家居DIY右边广告图管理', 'zhixiao_kaoti_cat' => '直销考题分类管理', 'zhxiao_kaoti' => '直销考题库管理', 'zhxiao_kaoti_xuanxian' => '直销考题库选项管理', 'zhixiao_kaoti_user' => '直销考题用户资料管理', 'zhixiao_kaoti_record' => '直销考题测试记录管理', 'zhixiao_kaoti_detail_record' => '直销考题测试详细记录管理', 'weixin_menu' => '微信自定义菜单管理', 'weixin_submenu' => '微信自定义子菜单管理', 'tuiguang_team_zutuan' => '推广团队组团管理', 'chahuahui_zhuti' => '茶话会主题管理', 'chahuahui_baoming_record' => '茶话会报名记录管理', 'dd_fangan_ma_record' => '订单系统导出方案码记录管理', 'weixin_talk_record' => '微信聊天记录管理', 'pk_laokehu_record' => '新居E家PK赛老客户介绍记录管理', 'wayes_index_pic' => '维意首页图片管理', 'woxiu_record' => '我秀我家-记录管理', 'woxiu_keyword' => '我秀我家-标签管理', 'woxiu_pic_record' => '我秀我家-图片记录管理', 'woxiu_pl_record' => '我秀我家-评论记录管理', 'woxiu_good_record' => '我秀我家-喜欢记录管理', 'huodong_baodao' => '活动报道管理', 'huodong_baodao_detail' => '活动报道介绍管理', 'huodong_baodao_pic' => '活动报道图片管理', 'huodong_baodao_detail3' => '活动报道第三栏介绍管理', 'soft_back_url' => '软件登录返回网址设置管理', 'soft_shop_api_record' => '店面信息同步接口记录管理', 'weike_sheji_anli' => '经验设计师-设计案例管理', 'weike_sheji_anli_pl_record' => '经验设计师-设计案例-评论记录管理', 'weike_sheji_anli_good_record' => '经验设计师-设计案例-喜欢记录管理', 'weike_index_gg' => '设计师频道首页广告管理', 'pindao_tags' => '各空间频道标签管理', 'product_jd_tuijian' => '详情页经典定制推荐管理', 'fengge_taocan_tuijian_1' => '卧房家具定制栏目风格套餐管理', 'fengge_taocan_tuijian_2' => '书房家具定制栏目风格套餐管理', 'fengge_taocan_tuijian_6' => '青少年房家具定制栏目风格套餐管理', 'fengge_taocan_tuijian_8' => '客餐厅家具定制栏目风格套餐管理', 'fengge_taocan_tuijian_7' => '厨房家具定制栏目风格套餐管理', 'fengge_taocan_tuijian_10' => '全屋定制栏目套餐管理', 'index_week_tuijian' => '首页本周推荐管理', 'baidu_account_sale_record' => '百度帐号每天消费记录管理', 'app_index_kj_pic' => '新居app-首页空间图片管理', 'taocan_cat_pic_record' => '套餐组合分类方案图片记录管理', 'sp_pindao_fengge_tuijian' => '乐厨频道潮流风格推荐管理', 'search_top_setting' => '智能搜索置顶设置管理', 'tg_kefu_record_show' => '在线导购每天聊天记录管理', 'kj_list_guanzhu_record' => '列表页关注排行榜管理', 'taocan_pic_tag_cat' => '套餐效果图标签分类管理', 'taocan_pic_tag' => '套餐效果图标签管理', 'taocan_pic_set_tag' => '套餐效果图设置标签管理', 'site_test_url' => '网站需测试网址管理', 'site_test_url_record' => '网站测试网址记录管理', 'fengge_ceshi_cat' => '风格测试-风格管理', 'fengge_ceshi_pic' => '风格测试-图片管理', 'fengge_ceshi_pfen' => '风格测试-评分管理', 'zy_talk_record' => '电话专员沟通记录管理', 'wangwang_talk_record' => '旺旺聊天记录表管理', 'wangwang_fuwu' => '旺旺聊天服务语管理', 'sj2013_index_banner' => '手机端网站-首页轮播图管理', 'sj2013_index_hot' => '手机端网站-首页热门栏目管理', 'sj2013_index_room1' => '手机端网站-首页卧房栏目管理', 'sj2013_index_room2' => '手机端网站-首页书房栏目管理', 'sj2013_index_room3' => '手机端网站-首页青少年房栏目管理', 'sj2013_index_room4' => '手机端网站-首页客餐厅栏目管理', 'sj2013_index_room5' => '手机端网站-首页厨房栏目管理', 'sj2013_list_keyword' => '手机端网站-列表页头部关键字管理', 'wangwang_city' => '旺旺聊天城市管理', 'kefu_kaoti_bigcat' => '客服考题大分类管理','kefu_kaoti_cat' => '客服考题分类管理' ,'kefu_kaoti_user' => '客服考题用户资料管理' ,'kefu_kaoti_record' => '客服考题测试记录管理' ,'kefu_kaoti_detail_record' => '客服考题测试详细记录管理','kefu_kaoti' => '直销考题库管理' ,'kefu_kaoti_xuanxian' => '直销考题库选项管理', 'wangwang_shop_talk_record' => '旺旺聊天专卖店记录表管理', 'designer_fangan_sms_record' => '设计师方案短信记录管理', 'tg_sourse_xiaofei_record' => '推广来源每天消费记录管理', 'index2013_dingzhi' => '新版首页-头部定制栏目管理', 'index2013_gn_dingzhi' => '新版首页-功能定制栏目管理', 'index2013_fg_sudi' => '新版首页-风格速递栏目管理', 'index2013_hot_dingzhi' => '新版首页-热销定制栏目管理', 'index2013_baibian_article' => '新版首页-百变定制栏目右边文章管理', 'index2013_quanwu_left' => '新版首页-全屋定制栏目左边推荐楼盘管理', 'index2013_quanwu_left_article' => '新版首页-全屋定制栏目左边推荐文章管理', 'index2013_quanwu_gg' => '新版首页-全屋定制栏目广告管理', 'index2013_gg' => '新版首页-头部广告管理', 'index2013_baibian_gg' => '新版首页-百变定制栏目右边广告管理', 'bbs_taolun_record' => '论坛-大家都在讨论管理', 'weixin_talk_liucheng_setting' => '微信沟通流程设置管理', 'weixin_user_ext' => '微信用户额外信息管理', 'weixin_dengji_designer_record' => '微信登记设计师流程记录管理', 'weixin_dengji_kehu_record' => '微信登记客户流程记录管理', 'weixin_fuwu_chat_record' => '微信服务号对话记录管理', 'kp_gndz_search_new' => '新版首页功能定制搜索推荐-新管理', 'weixin_changjing_record' => '微信场景记录管理', 'weixin_fuwu_user' => '微信服务号用户表管理', 'right_zx_new_huodong' => '右侧在线咨询上的最新活动管理', 'nh_weixin_fuwu_user' => '年会微信服务号用户表管理', 'nh_weixin_fuwu_user_piao' => '年会微信服务号用户表-漂流瓶记录管理', 'nh_weixin_menu' => '年会微信菜单管理', 'nh_weixin_baodao' => '年会微信报道内容管理', 'nh_weixin_send' => '年会微信推送内容管理', 'nh_weixin_send_record' => '年会微信推送记录管理', 'nh_weixin_piao' => '年会微信漂流瓶内容管理', 'nh_weixin_piao_get_record' => '年会微信漂流瓶我获取的记录管理', 'nh_weixin_piao_talk_record' => '年会微信漂流瓶沟通记录管理', 'nh_weixin_choujiang' => '年会微信模拟抽奖管理', 'nh_weixin_zhuanfa' => '年会微信转发内容管理', 'nh_weixin_zhuanfa_record' => '年会微信转发记录管理', 'nh_weixin_jiemu' => '年会微信节目内容管理', 'nh_weixin_vote_record' => '年会微信节目投票记录管理', 'nh_weixin_vote_setting' => '年会微信节目投票控制设置管理', 'nh_weixin_fuwu_user_guanzhu' => '年会微信服务号用户关注管理', 'nh_weixin_yao_setting' => '年会微信摇一摇控制设置管理', 'baike' => '新居百科管理', 'hd_zhuanti' => '活动专题管理', 'set_fav_record' => 'sem收藏统计管理', 'sem_email_record' => 'sem订阅邮箱管理', 'wayes_taocan_fengge' => '维意套餐风格管理', 'wayes_jiaju_diy_bancai' => '维意家具DIY体验馆-板材库管理', 'wayes_jiaju_diy_qiangmian' => '维意家具DIY体验馆-墙面库管理', 'wayes_jiaju_diy_dimian' => '维意家具DIY体验馆-地面库管理', 'wayes_jiaju_diy_record' => '维意家具DIY体验馆-套餐记录管理', 'wayes_jiaju_diy_xg_record' => '维意家具DIY体验馆-效果图记录管理', 'wayes_index_banner' => '维意首页banner广告管理', 'wayes_index_jidu_hot' => '维意首页季度热款管理', 'wayes_index_tehui' => '维意首页限时特惠管理', 'wayes_index_news' => '维意首页新闻速递管理', 'wayes_designer' => '维意精英设计师管理', 'wayes_index_dingzhi' => '维意首页精选定制管理', 'wayes_index_dingzhi_right' => '维意首页精选定制右边广告管理', 'wayes_index_dingzhi_bottom' => '维意首页精选定制底部广告管理', 'wayes_index_jiaju_daogou' => '维意首页家具导购管理', 'wayes_index_sai_jia' => '维意首页网友晒家管理', 'wayes_index_wenti' => '维意首页常见问题管理', 'wayes_index_bottom_banner' => '维意首页底部banner广告管理', 'wayes_index_bottom_article' => '维意首页底部文章管理', 'wayes_dingzhi_gushi' => '维意定制故事-记录管理', 'wayes_dingzhi_gushi_room' => '维意定制故事-房间管理', 'wayes_dingzhi_gushi_room_xg' => '维意定制故事-房间首页效果图管理', 'wayes_dingzhi_gushi_room_detail' => '维意定制故事-房间详情管理', 'wayes_dingzhi_gushi_buy_record' => '维意定制故事-购买流程管理', 'wayes_dingzhi_gushi_buy_record_detail' => '维意定制故事-购买流程详情管理', 'wayes_dingzhi_gushi_designer' => '维意定制故事-设计师团队管理', 'wayes_dingzhi_gushi_pl' => '维意定制故事-评论管理', 'wayes_dingzhi_gushi_zt' => '维意定制故事-专题推荐管理', 'wayes_dingzhi_gushi_banner' => '维意定制故事-头部banner管理', 'wayes_remai' => '维意详情页热卖爆款管理', 'wayes_zhan_pai' => '维意详情页最赞排行管理', 'wayes_hot_keyword' => '维意详情页热门关键词管理', 'wayes_list_gg' => '维意列表页广告管理', 'wayes_taocan_type' => '维意套餐类型管理', 'loupan_price_ku' => '楼盘楼价入库管理', 'quyu_price_ku' => '区域楼价入库管理', 'wayes_tiyan_lunbo' => '维意体验中心轮播图管理', 'yx2014_choujiang_user' => '2014元宵抽奖人信息管理', 'yx2014_choujiang_miti' => '2014元宵谜题信息管理', 'yx2014_choujiang_setting' => '2014元宵奖项信息管理', 'xinju_weixin_fuwu_user' => '新居后台微信用户表管理', 'sem2014_zt_jiangpin' => '2014SEM专题奖品管理', 'sem2014_zt_chou_record' => '2014SEM专题抽奖记录管理', 'wayes_taocan_fengge_room_xg' => '维意套餐风格房间效果图管理', 'designer_pj_record' => '设计师评价临时表管理', 'designer_zhongdian_gj_record' => '设计师客户重点跟进记录管理', 'loupan_zhongdian_gj_record' => '楼盘客户重点跟进记录管理', 'jindian_kehu_record' => '进店客户记录管理', 'qq2014_zt_tuijian_record' => '2014QQ专题推荐记录管理', 'zt_shengqing_talk_record' => '深情对话记录管理', 'fankui_kehu_loupan' => '客户新楼盘信息收集管理', 'weixin_user_jiangpin_list' => '奖品列表管理', 'weixin_user_jieduan' => '阶段表管理', 'weixin_user_zj_list' => '用户中奖列表管理', 'weixin_user_zj_list' => '用户中奖列表管理', 'weixin_user_oldfriend_list' => '老友卡列表管理', 'weixin_user_designer_list' => '设计师列表管理', 'weixin_user_designer_pj_list' => '客户对设计师评价表管理', 'phone_server_send_record' => '手机服务端发送短信记录管理', 'xinju2014_weixin_user' => '新居2014微信用户表管理', 'xinju2014_weixin_chat_record' => '新居2014微信对话记录管理', 'xinju2014_weixin_kefu_admin' => '新居2014微信客服管理员管理', 'xinju2014_weixin_kefu_talk_record' => '新居2014微信客服沟通记录管理', 'xinju2014_fankui_type' => '新居2014微信客户状态管理', 'xinju2014_weixin_fenpei_record' => '新居2014微信分配客户提醒记录管理', 'weixinsys_zuijin_xianshanghuodong' => '手机微信最近线上活动数据表管理', 'search_fk_record' => '搜索建议反馈记录管理', 'xinju_app_record' => '新居app代码管理', 'xinju2014_weixin_yuyinku_record' => '新居2014微信语音库记录管理', 'search_article_yuangong_answer_record' => '搜索文章员工回答记录管理', 'soft_shouji_kehuhao_record' => '方案收集客户号记录管理', 'xinju2014_weixin_qufa_des' => '新居2014微信群发图文内容管理', 'xinju2014_weixin_huashu_record' => '新居2014微信话术库记录管理', 'baidu_url_zhua_record' => '百度网址抓取记录管理','xinju2014_weibo_user' => '新居2014微博用户表管理' ,'xinju2014_weibo_chat_record' => '新居2014微博对话记录管理' ,'xinju2014_weibo_kefu_admin' => '新居2014微博客服管理员管理' ,'xinju2014_weibo_kefu_talk_record' => '新居2014微博客服沟通记录管理' ,'xinju2014_weibo_fenpei_record' => '新居2014微博分配客户提醒记录管理' ,'xinju2014_weibo_yuyinku_record' => '新居2014微博语音库记录管理' ,'xinju2014_weibo_huashu_record' => '新居2014微博话术库记录管理' ,'xinju2014_weibo_qufa_des' => '新居2014微博群发图文内容管理','xinju2000_weixin_user' => '服务号微信用户表管理' ,'xinju2000_weixin_chat_record' => '服务号微信对话记录管理' ,'xinju2000_weixin_kefu_admin' => '服务号微信客服管理员管理' ,'xinju2000_weixin_kefu_talk_record' => '服务号微信客服沟通记录管理' ,'xinju2000_fankui_type' => '服务号微信客户状态管理' ,'xinju2000_weixin_fenpei_record' => '服务号微信分配客户提醒记录管理' ,'xinju2000_weixin_yuyinku_record' => '服务号微信语音库记录管理' ,'xinju2000_weixin_huashu_record' => '服务号微信话术库记录管理' ,'xinju2000_weixin_qufa_des' => '服务号微信群发图文内容管理', 'weixin_shangyouyinxiang_dianping' => '微信尚友印象点评管理', 'tuangou201404_huodong_tongji' => '201404团购活动统计管理', 'weixin_jiashu_fuwu_user' => '微信家书E家用户表管理', 'jiaohu_keyword' => '交互式设计关键词管理', 'kj_dz_yinan' => '功能定制空间难题管理', 'zx_daogou_reboot_tq_record' => '在线导购重启TQ服务器记录管理', 'index2014_jidu_fengshan' => '首页季度风尚标广告管理', 'shipin_gg_baoming_record' => '视频广告报名客户记录管理', 'xinju2000_weixin_menu' => '新居服务号微信自定义菜单管理', 'xinju2000_weixin_menu_info' => '新居服务号微信自定义菜单内容管理', 'weixin_yx_mission' => '新居服务号微信群发任务内容管理', 'weixin_yx_mission_record' => '新居服务号微信营销任务运行记录管理', 'weixin_yx_record' => '新居服务号微信营销任务记录管理', 'yuying_fenzu_type' => '投票分组类型管理', 'yuying_sheji_zuopin' => '运营部设计作品管理', 'yuying_sheji_zuopin_vote' => '运营部设计作品投票记录管理', 'tuangou20140501_choujiang_huodong' => '2014五一抽奖活动统计管理管理', 'tuangou20140501_choujiang_setting' => '2014五一抽奖活动设置管理管理', 'xinju_baike' => '新居百科管理', 'xinju2000_weixin_cg_record' => '新居服务号马上闯关记录管理', 'wm_campaign' => '网盟推广计划管理', 'wm_group' => '网盟推广组管理', 'wm_idea' => '网盟创意管理', 'wm_keyword' => '网盟关键词管理', 'qq_renzheng_space_collect' => '认证空间QQ号码搜集管理管理', 'xinju2000_weixin_zp_record' => '新居服务号转盘记录表管理', 'search_static_html_record' => '智能搜索静态文件记录管理', 'zx_click_record' => '在线咨询点击记录管理', 'zt_huashu_setting' => '专题话术设置管理', 'search_check_admin' => '智能搜索检查人员管理', 'search_check_record' => '智能搜索检查记录管理', '2014mother_day_huodong' => '母亲节礼物活动管理管理', 'mhomekoo_visit_detail' => '手机网站按钮点击量管理', 'xinju2000_gaoji_qunfa_record' => '服务号高级群发记录管理', 'xinju2000_gaoji_qunfa_version' => '服务号高级群发版本管理', 'xinju2000_gaoji_qunfa_index' => '服务号高级群发版本素材关联管理', 'xinju2000_gaoji_qunfa_sucai' => '服务号高级群发版本素材管理', 'xinju2000_gaoji_qunfa_send_record' => '服务号高级群发发送记录管理', 'zhixiao_liucheng_article' => '直销流程文档管理', 'zhixiao_liucheng_page' => '直销流程页面管理', 'xinju2000_weixin_fgcs_record' => '新居服务号风格测试记录表管理', 'weixin_jiashu_lipin' => '微信家书群派送礼品管理', 'caixin_send_tpl' => '彩信发送模版管理', 'caixin_send_record' => '彩信发送记录管理', 'zhixiao_liucheng_page_pl' => '直销流程页面评论管理', 'zhixiao_liucheng_page_fav' => '直销流程页面收藏管理', 'tg_huizong_sourse' => '推广汇总来源设置管理', 'xinju2000_weixin_baoming_type' => '微信服务号报名原因管理', 'xinju2000_weixin_bu_baoming_type' => '微信服务号未报名原因管理', 'new_search_zhuti_cat' => '新搜索主题分类管理', 'shop_tuijian_taocan' => '门店推荐套餐管理', 'zhixiao_liucheng_news' => '直销流程文章管理', 'zt_free_design' => '专题免费设计师申请管理', 'xinju2000_weixin_dcwj_record' => '新居服务号调查问卷记录表管理', 'tuangou20140630_choujiang_huodong' => '专题抽奖20140630管理', 'yd_top_search_tuijian_keyword' => '移动头部搜索框推荐词管理', 'xinju2000_weixin_dyfl_record' => '新居服务号订阅分类记录表管理', 'xinju2000_weixin_hanlou_record' => '新居服务号喊楼活动记录表管理', 'weixin_robot_other_huashu' => '微信服务号模棱话术管理', 'xinju2000_weixin_groups' => '新居服务号用户分组表管理', 'yuying_jinying_person' => '运营部金鹰奖人员管理', 'yuying_jinying_pic' => '运营部金鹰奖图片管理', 'tuangou20140701_choujiang_huodong' => '专题抽奖20140701统计管理', 'xinju2000_weixin_zhuanfa_record' => '新居服务号文章转发记录管理', 'xinju2000_weixin_huashu_type' => '新居服务号话术库分类管理', 'index2014_cat_gg' => '首页空间分类广告图管理管理', 'taocan_new_dafen_record' => '套餐新打分记录', 'xinju2000_tg_xiaofei_record' => '微信推广消费记录管理', 'erweima_pic' => '二维码图片管理', 'member_fankui_tixing_record' => '分配提醒管理', 'summer_children_zhanzuo_management' => '暑期儿童房专题占座管理管理', 'index_left_kongjian_type' => '首页左边所有空间分类类型管理', 'index_left_kongjian_type_management' => '首页左边所有空间分类类型管理', 'xinju2000_zp_record' => '新居招聘页面报名记录管理', 'tuangou20140801_choujiang_huodong' => '专题抽奖20140801统计管理管理', 'zhanlue_wenjuan_record' => '管理战略诊断问卷-记录管理', 'zhanlue_wenjuan_cat' => '管理战略诊断问卷-大分类管理', 'zhanlue_wenjuan_question' => '管理战略诊断问卷-问题管理', 'zhanlue_wenjuan_detail_record' => '管理战略诊断问卷-详细记录管理', 'xinju2000_weixin_7x_record' => '新居服务号微信七夕节活动记录表管理', 'jm_city_record' => '加盟城市记录管理', 'xinju2000_weixin_shan_record' => '新居服务号微信扇扇子活动记录表管理', 'pl_set_gj_kehu_record' => '批量调整跟进中客户给其他客服记录管理', 'xinju2000_weixin_tuisong_huashu' => '微信智能推送话术管理', 'zuoxi400_pic' => '推广帐号头像上传管理', 'fankui_liangchi_reason_type' => '客户修改计划量尺时间原因管理', 'tq_kefu' => 'TQ客服资料管理', 'open_city_setting' => '开通城市资料管理', 'hr_zhaopin_user' => 'hr员工信息管理', 'hr_peixun_record' => 'hr培训课程记录管理', 'hr_user_peixun_record' => 'hr员工培训记录管理', 'hr_guanxi_record' => 'hr员工关系记录管理', 'hr_ruzhi_record' => 'hr入职明细记录管理', 'hr_bulai_record' => 'hr录而不来记录管理', 'hr_lizhi_record' => 'hr离职明细记录管理', 'hr_fushi_bulai_record' => 'hr复试通过不来记录管理', 'kefu_liucheng_cat' => '客服流程教学分类管理', 'kefu_liucheng_page' => '客服流程教学文档管理', 'kefu_liucheng_page' => '客服流程教学文档管理', 'kongjian_fengge_setting' => '空间对应风格设置管理', 'xinju2000_weixin_stop_city_tuisong_setting' => '微信暂停城市引导语设置管理', 'baidufeed_goods_management' => '百度微购推广商品信息管理管理', 'tuangou20140901_choujiang_huodong' => '专题抽奖20140901统计管理管理管理','zhixiao_fankui_type' => '服务号微信客户状态管理' ,'zhixiao_weixin_user' => '服务号微信用户表管理'  ,'zhixiao_weixin_chat_record' => '服务号微信对话记录管理' ,'zhixiao_weixin_fenpei_record' => '服务号微信分配客户提醒记录管理' ,'zhixiao_weixin_fenpei_tixing_record' => '' ,'zhixiao_weixin_yuyinku_record' => '服务号微信语音库记录管理' ,'zhixiao_weixin_huashu_type' => '新居服务号话术库分类管理' ,'zhixiao_weixin_huashu_record' => '服务号微信话术库记录管理' ,'zhixiao_weixin_qufa_des' => '服务号微信群发图文内容管理' ,'zhixiao_weixin_menu' => '新居服务号微信自定义菜单管理' ,'zhixiao_weixin_menu_info' => '新居服务号微信自定义菜单内容管理' ,'zhixiao_weixin_kefu_talk_record' => '服务号微信客服沟通记录管理' ,'zhixiao_weixin_city_tuisong_record' => '' ,'zhixiao_weixin_stop_city_tuisong_setting' => '微信暂停城市引导语设置管理' ,'zhixiao_weixin_groups' => '新居服务号用户分组表管理' ,'zhixiao_weixin_tuisong_huashu' => '微信智能推送话术管理' ,'zhixiao_weixin_zhuanfa_record' => '新居服务号文章转发记录管理','zhixiao_weixin_kefu_admin' => '服务号微信客服管理员管理', 'tg_pl_baoming_record' => '推广批量提交报名记录管理', 'xinju2000_weixin_xiaowei_xx_record' => '新居服务号小薇信箱提问留言管理', 'zhixiao_weixin_zhenduan_mokuan' => '直销微信一键诊断模块管理', 'zhixiao_weixin_zhenduan_mokuan_jingjie_record' => '直销微信一键诊断模块特别警戒设置管理', 'huodong_tehui_list' => '活动特惠管理', 'xinju2000_weixin_designer_record' => '微信设计师记录管理', 'xinju2000_weixin_tuku_user_dianpin_record' => '微信图库评论管理', 'xinju2000_weixin_tuku_user_shoucang_record' => '微信图库收藏管理', 'xinju2000_weixin_tuku_user_dianzan_record' => '微信图库点赞管理', 'kefu_liangchi_city_baohe_record' => '客服城市量尺饱和度记录管理', 'tuangou20141031_choujiang_huodong' => '专题抽奖20141031统计管理管理管理', 'zhixiao_weixin_xiaohua_record' => '直销微信笑话记录管理', 'zhixiao_weixin_jitang_record' => '直销微信心灵鸡汤记录管理', 'zhixiao_weixin_city_today_work_record' => '直销微信今日工作重点记录管理', 'zhixiao_weixin_city_wenti_record' => '直销微信存在问题记录管理', 'zhixiao_weixin_city_zhidao_record' => '直销微信经营指导记录管理', 'xinju2000_weixin_tuku_upload_record' => '微信图库上传记录管理', 'xinju2000_weixin_tuku_upload_detail_record' => '微信图库上传详情记录管理', 'zhuanti_tehui_comment' => '专题特惠评论管理管理', 'tatami_liangdian' => '榻榻米频道-亮点推荐管理', 'tatami_rexiao_dingzhi' => '榻榻米频道-热销定制管理', 'zhixiao_weixin_bumen_today_work_record' => '直销微信部门经理今日工作重点记录管理', 'zhixiao_weixin_shop_today_work_record' => '直销微信主管今日工作重点记录管理', 'zhixiao_weixin_wenti_city_record' => '直销微信存在问题城市记录管理', 'zhixiao_weixin_wenti_bumen_record' => '直销微信存在问题部门记录管理', 'zhixiao_weixin_wenti_shop_record' => '直销微信存在问题小组记录管理', 'zhixiao_weixin_wenti_designer_record' => '直销微信存在问题设计师记录管理', 'zhixiao_weixin_zhidao_city_record' => '直销微信经营指导城市记录管理', 'zhixiao_weixin_zhidao_bumen_record' => '直销微信经营指导部门记录管理', 'zhixiao_weixin_zhidao_shop_record' => '直销微信经营指导小组记录管理', 'zhixiao_weixin_zhidao_designer_record' => '直销微信经营指导设计师记录管理', 'zhixiao_weixin_today_work_city_record' => '直销微信今日工作重点城市记录管理', 'zhixiao_weixin_today_work_bumen_record' => '直销微信今日工作重点部门记录管理', 'zhixiao_weixin_today_work_shop_record' => '直销微信今日工作重点小组记录管理', 'zhixiao_weixin_today_work_designer_record' => '直销微信今日工作重点设计师记录管理', 'designer_channel_custom_pic' => '设计师频道用户方案图片表管理', 'designer_channel_custom' => '设计师频道用户方案用户表管理', 'designer_channel_anli_zhuanti' => '设计师频道案例专题表管理', 'tuangou20141111_choujiang_huodong' => '双11抽奖2014111统计管理管理', 'weike_designer_pl_record' =>'经验设计师-设计师-评论记录管理', 'xinju2000_weixin_mfsj_liuyan_record' => '新居服务号在线免费设计方案留言记录表管理', 'baidufeed_zhuangxiu_tuku_management' => '百度装修图库推广商品信息管理管理', 'xinju2000_weixin_hyuser_xiaoqu_setting' => '新居微信会员校区设置管理', 'xinju2000_weixin_hyuser_game_setting' => '新居微信会员游戏设置管理', 'xinju2000_weixin_hyuser_level_setting' => '新居微信会员等级设置管理', 'xinju2000_weixin_mfsjfa_dafen_record' => '新居服务号在线免费设计方案打分记录表管理', 'tuiguang_url' => '推广连接', 'xinju2000_weixin_baibian_custom_pinglun_record' => '微信百变定制DIY评论管理', 'zhixiao_weixin_yeji_fen_designer_record' => '直销微信业绩分解-设计师记录管理', 'zhixiao_weixin_yeji_fen_designer_week_record' => '直销微信业绩分解-设计师周记录管理', 'zhixiao_weixin_yeji_fen_shop_record' => '直销微信业绩分解-小组记录管理', 'zhixiao_weixin_yeji_fen_shop_week_record' => '直销微信业绩分解-小组周记录管理', 'zhixiao_weixin_yeji_fen_bumen_record' => '直销微信业绩分解-部门记录管理', 'zhixiao_weixin_yeji_fen_bumen_week_record' => '直销微信业绩分解-部门周记录管理', 'zhixiao_weixin_yeji_fen_city_record' => '直销微信业绩分解-城市记录管理', 'zhixiao_weixin_yeji_fen_city_week_record' => '直销微信业绩分解-城市周记录管理', 'designer_channel_renqun' => '在线免费设计使用人群设置管理', 'xinju2000_weixin_hyuser_shangpin' => '新居微信会员特权商店商品列表管理', 'xinju2000_weixin_xiaoyuan_huodong' => '新居微信校园活动列表管理', 'xinju2000_weixin_hyuser_tiku_team' => '新居微信会员答题题库小组设置管理', 'xinju2000_weixin_hyuser_tiku_wenti' => '新居微信会员答题题库问题设置管理', 'xinju2000_weixin_hyuser_tiku_answer' => '新居微信会员答题题库答案设置管理', 'xinju2000_weixin_hyuser_tiku_dati_record' => '新居微信会员答题记录表管理', 'tuangou20141231_choujiang_huodong' => '专题抽奖20141231统计管理管理管理','xinju2000_weixin_mfsj_liuyan_muban' => '新居服务号在线免费设计方案留言模板表管理', 'weixin_jiashu_newshare_qixiang' => '新技术分享会家书投票期项管理', 'weixin_jiashu_newshare_team' => '新技术分享会小组管理', 'weixin_jiashu_newshare_neirong' => '新技术分享会家书投票内容管理', 'xinju_tongji_jingjia' => '新居外部统计和竞价代码管理', 'xinju2000_weixin_wayes_taili_user_record' => '维意微信台历活动用户记录表管理', 'xinju2000_weixin_wayes_taili_zhongjiang_record' => '维意微信台历活动中奖记录表管理', 'kefu_shop_info' => '客服管理门店信息管理', 'qy_weixin_tongxun_bumen' => '新居微信企业号通讯录部门管理管理', 'qy_weixin_tongxun_user' => '新居微信企业号通讯录成员管理管理', 'tuangou20141225_choujiang_huodong' => '专题抽奖20141225统计管理管理管理', 'xinju2000_weixin_aishang_juanzeng_record' => '爱尚计划捐赠信息记录表管理', 'xinju2000_weixin_xiangxun_dengji' => '新居微信东宝周末香薰灯销售活动登记管理', 'xinju2000_weixin_kanjia_faqi_record' => '微信砍价活动发起者用户记录表管理', 'xinju2000_weixin_kanjia_canyu_record' => '微信砍价参与人数纪录表管理', 'xinju2000_weixin_kanjia_lingqu_info' => '微信砍价活动成功用户信息记录表管理', 'zx_dingzhi_banner' => '装修版块顶部广告管理', 'zhixiao_sjs_free_zhang_record' => '直销设计师免费设计勋章管理', 'zhixiao_sjs_free_apply_record' => '直销设计师免费设计申请记录管理', 'shejisd_vote' => '设计盛典案例投票表管理', 'shejisd_zhongjiang_record' => '设计盛典用户投票抽奖表管理', 'shejisd_prize' => '奖品表管理', 'prize_record' => '中奖纪录表管理', 'shejisd_vote_record' => '投票记录表管理', 'tuangou20150131_choujiang_huodong' => '2015年1月抽奖活动统计管理管理', 'nh2015_weixin_chat_record' => '弹幕软件年会信息管理', 'nh2015_weixin_mingan_record' => '弹幕软件年会敏感词库管理', 'jituan_weixin_hyuser_jifen_list' => '集团会员体系会员V值攻略表管理', 'jituan_weixin_hyuser_tequan_record' => '集团会员体系会员特权列表管理', 'jituan_weixin_hyuser_huodong_record' => '集团会员体系活动中心列表管理', 'jituan_weixin_hyuser_level_setting' => '集团会员体系会员等级设置管理', 'nh2015_weixin_menu' => '2015年会微信菜单管理管理', 'nh2015_weixin_menu_info' => '2015年会微信菜单内容管理管理', 'jituan_weixin_hyuser_make_v_record' => '集团会员体系会员赚V值升级列表管理', 'jituan_weixin_hyuser_deshare_type' => '集团会员体系文章分类管理', 'jituan_weixin_hyuser_desshare_list' => '集团会员体系文章页面管理', 'jituan_weixin_hyuser_shop_info' => '集团会员体系商品详情页管理', 'jituan_weixin_hyuser_shop_info_pic' => '集团会员体系商品详情图片管理', 'jituan_weixin_hyuser_shop_info_pinglun_record' => '集团会员体系商品详情评论记录管理', 'nh2015_weixin_user' => '2015年公司年会用户表管理', 'nh2015_weixin_user_tequancard_setting' => '2015年公司年会特权卡设置管理', 'nh2015_weixin_user_des' => '新居服务号微信图文内容管理', 'jituan_weixin_hyuser_article' => '集团会员体系每日案例管理', 'jituan_weixin_hyuser_article_case_pic' => '集团会员体系每日案例图片表管理', 'nh2015_danmu_pc_record' => '弹幕软件PC设置管理', 'xinju2000_weixin_chunjie_hb_record' => '微信春节红包发放用户记录表管理', 'nh2015_weixin_by_cat' => '弹幕软件年会备用库分类管理', 'nh2015_weixin_by_record' => '弹幕软件年会备用库信息管理', 'nh2015_weixin_show_record' => '弹幕软件年会可显示信息管理', 'nh2015_weixin_user_tai' => '2015年公司年会用户台号管理', 'gj_kefu_fenpei_city' => '助理分配城市设置管理', 'zxmfsj_sheji_anli' => '在线免费设计方案精选管理', 'tuangou20150228_choujiang_huodong' => '2015年2月份市场活动抽奖管理', 'jituan_weixin_hyuser_rewen_list' => '集团会员体系家居热问列表管理', 'xinju2000_weixin_splm_record1' => '新居微信蓝莓十企春节活动记录表1管理', 'xinju2000_weixin_splm_record2' => '新居微信蓝莓十企春节活动记录表2管理', 'xinju2000_weixin_splm_record3' => '新居微信蓝莓十企春节活动记录表3管理', 'xinju2000_weixin_splm_record4' => '新居微信蓝莓十企春节活动记录表4管理', 'xinju2000_weixin_splm_record5' => '新居微信蓝莓十企春节活动记录表5管理', 'xinju2000_weixin_splm_record6' => '新居微信蓝莓十企春节活动记录表6管理', 'xinju2000_weixin_splm_record7' => '新居微信蓝莓十企春节活动记录表7管理', 'xinju2000_weixin_splm_record8' => '新居微信蓝莓十企春节活动记录表8管理', 'xinju2000_weixin_splm_record9' => '新居微信蓝莓十企春节活动记录表9管理', 'xinju2000_weixin_splm_record10' => '新居微信蓝莓十企春节活动记录表10管理', 'jituan_weixin_hyuser_xihuan_list' => '集团会员体系猜猜你喜欢游戏列表管理', 'mobile_development_plan_record' => '移动端开发进度计划记录表管理', 'jituan_weixin_hyuser_dingdan_record' => '集团会员体系订单查询记录表管理', 'xinju2000_weixin_neibuid_record' => '新居微信服务号内部id对应表管理', 'jituan_weixin_hyuser_buyerinfo_record' => '集团会员体系会员商品购买订单记录表管理', 'jituan_weixin_hyuser_biaoqian_setting' => '集团会员体系用户标签管理管理', 'xinju2000_weixin_game_shaizi_record' => '新居微信服务号大话骰记录表管理', 'xinju2000_weixin_ah100_baoming_record' => '尚品微信爱尚100用户报名记录表管理', 'kefu_hujiao_bumen' => '呼叫中心部门管理', 'kefu_hujiao_xiaozu' => '呼叫中心小组管理', 'tuangou20150326_choujiang_huodong' => '专题抽奖20150326统计管理表管理', 'tuangou20150430_choujiang_huodong' => '专题抽奖20150430统计管理', 'tongbu_all_server_record' => '文件同步到其他服务器记录管理', 'jituan_weixin_hyuser_info_pipei_gjlist' => '集团会员体系会员信息匹配跟进表管理', 'hujiao_friend_user' => '呼叫中心朋友圈-个人资料管理', 'hujiao_friend_article' => '呼叫中心朋友圈-文章管理', 'hujiao_friend_article_pic' => '呼叫中心朋友圈-文章图片管理', 'hujiao_friend_pinglun' => '呼叫中心朋友圈-点赞评论记录管理', 'xinju2000_weixin_pinbi_keywords_list' => '尚品微信服务号屏蔽关键字列表管理', 'xinju2000_weixin_shopinfo_list_record' => '尚品宅配微信商品管理记录表管理', 'xinju2000_weixin_template_qunfa_setting' => '尚品宅配微信服务号模板消息群发设置管理', 'xinju2000_weixin_template_qunfa_content' => '尚品宅配微信服务号模板消息群发内容管理', 'xinju2000_weixin_benlaishenghuo_youhuima_record' => '尚品宅配&本来生活线上活动优惠码记录表管理', 'zhixiao_pinpairi_record' => '品牌日活动滚动文字管理', 'jituan_weixin_hyuser_buyerinfo_pc_record' => '集团会员体系会员商品订单批次记录表管理', 'jituan_weixin_hyuser_buyerinfo_pcdd_record' => '集团会员体系会员商品批次订单记录表管理', 'jituan_weixin_hyuser_buyerinfo_pc' => '集团会员体系订单生成批次管理', 'jituan_weixin_hyuser_shop_banner_setting' => '集团会员体系商品列表banner设置管理', 'index_sheji_gundong_record' => '首页在线免费设计滚动记录管理', 'jituan_weixin_hyuser_tuikuan_record' => '集团会员体系会员退款记录表管理', 'tuangou20150530_choujiang_huodong' => '专题抽奖20150530统计管理', 'xinju2000_weixin_user_ldswjl_gz_record' => '新居微信服务号李董商务交流关注记录表管理', 'jituan_weixin_hyuser_designer_setting' => '集团会员体系每日案例设计师设置表管理', 'jituan_weixin_hyuser_fuwucheck_pingfen_record' => '集团会员体系服务查询评分记录管理', 'xinju2000_weixin_erweima_info_setting' => '尚品宅配微信服务号固定二维码设置表管理', 'xinju2000_weixin_pici_qunfa_record' => '尚品宅配微信批次群发记录表管理', 'xinju2000_weixin_pici_qunfa_send_record' => '尚品宅配微信批次发送记录表管理', 'xinju2000_weixin_pici_qunfa_send_setting' => '尚品宅配微信批次定时群发进程设置表管理', 'member_fankui_zhoufankui_type' => '客服周反馈对象管理', 'member_fankui_zhoufankui_reason_type' => '客服周反馈对象原因管理', 'xinju2000_weixin_user_meitu_weekly' => '美图精选周刊表管理', 'xinju2000_weixin_user_meitu_weekly_images' => '美图精选周刊内图表管理', 'xinju2000_weixin_user_meitu_index_image' => '美图精选首页广告图管理', 'member_fankui_zhijian_record' => '客服质检记录管理', 'hk2015index_serve_loupan' => '2015首页最近服务过的楼盘表管理', 'hk2015index_gongneng' => '2015首页综合功能表管理', 'hk2015index_shaijia' => '2015首页晒家表管理', 'jituan_weixin_template_tuisong_setting' => '会员中心模板消息推送设置管理', 'jituan_weixin_tuwen_and_text_tuisong_setting' => '会员中心图文推送设置管理', 'jituan_weixin_tuwen_and_text_version' => '会员中心图文版本设置管理','hujiao_liucheng_news' => '呼叫中心教学流程文章管理' ,'hujiao_liucheng_article' => '呼叫中心教学流程文档管理' ,'hujiao_liucheng_page' => '呼叫中心教学流程页面管理' ,'hujiao_liucheng_page_pl' => '呼叫中心教学流程页面评论管理' ,'hujiao_liucheng_page_fav' => '呼叫中心教学流程页面收藏管理', 'jituan_weixin_hyuser_subscribe_tuisong_setting' => '集团会员中心关注小薇话术推送控制设置管理', 'xinju2000_weixin_pici_text_qunfa_record' => '尚品宅配微信在联文本批次群发记录表管理', 'xinju2000_weixin_hysys_hb_setting' => '尚品微信会员活动红包设置表管理', 'xinju2000_weixin_menu_tongji_record' => '尚品公众号导航菜单统计记录表管理', 'tuangou20150610_choujiang_huodong' => '20150610抽奖活动管理', 'huiyuan_tuwen_ver_record' => '会员中心图文版本记录管理', 'jituan_weixin_hyuser_everyday_tis_setting' => '集团会员体系每日小贴士设置表管理', 'jituan_weixin_hyuser_jingxuan_zixun_setting' => '集团会员体系精选资讯设置表管理', 'xinju2000_weixin_chaihongbao_game_record' => '尚品宅配微信服务号拆红包活动记录表管理', 'jituan_weixin_hyuser_huodong_hepai_record' => '会员活动合拍设计师人数纪录表管理', 'jituan_weixin_hyuser_make_vz_banner_setting' => '会员中心赚取V值banner设置管理', 'jituan_weixin_hyuser_huodong_banner_setting' => '集团会员体系活动中心banner设置管理', 'jituan_weixin_hyuser_huodong_ertongjie_record' => '会员活动儿童节人数纪录表管理', 'jituan_weixin_hyuser_huodong_toutiao_record' => '会员活动晒家照上头条人数纪录表管理', 'xinju2000_weixin_user_baoming_type_setting' => '微信报名来源设置记录表管理', 'anli_tongji_setting_record' => '案例群发参数设置管理', 'weixin_wenan_setting_record' => '微信文案阅读原文参数设置管理', 'xinju2000_weixin_user_baoming_css_setting' => '微信报名页面页面样式设置管理', 'jingying_designer_record' => '精英设计师临时记录管理', 'weixin_gg_toufang_day_record' => '微信广告投放每天记录管理', 'kehu_delivery_install_time' => '客户送货安装时间管理', 'dd_fahuo_record' => '订单系统反馈已发货客户记录管理', 'dd_anzhuang_record' => '订单系统反馈已安装客户记录管理', 'sms_fankui_record' => '短信收到信息反馈管理', 'jc_article' => '150616建材文章表管理', 'jc_article_cat' => '150616建材文章分类表管理', 'jc_tags' => '150616建材标签表管理', 'jc_tags_cat' => '150616建材标签分类表管理', 'jc_blackboard' => '150616建材小黑板表管理', 'jc_web_numb' => '150616建材页面编号表管理', 'jc_goods_type' => '150616建材产品类型表管理', 'jc_brand' => '150616建材品牌表管理', 'jc_brand_and_type' => '150616建材品牌-类型中间表管理', 'weixin_gg_toufang_update_record' => '微信广告投放更新记录管理', 'kefu_hujiao_dingshi_send_setting' => '呼叫中心企业号定时发送设置管理', 'kefu_hujiao_dingshi_send_record' => '呼叫中心企业号定时发送记录管理', 'xinju2000_weixin_yiyuan_temp_record' => '会员尚品商品订单临时记录表管理', 'xinju2000_weixin_guanggao_setting' => '尚品宅配微信广告投放设置管理', 'weixin_tongji' => '查看所有微信统计的权限', 'xinju2000_weixin_erweima_category_record' => '尚品二维码分类记录表管理', 'xinju2000_weixin_erweima__category_info_setting' => '尚品二维码设置记录表管理', 'sjq_customer_convert' => '设计圈客服转化管理', 'tousu_pingjia_info_record' => '投诉评价处理发信息记录管理', 'weike_designer_lizhi_tixing' => '精英设计师离职提醒管理', 'jc_seo_diy' => '150616建材自定义SEO表管理', 'weixin_juzhen_info_setting' => '微信公众账号矩阵信息设置表管理', 'weixin_juzhen_menu_setting' => '微信公众账号矩阵自定义菜单设置管理', 'weixin_juzhen_menu_desinfo' => '微信公众账号矩阵自定义菜单内容管理', 'weixin_juzhen_click_des_setting' => '微信公众账号矩阵触发推送内容设置管理','zhuanti_type_visit_record' => '专题类型网址记录管理', 'zhixiao_weixin_article_cat' => '直销服务号文章分类表管理', 'zhixiao_weixin_menu_category_article_list' => '直销服务号文章表管理', 'hko_message' => '短消息表管理', 'weixin_juzhen_scan_setting' => '微信公众账号矩阵二维码设置记录表管理', 'tuangou20150801_choujiang_huodong' => '专题抽奖20150801统计管理', 'xinju2000_weixin_fuwu_baoming_source_type_info_setting' => '微信服务报名来源记录表管理', 'weixin_juzhen_menu_tongji_record' => '微信公众账号导航菜单统计记录表列表管理', 'fankui_kefu_talk_record' => '客服跟进沟通记录管理', 'fankui_good_pinjia_cat' => '好评分类管理', 'fankui_cha_pinjia_cat' => '差评分类管理', 'fankui_sp_kefu_talk_record' => '尚品客服跟进沟通记录管理', 'fankui_sp_genjing_status' => '尚品客服跟进状态表管理', 'fankui_deal_kefu' => '反馈处理客服管理', 'fankui_fenpei_record' => '反馈分配客服记录表管理', 'xinju2000_weixin_user_mall_product_list' => '新版会员商城商品管理', 'fankui_genjing_sys' => '客服反馈系统管理', 'fankui_sp_fankui_system' => '尚品客服反馈系统');// 'NO' => '没定义栏目'，没有定义则只有超级管理员才能访问。, 'search_fangan_default' => '方案默认搜索条件管理', 'search_huxing_default' => '户型默认搜索条件管理'



$KIND_ARRAY = array(1 => '<font color=blue>普通会员</font>', 2 => '<font color=red>管理员</font>', 3 => '<font color=green>家居商家</font>', 4 => '<font color=#990000>设计师</font>', 5 => '<font color=#999933>装修公司</font>', 6 => '<font color=#000080>房地产</font>', 7 => '<font color=#9900CC>接口会员</font>', 8 => '<font color=#999933>监理公司</font>', 9 => '<font color=#999933>施工公司</font>');



$YES_NO = array(1 => '<font color=blue>是</font>', 0 => '<font color=red>否</font>');





$PN3_DANTI_TYPE = array('L' => '客餐厅', 'B' => '卧室', 'K' => '厨房', 'T' => '卫生间', 'R' => '书房', 'C' => '小孩房');



$PN3_DANTI_TYPE_ID = array('L' => 2, 'B' => 1, 'K' => 5, 'T' => 4, 'R' => 3, 'C' => 12);



$PN3_DANTI_TYPE_ID2 = array(2 => 'L', 1 => 'B', 5 => 'K', 4 => 'T', 3 => 'R', 12 => 'C');



$_DAY_STAT_TYPE = array('pageviews' => '网站访问总PV数', 'pageviews020' => '广州站访问总PV数', 'pageviews010' => '北京站访问总PV数', 'pageviews021' => '上海站访问总PV数', 'ip_num' => '网站访问总IP数', 'ip_num020' => '广州站访问总IP数', 'ip_num010' => '北京站访问总IP数', 'ip_num021' => '上海站访问总IP数', 'loupan_search_pv' => '楼盘搜索页访问数', 'loupan_search_no_pv' => '搜索不到楼盘页面访问数', 'loupan_fangan_pv' => '楼盘详情页访问数', 'fangan_list_pv' => '方案搜索列表页访问数', 'fangan_detail_pv' => '方案详情页访问数', 'huxing_search_pv' => '房型搜索列表页访问数', 'huxing_search_no_pv' => '搜索不到房型页面访问数', 'huxing_detail_pv' => '房型平面布置页访问数', 'design_free_pv' => '免费量尺申请页访问数', 'design_free_num' => '免费量尺页提交数', 'tailor_pv' => '方案定制页访问数', 'tailor_num' => '方案定制页提交数',"design_softbb_download" => "我家摆摆看下载数", "baibai_soft_use" => "我家摆摆看使用数","design_soft_download" => "我家我设计下载数", "design_soft_use" => "我家我设计使用数","zhineng_soft_download" => "我家我设计智能版下载数", "zhineng_soft_use" => "我家我设计智能版使用数", "model_down_num" => "模型下载数", "soft_download" => "软件（插件）下载数",  'soft_firt_use' => "软件（插件）第一次使用", 'zhixiao_ip_num' => '直销频道访问IP数', 'soft_day_use_ip' => '软件使用ip数', 'user_register_num' => '业主注册数', 'user_register_num5' => '从直销注册业主数', 'designer_register_num' => '设计师注册数', 'company_register_num' => '装修公司注册数', 'shop_register_num' => '商家注册数', 'user_register_num2' => '内部注册业主数', 'user_register_num3' => '设置了家的业主数','myhome_design' => '免费设计访问数', "other_soft_use" => "其他软件使用数", 'fromfolo' => 'fromfolo','tofolo'=>'tofolo', 'zhekou_print' => '折扣打印总数', 'pindao_index' => '首页访问量', 'pindao_kanfang' => '3维看房访问量', 'pindao_zhuangxiu' => '模拟装修访问量', 'pindao_myhome_design' => '我家我设计访问量', 'pindao_members' => '个人家园访问量', 'pindao_zhekou' => '家居折扣访问量', 'pindao_business' => '特惠直销访问量', 'pindao_bbs' => '论坛访问量', 'buying_process' => '直销过渡页访问量(总)', 'buying_process_site' => '直销过渡页访问量(网页)', 'buying_process_spzp' => '直销过渡页访问量(尚品软件)', 'buying_process_diy' => '直销过渡页访问量(我家我设计)', 'PlanningFamily_index' => '户型规划页面访问量', 'spatial_planning' => '居设陈设页面访问量', 'taocan_fav_num' => '套餐收藏夹收藏人数', 'mrs_down_num' => 'MRS下载次数统计', 'zhixiao_index_search_click_num' => '直销首页搜索按钮点击次数', 'ip_num_wap' => '手机网访问总IP数', 'wap_clicks' => '手机网访问总浏览数');



$_ZM_ARRAY = array('A' => 'A','B' => 'B','C' =>'C','D' =>'D','E' =>'E','F' =>'F','G' =>'G','H' =>'H','I' =>'I','J' =>'J','K' =>'K','L' =>'L','M' =>'M','N' =>'N','O' =>'O','P' =>'P','Q' =>'Q','R' =>'R','S' =>'S','T' =>'T','U' =>'U','V' =>'V','W' =>'W','X' =>'X','Y' =>'Y','Z' =>'Z');





$_keyword_type = array('瓷砖' => '瓷砖','地板' => '地板','卫浴' => '卫浴','墙纸' => '墙纸','涂料' => '涂料','橱柜' => '橱柜','入墙衣柜' => '入墙衣柜','灯饰' => '灯饰','布艺' => '布艺','家具' => '家具','办公家具' => '办公家具','定制家具' => '定制家具','家电' =>'家电','门窗' =>'门窗','其他' =>'其他');



$_design_type = array(1 => '房屋中介','装修公司','设计师','材料商','家具商','家电商');



///

$_FANG_CAT = array(1 => array('name' => '客厅', 'ename' => 'Living'), 2 => array('name' => '主人房', 'ename' => 'Main'), 3 => array('name' => '卧室A', 'ename' => 'bedroomA'), 4 => array('name' => '卧室B', 'ename' => 'bedroomB'), 5 => array('name' => '卧室C', 'ename' => 'bedroomC'), 6 => array('name' => '书房', 'ename' => 'Work'), 7 => array('name' => '卫浴', 'ename' => 'Tol'), 8 => array('name' => '厨房', 'ename' => 'Kic'), 9 => array('name' => '其他', 'ename' => 'Other'));



$_FANG_CAT2 = array(1 => '客厅', 2 => '主人房', 3 => '卧室A', 4 => '卧室B', 5 => '卧室C', 6 => '书房', 7 => '卫浴', 8 => '厨房', 9 => '其他');



///户型广告长

$_AD_WIDTH_TYPE = array(3000 => 3000, 2000 => 2000, 1000 => 1000);



////评论类型连接

$_COMMENT_TYPE_URL = array('loupan' => '../Neighbor/index2.php?pid=', 'pn3' => '../ask/design.php?id=', 'user' => '../My.php?id=', 'mip' => '../Neighbor/view_huxing.php?id=');



/////导出楼盘字段

$_LOUPAN_ZIDUAN = array('first_zm' => '首字母', 'area_id' => '地区', 'pianqu_id' => '片区','des' => '楼盘介绍', 'zhuangxiu_des' => '装修状况', 'wuyefei' => '物业管理费', 'yushou_cert' => '预售许可证', 'kaifashang' => '开发商', 'shoulou_address' => '售楼处地址', 'rongjilv' => '容积率', 'lvhualv' => '绿化率', 'louceng_des' => '楼层状况', 'zhoubian' => '周边配套', 'jiaotong' => '交通状况', 'relate_info' => '相关信息', 'price' => '历史价格', 'tel' => '电话');



$_LOUPAN_ZIDUAN_PAIXU = array('first_zm' => 0, 'area_id' => 1, 'pianqu_id' => 2,'des' => 3, 'zhuangxiu_des' => 4, 'wuyefei' => 5, 'yushou_cert' => 6, 'kaifashang' => 7, 'shoulou_address' => 8, 'rongjilv' => 9, 'lvhualv' => 10, 'louceng_des' => 11, 'zhoubian' => 12, 'jiaotong' => 13, 'relate_info' => 14, 'price' => 15, 'tel' => 16);







///////样板影片库分类

$_MODUNIN_LIB = array(2 => '样板库', 3 => '影片库');





////楼盘户型指南针类型

$_ZHINAN_TYPE = array(0 => '无指南针', 1 => '有指南针', 2 => '正在填指南针', 3 => '需要确认指南针', 4 => '确认但无指南针');



////pn3评分

$_PN3_PINGFEN_TYPE = array(1 => '装修参考价值体现', 2 => '实用性（空间合理以及家具摆放合理度）', 3 => '风格符合度', 4 => '美观性（拍摄角度、灯光、材质、整体效果）', 5 => '构图饱满度（饰品摆放）');



///标注单体，增加的level数组

$_BZ_DANTI_LEVEL = array(3 => '种子', 2 => '抄图');





///////购买优惠券 类型

$_BUY_JUAN_TYPE = array(0 => '方案咨询', 1 => '产品咨询', 2 => '品牌优惠卷', 3 => '折扣促销信息', 4 => '折扣促销信息(只收集手机，不用发短信)');







///二手房类型

$_SALE_HOUSE_TYPE = array( 0 => '兴业', 1 => '中原', 2 => '全房', 3 => '用户上传');



/////导出二手房字段

$_SALE_HOUSE_ZIDUAN = array('bianhao' => '房源编号', 'name' => '物业名称（楼盘名称）', 'wuye_type' => '物业类型','quxian' => '区县', 'shangquan' => '商圈', 'chanquan' => '产权归属', 'fangling' => '房龄', 'chaoxiang' => '朝向', 'louceng' => '楼层', 'zhuangxiu' => '装修情况', 'mianji' => '建筑面积', 'use_mianji' => '使用面积', 'baojia' => '报价', 'price' => '单价（或者月租）', 'jiaotong' => '交通状况', 'address' => '物业地址', 'sheshi' => '基础设施', 'linker' => '联系人', 'tel' => '联系电话', 'huxing_id' => '楼盘户型id', 'huxing_name' => '楼盘户型名称', 'type' => '数据类型', 'rent_type' => '出售或者出租');





///卖场类型

$_MC_TYPE = array( 0 => '物业型', 1 => '经营型');





$TG_HD_BM_ARRAY = array(0 => '<font color=blue>活动页面报名</font>', 1 => '<font color=red>手工添加报名</font>', 2 => '<font color=green>execl导入报名</font>', 3 => '<font color=green>论坛跟贴报名</font>');



///团购活动文章分类

$_HUODONG_ARTICLE_CAT = array(1 => '现场活动采访', 2 => '历届活动回顾', 3 => '1元拍品列表', 4 => '奖品列表', 5 => '直销区产品列表', 6 => '上届活动现场图片');



$_HUODONG_ARTICLE_ROWS = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5);



$cat_type = $NEW_CAT_TYPE;







$reasons[1] = '尺寸不详细';

$reasons[2] = '图片上传出错，不完整';

$reasons[3] = '图片不清晰';

$reasons[4] = '已有户型';

$reasons[5] = '楼盘或户型信息不确切';

$reasons[6] = '别墅,复式不做';

$reasons[7] = '十个城市外的不做 (北京,上海,杭州,南京,西安,武汉,成都,重庆,广州、沈阳、成都)';

$reasons[8] = '会员提交户型后制作完三维户型'; 

$reasons[9] = '添加楼盘'; 

$reasons[10] = '添加户型'; 





////////400电话客服数组

//沟通类别

$_TEL400_TALK_CAT = array(1 => '方案咨询', 2 => '定制咨询', 6 => '预约量房', 3 => '售后服务', 4 => '投诉建议', 5 => '积分申请');

//沟通渠道

$_TEL400_TALK_TYPE = array(1 => '已接来电', 3 => '未接来电', 2 => '未接来电已回电',9 => '量房分配回访', 10 => '确定量尺时间回访', 11 => '量尺回访', 12 => '初次方案沟通回访', 15 => '方案修改回访', 13 => '成交回访', 4 => '其他回访');// 5 => '主动回访量尺申请', 6 => '主动回访方案定制', 7 => '主动回访订单申请', 8 => '主动回访TQ聊天', 9 => '主动回访其他方式', 



/*

发布者  

, , , , , , , num_shi, num_ting, num_wei, num_chu, , , , , , , , dj_date, youxiao_days, , , , logo, city_id, , , views, is_hide, , post_date, , loupan_id, , area_id, pianqu_id, , contact_des, comment, uid, username



2、房源编号  

3、物业名称（楼盘名称）  

4、物业类型  

5、区县  

6、商圈  

7、产权归属  

8、房龄  

9、朝向  

10、楼层  

11、装修情况  

12、建筑面积  

13、使用面积  

14、报价  

15、单价（或者月租）  

16、交通状况  

17、物业地址  

17、基础设施  

18、联系人  

19、联系电话  

20、楼盘户型id  

21、楼盘户型名称 

22、数据类型（注明是中原、兴业、全房或会员）   

23、出售或者出租

*/



///网站flash管理

$_FLASH_ARRAY = array('house1' => '3维看房第一个flash', 'house2' => '3维看房第二个flash', 'house3' => '3维看房第三个flash', 'decorate1' => '模拟装修第一个flash', 'decorate2' => '模拟装修第二个flash', 'decorate3' => '模拟装修第三个flash');



$CONDITION_TYPE = array( 0 => '选择', 6=>'=', 1 => '>', 2 => '<', 3 => '>=', 4 => '<=', 5 => '<>');



///////400来电系统变量

$TEL400_STATUS = array(0 => '没接听', 1 => '已接听');



//$TEL400_FANKUI_TYPE = array( 1 => '接收到订单后联系客户', 2 => '确认是否交订金', 3 => '确认是否交全款', 4 => '接收到申请后联系客户', 5 => '确认是否已量尺', 6 => '确认是否交易成功');

/*移到base_info.php

$TEL400_FANKUI_TYPE = array( 1 => '新申请', 2 => '正在跟进中', 3 => '已分配给门店', 18 => '已确定量尺时间', 4 => '无法分配给门店/无效申请', 5 => '无法分配给门店/无本地门店', 6 => '无法分配给门店/门店不接受', 7 => '无法分配给门店/测试数据', 8 => '无法分配给门店/申请取消', 16 => '无法分配给门店/无量尺意向', 17 => '无法分配给门店/自己去门店', 9 => '已量尺', 10 => '未量尺/客户原因取消', 11 => '未量尺/门店原因取消', 12 => '未量尺/客户原因延迟量尺', 13 => '未量尺/门店原因延迟量尺', 31 => '未看初次方案/客户延迟看方案', 32 => '未看初次方案/客户不愿看方案', 50 => '未看初次方案/价格原因取消看方案', 51 => '未看初次方案/产品原因取消看方案', 52 => '未看初次方案/门店原因取消看方案', 53 => '未看初次方案/客户原因取消看方案', 19 => '初次方案', 33 => '初次方案取消/价格原因取消成交', 34 => '初次方案取消/产品原因取消成交', 35 => '初次方案取消/门店原因取消成交', 36 => '初次方案取消/客户原因取消成交', 37 => '初次方案取消/其他原因取消成交', 41 => '未看方案修改/客户延迟看方案', 42 => '未看方案修改/客户不愿看方案', 60 => '未看方案修改/价格原因取消看方案', 61 => '未看方案修改/产品原因取消看方案', 62 => '未看方案修改/门店原因取消看方案', 63 => '未看方案修改/客户原因取消看方案', 190 => '方案修改', 43 => '方案修改后取消/价格原因取消看方案', 44 => '方案修改后取消/产品原因取消看方案', 45 => '方案修改后取消/门店原因取消看方案', 46 => '方案修改后取消/客户原因取消看方案', 47 => '方案修改后取消/其他原因取消看方案', 20 => '未成交/未付款', 21 => '未成交/已取消', 14 => '已交订金', 15 => '已交全款');

//19 => '方案沟通中' 分为初次方案和方案修改

//, 31 => '初次方案取消/客户延迟看方案', 32 => '初次方案取消/客户不愿看方案' 改为 , 31 => '未看初次方案/其他原因取消成交' , 32 => '未看初次方案/客户不愿看方案'

////多了个全部

$TEL400_FANKUI_TYPE2 = array( 1 => '新申请', 2 => '正在跟进中', 3 => '已分配给门店', 18 => '已确定量尺时间', 400 => '无法分配给门店', 4 => '无法分配给门店/无效申请', 5 => '无法分配给门店/无本地门店', 6 => '无法分配给门店/门店不接受', 7 => '无法分配给门店/测试数据', 8 => '无法分配给门店/申请取消', 16 => '无法分配给门店/无量尺意向', 17 => '无法分配给门店/自己去门店', 9 => '已量尺', 100 => '未量尺', 10 => '未量尺/客户原因申请取消', 11 => '未量尺/门店原因取消', 12 => '未量尺/客户原因延迟量尺', 13 => '未量尺/门店原因延迟量尺', 500 => '未看初次方案', 31 => '未看初次方案/客户延迟看方案', 32 => '未看初次方案/客户不愿看方案', 50 => '未看初次方案/价格原因取消看方案', 51 => '未看初次方案/产品原因取消看方案', 52 => '未看初次方案/门店原因取消看方案', 53 => '未看初次方案/客户原因取消看方案', 19 => '初次方案', 300 => '初次方案取消', 33 => '初次方案取消/价格原因取消成交', 34 => '初次方案取消/产品原因取消成交', 35 => '初次方案取消/门店原因取消成交', 36 => '初次方案取消/客户原因取消成交', 37 => '初次方案取消/其他原因取消成交',600 => '未看方案修改', 41 => '未看方案修改/客户延迟看方案', 42 => '未看方案修改/客户不愿看方案', 60 => '未看方案修改/价格原因取消看方案', 61 => '未看方案修改/产品原因取消看方案', 62 => '未看方案修改/门店原因取消看方案', 63 => '未看方案修改/客户原因取消看方案', 190 => '方案修改', 440 => '方案修改后取消', 43 => '方案修改后取消/价格原因取消看方案', 44 => '方案修改后取消/产品原因取消看方案', 45 => '方案修改后取消/门店原因取消看方案', 46 => '方案修改后取消/客户原因取消看方案', 47 => '方案修改后取消/其他原因取消看方案', 200 => '未成交', 20 => '未成交/未付款', 21 => '未成交/已取消', 14 => '已交订金', 15 => '已交全款');



*/







//////专题楼盘变量

$ZT_LOUPAN_SHENPI_TYPE = array( 0 => '未审批', 1 => '审批通过', 2 => '审批失败，请重新返工');



$ZT_LOUPAN_JINDU_TYPE = array(1 => '传完整体空白户型', 2 => '分析完户型房间类型和数量并设几房', 3 => '检查整体小图没问题new');



$ZT_LOUPAN_JINDU_URL = array(1 => 'zt_huxing_ext_view.php?id=', 2 => 'zt_huxing_ext_view.php?id=');





$ZT_HUXING_JINDU_TYPE = array(8 => '上传任务资料',1 => '传完单体户型', 2 => '传完单体平面布置图', 3 => '传完方案', 7 => '设置方案分类', 4 => '上传整体户型平面布置图', 5 => '方案、报价审核', 13 => '方案审批');//10 => '方案效果列表页小图上传', 11 => '报价上传', 12 => '设计说明添加',  , 6 => '整体户型KOC，需包含以及制作方案的该房间的平面布置', 9 => '自检'



$ZT_HUXING_JINDU_URL = array(8 => 'soft_mission_file_add.php', 1 => 'taocan_bz_room_add.php', 2 => 'taocan_bz_layout_add.php', 3 => 'taocan_add.php', 7 => 'taocan_set_cat.php?id=',4 => 'zt_huxing_taocan_index_view.php?id=', 5 => 'shenpi_taocan_list.php?liucheng=2&id=', 6 => 'zt_huxing_taocan_index_view.php?id=', 10 => 'taocan_edit.php?id=', 11 => 'zt_huxing_taocan_index_view.php?id=', 12 => 'taocan_edit.php?id=', 13 => 'taocan_edit.php?id=');//,  9 => 'shenpi_taocan_check.php?id='



//权限（制作空白户型、分析户型、制作方案）多选

$ZT_LOUPAN_QUANXIAN_TYPE = array('make_kb' => '制作空白户型', 'fx_huxing' => '分析户型', 'make_taocan' => '制作方案', 'make_zx_kb' => '制作直销客户空白户型', 'fx_zx_huxing' => '分析直销客户户型','make_zx_taocan' => '制作直销客户方案', 'guanli_kb' => '管理空白户型', 'guanli_fx' => '管理分析户型', 'guanli_taocan' => '管理方案', 'shenpi_taocan' => '方案报价审核','view_zhizuo_huxing' => '正在制作中的空白户型','view_zhizuo_fangan' => '正在制作中的方案列表','view_designer_list' => '设计师工作管理','edit_designer' => '编辑设计师权限','fenpei_design' => '分析方案并分配','upload_pm' => '上传平面布置图','do_zhongzi_taocan' => '能制作种子套餐', 'shenpi_zz_taocan' => '可以审批种子方案', 'shenpi_nozz_taocan' => '可以审批非种子方案', 'shenpi_fangong_zz_taocan' => '可以审批返工种子方案', 'shenpi_fangong_nozz_taocan' => '可以审批返工非种子方案', 'shenpi_taocan_premission' => '最终审批种子方案权限', 'pipei_deal' => '处理搜索匹配进入制作流程', 'hide_in_list' => '<b>在设计师列表隐藏</b>', 'show_loupan_list' => '显示楼盘列表', 'tongji_visit' => '统计访问前台的页面', 'edit_replace_word' => '填写替换词', 'can_dafen_new' => '有新的打分机制权限');



$ZZ_TAOCAN_TG_NUM = 3;//种子套餐通过人数

$NOZZ_TAOCAN_TG_NUM = 1;//非种子套餐通过人数, 2010-12-30由2改为1





$ZZ_TAOCAN_SHENPI_NUM = 4;//种子套餐审批人数

$NOZZ_TAOCAN_SHENPI_NUM = 1;//非种子套餐审批人数





$ZT_LOUPAN_CATS = array('主卧' => '主卧', '次卧' => '次卧',  '书房' => '书房', '青少年房' => '青少年房', '客厅' => '客厅', '餐厅' => '餐厅', '客餐厅' => '客餐厅', '厨房' => '厨房', '单身公寓' => '单身公寓');//,  11 => '卫浴间' 6 => '厨房'







////流程

$ZT_HUXING_LIUCHENG = array(1 => '待接收制作空白户型列表', 21 => '待接收制作直销客户空白户型', 221 => '待接收制作空白户型列表(匹配来源)', 321 => '待接收制作空白户型列表(<b>新</b>匹配来源)', 2 => '待分析的户型列表', 22 => '待分析直销客户户型', 3 => '我接收的空白户型列表', 13 => '我接收的分析户型列表', 4 => '需审核的户型列表', 5 => '管理空白户型列表', 6 => '管理分析户型列表', 7 => '正在制作中的空白户型', 8 => '空白户型有问题列表', 9 => '分析户型有问题列表', 10 => '管理所有户型列表', 11 => '已审核的户型列表', 12 => '审核有问题的户型列表', 30 => '已出审批方案的户型列表', 222 => '待分析的户型列表(匹配来源)', 322 => '待分析的户型列表(<b>新</b>匹配来源)');



$ZT_TAOCAN_LIUCHENG = array(1 => '待接收的方案列表', 10 => '待接收直销客户方案', 11 => '待接收的方案列表(匹配来源)', 12 => '待接收的方案列表(<b>新</b>匹配来源)', 2 => '我接收的方案列表', 3 => '需审批的方案列表', 4 => '管理接收的方案列表', 5 => '正在制作中的方案列表', 6 => '管理分析户型列表', 7 => '待审核报价方案列表', 8 => '待编辑操作的方案列表', 9 => '管理所有的方案列表');



//审批套餐流程

$SHENPI_TAOCAN_LIUCHENG = array(1 => '待审批的种子方案列表', 2 => '待审批的非种子方案列表', 3 => '已通过的种子方案列表', 4 => '已通过的非种子方案列表', 5 => '需要返工的种子方案列表', 6 => '需要返工的非种子方案列表', 7 => '我制作的方案列表', 8 => '我制作需要返工的方案列表', 9 => '需要判断是否返工的方案列表', 10 => '返工完成(需你来审批)的方案列表', 11 => '返工完成(需审批)的种子方案列表', 12 => '返工完成(需审批)的非种子方案列表');



//审批套餐标准数组

$NOZZ_SHENPI_ARRAY = array(1 => '平面布局评分', 6 => '灯光效果评分',8 => '种子相似度评分');



$ZZ_SHENPI_ARRAY = array(1 => '平面布局评分', 2 => '装修环境配搭评分', 3 => '饰品选择搭配评分', 4 => '拍摄角度评分', 5 => '颜色搭配评分', 6 => '灯光效果评分', 7 => '效果图表现评分', 8 => '工厂可生产性评分');



$PINFEN_SHENPI_ARRAY = array(0 => '--', 1 => '优秀', 2 => '良好', 3 => '合格', 4 => '不合格');



$TAOCAN_PINGFEN_TYPE = array(1 => '好', 2 => '中', 3 => '差');



////////空间信息数组



//地板颜色

$DIBAN_YANSE_ARRAY  = array("木地板" => "木地板", "瓷砖" => "瓷砖", "地毯" => "地毯", "浅色" => "浅色", "深色" => "深色");







//墙面颜色

$QM_YANSE_ARRAY  = array("涂料" => "涂料", "墙纸" => "墙纸", "浅色" => "浅色", "深色" => "深色");



//有无

$YOU_WU_ARRAY  = array("有" => "有", "无" => "无");





//是否

$SHI_FOU_ARRAY  = array("是" => "是", "否" => "否");





//床尺寸

$CHUANG_CC_ARRAY  = array("1.5米" => "1.5米", "1.8米" => "1.8米", "其他" => "其他");





//沙发类型

$SHAFA_LEIXING_ARRAY  = array("转角" => "转角", "3+2+1沙发组" => "3+2+1沙发组", "2+1+1沙发组" => "2+1+1沙发组", "其他" => "其他");







//餐桌尺寸

$CHANGZUO_CC_ARRAY  = array("1.8米" => "1.8米", "1.6米" => "1.6米", "指定尺寸" => "指定尺寸");





//餐桌类型

$CHANGZUO_LEIXING_ARRAY  = array("圆桌" => "圆桌", "方桌" => "方桌");







//是否

$NEED_ORNOT_ARRAY  = array("需要" => "需要", "不需要" => "不需要");



//地柜字型

$DG_ZX_ARRAY  = array("一字型" => "一字型", "L型" => "L型", "U型" => "U型", "二字型" => "二字型", "岛型" => "岛型");



//地柜门板

$DG_MB_ARRAY  = array("美极板" => "美极板", "烤漆" => "烤漆", "吸塑" => "吸塑", "实木" => "实木", "UV板" => "UV板");



//地柜门板颜色

$DG_MB_YANSE_ARRAY  = array("木色" => "木色", "纯色" => "纯色", "深色" => "深色", "浅色" => "浅色");



//地柜功能配置

$DG_GN_PZ_ARRAY  = array("电饭锅" => "电饭锅", "消毒碗柜(嵌入式/卧式)" => "消毒碗柜(嵌入式/卧式)", "微波炉" => "微波炉", "电烤箱" => "电烤箱", "调味拉篮" => "调味拉篮", "洗碗机" => "洗碗机", "洗衣机" => "洗衣机", "垃圾处理器" => "垃圾处理器", "预留冰箱位置" => "预留冰箱位置");





//吊柜功能配置

$DG_DG_PZ_ARRAY  = array("消毒碗柜" => "消毒碗柜", "微波炉" => "微波炉", "抽油烟机" => "抽油烟机", "其它" => "其它");





//台面品牌

$TM_PINPAI_ARRAY  = array("蒙特利" => "蒙特利", "杜邦可丽耐" => "杜邦可丽耐", "LG" => "LG", "PKS石英石" => "PKS石英石", "其他" => "其他");



//台面颜色

$TM_YANSE_ARRAY  = array("深色" => "深色", "浅色" => "浅色");



//台面电器

$TM_DQ_ARRAY  = array("电饭锅" => "电饭锅", "电磁炉" => "电磁炉", "煤气炉" => "煤气炉", "其它" => "其它");



//书柜字型

$SG_ZX_ARRAY  = array("一字型" => "一字型", "L字型" => "L字型");





//书柜款式

$SG_KS_ARRAY  = array("钢架" => "钢架", "板式" => "板式", "钢架与板式结合" => "钢架与板式结合", "无所谓" => "无所谓");







//书柜门板类型

$SG_MB_ARRAY  = array("木门" => "木门", "铝框清玻璃门" => "铝框清玻璃门", "铝框磨砂玻璃门" => "铝框磨砂玻璃门", "其它" => "其它");





//书桌字型

$SZ_ZX_ARRAY  = array("一字型" => "一字型", "L字型" => "L字型", "与书柜集成" => "与书柜集成");





//书桌使用类型

$SZ_SY_ARRAY  = array("台式电脑" => "台式电脑", "手提电脑" => "手提电脑");



//床尺寸

$CHUANG_CC_ARRAY2  = array( "1米" => "1米","1.2米" => "1.2米", "1.5米" => "1.5米", "其它" => "其它");



//楼盘警报

$LOUPAN_JINGBAO = array(1 => '黑色警报', 2 => '红色警报', 3 => '黄色警报');



//楼盘状态

$LOUPAN_STATUS = array(1 => '制作KOC中', 2 => '待分析中', 3 => '分析中', 4 => '待制作中', 5 => '制作中', 6 => '待报价审核中', 7 => '已审核', 8 => '待编辑审核', 9 => '编辑已审核', 10 => '已完成');



///楼盘时间

$LOUPAN_DATE_TYPE = array(1 => '建单日期', 2 => '设计日期', 3 => '审核日期', 4 => '完成日期');



///楼盘特殊标记

$LOUPAN_SP_TYPE = array(1 => '有回退', 2 => '有户型审核上线', 3 => '有方案审核上线');





///楼盘是否直销

$LOUPAN_SP_ZX = array(1 => '直销客户', 2 => '非直销客户');





///

$ZT_HUXING_EXT_1  = array( "2口人" => "2口人","3口人" => "3口人", "4口人" => "4口人", "5口人" => "5口人", "6口人" => "6口人");



$ZT_HUXING_EXT_2  = array( "精装修" => "精装修","毛坯房" => "毛坯房", "旧房改造" => "旧房改造");



$ZT_HUXING_EXT_3  = array( "80平米以下" => "80平米以下","80—120平米" => "80—120平米", "120—150平米" => "120—150平米", "150平米以上" => "150平米以上");



$ZT_HUXING_EXT_4  = array("地砖" => "地砖", "木地板" => "木地板", "浅色" => "浅色", "深色" => "深色", "其他" => "其他");



$ZT_HUXING_EXT_5  = array("鞋柜" => "鞋柜", "隔断柜" => "隔断柜", "餐桌椅" => "餐桌椅", "餐边柜" => "餐边柜", "电视组合柜" => "电视组合柜", "茶几" => "茶几", "沙发组合" => "沙发组合", "边几" => "边几", "装饰层板" => "装饰层板", "装饰柜" => "装饰柜", "钢琴区" => "钢琴区", "休闲区" => "休闲区", "其他" => "其他");



$ZT_HUXING_EXT_6  = array("1.8床" => "1.8床", "1.5床" => "1.5床", "床头柜" => "床头柜", "电视柜" => "电视柜", "装饰柜" => "装饰柜", "梳妆台" => "梳妆台", "衣柜" => "衣柜", "休闲区" => "休闲区", "其他" => "其他");

$ZT_HUXING_EXT_7  = array("1.1床" => "1.1床", "1.2床" => "1.2床", "1.5床" => "1.5床", "床头柜" => "床头柜", "电视柜" => "电视柜", "装饰柜" => "装饰柜", "梳妆台" => "梳妆台", "衣柜" => "衣柜", "书桌" => "书桌", "书柜" => "书柜", "装饰层板" => "装饰层板", "其他" => "其他");



$ZT_HUXING_EXT_8  = array("书桌" => "书桌", "书柜" => "书柜", "装饰层板" => "装饰层板", "吊柜" => "吊柜", "沙发床" => "沙发床", "茶几" => "茶几", "装饰柜" => "装饰柜", "边几" => "边几", "其他" => "其他");



$ZT_HUXING_EXT_9  = array("1.8床" => "1.8床", "1.5床" => "1.5床", "1.2床" => "1.2床", "床头柜" => "床头柜", "电视柜" => "电视柜", "装饰柜" => "装饰柜", "梳妆台" => "梳妆台", "衣柜" => "衣柜", "书桌" => "书桌", "书柜" => "书柜", "装饰层板" => "装饰层板", "休闲区" => "休闲区", "其他" => "其他");



//板材

$ZT_HUXING_EXT_10  = array("白樱桃" => "白樱桃", "苹果木" => "苹果木", "彩虹条" => "彩虹条", "亚马逊" => "亚马逊", "新柚木" => "新柚木", "象牙白" => "象牙白", "深黑檀" => "深黑檀", "白枫" => "白枫", "莫尼黑" => "莫尼黑", "摩卡" => "摩卡", "新黄橡" => "新黄橡", "丹麦曲柳" => "丹麦曲柳", "英伦白橡" => "英伦白橡", "浮雕白" => "浮雕白", "夜光黑烤漆" => "夜光黑烤漆", "亚光颜色吸塑板" => "亚光颜色吸塑板", "酒红烤漆" => "酒红烤漆", "梦幻紫晶" => "梦幻紫晶", "粉红烤漆" => "粉红烤漆");//, "伊顿蓝橡" => "伊顿蓝橡"





$NEW_SITE_BANNER_TYPE['124']="榻榻米频道轮播图-宽屏(955*532)";

$NEW_SITE_BANNER_TYPE['125']="榻榻米频道亮点推荐右侧广告图";

$NEW_SITE_BANNER_TYPE['126']="榻榻米频道轮播图-窄屏(725*532)";



////来源统计数组 2010-03-19

$POST_SEARCH_ARRAY = array(1 => '楼盘', 2 => '方案', 3 => '房型');



$POST_SEARCH_ARRAY2 = array('020' => '广州', '010' => '北京', '021' => '上海');



$OUR_IPS = "'121.33.212.1','121.33.212.2','121.33.212.3','121.33.212.4','121.33.212.5','121.33.212.6','121.33.212.7','59.41.14.58', '59.41.14.59', '59.41.14.60', '59.41.14.61', '59.41.14.62', '121.33.212.1', '121.33.212.2', '121.33.212.3', '121.33.212.4', '121.33.212.5', '121.33.212.6', '121.33.212.7', '183.63.103.82', '183.63.103.83', '183.63.103.84', '183.63.103.85', '183.63.103.86', '14.18.144.234', '14.18.144.235', '14.18.144.236', '14.18.144.237', '14.18.144.238', '14.23.158.218', '14.23.158.219', '14.23.158.220', '14.23.158.221', '14.23.158.222', '14.23.158.217', '14.23.157.242', '14.23.157.243', '14.23.157.244', '14.23.157.245', '14.23.157.246'";



$MY_DIY_FORM_ARRAY = array(1 => '姓名', 2 => '联系电话', 3 => '地址', 4 => '省市', 5 => '首次提交时间', 6 => '信息来源', 7 => '最后提交时间', 8 => '最后提交方式', 9 => '状态', 10 => '状态更改时间', 11 => '显示地址', 12 => '显示赠送礼品会员', 13 => '最后处理时间', 14 => '计划跟进时间', 15 => '时间间隔', 16 => '门店列表', 17 => '显示最后提交方式', 18 => '显示客户号', 19 => '零成交额', 20 => '计划量尺时间', 21 => '量尺人', 22 => '客户编号', 23 => '显示客户编号', 24 => '显示IP', 25 => '计划跟进时间当天', 26 => '最后提交时间大于最后处理', 27 => '显示跟进人数据', 28 => '跟进人', 29 => '跟进客服', 30 => '设计师', 31 => '客服确定等级', 32 => '销售确定等级', 33 => '已量尺时间', 34 => '已量尺超两个月未处理', 35 => '初次方案超一个月未处理', 36 => '量房地址', 37 => '显示量房地址', 38 => '未处理楼盘户型', 39 => '秒杀状态', 40 => '是否拍照', 41 => '成交时间', 42 => '显示客户QQ', 43 => '显示跟进QQ', 44 => '显示所在Q群', 45 => '显示跟进楼盘', 46 => '客户QQ', 47 => '跟进QQ', 48 => '所在Q群', 49 => '跟进楼盘', 50 => '导出excel', 51 => '显示量尺人', 52 => '已领取代价卷');





$SEARCH_DEFAULT_ARRAY = array(1  => '方案', 2 => '户型');



/*

$ZT_LOUPAN_JINDU_TYPE = array(1 => '传完整体空白户型', 2 => '传完整体户型平面布置图', 3 => '传完单体房间空白户型', 4 => '传完单体平面布置图', 5 => '传完方案', 6 => '把方案匹配了', 7 => '方案报价审核', 8 => '单体房间户型小图上传', 9 => '单体房间平面布置小图上传', 10 => '方案效果列表页小图上传', 11 => '报价上传', 12 => '设计说明添加', 13 => '方案审批');



$ZT_LOUPAN_JINDU_URL = array(1 => 'zt_loupan_edit2.php?id=', 2 => 'zt_loupan_edit2.php?id=', 3 => 'taocan_bz_room_add.php', 4 => 'taocan_bz_layout_add.php', 5 => 'taocan_add.php', 6 => 'taocan_list.php', 7 => 'taocan_list5.php', 8 => 'zt_loupan_edit2.php?id=', 9 => 'zt_loupan_edit2.php?id=', 10 => 'zt_loupan_edit2.php?id=', 11 => 'zt_loupan_edit2.php?id=', 12 => 'zt_loupan_edit2.php?id=', 13 => 'zt_loupan_edit2.php?id=');

*/



$op = $OPFILE = str_replace(".php", "", basename($_SERVER['PHP_SELF']));



//if(eregi("_edit", $OPFILE) || eregi("_add", $OPFILE)) die("后台维护中，暂时不能进行增加和编辑操作。29号早上10点，新伟会开放功能，请等待。");



//////////





if($OPFILE != "admin" && $OPFILE != 'index' && $OPFILE != 'login' && $OPFILE != 'logout' && $OPFILE != 'pn3_file_check_mrs' && $OPFILE != 'update' && $OPFILE != 'upload_danti' && $OPFILE != 'bz_danti_search' && $OPFILE != 'free_design_apply_js' && $OPFILE !='ip_do' && !$_member->islogin && !$_member->is_member && $OPFILE != 'callcenter' && (defined("_LANMU") or eregi("/tongjisys/", $_SERVER["REQUEST_URI"])) && !defined("NO_CHECK_LOGIN")){

	header("location: /all/login.php?go_url=".urlencode($_SERVER["REQUEST_URI"]));

	exit;

	//_s('', '请先登录!', 'login.php?go_url='.urlencode($_SERVER["REQUEST_URI"]));



}







if(!$_member->is_admin && !defined("NO_CHECK_LOGIN")){

	if(defined("_LANMU") && _LANMU != 'S1'){

		///

		//if(_LANMU == 'NO' && !$_member->is_super_admin) _s('', '你没有权限访问'.$LANMU_ARRAY[_LANMU]."这个栏目。");



		$tmp_info = split(",", $_member->group_info[cats]);



		if(!in_array(_LANMU, $tmp_info)) _s('', '你没有权限访问'.$LANMU_ARRAY[_LANMU]."这个栏目。", _ROOT);







	}



}





////////记录管理员操作

$log_info = array();



if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {

	$onlineip = getenv('HTTP_CLIENT_IP');

} elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {

	$onlineip = getenv('HTTP_X_FORWARDED_FOR');

} elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {

	$onlineip = getenv('REMOTE_ADDR');

} elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {

	$onlineip = $_SERVER['REMOTE_ADDR'];

}

$onlineip = preg_replace("/([\d\.]+).*/", "\\1", $onlineip);



//if(eregi("222.24", $onlineip)) exit;



$log_info[ip] = $onlineip;

$log_info[uid] = $_member->id;

$log_info[username] = $_member->username;



$log_info[url] = $_SERVER['REQUEST_URI'];

$log_info[lanmu] = defined("_LANMU") ? _LANMU : "";



$log_info[opfile] = $OPFILE;

$log_info[post_date] = time();





if(defined("_LANMU") && $_member->id && $log_info[url] && eregi("/sys/", $log_info[url])) $_log->add($log_info, 0);



//unset --释放给定的变量



//unset($log_info);

/**********

把程序下的



include("./include/check.php");

	include("../include/database.php");



替换为以下程序



define("_LANMU", 'T');//栏目id号



define('_ROOT', '.');



///

include_once("include/header.inc.php");

///////////







////检查增加、编辑、删除操作权限

//在要检查的代码里增加此语句,有add,edit,del三个参数

_check('del');





***********/





$ses_admin_user_name = $_member->username;



$ses_admin_user_id = $_member->id;



//$TAOCAN_BZ_ROOM_CAT[7] = "厨房";//以后放到base_info



define("SP_FLASH_XML_DIR", _ROOT."/../update_user/software/spzpstart/start/flash/");



define("WAYES_FLASH_XML_DIR", _ROOT."/../update_user/software/wayesstart/start/flash/");



//尚品flash数组

$_SP_FLASH_TYPE_ARRAY = array(0 => '在全部版本显示', 1 => '在加盟店版显示', 2 => '在直营店版显示');









//维意跟踪类型

$_WAYES_FLOW_TYPE = array(1 => '搜索项', 2 => '过渡页', 3 => '详情页', 4 => '搜索列表页');



////信息来源

$TEL400_SOURCE_TYPE = array( 2 => '上门量尺', 1 => '方案定制', 3 => '定单申请', 4 => '400来电未接', 40 => '400来电已接', 5 => 'TQ聊天', 6 => '其他方式', 7 => '秒杀抢购', 8 => '代言人报名', 9 => '楼盘团购', 10 => '团购总页面', 11 => '在线客服', 12 => '广州团购', 13 => '和家网', 14 => '本地活动', 15 => '老客户介绍', 16 => '725团购', 17 => '在线客服/725团购', 18 => '乐乐居团购', 19 => '91团购', 20 => '8.7团购活动', 21 => '在线客服/8.7团购活动');



make_class("_fankui_sourse_type");

$TEL400_SOURCE_TYPE = $_fankui_sourse_type->get_array();





////软件对应房间  bz_room_data

/*

//房间类型：0-未分配

//			1-卧室 11-主人房 13-客房 12-儿童房

//			2-客餐厅 21-客厅 22-餐厅

//			3-书房

//			4-卫生间 5-厨房 6-公寓



*/



//搜索未处理数组

$SP_CHULI_TYPE = array(0 => '未处理', 1 => '不处理', 2 => '已处理', 3 => '已完成',4 => '全部');





//问题空间方案

$DX_FANGAN_TYPE = array(0 => '未处理', 1 => '处理中', 2 => '已完成', 3 => '不处理');







//////百度api

$BAIDU_MATCH_TYPE = array('AbroadMatch' => '广泛匹配', 'PhraseMatch' => '短语匹配', 'ExactMatch' => '精确匹配');

//$tmp_array = array(1 => 'ExactMatch', 2 => 'PhraseMatch', 3 => 'AbroadMatch');

$BAIDU_MATCH_TYPE2 = array('AbroadMatch' => 3, 'PhraseMatch' => 2, 'ExactMatch' => 1);





$BAIDU_PAUSE_TYPE = array('true' => '暂停', 'false' => '启用');



$BAIDU_REPORT_TIME_TYPE = array('日报', '周报', '月报', '年报');



$BAIDU_SHOWPROB_TYPE = array(1 => '优选', 2 => '等概率');



$BAIDU_JOIN_TYPE = array('true' => '参加', 'false' => '不参加');//参加网盟



$BAIDU_PLAN_STATUS = array('21' => '有效', '22' => '处在暂定阶段', '23' => '暂停推广', '24' => '推广计划预算不足', '25' => '账户预算不足');



$BAIDU_UNIT_STATUS = array('31' => '有效', '32' => '暂停推广', '33' => '推广计划暂停推广');



$BAIDU_KEYWORD_STATUS = array('41' => '有效', '42' => '暂停推广', '43' => '不宜推广', '44' => '搜索无效', '45' => '待激活', '46' => '审核中', '47' => '搜索量过低');



$BAIDU_IDEA_STATUS = array('51' => '有效', '52' => '暂停推广', '53' => '不宜推广', '54'  => '待激活', '55' => '审核中');



$BAIDU_CITY_TYPE = array('gzzy' => '广州', 'shzy' => '上海', 'bjzy' => '北京', 'sdzy' => '山东', 'njzy' => '南京');//



//////////

//数据来源类型

$DB_USER_TYPE = array(1 => '400后台', 2 => '会员注册后台', 3 => '户型规划提交', 4 => '手工添加', 5 => '推广楼盘QQ', 6 => '意向客户提交的潜在客户', 7 => '标记的QQ号码群发');



//数据客户类型 new

$DB_USER_GROUP_TYPE = array(1 => '潜在客户', 2 => '意向客户', 3 => '呼叫中心');



//潜在客户 客户来源 类型

$DB_QIANZAI_KEHU_TYPE = array(2 => '注册会员', 5 => '楼盘推广管理系统提交(楼盘QQ群)', 6 => '意向客户管理系统提交', 7 => '标记的QQ号码群发');//, 3 => '户型规划提交', 4 => '手工添加'



//意向客户 客户来源

$DB_YIXIANG_KEHU_TYPE = array(11 => '在线客服', 85 => 'QQ群提交', 86 => '论坛提交', 92 => '其它方式');



//提交时间范围

$YX_TIJIAO_TIME_TYPE = array(1 => '提交时间一个月内', 2 => '提交时间第二个月内', 3 => '提交时间第三个月内', 9 => '提交后3个月内共3个月', 21 => '提交后2个月内共2个月', 12 => '提交时间半年内', 4 => '收楼倒数6月及5月，4月，3月共4月', 5 => '收楼倒数2月', 6 => '收楼倒数1月', 7 => '收楼后2个月内', 8 => '收楼前1个月及收楼后1个月共2个月', 10 => '状态更改时间后三个月内', 13 => '状态更改时间后两个月内', 11 => '状态更改时间后一个月内', 100 =>'未死亡,未成交的客户(全球十佳网商)', 101 =>'成交时间在三个月以上', 102 =>'成交时间在三个月以内');





//操作类型

$YX_OP_TYPE = array(1 => '短信发送', 2 => '邮件发送');



//结果类型

$YX_RESULT_TYPE = array(0 => '未处理', 1 => '发送成功', 2 => '发送失败');



//发送类型

$YX_SEND_TYPE = array(1 => '短信发送', 2 => '邮件发送');



//任务类型 旧

$YX_MISSION_TYPE = array(1 => '初次注册', 2 => '半年内注册会员以及提交信息客户(对应周一,品牌循环)', 3 => '半年内提交的跟进中客户（包括已量尺、已看方案、跟进中）(对应周五)', 4 => '自定义');



//周期类型

$YX_TIME_TYPE = array(1 => '立刻发送', 2 => '每周周一', 3 => '每周周五');



//周期类型 new

$YX_TIME_TYPE_NEW = array(1 => '立刻发送',  4 => '每周一次', 5 => '每半月一次', 6 => '每月一次', 10 => '特殊用户发送(全球十佳网商)');//2 => '每周周一(品牌循环)', 3 => '每周周五',



//邮件发送模版

$YX_EMAIL_TPL_CAT = array(1 => '知识性ZS邮件', 2 => '品牌类PP邮件', 3 => '促销类CX邮件', 4 => '邀请好友YQ邮件', 5 => '成交客户CJ邮件', 6 => 'QQ号码QQ邮件');

$YX_EMAIL_TPL_TYPE = array(1 => 'ZS', 2 => 'PP', 3 => 'CX', 4 => 'YQ', 5 => 'CJ', 6 => 'QQ');



//短信发送模版

$YX_SMS_TPL_CAT = array(2 => '品牌类PP短信', 3 => '促销类CX短信', 4 => '邀请好友YQ短信', 5 => '成交客户CJ短信');

$YX_SMS_TPL_TYPE = array(2 => 'PP', 3 => 'CX', 4 => 'YQ', 5 => 'CJ');

//短信最多发送次数

$YX_SMS_TPL_SEND_NUM_ARRAY = array(2 => 12, 3 => 6);





//搜索城市,营销系统用

$SEARCH_CITYS = array('广州' => '广州', '北京' => '北京', '上海' => '上海', '山东'=>'山东');//, '深圳' => '深圳'



$CHUGUI_TYPE = array(0 => '未处理', 1 => '已处理', 2 => '不能处理');





$_KEYWORD_ARTICLE_CAT_TYPE = array(1202 => '装修页面', 1201 => '定制家具页面', 1200=>'橱柜页面', 1199 => '衣柜页面', 1198 => '卖场类页面', 1197 => '新促销页面');



$_BAIDU_UPLOAD_TYPE = array(1 => '等待上传', 2 => '已上传', 3 => '取消上传', 4 => '不需要更新', 5 => '等待服务器更新', 6 => '服务器正在更新');



$_BAIDU_REPORT_TYPE = array('keyword' => '关键字报告', 'idea' => '创意报告');



$GX_SHENPI_TYPE = array(1 => '待审核', 2 => '审核通过', 3 => '审核未通过');



$GX_YUANYIN_TYPE = array(1 => '贴子被删除', 2 => '贴子地址重复提交', 3 => '贴子内容与主题无关', 4 => '贴子地址无法打开', 5 => '链接错误', '广告区帖子', '访问页面不存在', '禁止发在QQ空间', '禁止发在博客留言板', '论坛与新居网服务无关', '同一论坛板块只能发5个贴', '同一博客只能发10个贴');



//哪里加几个字段原因： 广告区帖子、访问页面不存在、禁止发在QQ空间、禁止发在博客留言板、论坛与新居网服务无关





//店面系统,计划量尺时间审核状态

$_GJ_USER_JIHUA_SHENPI_TYPE = array(1 => '待审核', 2 => '已审核', 3 => '未审核', 4 => '重新待审核');





$CAIJI_TYPE = array(0 => '非采集', 1 => '采集',2 => '模版生成');





/*

卖场类页面

http://www.homekoo.com/zhixiao/selling

（3）衣柜类页面

http://www.homekoo.com/zhixiao/chest

（4）橱柜类页面

http://www.homekoo.com/zhixiao/cabinet

（5）定制家具类页面

http://www.homekoo.com/zhixiao/custom_made

（6）装修类页面

http://www.homekoo.com/zhixiao/building

*/



///审核套餐权限,李强 客厅,餐厅,客餐厅

//$_SHF_FANG_CAT = array('李强' => '4,5,8');





//$_SHF_NOT_SHOW = array('李强' => '200004', '余晋' => '200227');//看不到对方审核的



//在线客服 推广提交 论坛提交 400客服提交 直销提交

$_TG_SOURSE_TYPE = array(1 => '在线客服', 2 => '推广提交', 3 => '论坛提交', 4 => '400客服提交', 5 => '直销提交');





$_TG_ZX_TYPE = array(1 => '毛坯', 2 => '简装修', 3 => '精装修');



$_TG_LEVEL_TYPE = array(1 => 'A级', 2 => 'B级', 3 => 'C级', 4 => 'D级');



//沟通状态

$_TG_TALK_TYPE = array(3 => '取消跟进', 1 => '跟进中', 2 => '已完成');





//购物卡处理状态

$_GET_CARD_DO_TYPE = array(1 => '处理中', 5 => '已审核', 2 => '已快递', 3 => '客户确认收到', 4 => '取消');



$_GET_CARD_SEND_TYPE = array(0 => '没发送,请人工联系', 1 => '发送成功', 2 => '发送失败,请人工联系');





//家庭人员

$LIANGCHI_NUM_ARRAY = array(1 => '单身', 2 => '2口人', 3 => '3口人', 4 => '4口人', 5 => '5口人', 6 => '6口人');



//性别

$LIANGCHI_SEX_ARRAY = array(1 => '先生', 0 => '女士');



//面积

$LIANGCHI_SIZE_ARRAY = array(80 => '80平米以下', 100 => '80-100平米', 120 => '80-100平米', 150 => '120-150平米', 300 => '150平米以上');





//房型

$LIANGCHI_TYPE_ARRAY = array(11 => '一室一厅', 21 => '二室一厅', 22 => '二室二厅', 32 => '三室二厅', 42 => '四室二厅');





//类型

$LIANGCHI_TYPE2_ARRAY = array('a' => '洋房', 'b' => '复式', 'c' => '别墅', 'd' => '精装房', 'e' => '毛坯房', 'f' =>'旧房改造');



//装修阶段

$LIANGCHI_DECORATION_ARRAY = array(1 => '准备装修', 2 => '正在装修', 3 => '已经装修完');



//计划入住时间

$LIANGCHI_TIME_LIMIT_ARRAY = array(2 => '2周内', 4 => '1个月内', 8 => '2个月内', 12 => '3个月内', 52 => '3个月以后');



//欲购家具预算

$LIANGCHI_BUDGET_ARRAY = array(1 => '1万以下', 2 => '1-2万', 3 => '2-3万', 5 => '3-5万', 10 => '5-10万', 100 => '10万以上');





//客户状态

$LIANGCHI_STATUS_ARRAY = array(0 => '待量尺客户', 1 => '已量尺客户', 2 => '已成交客户');



//004 以前张杏

$PINDAO_LUYIN_ARRAY = array('000' => '陆晓霞','002' => '余莹','003' => '陈玲/林剑玉','004' => '罗文雄','005' => '易萍','006' => '赵丽琼','007' => '关珊珊','008' => '梁丽敏','009' => '柯晓庆','010' => '宋娟娟','011' => '潘炼梅','001' => '黄志明','012' => '李先权','013' => '曾明宇','014' => '陈星若','015' => '陈华容','016' => '016');//'001' => '曾明宇'

/*

广州组后台录音频道：柯晓庆、罗文雄正常，欧蓓蕾更改为梁丽敏   我还是没找到李珍燕的频道  

章淑建(635848017)  16:54:58上海组后台录音频道：曾明宇、陈华容、陈星若正常， 张彩娟/李慧敏更改为关珊珊

易萍(465120771)  17:00:10北京组后台录音频道：赵丽琼，陈玲，李先权正常，陈健珍改为陆晓霞，彭梅改为宋娟娟，章淑建改为余莹

*/



$FENJI_LUYIN_TYPE = array(1 => '打出电话', 2 => '来电');





$ZT_TUANGOU_STATUS = array(0 => '已显示', 1 => '已隐藏');



$ZT_TUANGOU_TYPE = array(0 => '图片', 1 => '文本', 2 => '媒体', 3=>'固定');







$CHUJIA_TYPE = array( 1 => '开启出价', 2 => '永不出价');



$MUBIAO_PAIMING = array(1 => '排到左侧第一', 2 => '排到左侧第二', 3 =>'排到左侧第三', 4 =>'排到左侧第四',11 => '排到右侧第一', 12 => '排到右侧第二', 13 =>'排到右侧第三', 14 =>'排到右侧第四');



$SYS_TYPE = array(1 => '400后台', 2 => '直销后台');

$SYS_YZ_TYPE = array(1 => '等待验证', 2 => '验证成功', 3 => '验证失败');





$ZUOXI_QUANXIAN_TYPE = array(1 => '看到所有的客户',2 => '只能看到自己的客户(推广和客服才有效)', 3 => '能看到推广本组的客户');



$ZUOXI_SP_QUANXIAN_TYPE = array(1 => '所有在线客服来源',2 => '自然提交的客户（即没有带推广人员参数的广州客户）', 10 => '可以导出客户信息(暂时只给邹姐)', 11 => '电话专员(开给客服特殊职位人员)');



$BAIDU_TIAO_TYPE = array(1 => '调整成功', 5 => '最高价太低,不能排到目标', 6 => '最低价太高,不能排到目标', 2 => '调整不成功', 3 => '不能调到目标,维持排名但调了价格', 4 => '不能调到目标,提高了排名');







$TUIGUANG_DINGJIN_TYPE = array(100 => '已交100元订金', 1 => '未交100元定金');





$_DAIJINJUAN_SEND_TYPE = array(1 => '发送成功', 2 => '发送失败,请人工联系');



$DESIGNER_REJECT_TYPE = ARRAY(1 => '设计师请客服帮忙拒绝', 2 => '设计师已经接收,后来自己拒绝了', 3 => '设计师已经接收,后来请设计师拒绝');



//分尺发送给设计师短信记录 类型

$FENCHI_TYPE = array(1 => '初次发送给设计师短信', 2 => '一小时没接收的提醒短信', 3 => '五小时后的提醒短信', 4 => '确认接收后收到短信', 5 => '组长接收并确认后设计师才接收的短信', 6 => '组长接收后接收的短信', 7 => '警戒线后发给客服的短信');







//分尺发送给设计师短信记录 发送状态

$FENCHI_SEND_TYPE = array(1 => '等待发送', 2 => '已发', 3 => '拒绝或已接收后取消了发送', 4 => '<b>发送失败,需人工联系</b>');





$LIANGCHI_KEHU_CHENGJIA_TYPE = array(1 => '已成交', 2 => '未成交');





$_TAOCAN_SET_ARRAY = array(1 => '已设', 2 => '未设');





$LIANGCHI_DIAOCHA_TYPE = array(1 => '单选', 2 => '文本填写内容', 3 => '多选(暂时不用)');



//从套餐过来报名记录类型

$FROM_TAOCAN_LIANGFANG_RECORD_ARRAY = array(1 => '从按钮我喜欢这套点击过来', 2 => '从按钮我有其他想法点击过来');



//尚品、维意、维尚、其他

$SOFT_USER_PINPAI_ARRAY = array('尚品' => '尚品', '维意' => '维意', '维尚' => '维尚', '通用' => '通用', '其他' => '其他');





//新首页全屋家具定制体验 分类

$NEW_INDEX_DINGZHI_CAT = array(1 => '五房两厅', 2 => '四房两厅', 3 => '三房两厅', 4 => '两房两厅');





//维意型行色摄分类

$WAYES_PHOTO_CAT = array(1 => '型', 2 => '行', 3 => '色', 4 => '摄');





//词组类别

$BAIDU_KEYWORD_ARRAY = array(1 => '核心词', 2 => '边缘词');





//核心词的类别边缘词的类别

$BAIDU_KEYWORD_CAT = array(1 => 'A+', 2 => 'B+',3 => 'C+', 4 => 'D+', 5 => 'E+', 11 => 'A', 12 => 'B',13 => 'C', 14 => 'D', 15 => 'E', 16 => 'F');







//异常类型

$BAIDU_KEYWORD_YICHANG_CAT = array(100 => '显示所有的异常', 1 => '报名成本异常', 2 => '质量度3降1异常',3 => '质量度3降2异常', 4 => '质量度2降1异常', 5 => '排名位置异常', 6 => '消费波动异常', 7 => '消费超出异常');



//报名来源

$BAIDU_KEYWORD_BAOMING_ARRAY = array(1 => '自然提交', 2 => '在线客服提交');



$RIGHT_WIN_OP_TYPE = array(1 => '显示', 2 => '点击');



$SOFT_USER_LOGIN_TYPE = array(1 => 'PC登录', 2 => '手机登陆');





//huxing_designer

$CITY_ID_ARRAY = array(1=> '广州', 10 => '北京' ,11 => '上海');



/*

if(defined("_LANMU") && eregi("homekoo.com", $_SERVER["SERVER_NAME"]) && $_SERVER["SERVER_NAME"] != 'www.homekoo.com' && $_SERVER["SERVER_NAME"] != 'sys.homekoo.com'){

		header("location:http://www.homekoo.com". $_SERVER["REQUEST_URI"]);

		exit;

}*/



if(($_SERVER["SERVER_NAME"] == 'www.homekoo.com' || $_SERVER["SERVER_NAME"] == 'homekoo.com') && ($_SERVER["SERVER_ADDR"] != '211.147.238.151') && !$_POST){

		header("location:http://sys.homekoo.com". $_SERVER["REQUEST_URI"]);

		exit;

}



/*

if(($_SERVER["SERVER_NAME"] == 'wwww.homekoo.com' || $_SERVER["SERVER_NAME"] == 'ww.homekoo.com') && ($_SERVER["SERVER_ADDR"] != '211.147.238.151') && $_SERVER["REQUEST_URI"] && eregi("sys", $_SERVER["REQUEST_URI"]) && $_admin->islogin){

		header("location:http://sys.homekoo.com". $_SERVER["REQUEST_URI"]);

		exit;

}



*/

if($_SERVER["SERVER_NAME"] == 'local.homekoo.com' && $_admin->islogin){

		header("location:http://sys.homekoo.com". $_SERVER["REQUEST_URI"]);

		exit;

}





if(!$IS_LOCALHOST && defined("_ONLY_USE_SYS_DOMAIN") && $_SERVER["SERVER_NAME"] != _ONLY_USE_SYS_DOMAIN){

		header("location:http://"._ONLY_USE_SYS_DOMAIN. $_SERVER["REQUEST_URI"]);

		exit;

}





$_SHENPI_TYPE = array(1 => '审核通过', 2 => '审核未通过');



//礼品指定购买时间

$LIPIN_BUY_DATE_ARRAY = array(1 => '11月25日', 2 => '11月26日', 3 => '11月27日', 4 => '11月28日', 5 => '11月29日', 6 => '11月30日', 7 => '12月9号', 8=>'12月16日', 9=>'12月23日', 10=>'12月30日', 11=>'1月6日');



//礼品处理状态

$LIPIN_DO_TYPE = array(1 => '未处理', 2 => '已通知领取', 3 => '已领取', 4 => '无效申请');





$SOFT_SHOUJI_FANGJIAN_CAT = array(1 => '手机', 2 => 'PC');

$SOFT_SHOUJI_CAIJI_CAT = array(1 => '首次', 2 => '出图');



$SOFT_MISSION_PIC_TYPE = array(1 => '平面布置图片', 2 => '组合布局图片', 3 => '云视角图片');





$TIYAN_PIC_TOP_TYPE = array(10 => '最高级置顶', 5 => '二级置顶', 1 => '三级置顶');





$SHOWHOME_CAT = array(1 => '美图示例', 2 => '个性晒家', 3 => '时尚晒家', 4 => '甜蜜晒家', 5 => '华丽晒家', 6 => '浪漫晒家');



$HUOJIANG_TYPE = array(1 => '冠军', 2 => '亚军', 3 => '季军');







$BAIDU_KEY_CAT = array(1 => '上传', 2 => '造词');



$BAIDU_KEY_CHAI_TYPE = array(1 => '未拆分', 2 => '已拆分');





$BAIDU_KEY_CITYS = array('广州' => '广州', '北京' => '北京', '上海' => '上海','山东' => '山东');



$BBS_INDEX_CAT_ARRAY = array(

1 => '新居头条', 

96 => '定制达人',

14 => '我家我设计',

99 => '新居笑谈', 

63 => '收楼', 

64 => '装修材料', 

65 => '家具软装', 

66=>"装修案例", 

67=>"新居晒客", 

87 => '卧室装修', 

88 => '厨房装修', 

89 => '书房装修', 

90 => '儿童房装修', 

91 => '客餐厅装修', 

1001=>'热门推荐', 

1002=>'网友最爱板块', 

1003=>'社区活动', 

1004=>'热门图库', 

1005=>'家具软装--衣柜', 

1006=>'家具软装--衣柜--最新热帖', 

1007=>'家具软装--家具资讯', 

1008=>'装修案例--卧房', 

1009=>'装修案例--厨房', 

1010=>'装修案例--大话装修', 

1011=>'装修案例--家居风水', 

1012=>'装修材料--橱柜', 

1013=>'装修材料--涂料', 

1014=>'收楼-收楼注意事项', 

1015=>'新居晒客-定制达人', 

1016=>'新居晒客-婚房装修', 

1017=>'论坛首页右侧广告图1(226*115)', 

1018=>'论坛首页右侧广告图2(226*189)',

1020=>'论坛首页中间-电视柜(220*120)',

1021=>'论坛首页中间-沙发(220*120)',

1022=>'论坛首页中间-书柜(220*120)',

1023=>'论坛首页中间-客厅(220*120)',

1024=>'论坛首页中间-书房(220*120)',

1025=>'论坛首页中间-青少年房(220*120)',

1026=>'论坛首页中间-瓷砖(220*120)',

1027=>'论坛首页中间-地板(220*120)',

1028=>'论坛首页中间-[验房注意事项](220*120)',

1029=>'论坛首页中间-[收楼经验分享](220*120)',

1030=>'首页今日聚焦',

1066=>'首页今日聚焦右边有图片221*171',

1031=>'首页版友热谈',

1065=>'首页版友热谈右边有图片221*171',

1032=>'首页爱家部落',

1033=>'首页大话装修',

1034=>'首页家里家外',

1035=>'首页名师作品193*120',

1036=>'首页家装美图193*120',

1037=>'首页家具品牌',

1038=>'首页家具资讯',

1039=>'首页家具软装衣柜有图片130*87',

1040=>'首页家具软装橱柜有图片130*87',

1041=>'首页家具软装沙发有图片130*87',

1042=>'首页家具软装家具城有图片210*100',

1043=>'首页建材导购瓷砖有图片130*87',

1044=>'首页建材导购卫浴有图片130*87',

1045=>'首页建材导购地板有图片130*87',

1046=>'首页建材导购涂料有图片130*87',

1047=>'首页建材导购洁具有图片130*87',

1048=>'首页建材导购热文',

1049=>'首页装修案例卧房装修有图片130*87',

1050=>'首页装修案例厨房装修有图片130*87',

1051=>'首页装修案例儿童房装修有图片130*87',

1052=>'首页装修案例客厅装修有图片130*87',

1053=>'首页装修案例餐厅装修有图片130*87',

1054=>'首页装修案例书房装修有图片130*87',

1055=>'首页装修案例热文',

1056=>'首页收楼验房热文',

1057=>'首页收楼验房收楼注意事项图片300*200',

1058=>'首页收楼验房收楼注意事项图片130*87',

1059=>'首页收楼验房验房注意事项图片130*118',

1060=>'首页收楼验房收楼经验分享图片130*118',

1061=>'首页今日聚焦左边广告图片320*250',

1062=>'首页板块导航下面广告图片230*127',

1063=>'首页家里家外上面广告图片1210*60',

1064=>'首页门窗上面广告图片230*381',

1067=>'首页社区活动--有图片130*87',  

1068=>'首页家具软装标红热文',  

1069=>'帖子列表页精彩推荐有图片210*151',  

 

 



 





);





$IS_USE_NETWORK_PIPEI_FLOW = true;//是否使用新的专题流程(空白户型需要分析房间;分析人需要网上匹配)$_admin->username == 'feixin' || $_admin->username == 'yujin' ? true : false





$SITE_SEO_LANMU = array(1 => '论坛', 2 => '装修频道');





$SOFT_GUWEN_CAT = array(4 => '风格选择', 1 => '设计规范', 2 => '方案推荐', 5 => '宅配推荐', 3 => '常见错误', 6 => '个性化错误');



//相机角度，灯光渲染，空间配饰，产品设计

$SOFT_CHAPING_ARRAY = array(1 => '相机角度', 2 => '灯光渲染', 3 => '空间配饰', 4 => '产品设计');



$SOFT_GUWEN_KONGJIAN_LEIXING = array('主卧房' => '主卧房', '客卧房' => '客卧房', '儿童房' => '儿童房', '书房' => '书房', '客餐厅' => '客餐厅', '衣帽间' => '衣帽间', '杂物间' => '杂物间', '厨房' => '厨房', '其他' => '其他');



$SOFT_GUWEN_FENGGE = array('阿尔卑斯客餐厅' => '阿尔卑斯客餐厅', '阿尔卑斯其他' => '阿尔卑斯其他', '阿尔卑斯书房' => '阿尔卑斯书房', '阿尔卑斯卧房' => '阿尔卑斯卧房', '芭堤雅客餐厅' => '芭堤雅客餐厅', '芭堤雅其他' => '芭堤雅其他', '芭堤雅书房' => '芭堤雅书房', '芭堤雅卧房' => '芭堤雅卧房', '北美枫情客餐厅' => '北美枫情客餐厅', '北美枫情其他' => '北美枫情其他', '北美枫情书房' => '北美枫情书房', '北美枫情卧房' => '北美枫情卧房', '北欧阳光客餐厅' => '北欧阳光客餐厅', '北欧阳光其他' => '北欧阳光其他', '北欧阳光书房' => '北欧阳光书房', '北欧阳光卧房' => '北欧阳光卧房', '丹麦本色Ⅱ客餐厅' => '丹麦本色Ⅱ客餐厅', '丹麦本色Ⅱ其他' => '丹麦本色Ⅱ其他', '丹麦本色Ⅱ书房' => '丹麦本色Ⅱ书房', '丹麦本色Ⅱ卧房' => '丹麦本色Ⅱ卧房', '丹麦本色客餐厅' => '丹麦本色客餐厅', '丹麦本色其他' => '丹麦本色其他', '丹麦本色书房' => '丹麦本色书房', '丹麦本色卧房' => '丹麦本色卧房', '德国森林客餐厅' => '德国森林客餐厅', '德国森林其他' => '德国森林其他', '德国森林书房' => '德国森林书房', '德国森林卧房' => '德国森林卧房', '东京恋曲客餐厅' => '东京恋曲客餐厅', '东京恋曲其他' => '东京恋曲其他', '东京恋曲书房' => '东京恋曲书房', '东京恋曲卧房' => '东京恋曲卧房', '费城故事客餐厅' => '费城故事客餐厅', '费城故事其他' => '费城故事其他', '费城故事书房' => '费城故事书房', '费城故事卧房' => '费城故事卧房', '黑杰克客餐厅' => '黑杰克客餐厅', '黑杰克其他' => '黑杰克其他', '黑杰克书房' => '黑杰克书房', '黑杰克卧房' => '黑杰克卧房', '加州梦客餐厅' => '加州梦客餐厅', '加州梦其他' => '加州梦其他', '加州梦书房' => '加州梦书房', '加州梦卧房' => '加州梦卧房', '卡罗摩卡客餐厅' => '卡罗摩卡客餐厅', '卡罗摩卡其他' => '卡罗摩卡其他', '卡罗摩卡书房' => '卡罗摩卡书房', '卡罗摩卡卧房' => '卡罗摩卡卧房', '快乐星球' => '快乐星球', '里昂春天客餐厅' => '里昂春天客餐厅', '里昂春天其他' => '里昂春天其他', '里昂春天书房' => '里昂春天书房', '里昂春天卧房' => '里昂春天卧房', '米兰格调客餐厅' => '米兰格调客餐厅', '米兰格调其他' => '米兰格调其他', '米兰格调书房' => '米兰格调书房', '米兰格调卧房' => '米兰格调卧房', '米兰剪影儿童房' => '米兰剪影儿童房', '米兰剪影客餐厅' => '米兰剪影客餐厅', '米兰剪影其他' => '米兰剪影其他', '米兰剪影书房' => '米兰剪影书房', '米兰剪影卧房' => '米兰剪影卧房', '木吉他客餐厅' => '木吉他客餐厅', '木吉他其他' => '木吉他其他', '木吉他书房' => '木吉他书房', '木吉他卧房' => '木吉他卧房', '挪威月色客餐厅' => '挪威月色客餐厅', '挪威月色其他' => '挪威月色其他', '挪威月色书房' => '挪威月色书房', '挪威月色卧房' => '挪威月色卧房', '诺曼红影客餐厅' => '诺曼红影客餐厅', '诺曼红影其他' => '诺曼红影其他', '诺曼红影书房' => '诺曼红影书房', '诺曼红影卧房' => '诺曼红影卧房', '青春探戈男孩房' => '青春探戈男孩房', '青春探戈女孩房' => '青春探戈女孩房', '首尔之缤客餐厅' => '首尔之缤客餐厅', '首尔之缤其他' => '首尔之缤其他', '首尔之缤书房' => '首尔之缤书房', '首尔之缤卧房' => '首尔之缤卧房', '斯德哥尔摩客餐厅' => '斯德哥尔摩客餐厅', '斯德哥尔摩其他' => '斯德哥尔摩其他', '斯德哥尔摩书房' => '斯德哥尔摩书房', '斯德哥尔摩卧房' => '斯德哥尔摩卧房', '温丝莱特客餐厅' => '温丝莱特客餐厅', '温丝莱特其他' => '温丝莱特其他', '温丝莱特书房' => '温丝莱特书房', '温丝莱特卧房' => '温丝莱特卧房', '香格里拉客餐厅' => '香格里拉客餐厅', '香格里拉其他' => '香格里拉其他', '香格里拉书房' => '香格里拉书房', '香格里拉卧房' => '香格里拉卧房', '香山琴韵客餐厅' => '香山琴韵客餐厅', '香山琴韵其他' => '香山琴韵其他', '香山琴韵书房' => '香山琴韵书房', '香山琴韵卧房' => '香山琴韵卧房', '新古典客餐厅' => '新古典客餐厅', '新古典其他' => '新古典其他', '新古典书房' => '新古典书房', '新古典卧房' => '新古典卧房', '英伦印象客餐厅' => '英伦印象客餐厅', '英伦印象其他' => '英伦印象其他', '英伦印象书房' => '英伦印象书房', '英伦印象卧房' => '英伦印象卧房', '玉玛风情客餐厅' => '玉玛风情客餐厅', '玉玛风情其他' => '玉玛风情其他', '玉玛风情书房' => '玉玛风情书房', '玉玛风情卧房' => '玉玛风情卧房', '郁金飘香客餐厅' => '郁金飘香客餐厅', '郁金飘香其他' => '郁金飘香其他', '郁金飘香书房' => '郁金飘香书房', '郁金飘香卧房' => '郁金飘香卧房', '中国韵客餐厅' => '中国韵客餐厅', '中国韵其他' => '中国韵其他', '中国韵书房' => '中国韵书房', '中国韵卧房' => '中国韵卧房', '阿尔卑斯儿童房' => '阿尔卑斯儿童房', '芭堤雅儿童房' => '芭堤雅儿童房', '北美枫情儿童房' => '北美枫情儿童房', '北欧阳光儿童房' => '北欧阳光儿童房', '丹麦本色儿童房' => '丹麦本色儿童房', '丹麦本色Ⅱ儿童房' => '丹麦本色Ⅱ儿童房', '德国森林儿童房' => '德国森林儿童房', '费城故事儿童房' => '费城故事儿童房', '黑杰克儿童房' => '黑杰克儿童房', '加州梦儿童房' => '加州梦儿童房', '卡罗摩卡儿童房' => '卡罗摩卡儿童房', '里昂春天儿童房' => '里昂春天儿童房', '米兰格调儿童房' => '米兰格调儿童房', '木吉他儿童房' => '木吉他儿童房', '挪威月色儿童房' => '挪威月色儿童房', '诺曼红影儿童房' => '诺曼红影儿童房', '首尔之缤儿童房' => '首尔之缤儿童房', '斯德哥尔摩儿童房' => '斯德哥尔摩儿童房', '温丝莱特儿童房' => '温丝莱特儿童房', '香格里拉儿童房' => '香格里拉儿童房', '香山琴韵儿童房' => '香山琴韵儿童房', '新古典儿童房' => '新古典儿童房', '英伦印象儿童房' => '英伦印象儿童房', '玉玛风情儿童房' => '玉玛风情儿童房', '郁金飘香儿童房' => '郁金飘香儿童房', '中国韵儿童房' => '中国韵儿童房','巴黎慢调厨房' => '巴黎慢调厨房','巴黎慢调其他' => '巴黎慢调其他','罗马假日厨房' => '罗马假日厨房','罗马假日其他' => '罗马假日其他','剑桥悠城厨房' => '剑桥悠城厨房','剑桥悠城其他' => '剑桥悠城其他','英郡素影厨房' => '英郡素影厨房','英郡素影其他' => '英郡素影其他','戛纳探戈厨房' => '戛纳探戈厨房','戛纳探戈其他' => '戛纳探戈其他','珀斯午后厨房' => '珀斯午后厨房','珀斯午后其他' => '珀斯午后其他','咖啡时光厨房' => '咖啡时光厨房','咖啡时光其他' => '咖啡时光其他','紫晶魅影厨房' => '紫晶魅影厨房','紫晶魅影其他' => '紫晶魅影其他','英伦晴风厨房' => '英伦晴风厨房','英伦晴风其他' => '英伦晴风其他','芬兰木歌厨房' => '芬兰木歌厨房','芬兰木歌其他' => '芬兰木歌其他','芝士物语厨房' => '芝士物语厨房','芝士物语其他' => '芝士物语其他','罗马光年厨房' => '罗马光年厨房','罗马光年其他' => '罗马光年其他','维多利亚厨房' => '维多利亚厨房','维多利亚其他' => '维多利亚其他','塞纳月影厨房' => '塞纳月影厨房','塞纳月影其他' => '塞纳月影其他','卡萨布兰卡厨房' => '卡萨布兰卡厨房','卡萨布兰卡其他' => '卡萨布兰卡其他','西雅图之夜厨房' => '西雅图之夜厨房','西雅图之夜其他' => '西雅图之夜其他','佛罗伦萨厨房' => '佛罗伦萨厨房','佛罗伦萨其他' => '佛罗伦萨其他','紫醉西拉厨房' => '紫醉西拉厨房','紫醉西拉其他' => '紫醉西拉其他','莱恩慕斯厨房' => '莱恩慕斯厨房','莱恩慕斯其他' => '莱恩慕斯其他','爱情海岸2厨房' => '爱情海岸2厨房','爱情海岸2其他' => '爱情海岸2其他','里昂春天厨房' => '里昂春天厨房','里昂春天其他' => '里昂春天其他');



$SOFT_GUWEN_MIANJI = array('60以下/一居室' => '60以下/一居室', '60-85/二居室' => '60-85/二居室', '85-150/三居室' => '85-150/三居室', '150以上/四居室' => '150以上/四居室', '200以上/别墅' => '200以上/别墅');











$SOFT_GUWEN_FANGJIA = array('5000以下' => '5000以下', '5000-7000' => '5000-7000', '7000-10000' => '7000-10000', '10000-15000' => '10000-15000', '15000以上' => '15000以上');





$SOFT_GUWEN_KONGJIAN_MIANJI = range(0, 100);



$TONGJI_SEM_TYPE = array(1 => 'SEM客户主动提交', 2 => 'SEM在线客服提交', 3 => 'SEM总业绩');

$TONGJI_SEM_CAT = array(1 => '百度广州', 2 => '百度北京', 3 => '百度上海', 4 => '百度山东', 5 => 'google', 6 => 'soso搜索', 7 => '搜狗', 8 => '百度网盟', 9 => 'google网盟');





$TONGJI_ZIRAN_CAT = array(1 => '广州自然ip', 2 => '北京自然ip', 3 => '上海自然ip', 4 => '山东自然ip', 5 => '网站总自然ip', 6 => '网站总ip');



$APP_DOWN_TYPE = array(1 => 'android电脑下载', 2 => 'android手机下载', 3 => 'iphone电脑下载', 4 => 'iphone手机下载',5 => 'ipad电脑下载', 6 => 'ipad手机下载');



if(defined("_LANMU") && eregi("friend_link", _LANMU)) $FRIEND_LINK_TYPE = array(1 => '友情链接', 2 => '合作网站', 3 => '热门推荐');







$YUN_ACCOUNT_SHENPI_TYPE = array(1 => '待审批', 2 => '审批通过', 3 => '审批不通过');



$YUN_ACCOUNT_SEND_TYPE = array(1 => '发送成功', 2 => '发送失败');



$TAOCAN_CENTER_LANMU_CAT = array(1 => '空间定制', 2 => '风格定制', 3 => '组合定制');

$TAOCAN_CENTER_BUTTON_TYPE = array(1 => '点击下一套', 2 => '点击全屏观看', 3 => '点击预约免费量尺设计', 4 => '点击在线咨询');



$TAOCAN_PAIXU_SETTING_LANMU = array(1 => '空间定制', 2 => '风格定制', 3 => '组合定制', 4 => '乐厨频道', 5 => '衣柜频道');



$YUN_XG_PINPAI = array('尚品' => '尚品', '维意' => '维意', '其他' => '其他');



$YUN_XG_DENGJI = array(1 => '好', 2 => '中', 3 => '差', 5 => '独特', 4 => '无效', 10 => '未评价');

$TAOCAN_LIST_LANMU = array(1 => '空间定制', 2 => '风格定制', 3 => '组合定制');





//hr

$HR_USER_TYPE = array(1 => '已录用', 2 => '未录用');





$HR_SEX_TYPE = array('男' => '男', '女' => '女');



$HR_ZZMM_TYPE = array(1 => '党员', 2 => '团员', 3 => '群众');



$HR_HUNYIN_TYPE = array(1 => '未婚', 2 => '已婚', 3 => '已育子女', 4 => '离异');



$HR_QIUZHI_TYPE = array(1 => '处于待业状态可立即上班', 2 => '在职考虑换个环境', 3 => '在职处于离职期', 4 => '对现工作还满意,如果有更好工作愿意离职', 5 => '应届毕业生');

$HR_GUIMO_ARRAY = array(1 => '少于50人', 2 => '50-150人', 3 => '150-500人', 4 => '500人以上');



$HR_LUYONG_TYPE = array(4 => '待处理', 1 => '已录用', 2 => 'A类未录用', 3 => 'B类未录用');



$NEW_SEARCH_KEYWORD_TYPE = array(1 => '楼盘城市', 2 => '楼盘名称', 3 => '风格', 4 => '面积', 5 => '组合', 6 => '套餐关键词', 7 => '房间类型', 8 => '价格', 100 => '通配符关键字');//额外组合(不用添加关键词,用于显示缩略图)



//空间类、风格类、产品类、定制特性类、其他、楼盘类

$NEW_SEARCH_KEYWORD_TYPE = array(13 => '空间类', 14 => '风格类', 10 => '产品类', 11 => '定制特性类', 12 => '其他类', 15 => '无效词',101 => '-----以下是旧分类----', 1 => '楼盘城市', 2 => '楼盘名称', 3 => '风格', 4 => '面积', 5 => '组合', 6 => '套餐关键词', 7 => '房间类型', 8 => '价格', 100 => '通配符关键字');



$NEW_SEARCH_KEYWORD_TYPE_NEW_IDS = "10,11,12,13,14,15,16,17,18,19,20,21";



$NEW_SEARCH_KEYWORD_TYPE2 = array(13 => '空间类', 14 => '风格类', 10 => '产品类', 11 => '定制特性类', 12 => '其他类');



$NEW_SEARCH_RECORD_TYPE = array(1 => '搜索楼盘', 2 => '搜索套餐');



$NEW_SEARCH_ARTICLE_KEYWORD_TYPE = array(13 => '空间类', 14 => '风格类', 10 => '产品类', 11 => '定制特性类', 12 => '其他类', 15 => '无效词', 16 => '楼盘类', 17 => '(前缀)定制性', 18 => '定制性(后缀)', 19 => '尺寸规格类', 20 => '户型类', 21 => '城市类',101 => '-----以下是方案搜索分类,不用----', 1 => '楼盘城市', 2 => '楼盘名称', 3 => '风格', 4 => '面积', 5 => '组合', 6 => '套餐关键词', 7 => '房间类型', 8 => '价格', 100 => '通配符关键字');



$NEW_SEARCH_FANGAN_KEYWORD_TYPE = array(1 => '楼盘城市', 2 => '楼盘名称', 3 => '风格', 4 => '面积', 5 => '组合', 6 => '套餐关键词', 7 => '房间类型', 8 => '价格', 100 => '通配符关键字',101 => '-----以下是文章搜索分类,不用----', 13 => '空间类', 14 => '风格类', 10 => '产品类', 11 => '定制特性类', 12 => '其他类', 15 => '无效词');











$GJ_KEHU_TONGJI_TYPE = array(1 => '新申请', 2 => '跟进中', 3 => '已分配后各阶段');



$GJ_KEHU_SHICHANG_TONGJI_TYPE = array(1 => '新申请客户电话统计', 2 => '正在跟进中状态客户电话统计');



$GJ_KEHU_SHICHANG_TONGJI_TIME = array(1 => '5分钟内', 2 => '5-10分钟', 3 => '10-15分钟', 4 => '15-20分钟', 5 => '20分钟以上', 6 => '无通话录音记录');







//

$SEARCH_HOT_CITY_ARRAY  = array('广州' => '广州', '北京' => '北京', '上海' => '上海','青岛' => '青岛','烟台' => '烟台','东营' => '东营','济南' => '济南','潍坊' => '潍坊',  '深圳' => '深圳', '佛山' => '佛山', '南京' => '南京');//





$TJ_NEED_URL_TYPE =array(1 => '风格定制', 2 => '组合定制', 3 => '空间定制');



$NEW_SEARCH_ZT_TYPE = array(1 => '方案专题', 2 => '楼盘专题', 3 => '特惠方案专题');



$NEW_SEARCH_ZT_TYPE_ARRAY = array(0 => '所有', 1 => '指定单个', 2 => '多选或范围');



$SP_PINDAO_TIYANG_CAT = array(1 => '乐厨频道');

$SP_PINDAO_TIYANG_TYPE = array(1 => '大尺寸(620*347),宽屏(766*428)', 2 => '中尺寸(327*347),宽屏(403*428)', 3 => '小尺寸(232*227),宽屏(390*280,原289*282)');





$SP_PINDAO_FENGGE_ARRAY = array(31 => '丹麦暖阳',42 => '芬兰沐歌',34 => '英伦晴风',39 => '凡尔赛',40 => '香榭丽舍',17 => '新实用主义',32 => '紫晶魅影',35 => '芝士物语',36 => '提拉米苏',37 => '午后红茶',38 => '咖啡时光',54 => '罗马假日',51 => '英郡素影',53 => '珀斯午后',52 => '戛纳探戈',50 => '巴黎慢调',46 => '里昂春天',49 => '剑桥悠城');





$SP_PINDAO_ZUHE_CAT = array(1 => '组合定制');



$YIGUI_PINDAO_FENGGE_CAT = array(1 => '现代简约', 2 => '田园风格', 3 => '欧式风格', 4 => '中式风格', 5 => '新实用主义');

$YIGUI_PINDAO_FENGGE_TYPE = array(1 => '图片尺寸(383*519),宽屏图片尺寸(472*639)', 2 => '图片尺寸(288*218),宽屏图片尺寸(355*269)');

$YIGUI_PINDAO_DINGZHI_CAT = array(1 => '图片尺寸(383*447),宽屏图片尺寸(472*550)', 2 => '图片尺寸(288*218),宽屏图片尺寸(355*269)');

$YIGUI_PINDAO_TUIJIAN_CAT = array(1 => '超强收纳', 2 => '个性组合', 3 => '特殊房型', 4 => '百变风格', 5 => '奢华贵族');



$SOFT_APP_TUISONG_TYPE = array(1 => '普通文字', 2 => '自定义文字(同时会发普通文字)');





$SOFT_APP_TUISONG_SEND_TYPE = array(1 => '立刻发送', 2 => '定时发送(暂不支持)');



$SOFT_APP_TUISONG_SEND_ARRAY = array(1 => '发送成功', 2 => '发送失败');







$NEW_SEARCH_RIGHT_GG_TYPE = array(1 => '列表页图片广告(208宽)', 2 => '列表页文字广告', 3 => '详情页图片广告(233宽)');





$NEW_SEARCH_ZHUTI_TYPE = array(1 => '精华', 2 => '热门', 3 => '频道');





$NEW_SEARCH_ZHUTI_SHOW_TYPE = array(1 => '默认文字描述', 2 => '有3张缩略图', 3 => '有一张缩略图');



$ZT_MESSAGE_CAT = array(1 => '户型问题', 2 => '风格问题', 3 => '板材问题', 4 =>'价格问题', 5 => '其他问题');



$ZT_MESSAGE_TYPE = array(1 => '未处理', 2 => '处理中', 3 => '已完成', 4 => '不处理');







$ZHENGTI_YIGUI_PINDAO_TUIJIAN_CAT = array(1 => '超强收纳', 2 => '个性组合', 3 => '特殊房型');



$ZHENGTI_YIGUI_PINDAO_DINGZHI_CAT = array(1 => '图片尺寸(383*338)', 2 => '图片尺寸(288*218)');



$ZHENGTI_YIGUI_PINDAO_FENGGE_CAT = array(1 => '现代简约', 2 => '田园风格', 3 => '欧式风格', 4 => '中式风格', 5 => '新实用主义');



$ZHENGTI_YIGUI_PINDAO_FENGGE_TYPE = array(1 => '图片尺寸(383*519)', 2 => '图片尺寸(288*218)', 3 => '图片尺寸(383*284)');







$DIANSHI_GUI_PINDAO_TUIJIAN_CAT = array(1 => '超强收纳', 2 => '个性组合', 3 => '特殊房型');





$DIANSHI_GUI_PINDAO_DINGZHI_CAT = array(1 => '图片尺寸(383*338),宽屏图片尺寸(474*413)', 2 => '图片尺寸(288*218),宽屏图片尺寸(356*269)');



$DIANSHI_GUI_PINDAO_FENGGE_CAT = array(1 => '现代简约', 2 => '田园风格', 3 => '欧式风格', 4 => '中式风格', 5 => '新实用主义');



$DIANSHI_GUI_PINDAO_FENGGE_TYPE = array(2 => '图片尺寸(288*218),宽屏图片尺寸(356*269)', 3 => '图片尺寸(383*284),宽屏图片尺寸(474*351)');





$DINGZHI_CHUANG_PINDAO_TUIJIAN_CAT = array(1 => '百变造型', 2 => '多款床屏', 3 => '多功能床身', 4 => '床柜配套', 5 => '百搭风格');





$DINGZHI_CHUANG_PINDAO_DINGZHI_CAT = array(1 => '图片尺寸(383*447),宽屏图片尺寸(473*490)', 2 => '图片尺寸(288*218),宽屏图片尺寸(356*269)');



$TATAMI__LIANGDIAN_TYPE = array(1 => '图片尺寸(233*219),宽屏图片尺寸(288*271)');



$DINGZHI_CHUANG_PINDAO_FENGGE_CAT = array(1 => '现代简约', 2 => '田园风格', 3 => '欧式风格', 4 => '中式风格', 5 => '新实用主义');



$DINGZHI_CHUANG_PINDAO_FENGGE_TYPE = array(1 => '图片尺寸(383*397)', 2 => '图片尺寸(288*218)');





$DINGZHI_CHUANG_PINDAO_GONGYI_CAT = array(1 => '奢华真皮', 2 => '个性布衣', 3 => '简约板式');



$DINGZHI_CHUANG_PINDAO_GONGYI_TYPE = array(1 => '图片尺寸(383*523),宽屏图片尺寸(473*646)', 2 => '图片尺寸(288*258),宽屏图片尺寸(356*319)');





$TUIGUANG_TEAM_TYPE = array(1 => '直营', 2 => '加盟');

$ZHUIWEN_TYPE = array(1 => '未处理', 2 => '已处理', 3 => '处理失败');





$TOP_SEARCH_TYPE = array(1 => '关键词', 2 => '短语', 3 => '问题点');



//         

$BOTTOM_SEARCH_TYPE = array(1 => '风格定制', 2 => '组合定制', 3 => '空间定制', 4 => '百变定制', 5 => '全屋定制', 10 => '定制床', 11 => '乐厨整体橱柜', 12 => '卧房飘窗利用', 13 => '整体衣柜', 14 => '衣帽间', 15 => '电视柜', 16 => '青少年房家具', 17 => '书房家具', 18 => '餐厅家具');





$YIDONG_QUANWU_CITY = array(1 => '广州', 2 => '北京', 3 => '上海', 4 => '山东');





$YIDONG_QUANWU_HUXING_CAT = array(1 => '两房两厅', 2 => '三房两厅', 3 => '四房两厅');





//$YIDONG_TEXT_GG_LINK = array(1 => '空间定制', 2 => '风格定制', 3 => '组合定制', 4 => '全屋定制',5 => '百变定制');

$YIDONG_TEXT_GG_LINK = array(1 => '卧房家居', 2 => '青少年房', 3 => '厨房家居', 4 => '书房家居',5 => '客餐厅');



//$YIDONG_KONGJIAN_LINK = array(1 => '空间定制', 2 => '风格定制', 3 => '组合定制', 4 => '全屋定制', 5 => '百变定制');

$YIDONG_KONGJIAN_LINK = array(1 => '卧房家居', 2 => '青少年房', 3 => '厨房家居', 4 => '书房家居',5 => '客餐厅');





$SEARCH_FORM_CAT = array(20 => '首页',1 => '风格定制', 2 => '组合定制', 3 => '空间定制', 4 => '百变定制', 5 => '全屋定制', 10 => '定制床', 11 => '乐厨整体橱柜', 12 => '卧房飘窗利用', 13 => '整体衣柜', 14 => '衣帽间', 15 => '电视柜', 16 => '青少年房家具', 17 => '书房家具', 18 => '餐厅家具');



$SEARCH_FORM_TYPE = array(1 => '顶部', 2 => '底部');



$DINGZHI_CHUANG_PINSHEN_CAT = array(1 => '床屏', 2 => '床身');





$YUAN_TYPE = array(1=>'来源网址', 2=>'离开网址', 3=>'统计页面');



$TAOCAN_BZ_ROOM_CAT_FOR_SEARCH = array(1 => '卧房', 2 => '书房', 6 => '青少年房', 4 => '客厅', 5 => '餐厅', 7 => '厨房', 8 => '客餐厅', 11 => '卫生间', 98 => '楼盘', 99 => '其他');





$HR_COMPANY_ARRAY = array(1 => '新居', 2 => '尚品', 3 => '维意', 4 => '圆方', 5 => '维尚工厂');

$XC_CHOUJIANG_TYPE = array(1 => '1000元', 2 => '2000元', 3 => '3000元');



$INDEX_KP_QUANWU_TYPE = array(1 => '左边292*440', 2 => '上面左边529*239', 3 => '上面右边363*239', 4 => '294*190`');



$INDEX_KP_FENGGE_TYPE = array(1 => '上面左边529*239', 2 => '上面右边360*239', 3 => '下面294*190');





$INDEX_KP_GG_TYPE = array(1 => '热门分类右边广告(233宽)', 2 => '滚动广告右边的小广告(228*175)');

$INDEX_HOT_CAT_SHOW_TYPE = array(1 => '只显示在窄屏,不显示在宽屏');



$LIST_KP_BOTTOM_CAT = array(1 => '常见问题', 2 => '百变空间秀', 3 =>'定制攻略', 4 => '经典空间定制');





$INDEX_KUAN_RIGHT_TYPE = array(5 => '新居快报下面图片(226*152)', 1 => '定制故事下面图片(226*152)', 2 => '风格速递右边图片(233*318)', 3 => '热销定制右边图片(233*338)', 4 => '全屋定制右边图片(221*397)');



$INDEX_DINGZHI_DAREN_RIGHT_TYPE = array(1 => '新居晒客', 2 => '常见问题', 3 => '网友热搜关键词', 4 => '关注排行榜', 5 => '定制百科');

$KP_LIST_HEADER_GG_CAT = array(1 => '卧房', 2 => '书房', 6 => '青少年房', 4 => '客厅', 5 => '餐厅', 7 => '厨房', 8 => '客餐厅', 10 => '飘窗利用', 11 => '衣帽间');





$KP_INDEX_GG_TYPE = array(1 => '1.顶部滚动图右边(462*165)', 2 => '2.新居快报右边(217*184)', 3 => '3.热门分类右边(220*108)', 4 => '4.热门分类右边(220*108)', 5 => '5.热门分类右边(220*210)', 6 => '6.热门分类右边(220*108)', 7 => '7.风格速递左边大图(520*386)', 8 => '8.风格速递中间(220*188)', 9 => '9.风格速递中间(220*188)', 10 => '10.风格速递右边(220*386)',11 => '11.热销定制左边大图(520*386)', 12 => '12.热销定制中间(220*122)', 13 => '13.热销定制中间(220*122)', 14 => '14.热销定制中间(220*122)', 15 => '15.热销定制右边(220*386)', 16 => '16.百变定制左边小图(122*83)', 17 => '17.百变定制左边小图(122*83)', 18 => '18.百变定制左边小图(122*83)', 19 => '19.百变定制左边小图(122*83)', 20 => '20.百变定制右边大图(220*386)', 21 => '21.百变定制右边大图(220*386)', 22 => '22.百变定制右边大图(220*386)', 23 => '23.百变定制右边大图(220*386)', 24 => '24.全屋定制左边大图(288*386)', 25 => '25.全屋定制左边大图(450*386)', 26 => '26.全屋定制中间小图(220*122)', 27 => '27.全屋定制中间小图(220*122)', 28 => '28.全屋定制中间小图(220*122)', 29 => '29.全屋定制右边小图(220*386)', 30 => '30.定制达人左边大图(409*215)', 31 => '31.新居晒客小图(131*97)', 32 => '32.常见问题小图(131*97)', 33 => '33.网友热搜关键词小图(131*97)');



$ADMIN_USER_TYPE = array(1 => '后台帐号', 2 => '直销帐号', 3 => '共用2个系统');



$ADMIN_CHECK_TYPE = array(1 => '正常', 2 => '有异常', 3 => '非常有问题', 4 => '不需检查');



$KP_KJ_PINDAO_GG_TYPE = array(1 => '顶部中间大广告(756*426)', 2 => '顶部右边小广告(220*428)', 3 => '功能定制左边大图(520*386)', 4 => '功能定制中间图文内容(220*132)', 5 => '功能定制右边广告(220*386)', 6 => '个性定制左边大图(520*386)', 7 => '个性定制中间图文内容(220*185)', 8 => '个性定制右边广告(220*386)', 9 => '风格推荐左边大图(520*386)', 10 => '风格推荐中间图片内容(220*188)', 11 => '风格推荐右边广告(220*386)', 12 => '定制攻略左边大图(520*319)', 13 => '定制攻略右边小图(220*124)');





$KP_KJ_PINDAO_GEXING_TYPE = array(1 => '上面', 2 => '下面');

$PINDAO_LANMU_ARRAY = array(1 => '功能定制', 2 => '个性定制' , 3 => '风格推荐' , 4 => '百变卧房(空间)' , 5 => '定制攻略' , 6 => '定制秀场' );





$KP_GNDZ_TYPE = array(1 => '450*340', 2 => '220*154');



//$KP_BAIBIAN_DINGZHI_TYPE = array(1 => '450*386', 2 => '220*188', 3 => '220*386', 4 => '4张同样大小的图(220x386)');

$KP_BAIBIAN_DINGZHI_TYPE = array(11 => '326*347', 12 => '325*347', 13 => '326*233', 14 => '325*233',1 => '(旧)450*386', 2 => '(旧)220*188', 3 => '(旧)220*386', 4 => '(旧)4张同样大小的图(220x386)');





$KP_BAIBIAN_DINGZHI_SHOW_TYPE = array(1 => '传3种不同类型图', 2 => '传4张同样大小的图');





$NEW_SITE_TONGJI_TYPE = array(1 => '网站', 2 => 'SEM', 3 => 'SEO');

$NEW_SITE_PINDAO_TYPE = array(1 => '首页', 2 => '卧房家具定制', 3 => '书房家具定制', 4 => '青少年家具定制', 5 => '客餐厅家具定制', 6 => '厨房家具定制', 7 => '百变定制', 8 => '全屋定制', 9 => '定制导购');



//回访状态

$HUIFANG_STATUS_ARRAY = array(1 => '暂无介绍', 2 => '无法联系上客户',3 => '老介新', 4 => '客户拒绝', 5 => '出现售后', 6 => '待介绍');





$DINGZHI2013_CAT = array(1 => '卧房', 2 => '书房', 3 => '青少年房', 4 => '客餐厅', 5 => '厨房', 6 => '全屋', 7 => '活动', 8 => '其他');

$DINGZHI2013_TYPE = array(1 => '大图(589*414)', 2 => '中图(444*196)', 3 => '小图(299*202)', 4 => '新图(389*244)');



$ZHIXIAO_KAOTI_TYPE = array(1 => '单选', 2 => '多选');





$WAYES_INDEX_TYPE = array(1 => '第一栏', 2 => '第二栏', 3 => '第三栏');



$HUODONG_BAODAO_LANMU_TYPE = array(1 => '第一栏', 2 => '第二栏');

$SOFT_SHOP_API_TYPE = array(1 => '开启', 2 => '关闭');



$TAOCAN_BZ_ROOM_CAT_FOR_TAG = array(1 => '卧房', 2 => '书房', 6 => '青少年房', 8 => '客餐厅',  7 => '厨房');







$FENGGE_CESHI_LX_ARRAY = array(1 => '标准', 2 => '小康', 3 => '豪华');



$FENGGE_CESHI_BZ_ARRAY = array(4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12);

//

$SJ2003_INDEX_HOT_TYPE = array(1 => '顶部309*112', 2 => '下边153*115-2张');

$SJ2003_INDEX_ROOM1_TYPE = array(1 => '左边153*254', 2 => '右边153*115-2张');

$SJ2003_INDEX_ROOM2_TYPE = array(1 => '顶部309*112', 2 => '下边153*115-2张');

$SJ2003_INDEX_ROOM3_TYPE = array(1 => '左边153*254', 2 => '右边153*115-2张');

$SJ2003_INDEX_ROOM4_TYPE = array(1 => '顶部309*112', 2 => '下边153*115-2张');





$KEFU_KAOTI_TYPE = array(1 => '单选', 2 => '多选');





$INDEX2013_DINGZHI_TYPE = array(1 => '只有一张图片(304*228)', 2 => '上面文字,下面图片(176*137)', 3 => '上面图片(166*125),下面文字');



$INDEX2013_GN_DINGZHI_TYPE = array(1 => '上边大图(尺寸:661*347)', 2 => '右边图(尺寸:308*345)', 3 => '底部3张图(尺寸:324*231)', 4 => '底部右边图(尺寸:308*231)');



$INDEX2013_FG_SUDI_TYPE = array(1 => '上边2张大图(尺寸:326*347)', 2 => '右边2张小图(尺寸:132*99)', 3 => '底部左边2张大图(尺寸:326*233)', 4 => '底部右边3张图(尺寸:308*330)', 5 => '左边3张图(尺寸:218*470)');

$INDEX2013_HOT_DINGZHI_TYPE = array(1 => '上边3张大图(尺寸:661*347)', 2 => '右边3张小图(尺寸:160*120)需填人数', 3 => '底部左边2张大图(尺寸:326*233)', 4 => '左边3张图(尺寸:218*470)');



$INDEX2013_QUANWU_GG_TYPE = array(1 => '上边大图(尺寸:659*347)', 2 => '右边中图(尺寸:308*345)', 3 => '底部3张中图(尺寸:326*233)', 4 => '底部右边图(尺寸:308*233)');





$WEIXIN_DENGJI_DEISNGER_TYPE = array(1 => '刚进入流程,等待输入帐号', 2 => '帐号错误,重新输入', 3 => '已输入帐号成功,等待输入密码', 4 => '密码输错,重新输入', 5 => '输入密码成功,结束', 6 => '验证码发送失败,退出');



$WEIXIN_DENGJI_KEHU_TYPE = array(1 => '刚进入流程,等待输入编号', 2 => '编号错误,重新输入', 3 => '已输入编号成功,结束', 4 => '中途退出');

$WEIXIN_TUIDING_DEISNGER_TYPE = array(1 => '刚进入流程,等待输入帐号', 2 => '帐号错误,重新输入', 3 => '已输入帐号成功,等待输入密码', 4 => '密码输错,重新输入', 5 => '输入密码成功,结束', 6 => '验证码发送失败,退出');

$WEIXIN_DENGJI_ADMIN_TYPE = array(1 => '刚进入流程,等待输入帐号', 2 => '帐号错误,重新输入', 3 => '已输入帐号成功,等待输入密码', 4 => '密码输错,重新输入', 5 => '输入密码成功,结束', 6 => '验证码发送失败,退出');

$WEIXIN_TUIDING_ADMIN_TYPE = array(1 => '刚进入流程,等待输入帐号', 2 => '帐号错误,重新输入', 3 => '已输入帐号成功,等待输入密码', 4 => '密码输错,重新输入', 5 => '输入密码成功,结束', 6 => '验证码发送失败,退出');

$WEIXIN_TUIDING_KEHU_TYPE = array(1 => '刚进入流程,等待输入编号', 2 => '编号错误,重新输入', 3 => '已输入编号成功,结束');



$WEIXIN_CHANGJING_TYPE = array(1 => '客户登记', 2 => '设计师登记', 3 => '后台帐号登记', 4 => '设计师每天报到', 10 => '永久场景');



$FUWU_ID_ARRAY = array(1=>'563996934@qq.com',2=>'2074332379@qq.com');





$NH_WEIXIN_VOTE_TYPE = array(1 => '可以开始', 2 => '不能开始');

$NH_WEIXIN_BUMEN = array(1 => '直销事业部', 9 => '直销管理部', 2 => '推广事业部', 3 => '财务部', 4 => '设计中心', 5 => '行政部', 6 => '市场营销中心', 7 => '人力资源部', 8 => '在线导购部', 10 => '编辑部', 11 => '技术部', 12 => '客服部', 13 => '总经办');



$WAYES_INDEX_BOTTOM_ARTICLE_TYPE = array(1 => '第一栏', 2 => '第二栏', 3 => '第三栏');



$TAOCAN_LEVEL_ARRAY = array(1 => '差', 2 => '中', 3 => '好');







$WEIXIN_FUWU_JIANGPIN_TYPE = array(1=>"代金券",2=>"宅配券",3=>"普通奖品",4=>"优惠");



$XINJU2014_WEIXIN_SEND_TYPE = array(1 => '发给客服', 2 => '发给客户', 3 => '发给设计师');

$XINJU2014_WEIXIN_MEITI_TYPE = array(1 => '文字', 2 => '语音', 3 => '图片', 4 => '视频');



$JIAOHU_CITY_ARRAY = array('全国' => '全国', '广州' => '广州');



$XINJU2000_WEIXIIN_MENU_TYPE = array(1 => '图文', 2 => '文字');

$NEW_SERACH_ZHUTI_ARTICLE_LANMU = array(1 => '新居百科', 2 => '文章信息', 3 => '收录网站(专题)');



//结果类型

$WEIXIN_YX_RESULT_TYPE = array(0 => '未处理', 1 => '发送成功', 2 => '发送失败');



//周期类型,大的优先发



$WEIXIN_YX_TIME_TYPE = array(

2 => '间隔4个小时', 

11 => '关注后第2天-只能早上8点发', 

12 => '关注后第2天-只能中午12点发',

13 => '关注后第2天-只能晚上8点半发', 

15 => '离失联小于10小时,1-3号,7-22点半发', 

16 => '男性-关注后第2天开始48小时内', 

17 => '女性-关注后第2天开始48小时内', 

18 => '不明性别-关注后第2天开始48小时内', 

19 => '精彩蜗居（80平方以下）-关注后第2天开始48小时内', 

20 => '小资白领（80—120平方）-关注后第2天开始48小时内', 

21 => '（120平方以上）尊贵大气-关注后第2天开始48小时内', 



22 => '各城市经典案例(南京)-关注后第2天开始48小时内', 

23 => '各城市经典案例(北京)-关注后第2天开始48小时内', 

24 => '各城市经典案例(广州)-关注后第2天开始48小时内', 

25 => '各城市经典案例(上海)-关注后第2天开始48小时内', 



26 => '其他类型(测试)-关注后第2天开始48小时内', 

27 => '其他类型(品牌)-关注后第2天开始48小时内', 

28 => '其他类型(功能定制)-关注后第2天开始48小时内', 

29 => '其他类型(优惠活动)-关注后第2天开始48小时内', 

30 => '其他类型(厨房案例)-关注后第2天开始48小时内', 

31 => '其他类型(书房案例)-关注后第2天开始48小时内', 

32 => '其他类型(客餐厅案例)-关注后第2天开始48小时内', 

33 => '其他类型(儿童房案例)-关注后第2天开始48小时内', 

34 => '其他类型(卧房案例)-关注后第2天开始48小时内', 

35 => '其他类型(新标签1)-关注后第2天开始48小时内-早上7点', 

36 => '其他类型(新标签2)-关注后第2天开始48小时内-晚上8点', 



50 => '客户关注后一直没互动,进行推送,12点', 

51 => '客户关注后一直没互动,进行推送,19点', 

52 => '客户关注后一直没互动,关注10分钟后进行推送,早上9-晚上9点发', 

53 => '关注后超过48小时-早上7点半', 

54 => '关注后超过48小时-晚上7点半',



/*55=>"昨天16:01—24:00新关注但没说话-中午12点发",*/



/*56=>"针对今天00::01—16:00新关注但没说话-晚上19点发",*/



57=>"【早上9点】针对昨天下午15.00~早上8.00",

55=>"【中午12.00】针对早上8.00~早上11.00",

58=>"【下午15.00】针对昨天晚上17.00~早上8.00",

56=>"【晚上18.00】针对早上11.00~当天17.00",



59=>"【晚上20.00】针对广州当天关注未报名",



1000=>"吴海新测试"

);



$WEIXIN_BAOMING_JISHI_TYPE = array(1=>"报名优惠每日抢购",2=>"老虎机报名统计(作废)",3=>"报名限时",4=>"预约量尺关注版",5=>"春节报名计时",6=>"关注引导",7=>"文案组报名2通用");



$WEIXIN_ZP_TYPE = array(1=>"五一大事件", 2 => '欢乐大转盘', 3=>'上海龙之梦转盘',  4=>'广州周年庆转盘',5=>"订阅号转盘",6=>"南京周迅见面会刮刮卡",7=>"南京周迅见面会大转盘",8=>"端午刮刮卡",9=>"上海家博会",10=>"全国门店转盘活动",11=>"东营门店转盘活动",12=>"水果机摇奖",15=>"扇扇子抽奖",16=>"欢乐老虎机",17=>"报名优惠每日抢购",18=>"液晶电视转盘",19=>"苹果刮刮卡",20=>"尚品7天转盘",21=>"设计盛典测试使用");



$WEIXIN_ZP_PRICE = array(1=>"一等奖",2=>"二等奖",3=>"三等奖",4=>"安慰奖",5=>"不要灰心",6=>"谢谢参与");



$XINJU2000_AGE_TYPE = array(1 => '中年', 2 => '老年');



$XINJU2000_FX_TYPE = array(1 => '一房', 2 => '两房', 3 => '三房', 4 => '四房');



$XINJU2000_ZX_TYPE = array(1 => '新房-毛坯房', 2 => '新房-精装修房', 3 => '二手房装修', 4 => '在住房翻修');



$XINJU2000_FG_TYPE = array(1 => '里昂春天', 2 => '米兰剪影', 3 => '英伦印象', 4 => '德国森林');







$SEARCH_CHECK_TYPE = array(1 => '待检查', 2 => '检查没问题', 3 => '检查有问题-文章内容有问题', 4 => '检查有问题-方案图有问题', 5 => '检查有问题-文章和方案图都有问题');





$SEARCH_HEDUI_TYPE = array(1 => '待核对', 2 => '核对没问题', 3 => '核对已修正错误', 4 => '核对等待修正错误');



$WEIXIN_YX_TUWEN_TYPE = array(2 => '2个图文', 3 => '3个图文', 4 => '4个图文', 5 => '5个图文');

$MHOMEKOO_BUTTON_TYPE = array(1=>"头部拨打服务热线",2=>"头部预约免费量尺",3=>"底部热线",4=>"底部咨询");

$CAIXIN_SEND_TYPE = array(1 => '未量尺客户');



$WEIXIN_DCWJ_Q = array(1=>"A",2=>"B",3=>"C",4=>"D",5=>"E",6=>"F");

$WEIXIN_DCWJ_J = array(1=>"一等奖",2=>"二等奖",3=>"三等奖",4=>"未中奖",);



$HOUR_LIULIANG_TYPE = array(1 => '全站流量', 2 => '移动网站', 3 => 'PC网站', 4 => '首页', 5 => '智能搜索', 6 => '专题');

$HOUR_BAOMING_TYPE = array(1 => '全部报名量', 2 => 'SEM报名量', 3 => '移动端报名量', 4 => 'PC端报名量');

$WEIXIN_ZHUANFA_TYPE = array(1=>"转发给朋友",2=>"转发朋友圈",3=>"转发到微博");

$KEHU_ZHONGTU_SEND_TYPE = array(1 => '待发送', 2 => '已发送', 3 => '发送失败', 4 => '过期取消发送');



$xinju2000_WEIXIN_XF_TYPE = array(1=>"广点通");

$xinju2000_WEIXIN_XF_ZHID = array(1=>"服务号",2=>"订阅号");





$ERWEIMA_PIC_TYPE = array(30=>"厨房装修 ",29=>" 卧室装修 ",28=>"儿童房装修",27=>"客餐厅装修",26=>"书房装修",24=>"橱柜",23=>"衣柜",22=>"沙发",21=>" 书柜",9000=>"其它");

$WEIXIN_ZP_STYPE = array(1=>"室内设计师");



$ZHANLUE_WENJUAN_ZHIWU_TYPE  = array(1 => 'A、副总以上', 2 => 'B、总监', 3 => 'C、部门经理或副经理', 4 => 'D、主管');

$ZHANLUE_WENJUAN_COMPANY_TYPE  = array(1 => '尚品', 2 => '维意', 3 => '新居网', 4 => '维尚', 5 => '北京尚品', 6 => '上海尚品', 7 => '南京尚品', 8 => '武汉尚品', 9 => '北京维意');//1、尚品    2、维意    3、新居网    4、维尚   5、北京尚品  6、上海尚品   7、南京尚品   8、武汉尚品   9、北京维意



$ZHANLUE_WENJUAN_QUESTION_TYPE  = array(1 => '选择题', 2 => '填写字符', 3 => '段落回答内容');



if($_CITY_JIAMENG) $_CITY_OPEN = $_CITY_JIAMENG;

$TAOCAN_COLOR_TYPE = array(1 => '红色', 2 => '蓝色', 3 => '黄色', 4 => '绿色', 5 => '橙色', 6 => '灰色', 8 => '白色', 7 => '其他');//



$_XIAOWEI_XX_TYPE = array(1=>"提问",2=>"留言");

//非常缺、缺，正常，饱和，非常饱和

$KEHU_LIANGCHI_CITY_BAOHE_TYPE = array(1 => '非常缺', 2 => '缺', 3 => '正常', 4 => '饱和', 5 => '非常饱和');





$SHOW_WEEK_DAY_ARRAY = array(1 => '星期一', 2 => '星期二', 3 => '星期三', 4 => '星期四', 5 => '星期五', 6 => '星期六', 7 => '星期日');





$TATAMI_LIANGDIAN_CAT = array(1=>'超强收纳',2=>'多款功能',3=>'个性组合');









$DINGZHI_CHUANG_PINDAO_DINGZHI_CAT = array(1 => '图片尺寸(568*402),宽屏图片尺寸(700*495)', 2 => '图片尺寸(403*402),宽屏图片尺寸(496*495)',3=> '图片尺寸(319*226),宽屏图片尺寸(393*278)');



$NOTBUY_TYPE_SHAFA = array(1 => '已定其它品牌', 2 =>'需要对比', 3 => '无喜欢款式', 4 =>'价格贵', 5 => '其他');

$NOTBUY_TYPE_CHUANG = array(1 => '已定其它品牌', 2 =>'需要对比', 3 => '无喜欢款式', 4 =>'价格贵', 5 => '其他');

$NOTBUY_TYPE_CHUANGDIAN = array(1 => '已定其它品牌', 2 =>'需要对比', 3 => '无喜欢款式', 4 =>'价格贵', 5 => '其他');

$NOTBUY_TYPE_CANZHUOYI = array(1 => '已定其它品牌', 2 =>'需要对比', 3 => '无喜欢款式', 4 =>'价格贵', 5 => '其他');





$SYS_TONGJI_VISIT_TYPE = array(1 => '正常访问', 2 => '暂停访问', 3 => '只能超级管理员访问', 4 => '只能超级管理员和主管以上访问');



$SYS_TONGJI_LEVEL_TYPE = array(1 => '重要(流程类)', 2 => '业绩类', 3 => '普通', 4 => '其他');





$DESIGNER_CHANNEL_ANLI_ZHUANTI_CAT_ARRAY = array(1=>'案例',2=>'专题');



//新居服务号在线免费设计方案留言审批数组

$MFSJ_SP_TYPE = array(1=>"未审批",2=>"审批");



//有制作完成

//$ZX_SHEJI_TYPE = array(1 => '待制作',6 => '制作完成', 2 => '制作中', 3 => '沟通中', 4 => '完成已发送', 5 => '无效'); 去掉 4 => '完成已发送', 状态
$ZX_SHEJI_TYPE = array(1 => '待制作',6 => '制作完成', 2 => '制作中', 3 => '沟通中', 5 => '无效');



$DESIGNER_CHANNEL_CUSTOM_TYPE = array(0=>"PC端在线免费设计",1=>"移动端在线免费设计");



$perlist=array("祁新1","蓝美欣3","卢咏诗1","李俊锋1","吴智勇1","吴智勇2","师会敏","苏家惠","王韵明","赖灿荣","陈唯","梁晋源","郭冬龙3","林夏培4","黎上尧3","黄超3","廖冰1","黄秀媛1","马进朝1","林济东2","林运冬1","廖冬琴1","蔡国攀1","卢亭吟","邹同发","付桥涛","温斌","吴倩莹","李柏助","黄丽燕2","邓丹","吴海燕1","高洁松1","郑敏1","徐斌1","刘朋1","徐永辉3","黄韵珊1","廖红星","林铮煌","徐涛2","张梅2","梁晓荣","宋汶珊","陈天伦","张开国2","邹琴玲","罗倩","章淑建");


$zhgjlist=array("祁新1"=>"祁新1","蓝美欣3"=>"蓝美欣3","卢咏诗1"=>"卢咏诗1","李俊锋1"=>"李俊锋1","吴智勇1"=>"吴智勇1","吴智勇2"=>"吴智勇2","钟锭新"=>"钟锭新","师会敏"=>"师会敏","苏家惠"=>"苏家惠","王韵明"=>"王韵明","赖灿荣"=>"赖灿荣","陈唯"=>"陈唯","梁晋源"=>"梁晋源","郭冬龙3"=>"郭冬龙3","林夏培4"=>"林夏培4","黎上尧3"=>"黎上尧3","黄超3"=>"黄超3","廖冰1"=>"廖冰1","黄秀媛1"=>"黄秀媛1","马进朝1"=>"马进朝1","林济东2"=>"林济东2","林运冬1"=>"林运冬1","廖冬琴1"=>"廖冬琴1","蔡国攀1"=>"蔡国攀1","卢亭吟"=>"卢亭吟","邹同发"=>"邹同发","付桥涛"=>"付桥涛","温斌"=>"温斌","吴倩莹"=>"吴倩莹","李柏助"=>"李柏助","黄丽燕2"=>"黄丽燕2","吴海燕1"=>"吴海燕1","高洁松1"=>"高洁松1","郑敏1"=>"郑敏1","徐斌1"=>"徐斌1","刘朋1"=>"刘朋1","徐永辉3"=>"徐永辉3","黄韵珊1"=>"黄韵珊1","林铮煌"=>"林铮煌","徐涛2"=>"徐涛2","张梅2"=>"张梅2","梁晓荣"=>"梁晓荣","宋汶珊"=>"宋汶珊","陈天伦"=>"陈天伦","张开国2"=>"张开国2");



//$tongji_zg=array('Tesla'=>"'祁新1','蓝美欣3','卢咏诗1','李俊锋1','吴智勇1','吴智勇2','钟锭新','赖灿荣','陈唯','梁晋源','卢亭吟','邹同发','付桥涛','温斌','吴倩莹'");

$tongji_zg=array('凸击队'=>"'郭冬龙3','黄超3','廖冰1','黄秀媛1','马进朝1','吴智勇2','李柏助'",'浪尖队'=>"'林夏培4','林济东2','林运冬1','廖冬琴1','蔡国攀1'",'狂乐队'=>"'蓝美欣3','卢咏诗1','陈唯','赖灿荣','卢亭吟','吴智勇1'",'客服组'=>"'吴海燕1','高洁松1','郑敏1','徐斌1','徐永辉3'",'微信CRM'=>"'邹同发','付桥涛','温斌','梁晓荣','吴倩莹','林铮煌','宋汶珊','陈天伦'");



//$tongji_zgp=array("祁新1"=>"'祁新1'","蓝美欣3"=>"'蓝美欣3'","卢咏诗1"=>"'卢咏诗1'","李俊锋1"=>"'李俊锋1'","吴智勇1"=>"'吴智勇1'","吴智勇2"=>"'吴智勇2'","钟锭新"=>"'钟锭新'","赖灿荣"=>"'赖灿荣'","陈唯"=>"'陈唯'","梁晋源"=>"'梁晋源'","卢亭吟"=>"'卢亭吟'","邹同发"=>"'邹同发'","付桥涛"=>"'付桥涛'","温斌"=>"'温斌'","吴倩莹"=>"'吴倩莹'");

$tongji_zgp=array("郭冬龙3"=>"'郭冬龙3'","黄超3"=>"'黄超3'","廖冰1"=>"'廖冰1'","黄秀媛1"=>"'黄秀媛1'","马进朝1"=>"'马进朝1'","吴智勇2"=>"'吴智勇2'","林夏培4"=>"'林夏培4'","林济东2"=>"'林济东2'","林运冬1"=>"'林运冬1'","廖冬琴1"=>"'廖冬琴1'","蔡国攀1"=>"'蔡国攀1'","蓝美欣3"=>"'蓝美欣3'","卢咏诗1"=>"'卢咏诗1'","陈唯"=>"'陈唯'","赖灿荣"=>"'赖灿荣'","卢亭吟"=>"'卢亭吟'","吴智勇1"=>"'吴智勇1'","李柏助"=>"'李柏助'","吴海燕1"=>"'吴海燕1'","高洁松1"=>"'高洁松1'","郑敏1"=>"'郑敏1'","徐斌1"=>"'徐斌1'","刘朋1"=>"'刘朋1'","徐永辉3"=>"'徐永辉3'","黄韵珊1"=>"'黄韵珊1'","林铮煌"=>"'林铮煌'","邹同发"=>"'邹同发'","付桥涛"=>"'付桥涛'","温斌"=>"'温斌'","吴倩莹"=>"'吴倩莹'","徐涛2"=>"'徐涛2'","张梅2"=>"'张梅2'","梁晓荣"=>"'梁晓荣'","宋汶珊"=>"'宋汶珊'","陈天伦"=>"'陈天伦'","张开国2"=>"'张开国2'");



$tongji_tb_zg=array('淘宝组'=>"'师会敏','苏家惠','王韵明'");

$tongji_tb_zgp=array("师会敏"=>"'师会敏'","苏家惠"=>"'苏家惠'","王韵明"=>"'王韵明'");



$wxperlist=array("邹同发","付桥涛","温斌","吴倩莹","郭冬龙3","黄超3","廖冰1","黄秀媛1","马进朝1","吴智勇2","廖红星","李柏助","黄丽燕2","黎上尧3","邓丹","黄韵珊1","林铮煌","梁晓荣","宋汶珊","陈天伦");



$ZX_BANNER_TYPE = array(25=>'其他装修',26=>'书房装修',27=>'客餐厅装修',28=>'儿童房装修',29=>'卧室装修',30=>'厨房装修',20=>'其他家具',21=>'书柜',22=>'沙发',23=>'衣柜',24=>'橱柜',14=>'卫浴导购',15=>'地板导购',16=>'瓷砖导购',17=>'涂料导购',18=>'软装导购',19=>'家电导购',11=>'家居保养',12=>'装修技巧',13=>'家居风水',7=>'卖场导购',8=>'折扣快讯',9=>'卖场新闻',10=>'卖场大全');

$ZHIXIAO_SJS_FREE_APPLY_TYPE = array(1 => '新申请', 2 => '制作中', 3 => '制作完成', 4 => '无效申请');



$SEJISD_VOTE_SJS_ID = array(151=>"蔡永峰",152=>"曾祥敏",153=>"周慧红",154=>"丛峰",155=>"雷煜坤",156=>"吴晓峰",157=>"吴苠峻",158=>"王青",159=>"李琼",160=>"李连荣",161=>"李炎梁",162=>"李天赐",163=>"李双",164=>"林秋燕",165=>"刘康",166=>"马明亮",167=>"田庭燕",168=>"陈光裕",169=>"廖超程",170=>"王辉",171=>"王月",172=>"熊绍宝",173=>"朱二生",174=>"蒋叶子",175=>"陈赛",176=>"梁健峰",177=>"林木香",178=>"林志荣",179=>"邱文凯",180=>"郑伟杰",181=>"李佳颖",182=>"林荣峰",183=>"麦马开",184=>"陈志明",185=>"程智满",186=>"黄明",

501=>"PC端报名关注1");

$SHEJISD_ZHONGJIANG_TYPE =array(1=>'实物',2=>'设计/代金');





$NH2015_SHENPI_TYPE = array(1 => '待审批', 2 => '已审批', 3 => '不能显示', 4 => '含有敏感词语不显示');



$JITUAN_WEIXIN_HYUSER_TEQUAN_TYPE = array(1=>"最新活动",2=>"热门活动");

$JITUAN_WEIXIN_HYUSER_MYHUODONG_TYPE = array(1=>"线上活动",2=>"线下活动");

$JITUAN_HYUSER_DES_SHARE_TYPE = array(1=>"文章",2=>"游戏");


$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE = array(1=>array("name"=>"关注","v_num"=>1000),2=>array("name"=>"填写城市","v_num"=>200),3=>array("name"=>"填写手机","v_num"=>200),4=>array("name"=>"朋友关注","v_num"=>200),5=>array("name"=>"报名","v_num"=>1000),6=>array("name"=>"量尺","v_num"=>3000),7=>array("name"=>"进店","v_num"=>5000),8=>array("name"=>"成交","v_num"=>"money"),9=>array("name"=>"完善其他资料","v_num"=>"200"),10=>array("name"=>"好色脑功","v_num"=>"num"),11=>array("name"=>"每日签到","v_num"=>"num"),12=>array("name"=>"转发文章","v_num"=>20),13=>array("name"=>"大抢劫","v_num"=>"num"),14=>array("name"=>"上门量尺评分","v_num"=>100),15=>array("name"=>"进店体验评分","v_num"=>100),16=>array("name"=>"定制家居评分","v_num"=>100),17=>array("name"=>"猜男神","v_num"=>5),18=>array("name"=>"哄女友","v_num"=>5),19=>array("name"=>"猜心","v_num"=>10),20=>array("name"=>"武媚娘","v_num"=>5),21=>array("name"=>"任性指数","v_num"=>5),22=>array("name"=>"脑龄测试","v_num"=>"num"),23=>array("name"=>"每日案例分享","v_num"=>5),124=>array("name"=>"成交","v_num"=>"money"),125=>array("name"=>"成交","v_num"=>"money"),126=>array("name"=>"成交","v_num"=>"money"),127=>array("name"=>"成交","v_num"=>"money"),30=>array("name"=>"装修小贴士","v_num"=>20));//124-127是对应第2-5次增加成交金额,在base_info也添加
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[24] = array("name"=>"神经病级别","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[25] = array("name"=>"从装修测性格","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[26] = array("name"=>"沙漠测试","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[27] = array("name"=>"非常3拆1","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[28] = array("name"=>"古代身份","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[29] = array("name"=>"五一去哪儿","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[32] = array("name"=>"家居未来风格","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[31] = array("name"=>"12星座","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[33] = array("name"=>"猜猜别人眼中你是啥样","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[34] = array("name"=>"吊打小怪兽","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[35] = array("name"=>"520表白日","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[36] = array("name"=>"哪种单身狗","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[37] = array("name"=>"重温“跳房子”","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[38] = array("name"=>"咬手鲨鱼","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[39] = array("name"=>"指尖上的小龙舟","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[40] = array("name"=>"吹走烦恼","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[41] = array("name"=>"童年游戏","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[42] = array("name"=>"雾霾战士","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[43] = array("name"=>"猜猜你的未来","v_num"=>"5");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[44] = array("name"=>"股市中你有资格跳楼吗","v_num"=>"10");
/* 全国开通改版 2015-08-08 版 start   */
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[45] = array("name"=>"填写姓名","v_num"=>50);//填写性别：50V值 
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[46] = array("name"=>"填写手机","v_num"=>50);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[47] = array("name"=>"填写地址","v_num"=>100);
/* 全国开通改版 2015-08-08 版 end   */

/* 会员中心签到 2015-08-10 版 start   */
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[48] = array("name"=>"拼人品红包","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[49] = array("name"=>"V值翻翻乐","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[50] = array("name"=>"新版每日签到规则","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[51] = array("name"=>"大奖送不停","v_num"=>"num");
/* 会员中心签到 2015-08-10 版 end   */
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[80] = array("name"=>"奔跑小薇","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[210] = array("name"=>"邀你赚V值","v_num"=>"500");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[211] = array("name"=>"幸运大抢截","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[212] = array("name"=>"全民翻翻乐","v_num"=>"num");






$JITUAN_WEIXIN_HYUSER_LIKE_STYLE = array(1=>'现代简洁',2=>'欧式风格',3=>'中式风格',4=>'田园风格');





$NH2015_WEIXIN_USER_LEVEL_SETTING = array(1=>array("name"=>"葫芦娃","v_num1"=>0,"v_num2"=>999),2=>array("name"=>"熊孩子","v_num1"=>1000,"v_num2"=>6999),3=>array("name"=>"老顽童","v_num1"=>7000,"v_num2"=>9999),4=>array("name"=>"王思聪","v_num1"=>10000,"v_num2"=>99999999));



$NH2015_WEIXIN_ADD_V_NUM_TYPE = array(1=>array("name"=>"弹幕互动","v_num"=>20),2=>array("name"=>"上一个是咩","v_num"=>20),3=>array("name"=>"好色脑功","v_num"=>20),4=>array("name"=>"大抢节","v_num"=>20));

$NH2015_WEIXIIN_MENU_TYPE = array(1 => '图文', 2 => '文字'); 

$NH2015_WEIXIN_USER_DES_TYPE = array(1=>"关注后自动回复",2=>"自定义关键词回复");





$DANMU_COLOR_TYPE = array(1 => '蓝色', 2 => '绿色', 3 => '红色', 4 => '白色', 5 => '紫色', 7 => '灰色', 8 => '橙色');//, 6 => '黑色'



$MOBILE_DEVELOPMENT_PLAN_TYPE = array(1=>"尚品前端",2=>"维意前端",3=>"尚品后台",4=>"维意后台",5=>"尚品接口",6=>"维意接口",7=>"会员体系");



$XINJU2000_WEIXIN_NEIBUID_TYPE = array(1=>"技术部",2=>"设计中心",3=>"编辑团队",4=>"移动互联",5=>"加盟商",6=>"呼叫中心",7=>"新居员工",8=>"领导群");



$KEFU_HUJIAO_XIAOZU_GUIZE_TYPE = array(1 => '按城市分配', 2 => '按推广来源分配', 3 => '按在线导购提交分配', 4 => '按推广来源和城市分配(SEM)');

$CITY_GUANZHU_LEVEL_ARRAY = array(1 => '直营城市', 2 =>'G20城市',5 => "C20城市", 3 =>'L59城市', 4 => '其他城市');





/*集团会员中心*/

$JITUAN_WEIXIN_HYUSER_REWEN_TYPE = array(1=>"提问",2=>"回答");

$JITUAN_WEIXIN_HYUSER_GET_V_SYS_TYPE = array(1=>"每日签到",2=>"完善个人资料");

$JITUAN_WEIXIN_HYUSER_CLICK_ARRAY = array(10=>"首页",1=>"我的V值",2=>"赚取V值",3=>"邀请好友",4=>"会员等级",5=>"会员商城",6=>"会员活动",7=>"猜猜你喜欢",8=>"每日案例",9=>"服务查询",11=>"个人信息",12=>"预约量尺",13=>"对话设计师",14=>"商品抢购","20"=>"统计分享页面");

$JITUAN_WEIXIN_HYUSER_CLICK_STYPE = array(1=>"一级页面",2=>"二级页面",3=>"三级页面",4=>"四级页面");

$JITUAN_WEIXIN_HYUSER_CLICK_PT_TYPE = array(1=>"iphone版",2=>"android版");

$JITUAN_WEIXIN_HYUSER_DINGDAN_TYPE = array(2=>"待发货",3=>"已发货",5=>"已完成",8=>"维权中");

$JITUAN_WEIXIN_HYUSER_DELIVERY_COMPANY = array("002shentong"=>"申通快递","066zhongtong"=>"中通快递","056yuantong"=>"圆通快递","042tiantian"=>"天天快递","003shunfeng"=>"顺丰快递","056yunda"=>"韵达快递","064zhaijisong"=>"宅急送","020huitong"=>"汇通快递","zj001yixun"=>"易迅快递","Fsearch_code"=>"邮政EMS");

//$JITUAN_WEIXIN_HYUSER_DINGDAN_GJ_TYPE = array(1=>"生成订单",2=>"集团发货跟进",3=>"集团发货完成",4=>"新居核对发货",5=>"已完成",6=>"非会员中心订单",7=>"申请退款",8=>"退款成功");

$JITUAN_WEIXIN_HYUSER_DINGDAN_GJ_TYPE = array(1=>"生成订单",2=>"订单审核通过,准备生成批次",3=>"已经生成批次",4=>"订单系统入库",5=>"工厂审核发货",6=>"无效订单",7=>"申请退款",8=>"退款成功",9=>"确认收货",10=>"已退回/转寄");

$JITUAN_WEIXIN_HYUSER_DINGDAN_GJ_TYPE2 = array(1=>"提交订单",2=>"订单审核",3=>"打包成功",4=>"准备出库",5=>"已发货",6=>"无效订单",7=>"申请退款",8=>"退款成功",9=>"确认收货",10=>"已退回/转寄");

$JITUAN_WEIXIN_HYUSER_TO_DESIGNER_CHAT_TYPE = array(1=>"家居设计急问",2=>"我要换设计师",3=>"沟通不顺畅",4=>"其他设计服务问题",5=>"设计师未与我联系",6=>"无法联系上设计师",7=>"对量尺服务不满意",8=>"对设计服务不满意",9=>"设计师不跟进");

$JITUAN_WEIXIN_HYUSER_SHOPPING_TYPE = array(1=>"特权商品",2=>"商品抢购");

$JITUAN_WEIXIN_HYUSER_TUIKUAN_TYPE = array(1=>"全额退款",2=>"邮费退款");

$JITUAN_WEIXIN_HYUSER_TO_DESIGNER_CHAT_STYPE = array(1=>"会员留言",2=>"设计主管留言",3=>"系统留言");

$JITUAN_WEIXIN_HYUSER_GAME_RECORD_TYPE = array(1=>"转盘游戏",2=>"抢占先机");

$JITUAN_WEIXIN_HYUSER_MAKEVZ_CLICK_TONGJI_ARRAY = array(1=>"填写城市点击",2=>"填写手机点击",3=>"完善全部点击",4=>"全部完成人数",5=>"邀请关注点击");



$JITUAN_WEIXIN_HYUSER_DUIHUA_DESIGNER_CLICK_TONGJI_ARRAY = array(1=>"马上通话",2=>"案例点击",3=>"点赞数",4=>"投诉数");

$JITUAN_WEIXIN_HYUSER_FUWUCHECK_CLICK_TONGJI_ARRAY = array(1=>"对话小薇");

$JITUAN_WEIXIN_HYUSER_EVERYDAYANLI_CLICK_TONGJI_ARRAY = array(1=>"页面分享",2=>"点击预约",3=>"点赞数");

$JITUAN_WEIXIN_HYUSER_YAOQING_GOODFRIEND_CLICK_TONGJI_ARRAY = array(1=>"页面分享",2=>"分享后浏览数",3=>"扫码新关注");

$JITUAN_WEIXIN_HYUSER_YUYUE_LIANGCHI_CLICK_TONGJI_ARRAY = array(1=>"报名",2=>"预约时间");

$JITUAN_WEIXIN_HYUSER_JIEDUAN_TYPE = array(1=>"未报名",2=>"已报名未量尺",3=>"量尺未成交",4=>"已成交");

//$JITUAN_WEIXIN_HYUSER_FUWUCHECK_PINGFEN_TYPE = array(1=>"量尺时间",2=>"进度成交",3=>"配送安装",4=>"总体",5=>'配送');

$JITUAN_WEIXIN_HYUSER_FUWUCHECK_PINGFEN_TYPE = array(1=>"量尺服务",2=>"设计方案服务",3=>"进店成交服务",4=>"配送安装服务",5=>"总体服务"); 

$JITUAN_WEIXIN_HYUSER_JINGXUAN_ZIXUN_SETTING_TYPE = array(1=>"左边",2=>"右上角",3=>"右下角");





$share_type = array(1=>"分享到朋友圈",2=>"分享给朋友"); 



/*集团会员中心*/



$TONGBU_SERVER_TYPE = array(1 => '前台服务器', 2 => '微信服务器', 3 => '后台服务器');



$XINJU2000_WEIXIN_PINBI_KEYWORDS_TYPE = array(1=>"门店关键字",2=>"活动关键字");



$XINJU2000_WEIXIN_SHOPINFO_LIST_TYPE = array(1=>"会员中心",2=>"一元买家具-普通用户",3=>"一元买家具-特殊用户");



$XINJU2000_WEIXIN_YIYUAN_BUYINFO_URL_ARRAY = array(66=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjhQ6kboqg71Q0X9NKtLlRtk&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",7=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjlS1hl06OqGhdFbsBwHo8CQ&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",22=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjgQwx83avC62-PYKgn0zxPI&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",33=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjuCk5U1gOyCmm32qzbZpQ5s&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",126=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjopjpgIQKRFHDmKwwOIArzU&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",71=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjrVOcivBFVuWN9-Gq64ftuQ&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",197=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjilFLkAIU27UUCV9r8iarSE&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",196=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjuZuWBQaT4w2IO6v2iCtHpE&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",192=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtSMiR5idiHrC9WJeRo6oI4&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",67=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjvLp9pK80IcjroJI-bH2Mds&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",75=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjlAJeZYaghlwn--fWJXGnek&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",91=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjoZkfNySG24iPdMvGONCCnw&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",188=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjrOeIurhToT4w7QKeReokQI&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",74=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjteSxDYihw-uwcdX1TR3lJk&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",187=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtt-DhXOkzoC8URfD7M7sCA&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",193=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjhucUu7F5CTlLi0UT2f2IwQ&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",72=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtlRJ72uJ9kjYIJ4B7bOPdY&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",190=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtpnc_RFHTm6TQYggtH_kQc&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",78=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjppTsJ32zB_g_mM2i0I990Y&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",191=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjvuuGfXu0m_ilnMa7MGsRRU&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",189=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtVTz8n6amqzpoaWzuQatgc&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",119=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjh6x-B8o6q9gSntYeVuw_EQ&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",194=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjheXusWQRo6sfA-lYCLTNrg&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",195=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjhkIr1nhvJBVxYqLne91Cy8&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",198=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtl3E76olVm6WUhTW0oae3o&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect");




$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE = array(1=>"拼家具活动",2=>"母亲节活动",3=>"一元买家具_5月",4=>"男人持久活动",5=>"吊打小怪兽",6=>"你被保养了",7=>"抢红包活动",8=>"枕头活动",9=>"父亲节活动",10=>"幸运大抢截活动",11=>"甜睡健康乳胶枕免费吹出来",12=>"猜猜童年游戏",13=>"抢红包活动_本来生活推广",14=>"抢红包活动_自媒体推广",15=>"抢红包活动_线下扫码",16=>"一帆风扇",17=>"帮地球降温",18=>"尚品500万粉丝",19=>"性感匿名打分",20=>"秘密造人");

//xiaoxu 备注 之前统计已混乱 之后统计从50开始添加
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[50] = "矩阵微信--上海";
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[51] = "矩阵微信--广州";
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[52] = "会员活动--七夕礼盒";

//猜猜你喜欢增粉由100开始添加
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[101] = "猜猜你的未来";
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[102] = "股市里你有资格跳楼吗？";


$XINJU_WEIXIN_MEITU_USER_MEITU_JINGXUAN_TYPE = array(1=>"美图",2=>"周刊");

$XINJU_WEIXIN_MEITU_USER_MEITU_JINGXUAN_POSITION = array(1=>"1号位置",2=>"2号位置",3=>"3号位置",4=>"4号位置",5=>"5号位置",6=>"6号位置",7=>"7号位置");





$KEHU_ZHIJIAN_TYPE_ARRAY = array(1 => '内部', 2 => '外部');



$KEHU_ZHIJIAN_LEVE_ARRAY = array(1 => '1星', 2 => '2星', 3 => '3星', 4 => '特星');



$KEHU_ZHIJIAN_RIGHT_ARRAY = array(1 => '正确', 2 => '错误');



$GONGNENG_CAT = array(1=>'功能定制banner',2=>'会员活动',3=>'家居学堂',4=>'论坛帖子');



$ANLI_TONGJI_TEAM_ARRAY = array(1 => '文案1组', 2 => '文案2组', 3 => '文案3组');



$delivery_install_h=array(6=>"6点",7=>"7点",8=>"8点",9=>"9点",10=>"10点",11=>"11点",12=>"12点",13=>"13点",14=>"14点",15=>"15点",16=>"16点",17=>"17点",18=>"18点",19=>"19点",20=>"20点",21=>"21点");

$delivery_install_m=array(0=>"0分",10=>"10分",20=>"20分",30=>"30分",40=>"40分",50=>"50分");



$weike_designer_lizhi_state=array(1 => "未处理", 2 => "已离职", 3 => "未离职");

$zhuanti_type=array(1=>"微博粉丝通-移动",2=>"微博粉丝通-PC",3=>"微博品牌速递",4=>"微任务提交",5=>"微博互动自主提交");;//专题类型访问记录

//微信矩阵
$WEIXIN_JUZHEN_MENU_TYPE = array(1 => '图文', 2 => '文字');
$WEIXIN_JUZHEN_CLICK_DES_TYPE = array(1=>"关注自动回复",2=>"自定义关键字回复"); 
$WEIXIN_JUZHEN_SCAN_SETTING_TYPE = array(1=>"门店",2=>"活动");


$MSG_TYPE = array(1=>'注册',2=>'修改',3=>'动态密码', 4=>'推送信息');

//反馈跟进系统
$FANKUI_TYPE_ARRAY_INFO=array(1=>"连线主管",2=>"评价",3=>"满意度");
$is_hao_cha_array=array(1=>"好评",2=>"差评");
$genjin_type_array=array(1=>"主管",2=>"尚品客服");

?>
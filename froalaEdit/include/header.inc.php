<?php

/********************************





2007-3-7





********************************/

@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 

@header("Cache-Control: no-cache, must-revalidate"); 

@header("Pragma: no-cache"); 





//if(defined("_LANMU")) die("��̨����ά����,��ͣһ��ʱ��");



if(!defined('_ROOT')){ die("Secure Die!");}

define('_IN_ADMIN', 1);
/* s.wx2015/7/24.�����°�༭������·��-------------------------------------------------------------e */
if( !defined('BJQ_PATH') )	define('BJQ_PATH', 'templates/froala_editor/');
//--e




include_once(_ROOT . "/../include/checksession.php");



///////// DATABASE SETUP

define('_TABLE_PRE', '');





	////����ȫ�ֱ���

	$db_config_file = "/home/httpd/DB_CONFIG.php";

	if(eregi("/wayes_sys/", __FILE__)){

		$db_config_file = "/home/httpd/WY_DB_CONFIG.php";

		if(!defined('_COMMON_DATABASE')) define('_COMMON_DATABASE', 'wayes_common.');///�����ط�,header.inc.php �� database.php





	}else{

		if(!defined('_COMMON_DATABASE')) define('_COMMON_DATABASE', 'homekoo_common.');///�����ط�,header.inc.php �� database.php



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



		///�����ݿ�

		$tmp_db_key = "homekoo_slave";



		define("_DATABASE_HOST_SLAVE",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_DATABASE_NAME_SLAVE",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_DATABASE_USER_SLAVE",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_DATABASE_PWD_SLAVE",$ALL_DB_CONFIG[$tmp_db_key][pw]);



		///�º�̨���ݿ�

		$tmp_db_key = "homekoo_sys";



		define("_SYS_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_SYS_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_SYS_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_SYS_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);





		///�ͻ���1��̨���ݿ�

		$tmp_db_key = "homekoo_sys_m1";



		define("_SYS_M1_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_SYS_M1_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_SYS_M1_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_SYS_M1_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);





		///�ͻ���2��̨���ݿ�

		$tmp_db_key = "homekoo_sys_m2";



		define("_SYS_M2_DATABASE_HOST",$ALL_DB_CONFIG[$tmp_db_key][host]);

		define("_SYS_M2_DATABASE_NAME",$ALL_DB_CONFIG[$tmp_db_key][dbname]);

		define("_SYS_M2_DATABASE_USER",$ALL_DB_CONFIG[$tmp_db_key][user]);

		define("_SYS_M2_DATABASE_PWD",$ALL_DB_CONFIG[$tmp_db_key][pw]);





		$tmp_db_key = "homekoo_sys2";//��151



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







		define("_DATABASE_HOST_54",$ALL_DB_CONFIG[54][host]);//54������

		define("_DATABASE_NAME_54",$ALL_DB_CONFIG[54][dbname]);

		define("_DATABASE_USER_54",$ALL_DB_CONFIG[54][user]);

		define("_DATABASE_PWD_54",$ALL_DB_CONFIG[54][pw]);





		define("_DATABASE_HOST_49",$ALL_DB_CONFIG[49][host]);//49������

		define("_DATABASE_NAME_49",$ALL_DB_CONFIG[49][dbname]);

		define("_DATABASE_USER_49",$ALL_DB_CONFIG[49][user]);

		define("_DATABASE_PWD_49",$ALL_DB_CONFIG[49][pw]);





		define("_DATABASE_HOST_240",$ALL_DB_CONFIG[240][host]);//240,145������

		define("_DATABASE_NAME_240",$ALL_DB_CONFIG[240][dbname]);

		define("_DATABASE_USER_240",$ALL_DB_CONFIG[240][user]);

		define("_DATABASE_PWD_240",$ALL_DB_CONFIG[240][pw]);





		define("_DATABASE_HOST_39",$ALL_DB_CONFIG[39][host]);//39������

		define("_DATABASE_NAME_39",$ALL_DB_CONFIG[39][dbname]);

		define("_DATABASE_USER_39",$ALL_DB_CONFIG[39][user]);

		define("_DATABASE_PWD_39",$ALL_DB_CONFIG[39][pw]);



		define("_DATABASE_HOST_8",$ALL_DB_CONFIG[old_51][host]);//147ͳ�Ʒ�����

		define("_DATABASE_NAME_8",$ALL_DB_CONFIG[old_51][dbname]);

		define("_DATABASE_USER_8",$ALL_DB_CONFIG[old_51][user]);

		define("_DATABASE_PWD_8",$ALL_DB_CONFIG[old_51][pw]);





		define("_DATABASE_HOST_146",$ALL_DB_CONFIG[db146][host]);//146������

		define("_DATABASE_NAME_146",$ALL_DB_CONFIG[db146][dbname]);

		define("_DATABASE_USER_146",$ALL_DB_CONFIG[db146][user]);

		define("_DATABASE_PWD_146",$ALL_DB_CONFIG[db146][pw]);





		define("_DATABASE_HOST_WX",$ALL_DB_CONFIG[dbwx][host]);//76������

		define("_DATABASE_NAME_WX",$ALL_DB_CONFIG[dbwx][dbname]);

		define("_DATABASE_USER_WX",$ALL_DB_CONFIG[dbwx][user]);

		define("_DATABASE_PWD_WX",$ALL_DB_CONFIG[dbwx][pw]);







		define("_DATABASE_HOST_WX_NEW",$ALL_DB_CONFIG[dbwx_new][host]);//΢��2

		define("_DATABASE_NAME_WX_NEW",$ALL_DB_CONFIG[dbwx_new][dbname]);

		define("_DATABASE_USER_WX_NEW",$ALL_DB_CONFIG[dbwx_new][user]);

		define("_DATABASE_PWD_WX_NEW",$ALL_DB_CONFIG[dbwx_new][pw]);





		define("_DATABASE_HOST_WX_JITUAN",$ALL_DB_CONFIG[dbwx_jituan][host]);//΢�� ����

		define("_DATABASE_NAME_WX_JITUAN",$ALL_DB_CONFIG[dbwx_jituan][dbname]);

		define("_DATABASE_USER_WX_JITUAN",$ALL_DB_CONFIG[dbwx_jituan][user]);

		define("_DATABASE_PWD_WX_JITUAN",$ALL_DB_CONFIG[dbwx_jituan][pw]);







		define("_DATABASE_HOST_ZHIXIAO_WEIXIN",$ALL_DB_CONFIG[db_zhixiao_weixin][host]);//4������

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

	////���ý���

		

		die("�����ļ��Ҳ���!");

	



	}



	if(defined("IS_TMP_SYS") && !defined("SYS_UPGRADE_ING")) define("SYS_UPGRADE_ING", IS_TMP_SYS);





define("_DATABASE_PCONNECT", 0);

//////////////

define('_UPLOAD_DIR', _ROOT . '/images'.date("Y"));



define('_UPLOAD_DIR_HTTP', 'images'.date("Y"));//



define('_UPLOAD_MODE', 2);//�ϴ�ģʽ��������ͬ���ļ�ʱ����1�Ǹ���ԭ���ļ���2���½��ļ���3������

////////////

////////

define('_TEMPLATE', _ROOT . '/templates');



define('_HTTP_PATH', defined("BENDI_SERVER") ? 'http://bendi.homekoo.com/sys/' : 'http://www.homekoo.com/sys/');//







define('_AUTH_UID', '_uid');



define('_AUTH_USER', '_username');



define('_AUTH_PWD',  '_password');



define('_AUTH_TIME', '_login_time');





define('_AUTH_ADMIN_ADDCODE', 'aadf26er4sd');//�����





define('_DATE_FORMAT', 'Y-m-d');



//

define('_PAGESIZE', defined('_IN_ADMIN') ? 20 : 20);



define('_FTP_UPLOAD_DIR', 'newupload');//ftp�ϴ���Ŀ¼�����ڵ��뻧�͵�jpg��koc�ļ�



//include_once("./include/check.php");







//�����ϴ�ҳ��

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

///////���Ȩ��



$can_edit_ad_groups = array();////���Ա༭����Ȩ��





$PROVINCE_ARRAY = array(1 => '�㶫', '����', '����', '����', '����', '����', '����', '����', '����', '�ӱ�', '������', '����', '����', '����', '����', '����', '����', '����', '���ɹ�', '����', '�ຣ', 'ɽ��', '�Ϻ�', 'ɽ��', '����', '�Ĵ�', '���', '�½�', '����', '����', '�㽭', '̨��', '����', '���');





//��Ŀ

//<?php if($_member->is_admin || in_array('buy_juan', $tmp_info)){ ? >

$LANMU_ARRAY = array('NO' => 'û������Ŀ', 'U' => '��ҳ����', 'S' => '��Ա����', 'T' => '����ԱȨ�޹���', 'V' => '���Թ���',  'S1' => '��ת��Ϣ', 'S2' => '���������¼', 'link' => '��������', 'ad' => '������', 'S3' => '¥�̹���', 'S4' => 'ʡ��������', 'S5' => '¥�̻��͹���', 'S6' => '���۹���', 'S7' => '����ռ����', 'S8' => 'ȫ��ͼ��pn3������', 'S9' => '��Ʒ������� ', 'S10' => '���¹���',  'S12' => '���ļҾӹ㳡����', 'S13' => '��׼����ռ����', 'S14' => '����/pn3������', 'S15' => '����ͳ�ƹ���','S11' => 'װ�޹�˾����', 'S16' => 'װ�޹�˾����2', 'S17' => 'ί����ƹ���', 'S18' => 'ί����Ϣ�г�����', 'S19' => '��Ա�ϴ�ͼƬ����', 'S20' => '3dģ�ͷ����б�', 'K' => '����ͳ��', 'mymodel' => 'ģ�͹���', 'myhome_design' => '�޸��Ҽҵ�װ�޷�������', 'buy_juan' => '�����Ż�ȯ����', 'jiangpin_detail_list' => '��Ʒ��ϸ�б�', 'cuxiao' => '�������۹���', 'js_call' => '���µ��ù������', 'Q' => '�Ҽ�����������������', 'Q2' => '���������������', 'KJ' => '�ռ䲼��', 'qq_group' => 'QQȺ����', 'kitprj' => '������Ŀ�����������', 'tpm' => 'tpm�����������', 'soft_visit_info' => '����ռ���Ϣ����', 'taocan' => '�ײ͹���', 'taocan_product' => '�ײͲ�Ʒ����', 'taocan_product_ku' => '�ײͲ�Ʒ�����', 'taocan_peijian' => '�ײ��������', 'taocan_peijian_ku' => '�ײ���������', 'taocan_pic' => '�ײ�ͼƬ����', 'taocan_ask' => '�ײ��ʴ����', 'taocan_comment' => '�ײ����Թ���', 'taocan_order' => '�ײͶ�������', 'taocan_order_detail' => '�ײͶ����������', 'taocan_apply_credit' => '������ֹ���', 'taocan_order_product' => '�ײͶ�����Ʒ����', 'taocan_cailiao' => '�ײͰ��˵������', 'SHOP' => '��Ʒ�ŵ����', 'cailiao' => '���Ϲ���', 'taocan_diaocha' => '�ײ͵������', 'taocan_diaocha_xuanxiang' => '�ײ͵���ѡ�����', 'taocan_diaocha_result' => '�ײ͵���������', 'taocan_huxing' => '�ײ��ʺϻ��͹���', 'free_designer' => '���������ʦ����', 'taocan_bz_layout' => '�ײ�ƽ�沼�ù���', 'taocan_cart' => '�ײ͹��ﳵ����', 'taocan_design' => '�������ƹ���', 'taocan_juan' => '��������', 'free_design_apply' => '�����������������', 'laws_space' => '�����ռ䱨������', 'tags' => '�ؼ��ֹ���', 'taocan_xilie' => '�ײ�ϵ�й���', 'taocan_lipin' => '��Ʒ����', 'taocan_lipin_apply' => '��Ʒ�������', 'taocan_help' => '�������Ĺ���', 'taocan_zx' => '������ѯ����', 'ip_do' => 'Ҫ�����IP����', 'ip_pb' => '����IP����', 'model_admin' => '���ģ�͹���', 'yongjin_setting' => 'Ӷ��֧�����ù���', 'taocan_pinpai' => 'ģ��Ʒ�ƹ���', 'taocan_model_cat' => 'ģ�ͷ������', 'taocan_model' => '�ײ�ģ�͹���', 'taocan_model_designer' => 'ģ�������ղع���', 'taocan_fav' => '�ײ��ղؼй���', 'site_setting' => '��վ��������', 'site_go' => '��վ��תʱ��ι���', 'taocan_pic_zuobiao' => '�ײ�ͼƬ�������', 'tuangou_apply' => '�Ź�����������', 'tuangou_zhaoji' => '�Ź��ټ�����', 'dp_design' => '���䳡��������', 'dp_caizhi' => '���䳡���ʹ���', 'dp_design_detail' => '���䳡�����������', 'taocan_wenjuan' => '�����ʾ�������', 'chugui_shili' => '�������ʵ������', 'taocan_bz_room' => '�ײͱ�׼�������', 'taocan_bz_room2' => '���ͼ��', 'diy_flash_group' => '�Զ���flash��������', 'diy_flash' => '�Զ���flash������', 'diy_flash_pic' => '�Զ���flash����ͼ����', 'sp_AgentRecord' => '400��ϯ��¼����', 'sp_CallRecord' => '400���м�¼����', 'zuoxi400' => '400��ϯ����', 'sns_admin' => 'sns�ͻ�����Ա����', 'taocan_talk' => '��ͨ��¼����', 'callcenter' => '400�ͷ������̨', 'zt_loupan' => 'ר��¥�̹���', 'shop_news' => '�ŵ���Ѷ����', 'shop_news_page' => '�ŵ���Ѷ��ҳ����', 'zt_huxing' => 'ר�⻧�͹���', 'zt_huxing_taocan' => 'ר�⻧�ͷ�������', 'show_product_cat' => 'չʾ��Ʒ�������', 'show_product' => 'չʾ��Ʒ����', 'cansai_jieduan' => '�����׶ι���', 'cansai_zuopin' => '������Ʒ����', 'cansai_zuopin' => '������Ʒ����', 'cansai_vote' => 'ͶƱ��¼����', 'taocan_bbs' => '�ײ�����û���������', 'zt_tpl' => '¥��ר��ģ�����', 'taocan_product_pic' => '��Ʒ�ο�ͼƬ����', 'chugui_article' => '�������¹���', 'chugui_flash' => '����FLASH����', 'spzp_soft' => '��Ʒ����û�����', 'spzp_soft_downlist' => '��Ʒ����û����ؼ�¼����', 'auto_send_email' => '��������ʼ�����', 'ofroom' => '���������������', 'tuangou_product_cat' => '�Ź����Ʒչʾ�������', 'tuangou_product' => '�Ź����Ʒչʾ����', 'tel400' => '400�����¼����', 'member_fankui' => '��Ա���練������', 'good_anli' => '�ɹ���������', 'good_anli_design' => '�ɹ�������������', 'taocan_wenjuan2' => '�����ʾ����2����', 'member_fankui_update' => '��Ա�������ļ�¼����', 'spzp_product_need' => '��Ʒ��Ʒ�������', 'spzp_product_comment' => '��Ʒ��ƷComment����', 'jiameng' => '����ר������', 'jiameng_apply' => '������������', 'taocan_mianliao' => '�ײͿ�ѡ���Ϲ���', 'taocan_pn3_pic' => '�ײ�pn3���Ϲ���', 'pages' => '������Ʒ����', 'pages_content' => '������Ʒ���ݹ���', 'sms_version' => '���Ű汾����', 'sms_send' => '���ŷ��ͼ�¼����', 'sms_send_detail' => '���ŷ�����ϸ��¼����', 'search_keyword' => '��Դ�ؼ��ֹ���', 'liangchi_time_update' => '�ƻ�����ʱ���޸ļ�¼����', 'ms_time' => '��ɱ����ʱ��ι���', 'ms_product' => '��ɱ��Ʒ����', 'ms_comment' => '��ɱ��Ʒ��������', 'ms_order' => '��ɱ��Ʒ��������', 'ms_mianliao' => '��ɱ��Ʒ���Ϲ���', 'ms_product_pic' => '��ɱ��ƷͼƬ����', 'ms_product_detail' => '��ɱ��Ʒ�������', 'ms_mianliao_cat' => '��ɱ��Ʒ���Ϸ������', 'newsys_log' => '�º�̨�޸���־����', 'search_keyword_tongji' => '��Դ����ͳ�Ƽ�¼����', 'chat_gg' => '�����ҹ������', 'search_keyword_result' => '�ؼ�������ͳ�ƹ���', 'zt_loupan_editor' => 'ר��¥�̹���ϵͳ�༭Ȩ��', 'zt_loupan_designer' => 'ר��¥�̹���ϵͳ���ʦȨ��', 'zt_huxing_taocan_index' => '¥�̻��͹�����������', 'zt_huxing_ext' => '¥�̻��Ͷ�����Ϣ����', 'zt_huxing_jindu' => '¥�̻��ͽ��ȹ���', 'zt_huxing_taocan_index' => '¥�̻��͹�����������', 'visit_follow' => '�ÿ͸��ٹ���', 'daiyanren' => '�¾Ӵ����˹���', 'chufang_guishen_cailiao' => '����������Ϲ���', 'chufang_mianban_cailiao' => '���������Ϲ���', 'chufang_lashou_ku' => '�������ֿ����', 'zt_loupan_ask' => 'ר��¥�������ʴ����', 'zt_loupan_message' => 'ר��¥�����Թ���', 'daiyanren100' => '100�����˹���', 'daiyanren_fangan' => '100�����˼Ҿ����׷�������', 'daiyanren_tpl' => '������ģ�����', 'mydesigner' => '�������ʦ����', 'page_time' => '��ҳ����ʱ�����', 'all_sys' => '�ܺ�̨����', 'lzurl' => '¼����ַ����', 'taocan_ext' => '�ײͶ�������', 'taocan_shenpi' => '�ײ���˹���', 'designer_ext' => '���ʦ������Ϣ�����', 'bisai_mingti' => '���ʦ�����������', 'baisai_zuopin' => '���ʦ������Ʒ����', 'bisai_gundong' => 'ͷ��������Ϣ����', 'bisai_message' => '�������԰����', 'baisai_vote' => '���ʦ��ƷͶƱ����', 'from_code' => '���⿪�Ź��������', 'from_code_visit' => '��������ʼ�¼����', 'vote_jilu' => '�¾Ӳ��Լ�¼����', 'soft_pt_design' => '�Ҿ����׷�������', 'apply_unit' => '����ģ�͹���', 'kouhao' => '�ں���������', 'ip_go_record' => 'IP��ת��¼����', 'taocan_product_ku_record' => '�ײͲ�Ʒ��۸��޸ļ�¼����', 'taocan_product_ku_taocan_record' => '�ײͲ�Ʒ���޸��ײͼ�¼����', 'taocan_product_ku_taocan_product_record' => '�ײͲ�Ʒ���޸��ײͲ�Ʒ��¼����', 'out_views_apply' => '��������ͳ���������', 'out_views_day' => '��������ÿ��ͳ�ƹ���', 'out_views_detail' => '���������������', 'zhineng_zuopin' => '���ܰ������Ʒ����', 'anli_user' => '������������ͻ�����', 'anli_room' => '������������������', 'fankui_gj' => '�ͻ�������Ϣ����', 'sp_flash_fengge' => '��Ʒflash�˿�������Թ���', 'sp_flash_city' => '��Ʒflash���й���', 'sp_flash_word' => '��Ʒflashװ�η�����дʹ���', 'sp_flash_product' => '��Ʒflash�Ƽ���Ʒ����', 'sp_flash_cailiao' => '��Ʒflash��Ĺ���', 'sp_flash_left_lanmu' => '��Ʒflash��ҳ�����Ŀ����', 'sp_flash_right_lanmu' => '��Ʒflash��ҳ�ұ���Ŀ����', 'apply_user' => 'ģ�������ʺŹ���', 'apply_user_money' => 'ģ�������ʺų�ֵ��¼����', 'apply_down_record' => 'ģ���������ؼ�¼����', 'apply_card' => 'ģ�ͳ�ֵ���Ź���', 'sp_flash_style' => '��Ʒflash������', 'mydiy_form' => '�Զ�������������', 'tuijian_fanli' => '�Ƽ�������÷�������', 'soft_product_check' => '�������ģ��ѡ������', 'doorstyle_check' => '��������Ű�ģ��ѡ������', 'doorstyle_brand' => '�Ű�Ʒ�ƹ���', 'search_default' => '��������Ĭ��������������', 'wayes_shop' => 'ά���ŵ����', 'wayes_ofroom' => 'ά�����������������', 'wayes_article' => 'ά�����¹���','wayes_article_cat' => 'ά�����·������', 'wayes_taocan' => 'ά�ⷽ������', 'wayes_taocan_pic' => 'ά�ⷽ��չʾ��ͼ����', 'wayes_flash' => 'ά����ҳflash����', 'wayes_menu' => 'ά�⵼���˵�����', 'wayes_tuijian' => 'ά����ҳ�Ƽ��ײ����ƹ���', 'wayes_tuijian_taocan' => 'ά����ҳ�Ƽ��ײ��б����', 'fankui_design' => '�����ͻ���������', 'material_check' => '�����������ģ��ѡ������', 'article_keyword' => '���¹ؼ��ֹ���', 'bz_room_data' => '�Զ�ƥ�仧�����ݹ���', 'sp_ip_record' => '�����ر���ҳIP��¼����', 'search_pipei_tiaojian' => '����ƥ�仧����������', 'search_pipei_result' => '����ƥ�仧�ͽ������', 'fankui_design_guanli' => '������ƹ������', 'company_ip' => '��˾��ԱIP����', 'wayes_search_flow' => 'ά���������ٹ���', 'wayes_visit_flow' => '��վ���ٷ��ʹ���', 'fankui_sourse_type' => '�ͻ���Դ����', 'chugui_pinpai' => '�����ƷƷ�ƹ���', 'homekoo_guodu_flow' => '����ҳ���ٹ���', 'soft_suohao' => '������Ź���', 'search_pipei_bumanyi' => '����ƥ�䲻�������', 'search_pipei_mission' => '����ƥ�䷽���������', 'room_post_search' => '����������¼����', 'good_user' => '��Ծ��Ա����','group_mail_admin' => '�ʼ�Ⱥ������', 'db_tongji' => '���ݿ�ͳ�ƹ���', 'db_tongji_detail' => '���ݿ�ͳ����������', 'yeji_month_yaoqiu' => '����ÿ��ҵ��Ҫ�����', 'caizhi_pinpai' => '����Ʒ�ƹ���', 'dx_fangan' => '���Ϳռ����ⷽ������', 'baidu_keyword_report' => '�ٶȹؼ��ʱ������', 'baidu_keyword' => '�ٶȹؼ��ʹ���', 'baidu_unit' => '�ٶȹؼ��ʵ�Ԫ����', 'baidu_plan' => '�ٶȹؼ��ʼƻ�����', 'baidu_account' => '�ٶ��ʺŹ���', 'baidu_report_update' => '�ٶȱ��������ϴ���¼����', 'baidu_keyword_url' => '�ٶ�������ַ����', 'baidu_keyword_url_update' => '�ٶ�������ַ��¼����', 'keyword_taocan' => '�ײ͹ؼ��ֹ���', 'keyword_article' => '��Ѷ�ؼ��ֹ���', 'good_keyword_article' => '������Ѷ�ؼ��ֹ���', 'keyword_article_cat' => '���¹ؼ��ַ������', 'baidu_idea' => '�ٶȴ������', 'baidu_ban_keyword' => '�ٶ��������ιؼ��ʹ���', 'baidu_set_ban_keyword' => '�ٶ��ֹ��������ιؼ��ʹ���', 'dasai_zuopin' => '���Ǵ�����Ʒ����', 'dasai_zuopin_pic' => '���Ǵ�����ƷͼƬ����', 'dasai_vote' => '���Ǵ���ͶƱ��¼����','wayes_flash_fengge' => 'ά��flash�˿�������Թ���' ,'wayes_flash_city' => 'ά��flash���й���' ,'wayes_flash_word' => 'ά��flashװ�η�����дʹ���' ,'wayes_flash_product' => 'ά��flash�Ƽ���Ʒ����' ,'wayes_flash_cailiao' => 'ά��flash��Ĺ���' ,'wayes_flash_left_lanmu' => 'ά��flash��ҳ�����Ŀ����' ,'wayes_flash_right_lanmu' => 'ά��flash��ҳ�ұ���Ŀ����' ,'wayes_flash_style' => 'ά��flash������', 'free_mydesign' => '�����ƶ�Ӧ��������', 'baidu_idea_report' => '�ٶȴ��ⱨ�����', 'yx_user' => 'Ӫ���û�����', 'yx_record' => 'Ӫ����¼����', 'yx_mission' => 'Ӫ���������', 'yx_mission_record' => 'Ӫ���������м�¼����', 'ip_article' => '���·���IP��¼����', 'chugui_apply' => 'ͼ������������', 'chugui_apply_guiti' => 'ͼ������������', 'chugui_apply_door' => 'ͼ�������Ű����', 'chugui_apply_caizhi' => 'ͼ��������ʹ���', 'chugui_apply_wujin' => 'ͼ����������������', 'baidu_keyword_update' => '�ٶȹؼ��������ϴ���¼����', 'gx_school' => '��УѧУ����', 'gx_xi' => '��Уϵ����', 'gx_user' => '��У������Ա����', 'gx_day_ip' => '��УIPÿ����Դ��¼����', 'gx_ip_detail' => '��УIP��ϸ��Դ��¼����', 'gx_day_post' => '��У����ÿ���¼����', 'gx_post_detail' => '��У������ϸ��¼����', 'gx_article' => '��У�ƹ���汾����', 'baidu_op_record' => '�ٶ����������¼����', 'good_keyword_article_cat' => 'Ʒ�ƹؼ��ַ������', 'article_tpl' => 'Ʒ������ģ�����', 'article_tpl_record' => 'Ʒ���������ɼ�¼����', 'taocan_search_html' => '�ײ�������̬ҳ����', 'homekoo_article' => '�¾����²ɼ������', 'taocan_search_num' => '�ײ������м�¼����', 'tg_loupan' => '�ƹ�¥�̹���', 'tg_fankui_type' => '�ƹ�ͻ�״̬�����', 'tuangou_zhuanti' => '�Ź�ר��ҳ�����', 'yx_tongji_sms' => 'Ӫ���ʼ��������ݹ���', 'keyword_zhuanti' => '�ؼ���ר�����', 'keyword_zhuanti_cat' => '�ؼ���ר����Ŀ����', 'keyword_zhuanti_article' => '�ؼ���ר�����¹���', 'yx_tongji_sms_send_record' => 'Ӫ��ͳ�Ʒ��Ͷ��ż�¼����', 'liangchi_tongji_sms_send_record' => 'ÿ������ͳ�Ʒ��Ͷ��ż�¼����', 'tg_loupan_talk_send' => '�ƹ�¥�̹�ͨ���ͼ�¼����', 'tg_loupan_qi_send' => '�ƹ�¥�̶��ŷ��ͼ�¼', 'tg_qun_send' => '�ƹ�¥���ʼ����ͼ�¼', 'zhuanti_choujiang_record' => 'ר��齱��¼����', 'pachong_record' => '�ٶ�������ټ�¼����', 'yx_email_tpl' => '�ʼ�����ģ�����', 'yx_email_wait_send_list' => '�ʼ����Ͷ��й���', 'yx_sms_tpl' => '���ŷ���ģ�����', 'weike_designer' => '��Ӣ���ʦ����', 'weike_designer_taocan' => '��Ӣ���ʦ��Ƶķ�������', 'weike_designer_loupan' => '��Ӣ���ʦ��Ƶ�¥�̹���', 'sms_send_record' => '���ŷ��ͼ�¼����', 'member_fankui_tuijian_record' => '�ͻ��Ƽ���¼����', 'member_fankui_get_card_record' => '�ͻ���ù��￨��¼����', 'taocan_del_record' => '�ײ�ɾ����¼����', 'bz_layout_mrs' => '����ƽ��mrs����', 'soft_shouji_xml' => '����ռ����Ϲ���', 'soft_suohao_user' => '��������û�����', 'cancel_rec_email' => 'ȡ�������������', 'liangchi_kehu' => '���߱��ͻ���Ϣ����', 'liangchi_room' => '���߱�������Ϣ����', 'liangchi_room_canshu' => '���߱����������Ϣ����', 'liangchi_room_data' => '���߱�����������Ϣ����', 'liangchi_furs_canshu' => '���߱����������Ϣ����', 'liangchi_furs_data' => '���߱����������Ϣ����', 'liangchi_xtd' => '���߱�����XTD�ļ�����', 'designer_tongji_week' => '���ʦÿ��ͳ�ƹ���', 'shop_tongji_week' => '�Ŷ�ÿ��ͳ�ƹ���', 'fenji_luyin' => '�ֻ�¼������', 'zt_tuangou_question' => 'ר���Ź��-�����������', 'zt_tuangou_buyreason' => 'ר���Ź��-�������ɹ���', 'zt_tuangou' => 'ר���Ź��Ȩ��', 'zt_tuangou_banners' => 'ר���Ź��-���������', 'zt_tuangou_layout_model' => 'ר���Ź��-��ͼģ�����', 'zt_tuangou_configuration' => 'ר���Ź��-����ù���', 'zt_tuangou_content' => 'ר���Ź��-����ݹ���', 'server_disk' => '�������ռ����', 'sp_flash_message' => '��Ʒflash-�����������', 'admin_login_record' => '��̨�˺ŵ�½ʱ���¼����', 'member_visit_record' => '�ͻ����鿴��¼����', 'admin_phone' => '��̨�˺��ֻ�����', 'yaoqing_designer_sms' => '�������ʦ���ż�¼����', 'baidu_keyword_tiaojia_record' => '�ؼ��ֵ��ۼ�¼����', 'tg_site_taocan_son' => '�ƹ�վ-�ײͶ�Ӧ����', 'tg_site_class' => '�ƹ�վ-���·������', 'tg_site_article' => '�ƹ�վ-���¹���', 'tg_site_banner' => '�ƹ�վ-��ҳͼƬ����', 'weibo' => '΢�����ݹ���', 'dajinjuan_sn' => '����ȯ���кŹ���', 'daijinjuan_send_record' => '����ȯ���кŷ��ͼ�¼����', 'tuiguang_zhuanyi_record' => '�ƹ������ת�Ƽ�¼����', 'gj_user_reject_liangchi' => 'ֱ����Ա��ʲ������߹���', 'local_server_baodao' => '���ط�����������¼����', 'designer_reject_record' => '���ʦ�ܾ����տͻ���¼����', 'fankui_to_gj_user_record' => '�ͻ�ת���ʦ��¼����', 'tg_site_user' => '��վ�û�����', 'zhuanti_loupan' => '�Ź�ר�����¥�̹���', 'fenchi_sms_record' => '�ֳ߷��͸����ʦ���ż�¼����', 'fankui_designer_change_record' => '�ͻ����ʦת�Ƽ�¼����', 'loupan_search_record' => '¥��������¼����', 'loupan_read_record' => '¥�̲鿴��¼����', 'taocan_cat' => '�ײͷ������', 'taocan_cat_index' => '�ײͷ����ϵ����', 'taocan_cat_pic' => '�ײͷ����ӦЧ��ͼ����', 'liangchi_diaocha' => '���������������', 'liangchi_diaocha_xuanxiang' => '������������ѡ�����', 'liangchi_diaocha_xuanxiang_record' => '������������ѡ���¼����', 'liangchi_diaocha_record' => '�������������ı����ݼ�¼����', 'from_taocan_liangfang_record' => '���ײ͹���������¼����', 'from_taocan_visit_record' => '���ײ͵��������ҳ���¼����', 'need_xuanran_record' => '��Ҫ��Ⱦ�ķ����¼����', 'xuanran_pic_record' => '������ȾͼƬ����', 'new_index_dingzhi' => '����ҳȫ�ݼҾ߶����������', 'wayes_photo' => 'ά������ɫ�����', 'wayes_photo_detail' => 'ά������ɫ��-ͼƬ����', 'designer_team' => '�������С�����', 'liangchi_kehu_file' => '���߱��ͻ��ļ�����', 'right_tip_article' => '���½Ǹ������ݹ���', 'kefu_fenpei_record' => '�ͷ�����ͻ���¼����', 'right_win_record' => '�ұ߸���������ʾ��鿴��¼����', 'taocan_edit_record' => '�ײͲ�����¼����', 'soft_shop' => '���ʦ����ŵ����', 'soft_user_login_record' => '�����û���¼��¼����', 'zhixiao_designer' => 'ֱ�����ʦͼƬ�������', 'huxing_designer' => '¥�̻������ʦ����', 'page_zt_huxing' => '����ҳ��������д����', 'fankui_shiji_dan_record' => '���ʦ�޸�ʵ���µ�ʱ���¼����', 'jd_dingzhi' => '�ײ�����ҳ����ķ��䶨�ƹ���', 'taocan_anli' => '�ײ�����ҳ�ɹ���������', 'koc_mianji_update_record' => 'koc������¼�¼����', 'taocan_bz_room_update_record' => '�ײͱ�׼������¼�¼����', 'kefu_cacel_type' => '�ͷ����ԭ�����', 'caiwei_year' => '��λ��ݶ�Ӧ���ù���', 'remai_product_buy' => '�����Ƽ�������������', 'remai_product_tiyang' => '�����Ƽ������������', 'mykeyword_file' => '�����ؼ����ļ�����', 'mykeyword' => '�����ؼ��ֹ���', 'mykeyword_keys' => '�ֽ�Ĺؼ��ֹ���', 'kefu_url' => '�ͷ���ַ���ӹ���', 'mykeyword_ban_keys' => '�񶨵Ĺؼ��ֹ���', 'sale_cancel_time_record' => '���۸���ʱ�������¼�����', 'ds_check_page_record' => '���ʦ���ҳ���¼����', 'lipin_qg' => '��Ʒ�����Ĳ�Ʒ����', 'lipin_qg_record' => '��Ʒ������¼����', 'ofroom_xuqiu' => '����������Ͱ��ù���', 'xinpin_gg_pic' => '��Ʒ�������ͼ����', 'zt_anli_cat' => 'ר�ⰸ���������', 'zt_anli_detail' => 'ר�ⰸ���������', 'zt_seo' => 'ר��SEO��Ϣ����', 'soft_mission_file' => '��������ϴ��������', 'soft_mission_pic' => '��������ϴ����ͼƬ����', 'zt_xg_cat' => 'ר��Ч��ͼ�������', 'zt_xg_pic' => 'ר��Ч��ͼ�ϴ�����', 'index_hot_cat' => '��ҳ���ŷ������', 'kp_index_hot_cat' => '��ҳ�������ŷ������', 'index_lanmu' => '��ҳҳ����Ŀ����', 'index_lanmu_cat' => '��ҳҳ����Ŀ�������', 'bz_room_group' => '��׼����������', 'hot_loupan_dingzhi_tuijian' => '����¥��ȫ�ݶ����Ƽ�����', 'gundong_ad_lanmu' => '����������Ŀ����', 'gundong_ad_lanmu_pic' => '����������ĿͼƬ����', 'quanwu_lanmu_cat' => '��ҳȫ�ݶ��ƶ����������', 'tiyan_pic' => 'ƻ��Ӧ��������Ƭ����', 'tiyan_pic_detail' => 'ƻ��Ӧ��������Ƭ������Ƭ����', 'soft_api_tongji' => '���api����ͳ�ƹ���', 'tuiguang_team' => '�ƹ��Ŷӹ���', 'kefu_team' => '�ͷ��Ŷӹ���', 'baidu_zz_group' => 'ͳ�Ƹ�������ʹ���', 'baidu_zz_type' => 'ͳ�Ƹ������͹���', 'baidu_zz_cat' => 'ͳ�Ƹ��ٷ������', 'baidu_zz_keyword' => 'ͳ�Ƹ��ٹؼ��ʹ���', 'showhome_apply' => '���껪���뺯����', 'showhome_apply_pic' => '���껪���뺯�ϴ���ͼ����', 'showhome_article' => '���껪ͼƬ�б����', 'zhixiao_team_week_shoukuan_record' => '�Ŷ����տ��¼����', 'zhixiao_user_week_shoukuan_record' => '�������տ��¼����', 'weike_ofroom' => '���ͷ����������', 'baidu_word_cat' => '�ʸ�������', 'baidu_word' => '�ʸ�����', 'baidu_key' => '�ؼ��ʹ���', 'taocan_fengge' => '�ײͷ����������', 'soft_shouji_zuhe' => '����ռ����ͳ�ƹ���', 'baidu_jihua_danyuan' => '�ٶȼƻ���Ԫ����', 'taocan_jiajuxiu_record' => '�ײ����üҾ����¼����', 'baidu_jihua_danyuan_zuhe' => '�ٶȼƻ���Ԫ��Ϸ�ʽ����', 'taocan_designer' => '�ײ����ʦ����', 'taocan_designer_index' => '�ײͷ������ʦ����', 'taocan_fengge_des' => '�ײͶ�Ӧ�����ܹ���', 'taocan_fangxing_fengge' => '�ײͶ�Ӧ���ͷ����ܹ���', 'bbs_index_pic' => '��̳��ҳͼƬ����', 'bbs_index_article' => '��̳��ҳ�����Ƽ�����', 'yx_yeji_phone' => 'ÿ����Ҫ��ҵ�����ŵ��ֻ�����', 'baidu_chuangyi' => '�ٶȴ�������', 'baidu_chuangyi_index' => '�ٶȴ���������Ԫ����', 'search_hot_loupan' => '�����Ҽ�-����¥�̹���', 'search_hot_huxing' => '�����Ҽ�-���ѻ��͹���', 'search_hot_room' => '�����Ҽ�-���ѷ��͹���', 'bbs_thread_keyword' => '��̳����ؼ��ֹ���', 'fankui_liangchi_send_record' => 'ȷ������ʱ����ż�¼����', 'soft_shouji_guanzhu' => '���ʺŹ�ע����', 'bz_room_keyword' => '���͹ؼ��ʹ���', 'taocan_keyword' => '�ײ͹ؼ��ʹ���', 'weike_anli' => '����������ɰ�������', 'zhidao_search_question' => '�ٶ�֪��-���������б����', 'zhidao_luru_question' => '�ٶ�֪��-¼�������б����', 'zhidao_question_cat1' => '�ٶ�֪��-����һ���������', 'zhidao_question_cat2' => '�ٶ�֪��-��������������', 'zhidao_question_cat3' => '�ٶ�֪��-���������������', 'zhidao_huashu_cat1' => '�ٶ�֪��-����һ���������', 'zhidao_huashu_cat2' => '�ٶ�֪��-���������������', 'zhidao_huashu' => '�ٶ�֪��-��������', 'fankui_choujiang_record' => '�ͻ��齱��¼����', 'taocan_need_shenpi_record' => '�ײ�������˼�¼����', 'yx_email_read_record' => 'Ӫ��ϵͳ�ʼ����鿴��¼����', 'yx_email_open_link_record' => 'Ӫ��ϵͳ�ʼ�������վ��¼����', 'yx_email_baoming_record' => 'Ӫ��ϵͳ�ʼ�������¼����', 'yx_email_error_record' => '���ܷ��������¼����', 'yx_email_tongji' => '�ʼ�����ͳ�ƹ���', 'zhidao_user' => '�ٶ�֪��-֪��ϵͳ�ʺŹ���', 'taocan_test_upload' => '�ײ��ϴ����Թ���', 'qq_tmp' => 'QQ������ʱ��ӹ���', 'zhidao_seo_cat1' => '��վSEO-һ���������', 'zhidao_seo_cat2' => '��վSEO-�����������', 'zhidao_seo_cat3' => '��վSEO-�����������', 'zhidao_seo_luru' => '��վSEO-¼������б����', 'zhidao_seo_word' => '��վSEO-αԭ���滻�ʹ���', 'baidu_idea_tmp' => '�ٶȴ�����ʱ�����', 'zhidao_seo_user' => '��վSEO-��̳ʹ���ʺŹ���', 'app_gg' => '�¾�app-�������', 'app_pic_gg' => '�¾�app-ͼƬ������', 'taocan_542_index' => '�ײ�542��ӦЧ��ͼ��ϵ����', 'member_loupan_tongji' => '�ͻ�¥����ʱͳ�ƹ���', 'app_youhui' => '�¾�app-�Żݹ���', 'app_miaosha' => '�¾�app-��ʱ��ɱ����', 'app_feedback' => '�¾�app-�����������', 'app_order' => '�¾�app-��ɱ��������', 'weibo_search' => '΢�����ݲ�ѯ����', 'soft_code_setting' => '���������ù���', 'taocan_hot_paihang' => '�ײ�����ҳ�������й���', 'soft_chufang_kehu' => '��������������ͻ���Ϣ����', 'soft_chufang_kehu_file' => '��������������ͻ��ļ�����', 'soft_app_setting' => 'app��ʶ���ù���', 'soft_app_setting' => 'app��ʶ���ù���', 'soft_app_tuisong_record' => 'appƻ�����ͼ�¼����', 'soft_app_tuisong_detail_record' => 'appƻ��������ϸ��¼����', 'site_seo_diy' => '��վ�Զ���SEO���ù���', 'site_seo_key' => '��վSEO�滻�ʹ���', 'taocan_mianban_ku' => '�ǳ����������', 'taocan_mianban_record' => '�ǳ�����������¼����', 'no_shenpi_taocan_visit_record' => 'δ����ײͷ��ʼ�¼����', 'zx_article' => 'װ��Ƶ�����¹���', 'zx_article_cat' => 'װ��Ƶ�����·������', 'soft_guwen_kehu' => '�ƹ��ʿͻ���Ϣ����', 'custom_article' => '���Ƶ���Ƶ�����¹���', 'custom_article_cat' => '���Ƶ���Ƶ�����·������', 'custom_gg' => '���Ƶ���Ƶ��������', 'soft_guwen_article' => '�ƹ���������Ϣ����', 'j_carnival_setting' => '�Ҿ��Ź����ù���', 'taocan_des' => '�ײ���������', 'zt_lanmu' => '�ռ䶨��ר��-��Ŀ����', 'zt_detail' => '�ռ䶨��ר��-ר�����Ϲ���', 'zt_hot_tags' => '�ռ䶨��ר��-���ű�ǩ����', 'soft_guwen_fengge' => '�ƹ��ʷ���ӦͼƬ����', 'soft_guwen_price' => '�ƹ��ʼ۸��Ӧ�����', 'soft_shouji_dat' => '����ռ�data���Ϲ���', 'index_daoshu' => '��ҳ����ʱ����', 'index_daoshu_shiduan' => '��ҳ����ʱʱ�ι���', 'soft_guwen_mianji' => '�ƹ��ʿռ��������', 'dt_url_record' => '��̬��ַ��ת��¼����', 'app_down_record' => 'app����ͳ�ƹ���', 'ipad_pic_cat' => 'ipad�Ƽ�ͼƬ�������', 'ipad_pic' => 'ipad�Ƽ�ͼƬ����', 'friend_link_kongjian' => '�ռ䶨���������ӹ���', 'friend_link_fengge' => '������������ӹ���', 'friend_link_zuhe' => '��϶����������ӹ���', 'soft_pinpai_fengge' => '���Ʒ�ƶ�Ӧ������', 'yun_account_apply' => '���ʺ��������', 'taocan_center_pic_record' => '�м��ײ�ͼƬ�����¼����', 'taocan_paixu_setting' => '������Ŀ�ײ��������ù���', 'taocan_paixu_detail' => '������Ŀ�����������', 'yun_xg_account' => '��Ч��ͼ�ʺŹ���', 'yun_xg_pingjia' => '��Ч���������ݹ���', 'taocan_list_visit_record' => '��վ�б�ҳ���ʼ�¼����', 'ipad_fengxiang' => 'ipad�������ݹ���', 'hr_article_cat' => '������Ƹ-���·������', 'hr_article' => '������Ƹ-���¹���', 'hr_banner_cat' => '������Ƹ-banner�������', 'hr_banner' => '������Ƹ-banner����', 'hr_zhiwei1_cat' => '������Ƹ-У԰ְλ�������', 'hr_zhiwei1' => '������Ƹ-У԰ְλ����', 'hr_zhiwei1_index' => '������Ƹ-У԰�˲ſ����', 'hr_zhiwei2_cat' => '������Ƹ-���ְλ�������', 'hr_zhiwei2' => '������Ƹ-���ְλ����', 'hr_zhiwei2_index' => '������Ƹ-����˲ſ����', 'hr_user' => '������Ƹ-�û�����', 'hr_jianli' => '������Ƹ-�û���������', 'hr_jianli_gzjl' => '������Ƹ-�û�����-������������', 'hr_jianli_jybj' => '������Ƹ-�û�����-������ѵ��������', 'hr_jianli_file' => '������Ƹ-�û�����-��������', 'heka2012' => '2012����ؿ�����', 'user_guanzhu_record' => '�ͻ���ע��¼����', 'user_read_record' => '�ͻ���������¼����', 'new_search_keyword' => '��վ�����ؼ��ʹ���', 'new_search_replace_keyword' => '��վ�����滻�ؼ��ʹ���', 'new_search_record' => '��վ������¼����', 'new_search_detail_record' => '��վ������ϸ��¼����', 'new_search_chai_record' => '��վ������ִ������', 'soft_bumen1' => 'һ�������Ź���', 'soft_bumen2' => '���������Ź���', 'soft_bumen3' => '���������Ź���', 'soft_fengge_kongjian' => '���ϵ�ж�ӦƷ�ƿռ����', 'hot_dingzhi_tuijian' => '���ȶ����Ƽ�����', 'hot_dingzhi_tuijian_cat' => '���ȶ����Ƽ��������', 'homepage_make_html' => '������ҳ��̬�ļ�', 'html_auto_update_record' => '��̬�ļ��Զ����¼�¼����', 'new_search_hot_keyword' => '��վ�������Źؼ��ʹ���', 'leitai_record' => 'ֱ����̨��¼����', 'peitong_liangchi_record' => '��ͬ���߽��ȱ����', 'online_ip_check_record' => 'ʵʱIP������', 'spzptuangou_auto_update_record' => '�Ź�Ŀ¼���¼�¼����', 'bancai_tuijian_taocan_record' => '����Ƽ��ײͼ�¼����', 'taocan_bag' => '�ײʹ����Ϲ���', 'tj_need_url' => '��Ҫͳ�Ƶ���ַ����', 'new_search_zt' => '��վ����ר���б����', 'taocan_fengge_icon' => '����ӦСͼ�����', 'tj_need_url_keyword' => '��ַ�Ĺؼ��ʵ��������', 'tj_need_url_day' => '��ַÿ����������', 'tj_need_url_keyword_day' => '��ַ�Ĺؼ���ÿ����������', 'tj_site_keyword' => '��վ�ؼ��ʵ������', 'tj_site_url' => '��վ��ַ�������', 'tj_site_keyword_day' => '��վ�ؼ���ÿ��������', 'tj_site_url_day' => '��վ��ַÿ��������', 'sp_pindao_tiying' => '�ֳ�Ƶ����ɫ�����������', 'sp_pindao_fengge_taocan' => '�ֳ�Ƶ����������Ƽ��ײ͹���', 'zuhe_jd_tuijian' => '���Ƶ�����䶨���Ƽ�����', 'yigui_style_tuijian' => '�¹�Ƶ��-�����Ƽ�����', 'yigui_style_dingzhi' => '�¹�Ƶ��-��ɫ���ƹ���', 'yigui_style_fengge' => '�¹�Ƶ��-����������', 'new_search_right_gg' => '�������ұ߹�����', 'new_search_zhuti' => '�������������', 'new_search_zhuti_article' => '�������������¹���', 'new_search_zhuti_other_article' => '�������������¶�Ӧ�������¹���', 'new_search_zhuti_other_taocan' => '�������������¶�Ӧ����ͼƬ����', 'new_search_zhuti_article_record' => '�������������º�����¼����', 'wap_gg' => '�ֻ���5�����λ����', 'zt_message' => 'ר��ͻ�����������', 'new_search_zhuti_keyword_index' => '�������������¶�Ӧ���Ĺؼ��ʹ���', 'zhengti_yigui_tuijian' => '�����¹�Ƶ��-�����Ƽ�����', 'zhengti_yigui_dingzhi' => '�����¹�Ƶ��-��ɫ���ƹ���', 'zhengti_yigui_fengge' => '�����¹�Ƶ��-����������', 'dianshi_gui_tuijian' => '���ӹ�Ƶ��-�����Ƽ�����', 'dianshi_gui_dingzhi' => '���ӹ�Ƶ��-��ɫ���ƹ���', 'dianshi_gui_fengge' => '���ӹ�Ƶ��-����������', 'dingzhi_chuang_cat' => '���ƴ��������', 'dingzhi_chuang_tuijian' => '���ƴ�Ƶ��-�����Ƽ�����', 'dingzhi_chuang_dingzhi' => '���ƴ�Ƶ��-��ɫ���ƹ���', 'dingzhi_chuang_fengge' => '���ƴ�Ƶ��-����������', 'dingzhi_chuang_gongyi' => '���ƴ�Ƶ��-�������չ���', 'tg_sourse' => '�ƹ���Դ���ù���', 'member_fankui_jieshou_record' => '���տͻ���¼����', 'taobao_kefu_wangwang' => '�Ա��ͷ������Ŷ�Ӧ��ϵ����', 'taobao_kefu_zhibiao_record' => '�Ա��ͷ���ϸָ���¼����', 'taobao_ztc_record' => 'ֱͨ��Ч����¼����', 'taobao_yx_yeji_record' => '�Ա�Ӫ��ҵ�����ܼ�¼����','new_search_fangan_keyword' => '��վ���������ؼ��ʹ���' ,'new_search_fangan_replace_keyword' => '��վ���������滻�ؼ��ʹ���','new_search_article_keyword' => '��վ���������ؼ��ʹ���' ,'new_search_article_replace_keyword' => '��վ���������滻�ؼ��ʹ���' , 'seo_url_record' => '��վSEO��Դ���ù���','new_search_wuxiao_keyword' => '��վ������Ч�ʹ���','tg_site_dingzhi_banner' => '������Ƶ�����ͼƬ����', 'new_search_wenti' => '��������-�������������', 'xinju_zhidao_top_cat' => '�¾�֪��-ͷ���������·������', 'xinju_zhidao_top_article' => '�¾�֪��-ͷ���������¹���', 'xinju_zhidao_cat' => '�¾�֪��-����������', 'xinju_zhidao_question_cat' => '�¾�֪��-��Ҷ�����-�ʴ�������', 'xinju_zhidao_question' => '�¾�֪��-��Ҷ�����-ϵ���ʴ����', 'xinju_zhidao_hot_keyword' => '�¾�֪��-���ѹؼ��ʹ���', 'xinju_zhidao_hot_question' => '�¾�֪��-�����������', 'xinju_zhidao_tuijian_article' => '�¾�֪��-�ұ������Ƽ�����', 'diansys_yeji_day_record' => 'ֱ��ÿ��ҵ�����ŷ��ͼ�¼����', 'diansys_yeji_day_send_user' => 'ֱ��ÿ��ҵ�����ŷ����˹���', 'newsys_yeji_day_record' => '�ͷ�ÿ��ҵ�����ŷ��ͼ�¼����', 'newsys_yeji_day_send_user' => '�ͷ�ÿ��ҵ�����ŷ����˹���', 'tgsys_yeji_day_record' => '�ƹ�ÿ��ҵ�����ŷ��ͼ�¼����', 'tgsys_yeji_day_send_user' => '�ƹ�ÿ��ҵ�����ŷ����˹���', 'new_search_zhuiwen_record' => '��������׷�ʼ�¼����', 'gj_user_tingchi_record' => '���ʦͣ�߼�¼����', 'top_search_tuijian_keyword' => 'ͷ���������Ƽ��ʹ���', 'bottom_search_tuijian_keyword' => '�ײ������������Ƽ��ʹ���', 'yidong_index_gg' => '�ƶ���-��ҳ������', 'yidong_index_kj_link' => '�ƶ���-��ҳƵ���¿ռ����ӹ���', 'yidong_index_text_gg_link' => '�ƶ���-��ҳƵ�������ֹ�����ӹ���', 'yidong_index_quanwu_loupan' => '�ƶ���-��ҳȫ�ݶ���¥���Ƽ�����', 'company_off_record' => '��˾��ְ��Ա��¼����', 'search_form_keyword' => '������Ĭ�����ݹ���', 'zx_pindao_cuxiao' => 'װ��Ƶ������ҳ���������', 'zx_pindao_zt_tuijian' => 'װ��Ƶ����ҳ����ר�����', 'dingzhi_chuang_pingshen' => '���ƴ�-����-�������Ϲ���', 'baidu_soft_tisheng_keyword' => '�ٶ���������ؼ������ù���', 'baidu_soft_tisheng_keyword_record' => '�ٶ���������ؼ��ʼ�¼����', 'baidu_soft_tisheng_keyword_fenpei_record' => '�ٶ���������ؼ��ʷ����¼����', 'tuijian_new_huodong' => '�Ƽ������Żݻ����', 'diansys_yeji_week_send_user' => 'ֱ��ÿ��ҵ�����ŷ����˹���', 'diansys_yeji_week_record' => 'ֱ��ÿ��ҵ�����ż�¼����', 'chufang_fengge_index' => '��������Ӧ��ϵ����', 'zhixiao_yun_tongji' => 'ֱ���ƹ���ͳ�ƹ���', 'search_tongji_day_record' => '�����������ŷ��ͼ�¼����', 'search_tongji_day_send_user' => '�����������ŷ����˹���', 'site_tongji_pindao_url' => '��վƵ��ͳ����ַ����', 'site_tongji_pindao_url_record' => '��վƵ��ͳ����ַ��¼����', 'dingzhi_shili' => '2013���ư�������', 'dingzhi_shili_ds' => '2013���ư����ڶ������', 'dingzhi_shili_room' => '2013���ư������������', 'dingzhi_shili_tuijian' => '2013���ư����Ƽ�����',  'tongji_yuan' => '��վ����ҳ��ͳ��-Դ�������', 'tongji_yuan_url' => '��վ����ҳ��ͳ��-��ַ�������', 'tongji_yuan_data' => '��վ����ҳ��ͳ��-���ݹ������', 'list_search_hot_keyword' => '�б��������Ŵʹ���', 'search_hot_question' => '���������������', 'xc_choujiang_setting' => '�ֳ��齱���ù���', 'xc_choujiang_phone' => '�ֳ��齱�ֻ�������д����', 'cj_wenti_tiyan' => '��������-�������������', 'cj_wenti_zhixiao' => 'ֱ��Ƶ��-�������������', 'cj_wenti_quanwu' => 'ȫ��Ƶ��-�������������', 'hr_mail' => '�˲�-�ʼ���¼����', 'index_kp_gg' => '��ҳ������-������', 'index_kp_rexiao_link' => '��ҳ������-������Ʒ�ұ��������ӹ���', 'index_kp_rexiao_center' => '��ҳ������-������Ʒ��ͼ���ݹ���', 'index_kp_rexiao_bottom' => '��ҳ������-������ƷСͼ���ݹ���', 'index_kp_fengge_cat' => '��ҳ������-����ٵ���߷������', 'index_kp_fengge_pic' => '��ҳ������-����ٵ�ͼƬ����', 'index_kp_quanwu_pic' => '��ҳ������-ȫ�ݴ���ͼƬ����', 'index_kp_baibian_pic' => '��ҳ�������լ����-�ٱ�ռ�ͼƬ����', 'index_kp_shipai' => '��ҳ������-����ʵ�Ĺ���', 'zt_go_setting' => 'ר����ת���ù���', 'bbs_list_gg' => '��̳�б�ҳ������', 'list_kp_dingzhi_paihang' => '�����б�ҳ-�������й���', 'list_kp_xinpin_tuijian' => '�����б�ҳ-��Ʒ�Ƽ�����', 'list_kp_jiaju_shipai' => '�����б�ҳ-���ѼҾ�ʵ�Ĺ���', 'list_kp_hot_search' => '�����б�ҳ-�������ѹؼ��ʹ���', 'list_kp_bottom_pic' => '�����б�ҳ-�ײ�ͼƬ���ݹ���', 'pic_index_hot_pic' => 'ͼ��Ƶ����ҳ-����װ��Ч��ͼ����', 'zhixiao_sheji_zhuli' => 'ֱ������������', 'index_kuan_zai_gg' => '��ҳͷ��(�¾ӿ챨����)����-խ��ͼƬ����', 'index_kuan_right_gg' => '��ҳͷ�������ұ߹��ͼƬ����', 'index_dingzhi_daren_right_gg' => '��ҳ���ƴ����ұ߹��ͼƬ����', 'index_baibian_tuijian' => '��ҳ�ٱ䶨�Ʒ����Ƽ�����', 'kp_list_header_gg' => '�����б�ҳͷ��������', 'zhixiao_chengjiao_lv_pk_setting' => 'ֱ���ɽ������PK���ù���', 'kp_index_gg' => '������ҳ���ͼ����', 'admin_check_record' => '����Ա�ʺż���¼����', 'index_dingzhi_daren_gg' => '��ҳ�ײ����ƴ������ݹ���', 'kp_kj_pindao_gg' => '�°�ռ�Ƶ��ҳ������', 'kp_kj_pindao_baibian' => '�°�ռ�Ƶ��ҳ�ٱ���Ŀ����', 'kp_kj_pindao_daogou' => '�°�ռ�Ƶ��ҳ���Ƶ�������', 'kp_kj_pindao_hot_search' => '�°�ռ�Ƶ��ҳ���ѹؼ��ʹ���', 'kp_kj_pindao_xiu' => '�°�ռ�Ƶ��ҳ�����㳡����', 'kp_kj_pindao_gexing' => '�°�ռ�Ƶ��ҳ���Զ��ƹ���', 'kp_list_hot_tuijian' => '�°��б�ҳ���ȶ����Ƽ�����', 'kp_kongjian_lanmu_tuijian' => '�°�ռ�Ƶ������Ŀ�Ƽ����ӹ���', 'kp_gndz_tuijian' => '�°���ҳ���ܶ��Ʒ����Ƽ�����', 'kp_baibian_dingzhi' => '�°���ҳ�ٱ䶨�ƹ���', 'kp_baibian_dingzhi_detail' => '�°���ҳ�ٱ䶨�ƶ�ӦͼƬ����', 'kp_quanwu_right_gg' => '�°���ҳȫ�ݶ����ұ߹�����', 'kp_gndz_search' => '�°���ҳ���ܶ��������Ƽ�����', 'kp_guodu_dingzhi' => '�°����ҳ��ɫ����ר�����', 'chat_keyword_cat' => '�����¼�ؼ��ʷ������', 'chat_keyword' => '�����¼�ؼ��ʹ���', 'chat_keyword_day_record' => '�����¼�ؼ���ÿ��ͳ�ƹ���', 'chat_day_record' => '�����¼ÿ��ͳ�ƹ���', 'jiaju_diy_bancai' => '�Ҿ�DIY�����-��Ŀ����', 'jiaju_diy_qiangmian' => '�Ҿ�DIY�����-ǽ������', 'jiaju_diy_dimian' => '�Ҿ�DIY�����-��������', 'jiaju_diy_record' => '�Ҿ�DIY�����-�ײͼ�¼����', 'jiaju_diy_xg_record' => '�Ҿ�DIY�����-Ч��ͼ��¼����', 'site_channel_static_list' => '��վƵ��ת��̬ҳ�����', 'fankui_wufa_fenpei_sms_record' => '�ͻ��޷�������ż�¼����', 'keyword_talk_index' => '�ؼ��ʶ�Ӧ�������ݹ���', 'zx_url_tags' => 'װ��Ƶ����ǩ����', 'weixin_question' => '΢��Ȥζ�ʴ����', 'zx_tags' => 'װ��Ƶ����ǩ����', 'weixin_choujiang' => '΢�ų齱��¼����', 'dingzhi2013_article' => '���ƹ���2013���¹���', 'dingzhi2013_gg' => '���ƹ���2013ͼƬ������', 'pindao_diy_gg' => '�Ҿ�DIY�ұ߹��ͼ����', 'zhixiao_kaoti_cat' => 'ֱ������������', 'zhxiao_kaoti' => 'ֱ����������', 'zhxiao_kaoti_xuanxian' => 'ֱ�������ѡ�����', 'zhixiao_kaoti_user' => 'ֱ�������û����Ϲ���', 'zhixiao_kaoti_record' => 'ֱ��������Լ�¼����', 'zhixiao_kaoti_detail_record' => 'ֱ�����������ϸ��¼����', 'weixin_menu' => '΢���Զ���˵�����', 'weixin_submenu' => '΢���Զ����Ӳ˵�����', 'tuiguang_team_zutuan' => '�ƹ��Ŷ����Ź���', 'chahuahui_zhuti' => '�軰���������', 'chahuahui_baoming_record' => '�軰�ᱨ����¼����', 'dd_fangan_ma_record' => '����ϵͳ�����������¼����', 'weixin_talk_record' => '΢�������¼����', 'pk_laokehu_record' => '�¾�E��PK���Ͽͻ����ܼ�¼����', 'wayes_index_pic' => 'ά����ҳͼƬ����', 'woxiu_record' => '�����Ҽ�-��¼����', 'woxiu_keyword' => '�����Ҽ�-��ǩ����', 'woxiu_pic_record' => '�����Ҽ�-ͼƬ��¼����', 'woxiu_pl_record' => '�����Ҽ�-���ۼ�¼����', 'woxiu_good_record' => '�����Ҽ�-ϲ����¼����', 'huodong_baodao' => '���������', 'huodong_baodao_detail' => '��������ܹ���', 'huodong_baodao_pic' => '�����ͼƬ����', 'huodong_baodao_detail3' => '��������������ܹ���', 'soft_back_url' => '�����¼������ַ���ù���', 'soft_shop_api_record' => '������Ϣͬ���ӿڼ�¼����', 'weike_sheji_anli' => '�������ʦ-��ư�������', 'weike_sheji_anli_pl_record' => '�������ʦ-��ư���-���ۼ�¼����', 'weike_sheji_anli_good_record' => '�������ʦ-��ư���-ϲ����¼����', 'weike_index_gg' => '���ʦƵ����ҳ������', 'pindao_tags' => '���ռ�Ƶ����ǩ����', 'product_jd_tuijian' => '����ҳ���䶨���Ƽ�����', 'fengge_taocan_tuijian_1' => '�Է��Ҿ߶�����Ŀ����ײ͹���', 'fengge_taocan_tuijian_2' => '�鷿�Ҿ߶�����Ŀ����ײ͹���', 'fengge_taocan_tuijian_6' => '�����귿�Ҿ߶�����Ŀ����ײ͹���', 'fengge_taocan_tuijian_8' => '�Ͳ����Ҿ߶�����Ŀ����ײ͹���', 'fengge_taocan_tuijian_7' => '�����Ҿ߶�����Ŀ����ײ͹���', 'fengge_taocan_tuijian_10' => 'ȫ�ݶ�����Ŀ�ײ͹���', 'index_week_tuijian' => '��ҳ�����Ƽ�����', 'baidu_account_sale_record' => '�ٶ��ʺ�ÿ�����Ѽ�¼����', 'app_index_kj_pic' => '�¾�app-��ҳ�ռ�ͼƬ����', 'taocan_cat_pic_record' => '�ײ���Ϸ��෽��ͼƬ��¼����', 'sp_pindao_fengge_tuijian' => '�ֳ�Ƶ����������Ƽ�����', 'search_top_setting' => '���������ö����ù���', 'tg_kefu_record_show' => '���ߵ���ÿ�������¼����', 'kj_list_guanzhu_record' => '�б�ҳ��ע���а����', 'taocan_pic_tag_cat' => '�ײ�Ч��ͼ��ǩ�������', 'taocan_pic_tag' => '�ײ�Ч��ͼ��ǩ����', 'taocan_pic_set_tag' => '�ײ�Ч��ͼ���ñ�ǩ����', 'site_test_url' => '��վ�������ַ����', 'site_test_url_record' => '��վ������ַ��¼����', 'fengge_ceshi_cat' => '������-������', 'fengge_ceshi_pic' => '������-ͼƬ����', 'fengge_ceshi_pfen' => '������-���ֹ���', 'zy_talk_record' => '�绰רԱ��ͨ��¼����', 'wangwang_talk_record' => '���������¼�����', 'wangwang_fuwu' => '����������������', 'sj2013_index_banner' => '�ֻ�����վ-��ҳ�ֲ�ͼ����', 'sj2013_index_hot' => '�ֻ�����վ-��ҳ������Ŀ����', 'sj2013_index_room1' => '�ֻ�����վ-��ҳ�Է���Ŀ����', 'sj2013_index_room2' => '�ֻ�����վ-��ҳ�鷿��Ŀ����', 'sj2013_index_room3' => '�ֻ�����վ-��ҳ�����귿��Ŀ����', 'sj2013_index_room4' => '�ֻ�����վ-��ҳ�Ͳ�����Ŀ����', 'sj2013_index_room5' => '�ֻ�����վ-��ҳ������Ŀ����', 'sj2013_list_keyword' => '�ֻ�����վ-�б�ҳͷ���ؼ��ֹ���', 'wangwang_city' => '����������й���', 'kefu_kaoti_bigcat' => '�ͷ������������','kefu_kaoti_cat' => '�ͷ�����������' ,'kefu_kaoti_user' => '�ͷ������û����Ϲ���' ,'kefu_kaoti_record' => '�ͷ�������Լ�¼����' ,'kefu_kaoti_detail_record' => '�ͷ����������ϸ��¼����','kefu_kaoti' => 'ֱ����������' ,'kefu_kaoti_xuanxian' => 'ֱ�������ѡ�����', 'wangwang_shop_talk_record' => '��������ר�����¼�����', 'designer_fangan_sms_record' => '���ʦ�������ż�¼����', 'tg_sourse_xiaofei_record' => '�ƹ���Դÿ�����Ѽ�¼����', 'index2013_dingzhi' => '�°���ҳ-ͷ��������Ŀ����', 'index2013_gn_dingzhi' => '�°���ҳ-���ܶ�����Ŀ����', 'index2013_fg_sudi' => '�°���ҳ-����ٵ���Ŀ����', 'index2013_hot_dingzhi' => '�°���ҳ-����������Ŀ����', 'index2013_baibian_article' => '�°���ҳ-�ٱ䶨����Ŀ�ұ����¹���', 'index2013_quanwu_left' => '�°���ҳ-ȫ�ݶ�����Ŀ����Ƽ�¥�̹���', 'index2013_quanwu_left_article' => '�°���ҳ-ȫ�ݶ�����Ŀ����Ƽ����¹���', 'index2013_quanwu_gg' => '�°���ҳ-ȫ�ݶ�����Ŀ������', 'index2013_gg' => '�°���ҳ-ͷ��������', 'index2013_baibian_gg' => '�°���ҳ-�ٱ䶨����Ŀ�ұ߹�����', 'bbs_taolun_record' => '��̳-��Ҷ������۹���', 'weixin_talk_liucheng_setting' => '΢�Ź�ͨ�������ù���', 'weixin_user_ext' => '΢���û�������Ϣ����', 'weixin_dengji_designer_record' => '΢�ŵǼ����ʦ���̼�¼����', 'weixin_dengji_kehu_record' => '΢�ŵǼǿͻ����̼�¼����', 'weixin_fuwu_chat_record' => '΢�ŷ���ŶԻ���¼����', 'kp_gndz_search_new' => '�°���ҳ���ܶ��������Ƽ�-�¹���', 'weixin_changjing_record' => '΢�ų�����¼����', 'weixin_fuwu_user' => '΢�ŷ�����û������', 'right_zx_new_huodong' => '�Ҳ�������ѯ�ϵ����»����', 'nh_weixin_fuwu_user' => '���΢�ŷ�����û������', 'nh_weixin_fuwu_user_piao' => '���΢�ŷ�����û���-Ư��ƿ��¼����', 'nh_weixin_menu' => '���΢�Ų˵�����', 'nh_weixin_baodao' => '���΢�ű������ݹ���', 'nh_weixin_send' => '���΢���������ݹ���', 'nh_weixin_send_record' => '���΢�����ͼ�¼����', 'nh_weixin_piao' => '���΢��Ư��ƿ���ݹ���', 'nh_weixin_piao_get_record' => '���΢��Ư��ƿ�һ�ȡ�ļ�¼����', 'nh_weixin_piao_talk_record' => '���΢��Ư��ƿ��ͨ��¼����', 'nh_weixin_choujiang' => '���΢��ģ��齱����', 'nh_weixin_zhuanfa' => '���΢��ת�����ݹ���', 'nh_weixin_zhuanfa_record' => '���΢��ת����¼����', 'nh_weixin_jiemu' => '���΢�Ž�Ŀ���ݹ���', 'nh_weixin_vote_record' => '���΢�Ž�ĿͶƱ��¼����', 'nh_weixin_vote_setting' => '���΢�Ž�ĿͶƱ�������ù���', 'nh_weixin_fuwu_user_guanzhu' => '���΢�ŷ�����û���ע����', 'nh_weixin_yao_setting' => '���΢��ҡһҡ�������ù���', 'baike' => '�¾Ӱٿƹ���', 'hd_zhuanti' => '�ר�����', 'set_fav_record' => 'sem�ղ�ͳ�ƹ���', 'sem_email_record' => 'sem�����������', 'wayes_taocan_fengge' => 'ά���ײͷ�����', 'wayes_jiaju_diy_bancai' => 'ά��Ҿ�DIY�����-��Ŀ����', 'wayes_jiaju_diy_qiangmian' => 'ά��Ҿ�DIY�����-ǽ������', 'wayes_jiaju_diy_dimian' => 'ά��Ҿ�DIY�����-��������', 'wayes_jiaju_diy_record' => 'ά��Ҿ�DIY�����-�ײͼ�¼����', 'wayes_jiaju_diy_xg_record' => 'ά��Ҿ�DIY�����-Ч��ͼ��¼����', 'wayes_index_banner' => 'ά����ҳbanner������', 'wayes_index_jidu_hot' => 'ά����ҳ�����ȿ����', 'wayes_index_tehui' => 'ά����ҳ��ʱ�ػݹ���', 'wayes_index_news' => 'ά����ҳ�����ٵݹ���', 'wayes_designer' => 'ά�⾫Ӣ���ʦ����', 'wayes_index_dingzhi' => 'ά����ҳ��ѡ���ƹ���', 'wayes_index_dingzhi_right' => 'ά����ҳ��ѡ�����ұ߹�����', 'wayes_index_dingzhi_bottom' => 'ά����ҳ��ѡ���Ƶײ�������', 'wayes_index_jiaju_daogou' => 'ά����ҳ�Ҿߵ�������', 'wayes_index_sai_jia' => 'ά����ҳ����ɹ�ҹ���', 'wayes_index_wenti' => 'ά����ҳ�����������', 'wayes_index_bottom_banner' => 'ά����ҳ�ײ�banner������', 'wayes_index_bottom_article' => 'ά����ҳ�ײ����¹���', 'wayes_dingzhi_gushi' => 'ά�ⶨ�ƹ���-��¼����', 'wayes_dingzhi_gushi_room' => 'ά�ⶨ�ƹ���-�������', 'wayes_dingzhi_gushi_room_xg' => 'ά�ⶨ�ƹ���-������ҳЧ��ͼ����', 'wayes_dingzhi_gushi_room_detail' => 'ά�ⶨ�ƹ���-�����������', 'wayes_dingzhi_gushi_buy_record' => 'ά�ⶨ�ƹ���-�������̹���', 'wayes_dingzhi_gushi_buy_record_detail' => 'ά�ⶨ�ƹ���-���������������', 'wayes_dingzhi_gushi_designer' => 'ά�ⶨ�ƹ���-���ʦ�Ŷӹ���', 'wayes_dingzhi_gushi_pl' => 'ά�ⶨ�ƹ���-���۹���', 'wayes_dingzhi_gushi_zt' => 'ά�ⶨ�ƹ���-ר���Ƽ�����', 'wayes_dingzhi_gushi_banner' => 'ά�ⶨ�ƹ���-ͷ��banner����', 'wayes_remai' => 'ά������ҳ�����������', 'wayes_zhan_pai' => 'ά������ҳ�������й���', 'wayes_hot_keyword' => 'ά������ҳ���Źؼ��ʹ���', 'wayes_list_gg' => 'ά���б�ҳ������', 'wayes_taocan_type' => 'ά���ײ����͹���', 'loupan_price_ku' => '¥��¥��������', 'quyu_price_ku' => '����¥��������', 'wayes_tiyan_lunbo' => 'ά�����������ֲ�ͼ����', 'yx2014_choujiang_user' => '2014Ԫ���齱����Ϣ����', 'yx2014_choujiang_miti' => '2014Ԫ��������Ϣ����', 'yx2014_choujiang_setting' => '2014Ԫ��������Ϣ����', 'xinju_weixin_fuwu_user' => '�¾Ӻ�̨΢���û������', 'sem2014_zt_jiangpin' => '2014SEMר�⽱Ʒ����', 'sem2014_zt_chou_record' => '2014SEMר��齱��¼����', 'wayes_taocan_fengge_room_xg' => 'ά���ײͷ�񷿼�Ч��ͼ����', 'designer_pj_record' => '���ʦ������ʱ�����', 'designer_zhongdian_gj_record' => '���ʦ�ͻ��ص������¼����', 'loupan_zhongdian_gj_record' => '¥�̿ͻ��ص������¼����', 'jindian_kehu_record' => '����ͻ���¼����', 'qq2014_zt_tuijian_record' => '2014QQר���Ƽ���¼����', 'zt_shengqing_talk_record' => '����Ի���¼����', 'fankui_kehu_loupan' => '�ͻ���¥����Ϣ�ռ�����', 'weixin_user_jiangpin_list' => '��Ʒ�б����', 'weixin_user_jieduan' => '�׶α����', 'weixin_user_zj_list' => '�û��н��б����', 'weixin_user_zj_list' => '�û��н��б����', 'weixin_user_oldfriend_list' => '���ѿ��б����', 'weixin_user_designer_list' => '���ʦ�б����', 'weixin_user_designer_pj_list' => '�ͻ������ʦ���۱����', 'phone_server_send_record' => '�ֻ�����˷��Ͷ��ż�¼����', 'xinju2014_weixin_user' => '�¾�2014΢���û������', 'xinju2014_weixin_chat_record' => '�¾�2014΢�ŶԻ���¼����', 'xinju2014_weixin_kefu_admin' => '�¾�2014΢�ſͷ�����Ա����', 'xinju2014_weixin_kefu_talk_record' => '�¾�2014΢�ſͷ���ͨ��¼����', 'xinju2014_fankui_type' => '�¾�2014΢�ſͻ�״̬����', 'xinju2014_weixin_fenpei_record' => '�¾�2014΢�ŷ���ͻ����Ѽ�¼����', 'weixinsys_zuijin_xianshanghuodong' => '�ֻ�΢��������ϻ���ݱ����', 'search_fk_record' => '�������鷴����¼����', 'xinju_app_record' => '�¾�app�������', 'xinju2014_weixin_yuyinku_record' => '�¾�2014΢���������¼����', 'search_article_yuangong_answer_record' => '��������Ա���ش��¼����', 'soft_shouji_kehuhao_record' => '�����ռ��ͻ��ż�¼����', 'xinju2014_weixin_qufa_des' => '�¾�2014΢��Ⱥ��ͼ�����ݹ���', 'xinju2014_weixin_huashu_record' => '�¾�2014΢�Ż������¼����', 'baidu_url_zhua_record' => '�ٶ���ַץȡ��¼����','xinju2014_weibo_user' => '�¾�2014΢���û������' ,'xinju2014_weibo_chat_record' => '�¾�2014΢���Ի���¼����' ,'xinju2014_weibo_kefu_admin' => '�¾�2014΢���ͷ�����Ա����' ,'xinju2014_weibo_kefu_talk_record' => '�¾�2014΢���ͷ���ͨ��¼����' ,'xinju2014_weibo_fenpei_record' => '�¾�2014΢������ͻ����Ѽ�¼����' ,'xinju2014_weibo_yuyinku_record' => '�¾�2014΢���������¼����' ,'xinju2014_weibo_huashu_record' => '�¾�2014΢���������¼����' ,'xinju2014_weibo_qufa_des' => '�¾�2014΢��Ⱥ��ͼ�����ݹ���','xinju2000_weixin_user' => '�����΢���û������' ,'xinju2000_weixin_chat_record' => '�����΢�ŶԻ���¼����' ,'xinju2000_weixin_kefu_admin' => '�����΢�ſͷ�����Ա����' ,'xinju2000_weixin_kefu_talk_record' => '�����΢�ſͷ���ͨ��¼����' ,'xinju2000_fankui_type' => '�����΢�ſͻ�״̬����' ,'xinju2000_weixin_fenpei_record' => '�����΢�ŷ���ͻ����Ѽ�¼����' ,'xinju2000_weixin_yuyinku_record' => '�����΢���������¼����' ,'xinju2000_weixin_huashu_record' => '�����΢�Ż������¼����' ,'xinju2000_weixin_qufa_des' => '�����΢��Ⱥ��ͼ�����ݹ���', 'weixin_shangyouyinxiang_dianping' => '΢������ӡ���������', 'tuangou201404_huodong_tongji' => '201404�Ź��ͳ�ƹ���', 'weixin_jiashu_fuwu_user' => '΢�ż���E���û������', 'jiaohu_keyword' => '����ʽ��ƹؼ��ʹ���', 'kj_dz_yinan' => '���ܶ��ƿռ��������', 'zx_daogou_reboot_tq_record' => '���ߵ�������TQ��������¼����', 'index2014_jidu_fengshan' => '��ҳ���ȷ��б������', 'shipin_gg_baoming_record' => '��Ƶ��汨���ͻ���¼����', 'xinju2000_weixin_menu' => '�¾ӷ����΢���Զ���˵�����', 'xinju2000_weixin_menu_info' => '�¾ӷ����΢���Զ���˵����ݹ���', 'weixin_yx_mission' => '�¾ӷ����΢��Ⱥ���������ݹ���', 'weixin_yx_mission_record' => '�¾ӷ����΢��Ӫ���������м�¼����', 'weixin_yx_record' => '�¾ӷ����΢��Ӫ�������¼����', 'yuying_fenzu_type' => 'ͶƱ�������͹���', 'yuying_sheji_zuopin' => '��Ӫ�������Ʒ����', 'yuying_sheji_zuopin_vote' => '��Ӫ�������ƷͶƱ��¼����', 'tuangou20140501_choujiang_huodong' => '2014��һ�齱�ͳ�ƹ������', 'tuangou20140501_choujiang_setting' => '2014��һ�齱����ù������', 'xinju_baike' => '�¾Ӱٿƹ���', 'xinju2000_weixin_cg_record' => '�¾ӷ�������ϴ��ؼ�¼����', 'wm_campaign' => '�����ƹ�ƻ�����', 'wm_group' => '�����ƹ������', 'wm_idea' => '���˴������', 'wm_keyword' => '���˹ؼ��ʹ���', 'qq_renzheng_space_collect' => '��֤�ռ�QQ�����Ѽ��������', 'xinju2000_weixin_zp_record' => '�¾ӷ����ת�̼�¼�����', 'search_static_html_record' => '����������̬�ļ���¼����', 'zx_click_record' => '������ѯ�����¼����', 'zt_huashu_setting' => 'ר�⻰�����ù���', 'search_check_admin' => '�������������Ա����', 'search_check_record' => '������������¼����', '2014mother_day_huodong' => 'ĸ�׽������������', 'mhomekoo_visit_detail' => '�ֻ���վ��ť���������', 'xinju2000_gaoji_qunfa_record' => '����Ÿ߼�Ⱥ����¼����', 'xinju2000_gaoji_qunfa_version' => '����Ÿ߼�Ⱥ���汾����', 'xinju2000_gaoji_qunfa_index' => '����Ÿ߼�Ⱥ���汾�زĹ�������', 'xinju2000_gaoji_qunfa_sucai' => '����Ÿ߼�Ⱥ���汾�زĹ���', 'xinju2000_gaoji_qunfa_send_record' => '����Ÿ߼�Ⱥ�����ͼ�¼����', 'zhixiao_liucheng_article' => 'ֱ�������ĵ�����', 'zhixiao_liucheng_page' => 'ֱ������ҳ�����', 'xinju2000_weixin_fgcs_record' => '�¾ӷ���ŷ����Լ�¼�����', 'weixin_jiashu_lipin' => '΢�ż���Ⱥ������Ʒ����', 'caixin_send_tpl' => '���ŷ���ģ�����', 'caixin_send_record' => '���ŷ��ͼ�¼����', 'zhixiao_liucheng_page_pl' => 'ֱ������ҳ�����۹���', 'zhixiao_liucheng_page_fav' => 'ֱ������ҳ���ղع���', 'tg_huizong_sourse' => '�ƹ������Դ���ù���', 'xinju2000_weixin_baoming_type' => '΢�ŷ���ű���ԭ�����', 'xinju2000_weixin_bu_baoming_type' => '΢�ŷ����δ����ԭ�����', 'new_search_zhuti_cat' => '����������������', 'shop_tuijian_taocan' => '�ŵ��Ƽ��ײ͹���', 'zhixiao_liucheng_news' => 'ֱ���������¹���', 'zt_free_design' => 'ר��������ʦ�������', 'xinju2000_weixin_dcwj_record' => '�¾ӷ���ŵ����ʾ��¼�����', 'tuangou20140630_choujiang_huodong' => 'ר��齱20140630����', 'yd_top_search_tuijian_keyword' => '�ƶ�ͷ���������Ƽ��ʹ���', 'xinju2000_weixin_dyfl_record' => '�¾ӷ���Ŷ��ķ����¼�����', 'xinju2000_weixin_hanlou_record' => '�¾ӷ���ź�¥���¼�����', 'weixin_robot_other_huashu' => '΢�ŷ����ģ�⻰������', 'xinju2000_weixin_groups' => '�¾ӷ�����û���������', 'yuying_jinying_person' => '��Ӫ����ӥ����Ա����', 'yuying_jinying_pic' => '��Ӫ����ӥ��ͼƬ����', 'tuangou20140701_choujiang_huodong' => 'ר��齱20140701ͳ�ƹ���', 'xinju2000_weixin_zhuanfa_record' => '�¾ӷ��������ת����¼����', 'xinju2000_weixin_huashu_type' => '�¾ӷ���Ż�����������', 'index2014_cat_gg' => '��ҳ�ռ������ͼ�������', 'taocan_new_dafen_record' => '�ײ��´�ּ�¼', 'xinju2000_tg_xiaofei_record' => '΢���ƹ����Ѽ�¼����', 'erweima_pic' => '��ά��ͼƬ����', 'member_fankui_tixing_record' => '�������ѹ���', 'summer_children_zhanzuo_management' => '���ڶ�ͯ��ר��ռ���������', 'index_left_kongjian_type' => '��ҳ������пռ�������͹���', 'index_left_kongjian_type_management' => '��ҳ������пռ�������͹���', 'xinju2000_zp_record' => '�¾���Ƹҳ�汨����¼����', 'tuangou20140801_choujiang_huodong' => 'ר��齱20140801ͳ�ƹ������', 'zhanlue_wenjuan_record' => '����ս������ʾ�-��¼����', 'zhanlue_wenjuan_cat' => '����ս������ʾ�-��������', 'zhanlue_wenjuan_question' => '����ս������ʾ�-�������', 'zhanlue_wenjuan_detail_record' => '����ս������ʾ�-��ϸ��¼����', 'xinju2000_weixin_7x_record' => '�¾ӷ����΢����Ϧ�ڻ��¼�����', 'jm_city_record' => '���˳��м�¼����', 'xinju2000_weixin_shan_record' => '�¾ӷ����΢�������ӻ��¼�����', 'pl_set_gj_kehu_record' => '�������������пͻ��������ͷ���¼����', 'xinju2000_weixin_tuisong_huashu' => '΢���������ͻ�������', 'zuoxi400_pic' => '�ƹ��ʺ�ͷ���ϴ�����', 'fankui_liangchi_reason_type' => '�ͻ��޸ļƻ�����ʱ��ԭ�����', 'tq_kefu' => 'TQ�ͷ����Ϲ���', 'open_city_setting' => '��ͨ�������Ϲ���', 'hr_zhaopin_user' => 'hrԱ����Ϣ����', 'hr_peixun_record' => 'hr��ѵ�γ̼�¼����', 'hr_user_peixun_record' => 'hrԱ����ѵ��¼����', 'hr_guanxi_record' => 'hrԱ����ϵ��¼����', 'hr_ruzhi_record' => 'hr��ְ��ϸ��¼����', 'hr_bulai_record' => 'hr¼��������¼����', 'hr_lizhi_record' => 'hr��ְ��ϸ��¼����', 'hr_fushi_bulai_record' => 'hr����ͨ��������¼����', 'kefu_liucheng_cat' => '�ͷ����̽�ѧ�������', 'kefu_liucheng_page' => '�ͷ����̽�ѧ�ĵ�����', 'kefu_liucheng_page' => '�ͷ����̽�ѧ�ĵ�����', 'kongjian_fengge_setting' => '�ռ��Ӧ������ù���', 'xinju2000_weixin_stop_city_tuisong_setting' => '΢����ͣ�������������ù���', 'baidufeed_goods_management' => '�ٶ�΢���ƹ���Ʒ��Ϣ�������', 'tuangou20140901_choujiang_huodong' => 'ר��齱20140901ͳ�ƹ���������','zhixiao_fankui_type' => '�����΢�ſͻ�״̬����' ,'zhixiao_weixin_user' => '�����΢���û������'  ,'zhixiao_weixin_chat_record' => '�����΢�ŶԻ���¼����' ,'zhixiao_weixin_fenpei_record' => '�����΢�ŷ���ͻ����Ѽ�¼����' ,'zhixiao_weixin_fenpei_tixing_record' => '' ,'zhixiao_weixin_yuyinku_record' => '�����΢���������¼����' ,'zhixiao_weixin_huashu_type' => '�¾ӷ���Ż�����������' ,'zhixiao_weixin_huashu_record' => '�����΢�Ż������¼����' ,'zhixiao_weixin_qufa_des' => '�����΢��Ⱥ��ͼ�����ݹ���' ,'zhixiao_weixin_menu' => '�¾ӷ����΢���Զ���˵�����' ,'zhixiao_weixin_menu_info' => '�¾ӷ����΢���Զ���˵����ݹ���' ,'zhixiao_weixin_kefu_talk_record' => '�����΢�ſͷ���ͨ��¼����' ,'zhixiao_weixin_city_tuisong_record' => '' ,'zhixiao_weixin_stop_city_tuisong_setting' => '΢����ͣ�������������ù���' ,'zhixiao_weixin_groups' => '�¾ӷ�����û���������' ,'zhixiao_weixin_tuisong_huashu' => '΢���������ͻ�������' ,'zhixiao_weixin_zhuanfa_record' => '�¾ӷ��������ת����¼����','zhixiao_weixin_kefu_admin' => '�����΢�ſͷ�����Ա����', 'tg_pl_baoming_record' => '�ƹ������ύ������¼����', 'xinju2000_weixin_xiaowei_xx_record' => '�¾ӷ����Сޱ�����������Թ���', 'zhixiao_weixin_zhenduan_mokuan' => 'ֱ��΢��һ�����ģ�����', 'zhixiao_weixin_zhenduan_mokuan_jingjie_record' => 'ֱ��΢��һ�����ģ���ر𾯽����ù���', 'huodong_tehui_list' => '��ػݹ���', 'xinju2000_weixin_designer_record' => '΢�����ʦ��¼����', 'xinju2000_weixin_tuku_user_dianpin_record' => '΢��ͼ�����۹���', 'xinju2000_weixin_tuku_user_shoucang_record' => '΢��ͼ���ղع���', 'xinju2000_weixin_tuku_user_dianzan_record' => '΢��ͼ����޹���', 'kefu_liangchi_city_baohe_record' => '�ͷ��������߱��Ͷȼ�¼����', 'tuangou20141031_choujiang_huodong' => 'ר��齱20141031ͳ�ƹ���������', 'zhixiao_weixin_xiaohua_record' => 'ֱ��΢��Ц����¼����', 'zhixiao_weixin_jitang_record' => 'ֱ��΢�����鼦����¼����', 'zhixiao_weixin_city_today_work_record' => 'ֱ��΢�Ž��չ����ص��¼����', 'zhixiao_weixin_city_wenti_record' => 'ֱ��΢�Ŵ��������¼����', 'zhixiao_weixin_city_zhidao_record' => 'ֱ��΢�ž�Ӫָ����¼����', 'xinju2000_weixin_tuku_upload_record' => '΢��ͼ���ϴ���¼����', 'xinju2000_weixin_tuku_upload_detail_record' => '΢��ͼ���ϴ������¼����', 'zhuanti_tehui_comment' => 'ר���ػ����۹������', 'tatami_liangdian' => '����Ƶ��-�����Ƽ�����', 'tatami_rexiao_dingzhi' => '����Ƶ��-�������ƹ���', 'zhixiao_weixin_bumen_today_work_record' => 'ֱ��΢�Ų��ž�����չ����ص��¼����', 'zhixiao_weixin_shop_today_work_record' => 'ֱ��΢�����ܽ��չ����ص��¼����', 'zhixiao_weixin_wenti_city_record' => 'ֱ��΢�Ŵ���������м�¼����', 'zhixiao_weixin_wenti_bumen_record' => 'ֱ��΢�Ŵ������ⲿ�ż�¼����', 'zhixiao_weixin_wenti_shop_record' => 'ֱ��΢�Ŵ�������С���¼����', 'zhixiao_weixin_wenti_designer_record' => 'ֱ��΢�Ŵ����������ʦ��¼����', 'zhixiao_weixin_zhidao_city_record' => 'ֱ��΢�ž�Ӫָ�����м�¼����', 'zhixiao_weixin_zhidao_bumen_record' => 'ֱ��΢�ž�Ӫָ�����ż�¼����', 'zhixiao_weixin_zhidao_shop_record' => 'ֱ��΢�ž�Ӫָ��С���¼����', 'zhixiao_weixin_zhidao_designer_record' => 'ֱ��΢�ž�Ӫָ�����ʦ��¼����', 'zhixiao_weixin_today_work_city_record' => 'ֱ��΢�Ž��չ����ص���м�¼����', 'zhixiao_weixin_today_work_bumen_record' => 'ֱ��΢�Ž��չ����ص㲿�ż�¼����', 'zhixiao_weixin_today_work_shop_record' => 'ֱ��΢�Ž��չ����ص�С���¼����', 'zhixiao_weixin_today_work_designer_record' => 'ֱ��΢�Ž��չ����ص����ʦ��¼����', 'designer_channel_custom_pic' => '���ʦƵ���û�����ͼƬ�����', 'designer_channel_custom' => '���ʦƵ���û������û������', 'designer_channel_anli_zhuanti' => '���ʦƵ������ר������', 'tuangou20141111_choujiang_huodong' => '˫11�齱2014111ͳ�ƹ������', 'weike_designer_pl_record' =>'�������ʦ-���ʦ-���ۼ�¼����', 'xinju2000_weixin_mfsj_liuyan_record' => '�¾ӷ�������������Ʒ������Լ�¼�����', 'baidufeed_zhuangxiu_tuku_management' => '�ٶ�װ��ͼ���ƹ���Ʒ��Ϣ�������', 'xinju2000_weixin_hyuser_xiaoqu_setting' => '�¾�΢�Ż�ԱУ�����ù���', 'xinju2000_weixin_hyuser_game_setting' => '�¾�΢�Ż�Ա��Ϸ���ù���', 'xinju2000_weixin_hyuser_level_setting' => '�¾�΢�Ż�Ա�ȼ����ù���', 'xinju2000_weixin_mfsjfa_dafen_record' => '�¾ӷ�������������Ʒ�����ּ�¼�����', 'tuiguang_url' => '�ƹ�����', 'xinju2000_weixin_baibian_custom_pinglun_record' => '΢�Űٱ䶨��DIY���۹���', 'zhixiao_weixin_yeji_fen_designer_record' => 'ֱ��΢��ҵ���ֽ�-���ʦ��¼����', 'zhixiao_weixin_yeji_fen_designer_week_record' => 'ֱ��΢��ҵ���ֽ�-���ʦ�ܼ�¼����', 'zhixiao_weixin_yeji_fen_shop_record' => 'ֱ��΢��ҵ���ֽ�-С���¼����', 'zhixiao_weixin_yeji_fen_shop_week_record' => 'ֱ��΢��ҵ���ֽ�-С���ܼ�¼����', 'zhixiao_weixin_yeji_fen_bumen_record' => 'ֱ��΢��ҵ���ֽ�-���ż�¼����', 'zhixiao_weixin_yeji_fen_bumen_week_record' => 'ֱ��΢��ҵ���ֽ�-�����ܼ�¼����', 'zhixiao_weixin_yeji_fen_city_record' => 'ֱ��΢��ҵ���ֽ�-���м�¼����', 'zhixiao_weixin_yeji_fen_city_week_record' => 'ֱ��΢��ҵ���ֽ�-�����ܼ�¼����', 'designer_channel_renqun' => '����������ʹ����Ⱥ���ù���', 'xinju2000_weixin_hyuser_shangpin' => '�¾�΢�Ż�Ա��Ȩ�̵���Ʒ�б����', 'xinju2000_weixin_xiaoyuan_huodong' => '�¾�΢��У԰��б����', 'xinju2000_weixin_hyuser_tiku_team' => '�¾�΢�Ż�Ա�������С�����ù���', 'xinju2000_weixin_hyuser_tiku_wenti' => '�¾�΢�Ż�Ա��������������ù���', 'xinju2000_weixin_hyuser_tiku_answer' => '�¾�΢�Ż�Ա�����������ù���', 'xinju2000_weixin_hyuser_tiku_dati_record' => '�¾�΢�Ż�Ա�����¼�����', 'tuangou20141231_choujiang_huodong' => 'ר��齱20141231ͳ�ƹ���������','xinju2000_weixin_mfsj_liuyan_muban' => '�¾ӷ�������������Ʒ�������ģ������', 'weixin_jiashu_newshare_qixiang' => '�¼�����������ͶƱ�������', 'weixin_jiashu_newshare_team' => '�¼��������С�����', 'weixin_jiashu_newshare_neirong' => '�¼�����������ͶƱ���ݹ���', 'xinju_tongji_jingjia' => '�¾��ⲿͳ�ƺ;��۴������', 'xinju2000_weixin_wayes_taili_user_record' => 'ά��΢��̨����û���¼�����', 'xinju2000_weixin_wayes_taili_zhongjiang_record' => 'ά��΢��̨����н���¼�����', 'kefu_shop_info' => '�ͷ������ŵ���Ϣ����', 'qy_weixin_tongxun_bumen' => '�¾�΢����ҵ��ͨѶ¼���Ź������', 'qy_weixin_tongxun_user' => '�¾�΢����ҵ��ͨѶ¼��Ա�������', 'tuangou20141225_choujiang_huodong' => 'ר��齱20141225ͳ�ƹ���������', 'xinju2000_weixin_aishang_juanzeng_record' => '���мƻ�������Ϣ��¼�����', 'xinju2000_weixin_xiangxun_dengji' => '�¾�΢�Ŷ�����ĩ��޹�����ۻ�Ǽǹ���', 'xinju2000_weixin_kanjia_faqi_record' => '΢�ſ��ۻ�������û���¼�����', 'xinju2000_weixin_kanjia_canyu_record' => '΢�ſ��۲���������¼�����', 'xinju2000_weixin_kanjia_lingqu_info' => '΢�ſ��ۻ�ɹ��û���Ϣ��¼�����', 'zx_dingzhi_banner' => 'װ�ް�鶥��������', 'zhixiao_sjs_free_zhang_record' => 'ֱ�����ʦ������ѫ�¹���', 'zhixiao_sjs_free_apply_record' => 'ֱ�����ʦ�����������¼����', 'shejisd_vote' => '���ʢ�䰸��ͶƱ�����', 'shejisd_zhongjiang_record' => '���ʢ���û�ͶƱ�齱�����', 'shejisd_prize' => '��Ʒ�����', 'prize_record' => '�н���¼�����', 'shejisd_vote_record' => 'ͶƱ��¼�����', 'tuangou20150131_choujiang_huodong' => '2015��1�³齱�ͳ�ƹ������', 'nh2015_weixin_chat_record' => '��Ļ��������Ϣ����', 'nh2015_weixin_mingan_record' => '��Ļ���������дʿ����', 'jituan_weixin_hyuser_jifen_list' => '���Ż�Ա��ϵ��ԱVֵ���Ա����', 'jituan_weixin_hyuser_tequan_record' => '���Ż�Ա��ϵ��Ա��Ȩ�б����', 'jituan_weixin_hyuser_huodong_record' => '���Ż�Ա��ϵ������б����', 'jituan_weixin_hyuser_level_setting' => '���Ż�Ա��ϵ��Ա�ȼ����ù���', 'nh2015_weixin_menu' => '2015���΢�Ų˵��������', 'nh2015_weixin_menu_info' => '2015���΢�Ų˵����ݹ������', 'jituan_weixin_hyuser_make_v_record' => '���Ż�Ա��ϵ��Ա׬Vֵ�����б����', 'jituan_weixin_hyuser_deshare_type' => '���Ż�Ա��ϵ���·������', 'jituan_weixin_hyuser_desshare_list' => '���Ż�Ա��ϵ����ҳ�����', 'jituan_weixin_hyuser_shop_info' => '���Ż�Ա��ϵ��Ʒ����ҳ����', 'jituan_weixin_hyuser_shop_info_pic' => '���Ż�Ա��ϵ��Ʒ����ͼƬ����', 'jituan_weixin_hyuser_shop_info_pinglun_record' => '���Ż�Ա��ϵ��Ʒ�������ۼ�¼����', 'nh2015_weixin_user' => '2015�깫˾����û������', 'nh2015_weixin_user_tequancard_setting' => '2015�깫˾�����Ȩ�����ù���', 'nh2015_weixin_user_des' => '�¾ӷ����΢��ͼ�����ݹ���', 'jituan_weixin_hyuser_article' => '���Ż�Ա��ϵÿ�հ�������', 'jituan_weixin_hyuser_article_case_pic' => '���Ż�Ա��ϵÿ�հ���ͼƬ�����', 'nh2015_danmu_pc_record' => '��Ļ���PC���ù���', 'xinju2000_weixin_chunjie_hb_record' => '΢�Ŵ��ں�������û���¼�����', 'nh2015_weixin_by_cat' => '��Ļ�����ᱸ�ÿ�������', 'nh2015_weixin_by_record' => '��Ļ�����ᱸ�ÿ���Ϣ����', 'nh2015_weixin_show_record' => '��Ļ���������ʾ��Ϣ����', 'nh2015_weixin_user_tai' => '2015�깫˾����û�̨�Ź���', 'gj_kefu_fenpei_city' => '�������������ù���', 'zxmfsj_sheji_anli' => '���������Ʒ�����ѡ����', 'tuangou20150228_choujiang_huodong' => '2015��2�·��г���齱����', 'jituan_weixin_hyuser_rewen_list' => '���Ż�Ա��ϵ�Ҿ������б����', 'xinju2000_weixin_splm_record1' => '�¾�΢����ݮʮ�󴺽ڻ��¼��1����', 'xinju2000_weixin_splm_record2' => '�¾�΢����ݮʮ�󴺽ڻ��¼��2����', 'xinju2000_weixin_splm_record3' => '�¾�΢����ݮʮ�󴺽ڻ��¼��3����', 'xinju2000_weixin_splm_record4' => '�¾�΢����ݮʮ�󴺽ڻ��¼��4����', 'xinju2000_weixin_splm_record5' => '�¾�΢����ݮʮ�󴺽ڻ��¼��5����', 'xinju2000_weixin_splm_record6' => '�¾�΢����ݮʮ�󴺽ڻ��¼��6����', 'xinju2000_weixin_splm_record7' => '�¾�΢����ݮʮ�󴺽ڻ��¼��7����', 'xinju2000_weixin_splm_record8' => '�¾�΢����ݮʮ�󴺽ڻ��¼��8����', 'xinju2000_weixin_splm_record9' => '�¾�΢����ݮʮ�󴺽ڻ��¼��9����', 'xinju2000_weixin_splm_record10' => '�¾�΢����ݮʮ�󴺽ڻ��¼��10����', 'jituan_weixin_hyuser_xihuan_list' => '���Ż�Ա��ϵ�²���ϲ����Ϸ�б����', 'mobile_development_plan_record' => '�ƶ��˿������ȼƻ���¼�����', 'jituan_weixin_hyuser_dingdan_record' => '���Ż�Ա��ϵ������ѯ��¼�����', 'xinju2000_weixin_neibuid_record' => '�¾�΢�ŷ�����ڲ�id��Ӧ�����', 'jituan_weixin_hyuser_buyerinfo_record' => '���Ż�Ա��ϵ��Ա��Ʒ���򶩵���¼�����', 'jituan_weixin_hyuser_biaoqian_setting' => '���Ż�Ա��ϵ�û���ǩ�������', 'xinju2000_weixin_game_shaizi_record' => '�¾�΢�ŷ���Ŵ�����¼�����', 'xinju2000_weixin_ah100_baoming_record' => '��Ʒ΢�Ű���100�û�������¼�����', 'kefu_hujiao_bumen' => '�������Ĳ��Ź���', 'kefu_hujiao_xiaozu' => '��������С�����', 'tuangou20150326_choujiang_huodong' => 'ר��齱20150326ͳ�ƹ�������', 'tuangou20150430_choujiang_huodong' => 'ר��齱20150430ͳ�ƹ���', 'tongbu_all_server_record' => '�ļ�ͬ����������������¼����', 'jituan_weixin_hyuser_info_pipei_gjlist' => '���Ż�Ա��ϵ��Ա��Ϣƥ����������', 'hujiao_friend_user' => '������������Ȧ-�������Ϲ���', 'hujiao_friend_article' => '������������Ȧ-���¹���', 'hujiao_friend_article_pic' => '������������Ȧ-����ͼƬ����', 'hujiao_friend_pinglun' => '������������Ȧ-�������ۼ�¼����', 'xinju2000_weixin_pinbi_keywords_list' => '��Ʒ΢�ŷ�������ιؼ����б����', 'xinju2000_weixin_shopinfo_list_record' => '��Ʒլ��΢����Ʒ�����¼�����', 'xinju2000_weixin_template_qunfa_setting' => '��Ʒլ��΢�ŷ����ģ����ϢȺ�����ù���', 'xinju2000_weixin_template_qunfa_content' => '��Ʒլ��΢�ŷ����ģ����ϢȺ�����ݹ���', 'xinju2000_weixin_benlaishenghuo_youhuima_record' => '��Ʒլ��&�����������ϻ�Ż����¼�����', 'zhixiao_pinpairi_record' => 'Ʒ���ջ�������ֹ���', 'jituan_weixin_hyuser_buyerinfo_pc_record' => '���Ż�Ա��ϵ��Ա��Ʒ�������μ�¼�����', 'jituan_weixin_hyuser_buyerinfo_pcdd_record' => '���Ż�Ա��ϵ��Ա��Ʒ���ζ�����¼�����', 'jituan_weixin_hyuser_buyerinfo_pc' => '���Ż�Ա��ϵ�����������ι���', 'jituan_weixin_hyuser_shop_banner_setting' => '���Ż�Ա��ϵ��Ʒ�б�banner���ù���', 'index_sheji_gundong_record' => '��ҳ���������ƹ�����¼����', 'jituan_weixin_hyuser_tuikuan_record' => '���Ż�Ա��ϵ��Ա�˿��¼�����', 'tuangou20150530_choujiang_huodong' => 'ר��齱20150530ͳ�ƹ���', 'xinju2000_weixin_user_ldswjl_gz_record' => '�¾�΢�ŷ�������������ע��¼�����', 'jituan_weixin_hyuser_designer_setting' => '���Ż�Ա��ϵÿ�հ������ʦ���ñ����', 'jituan_weixin_hyuser_fuwucheck_pingfen_record' => '���Ż�Ա��ϵ�����ѯ���ּ�¼����', 'xinju2000_weixin_erweima_info_setting' => '��Ʒլ��΢�ŷ���Ź̶���ά�����ñ����', 'xinju2000_weixin_pici_qunfa_record' => '��Ʒլ��΢������Ⱥ����¼�����', 'xinju2000_weixin_pici_qunfa_send_record' => '��Ʒլ��΢�����η��ͼ�¼�����', 'xinju2000_weixin_pici_qunfa_send_setting' => '��Ʒլ��΢�����ζ�ʱȺ���������ñ����', 'member_fankui_zhoufankui_type' => '�ͷ��ܷ����������', 'member_fankui_zhoufankui_reason_type' => '�ͷ��ܷ�������ԭ�����', 'xinju2000_weixin_user_meitu_weekly' => '��ͼ��ѡ�ܿ������', 'xinju2000_weixin_user_meitu_weekly_images' => '��ͼ��ѡ�ܿ���ͼ�����', 'xinju2000_weixin_user_meitu_index_image' => '��ͼ��ѡ��ҳ���ͼ����', 'member_fankui_zhijian_record' => '�ͷ��ʼ��¼����', 'hk2015index_serve_loupan' => '2015��ҳ����������¥�̱����', 'hk2015index_gongneng' => '2015��ҳ�ۺϹ��ܱ����', 'hk2015index_shaijia' => '2015��ҳɹ�ұ����', 'jituan_weixin_template_tuisong_setting' => '��Ա����ģ����Ϣ�������ù���', 'jituan_weixin_tuwen_and_text_tuisong_setting' => '��Ա����ͼ���������ù���', 'jituan_weixin_tuwen_and_text_version' => '��Ա����ͼ�İ汾���ù���','hujiao_liucheng_news' => '�������Ľ�ѧ�������¹���' ,'hujiao_liucheng_article' => '�������Ľ�ѧ�����ĵ�����' ,'hujiao_liucheng_page' => '�������Ľ�ѧ����ҳ�����' ,'hujiao_liucheng_page_pl' => '�������Ľ�ѧ����ҳ�����۹���' ,'hujiao_liucheng_page_fav' => '�������Ľ�ѧ����ҳ���ղع���', 'jituan_weixin_hyuser_subscribe_tuisong_setting' => '���Ż�Ա���Ĺ�עСޱ�������Ϳ������ù���', 'xinju2000_weixin_pici_text_qunfa_record' => '��Ʒլ��΢�������ı�����Ⱥ����¼�����', 'xinju2000_weixin_hysys_hb_setting' => '��Ʒ΢�Ż�Ա�������ñ����', 'xinju2000_weixin_menu_tongji_record' => '��Ʒ���ںŵ����˵�ͳ�Ƽ�¼�����', 'tuangou20150610_choujiang_huodong' => '20150610�齱�����', 'huiyuan_tuwen_ver_record' => '��Ա����ͼ�İ汾��¼����', 'jituan_weixin_hyuser_everyday_tis_setting' => '���Ż�Ա��ϵÿ��С��ʿ���ñ����', 'jituan_weixin_hyuser_jingxuan_zixun_setting' => '���Ż�Ա��ϵ��ѡ��Ѷ���ñ����', 'xinju2000_weixin_chaihongbao_game_record' => '��Ʒլ��΢�ŷ���Ų������¼�����', 'jituan_weixin_hyuser_huodong_hepai_record' => '��Ա��������ʦ������¼�����', 'jituan_weixin_hyuser_make_vz_banner_setting' => '��Ա����׬ȡVֵbanner���ù���', 'jituan_weixin_hyuser_huodong_banner_setting' => '���Ż�Ա��ϵ�����banner���ù���', 'jituan_weixin_hyuser_huodong_ertongjie_record' => '��Ա���ͯ��������¼�����', 'jituan_weixin_hyuser_huodong_toutiao_record' => '��Ա�ɹ������ͷ��������¼�����', 'xinju2000_weixin_user_baoming_type_setting' => '΢�ű�����Դ���ü�¼�����', 'anli_tongji_setting_record' => '����Ⱥ���������ù���', 'weixin_wenan_setting_record' => '΢���İ��Ķ�ԭ�Ĳ������ù���', 'xinju2000_weixin_user_baoming_css_setting' => '΢�ű���ҳ��ҳ����ʽ���ù���', 'jingying_designer_record' => '��Ӣ���ʦ��ʱ��¼����', 'weixin_gg_toufang_day_record' => '΢�Ź��Ͷ��ÿ���¼����', 'kehu_delivery_install_time' => '�ͻ��ͻ���װʱ�����', 'dd_fahuo_record' => '����ϵͳ�����ѷ����ͻ���¼����', 'dd_anzhuang_record' => '����ϵͳ�����Ѱ�װ�ͻ���¼����', 'sms_fankui_record' => '�����յ���Ϣ��������', 'jc_article' => '150616�������±����', 'jc_article_cat' => '150616�������·�������', 'jc_tags' => '150616���ı�ǩ�����', 'jc_tags_cat' => '150616���ı�ǩ��������', 'jc_blackboard' => '150616����С�ڰ�����', 'jc_web_numb' => '150616����ҳ���ű����', 'jc_goods_type' => '150616���Ĳ�Ʒ���ͱ����', 'jc_brand' => '150616����Ʒ�Ʊ����', 'jc_brand_and_type' => '150616����Ʒ��-�����м�����', 'weixin_gg_toufang_update_record' => '΢�Ź��Ͷ�Ÿ��¼�¼����', 'kefu_hujiao_dingshi_send_setting' => '����������ҵ�Ŷ�ʱ�������ù���', 'kefu_hujiao_dingshi_send_record' => '����������ҵ�Ŷ�ʱ���ͼ�¼����', 'xinju2000_weixin_yiyuan_temp_record' => '��Ա��Ʒ��Ʒ������ʱ��¼�����', 'xinju2000_weixin_guanggao_setting' => '��Ʒլ��΢�Ź��Ͷ�����ù���', 'weixin_tongji' => '�鿴����΢��ͳ�Ƶ�Ȩ��', 'xinju2000_weixin_erweima_category_record' => '��Ʒ��ά������¼�����', 'xinju2000_weixin_erweima__category_info_setting' => '��Ʒ��ά�����ü�¼�����', 'sjq_customer_convert' => '���Ȧ�ͷ�ת������', 'tousu_pingjia_info_record' => 'Ͷ�����۴�����Ϣ��¼����', 'weike_designer_lizhi_tixing' => '��Ӣ���ʦ��ְ���ѹ���', 'jc_seo_diy' => '150616�����Զ���SEO�����', 'weixin_juzhen_info_setting' => '΢�Ź����˺ž�����Ϣ���ñ����', 'weixin_juzhen_menu_setting' => '΢�Ź����˺ž����Զ���˵����ù���', 'weixin_juzhen_menu_desinfo' => '΢�Ź����˺ž����Զ���˵����ݹ���', 'weixin_juzhen_click_des_setting' => '΢�Ź����˺ž��󴥷������������ù���','zhuanti_type_visit_record' => 'ר��������ַ��¼����', 'zhixiao_weixin_article_cat' => 'ֱ����������·�������', 'zhixiao_weixin_menu_category_article_list' => 'ֱ����������±����', 'hko_message' => '����Ϣ�����', 'weixin_juzhen_scan_setting' => '΢�Ź����˺ž����ά�����ü�¼�����', 'tuangou20150801_choujiang_huodong' => 'ר��齱20150801ͳ�ƹ���', 'xinju2000_weixin_fuwu_baoming_source_type_info_setting' => '΢�ŷ�������Դ��¼�����', 'weixin_juzhen_menu_tongji_record' => '΢�Ź����˺ŵ����˵�ͳ�Ƽ�¼���б����', 'fankui_kefu_talk_record' => '�ͷ�������ͨ��¼����', 'fankui_good_pinjia_cat' => '�����������', 'fankui_cha_pinjia_cat' => '�����������', 'fankui_sp_kefu_talk_record' => '��Ʒ�ͷ�������ͨ��¼����', 'fankui_sp_genjing_status' => '��Ʒ�ͷ�����״̬�����', 'fankui_deal_kefu' => '��������ͷ�����', 'fankui_fenpei_record' => '��������ͷ���¼�����', 'xinju2000_weixin_user_mall_product_list' => '�°��Ա�̳���Ʒ����', 'fankui_genjing_sys' => '�ͷ�����ϵͳ����', 'fankui_sp_fankui_system' => '��Ʒ�ͷ�����ϵͳ');// 'NO' => 'û������Ŀ'��û�ж�����ֻ�г�������Ա���ܷ��ʡ�, 'search_fangan_default' => '����Ĭ��������������', 'search_huxing_default' => '����Ĭ��������������'



$KIND_ARRAY = array(1 => '<font color=blue>��ͨ��Ա</font>', 2 => '<font color=red>����Ա</font>', 3 => '<font color=green>�Ҿ��̼�</font>', 4 => '<font color=#990000>���ʦ</font>', 5 => '<font color=#999933>װ�޹�˾</font>', 6 => '<font color=#000080>���ز�</font>', 7 => '<font color=#9900CC>�ӿڻ�Ա</font>', 8 => '<font color=#999933>����˾</font>', 9 => '<font color=#999933>ʩ����˾</font>');



$YES_NO = array(1 => '<font color=blue>��</font>', 0 => '<font color=red>��</font>');





$PN3_DANTI_TYPE = array('L' => '�Ͳ���', 'B' => '����', 'K' => '����', 'T' => '������', 'R' => '�鷿', 'C' => 'С����');



$PN3_DANTI_TYPE_ID = array('L' => 2, 'B' => 1, 'K' => 5, 'T' => 4, 'R' => 3, 'C' => 12);



$PN3_DANTI_TYPE_ID2 = array(2 => 'L', 1 => 'B', 5 => 'K', 4 => 'T', 3 => 'R', 12 => 'C');



$_DAY_STAT_TYPE = array('pageviews' => '��վ������PV��', 'pageviews020' => '����վ������PV��', 'pageviews010' => '����վ������PV��', 'pageviews021' => '�Ϻ�վ������PV��', 'ip_num' => '��վ������IP��', 'ip_num020' => '����վ������IP��', 'ip_num010' => '����վ������IP��', 'ip_num021' => '�Ϻ�վ������IP��', 'loupan_search_pv' => '¥������ҳ������', 'loupan_search_no_pv' => '��������¥��ҳ�������', 'loupan_fangan_pv' => '¥������ҳ������', 'fangan_list_pv' => '���������б�ҳ������', 'fangan_detail_pv' => '��������ҳ������', 'huxing_search_pv' => '���������б�ҳ������', 'huxing_search_no_pv' => '������������ҳ�������', 'huxing_detail_pv' => '����ƽ�沼��ҳ������', 'design_free_pv' => '�����������ҳ������', 'design_free_num' => '�������ҳ�ύ��', 'tailor_pv' => '��������ҳ������', 'tailor_num' => '��������ҳ�ύ��',"design_softbb_download" => "�ҼҰڰڿ�������", "baibai_soft_use" => "�ҼҰڰڿ�ʹ����","design_soft_download" => "�Ҽ������������", "design_soft_use" => "�Ҽ������ʹ����","zhineng_soft_download" => "�Ҽ���������ܰ�������", "zhineng_soft_use" => "�Ҽ���������ܰ�ʹ����", "model_down_num" => "ģ��������", "soft_download" => "����������������",  'soft_firt_use' => "������������һ��ʹ��", 'zhixiao_ip_num' => 'ֱ��Ƶ������IP��', 'soft_day_use_ip' => '���ʹ��ip��', 'user_register_num' => 'ҵ��ע����', 'user_register_num5' => '��ֱ��ע��ҵ����', 'designer_register_num' => '���ʦע����', 'company_register_num' => 'װ�޹�˾ע����', 'shop_register_num' => '�̼�ע����', 'user_register_num2' => '�ڲ�ע��ҵ����', 'user_register_num3' => '�����˼ҵ�ҵ����','myhome_design' => '�����Ʒ�����', "other_soft_use" => "�������ʹ����", 'fromfolo' => 'fromfolo','tofolo'=>'tofolo', 'zhekou_print' => '�ۿ۴�ӡ����', 'pindao_index' => '��ҳ������', 'pindao_kanfang' => '3ά����������', 'pindao_zhuangxiu' => 'ģ��װ�޷�����', 'pindao_myhome_design' => '�Ҽ�����Ʒ�����', 'pindao_members' => '���˼�԰������', 'pindao_zhekou' => '�Ҿ��ۿ۷�����', 'pindao_business' => '�ػ�ֱ��������', 'pindao_bbs' => '��̳������', 'buying_process' => 'ֱ������ҳ������(��)', 'buying_process_site' => 'ֱ������ҳ������(��ҳ)', 'buying_process_spzp' => 'ֱ������ҳ������(��Ʒ���)', 'buying_process_diy' => 'ֱ������ҳ������(�Ҽ������)', 'PlanningFamily_index' => '���͹滮ҳ�������', 'spatial_planning' => '�������ҳ�������', 'taocan_fav_num' => '�ײ��ղؼ��ղ�����', 'mrs_down_num' => 'MRS���ش���ͳ��', 'zhixiao_index_search_click_num' => 'ֱ����ҳ������ť�������', 'ip_num_wap' => '�ֻ���������IP��', 'wap_clicks' => '�ֻ��������������');



$_ZM_ARRAY = array('A' => 'A','B' => 'B','C' =>'C','D' =>'D','E' =>'E','F' =>'F','G' =>'G','H' =>'H','I' =>'I','J' =>'J','K' =>'K','L' =>'L','M' =>'M','N' =>'N','O' =>'O','P' =>'P','Q' =>'Q','R' =>'R','S' =>'S','T' =>'T','U' =>'U','V' =>'V','W' =>'W','X' =>'X','Y' =>'Y','Z' =>'Z');





$_keyword_type = array('��ש' => '��ש','�ذ�' => '�ذ�','��ԡ' => '��ԡ','ǽֽ' => 'ǽֽ','Ϳ��' => 'Ϳ��','����' => '����','��ǽ�¹�' => '��ǽ�¹�','����' => '����','����' => '����','�Ҿ�' => '�Ҿ�','�칫�Ҿ�' => '�칫�Ҿ�','���ƼҾ�' => '���ƼҾ�','�ҵ�' =>'�ҵ�','�Ŵ�' =>'�Ŵ�','����' =>'����');



$_design_type = array(1 => '�����н�','װ�޹�˾','���ʦ','������','�Ҿ���','�ҵ���');



///

$_FANG_CAT = array(1 => array('name' => '����', 'ename' => 'Living'), 2 => array('name' => '���˷�', 'ename' => 'Main'), 3 => array('name' => '����A', 'ename' => 'bedroomA'), 4 => array('name' => '����B', 'ename' => 'bedroomB'), 5 => array('name' => '����C', 'ename' => 'bedroomC'), 6 => array('name' => '�鷿', 'ename' => 'Work'), 7 => array('name' => '��ԡ', 'ename' => 'Tol'), 8 => array('name' => '����', 'ename' => 'Kic'), 9 => array('name' => '����', 'ename' => 'Other'));



$_FANG_CAT2 = array(1 => '����', 2 => '���˷�', 3 => '����A', 4 => '����B', 5 => '����C', 6 => '�鷿', 7 => '��ԡ', 8 => '����', 9 => '����');



///���͹�泤

$_AD_WIDTH_TYPE = array(3000 => 3000, 2000 => 2000, 1000 => 1000);



////������������

$_COMMENT_TYPE_URL = array('loupan' => '../Neighbor/index2.php?pid=', 'pn3' => '../ask/design.php?id=', 'user' => '../My.php?id=', 'mip' => '../Neighbor/view_huxing.php?id=');



/////����¥���ֶ�

$_LOUPAN_ZIDUAN = array('first_zm' => '����ĸ', 'area_id' => '����', 'pianqu_id' => 'Ƭ��','des' => '¥�̽���', 'zhuangxiu_des' => 'װ��״��', 'wuyefei' => '��ҵ�����', 'yushou_cert' => 'Ԥ�����֤', 'kaifashang' => '������', 'shoulou_address' => '��¥����ַ', 'rongjilv' => '�ݻ���', 'lvhualv' => '�̻���', 'louceng_des' => '¥��״��', 'zhoubian' => '�ܱ�����', 'jiaotong' => '��ͨ״��', 'relate_info' => '�����Ϣ', 'price' => '��ʷ�۸�', 'tel' => '�绰');



$_LOUPAN_ZIDUAN_PAIXU = array('first_zm' => 0, 'area_id' => 1, 'pianqu_id' => 2,'des' => 3, 'zhuangxiu_des' => 4, 'wuyefei' => 5, 'yushou_cert' => 6, 'kaifashang' => 7, 'shoulou_address' => 8, 'rongjilv' => 9, 'lvhualv' => 10, 'louceng_des' => 11, 'zhoubian' => 12, 'jiaotong' => 13, 'relate_info' => 14, 'price' => 15, 'tel' => 16);







///////����ӰƬ�����

$_MODUNIN_LIB = array(2 => '�����', 3 => 'ӰƬ��');





////¥�̻���ָ��������

$_ZHINAN_TYPE = array(0 => '��ָ����', 1 => '��ָ����', 2 => '������ָ����', 3 => '��Ҫȷ��ָ����', 4 => 'ȷ�ϵ���ָ����');



////pn3����

$_PN3_PINGFEN_TYPE = array(1 => 'װ�޲ο���ֵ����', 2 => 'ʵ���ԣ��ռ�����Լ��Ҿ߰ڷź���ȣ�', 3 => '�����϶�', 4 => '�����ԣ�����Ƕȡ��ƹ⡢���ʡ�����Ч����', 5 => '��ͼ�����ȣ���Ʒ�ڷţ�');



///��ע���壬���ӵ�level����

$_BZ_DANTI_LEVEL = array(3 => '����', 2 => '��ͼ');





///////�����Ż�ȯ ����

$_BUY_JUAN_TYPE = array(0 => '������ѯ', 1 => '��Ʒ��ѯ', 2 => 'Ʒ���Żݾ�', 3 => '�ۿ۴�����Ϣ', 4 => '�ۿ۴�����Ϣ(ֻ�ռ��ֻ������÷�����)');







///���ַ�����

$_SALE_HOUSE_TYPE = array( 0 => '��ҵ', 1 => '��ԭ', 2 => 'ȫ��', 3 => '�û��ϴ�');



/////�������ַ��ֶ�

$_SALE_HOUSE_ZIDUAN = array('bianhao' => '��Դ���', 'name' => '��ҵ���ƣ�¥�����ƣ�', 'wuye_type' => '��ҵ����','quxian' => '����', 'shangquan' => '��Ȧ', 'chanquan' => '��Ȩ����', 'fangling' => '����', 'chaoxiang' => '����', 'louceng' => '¥��', 'zhuangxiu' => 'װ�����', 'mianji' => '�������', 'use_mianji' => 'ʹ�����', 'baojia' => '����', 'price' => '���ۣ��������⣩', 'jiaotong' => '��ͨ״��', 'address' => '��ҵ��ַ', 'sheshi' => '������ʩ', 'linker' => '��ϵ��', 'tel' => '��ϵ�绰', 'huxing_id' => '¥�̻���id', 'huxing_name' => '¥�̻�������', 'type' => '��������', 'rent_type' => '���ۻ��߳���');





///��������

$_MC_TYPE = array( 0 => '��ҵ��', 1 => '��Ӫ��');





$TG_HD_BM_ARRAY = array(0 => '<font color=blue>�ҳ�汨��</font>', 1 => '<font color=red>�ֹ���ӱ���</font>', 2 => '<font color=green>execl���뱨��</font>', 3 => '<font color=green>��̳��������</font>');



///�Ź�����·���

$_HUODONG_ARTICLE_CAT = array(1 => '�ֳ���ɷ�', 2 => '�����ع�', 3 => '1Ԫ��Ʒ�б�', 4 => '��Ʒ�б�', 5 => 'ֱ������Ʒ�б�', 6 => '�Ͻ��ֳ�ͼƬ');



$_HUODONG_ARTICLE_ROWS = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5);



$cat_type = $NEW_CAT_TYPE;







$reasons[1] = '�ߴ粻��ϸ';

$reasons[2] = 'ͼƬ�ϴ�����������';

$reasons[3] = 'ͼƬ������';

$reasons[4] = '���л���';

$reasons[5] = '¥�̻�����Ϣ��ȷ��';

$reasons[6] = '����,��ʽ����';

$reasons[7] = 'ʮ��������Ĳ��� (����,�Ϻ�,����,�Ͼ�,����,�人,�ɶ�,����,���ݡ��������ɶ�)';

$reasons[8] = '��Ա�ύ���ͺ���������ά����'; 

$reasons[9] = '���¥��'; 

$reasons[10] = '��ӻ���'; 





////////400�绰�ͷ�����

//��ͨ���

$_TEL400_TALK_CAT = array(1 => '������ѯ', 2 => '������ѯ', 6 => 'ԤԼ����', 3 => '�ۺ����', 4 => 'Ͷ�߽���', 5 => '��������');

//��ͨ����

$_TEL400_TALK_TYPE = array(1 => '�ѽ�����', 3 => 'δ������', 2 => 'δ�������ѻص�',9 => '��������ط�', 10 => 'ȷ������ʱ��ط�', 11 => '���߻ط�', 12 => '���η�����ͨ�ط�', 15 => '�����޸Ļط�', 13 => '�ɽ��ط�', 4 => '�����ط�');// 5 => '�����ط���������', 6 => '�����ط÷�������', 7 => '�����طö�������', 8 => '�����ط�TQ����', 9 => '�����ط�������ʽ', 



/*

������  

, , , , , , , num_shi, num_ting, num_wei, num_chu, , , , , , , , dj_date, youxiao_days, , , , logo, city_id, , , views, is_hide, , post_date, , loupan_id, , area_id, pianqu_id, , contact_des, comment, uid, username



2����Դ���  

3����ҵ���ƣ�¥�����ƣ�  

4����ҵ����  

5������  

6����Ȧ  

7����Ȩ����  

8������  

9������  

10��¥��  

11��װ�����  

12���������  

13��ʹ�����  

14������  

15�����ۣ��������⣩  

16����ͨ״��  

17����ҵ��ַ  

17��������ʩ  

18����ϵ��  

19����ϵ�绰  

20��¥�̻���id  

21��¥�̻������� 

22���������ͣ�ע������ԭ����ҵ��ȫ�����Ա��   

23�����ۻ��߳���

*/



///��վflash����

$_FLASH_ARRAY = array('house1' => '3ά������һ��flash', 'house2' => '3ά�����ڶ���flash', 'house3' => '3ά����������flash', 'decorate1' => 'ģ��װ�޵�һ��flash', 'decorate2' => 'ģ��װ�޵ڶ���flash', 'decorate3' => 'ģ��װ�޵�����flash');



$CONDITION_TYPE = array( 0 => 'ѡ��', 6=>'=', 1 => '>', 2 => '<', 3 => '>=', 4 => '<=', 5 => '<>');



///////400����ϵͳ����

$TEL400_STATUS = array(0 => 'û����', 1 => '�ѽ���');



//$TEL400_FANKUI_TYPE = array( 1 => '���յ���������ϵ�ͻ�', 2 => 'ȷ���Ƿ񽻶���', 3 => 'ȷ���Ƿ�ȫ��', 4 => '���յ��������ϵ�ͻ�', 5 => 'ȷ���Ƿ�������', 6 => 'ȷ���Ƿ��׳ɹ�');

/*�Ƶ�base_info.php

$TEL400_FANKUI_TYPE = array( 1 => '������', 2 => '���ڸ�����', 3 => '�ѷ�����ŵ�', 18 => '��ȷ������ʱ��', 4 => '�޷�������ŵ�/��Ч����', 5 => '�޷�������ŵ�/�ޱ����ŵ�', 6 => '�޷�������ŵ�/�ŵ겻����', 7 => '�޷�������ŵ�/��������', 8 => '�޷�������ŵ�/����ȡ��', 16 => '�޷�������ŵ�/����������', 17 => '�޷�������ŵ�/�Լ�ȥ�ŵ�', 9 => '������', 10 => 'δ����/�ͻ�ԭ��ȡ��', 11 => 'δ����/�ŵ�ԭ��ȡ��', 12 => 'δ����/�ͻ�ԭ���ӳ�����', 13 => 'δ����/�ŵ�ԭ���ӳ�����', 31 => 'δ�����η���/�ͻ��ӳٿ�����', 32 => 'δ�����η���/�ͻ���Ը������', 50 => 'δ�����η���/�۸�ԭ��ȡ��������', 51 => 'δ�����η���/��Ʒԭ��ȡ��������', 52 => 'δ�����η���/�ŵ�ԭ��ȡ��������', 53 => 'δ�����η���/�ͻ�ԭ��ȡ��������', 19 => '���η���', 33 => '���η���ȡ��/�۸�ԭ��ȡ���ɽ�', 34 => '���η���ȡ��/��Ʒԭ��ȡ���ɽ�', 35 => '���η���ȡ��/�ŵ�ԭ��ȡ���ɽ�', 36 => '���η���ȡ��/�ͻ�ԭ��ȡ���ɽ�', 37 => '���η���ȡ��/����ԭ��ȡ���ɽ�', 41 => 'δ�������޸�/�ͻ��ӳٿ�����', 42 => 'δ�������޸�/�ͻ���Ը������', 60 => 'δ�������޸�/�۸�ԭ��ȡ��������', 61 => 'δ�������޸�/��Ʒԭ��ȡ��������', 62 => 'δ�������޸�/�ŵ�ԭ��ȡ��������', 63 => 'δ�������޸�/�ͻ�ԭ��ȡ��������', 190 => '�����޸�', 43 => '�����޸ĺ�ȡ��/�۸�ԭ��ȡ��������', 44 => '�����޸ĺ�ȡ��/��Ʒԭ��ȡ��������', 45 => '�����޸ĺ�ȡ��/�ŵ�ԭ��ȡ��������', 46 => '�����޸ĺ�ȡ��/�ͻ�ԭ��ȡ��������', 47 => '�����޸ĺ�ȡ��/����ԭ��ȡ��������', 20 => 'δ�ɽ�/δ����', 21 => 'δ�ɽ�/��ȡ��', 14 => '�ѽ�����', 15 => '�ѽ�ȫ��');

//19 => '������ͨ��' ��Ϊ���η����ͷ����޸�

//, 31 => '���η���ȡ��/�ͻ��ӳٿ�����', 32 => '���η���ȡ��/�ͻ���Ը������' ��Ϊ , 31 => 'δ�����η���/����ԭ��ȡ���ɽ�' , 32 => 'δ�����η���/�ͻ���Ը������'

////���˸�ȫ��

$TEL400_FANKUI_TYPE2 = array( 1 => '������', 2 => '���ڸ�����', 3 => '�ѷ�����ŵ�', 18 => '��ȷ������ʱ��', 400 => '�޷�������ŵ�', 4 => '�޷�������ŵ�/��Ч����', 5 => '�޷�������ŵ�/�ޱ����ŵ�', 6 => '�޷�������ŵ�/�ŵ겻����', 7 => '�޷�������ŵ�/��������', 8 => '�޷�������ŵ�/����ȡ��', 16 => '�޷�������ŵ�/����������', 17 => '�޷�������ŵ�/�Լ�ȥ�ŵ�', 9 => '������', 100 => 'δ����', 10 => 'δ����/�ͻ�ԭ������ȡ��', 11 => 'δ����/�ŵ�ԭ��ȡ��', 12 => 'δ����/�ͻ�ԭ���ӳ�����', 13 => 'δ����/�ŵ�ԭ���ӳ�����', 500 => 'δ�����η���', 31 => 'δ�����η���/�ͻ��ӳٿ�����', 32 => 'δ�����η���/�ͻ���Ը������', 50 => 'δ�����η���/�۸�ԭ��ȡ��������', 51 => 'δ�����η���/��Ʒԭ��ȡ��������', 52 => 'δ�����η���/�ŵ�ԭ��ȡ��������', 53 => 'δ�����η���/�ͻ�ԭ��ȡ��������', 19 => '���η���', 300 => '���η���ȡ��', 33 => '���η���ȡ��/�۸�ԭ��ȡ���ɽ�', 34 => '���η���ȡ��/��Ʒԭ��ȡ���ɽ�', 35 => '���η���ȡ��/�ŵ�ԭ��ȡ���ɽ�', 36 => '���η���ȡ��/�ͻ�ԭ��ȡ���ɽ�', 37 => '���η���ȡ��/����ԭ��ȡ���ɽ�',600 => 'δ�������޸�', 41 => 'δ�������޸�/�ͻ��ӳٿ�����', 42 => 'δ�������޸�/�ͻ���Ը������', 60 => 'δ�������޸�/�۸�ԭ��ȡ��������', 61 => 'δ�������޸�/��Ʒԭ��ȡ��������', 62 => 'δ�������޸�/�ŵ�ԭ��ȡ��������', 63 => 'δ�������޸�/�ͻ�ԭ��ȡ��������', 190 => '�����޸�', 440 => '�����޸ĺ�ȡ��', 43 => '�����޸ĺ�ȡ��/�۸�ԭ��ȡ��������', 44 => '�����޸ĺ�ȡ��/��Ʒԭ��ȡ��������', 45 => '�����޸ĺ�ȡ��/�ŵ�ԭ��ȡ��������', 46 => '�����޸ĺ�ȡ��/�ͻ�ԭ��ȡ��������', 47 => '�����޸ĺ�ȡ��/����ԭ��ȡ��������', 200 => 'δ�ɽ�', 20 => 'δ�ɽ�/δ����', 21 => 'δ�ɽ�/��ȡ��', 14 => '�ѽ�����', 15 => '�ѽ�ȫ��');



*/







//////ר��¥�̱���

$ZT_LOUPAN_SHENPI_TYPE = array( 0 => 'δ����', 1 => '����ͨ��', 2 => '����ʧ�ܣ������·���');



$ZT_LOUPAN_JINDU_TYPE = array(1 => '��������հ׻���', 2 => '�����껧�ͷ������ͺ��������輸��', 3 => '�������Сͼû����new');



$ZT_LOUPAN_JINDU_URL = array(1 => 'zt_huxing_ext_view.php?id=', 2 => 'zt_huxing_ext_view.php?id=');





$ZT_HUXING_JINDU_TYPE = array(8 => '�ϴ���������',1 => '���굥�廧��', 2 => '���굥��ƽ�沼��ͼ', 3 => '���귽��', 7 => '���÷�������', 4 => '�ϴ����廧��ƽ�沼��ͼ', 5 => '�������������', 13 => '��������');//10 => '����Ч���б�ҳСͼ�ϴ�', 11 => '�����ϴ�', 12 => '���˵�����',  , 6 => '���廧��KOC��������Լ����������ĸ÷����ƽ�沼��', 9 => '�Լ�'



$ZT_HUXING_JINDU_URL = array(8 => 'soft_mission_file_add.php', 1 => 'taocan_bz_room_add.php', 2 => 'taocan_bz_layout_add.php', 3 => 'taocan_add.php', 7 => 'taocan_set_cat.php?id=',4 => 'zt_huxing_taocan_index_view.php?id=', 5 => 'shenpi_taocan_list.php?liucheng=2&id=', 6 => 'zt_huxing_taocan_index_view.php?id=', 10 => 'taocan_edit.php?id=', 11 => 'zt_huxing_taocan_index_view.php?id=', 12 => 'taocan_edit.php?id=', 13 => 'taocan_edit.php?id=');//,  9 => 'shenpi_taocan_check.php?id='



//Ȩ�ޣ������հ׻��͡��������͡�������������ѡ

$ZT_LOUPAN_QUANXIAN_TYPE = array('make_kb' => '�����հ׻���', 'fx_huxing' => '��������', 'make_taocan' => '��������', 'make_zx_kb' => '����ֱ���ͻ��հ׻���', 'fx_zx_huxing' => '����ֱ���ͻ�����','make_zx_taocan' => '����ֱ���ͻ�����', 'guanli_kb' => '����հ׻���', 'guanli_fx' => '�����������', 'guanli_taocan' => '������', 'shenpi_taocan' => '�����������','view_zhizuo_huxing' => '���������еĿհ׻���','view_zhizuo_fangan' => '���������еķ����б�','view_designer_list' => '���ʦ��������','edit_designer' => '�༭���ʦȨ��','fenpei_design' => '��������������','upload_pm' => '�ϴ�ƽ�沼��ͼ','do_zhongzi_taocan' => '�����������ײ�', 'shenpi_zz_taocan' => '�����������ӷ���', 'shenpi_nozz_taocan' => '�������������ӷ���', 'shenpi_fangong_zz_taocan' => '���������������ӷ���', 'shenpi_fangong_nozz_taocan' => '�����������������ӷ���', 'shenpi_taocan_premission' => '�����������ӷ���Ȩ��', 'pipei_deal' => '��������ƥ�������������', 'hide_in_list' => '<b>�����ʦ�б�����</b>', 'show_loupan_list' => '��ʾ¥���б�', 'tongji_visit' => 'ͳ�Ʒ���ǰ̨��ҳ��', 'edit_replace_word' => '��д�滻��', 'can_dafen_new' => '���µĴ�ֻ���Ȩ��');



$ZZ_TAOCAN_TG_NUM = 3;//�����ײ�ͨ������

$NOZZ_TAOCAN_TG_NUM = 1;//�������ײ�ͨ������, 2010-12-30��2��Ϊ1





$ZZ_TAOCAN_SHENPI_NUM = 4;//�����ײ���������

$NOZZ_TAOCAN_SHENPI_NUM = 1;//�������ײ���������





$ZT_LOUPAN_CATS = array('����' => '����', '����' => '����',  '�鷿' => '�鷿', '�����귿' => '�����귿', '����' => '����', '����' => '����', '�Ͳ���' => '�Ͳ���', '����' => '����', '����Ԣ' => '����Ԣ');//,  11 => '��ԡ��' 6 => '����'







////����

$ZT_HUXING_LIUCHENG = array(1 => '�����������հ׻����б�', 21 => '����������ֱ���ͻ��հ׻���', 221 => '�����������հ׻����б�(ƥ����Դ)', 321 => '�����������հ׻����б�(<b>��</b>ƥ����Դ)', 2 => '�������Ļ����б�', 22 => '������ֱ���ͻ�����', 3 => '�ҽ��յĿհ׻����б�', 13 => '�ҽ��յķ��������б�', 4 => '����˵Ļ����б�', 5 => '����հ׻����б�', 6 => '������������б�', 7 => '���������еĿհ׻���', 8 => '�հ׻����������б�', 9 => '���������������б�', 10 => '�������л����б�', 11 => '����˵Ļ����б�', 12 => '���������Ļ����б�', 30 => '�ѳ����������Ļ����б�', 222 => '�������Ļ����б�(ƥ����Դ)', 322 => '�������Ļ����б�(<b>��</b>ƥ����Դ)');



$ZT_TAOCAN_LIUCHENG = array(1 => '�����յķ����б�', 10 => '������ֱ���ͻ�����', 11 => '�����յķ����б�(ƥ����Դ)', 12 => '�����յķ����б�(<b>��</b>ƥ����Դ)', 2 => '�ҽ��յķ����б�', 3 => '�������ķ����б�', 4 => '������յķ����б�', 5 => '���������еķ����б�', 6 => '������������б�', 7 => '����˱��۷����б�', 8 => '���༭�����ķ����б�', 9 => '�������еķ����б�');



//�����ײ�����

$SHENPI_TAOCAN_LIUCHENG = array(1 => '�����������ӷ����б�', 2 => '�������ķ����ӷ����б�', 3 => '��ͨ�������ӷ����б�', 4 => '��ͨ���ķ����ӷ����б�', 5 => '��Ҫ���������ӷ����б�', 6 => '��Ҫ�����ķ����ӷ����б�', 7 => '�������ķ����б�', 8 => '��������Ҫ�����ķ����б�', 9 => '��Ҫ�ж��Ƿ񷵹��ķ����б�', 10 => '�������(����������)�ķ����б�', 11 => '�������(������)�����ӷ����б�', 12 => '�������(������)�ķ����ӷ����б�');



//�����ײͱ�׼����

$NOZZ_SHENPI_ARRAY = array(1 => 'ƽ�沼������', 6 => '�ƹ�Ч������',8 => '�������ƶ�����');



$ZZ_SHENPI_ARRAY = array(1 => 'ƽ�沼������', 2 => 'װ�޻����������', 3 => '��Ʒѡ���������', 4 => '����Ƕ�����', 5 => '��ɫ��������', 6 => '�ƹ�Ч������', 7 => 'Ч��ͼ��������', 8 => '����������������');



$PINFEN_SHENPI_ARRAY = array(0 => '--', 1 => '����', 2 => '����', 3 => '�ϸ�', 4 => '���ϸ�');



$TAOCAN_PINGFEN_TYPE = array(1 => '��', 2 => '��', 3 => '��');



////////�ռ���Ϣ����



//�ذ���ɫ

$DIBAN_YANSE_ARRAY  = array("ľ�ذ�" => "ľ�ذ�", "��ש" => "��ש", "��̺" => "��̺", "ǳɫ" => "ǳɫ", "��ɫ" => "��ɫ");







//ǽ����ɫ

$QM_YANSE_ARRAY  = array("Ϳ��" => "Ϳ��", "ǽֽ" => "ǽֽ", "ǳɫ" => "ǳɫ", "��ɫ" => "��ɫ");



//����

$YOU_WU_ARRAY  = array("��" => "��", "��" => "��");





//�Ƿ�

$SHI_FOU_ARRAY  = array("��" => "��", "��" => "��");





//���ߴ�

$CHUANG_CC_ARRAY  = array("1.5��" => "1.5��", "1.8��" => "1.8��", "����" => "����");





//ɳ������

$SHAFA_LEIXING_ARRAY  = array("ת��" => "ת��", "3+2+1ɳ����" => "3+2+1ɳ����", "2+1+1ɳ����" => "2+1+1ɳ����", "����" => "����");







//�����ߴ�

$CHANGZUO_CC_ARRAY  = array("1.8��" => "1.8��", "1.6��" => "1.6��", "ָ���ߴ�" => "ָ���ߴ�");





//��������

$CHANGZUO_LEIXING_ARRAY  = array("Բ��" => "Բ��", "����" => "����");







//�Ƿ�

$NEED_ORNOT_ARRAY  = array("��Ҫ" => "��Ҫ", "����Ҫ" => "����Ҫ");



//�ع�����

$DG_ZX_ARRAY  = array("һ����" => "һ����", "L��" => "L��", "U��" => "U��", "������" => "������", "����" => "����");



//�ع��Ű�

$DG_MB_ARRAY  = array("������" => "������", "����" => "����", "����" => "����", "ʵľ" => "ʵľ", "UV��" => "UV��");



//�ع��Ű���ɫ

$DG_MB_YANSE_ARRAY  = array("ľɫ" => "ľɫ", "��ɫ" => "��ɫ", "��ɫ" => "��ɫ", "ǳɫ" => "ǳɫ");



//�ع�������

$DG_GN_PZ_ARRAY  = array("�緹��" => "�緹��", "�������(Ƕ��ʽ/��ʽ)" => "�������(Ƕ��ʽ/��ʽ)", "΢��¯" => "΢��¯", "�翾��" => "�翾��", "��ζ����" => "��ζ����", "ϴ���" => "ϴ���", "ϴ�»�" => "ϴ�»�", "����������" => "����������", "Ԥ������λ��" => "Ԥ������λ��");





//����������

$DG_DG_PZ_ARRAY  = array("�������" => "�������", "΢��¯" => "΢��¯", "�����̻�" => "�����̻�", "����" => "����");





//̨��Ʒ��

$TM_PINPAI_ARRAY  = array("������" => "������", "�Ű������" => "�Ű������", "LG" => "LG", "PKSʯӢʯ" => "PKSʯӢʯ", "����" => "����");



//̨����ɫ

$TM_YANSE_ARRAY  = array("��ɫ" => "��ɫ", "ǳɫ" => "ǳɫ");



//̨�����

$TM_DQ_ARRAY  = array("�緹��" => "�緹��", "���¯" => "���¯", "ú��¯" => "ú��¯", "����" => "����");



//�������

$SG_ZX_ARRAY  = array("һ����" => "һ����", "L����" => "L����");





//����ʽ

$SG_KS_ARRAY  = array("�ּ�" => "�ּ�", "��ʽ" => "��ʽ", "�ּ����ʽ���" => "�ּ����ʽ���", "����ν" => "����ν");







//����Ű�����

$SG_MB_ARRAY  = array("ľ��" => "ľ��", "�����岣����" => "�����岣����", "����ĥɰ������" => "����ĥɰ������", "����" => "����");





//��������

$SZ_ZX_ARRAY  = array("һ����" => "һ����", "L����" => "L����", "����񼯳�" => "����񼯳�");





//����ʹ������

$SZ_SY_ARRAY  = array("̨ʽ����" => "̨ʽ����", "�������" => "�������");



//���ߴ�

$CHUANG_CC_ARRAY2  = array( "1��" => "1��","1.2��" => "1.2��", "1.5��" => "1.5��", "����" => "����");



//¥�̾���

$LOUPAN_JINGBAO = array(1 => '��ɫ����', 2 => '��ɫ����', 3 => '��ɫ����');



//¥��״̬

$LOUPAN_STATUS = array(1 => '����KOC��', 2 => '��������', 3 => '������', 4 => '��������', 5 => '������', 6 => '�����������', 7 => '�����', 8 => '���༭���', 9 => '�༭�����', 10 => '�����');



///¥��ʱ��

$LOUPAN_DATE_TYPE = array(1 => '��������', 2 => '�������', 3 => '�������', 4 => '�������');



///¥��������

$LOUPAN_SP_TYPE = array(1 => '�л���', 2 => '�л����������', 3 => '�з����������');





///¥���Ƿ�ֱ��

$LOUPAN_SP_ZX = array(1 => 'ֱ���ͻ�', 2 => '��ֱ���ͻ�');





///

$ZT_HUXING_EXT_1  = array( "2����" => "2����","3����" => "3����", "4����" => "4����", "5����" => "5����", "6����" => "6����");



$ZT_HUXING_EXT_2  = array( "��װ��" => "��װ��","ë����" => "ë����", "�ɷ�����" => "�ɷ�����");



$ZT_HUXING_EXT_3  = array( "80ƽ������" => "80ƽ������","80��120ƽ��" => "80��120ƽ��", "120��150ƽ��" => "120��150ƽ��", "150ƽ������" => "150ƽ������");



$ZT_HUXING_EXT_4  = array("��ש" => "��ש", "ľ�ذ�" => "ľ�ذ�", "ǳɫ" => "ǳɫ", "��ɫ" => "��ɫ", "����" => "����");



$ZT_HUXING_EXT_5  = array("Ь��" => "Ь��", "���Ϲ�" => "���Ϲ�", "������" => "������", "�ͱ߹�" => "�ͱ߹�", "������Ϲ�" => "������Ϲ�", "�輸" => "�輸", "ɳ�����" => "ɳ�����", "�߼�" => "�߼�", "װ�β��" => "װ�β��", "װ�ι�" => "װ�ι�", "������" => "������", "������" => "������", "����" => "����");



$ZT_HUXING_EXT_6  = array("1.8��" => "1.8��", "1.5��" => "1.5��", "��ͷ��" => "��ͷ��", "���ӹ�" => "���ӹ�", "װ�ι�" => "װ�ι�", "��ױ̨" => "��ױ̨", "�¹�" => "�¹�", "������" => "������", "����" => "����");

$ZT_HUXING_EXT_7  = array("1.1��" => "1.1��", "1.2��" => "1.2��", "1.5��" => "1.5��", "��ͷ��" => "��ͷ��", "���ӹ�" => "���ӹ�", "װ�ι�" => "װ�ι�", "��ױ̨" => "��ױ̨", "�¹�" => "�¹�", "����" => "����", "���" => "���", "װ�β��" => "װ�β��", "����" => "����");



$ZT_HUXING_EXT_8  = array("����" => "����", "���" => "���", "װ�β��" => "װ�β��", "����" => "����", "ɳ����" => "ɳ����", "�輸" => "�輸", "װ�ι�" => "װ�ι�", "�߼�" => "�߼�", "����" => "����");



$ZT_HUXING_EXT_9  = array("1.8��" => "1.8��", "1.5��" => "1.5��", "1.2��" => "1.2��", "��ͷ��" => "��ͷ��", "���ӹ�" => "���ӹ�", "װ�ι�" => "װ�ι�", "��ױ̨" => "��ױ̨", "�¹�" => "�¹�", "����" => "����", "���" => "���", "װ�β��" => "װ�β��", "������" => "������", "����" => "����");



//���

$ZT_HUXING_EXT_10  = array("��ӣ��" => "��ӣ��", "ƻ��ľ" => "ƻ��ľ", "�ʺ���" => "�ʺ���", "����ѷ" => "����ѷ", "����ľ" => "����ľ", "������" => "������", "���̴" => "���̴", "�׷�" => "�׷�", "Ī���" => "Ī���", "Ħ��" => "Ħ��", "�»���" => "�»���", "��������" => "��������", "Ӣ�װ���" => "Ӣ�װ���", "�����" => "�����", "ҹ��ڿ���" => "ҹ��ڿ���", "�ǹ���ɫ���ܰ�" => "�ǹ���ɫ���ܰ�", "�ƺ쿾��" => "�ƺ쿾��", "�λ��Ͼ�" => "�λ��Ͼ�", "�ۺ쿾��" => "�ۺ쿾��");//, "��������" => "��������"





$NEW_SITE_BANNER_TYPE['124']="����Ƶ���ֲ�ͼ-����(955*532)";

$NEW_SITE_BANNER_TYPE['125']="����Ƶ�������Ƽ��Ҳ���ͼ";

$NEW_SITE_BANNER_TYPE['126']="����Ƶ���ֲ�ͼ-խ��(725*532)";



////��Դͳ������ 2010-03-19

$POST_SEARCH_ARRAY = array(1 => '¥��', 2 => '����', 3 => '����');



$POST_SEARCH_ARRAY2 = array('020' => '����', '010' => '����', '021' => '�Ϻ�');



$OUR_IPS = "'121.33.212.1','121.33.212.2','121.33.212.3','121.33.212.4','121.33.212.5','121.33.212.6','121.33.212.7','59.41.14.58', '59.41.14.59', '59.41.14.60', '59.41.14.61', '59.41.14.62', '121.33.212.1', '121.33.212.2', '121.33.212.3', '121.33.212.4', '121.33.212.5', '121.33.212.6', '121.33.212.7', '183.63.103.82', '183.63.103.83', '183.63.103.84', '183.63.103.85', '183.63.103.86', '14.18.144.234', '14.18.144.235', '14.18.144.236', '14.18.144.237', '14.18.144.238', '14.23.158.218', '14.23.158.219', '14.23.158.220', '14.23.158.221', '14.23.158.222', '14.23.158.217', '14.23.157.242', '14.23.157.243', '14.23.157.244', '14.23.157.245', '14.23.157.246'";



$MY_DIY_FORM_ARRAY = array(1 => '����', 2 => '��ϵ�绰', 3 => '��ַ', 4 => 'ʡ��', 5 => '�״��ύʱ��', 6 => '��Ϣ��Դ', 7 => '����ύʱ��', 8 => '����ύ��ʽ', 9 => '״̬', 10 => '״̬����ʱ��', 11 => '��ʾ��ַ', 12 => '��ʾ������Ʒ��Ա', 13 => '�����ʱ��', 14 => '�ƻ�����ʱ��', 15 => 'ʱ����', 16 => '�ŵ��б�', 17 => '��ʾ����ύ��ʽ', 18 => '��ʾ�ͻ���', 19 => '��ɽ���', 20 => '�ƻ�����ʱ��', 21 => '������', 22 => '�ͻ����', 23 => '��ʾ�ͻ����', 24 => '��ʾIP', 25 => '�ƻ�����ʱ�䵱��', 26 => '����ύʱ����������', 27 => '��ʾ����������', 28 => '������', 29 => '�����ͷ�', 30 => '���ʦ', 31 => '�ͷ�ȷ���ȼ�', 32 => '����ȷ���ȼ�', 33 => '������ʱ��', 34 => '�����߳�������δ����', 35 => '���η�����һ����δ����', 36 => '������ַ', 37 => '��ʾ������ַ', 38 => 'δ����¥�̻���', 39 => '��ɱ״̬', 40 => '�Ƿ�����', 41 => '�ɽ�ʱ��', 42 => '��ʾ�ͻ�QQ', 43 => '��ʾ����QQ', 44 => '��ʾ����QȺ', 45 => '��ʾ����¥��', 46 => '�ͻ�QQ', 47 => '����QQ', 48 => '����QȺ', 49 => '����¥��', 50 => '����excel', 51 => '��ʾ������', 52 => '����ȡ���۾�');





$SEARCH_DEFAULT_ARRAY = array(1  => '����', 2 => '����');



/*

$ZT_LOUPAN_JINDU_TYPE = array(1 => '��������հ׻���', 2 => '�������廧��ƽ�沼��ͼ', 3 => '���굥�巿��հ׻���', 4 => '���굥��ƽ�沼��ͼ', 5 => '���귽��', 6 => '�ѷ���ƥ����', 7 => '�����������', 8 => '���巿�仧��Сͼ�ϴ�', 9 => '���巿��ƽ�沼��Сͼ�ϴ�', 10 => '����Ч���б�ҳСͼ�ϴ�', 11 => '�����ϴ�', 12 => '���˵�����', 13 => '��������');



$ZT_LOUPAN_JINDU_URL = array(1 => 'zt_loupan_edit2.php?id=', 2 => 'zt_loupan_edit2.php?id=', 3 => 'taocan_bz_room_add.php', 4 => 'taocan_bz_layout_add.php', 5 => 'taocan_add.php', 6 => 'taocan_list.php', 7 => 'taocan_list5.php', 8 => 'zt_loupan_edit2.php?id=', 9 => 'zt_loupan_edit2.php?id=', 10 => 'zt_loupan_edit2.php?id=', 11 => 'zt_loupan_edit2.php?id=', 12 => 'zt_loupan_edit2.php?id=', 13 => 'zt_loupan_edit2.php?id=');

*/



$op = $OPFILE = str_replace(".php", "", basename($_SERVER['PHP_SELF']));



//if(eregi("_edit", $OPFILE) || eregi("_add", $OPFILE)) die("��̨ά���У���ʱ���ܽ������Ӻͱ༭������29������10�㣬��ΰ�Ὺ�Ź��ܣ���ȴ���");



//////////





if($OPFILE != "admin" && $OPFILE != 'index' && $OPFILE != 'login' && $OPFILE != 'logout' && $OPFILE != 'pn3_file_check_mrs' && $OPFILE != 'update' && $OPFILE != 'upload_danti' && $OPFILE != 'bz_danti_search' && $OPFILE != 'free_design_apply_js' && $OPFILE !='ip_do' && !$_member->islogin && !$_member->is_member && $OPFILE != 'callcenter' && (defined("_LANMU") or eregi("/tongjisys/", $_SERVER["REQUEST_URI"])) && !defined("NO_CHECK_LOGIN")){

	header("location: /all/login.php?go_url=".urlencode($_SERVER["REQUEST_URI"]));

	exit;

	//_s('', '���ȵ�¼!', 'login.php?go_url='.urlencode($_SERVER["REQUEST_URI"]));



}







if(!$_member->is_admin && !defined("NO_CHECK_LOGIN")){

	if(defined("_LANMU") && _LANMU != 'S1'){

		///

		//if(_LANMU == 'NO' && !$_member->is_super_admin) _s('', '��û��Ȩ�޷���'.$LANMU_ARRAY[_LANMU]."�����Ŀ��");



		$tmp_info = split(",", $_member->group_info[cats]);



		if(!in_array(_LANMU, $tmp_info)) _s('', '��û��Ȩ�޷���'.$LANMU_ARRAY[_LANMU]."�����Ŀ��", _ROOT);







	}



}





////////��¼����Ա����

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



//unset --�ͷŸ����ı���



//unset($log_info);

/**********

�ѳ����µ�



include("./include/check.php");

	include("../include/database.php");



�滻Ϊ���³���



define("_LANMU", 'T');//��Ŀid��



define('_ROOT', '.');



///

include_once("include/header.inc.php");

///////////







////������ӡ��༭��ɾ������Ȩ��

//��Ҫ���Ĵ��������Ӵ����,��add,edit,del��������

_check('del');





***********/





$ses_admin_user_name = $_member->username;



$ses_admin_user_id = $_member->id;



//$TAOCAN_BZ_ROOM_CAT[7] = "����";//�Ժ�ŵ�base_info



define("SP_FLASH_XML_DIR", _ROOT."/../update_user/software/spzpstart/start/flash/");



define("WAYES_FLASH_XML_DIR", _ROOT."/../update_user/software/wayesstart/start/flash/");



//��Ʒflash����

$_SP_FLASH_TYPE_ARRAY = array(0 => '��ȫ���汾��ʾ', 1 => '�ڼ��˵����ʾ', 2 => '��ֱӪ�����ʾ');









//ά���������

$_WAYES_FLOW_TYPE = array(1 => '������', 2 => '����ҳ', 3 => '����ҳ', 4 => '�����б�ҳ');



////��Ϣ��Դ

$TEL400_SOURCE_TYPE = array( 2 => '��������', 1 => '��������', 3 => '��������', 4 => '400����δ��', 40 => '400�����ѽ�', 5 => 'TQ����', 6 => '������ʽ', 7 => '��ɱ����', 8 => '�����˱���', 9 => '¥���Ź�', 10 => '�Ź���ҳ��', 11 => '���߿ͷ�', 12 => '�����Ź�', 13 => '�ͼ���', 14 => '���ػ', 15 => '�Ͽͻ�����', 16 => '725�Ź�', 17 => '���߿ͷ�/725�Ź�', 18 => '���־��Ź�', 19 => '91�Ź�', 20 => '8.7�Ź��', 21 => '���߿ͷ�/8.7�Ź��');



make_class("_fankui_sourse_type");

$TEL400_SOURCE_TYPE = $_fankui_sourse_type->get_array();





////�����Ӧ����  bz_room_data

/*

//�������ͣ�0-δ����

//			1-���� 11-���˷� 13-�ͷ� 12-��ͯ��

//			2-�Ͳ��� 21-���� 22-����

//			3-�鷿

//			4-������ 5-���� 6-��Ԣ



*/



//����δ��������

$SP_CHULI_TYPE = array(0 => 'δ����', 1 => '������', 2 => '�Ѵ���', 3 => '�����',4 => 'ȫ��');





//����ռ䷽��

$DX_FANGAN_TYPE = array(0 => 'δ����', 1 => '������', 2 => '�����', 3 => '������');







//////�ٶ�api

$BAIDU_MATCH_TYPE = array('AbroadMatch' => '�㷺ƥ��', 'PhraseMatch' => '����ƥ��', 'ExactMatch' => '��ȷƥ��');

//$tmp_array = array(1 => 'ExactMatch', 2 => 'PhraseMatch', 3 => 'AbroadMatch');

$BAIDU_MATCH_TYPE2 = array('AbroadMatch' => 3, 'PhraseMatch' => 2, 'ExactMatch' => 1);





$BAIDU_PAUSE_TYPE = array('true' => '��ͣ', 'false' => '����');



$BAIDU_REPORT_TIME_TYPE = array('�ձ�', '�ܱ�', '�±�', '�걨');



$BAIDU_SHOWPROB_TYPE = array(1 => '��ѡ', 2 => '�ȸ���');



$BAIDU_JOIN_TYPE = array('true' => '�μ�', 'false' => '���μ�');//�μ�����



$BAIDU_PLAN_STATUS = array('21' => '��Ч', '22' => '�����ݶ��׶�', '23' => '��ͣ�ƹ�', '24' => '�ƹ�ƻ�Ԥ�㲻��', '25' => '�˻�Ԥ�㲻��');



$BAIDU_UNIT_STATUS = array('31' => '��Ч', '32' => '��ͣ�ƹ�', '33' => '�ƹ�ƻ���ͣ�ƹ�');



$BAIDU_KEYWORD_STATUS = array('41' => '��Ч', '42' => '��ͣ�ƹ�', '43' => '�����ƹ�', '44' => '������Ч', '45' => '������', '46' => '�����', '47' => '����������');



$BAIDU_IDEA_STATUS = array('51' => '��Ч', '52' => '��ͣ�ƹ�', '53' => '�����ƹ�', '54'  => '������', '55' => '�����');



$BAIDU_CITY_TYPE = array('gzzy' => '����', 'shzy' => '�Ϻ�', 'bjzy' => '����', 'sdzy' => 'ɽ��', 'njzy' => '�Ͼ�');//



//////////

//������Դ����

$DB_USER_TYPE = array(1 => '400��̨', 2 => '��Աע���̨', 3 => '���͹滮�ύ', 4 => '�ֹ����', 5 => '�ƹ�¥��QQ', 6 => '����ͻ��ύ��Ǳ�ڿͻ�', 7 => '��ǵ�QQ����Ⱥ��');



//���ݿͻ����� new

$DB_USER_GROUP_TYPE = array(1 => 'Ǳ�ڿͻ�', 2 => '����ͻ�', 3 => '��������');



//Ǳ�ڿͻ� �ͻ���Դ ����

$DB_QIANZAI_KEHU_TYPE = array(2 => 'ע���Ա', 5 => '¥���ƹ����ϵͳ�ύ(¥��QQȺ)', 6 => '����ͻ�����ϵͳ�ύ', 7 => '��ǵ�QQ����Ⱥ��');//, 3 => '���͹滮�ύ', 4 => '�ֹ����'



//����ͻ� �ͻ���Դ

$DB_YIXIANG_KEHU_TYPE = array(11 => '���߿ͷ�', 85 => 'QQȺ�ύ', 86 => '��̳�ύ', 92 => '������ʽ');



//�ύʱ�䷶Χ

$YX_TIJIAO_TIME_TYPE = array(1 => '�ύʱ��һ������', 2 => '�ύʱ��ڶ�������', 3 => '�ύʱ�����������', 9 => '�ύ��3�����ڹ�3����', 21 => '�ύ��2�����ڹ�2����', 12 => '�ύʱ�������', 4 => '��¥����6�¼�5�£�4�£�3�¹�4��', 5 => '��¥����2��', 6 => '��¥����1��', 7 => '��¥��2������', 8 => '��¥ǰ1���¼���¥��1���¹�2����', 10 => '״̬����ʱ�����������', 13 => '״̬����ʱ�����������', 11 => '״̬����ʱ���һ������', 100 =>'δ����,δ�ɽ��Ŀͻ�(ȫ��ʮ������)', 101 =>'�ɽ�ʱ��������������', 102 =>'�ɽ�ʱ��������������');





//��������

$YX_OP_TYPE = array(1 => '���ŷ���', 2 => '�ʼ�����');



//�������

$YX_RESULT_TYPE = array(0 => 'δ����', 1 => '���ͳɹ�', 2 => '����ʧ��');



//��������

$YX_SEND_TYPE = array(1 => '���ŷ���', 2 => '�ʼ�����');



//�������� ��

$YX_MISSION_TYPE = array(1 => '����ע��', 2 => '������ע���Ա�Լ��ύ��Ϣ�ͻ�(��Ӧ��һ,Ʒ��ѭ��)', 3 => '�������ύ�ĸ����пͻ������������ߡ��ѿ������������У�(��Ӧ����)', 4 => '�Զ���');



//��������

$YX_TIME_TYPE = array(1 => '���̷���', 2 => 'ÿ����һ', 3 => 'ÿ������');



//�������� new

$YX_TIME_TYPE_NEW = array(1 => '���̷���',  4 => 'ÿ��һ��', 5 => 'ÿ����һ��', 6 => 'ÿ��һ��', 10 => '�����û�����(ȫ��ʮ������)');//2 => 'ÿ����һ(Ʒ��ѭ��)', 3 => 'ÿ������',



//�ʼ�����ģ��

$YX_EMAIL_TPL_CAT = array(1 => '֪ʶ��ZS�ʼ�', 2 => 'Ʒ����PP�ʼ�', 3 => '������CX�ʼ�', 4 => '�������YQ�ʼ�', 5 => '�ɽ��ͻ�CJ�ʼ�', 6 => 'QQ����QQ�ʼ�');

$YX_EMAIL_TPL_TYPE = array(1 => 'ZS', 2 => 'PP', 3 => 'CX', 4 => 'YQ', 5 => 'CJ', 6 => 'QQ');



//���ŷ���ģ��

$YX_SMS_TPL_CAT = array(2 => 'Ʒ����PP����', 3 => '������CX����', 4 => '�������YQ����', 5 => '�ɽ��ͻ�CJ����');

$YX_SMS_TPL_TYPE = array(2 => 'PP', 3 => 'CX', 4 => 'YQ', 5 => 'CJ');

//������෢�ʹ���

$YX_SMS_TPL_SEND_NUM_ARRAY = array(2 => 12, 3 => 6);





//��������,Ӫ��ϵͳ��

$SEARCH_CITYS = array('����' => '����', '����' => '����', '�Ϻ�' => '�Ϻ�', 'ɽ��'=>'ɽ��');//, '����' => '����'



$CHUGUI_TYPE = array(0 => 'δ����', 1 => '�Ѵ���', 2 => '���ܴ���');





$_KEYWORD_ARTICLE_CAT_TYPE = array(1202 => 'װ��ҳ��', 1201 => '���ƼҾ�ҳ��', 1200=>'����ҳ��', 1199 => '�¹�ҳ��', 1198 => '������ҳ��', 1197 => '�´���ҳ��');



$_BAIDU_UPLOAD_TYPE = array(1 => '�ȴ��ϴ�', 2 => '���ϴ�', 3 => 'ȡ���ϴ�', 4 => '����Ҫ����', 5 => '�ȴ�����������', 6 => '���������ڸ���');



$_BAIDU_REPORT_TYPE = array('keyword' => '�ؼ��ֱ���', 'idea' => '���ⱨ��');



$GX_SHENPI_TYPE = array(1 => '�����', 2 => '���ͨ��', 3 => '���δͨ��');



$GX_YUANYIN_TYPE = array(1 => '���ӱ�ɾ��', 2 => '���ӵ�ַ�ظ��ύ', 3 => '���������������޹�', 4 => '���ӵ�ַ�޷���', 5 => '���Ӵ���', '���������', '����ҳ�治����', '��ֹ����QQ�ռ�', '��ֹ���ڲ������԰�', '��̳���¾��������޹�', 'ͬһ��̳���ֻ�ܷ�5����', 'ͬһ����ֻ�ܷ�10����');



//����Ӽ����ֶ�ԭ�� ��������ӡ�����ҳ�治���ڡ���ֹ����QQ�ռ䡢��ֹ���ڲ������԰塢��̳���¾��������޹�





//����ϵͳ,�ƻ�����ʱ�����״̬

$_GJ_USER_JIHUA_SHENPI_TYPE = array(1 => '�����', 2 => '�����', 3 => 'δ���', 4 => '���´����');





$CAIJI_TYPE = array(0 => '�ǲɼ�', 1 => '�ɼ�',2 => 'ģ������');





/*

������ҳ��

http://www.homekoo.com/zhixiao/selling

��3���¹���ҳ��

http://www.homekoo.com/zhixiao/chest

��4��������ҳ��

http://www.homekoo.com/zhixiao/cabinet

��5�����ƼҾ���ҳ��

http://www.homekoo.com/zhixiao/custom_made

��6��װ����ҳ��

http://www.homekoo.com/zhixiao/building

*/



///����ײ�Ȩ��,��ǿ ����,����,�Ͳ���

//$_SHF_FANG_CAT = array('��ǿ' => '4,5,8');





//$_SHF_NOT_SHOW = array('��ǿ' => '200004', '���' => '200227');//�������Է���˵�



//���߿ͷ� �ƹ��ύ ��̳�ύ 400�ͷ��ύ ֱ���ύ

$_TG_SOURSE_TYPE = array(1 => '���߿ͷ�', 2 => '�ƹ��ύ', 3 => '��̳�ύ', 4 => '400�ͷ��ύ', 5 => 'ֱ���ύ');





$_TG_ZX_TYPE = array(1 => 'ë��', 2 => '��װ��', 3 => '��װ��');



$_TG_LEVEL_TYPE = array(1 => 'A��', 2 => 'B��', 3 => 'C��', 4 => 'D��');



//��ͨ״̬

$_TG_TALK_TYPE = array(3 => 'ȡ������', 1 => '������', 2 => '�����');





//���￨����״̬

$_GET_CARD_DO_TYPE = array(1 => '������', 5 => '�����', 2 => '�ѿ��', 3 => '�ͻ�ȷ���յ�', 4 => 'ȡ��');



$_GET_CARD_SEND_TYPE = array(0 => 'û����,���˹���ϵ', 1 => '���ͳɹ�', 2 => '����ʧ��,���˹���ϵ');





//��ͥ��Ա

$LIANGCHI_NUM_ARRAY = array(1 => '����', 2 => '2����', 3 => '3����', 4 => '4����', 5 => '5����', 6 => '6����');



//�Ա�

$LIANGCHI_SEX_ARRAY = array(1 => '����', 0 => 'Ůʿ');



//���

$LIANGCHI_SIZE_ARRAY = array(80 => '80ƽ������', 100 => '80-100ƽ��', 120 => '80-100ƽ��', 150 => '120-150ƽ��', 300 => '150ƽ������');





//����

$LIANGCHI_TYPE_ARRAY = array(11 => 'һ��һ��', 21 => '����һ��', 22 => '���Ҷ���', 32 => '���Ҷ���', 42 => '���Ҷ���');





//����

$LIANGCHI_TYPE2_ARRAY = array('a' => '��', 'b' => '��ʽ', 'c' => '����', 'd' => '��װ��', 'e' => 'ë����', 'f' =>'�ɷ�����');



//װ�޽׶�

$LIANGCHI_DECORATION_ARRAY = array(1 => '׼��װ��', 2 => '����װ��', 3 => '�Ѿ�װ����');



//�ƻ���סʱ��

$LIANGCHI_TIME_LIMIT_ARRAY = array(2 => '2����', 4 => '1������', 8 => '2������', 12 => '3������', 52 => '3�����Ժ�');



//�����Ҿ�Ԥ��

$LIANGCHI_BUDGET_ARRAY = array(1 => '1������', 2 => '1-2��', 3 => '2-3��', 5 => '3-5��', 10 => '5-10��', 100 => '10������');





//�ͻ�״̬

$LIANGCHI_STATUS_ARRAY = array(0 => '�����߿ͻ�', 1 => '�����߿ͻ�', 2 => '�ѳɽ��ͻ�');



//004 ��ǰ����

$PINDAO_LUYIN_ARRAY = array('000' => '½��ϼ','002' => '��Ө','003' => '����/�ֽ���','004' => '������','005' => '��Ƽ','006' => '������','007' => '��ɺɺ','008' => '������','009' => '������','010' => '�ξ��','011' => '����÷','001' => '��־��','012' => '����Ȩ','013' => '������','014' => '������','015' => '�»���','016' => '016');//'001' => '������'

/*

�������̨¼��Ƶ���������졢������������ŷ���ٸ���Ϊ������   �һ���û�ҵ��������Ƶ��  

���罨(635848017)  16:54:58�Ϻ����̨¼��Ƶ����������»��ݡ������������� �Ųʾ�/���������Ϊ��ɺɺ

��Ƽ(465120771)  17:00:10�������̨¼��Ƶ�������������ᣬ����Ȩ�������½����Ϊ½��ϼ����÷��Ϊ�ξ�꣬���罨��Ϊ��Ө

*/



$FENJI_LUYIN_TYPE = array(1 => '����绰', 2 => '����');





$ZT_TUANGOU_STATUS = array(0 => '����ʾ', 1 => '������');



$ZT_TUANGOU_TYPE = array(0 => 'ͼƬ', 1 => '�ı�', 2 => 'ý��', 3=>'�̶�');







$CHUJIA_TYPE = array( 1 => '��������', 2 => '��������');



$MUBIAO_PAIMING = array(1 => '�ŵ�����һ', 2 => '�ŵ����ڶ�', 3 =>'�ŵ�������', 4 =>'�ŵ�������',11 => '�ŵ��Ҳ��һ', 12 => '�ŵ��Ҳ�ڶ�', 13 =>'�ŵ��Ҳ����', 14 =>'�ŵ��Ҳ����');



$SYS_TYPE = array(1 => '400��̨', 2 => 'ֱ����̨');

$SYS_YZ_TYPE = array(1 => '�ȴ���֤', 2 => '��֤�ɹ�', 3 => '��֤ʧ��');





$ZUOXI_QUANXIAN_TYPE = array(1 => '�������еĿͻ�',2 => 'ֻ�ܿ����Լ��Ŀͻ�(�ƹ�Ϳͷ�����Ч)', 3 => '�ܿ����ƹ㱾��Ŀͻ�');



$ZUOXI_SP_QUANXIAN_TYPE = array(1 => '�������߿ͷ���Դ',2 => '��Ȼ�ύ�Ŀͻ�����û�д��ƹ���Ա�����Ĺ��ݿͻ���', 10 => '���Ե����ͻ���Ϣ(��ʱֻ���޽�)', 11 => '�绰רԱ(�����ͷ�����ְλ��Ա)');



$BAIDU_TIAO_TYPE = array(1 => '�����ɹ�', 5 => '��߼�̫��,�����ŵ�Ŀ��', 6 => '��ͼ�̫��,�����ŵ�Ŀ��', 2 => '�������ɹ�', 3 => '���ܵ���Ŀ��,ά�����������˼۸�', 4 => '���ܵ���Ŀ��,���������');







$TUIGUANG_DINGJIN_TYPE = array(100 => '�ѽ�100Ԫ����', 1 => 'δ��100Ԫ����');





$_DAIJINJUAN_SEND_TYPE = array(1 => '���ͳɹ�', 2 => '����ʧ��,���˹���ϵ');



$DESIGNER_REJECT_TYPE = ARRAY(1 => '���ʦ��ͷ���æ�ܾ�', 2 => '���ʦ�Ѿ�����,�����Լ��ܾ���', 3 => '���ʦ�Ѿ�����,���������ʦ�ܾ�');



//�ֳ߷��͸����ʦ���ż�¼ ����

$FENCHI_TYPE = array(1 => '���η��͸����ʦ����', 2 => 'һСʱû���յ����Ѷ���', 3 => '��Сʱ������Ѷ���', 4 => 'ȷ�Ͻ��պ��յ�����', 5 => '�鳤���ղ�ȷ�Ϻ����ʦ�Ž��յĶ���', 6 => '�鳤���պ���յĶ���', 7 => '�����ߺ󷢸��ͷ��Ķ���');







//�ֳ߷��͸����ʦ���ż�¼ ����״̬

$FENCHI_SEND_TYPE = array(1 => '�ȴ�����', 2 => '�ѷ�', 3 => '�ܾ����ѽ��պ�ȡ���˷���', 4 => '<b>����ʧ��,���˹���ϵ</b>');





$LIANGCHI_KEHU_CHENGJIA_TYPE = array(1 => '�ѳɽ�', 2 => 'δ�ɽ�');





$_TAOCAN_SET_ARRAY = array(1 => '����', 2 => 'δ��');





$LIANGCHI_DIAOCHA_TYPE = array(1 => '��ѡ', 2 => '�ı���д����', 3 => '��ѡ(��ʱ����)');



//���ײ͹���������¼����

$FROM_TAOCAN_LIANGFANG_RECORD_ARRAY = array(1 => '�Ӱ�ť��ϲ�����׵������', 2 => '�Ӱ�ť���������뷨�������');



//��Ʒ��ά�⡢ά�С�����

$SOFT_USER_PINPAI_ARRAY = array('��Ʒ' => '��Ʒ', 'ά��' => 'ά��', 'ά��' => 'ά��', 'ͨ��' => 'ͨ��', '����' => '����');





//����ҳȫ�ݼҾ߶������� ����

$NEW_INDEX_DINGZHI_CAT = array(1 => '�巿����', 2 => '�ķ�����', 3 => '��������', 4 => '��������');





//ά������ɫ�����

$WAYES_PHOTO_CAT = array(1 => '��', 2 => '��', 3 => 'ɫ', 4 => '��');





//�������

$BAIDU_KEYWORD_ARRAY = array(1 => '���Ĵ�', 2 => '��Ե��');





//���Ĵʵ�����Ե�ʵ����

$BAIDU_KEYWORD_CAT = array(1 => 'A+', 2 => 'B+',3 => 'C+', 4 => 'D+', 5 => 'E+', 11 => 'A', 12 => 'B',13 => 'C', 14 => 'D', 15 => 'E', 16 => 'F');







//�쳣����

$BAIDU_KEYWORD_YICHANG_CAT = array(100 => '��ʾ���е��쳣', 1 => '�����ɱ��쳣', 2 => '������3��1�쳣',3 => '������3��2�쳣', 4 => '������2��1�쳣', 5 => '����λ���쳣', 6 => '���Ѳ����쳣', 7 => '���ѳ����쳣');



//������Դ

$BAIDU_KEYWORD_BAOMING_ARRAY = array(1 => '��Ȼ�ύ', 2 => '���߿ͷ��ύ');



$RIGHT_WIN_OP_TYPE = array(1 => '��ʾ', 2 => '���');



$SOFT_USER_LOGIN_TYPE = array(1 => 'PC��¼', 2 => '�ֻ���½');





//huxing_designer

$CITY_ID_ARRAY = array(1=> '����', 10 => '����' ,11 => '�Ϻ�');



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





$_SHENPI_TYPE = array(1 => '���ͨ��', 2 => '���δͨ��');



//��Ʒָ������ʱ��

$LIPIN_BUY_DATE_ARRAY = array(1 => '11��25��', 2 => '11��26��', 3 => '11��27��', 4 => '11��28��', 5 => '11��29��', 6 => '11��30��', 7 => '12��9��', 8=>'12��16��', 9=>'12��23��', 10=>'12��30��', 11=>'1��6��');



//��Ʒ����״̬

$LIPIN_DO_TYPE = array(1 => 'δ����', 2 => '��֪ͨ��ȡ', 3 => '����ȡ', 4 => '��Ч����');





$SOFT_SHOUJI_FANGJIAN_CAT = array(1 => '�ֻ�', 2 => 'PC');

$SOFT_SHOUJI_CAIJI_CAT = array(1 => '�״�', 2 => '��ͼ');



$SOFT_MISSION_PIC_TYPE = array(1 => 'ƽ�沼��ͼƬ', 2 => '��ϲ���ͼƬ', 3 => '���ӽ�ͼƬ');





$TIYAN_PIC_TOP_TYPE = array(10 => '��߼��ö�', 5 => '�����ö�', 1 => '�����ö�');





$SHOWHOME_CAT = array(1 => '��ͼʾ��', 2 => '����ɹ��', 3 => 'ʱ��ɹ��', 4 => '����ɹ��', 5 => '����ɹ��', 6 => '����ɹ��');



$HUOJIANG_TYPE = array(1 => '�ھ�', 2 => '�Ǿ�', 3 => '����');







$BAIDU_KEY_CAT = array(1 => '�ϴ�', 2 => '���');



$BAIDU_KEY_CHAI_TYPE = array(1 => 'δ���', 2 => '�Ѳ��');





$BAIDU_KEY_CITYS = array('����' => '����', '����' => '����', '�Ϻ�' => '�Ϻ�','ɽ��' => 'ɽ��');



$BBS_INDEX_CAT_ARRAY = array(

1 => '�¾�ͷ��', 

96 => '���ƴ���',

14 => '�Ҽ������',

99 => '�¾�Ц̸', 

63 => '��¥', 

64 => 'װ�޲���', 

65 => '�Ҿ���װ', 

66=>"װ�ް���", 

67=>"�¾�ɹ��", 

87 => '����װ��', 

88 => '����װ��', 

89 => '�鷿װ��', 

90 => '��ͯ��װ��', 

91 => '�Ͳ���װ��', 

1001=>'�����Ƽ�', 

1002=>'��������', 

1003=>'�����', 

1004=>'����ͼ��', 

1005=>'�Ҿ���װ--�¹�', 

1006=>'�Ҿ���װ--�¹�--��������', 

1007=>'�Ҿ���װ--�Ҿ���Ѷ', 

1008=>'װ�ް���--�Է�', 

1009=>'װ�ް���--����', 

1010=>'װ�ް���--��װ��', 

1011=>'װ�ް���--�Ҿӷ�ˮ', 

1012=>'װ�޲���--����', 

1013=>'װ�޲���--Ϳ��', 

1014=>'��¥-��¥ע������', 

1015=>'�¾�ɹ��-���ƴ���', 

1016=>'�¾�ɹ��-�鷿װ��', 

1017=>'��̳��ҳ�Ҳ���ͼ1(226*115)', 

1018=>'��̳��ҳ�Ҳ���ͼ2(226*189)',

1020=>'��̳��ҳ�м�-���ӹ�(220*120)',

1021=>'��̳��ҳ�м�-ɳ��(220*120)',

1022=>'��̳��ҳ�м�-���(220*120)',

1023=>'��̳��ҳ�м�-����(220*120)',

1024=>'��̳��ҳ�м�-�鷿(220*120)',

1025=>'��̳��ҳ�м�-�����귿(220*120)',

1026=>'��̳��ҳ�м�-��ש(220*120)',

1027=>'��̳��ҳ�м�-�ذ�(220*120)',

1028=>'��̳��ҳ�м�-[�鷿ע������](220*120)',

1029=>'��̳��ҳ�м�-[��¥�������](220*120)',

1030=>'��ҳ���վ۽�',

1066=>'��ҳ���վ۽��ұ���ͼƬ221*171',

1031=>'��ҳ������̸',

1065=>'��ҳ������̸�ұ���ͼƬ221*171',

1032=>'��ҳ���Ҳ���',

1033=>'��ҳ��װ��',

1034=>'��ҳ�������',

1035=>'��ҳ��ʦ��Ʒ193*120',

1036=>'��ҳ��װ��ͼ193*120',

1037=>'��ҳ�Ҿ�Ʒ��',

1038=>'��ҳ�Ҿ���Ѷ',

1039=>'��ҳ�Ҿ���װ�¹���ͼƬ130*87',

1040=>'��ҳ�Ҿ���װ������ͼƬ130*87',

1041=>'��ҳ�Ҿ���װɳ����ͼƬ130*87',

1042=>'��ҳ�Ҿ���װ�Ҿ߳���ͼƬ210*100',

1043=>'��ҳ���ĵ�����ש��ͼƬ130*87',

1044=>'��ҳ���ĵ�����ԡ��ͼƬ130*87',

1045=>'��ҳ���ĵ����ذ���ͼƬ130*87',

1046=>'��ҳ���ĵ���Ϳ����ͼƬ130*87',

1047=>'��ҳ���ĵ��������ͼƬ130*87',

1048=>'��ҳ���ĵ�������',

1049=>'��ҳװ�ް����Է�װ����ͼƬ130*87',

1050=>'��ҳװ�ް�������װ����ͼƬ130*87',

1051=>'��ҳװ�ް�����ͯ��װ����ͼƬ130*87',

1052=>'��ҳװ�ް�������װ����ͼƬ130*87',

1053=>'��ҳװ�ް�������װ����ͼƬ130*87',

1054=>'��ҳװ�ް����鷿װ����ͼƬ130*87',

1055=>'��ҳװ�ް�������',

1056=>'��ҳ��¥�鷿����',

1057=>'��ҳ��¥�鷿��¥ע������ͼƬ300*200',

1058=>'��ҳ��¥�鷿��¥ע������ͼƬ130*87',

1059=>'��ҳ��¥�鷿�鷿ע������ͼƬ130*118',

1060=>'��ҳ��¥�鷿��¥�������ͼƬ130*118',

1061=>'��ҳ���վ۽���߹��ͼƬ320*250',

1062=>'��ҳ��鵼��������ͼƬ230*127',

1063=>'��ҳ�������������ͼƬ1210*60',

1064=>'��ҳ�Ŵ�������ͼƬ230*381',

1067=>'��ҳ�����--��ͼƬ130*87',  

1068=>'��ҳ�Ҿ���װ�������',  

1069=>'�����б�ҳ�����Ƽ���ͼƬ210*151',  

 

 



 





);





$IS_USE_NETWORK_PIPEI_FLOW = true;//�Ƿ�ʹ���µ�ר������(�հ׻�����Ҫ��������;��������Ҫ����ƥ��)$_admin->username == 'feixin' || $_admin->username == 'yujin' ? true : false





$SITE_SEO_LANMU = array(1 => '��̳', 2 => 'װ��Ƶ��');





$SOFT_GUWEN_CAT = array(4 => '���ѡ��', 1 => '��ƹ淶', 2 => '�����Ƽ�', 5 => 'լ���Ƽ�', 3 => '��������', 6 => '���Ի�����');



//����Ƕȣ��ƹ���Ⱦ���ռ����Σ���Ʒ���

$SOFT_CHAPING_ARRAY = array(1 => '����Ƕ�', 2 => '�ƹ���Ⱦ', 3 => '�ռ�����', 4 => '��Ʒ���');



$SOFT_GUWEN_KONGJIAN_LEIXING = array('���Է�' => '���Է�', '���Է�' => '���Է�', '��ͯ��' => '��ͯ��', '�鷿' => '�鷿', '�Ͳ���' => '�Ͳ���', '��ñ��' => '��ñ��', '�����' => '�����', '����' => '����', '����' => '����');



$SOFT_GUWEN_FENGGE = array('������˹�Ͳ���' => '������˹�Ͳ���', '������˹����' => '������˹����', '������˹�鷿' => '������˹�鷿', '������˹�Է�' => '������˹�Է�', '�ŵ��ſͲ���' => '�ŵ��ſͲ���', '�ŵ�������' => '�ŵ�������', '�ŵ����鷿' => '�ŵ����鷿', '�ŵ����Է�' => '�ŵ����Է�', '��������Ͳ���' => '��������Ͳ���', '������������' => '������������', '���������鷿' => '���������鷿', '���������Է�' => '���������Է�', '��ŷ����Ͳ���' => '��ŷ����Ͳ���', '��ŷ��������' => '��ŷ��������', '��ŷ�����鷿' => '��ŷ�����鷿', '��ŷ�����Է�' => '��ŷ�����Է�', '����ɫ��Ͳ���' => '����ɫ��Ͳ���', '����ɫ������' => '����ɫ������', '����ɫ���鷿' => '����ɫ���鷿', '����ɫ���Է�' => '����ɫ���Է�', '����ɫ�Ͳ���' => '����ɫ�Ͳ���', '����ɫ����' => '����ɫ����', '����ɫ�鷿' => '����ɫ�鷿', '����ɫ�Է�' => '����ɫ�Է�', '�¹�ɭ�ֿͲ���' => '�¹�ɭ�ֿͲ���', '�¹�ɭ������' => '�¹�ɭ������', '�¹�ɭ���鷿' => '�¹�ɭ���鷿', '�¹�ɭ���Է�' => '�¹�ɭ���Է�', '���������Ͳ���' => '���������Ͳ���', '������������' => '������������', '���������鷿' => '���������鷿', '���������Է�' => '���������Է�', '�ѳǹ��¿Ͳ���' => '�ѳǹ��¿Ͳ���', '�ѳǹ�������' => '�ѳǹ�������', '�ѳǹ����鷿' => '�ѳǹ����鷿', '�ѳǹ����Է�' => '�ѳǹ����Է�', '�ڽܿ˿Ͳ���' => '�ڽܿ˿Ͳ���', '�ڽܿ�����' => '�ڽܿ�����', '�ڽܿ��鷿' => '�ڽܿ��鷿', '�ڽܿ��Է�' => '�ڽܿ��Է�', '�����οͲ���' => '�����οͲ���', '����������' => '����������', '�������鷿' => '�������鷿', '�������Է�' => '�������Է�', '����Ħ���Ͳ���' => '����Ħ���Ͳ���', '����Ħ������' => '����Ħ������', '����Ħ���鷿' => '����Ħ���鷿', '����Ħ���Է�' => '����Ħ���Է�', '��������' => '��������', '�ﰺ����Ͳ���' => '�ﰺ����Ͳ���', '�ﰺ��������' => '�ﰺ��������', '�ﰺ�����鷿' => '�ﰺ�����鷿', '�ﰺ�����Է�' => '�ﰺ�����Է�', '��������Ͳ���' => '��������Ͳ���', '�����������' => '�����������', '��������鷿' => '��������鷿', '��������Է�' => '��������Է�', '������Ӱ��ͯ��' => '������Ӱ��ͯ��', '������Ӱ�Ͳ���' => '������Ӱ�Ͳ���', '������Ӱ����' => '������Ӱ����', '������Ӱ�鷿' => '������Ӱ�鷿', '������Ӱ�Է�' => '������Ӱ�Է�', 'ľ�����Ͳ���' => 'ľ�����Ͳ���', 'ľ��������' => 'ľ��������', 'ľ�����鷿' => 'ľ�����鷿', 'ľ�����Է�' => 'ľ�����Է�', 'Ų����ɫ�Ͳ���' => 'Ų����ɫ�Ͳ���', 'Ų����ɫ����' => 'Ų����ɫ����', 'Ų����ɫ�鷿' => 'Ų����ɫ�鷿', 'Ų����ɫ�Է�' => 'Ų����ɫ�Է�', 'ŵ����Ӱ�Ͳ���' => 'ŵ����Ӱ�Ͳ���', 'ŵ����Ӱ����' => 'ŵ����Ӱ����', 'ŵ����Ӱ�鷿' => 'ŵ����Ӱ�鷿', 'ŵ����Ӱ�Է�' => 'ŵ����Ӱ�Է�', '�ഺ̽���к���' => '�ഺ̽���к���', '�ഺ̽��Ů����' => '�ഺ̽��Ů����', '�׶�֮�ͿͲ���' => '�׶�֮�ͿͲ���', '�׶�֮������' => '�׶�֮������', '�׶�֮���鷿' => '�׶�֮���鷿', '�׶�֮���Է�' => '�׶�֮���Է�', '˹�¸��Ħ�Ͳ���' => '˹�¸��Ħ�Ͳ���', '˹�¸��Ħ����' => '˹�¸��Ħ����', '˹�¸��Ħ�鷿' => '˹�¸��Ħ�鷿', '˹�¸��Ħ�Է�' => '˹�¸��Ħ�Է�', '��˿���ؿͲ���' => '��˿���ؿͲ���', '��˿��������' => '��˿��������', '��˿�����鷿' => '��˿�����鷿', '��˿�����Է�' => '��˿�����Է�', '��������Ͳ���' => '��������Ͳ���', '�����������' => '�����������', '��������鷿' => '��������鷿', '��������Է�' => '��������Է�', '��ɽ���ϿͲ���' => '��ɽ���ϿͲ���', '��ɽ��������' => '��ɽ��������', '��ɽ�����鷿' => '��ɽ�����鷿', '��ɽ�����Է�' => '��ɽ�����Է�', '�¹ŵ�Ͳ���' => '�¹ŵ�Ͳ���', '�¹ŵ�����' => '�¹ŵ�����', '�¹ŵ��鷿' => '�¹ŵ��鷿', '�¹ŵ��Է�' => '�¹ŵ��Է�', 'Ӣ��ӡ��Ͳ���' => 'Ӣ��ӡ��Ͳ���', 'Ӣ��ӡ������' => 'Ӣ��ӡ������', 'Ӣ��ӡ���鷿' => 'Ӣ��ӡ���鷿', 'Ӣ��ӡ���Է�' => 'Ӣ��ӡ���Է�', '�������Ͳ���' => '�������Ͳ���', '�����������' => '�����������', '��������鷿' => '��������鷿', '��������Է�' => '��������Է�', '����Ʈ��Ͳ���' => '����Ʈ��Ͳ���', '����Ʈ������' => '����Ʈ������', '����Ʈ���鷿' => '����Ʈ���鷿', '����Ʈ���Է�' => '����Ʈ���Է�', '�й��ϿͲ���' => '�й��ϿͲ���', '�й�������' => '�й�������', '�й����鷿' => '�й����鷿', '�й����Է�' => '�й����Է�', '������˹��ͯ��' => '������˹��ͯ��', '�ŵ��Ŷ�ͯ��' => '�ŵ��Ŷ�ͯ��', '���������ͯ��' => '���������ͯ��', '��ŷ�����ͯ��' => '��ŷ�����ͯ��', '����ɫ��ͯ��' => '����ɫ��ͯ��', '����ɫ���ͯ��' => '����ɫ���ͯ��', '�¹�ɭ�ֶ�ͯ��' => '�¹�ɭ�ֶ�ͯ��', '�ѳǹ��¶�ͯ��' => '�ѳǹ��¶�ͯ��', '�ڽܿ˶�ͯ��' => '�ڽܿ˶�ͯ��', '�����ζ�ͯ��' => '�����ζ�ͯ��', '����Ħ����ͯ��' => '����Ħ����ͯ��', '�ﰺ�����ͯ��' => '�ﰺ�����ͯ��', '���������ͯ��' => '���������ͯ��', 'ľ������ͯ��' => 'ľ������ͯ��', 'Ų����ɫ��ͯ��' => 'Ų����ɫ��ͯ��', 'ŵ����Ӱ��ͯ��' => 'ŵ����Ӱ��ͯ��', '�׶�֮�Ͷ�ͯ��' => '�׶�֮�Ͷ�ͯ��', '˹�¸��Ħ��ͯ��' => '˹�¸��Ħ��ͯ��', '��˿���ض�ͯ��' => '��˿���ض�ͯ��', '���������ͯ��' => '���������ͯ��', '��ɽ���϶�ͯ��' => '��ɽ���϶�ͯ��', '�¹ŵ��ͯ��' => '�¹ŵ��ͯ��', 'Ӣ��ӡ���ͯ��' => 'Ӣ��ӡ���ͯ��', '��������ͯ��' => '��������ͯ��', '����Ʈ���ͯ��' => '����Ʈ���ͯ��', '�й��϶�ͯ��' => '�й��϶�ͯ��','������������' => '������������','������������' => '������������','������ճ���' => '������ճ���','�����������' => '�����������','�����Ƴǳ���' => '�����Ƴǳ���','�����Ƴ�����' => '�����Ƴ�����','Ӣ����Ӱ����' => 'Ӣ����Ӱ����','Ӣ����Ӱ����' => 'Ӣ����Ӱ����','���̽�����' => '���̽�����','���̽������' => '���̽������','��˹������' => '��˹������','��˹�������' => '��˹�������','����ʱ�����' => '����ʱ�����','����ʱ������' => '����ʱ������','�Ͼ���Ӱ����' => '�Ͼ���Ӱ����','�Ͼ���Ӱ����' => '�Ͼ���Ӱ����','Ӣ��������' => 'Ӣ��������','Ӣ���������' => 'Ӣ���������','����ľ�����' => '����ľ�����','����ľ������' => '����ľ������','֥ʿ�������' => '֥ʿ�������','֥ʿ��������' => '֥ʿ��������','����������' => '����������','�����������' => '�����������','ά�����ǳ���' => 'ά�����ǳ���','ά����������' => 'ά����������','������Ӱ����' => '������Ӱ����','������Ӱ����' => '������Ӱ����','��������������' => '��������������','��������������' => '��������������','����ͼ֮ҹ����' => '����ͼ֮ҹ����','����ͼ֮ҹ����' => '����ͼ֮ҹ����','������������' => '������������','������������' => '������������','������������' => '������������','������������' => '������������','����Ľ˹����' => '����Ľ˹����','����Ľ˹����' => '����Ľ˹����','���麣��2����' => '���麣��2����','���麣��2����' => '���麣��2����','�ﰺ�������' => '�ﰺ�������','�ﰺ��������' => '�ﰺ��������');



$SOFT_GUWEN_MIANJI = array('60����/һ����' => '60����/һ����', '60-85/������' => '60-85/������', '85-150/������' => '85-150/������', '150����/�ľ���' => '150����/�ľ���', '200����/����' => '200����/����');











$SOFT_GUWEN_FANGJIA = array('5000����' => '5000����', '5000-7000' => '5000-7000', '7000-10000' => '7000-10000', '10000-15000' => '10000-15000', '15000����' => '15000����');





$SOFT_GUWEN_KONGJIAN_MIANJI = range(0, 100);



$TONGJI_SEM_TYPE = array(1 => 'SEM�ͻ������ύ', 2 => 'SEM���߿ͷ��ύ', 3 => 'SEM��ҵ��');

$TONGJI_SEM_CAT = array(1 => '�ٶȹ���', 2 => '�ٶȱ���', 3 => '�ٶ��Ϻ�', 4 => '�ٶ�ɽ��', 5 => 'google', 6 => 'soso����', 7 => '�ѹ�', 8 => '�ٶ�����', 9 => 'google����');





$TONGJI_ZIRAN_CAT = array(1 => '������Ȼip', 2 => '������Ȼip', 3 => '�Ϻ���Ȼip', 4 => 'ɽ����Ȼip', 5 => '��վ����Ȼip', 6 => '��վ��ip');



$APP_DOWN_TYPE = array(1 => 'android��������', 2 => 'android�ֻ�����', 3 => 'iphone��������', 4 => 'iphone�ֻ�����',5 => 'ipad��������', 6 => 'ipad�ֻ�����');



if(defined("_LANMU") && eregi("friend_link", _LANMU)) $FRIEND_LINK_TYPE = array(1 => '��������', 2 => '������վ', 3 => '�����Ƽ�');







$YUN_ACCOUNT_SHENPI_TYPE = array(1 => '������', 2 => '����ͨ��', 3 => '������ͨ��');



$YUN_ACCOUNT_SEND_TYPE = array(1 => '���ͳɹ�', 2 => '����ʧ��');



$TAOCAN_CENTER_LANMU_CAT = array(1 => '�ռ䶨��', 2 => '�����', 3 => '��϶���');

$TAOCAN_CENTER_BUTTON_TYPE = array(1 => '�����һ��', 2 => '���ȫ���ۿ�', 3 => '���ԤԼ����������', 4 => '���������ѯ');



$TAOCAN_PAIXU_SETTING_LANMU = array(1 => '�ռ䶨��', 2 => '�����', 3 => '��϶���', 4 => '�ֳ�Ƶ��', 5 => '�¹�Ƶ��');



$YUN_XG_PINPAI = array('��Ʒ' => '��Ʒ', 'ά��' => 'ά��', '����' => '����');



$YUN_XG_DENGJI = array(1 => '��', 2 => '��', 3 => '��', 5 => '����', 4 => '��Ч', 10 => 'δ����');

$TAOCAN_LIST_LANMU = array(1 => '�ռ䶨��', 2 => '�����', 3 => '��϶���');





//hr

$HR_USER_TYPE = array(1 => '��¼��', 2 => 'δ¼��');





$HR_SEX_TYPE = array('��' => '��', 'Ů' => 'Ů');



$HR_ZZMM_TYPE = array(1 => '��Ա', 2 => '��Ա', 3 => 'Ⱥ��');



$HR_HUNYIN_TYPE = array(1 => 'δ��', 2 => '�ѻ�', 3 => '������Ů', 4 => '����');



$HR_QIUZHI_TYPE = array(1 => '���ڴ�ҵ״̬�������ϰ�', 2 => '��ְ���ǻ�������', 3 => '��ְ������ְ��', 4 => '���ֹ���������,����и��ù���Ը����ְ', 5 => 'Ӧ���ҵ��');

$HR_GUIMO_ARRAY = array(1 => '����50��', 2 => '50-150��', 3 => '150-500��', 4 => '500������');



$HR_LUYONG_TYPE = array(4 => '������', 1 => '��¼��', 2 => 'A��δ¼��', 3 => 'B��δ¼��');



$NEW_SEARCH_KEYWORD_TYPE = array(1 => '¥�̳���', 2 => '¥������', 3 => '���', 4 => '���', 5 => '���', 6 => '�ײ͹ؼ���', 7 => '��������', 8 => '�۸�', 100 => 'ͨ����ؼ���');//�������(������ӹؼ���,������ʾ����ͼ)



//�ռ��ࡢ����ࡢ��Ʒ�ࡢ���������ࡢ������¥����

$NEW_SEARCH_KEYWORD_TYPE = array(13 => '�ռ���', 14 => '�����', 10 => '��Ʒ��', 11 => '����������', 12 => '������', 15 => '��Ч��',101 => '-----�����Ǿɷ���----', 1 => '¥�̳���', 2 => '¥������', 3 => '���', 4 => '���', 5 => '���', 6 => '�ײ͹ؼ���', 7 => '��������', 8 => '�۸�', 100 => 'ͨ����ؼ���');



$NEW_SEARCH_KEYWORD_TYPE_NEW_IDS = "10,11,12,13,14,15,16,17,18,19,20,21";



$NEW_SEARCH_KEYWORD_TYPE2 = array(13 => '�ռ���', 14 => '�����', 10 => '��Ʒ��', 11 => '����������', 12 => '������');



$NEW_SEARCH_RECORD_TYPE = array(1 => '����¥��', 2 => '�����ײ�');



$NEW_SEARCH_ARTICLE_KEYWORD_TYPE = array(13 => '�ռ���', 14 => '�����', 10 => '��Ʒ��', 11 => '����������', 12 => '������', 15 => '��Ч��', 16 => '¥����', 17 => '(ǰ׺)������', 18 => '������(��׺)', 19 => '�ߴ�����', 20 => '������', 21 => '������',101 => '-----�����Ƿ�����������,����----', 1 => '¥�̳���', 2 => '¥������', 3 => '���', 4 => '���', 5 => '���', 6 => '�ײ͹ؼ���', 7 => '��������', 8 => '�۸�', 100 => 'ͨ����ؼ���');



$NEW_SEARCH_FANGAN_KEYWORD_TYPE = array(1 => '¥�̳���', 2 => '¥������', 3 => '���', 4 => '���', 5 => '���', 6 => '�ײ͹ؼ���', 7 => '��������', 8 => '�۸�', 100 => 'ͨ����ؼ���',101 => '-----������������������,����----', 13 => '�ռ���', 14 => '�����', 10 => '��Ʒ��', 11 => '����������', 12 => '������', 15 => '��Ч��');











$GJ_KEHU_TONGJI_TYPE = array(1 => '������', 2 => '������', 3 => '�ѷ������׶�');



$GJ_KEHU_SHICHANG_TONGJI_TYPE = array(1 => '������ͻ��绰ͳ��', 2 => '���ڸ�����״̬�ͻ��绰ͳ��');



$GJ_KEHU_SHICHANG_TONGJI_TIME = array(1 => '5������', 2 => '5-10����', 3 => '10-15����', 4 => '15-20����', 5 => '20��������', 6 => '��ͨ��¼����¼');







//

$SEARCH_HOT_CITY_ARRAY  = array('����' => '����', '����' => '����', '�Ϻ�' => '�Ϻ�','�ൺ' => '�ൺ','��̨' => '��̨','��Ӫ' => '��Ӫ','����' => '����','Ϋ��' => 'Ϋ��',  '����' => '����', '��ɽ' => '��ɽ', '�Ͼ�' => '�Ͼ�');//





$TJ_NEED_URL_TYPE =array(1 => '�����', 2 => '��϶���', 3 => '�ռ䶨��');



$NEW_SEARCH_ZT_TYPE = array(1 => '����ר��', 2 => '¥��ר��', 3 => '�ػݷ���ר��');



$NEW_SEARCH_ZT_TYPE_ARRAY = array(0 => '����', 1 => 'ָ������', 2 => '��ѡ��Χ');



$SP_PINDAO_TIYANG_CAT = array(1 => '�ֳ�Ƶ��');

$SP_PINDAO_TIYANG_TYPE = array(1 => '��ߴ�(620*347),����(766*428)', 2 => '�гߴ�(327*347),����(403*428)', 3 => 'С�ߴ�(232*227),����(390*280,ԭ289*282)');





$SP_PINDAO_FENGGE_ARRAY = array(31 => '����ů��',42 => '�������',34 => 'Ӣ�����',39 => '������',40 => '�������',17 => '��ʵ������',32 => '�Ͼ���Ӱ',35 => '֥ʿ����',36 => '��������',37 => '�����',38 => '����ʱ��',54 => '�������',51 => 'Ӣ����Ӱ',53 => '��˹���',52 => '���̽��',50 => '��������',46 => '�ﰺ����',49 => '�����Ƴ�');





$SP_PINDAO_ZUHE_CAT = array(1 => '��϶���');



$YIGUI_PINDAO_FENGGE_CAT = array(1 => '�ִ���Լ', 2 => '��԰���', 3 => 'ŷʽ���', 4 => '��ʽ���', 5 => '��ʵ������');

$YIGUI_PINDAO_FENGGE_TYPE = array(1 => 'ͼƬ�ߴ�(383*519),����ͼƬ�ߴ�(472*639)', 2 => 'ͼƬ�ߴ�(288*218),����ͼƬ�ߴ�(355*269)');

$YIGUI_PINDAO_DINGZHI_CAT = array(1 => 'ͼƬ�ߴ�(383*447),����ͼƬ�ߴ�(472*550)', 2 => 'ͼƬ�ߴ�(288*218),����ͼƬ�ߴ�(355*269)');

$YIGUI_PINDAO_TUIJIAN_CAT = array(1 => '��ǿ����', 2 => '�������', 3 => '���ⷿ��', 4 => '�ٱ���', 5 => '�ݻ�����');



$SOFT_APP_TUISONG_TYPE = array(1 => '��ͨ����', 2 => '�Զ�������(ͬʱ�ᷢ��ͨ����)');





$SOFT_APP_TUISONG_SEND_TYPE = array(1 => '���̷���', 2 => '��ʱ����(�ݲ�֧��)');



$SOFT_APP_TUISONG_SEND_ARRAY = array(1 => '���ͳɹ�', 2 => '����ʧ��');







$NEW_SEARCH_RIGHT_GG_TYPE = array(1 => '�б�ҳͼƬ���(208��)', 2 => '�б�ҳ���ֹ��', 3 => '����ҳͼƬ���(233��)');





$NEW_SEARCH_ZHUTI_TYPE = array(1 => '����', 2 => '����', 3 => 'Ƶ��');





$NEW_SEARCH_ZHUTI_SHOW_TYPE = array(1 => 'Ĭ����������', 2 => '��3������ͼ', 3 => '��һ������ͼ');



$ZT_MESSAGE_CAT = array(1 => '��������', 2 => '�������', 3 => '�������', 4 =>'�۸�����', 5 => '��������');



$ZT_MESSAGE_TYPE = array(1 => 'δ����', 2 => '������', 3 => '�����', 4 => '������');







$ZHENGTI_YIGUI_PINDAO_TUIJIAN_CAT = array(1 => '��ǿ����', 2 => '�������', 3 => '���ⷿ��');



$ZHENGTI_YIGUI_PINDAO_DINGZHI_CAT = array(1 => 'ͼƬ�ߴ�(383*338)', 2 => 'ͼƬ�ߴ�(288*218)');



$ZHENGTI_YIGUI_PINDAO_FENGGE_CAT = array(1 => '�ִ���Լ', 2 => '��԰���', 3 => 'ŷʽ���', 4 => '��ʽ���', 5 => '��ʵ������');



$ZHENGTI_YIGUI_PINDAO_FENGGE_TYPE = array(1 => 'ͼƬ�ߴ�(383*519)', 2 => 'ͼƬ�ߴ�(288*218)', 3 => 'ͼƬ�ߴ�(383*284)');







$DIANSHI_GUI_PINDAO_TUIJIAN_CAT = array(1 => '��ǿ����', 2 => '�������', 3 => '���ⷿ��');





$DIANSHI_GUI_PINDAO_DINGZHI_CAT = array(1 => 'ͼƬ�ߴ�(383*338),����ͼƬ�ߴ�(474*413)', 2 => 'ͼƬ�ߴ�(288*218),����ͼƬ�ߴ�(356*269)');



$DIANSHI_GUI_PINDAO_FENGGE_CAT = array(1 => '�ִ���Լ', 2 => '��԰���', 3 => 'ŷʽ���', 4 => '��ʽ���', 5 => '��ʵ������');



$DIANSHI_GUI_PINDAO_FENGGE_TYPE = array(2 => 'ͼƬ�ߴ�(288*218),����ͼƬ�ߴ�(356*269)', 3 => 'ͼƬ�ߴ�(383*284),����ͼƬ�ߴ�(474*351)');





$DINGZHI_CHUANG_PINDAO_TUIJIAN_CAT = array(1 => '�ٱ�����', 2 => '����', 3 => '�๦�ܴ���', 4 => '��������', 5 => '�ٴ���');





$DINGZHI_CHUANG_PINDAO_DINGZHI_CAT = array(1 => 'ͼƬ�ߴ�(383*447),����ͼƬ�ߴ�(473*490)', 2 => 'ͼƬ�ߴ�(288*218),����ͼƬ�ߴ�(356*269)');



$TATAMI__LIANGDIAN_TYPE = array(1 => 'ͼƬ�ߴ�(233*219),����ͼƬ�ߴ�(288*271)');



$DINGZHI_CHUANG_PINDAO_FENGGE_CAT = array(1 => '�ִ���Լ', 2 => '��԰���', 3 => 'ŷʽ���', 4 => '��ʽ���', 5 => '��ʵ������');



$DINGZHI_CHUANG_PINDAO_FENGGE_TYPE = array(1 => 'ͼƬ�ߴ�(383*397)', 2 => 'ͼƬ�ߴ�(288*218)');





$DINGZHI_CHUANG_PINDAO_GONGYI_CAT = array(1 => '�ݻ���Ƥ', 2 => '���Բ���', 3 => '��Լ��ʽ');



$DINGZHI_CHUANG_PINDAO_GONGYI_TYPE = array(1 => 'ͼƬ�ߴ�(383*523),����ͼƬ�ߴ�(473*646)', 2 => 'ͼƬ�ߴ�(288*258),����ͼƬ�ߴ�(356*319)');





$TUIGUANG_TEAM_TYPE = array(1 => 'ֱӪ', 2 => '����');

$ZHUIWEN_TYPE = array(1 => 'δ����', 2 => '�Ѵ���', 3 => '����ʧ��');





$TOP_SEARCH_TYPE = array(1 => '�ؼ���', 2 => '����', 3 => '�����');



//         

$BOTTOM_SEARCH_TYPE = array(1 => '�����', 2 => '��϶���', 3 => '�ռ䶨��', 4 => '�ٱ䶨��', 5 => 'ȫ�ݶ���', 10 => '���ƴ�', 11 => '�ֳ��������', 12 => '�Է�Ʈ������', 13 => '�����¹�', 14 => '��ñ��', 15 => '���ӹ�', 16 => '�����귿�Ҿ�', 17 => '�鷿�Ҿ�', 18 => '�����Ҿ�');





$YIDONG_QUANWU_CITY = array(1 => '����', 2 => '����', 3 => '�Ϻ�', 4 => 'ɽ��');





$YIDONG_QUANWU_HUXING_CAT = array(1 => '��������', 2 => '��������', 3 => '�ķ�����');





//$YIDONG_TEXT_GG_LINK = array(1 => '�ռ䶨��', 2 => '�����', 3 => '��϶���', 4 => 'ȫ�ݶ���',5 => '�ٱ䶨��');

$YIDONG_TEXT_GG_LINK = array(1 => '�Է��Ҿ�', 2 => '�����귿', 3 => '�����Ҿ�', 4 => '�鷿�Ҿ�',5 => '�Ͳ���');



//$YIDONG_KONGJIAN_LINK = array(1 => '�ռ䶨��', 2 => '�����', 3 => '��϶���', 4 => 'ȫ�ݶ���', 5 => '�ٱ䶨��');

$YIDONG_KONGJIAN_LINK = array(1 => '�Է��Ҿ�', 2 => '�����귿', 3 => '�����Ҿ�', 4 => '�鷿�Ҿ�',5 => '�Ͳ���');





$SEARCH_FORM_CAT = array(20 => '��ҳ',1 => '�����', 2 => '��϶���', 3 => '�ռ䶨��', 4 => '�ٱ䶨��', 5 => 'ȫ�ݶ���', 10 => '���ƴ�', 11 => '�ֳ��������', 12 => '�Է�Ʈ������', 13 => '�����¹�', 14 => '��ñ��', 15 => '���ӹ�', 16 => '�����귿�Ҿ�', 17 => '�鷿�Ҿ�', 18 => '�����Ҿ�');



$SEARCH_FORM_TYPE = array(1 => '����', 2 => '�ײ�');



$DINGZHI_CHUANG_PINSHEN_CAT = array(1 => '����', 2 => '����');





$YUAN_TYPE = array(1=>'��Դ��ַ', 2=>'�뿪��ַ', 3=>'ͳ��ҳ��');



$TAOCAN_BZ_ROOM_CAT_FOR_SEARCH = array(1 => '�Է�', 2 => '�鷿', 6 => '�����귿', 4 => '����', 5 => '����', 7 => '����', 8 => '�Ͳ���', 11 => '������', 98 => '¥��', 99 => '����');





$HR_COMPANY_ARRAY = array(1 => '�¾�', 2 => '��Ʒ', 3 => 'ά��', 4 => 'Բ��', 5 => 'ά�й���');

$XC_CHOUJIANG_TYPE = array(1 => '1000Ԫ', 2 => '2000Ԫ', 3 => '3000Ԫ');



$INDEX_KP_QUANWU_TYPE = array(1 => '���292*440', 2 => '�������529*239', 3 => '�����ұ�363*239', 4 => '294*190`');



$INDEX_KP_FENGGE_TYPE = array(1 => '�������529*239', 2 => '�����ұ�360*239', 3 => '����294*190');





$INDEX_KP_GG_TYPE = array(1 => '���ŷ����ұ߹��(233��)', 2 => '��������ұߵ�С���(228*175)');

$INDEX_HOT_CAT_SHOW_TYPE = array(1 => 'ֻ��ʾ��խ��,����ʾ�ڿ���');



$LIST_KP_BOTTOM_CAT = array(1 => '��������', 2 => '�ٱ�ռ���', 3 =>'���ƹ���', 4 => '����ռ䶨��');





$INDEX_KUAN_RIGHT_TYPE = array(5 => '�¾ӿ챨����ͼƬ(226*152)', 1 => '���ƹ�������ͼƬ(226*152)', 2 => '����ٵ��ұ�ͼƬ(233*318)', 3 => '���������ұ�ͼƬ(233*338)', 4 => 'ȫ�ݶ����ұ�ͼƬ(221*397)');



$INDEX_DINGZHI_DAREN_RIGHT_TYPE = array(1 => '�¾�ɹ��', 2 => '��������', 3 => '�������ѹؼ���', 4 => '��ע���а�', 5 => '���ưٿ�');

$KP_LIST_HEADER_GG_CAT = array(1 => '�Է�', 2 => '�鷿', 6 => '�����귿', 4 => '����', 5 => '����', 7 => '����', 8 => '�Ͳ���', 10 => 'Ʈ������', 11 => '��ñ��');





$KP_INDEX_GG_TYPE = array(1 => '1.��������ͼ�ұ�(462*165)', 2 => '2.�¾ӿ챨�ұ�(217*184)', 3 => '3.���ŷ����ұ�(220*108)', 4 => '4.���ŷ����ұ�(220*108)', 5 => '5.���ŷ����ұ�(220*210)', 6 => '6.���ŷ����ұ�(220*108)', 7 => '7.����ٵ���ߴ�ͼ(520*386)', 8 => '8.����ٵ��м�(220*188)', 9 => '9.����ٵ��м�(220*188)', 10 => '10.����ٵ��ұ�(220*386)',11 => '11.����������ߴ�ͼ(520*386)', 12 => '12.���������м�(220*122)', 13 => '13.���������м�(220*122)', 14 => '14.���������м�(220*122)', 15 => '15.���������ұ�(220*386)', 16 => '16.�ٱ䶨�����Сͼ(122*83)', 17 => '17.�ٱ䶨�����Сͼ(122*83)', 18 => '18.�ٱ䶨�����Сͼ(122*83)', 19 => '19.�ٱ䶨�����Сͼ(122*83)', 20 => '20.�ٱ䶨���ұߴ�ͼ(220*386)', 21 => '21.�ٱ䶨���ұߴ�ͼ(220*386)', 22 => '22.�ٱ䶨���ұߴ�ͼ(220*386)', 23 => '23.�ٱ䶨���ұߴ�ͼ(220*386)', 24 => '24.ȫ�ݶ�����ߴ�ͼ(288*386)', 25 => '25.ȫ�ݶ�����ߴ�ͼ(450*386)', 26 => '26.ȫ�ݶ����м�Сͼ(220*122)', 27 => '27.ȫ�ݶ����м�Сͼ(220*122)', 28 => '28.ȫ�ݶ����м�Сͼ(220*122)', 29 => '29.ȫ�ݶ����ұ�Сͼ(220*386)', 30 => '30.���ƴ�����ߴ�ͼ(409*215)', 31 => '31.�¾�ɹ��Сͼ(131*97)', 32 => '32.��������Сͼ(131*97)', 33 => '33.�������ѹؼ���Сͼ(131*97)');



$ADMIN_USER_TYPE = array(1 => '��̨�ʺ�', 2 => 'ֱ���ʺ�', 3 => '����2��ϵͳ');



$ADMIN_CHECK_TYPE = array(1 => '����', 2 => '���쳣', 3 => '�ǳ�������', 4 => '������');



$KP_KJ_PINDAO_GG_TYPE = array(1 => '�����м����(756*426)', 2 => '�����ұ�С���(220*428)', 3 => '���ܶ�����ߴ�ͼ(520*386)', 4 => '���ܶ����м�ͼ������(220*132)', 5 => '���ܶ����ұ߹��(220*386)', 6 => '���Զ�����ߴ�ͼ(520*386)', 7 => '���Զ����м�ͼ������(220*185)', 8 => '���Զ����ұ߹��(220*386)', 9 => '����Ƽ���ߴ�ͼ(520*386)', 10 => '����Ƽ��м�ͼƬ����(220*188)', 11 => '����Ƽ��ұ߹��(220*386)', 12 => '���ƹ�����ߴ�ͼ(520*319)', 13 => '���ƹ����ұ�Сͼ(220*124)');





$KP_KJ_PINDAO_GEXING_TYPE = array(1 => '����', 2 => '����');

$PINDAO_LANMU_ARRAY = array(1 => '���ܶ���', 2 => '���Զ���' , 3 => '����Ƽ�' , 4 => '�ٱ��Է�(�ռ�)' , 5 => '���ƹ���' , 6 => '�����㳡' );





$KP_GNDZ_TYPE = array(1 => '450*340', 2 => '220*154');



//$KP_BAIBIAN_DINGZHI_TYPE = array(1 => '450*386', 2 => '220*188', 3 => '220*386', 4 => '4��ͬ����С��ͼ(220x386)');

$KP_BAIBIAN_DINGZHI_TYPE = array(11 => '326*347', 12 => '325*347', 13 => '326*233', 14 => '325*233',1 => '(��)450*386', 2 => '(��)220*188', 3 => '(��)220*386', 4 => '(��)4��ͬ����С��ͼ(220x386)');





$KP_BAIBIAN_DINGZHI_SHOW_TYPE = array(1 => '��3�ֲ�ͬ����ͼ', 2 => '��4��ͬ����С��ͼ');





$NEW_SITE_TONGJI_TYPE = array(1 => '��վ', 2 => 'SEM', 3 => 'SEO');

$NEW_SITE_PINDAO_TYPE = array(1 => '��ҳ', 2 => '�Է��Ҿ߶���', 3 => '�鷿�Ҿ߶���', 4 => '������Ҿ߶���', 5 => '�Ͳ����Ҿ߶���', 6 => '�����Ҿ߶���', 7 => '�ٱ䶨��', 8 => 'ȫ�ݶ���', 9 => '���Ƶ���');



//�ط�״̬

$HUIFANG_STATUS_ARRAY = array(1 => '���޽���', 2 => '�޷���ϵ�Ͽͻ�',3 => '�Ͻ���', 4 => '�ͻ��ܾ�', 5 => '�����ۺ�', 6 => '������');





$DINGZHI2013_CAT = array(1 => '�Է�', 2 => '�鷿', 3 => '�����귿', 4 => '�Ͳ���', 5 => '����', 6 => 'ȫ��', 7 => '�', 8 => '����');

$DINGZHI2013_TYPE = array(1 => '��ͼ(589*414)', 2 => '��ͼ(444*196)', 3 => 'Сͼ(299*202)', 4 => '��ͼ(389*244)');



$ZHIXIAO_KAOTI_TYPE = array(1 => '��ѡ', 2 => '��ѡ');





$WAYES_INDEX_TYPE = array(1 => '��һ��', 2 => '�ڶ���', 3 => '������');



$HUODONG_BAODAO_LANMU_TYPE = array(1 => '��һ��', 2 => '�ڶ���');

$SOFT_SHOP_API_TYPE = array(1 => '����', 2 => '�ر�');



$TAOCAN_BZ_ROOM_CAT_FOR_TAG = array(1 => '�Է�', 2 => '�鷿', 6 => '�����귿', 8 => '�Ͳ���',  7 => '����');







$FENGGE_CESHI_LX_ARRAY = array(1 => '��׼', 2 => 'С��', 3 => '����');



$FENGGE_CESHI_BZ_ARRAY = array(4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12);

//

$SJ2003_INDEX_HOT_TYPE = array(1 => '����309*112', 2 => '�±�153*115-2��');

$SJ2003_INDEX_ROOM1_TYPE = array(1 => '���153*254', 2 => '�ұ�153*115-2��');

$SJ2003_INDEX_ROOM2_TYPE = array(1 => '����309*112', 2 => '�±�153*115-2��');

$SJ2003_INDEX_ROOM3_TYPE = array(1 => '���153*254', 2 => '�ұ�153*115-2��');

$SJ2003_INDEX_ROOM4_TYPE = array(1 => '����309*112', 2 => '�±�153*115-2��');





$KEFU_KAOTI_TYPE = array(1 => '��ѡ', 2 => '��ѡ');





$INDEX2013_DINGZHI_TYPE = array(1 => 'ֻ��һ��ͼƬ(304*228)', 2 => '��������,����ͼƬ(176*137)', 3 => '����ͼƬ(166*125),��������');



$INDEX2013_GN_DINGZHI_TYPE = array(1 => '�ϱߴ�ͼ(�ߴ�:661*347)', 2 => '�ұ�ͼ(�ߴ�:308*345)', 3 => '�ײ�3��ͼ(�ߴ�:324*231)', 4 => '�ײ��ұ�ͼ(�ߴ�:308*231)');



$INDEX2013_FG_SUDI_TYPE = array(1 => '�ϱ�2�Ŵ�ͼ(�ߴ�:326*347)', 2 => '�ұ�2��Сͼ(�ߴ�:132*99)', 3 => '�ײ����2�Ŵ�ͼ(�ߴ�:326*233)', 4 => '�ײ��ұ�3��ͼ(�ߴ�:308*330)', 5 => '���3��ͼ(�ߴ�:218*470)');

$INDEX2013_HOT_DINGZHI_TYPE = array(1 => '�ϱ�3�Ŵ�ͼ(�ߴ�:661*347)', 2 => '�ұ�3��Сͼ(�ߴ�:160*120)��������', 3 => '�ײ����2�Ŵ�ͼ(�ߴ�:326*233)', 4 => '���3��ͼ(�ߴ�:218*470)');



$INDEX2013_QUANWU_GG_TYPE = array(1 => '�ϱߴ�ͼ(�ߴ�:659*347)', 2 => '�ұ���ͼ(�ߴ�:308*345)', 3 => '�ײ�3����ͼ(�ߴ�:326*233)', 4 => '�ײ��ұ�ͼ(�ߴ�:308*233)');





$WEIXIN_DENGJI_DEISNGER_TYPE = array(1 => '�ս�������,�ȴ������ʺ�', 2 => '�ʺŴ���,��������', 3 => '�������ʺųɹ�,�ȴ���������', 4 => '�������,��������', 5 => '��������ɹ�,����', 6 => '��֤�뷢��ʧ��,�˳�');



$WEIXIN_DENGJI_KEHU_TYPE = array(1 => '�ս�������,�ȴ�������', 2 => '��Ŵ���,��������', 3 => '�������ųɹ�,����', 4 => '��;�˳�');

$WEIXIN_TUIDING_DEISNGER_TYPE = array(1 => '�ս�������,�ȴ������ʺ�', 2 => '�ʺŴ���,��������', 3 => '�������ʺųɹ�,�ȴ���������', 4 => '�������,��������', 5 => '��������ɹ�,����', 6 => '��֤�뷢��ʧ��,�˳�');

$WEIXIN_DENGJI_ADMIN_TYPE = array(1 => '�ս�������,�ȴ������ʺ�', 2 => '�ʺŴ���,��������', 3 => '�������ʺųɹ�,�ȴ���������', 4 => '�������,��������', 5 => '��������ɹ�,����', 6 => '��֤�뷢��ʧ��,�˳�');

$WEIXIN_TUIDING_ADMIN_TYPE = array(1 => '�ս�������,�ȴ������ʺ�', 2 => '�ʺŴ���,��������', 3 => '�������ʺųɹ�,�ȴ���������', 4 => '�������,��������', 5 => '��������ɹ�,����', 6 => '��֤�뷢��ʧ��,�˳�');

$WEIXIN_TUIDING_KEHU_TYPE = array(1 => '�ս�������,�ȴ�������', 2 => '��Ŵ���,��������', 3 => '�������ųɹ�,����');



$WEIXIN_CHANGJING_TYPE = array(1 => '�ͻ��Ǽ�', 2 => '���ʦ�Ǽ�', 3 => '��̨�ʺŵǼ�', 4 => '���ʦÿ�챨��', 10 => '���ó���');



$FUWU_ID_ARRAY = array(1=>'563996934@qq.com',2=>'2074332379@qq.com');





$NH_WEIXIN_VOTE_TYPE = array(1 => '���Կ�ʼ', 2 => '���ܿ�ʼ');

$NH_WEIXIN_BUMEN = array(1 => 'ֱ����ҵ��', 9 => 'ֱ������', 2 => '�ƹ���ҵ��', 3 => '����', 4 => '�������', 5 => '������', 6 => '�г�Ӫ������', 7 => '������Դ��', 8 => '���ߵ�����', 10 => '�༭��', 11 => '������', 12 => '�ͷ���', 13 => '�ܾ���');



$WAYES_INDEX_BOTTOM_ARTICLE_TYPE = array(1 => '��һ��', 2 => '�ڶ���', 3 => '������');



$TAOCAN_LEVEL_ARRAY = array(1 => '��', 2 => '��', 3 => '��');







$WEIXIN_FUWU_JIANGPIN_TYPE = array(1=>"����ȯ",2=>"լ��ȯ",3=>"��ͨ��Ʒ",4=>"�Ż�");



$XINJU2014_WEIXIN_SEND_TYPE = array(1 => '�����ͷ�', 2 => '�����ͻ�', 3 => '�������ʦ');

$XINJU2014_WEIXIN_MEITI_TYPE = array(1 => '����', 2 => '����', 3 => 'ͼƬ', 4 => '��Ƶ');



$JIAOHU_CITY_ARRAY = array('ȫ��' => 'ȫ��', '����' => '����');



$XINJU2000_WEIXIIN_MENU_TYPE = array(1 => 'ͼ��', 2 => '����');

$NEW_SERACH_ZHUTI_ARTICLE_LANMU = array(1 => '�¾Ӱٿ�', 2 => '������Ϣ', 3 => '��¼��վ(ר��)');



//�������

$WEIXIN_YX_RESULT_TYPE = array(0 => 'δ����', 1 => '���ͳɹ�', 2 => '����ʧ��');



//��������,������ȷ�



$WEIXIN_YX_TIME_TYPE = array(

2 => '���4��Сʱ', 

11 => '��ע���2��-ֻ������8�㷢', 

12 => '��ע���2��-ֻ������12�㷢',

13 => '��ע���2��-ֻ������8��뷢', 

15 => '��ʧ��С��10Сʱ,1-3��,7-22��뷢', 

16 => '����-��ע���2�쿪ʼ48Сʱ��', 

17 => 'Ů��-��ע���2�쿪ʼ48Сʱ��', 

18 => '�����Ա�-��ע���2�쿪ʼ48Сʱ��', 

19 => '�����Ͼӣ�80ƽ�����£�-��ע���2�쿪ʼ48Сʱ��', 

20 => 'С�ʰ��죨80��120ƽ����-��ע���2�쿪ʼ48Сʱ��', 

21 => '��120ƽ�����ϣ�������-��ע���2�쿪ʼ48Сʱ��', 



22 => '�����о��䰸��(�Ͼ�)-��ע���2�쿪ʼ48Сʱ��', 

23 => '�����о��䰸��(����)-��ע���2�쿪ʼ48Сʱ��', 

24 => '�����о��䰸��(����)-��ע���2�쿪ʼ48Сʱ��', 

25 => '�����о��䰸��(�Ϻ�)-��ע���2�쿪ʼ48Сʱ��', 



26 => '��������(����)-��ע���2�쿪ʼ48Сʱ��', 

27 => '��������(Ʒ��)-��ע���2�쿪ʼ48Сʱ��', 

28 => '��������(���ܶ���)-��ע���2�쿪ʼ48Сʱ��', 

29 => '��������(�Żݻ)-��ע���2�쿪ʼ48Сʱ��', 

30 => '��������(��������)-��ע���2�쿪ʼ48Сʱ��', 

31 => '��������(�鷿����)-��ע���2�쿪ʼ48Сʱ��', 

32 => '��������(�Ͳ�������)-��ע���2�쿪ʼ48Сʱ��', 

33 => '��������(��ͯ������)-��ע���2�쿪ʼ48Сʱ��', 

34 => '��������(�Է�����)-��ע���2�쿪ʼ48Сʱ��', 

35 => '��������(�±�ǩ1)-��ע���2�쿪ʼ48Сʱ��-����7��', 

36 => '��������(�±�ǩ2)-��ע���2�쿪ʼ48Сʱ��-����8��', 



50 => '�ͻ���ע��һֱû����,��������,12��', 

51 => '�ͻ���ע��һֱû����,��������,19��', 

52 => '�ͻ���ע��һֱû����,��ע10���Ӻ��������,����9-����9�㷢', 

53 => '��ע�󳬹�48Сʱ-����7���', 

54 => '��ע�󳬹�48Сʱ-����7���',



/*55=>"����16:01��24:00�¹�ע��û˵��-����12�㷢",*/



/*56=>"��Խ���00::01��16:00�¹�ע��û˵��-����19�㷢",*/



57=>"������9�㡿�����������15.00~����8.00",

55=>"������12.00���������8.00~����11.00",

58=>"������15.00�������������17.00~����8.00",

56=>"������18.00���������11.00~����17.00",



59=>"������20.00����Թ��ݵ����עδ����",



1000=>"�⺣�²���"

);



$WEIXIN_BAOMING_JISHI_TYPE = array(1=>"�����Ż�ÿ������",2=>"�ϻ�������ͳ��(����)",3=>"������ʱ",4=>"ԤԼ���߹�ע��",5=>"���ڱ�����ʱ",6=>"��ע����",7=>"�İ��鱨��2ͨ��");



$WEIXIN_ZP_TYPE = array(1=>"��һ���¼�", 2 => '���ִ�ת��', 3=>'�Ϻ���֮��ת��',  4=>'����������ת��',5=>"���ĺ�ת��",6=>"�Ͼ���Ѹ�����ιο�",7=>"�Ͼ���Ѹ������ת��",8=>"����ιο�",9=>"�Ϻ��Ҳ���",10=>"ȫ���ŵ�ת�̻",11=>"��Ӫ�ŵ�ת�̻",12=>"ˮ����ҡ��",15=>"�����ӳ齱",16=>"�����ϻ���",17=>"�����Ż�ÿ������",18=>"Һ������ת��",19=>"ƻ���ιο�",20=>"��Ʒ7��ת��",21=>"���ʢ�����ʹ��");



$WEIXIN_ZP_PRICE = array(1=>"һ�Ƚ�",2=>"���Ƚ�",3=>"���Ƚ�",4=>"��ο��",5=>"��Ҫ����",6=>"лл����");



$XINJU2000_AGE_TYPE = array(1 => '����', 2 => '����');



$XINJU2000_FX_TYPE = array(1 => 'һ��', 2 => '����', 3 => '����', 4 => '�ķ�');



$XINJU2000_ZX_TYPE = array(1 => '�·�-ë����', 2 => '�·�-��װ�޷�', 3 => '���ַ�װ��', 4 => '��ס������');



$XINJU2000_FG_TYPE = array(1 => '�ﰺ����', 2 => '������Ӱ', 3 => 'Ӣ��ӡ��', 4 => '�¹�ɭ��');







$SEARCH_CHECK_TYPE = array(1 => '�����', 2 => '���û����', 3 => '���������-��������������', 4 => '���������-����ͼ������', 5 => '���������-���ºͷ���ͼ��������');





$SEARCH_HEDUI_TYPE = array(1 => '���˶�', 2 => '�˶�û����', 3 => '�˶�����������', 4 => '�˶Եȴ���������');



$WEIXIN_YX_TUWEN_TYPE = array(2 => '2��ͼ��', 3 => '3��ͼ��', 4 => '4��ͼ��', 5 => '5��ͼ��');

$MHOMEKOO_BUTTON_TYPE = array(1=>"ͷ�������������",2=>"ͷ��ԤԼ�������",3=>"�ײ�����",4=>"�ײ���ѯ");

$CAIXIN_SEND_TYPE = array(1 => 'δ���߿ͻ�');



$WEIXIN_DCWJ_Q = array(1=>"A",2=>"B",3=>"C",4=>"D",5=>"E",6=>"F");

$WEIXIN_DCWJ_J = array(1=>"һ�Ƚ�",2=>"���Ƚ�",3=>"���Ƚ�",4=>"δ�н�",);



$HOUR_LIULIANG_TYPE = array(1 => 'ȫվ����', 2 => '�ƶ���վ', 3 => 'PC��վ', 4 => '��ҳ', 5 => '��������', 6 => 'ר��');

$HOUR_BAOMING_TYPE = array(1 => 'ȫ��������', 2 => 'SEM������', 3 => '�ƶ��˱�����', 4 => 'PC�˱�����');

$WEIXIN_ZHUANFA_TYPE = array(1=>"ת��������",2=>"ת������Ȧ",3=>"ת����΢��");

$KEHU_ZHONGTU_SEND_TYPE = array(1 => '������', 2 => '�ѷ���', 3 => '����ʧ��', 4 => '����ȡ������');



$xinju2000_WEIXIN_XF_TYPE = array(1=>"���ͨ");

$xinju2000_WEIXIN_XF_ZHID = array(1=>"�����",2=>"���ĺ�");





$ERWEIMA_PIC_TYPE = array(30=>"����װ�� ",29=>" ����װ�� ",28=>"��ͯ��װ��",27=>"�Ͳ���װ��",26=>"�鷿װ��",24=>"����",23=>"�¹�",22=>"ɳ��",21=>" ���",9000=>"����");

$WEIXIN_ZP_STYPE = array(1=>"�������ʦ");



$ZHANLUE_WENJUAN_ZHIWU_TYPE  = array(1 => 'A����������', 2 => 'B���ܼ�', 3 => 'C�����ž���򸱾���', 4 => 'D������');

$ZHANLUE_WENJUAN_COMPANY_TYPE  = array(1 => '��Ʒ', 2 => 'ά��', 3 => '�¾���', 4 => 'ά��', 5 => '������Ʒ', 6 => '�Ϻ���Ʒ', 7 => '�Ͼ���Ʒ', 8 => '�人��Ʒ', 9 => '����ά��');//1����Ʒ    2��ά��    3���¾���    4��ά��   5��������Ʒ  6���Ϻ���Ʒ   7���Ͼ���Ʒ   8���人��Ʒ   9������ά��



$ZHANLUE_WENJUAN_QUESTION_TYPE  = array(1 => 'ѡ����', 2 => '��д�ַ�', 3 => '����ش�����');



if($_CITY_JIAMENG) $_CITY_OPEN = $_CITY_JIAMENG;

$TAOCAN_COLOR_TYPE = array(1 => '��ɫ', 2 => '��ɫ', 3 => '��ɫ', 4 => '��ɫ', 5 => '��ɫ', 6 => '��ɫ', 8 => '��ɫ', 7 => '����');//



$_XIAOWEI_XX_TYPE = array(1=>"����",2=>"����");

//�ǳ�ȱ��ȱ�����������ͣ��ǳ�����

$KEHU_LIANGCHI_CITY_BAOHE_TYPE = array(1 => '�ǳ�ȱ', 2 => 'ȱ', 3 => '����', 4 => '����', 5 => '�ǳ�����');





$SHOW_WEEK_DAY_ARRAY = array(1 => '����һ', 2 => '���ڶ�', 3 => '������', 4 => '������', 5 => '������', 6 => '������', 7 => '������');





$TATAMI_LIANGDIAN_CAT = array(1=>'��ǿ����',2=>'����',3=>'�������');









$DINGZHI_CHUANG_PINDAO_DINGZHI_CAT = array(1 => 'ͼƬ�ߴ�(568*402),����ͼƬ�ߴ�(700*495)', 2 => 'ͼƬ�ߴ�(403*402),����ͼƬ�ߴ�(496*495)',3=> 'ͼƬ�ߴ�(319*226),����ͼƬ�ߴ�(393*278)');



$NOTBUY_TYPE_SHAFA = array(1 => '�Ѷ�����Ʒ��', 2 =>'��Ҫ�Ա�', 3 => '��ϲ����ʽ', 4 =>'�۸��', 5 => '����');

$NOTBUY_TYPE_CHUANG = array(1 => '�Ѷ�����Ʒ��', 2 =>'��Ҫ�Ա�', 3 => '��ϲ����ʽ', 4 =>'�۸��', 5 => '����');

$NOTBUY_TYPE_CHUANGDIAN = array(1 => '�Ѷ�����Ʒ��', 2 =>'��Ҫ�Ա�', 3 => '��ϲ����ʽ', 4 =>'�۸��', 5 => '����');

$NOTBUY_TYPE_CANZHUOYI = array(1 => '�Ѷ�����Ʒ��', 2 =>'��Ҫ�Ա�', 3 => '��ϲ����ʽ', 4 =>'�۸��', 5 => '����');





$SYS_TONGJI_VISIT_TYPE = array(1 => '��������', 2 => '��ͣ����', 3 => 'ֻ�ܳ�������Ա����', 4 => 'ֻ�ܳ�������Ա���������Ϸ���');



$SYS_TONGJI_LEVEL_TYPE = array(1 => '��Ҫ(������)', 2 => 'ҵ����', 3 => '��ͨ', 4 => '����');





$DESIGNER_CHANNEL_ANLI_ZHUANTI_CAT_ARRAY = array(1=>'����',2=>'ר��');



//�¾ӷ�������������Ʒ���������������

$MFSJ_SP_TYPE = array(1=>"δ����",2=>"����");



//���������

//$ZX_SHEJI_TYPE = array(1 => '������',6 => '�������', 2 => '������', 3 => '��ͨ��', 4 => '����ѷ���', 5 => '��Ч'); ȥ�� 4 => '����ѷ���', ״̬
$ZX_SHEJI_TYPE = array(1 => '������',6 => '�������', 2 => '������', 3 => '��ͨ��', 5 => '��Ч');



$DESIGNER_CHANNEL_CUSTOM_TYPE = array(0=>"PC������������",1=>"�ƶ�������������");



$perlist=array("����1","������3","¬ӽʫ1","���1","������1","������2","ʦ����","�ռһ�","������","������","��Ψ","����Դ","������3","������4","����Ң3","�Ƴ�3","�α�1","������1","�����1","�ּö�2","���˶�1","�ζ���1","�̹���1","¬ͤ��","��ͬ��","������","�±�","��ٻӨ","�����","������2","�˵�","�⺣��1","�߽���1","֣��1","���1","����1","������3","����ɺ1","�κ���","���","����2","��÷2","������","����ɺ","������","�ſ���2","������","��ٻ","���罨");


$zhgjlist=array("����1"=>"����1","������3"=>"������3","¬ӽʫ1"=>"¬ӽʫ1","���1"=>"���1","������1"=>"������1","������2"=>"������2","�Ӷ���"=>"�Ӷ���","ʦ����"=>"ʦ����","�ռһ�"=>"�ռһ�","������"=>"������","������"=>"������","��Ψ"=>"��Ψ","����Դ"=>"����Դ","������3"=>"������3","������4"=>"������4","����Ң3"=>"����Ң3","�Ƴ�3"=>"�Ƴ�3","�α�1"=>"�α�1","������1"=>"������1","�����1"=>"�����1","�ּö�2"=>"�ּö�2","���˶�1"=>"���˶�1","�ζ���1"=>"�ζ���1","�̹���1"=>"�̹���1","¬ͤ��"=>"¬ͤ��","��ͬ��"=>"��ͬ��","������"=>"������","�±�"=>"�±�","��ٻӨ"=>"��ٻӨ","�����"=>"�����","������2"=>"������2","�⺣��1"=>"�⺣��1","�߽���1"=>"�߽���1","֣��1"=>"֣��1","���1"=>"���1","����1"=>"����1","������3"=>"������3","����ɺ1"=>"����ɺ1","���"=>"���","����2"=>"����2","��÷2"=>"��÷2","������"=>"������","����ɺ"=>"����ɺ","������"=>"������","�ſ���2"=>"�ſ���2");



//$tongji_zg=array('Tesla'=>"'����1','������3','¬ӽʫ1','���1','������1','������2','�Ӷ���','������','��Ψ','����Դ','¬ͤ��','��ͬ��','������','�±�','��ٻӨ'");

$tongji_zg=array('͹����'=>"'������3','�Ƴ�3','�α�1','������1','�����1','������2','�����'",'�˼��'=>"'������4','�ּö�2','���˶�1','�ζ���1','�̹���1'",'���ֶ�'=>"'������3','¬ӽʫ1','��Ψ','������','¬ͤ��','������1'",'�ͷ���'=>"'�⺣��1','�߽���1','֣��1','���1','������3'",'΢��CRM'=>"'��ͬ��','������','�±�','������','��ٻӨ','���','����ɺ','������'");



//$tongji_zgp=array("����1"=>"'����1'","������3"=>"'������3'","¬ӽʫ1"=>"'¬ӽʫ1'","���1"=>"'���1'","������1"=>"'������1'","������2"=>"'������2'","�Ӷ���"=>"'�Ӷ���'","������"=>"'������'","��Ψ"=>"'��Ψ'","����Դ"=>"'����Դ'","¬ͤ��"=>"'¬ͤ��'","��ͬ��"=>"'��ͬ��'","������"=>"'������'","�±�"=>"'�±�'","��ٻӨ"=>"'��ٻӨ'");

$tongji_zgp=array("������3"=>"'������3'","�Ƴ�3"=>"'�Ƴ�3'","�α�1"=>"'�α�1'","������1"=>"'������1'","�����1"=>"'�����1'","������2"=>"'������2'","������4"=>"'������4'","�ּö�2"=>"'�ּö�2'","���˶�1"=>"'���˶�1'","�ζ���1"=>"'�ζ���1'","�̹���1"=>"'�̹���1'","������3"=>"'������3'","¬ӽʫ1"=>"'¬ӽʫ1'","��Ψ"=>"'��Ψ'","������"=>"'������'","¬ͤ��"=>"'¬ͤ��'","������1"=>"'������1'","�����"=>"'�����'","�⺣��1"=>"'�⺣��1'","�߽���1"=>"'�߽���1'","֣��1"=>"'֣��1'","���1"=>"'���1'","����1"=>"'����1'","������3"=>"'������3'","����ɺ1"=>"'����ɺ1'","���"=>"'���'","��ͬ��"=>"'��ͬ��'","������"=>"'������'","�±�"=>"'�±�'","��ٻӨ"=>"'��ٻӨ'","����2"=>"'����2'","��÷2"=>"'��÷2'","������"=>"'������'","����ɺ"=>"'����ɺ'","������"=>"'������'","�ſ���2"=>"'�ſ���2'");



$tongji_tb_zg=array('�Ա���'=>"'ʦ����','�ռһ�','������'");

$tongji_tb_zgp=array("ʦ����"=>"'ʦ����'","�ռһ�"=>"'�ռһ�'","������"=>"'������'");



$wxperlist=array("��ͬ��","������","�±�","��ٻӨ","������3","�Ƴ�3","�α�1","������1","�����1","������2","�κ���","�����","������2","����Ң3","�˵�","����ɺ1","���","������","����ɺ","������");



$ZX_BANNER_TYPE = array(25=>'����װ��',26=>'�鷿װ��',27=>'�Ͳ���װ��',28=>'��ͯ��װ��',29=>'����װ��',30=>'����װ��',20=>'�����Ҿ�',21=>'���',22=>'ɳ��',23=>'�¹�',24=>'����',14=>'��ԡ����',15=>'�ذ嵼��',16=>'��ש����',17=>'Ϳ�ϵ���',18=>'��װ����',19=>'�ҵ絼��',11=>'�Ҿӱ���',12=>'װ�޼���',13=>'�Ҿӷ�ˮ',7=>'��������',8=>'�ۿۿ�Ѷ',9=>'��������',10=>'������ȫ');

$ZHIXIAO_SJS_FREE_APPLY_TYPE = array(1 => '������', 2 => '������', 3 => '�������', 4 => '��Ч����');



$SEJISD_VOTE_SJS_ID = array(151=>"������",152=>"������",153=>"�ܻۺ�",154=>"�Է�",155=>"������",156=>"������",157=>"�����",158=>"����",159=>"����",160=>"������",161=>"������",162=>"�����",163=>"��˫",164=>"������",165=>"����",166=>"������",167=>"��ͥ��",168=>"�¹�ԣ",169=>"�γ���",170=>"����",171=>"����",172=>"���ܱ�",173=>"�����",174=>"��Ҷ��",175=>"����",176=>"������",177=>"��ľ��",178=>"��־��",179=>"���Ŀ�",180=>"֣ΰ��",181=>"���ӱ",182=>"���ٷ�",183=>"����",184=>"��־��",185=>"������",186=>"����",

501=>"PC�˱�����ע1");

$SHEJISD_ZHONGJIANG_TYPE =array(1=>'ʵ��',2=>'���/����');





$NH2015_SHENPI_TYPE = array(1 => '������', 2 => '������', 3 => '������ʾ', 4 => '�������д��ﲻ��ʾ');



$JITUAN_WEIXIN_HYUSER_TEQUAN_TYPE = array(1=>"���»",2=>"���Ż");

$JITUAN_WEIXIN_HYUSER_MYHUODONG_TYPE = array(1=>"���ϻ",2=>"���»");

$JITUAN_HYUSER_DES_SHARE_TYPE = array(1=>"����",2=>"��Ϸ");


$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE = array(1=>array("name"=>"��ע","v_num"=>1000),2=>array("name"=>"��д����","v_num"=>200),3=>array("name"=>"��д�ֻ�","v_num"=>200),4=>array("name"=>"���ѹ�ע","v_num"=>200),5=>array("name"=>"����","v_num"=>1000),6=>array("name"=>"����","v_num"=>3000),7=>array("name"=>"����","v_num"=>5000),8=>array("name"=>"�ɽ�","v_num"=>"money"),9=>array("name"=>"������������","v_num"=>"200"),10=>array("name"=>"��ɫ�Թ�","v_num"=>"num"),11=>array("name"=>"ÿ��ǩ��","v_num"=>"num"),12=>array("name"=>"ת������","v_num"=>20),13=>array("name"=>"������","v_num"=>"num"),14=>array("name"=>"������������","v_num"=>100),15=>array("name"=>"������������","v_num"=>100),16=>array("name"=>"���ƼҾ�����","v_num"=>100),17=>array("name"=>"������","v_num"=>5),18=>array("name"=>"��Ů��","v_num"=>5),19=>array("name"=>"����","v_num"=>10),20=>array("name"=>"������","v_num"=>5),21=>array("name"=>"����ָ��","v_num"=>5),22=>array("name"=>"�������","v_num"=>"num"),23=>array("name"=>"ÿ�հ�������","v_num"=>5),124=>array("name"=>"�ɽ�","v_num"=>"money"),125=>array("name"=>"�ɽ�","v_num"=>"money"),126=>array("name"=>"�ɽ�","v_num"=>"money"),127=>array("name"=>"�ɽ�","v_num"=>"money"),30=>array("name"=>"װ��С��ʿ","v_num"=>20));//124-127�Ƕ�Ӧ��2-5�����ӳɽ����,��base_infoҲ���
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[24] = array("name"=>"�񾭲�����","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[25] = array("name"=>"��װ�޲��Ը�","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[26] = array("name"=>"ɳĮ����","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[27] = array("name"=>"�ǳ�3��1","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[28] = array("name"=>"�Ŵ����","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[29] = array("name"=>"��һȥ�Ķ�","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[32] = array("name"=>"�Ҿ�δ�����","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[31] = array("name"=>"12����","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[33] = array("name"=>"�²±�����������ɶ��","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[34] = array("name"=>"����С����","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[35] = array("name"=>"520�����","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[36] = array("name"=>"���ֵ���","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[37] = array("name"=>"���¡������ӡ�","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[38] = array("name"=>"ҧ������","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[39] = array("name"=>"ָ���ϵ�С����","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[40] = array("name"=>"���߷���","v_num"=>10);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[41] = array("name"=>"ͯ����Ϸ","v_num"=>5);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[42] = array("name"=>"����սʿ","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[43] = array("name"=>"�²����δ��","v_num"=>"5");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[44] = array("name"=>"�����������ʸ���¥��","v_num"=>"10");
/* ȫ����ͨ�İ� 2015-08-08 �� start   */
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[45] = array("name"=>"��д����","v_num"=>50);//��д�Ա�50Vֵ 
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[46] = array("name"=>"��д�ֻ�","v_num"=>50);
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[47] = array("name"=>"��д��ַ","v_num"=>100);
/* ȫ����ͨ�İ� 2015-08-08 �� end   */

/* ��Ա����ǩ�� 2015-08-10 �� start   */
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[48] = array("name"=>"ƴ��Ʒ���","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[49] = array("name"=>"Vֵ������","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[50] = array("name"=>"�°�ÿ��ǩ������","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[51] = array("name"=>"���Ͳ�ͣ","v_num"=>"num");
/* ��Ա����ǩ�� 2015-08-10 �� end   */
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[80] = array("name"=>"����Сޱ","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[210] = array("name"=>"����׬Vֵ","v_num"=>"500");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[211] = array("name"=>"���˴�����","v_num"=>"num");
$JITUAN_WEIXIN_HYUSER_GONGLUE_TYPE[212] = array("name"=>"ȫ�񷭷���","v_num"=>"num");






$JITUAN_WEIXIN_HYUSER_LIKE_STYLE = array(1=>'�ִ����',2=>'ŷʽ���',3=>'��ʽ���',4=>'��԰���');





$NH2015_WEIXIN_USER_LEVEL_SETTING = array(1=>array("name"=>"��«��","v_num1"=>0,"v_num2"=>999),2=>array("name"=>"�ܺ���","v_num1"=>1000,"v_num2"=>6999),3=>array("name"=>"����ͯ","v_num1"=>7000,"v_num2"=>9999),4=>array("name"=>"��˼��","v_num1"=>10000,"v_num2"=>99999999));



$NH2015_WEIXIN_ADD_V_NUM_TYPE = array(1=>array("name"=>"��Ļ����","v_num"=>20),2=>array("name"=>"��һ������","v_num"=>20),3=>array("name"=>"��ɫ�Թ�","v_num"=>20),4=>array("name"=>"������","v_num"=>20));

$NH2015_WEIXIIN_MENU_TYPE = array(1 => 'ͼ��', 2 => '����'); 

$NH2015_WEIXIN_USER_DES_TYPE = array(1=>"��ע���Զ��ظ�",2=>"�Զ���ؼ��ʻظ�");





$DANMU_COLOR_TYPE = array(1 => '��ɫ', 2 => '��ɫ', 3 => '��ɫ', 4 => '��ɫ', 5 => '��ɫ', 7 => '��ɫ', 8 => '��ɫ');//, 6 => '��ɫ'



$MOBILE_DEVELOPMENT_PLAN_TYPE = array(1=>"��Ʒǰ��",2=>"ά��ǰ��",3=>"��Ʒ��̨",4=>"ά���̨",5=>"��Ʒ�ӿ�",6=>"ά��ӿ�",7=>"��Ա��ϵ");



$XINJU2000_WEIXIN_NEIBUID_TYPE = array(1=>"������",2=>"�������",3=>"�༭�Ŷ�",4=>"�ƶ�����",5=>"������",6=>"��������",7=>"�¾�Ա��",8=>"�쵼Ⱥ");



$KEFU_HUJIAO_XIAOZU_GUIZE_TYPE = array(1 => '�����з���', 2 => '���ƹ���Դ����', 3 => '�����ߵ����ύ����', 4 => '���ƹ���Դ�ͳ��з���(SEM)');

$CITY_GUANZHU_LEVEL_ARRAY = array(1 => 'ֱӪ����', 2 =>'G20����',5 => "C20����", 3 =>'L59����', 4 => '��������');





/*���Ż�Ա����*/

$JITUAN_WEIXIN_HYUSER_REWEN_TYPE = array(1=>"����",2=>"�ش�");

$JITUAN_WEIXIN_HYUSER_GET_V_SYS_TYPE = array(1=>"ÿ��ǩ��",2=>"���Ƹ�������");

$JITUAN_WEIXIN_HYUSER_CLICK_ARRAY = array(10=>"��ҳ",1=>"�ҵ�Vֵ",2=>"׬ȡVֵ",3=>"�������",4=>"��Ա�ȼ�",5=>"��Ա�̳�",6=>"��Ա�",7=>"�²���ϲ��",8=>"ÿ�հ���",9=>"�����ѯ",11=>"������Ϣ",12=>"ԤԼ����",13=>"�Ի����ʦ",14=>"��Ʒ����","20"=>"ͳ�Ʒ���ҳ��");

$JITUAN_WEIXIN_HYUSER_CLICK_STYPE = array(1=>"һ��ҳ��",2=>"����ҳ��",3=>"����ҳ��",4=>"�ļ�ҳ��");

$JITUAN_WEIXIN_HYUSER_CLICK_PT_TYPE = array(1=>"iphone��",2=>"android��");

$JITUAN_WEIXIN_HYUSER_DINGDAN_TYPE = array(2=>"������",3=>"�ѷ���",5=>"�����",8=>"άȨ��");

$JITUAN_WEIXIN_HYUSER_DELIVERY_COMPANY = array("002shentong"=>"��ͨ���","066zhongtong"=>"��ͨ���","056yuantong"=>"Բͨ���","042tiantian"=>"������","003shunfeng"=>"˳����","056yunda"=>"�ϴ���","064zhaijisong"=>"լ����","020huitong"=>"��ͨ���","zj001yixun"=>"��Ѹ���","Fsearch_code"=>"����EMS");

//$JITUAN_WEIXIN_HYUSER_DINGDAN_GJ_TYPE = array(1=>"���ɶ���",2=>"���ŷ�������",3=>"���ŷ������",4=>"�¾Ӻ˶Է���",5=>"�����",6=>"�ǻ�Ա���Ķ���",7=>"�����˿�",8=>"�˿�ɹ�");

$JITUAN_WEIXIN_HYUSER_DINGDAN_GJ_TYPE = array(1=>"���ɶ���",2=>"�������ͨ��,׼����������",3=>"�Ѿ���������",4=>"����ϵͳ���",5=>"������˷���",6=>"��Ч����",7=>"�����˿�",8=>"�˿�ɹ�",9=>"ȷ���ջ�",10=>"���˻�/ת��");

$JITUAN_WEIXIN_HYUSER_DINGDAN_GJ_TYPE2 = array(1=>"�ύ����",2=>"�������",3=>"����ɹ�",4=>"׼������",5=>"�ѷ���",6=>"��Ч����",7=>"�����˿�",8=>"�˿�ɹ�",9=>"ȷ���ջ�",10=>"���˻�/ת��");

$JITUAN_WEIXIN_HYUSER_TO_DESIGNER_CHAT_TYPE = array(1=>"�Ҿ���Ƽ���",2=>"��Ҫ�����ʦ",3=>"��ͨ��˳��",4=>"������Ʒ�������",5=>"���ʦδ������ϵ",6=>"�޷���ϵ�����ʦ",7=>"�����߷�������",8=>"����Ʒ�������",9=>"���ʦ������");

$JITUAN_WEIXIN_HYUSER_SHOPPING_TYPE = array(1=>"��Ȩ��Ʒ",2=>"��Ʒ����");

$JITUAN_WEIXIN_HYUSER_TUIKUAN_TYPE = array(1=>"ȫ���˿�",2=>"�ʷ��˿�");

$JITUAN_WEIXIN_HYUSER_TO_DESIGNER_CHAT_STYPE = array(1=>"��Ա����",2=>"�����������",3=>"ϵͳ����");

$JITUAN_WEIXIN_HYUSER_GAME_RECORD_TYPE = array(1=>"ת����Ϸ",2=>"��ռ�Ȼ�");

$JITUAN_WEIXIN_HYUSER_MAKEVZ_CLICK_TONGJI_ARRAY = array(1=>"��д���е��",2=>"��д�ֻ����",3=>"����ȫ�����",4=>"ȫ���������",5=>"�����ע���");



$JITUAN_WEIXIN_HYUSER_DUIHUA_DESIGNER_CLICK_TONGJI_ARRAY = array(1=>"����ͨ��",2=>"�������",3=>"������",4=>"Ͷ����");

$JITUAN_WEIXIN_HYUSER_FUWUCHECK_CLICK_TONGJI_ARRAY = array(1=>"�Ի�Сޱ");

$JITUAN_WEIXIN_HYUSER_EVERYDAYANLI_CLICK_TONGJI_ARRAY = array(1=>"ҳ�����",2=>"���ԤԼ",3=>"������");

$JITUAN_WEIXIN_HYUSER_YAOQING_GOODFRIEND_CLICK_TONGJI_ARRAY = array(1=>"ҳ�����",2=>"����������",3=>"ɨ���¹�ע");

$JITUAN_WEIXIN_HYUSER_YUYUE_LIANGCHI_CLICK_TONGJI_ARRAY = array(1=>"����",2=>"ԤԼʱ��");

$JITUAN_WEIXIN_HYUSER_JIEDUAN_TYPE = array(1=>"δ����",2=>"�ѱ���δ����",3=>"����δ�ɽ�",4=>"�ѳɽ�");

//$JITUAN_WEIXIN_HYUSER_FUWUCHECK_PINGFEN_TYPE = array(1=>"����ʱ��",2=>"���ȳɽ�",3=>"���Ͱ�װ",4=>"����",5=>'����');

$JITUAN_WEIXIN_HYUSER_FUWUCHECK_PINGFEN_TYPE = array(1=>"���߷���",2=>"��Ʒ�������",3=>"����ɽ�����",4=>"���Ͱ�װ����",5=>"�������"); 

$JITUAN_WEIXIN_HYUSER_JINGXUAN_ZIXUN_SETTING_TYPE = array(1=>"���",2=>"���Ͻ�",3=>"���½�");





$share_type = array(1=>"��������Ȧ",2=>"���������"); 



/*���Ż�Ա����*/



$TONGBU_SERVER_TYPE = array(1 => 'ǰ̨������', 2 => '΢�ŷ�����', 3 => '��̨������');



$XINJU2000_WEIXIN_PINBI_KEYWORDS_TYPE = array(1=>"�ŵ�ؼ���",2=>"��ؼ���");



$XINJU2000_WEIXIN_SHOPINFO_LIST_TYPE = array(1=>"��Ա����",2=>"һԪ��Ҿ�-��ͨ�û�",3=>"һԪ��Ҿ�-�����û�");



$XINJU2000_WEIXIN_YIYUAN_BUYINFO_URL_ARRAY = array(66=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjhQ6kboqg71Q0X9NKtLlRtk&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",7=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjlS1hl06OqGhdFbsBwHo8CQ&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",22=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjgQwx83avC62-PYKgn0zxPI&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",33=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjuCk5U1gOyCmm32qzbZpQ5s&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",126=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjopjpgIQKRFHDmKwwOIArzU&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",71=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjrVOcivBFVuWN9-Gq64ftuQ&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",197=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjilFLkAIU27UUCV9r8iarSE&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",196=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjuZuWBQaT4w2IO6v2iCtHpE&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",192=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtSMiR5idiHrC9WJeRo6oI4&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",67=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjvLp9pK80IcjroJI-bH2Mds&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",75=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjlAJeZYaghlwn--fWJXGnek&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",91=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjoZkfNySG24iPdMvGONCCnw&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",188=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjrOeIurhToT4w7QKeReokQI&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",74=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjteSxDYihw-uwcdX1TR3lJk&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",187=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtt-DhXOkzoC8URfD7M7sCA&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",193=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjhucUu7F5CTlLi0UT2f2IwQ&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",72=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtlRJ72uJ9kjYIJ4B7bOPdY&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",190=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtpnc_RFHTm6TQYggtH_kQc&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",78=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjppTsJ32zB_g_mM2i0I990Y&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",191=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjvuuGfXu0m_ilnMa7MGsRRU&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",189=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtVTz8n6amqzpoaWzuQatgc&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",119=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjh6x-B8o6q9gSntYeVuw_EQ&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",194=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjheXusWQRo6sfA-lYCLTNrg&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",195=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjhkIr1nhvJBVxYqLne91Cy8&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect",198=>"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=puZXmjtl3E76olVm6WUhTW0oae3o&biz=MjM5NzQ3NjI4MQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect");




$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE = array(1=>"ƴ�Ҿ߻",2=>"ĸ�׽ڻ",3=>"һԪ��Ҿ�_5��",4=>"���˳־û",5=>"����С����",6=>"�㱻������",7=>"������",8=>"��ͷ�",9=>"���׽ڻ",10=>"���˴����ػ",11=>"��˯�����齺����Ѵ�����",12=>"�²�ͯ����Ϸ",13=>"������_���������ƹ�",14=>"������_��ý���ƹ�",15=>"������_����ɨ��",16=>"һ������",17=>"�������",18=>"��Ʒ500���˿",19=>"�Ը��������",20=>"��������");

//xiaoxu ��ע ֮ǰͳ���ѻ��� ֮��ͳ�ƴ�50��ʼ���
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[50] = "����΢��--�Ϻ�";
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[51] = "����΢��--����";
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[52] = "��Ա�--��Ϧ���";

//�²���ϲ��������100��ʼ���
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[101] = "�²����δ��";
$XINJU2000_WEIXIN_YEMIANHUODONG_ZENGFEN_TYPE[102] = "�����������ʸ���¥��";


$XINJU_WEIXIN_MEITU_USER_MEITU_JINGXUAN_TYPE = array(1=>"��ͼ",2=>"�ܿ�");

$XINJU_WEIXIN_MEITU_USER_MEITU_JINGXUAN_POSITION = array(1=>"1��λ��",2=>"2��λ��",3=>"3��λ��",4=>"4��λ��",5=>"5��λ��",6=>"6��λ��",7=>"7��λ��");





$KEHU_ZHIJIAN_TYPE_ARRAY = array(1 => '�ڲ�', 2 => '�ⲿ');



$KEHU_ZHIJIAN_LEVE_ARRAY = array(1 => '1��', 2 => '2��', 3 => '3��', 4 => '����');



$KEHU_ZHIJIAN_RIGHT_ARRAY = array(1 => '��ȷ', 2 => '����');



$GONGNENG_CAT = array(1=>'���ܶ���banner',2=>'��Ա�',3=>'�Ҿ�ѧ��',4=>'��̳����');



$ANLI_TONGJI_TEAM_ARRAY = array(1 => '�İ�1��', 2 => '�İ�2��', 3 => '�İ�3��');



$delivery_install_h=array(6=>"6��",7=>"7��",8=>"8��",9=>"9��",10=>"10��",11=>"11��",12=>"12��",13=>"13��",14=>"14��",15=>"15��",16=>"16��",17=>"17��",18=>"18��",19=>"19��",20=>"20��",21=>"21��");

$delivery_install_m=array(0=>"0��",10=>"10��",20=>"20��",30=>"30��",40=>"40��",50=>"50��");



$weike_designer_lizhi_state=array(1 => "δ����", 2 => "����ְ", 3 => "δ��ְ");

$zhuanti_type=array(1=>"΢����˿ͨ-�ƶ�",2=>"΢����˿ͨ-PC",3=>"΢��Ʒ���ٵ�",4=>"΢�����ύ",5=>"΢�����������ύ");;//ר�����ͷ��ʼ�¼

//΢�ž���
$WEIXIN_JUZHEN_MENU_TYPE = array(1 => 'ͼ��', 2 => '����');
$WEIXIN_JUZHEN_CLICK_DES_TYPE = array(1=>"��ע�Զ��ظ�",2=>"�Զ���ؼ��ֻظ�"); 
$WEIXIN_JUZHEN_SCAN_SETTING_TYPE = array(1=>"�ŵ�",2=>"�");


$MSG_TYPE = array(1=>'ע��',2=>'�޸�',3=>'��̬����', 4=>'������Ϣ');

//��������ϵͳ
$FANKUI_TYPE_ARRAY_INFO=array(1=>"��������",2=>"����",3=>"�����");
$is_hao_cha_array=array(1=>"����",2=>"����");
$genjin_type_array=array(1=>"����",2=>"��Ʒ�ͷ�");

?>
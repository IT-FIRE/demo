<?php
/* s.wx2015/7/18.������-------------------------------------------------------------e */
header( 'Access-Control-Allow-Origin:*' ); 
//--e
if ( !defined('T_IMG_ROOT') )	define('T_IMG_ROOT', str_replace ( '\\', '/', dirname( __FILE__ ) . '/' ) );

/* s.wx2015/7/22.func-------------------------------------------------------------e */
function check_str($var){

	$var = str_replace(" ", "", $var);
	$var = str_replace("'", "", $var);
	$var = str_replace("\"", "", $var);

	return $var;
}
//--e

$token = isset($_GET['tk']) ? $_GET['tk'] : '';
$t_src = isset($_POST['src']) ? check_str($_POST['src']) : '';

$host = 'localhost';
$port = '3306';
$user = 'root';
$pwd = '123abc';
$mysqlLink = mysql_connect("$host:$port", $user, $pwd);
$query = 'set names utf8';
mysql_query($query, $mysqlLink);
$query = 'use test';
mysql_query($query, $mysqlLink);

//ɾ��ǰ��Ҫ�Ȳ�ѯ�Ƿ��Ѿ���ʹ�� ���� ʵ�ʴ��ڵ�ͼƬɾ��ǰ�Ƿ��Ѿ���ʹ�ã���ʹ����ɾ��ʵ��ͼƬ������ɾ������ļ�¼���˴�ʡ�ԣ�

$t_path = T_IMG_ROOT . $t_src;
//$t_path = './upload/'.basename($t_src);
@unlink($t_path);

$query = 'delete from froala_edit_img where token="'.$token.'" and img="'.$t_src.'"';
mysql_query($query, $mysqlLink);

mysql_close($mysqlLink);
exit;
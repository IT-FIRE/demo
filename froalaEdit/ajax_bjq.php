<?php
/* s.wx2015/7/18.¿çÓò´«Êä-------------------------------------------------------------e */
header( 'Access-Control-Allow-Origin:*' ); 
//--e

$fileIMG = isset($_FILES['file']) ? $_FILES['file'] : 'none';
$token = isset($_GET['tk']) ? check_str($_GET['tk']) : '';

if ( !$token ) return;

/* s.wx2015/7/22.func-------------------------------------------------------------e */
function check_str($var){

	$var = str_replace(" ", "", $var);
	$var = str_replace("'", "", $var);
	$var = str_replace("\"", "", $var);

	return $var;
}
//--e

if ( !defined('T_IMG_ROOT') )	define('T_IMG_ROOT', str_replace ( '\\', '/', dirname( __FILE__ ) . '/' ) );
$path = T_IMG_ROOT . 'upIMG/';

if ( !is_dir($path) ){
	mkdir($path, 0777);
	chmod($path, 0777);
}

$imgName = 'demo'.date('YmdHis').'.jpg';
$path = $path . $imgName;

if ( $isUp = move_uploaded_file($fileIMG['tmp_name'], $path) ){
	$re = array();
	//$re['link'] = 'http://xx.xxxx.com/sys/upload/'.$imgName;
	$re['link'] = 'upIMG/'.$imgName;

    ////´æ´¢Èë¿â
    $host = 'localhost';
    $port = '3306';
    $user = 'root';
    $pwd = '123abc';
    $mysqlLink = mysql_connect("$host:$port", $user, $pwd);
    $query = 'set names utf8';
    mysql_query($query, $mysqlLink);
    $query = 'use test';
    mysql_query($query, $mysqlLink);

    $query = 'insert into froala_edit_img (`img`, `token`, `post_date`) values ("'.$re['link'].'", "'.$token.'", "'.time().'")';
    mysql_query($query, $mysqlLink);

    mysql_close($mysqlLink);

	//if( !is_object($_wsys_bjq_img) )	make_class('_wsys_bjq_img');
	//$t_data = array('token'=>$token, 'img'=>$re['link'], 'tb_name'=>'none', 'post_date'=>time());
	//$_wsys_bjq_img->add($t_data);

	echo json_encode($re);
}
exit;
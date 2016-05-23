<?php
/* s.wx2015/7/18.¿çÓò´«Êä-------------------------------------------------------------e */
header( 'Access-Control-Allow-Origin:*' ); 
//--e

$token = isset($_GET['tk']) ? $_GET['tk'] : '';
$token = check_str($token);

if ( !$token ) return;

/* s.wx2015/7/22.func-------------------------------------------------------------e */
function check_str($var){

	$var = str_replace(" ", "", $var);
	$var = str_replace("'", "", $var);
	$var = str_replace("\"", "", $var);

	return $var;
}
//--e


$host = 'localhost';
$port = '3306';
$user = 'root';
$pwd = '123abc';
$mysqlLink = mysql_connect("$host:$port", $user, $pwd);
$query = 'set names utf8';
mysql_query($query, $mysqlLink);
$query = 'use test';
mysql_query($query, $mysqlLink);

$query = 'select * from froala_edit_img where token="'.$token.'" and post_date>='.(time()-7200);
$result = mysql_query($query, $mysqlLink);

if ( $result ){
    $infos = array();
    while($row = mysql_fetch_assoc($result)){
        $infos[] = $row;
    }
}

mysql_close($mysqlLink);

if ( !empty($infos) ){

	$re_arr = array();
	foreach( $infos as $k=>$v ){
		$re_arr[] = $v['img'];
	}
	echo json_encode($re_arr);
}

exit;
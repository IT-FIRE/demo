<?php
/**
 * --------------------s.wx2015/7/29
 * @param	Fires_rechaba	func		�ļ��Ȳ�Ρ��ļ��е����밲ȫ�������⡿
			----------------��$dir		string	������ļ���·����Ĭ��ֵΪ�գ�Ϊ��ʱ��������һ��Ĭ�ϵ��ļ���
 * 
 * ----------------------------------------------------------------------------e
 */
function Fires_rechaba($dir=''){

	if ( $dir )	$tdir = $dir;	else	$tdir='./payment/';
	
	$fp = opendir($dir);
	while( $file=readdir($fp) ){

		$t_whole_path = $tdir . $file;
		if($file!='.' && $file!='..')	require_once($t_whole_path);
	}
}

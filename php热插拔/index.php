<?php
/**
 * --------------------s.wx2015/7/29
 * @param	Fires_rechaba	func		文件热插拔【文件夹的引入安全过滤问题】
			----------------》$dir		string	引入的文件夹路径；默认值为空，为空时，将赋给一个默认的文件夹
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

<?php
/**
 * --------------------s.wx150228
 * @param	Fires_ip2City_fast		func	ͨ��ip��ó���
			-----��$ip		string	  ipֵ
 * @return	 $data	string		���س�����Ϣ
 * ----------------------------------------------------------------------------e
 */
function Fires_ip2City_fast($ip) {
	
	$url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
	$ip=json_decode( file_get_contents($url) );
	if((string)$ip->code=='1'){
		return false;
	}
	$data = $ip->data->city;
	return $data;
}
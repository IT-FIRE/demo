<?php
/**
 * --------------------s.wx150228
 * @param	Fires_ip2City_fast		func	通过ip获得城市
			-----》$ip		string	  ip值
 * @return	 $data	string		返回城市信息
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
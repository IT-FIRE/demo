<?php
/**
 * --------------------s.wx150408
 * @param	Fires_checkRemoteFileExist	func	检测远程文件是否存在
			-----》$found		bool
 * ----------------------------------------------------------------------------e
 */
function Fires_checkRemoteFileExist($url) {
	
	$curl = curl_init($url);
	// 不取回数据
	curl_setopt($curl, CURLOPT_NOBODY, true);
	// 发送请求
	$result = curl_exec($curl);
	$found = false;
	// 如果请求没有发送失败
	if ($result !== false) {
		// 再检查http响应码是否为200
		$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		if ($statusCode == 200) {
			$found = true;
		}
	}
	curl_close($curl);

	return $found;
}
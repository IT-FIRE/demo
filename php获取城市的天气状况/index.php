<?php
/**
 * --------------------s.wx150228
 *@param		getWeather_fast	func	获得天气(通过百度api该方法比较快)
			-----》$city		string	所属城市
	@return		string		返回所属城市的天气信息
 * ----------------------------------------------------------------------------e
 */
function getWeather_fast($city) {
	
	/* if( $t_pos=strpos($city, '市') )
		$city = str_split($city,strlen($city)-3);	//{ [0]=> string(6) "武汉" [1]=> string(3) "市" }
	$city =$city[0]; */
	if( $t_pos=strpos($city, '市') )	$city=substr($city, 0, $t_pos);
	$city_encode = urlencode($city);
	//下面需要到百度http://lbsyun.baidu.com/apiconsole/key 生成ak且需要对该ak设置ip白名单
	$content = file_get_contents("http://api.map.baidu.com/telematics/v3/weather?location=".$city_encode."&output=json&ak=QOFjrBAO1xMOWMGGQ2Um1iAI");
	$content = json_decode($content);	//如果校验失败返回object(stdClass)#2 (2) { ["status"]=> int(210) ["message"]=> string(18) "APP IP校验失败" }
	$imp_result = $content->results;
	$imp_result = $imp_result[0];
	$imp_result = $imp_result->weather_data;
	$imp_result = $imp_result[0];
	
	$temperature = intval(substr($imp_result->date, -6, 4));
	// $weather = mb_convert_encoding($imp_result->weather, 'UTF-8', 'GBK');
	// var_dump(mb_detect_encoding($imp_result->weather));
	// exit;
	return $weather = $imp_result->weather;
}
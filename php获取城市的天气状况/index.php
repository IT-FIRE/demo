<?php
/**
 * --------------------s.wx150228
 *@param		getWeather_fast	func	�������(ͨ���ٶ�api�÷����ȽϿ�)
			-----��$city		string	��������
	@return		string		�����������е�������Ϣ
 * ----------------------------------------------------------------------------e
 */
function getWeather_fast($city) {
	
	/* if( $t_pos=strpos($city, '��') )
		$city = str_split($city,strlen($city)-3);	//{ [0]=> string(6) "�人" [1]=> string(3) "��" }
	$city =$city[0]; */
	if( $t_pos=strpos($city, '��') )	$city=substr($city, 0, $t_pos);
	$city_encode = urlencode($city);
	//������Ҫ���ٶ�http://lbsyun.baidu.com/apiconsole/key ����ak����Ҫ�Ը�ak����ip������
	$content = file_get_contents("http://api.map.baidu.com/telematics/v3/weather?location=".$city_encode."&output=json&ak=QOFjrBAO1xMOWMGGQ2Um1iAI");
	$content = json_decode($content);	//���У��ʧ�ܷ���object(stdClass)#2 (2) { ["status"]=> int(210) ["message"]=> string(18) "APP IPУ��ʧ��" }
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
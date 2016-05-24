<?php 

/*-------------------- wx2015/10/7.根据地图路线距离计算时间 --------------------e
 * 项目来源：技术部												  
 * 页面制作：wx												  
 * 跟进人：wx													  
 * 备注1：本文件区别与O2O项目中其他文件，文件编码为UTF-8码				  
 * 备注2：														  
 * 程序制作：wx2015/10/7										  
 * 程序修改：													  
 e-------------------------------------------------------------------------------------*/




/* s.wx2015/9/24.init..................................................................................e */
header("Content-Type: text/html; charset=utf-8");
//--e


/* s.wx2015/9/24.func..................................................................................e */
function Fires_curlPost($uri, $data=null){
	
	$ch = curl_init ();
	// print_r($ch);
	curl_setopt ( $ch, CURLOPT_URL, $uri );
	curl_setopt ( $ch, CURLOPT_POST, 1 );
	curl_setopt ( $ch, CURLOPT_HEADER, 0 );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
	$return = curl_exec ( $ch );
	curl_close ( $ch );

	return $return;
}

function Fires_get_pos($json_str){

	$obj = json_decode($json_str);

	return $obj->result->formatted_address;
}
//--e




/* s.wx2015/9/24.main..................................................................................e */

	//[BLOCK]------wx2015/10/7.根据坐标获得确切的出发点和终点地址
$str_b_pos_coor = isset($_GET["b_pos_coor"]) ? $_GET["b_pos_coor"] : '';	//开始坐标  b_pos_coor=经度,纬度
$str_e_pos_coor = isset($_GET["e_pos_coor"]) ? $_GET["e_pos_coor"] : '';;	//结束坐标  e_pos_coor=经度,纬度

if ( empty($str_b_pos_coor)||empty($str_e_pos_coor) ){

	exit('坐标参数不完整！');
}

$arr_b_pos_coor = explode(',', $str_b_pos_coor);	//array(经度,纬度)
$arr_e_pos_coor = explode(',', $str_e_pos_coor);	//array(经度,纬度)

$str_b_pos_json = Fires_curlPost('http://api.map.baidu.com/geocoder/v2/?output=json&ak=bNuYcIybOBcdMyz9FWdqUqRR&location='.$arr_b_pos_coor[1].','.$arr_b_pos_coor[0]);
$str_e_pos_json = Fires_curlPost('http://api.map.baidu.com/geocoder/v2/?output=json&ak=bNuYcIybOBcdMyz9FWdqUqRR&location='.$arr_e_pos_coor[1].','.$arr_e_pos_coor[0]);

if ( $str_b_pos_json ){

	$str_b_pos = Fires_get_pos($str_b_pos_json);
}
if ( $str_e_pos_json ){

	$str_e_pos = Fires_get_pos($str_e_pos_json);
}

//--e

//echo '<pre>';
//var_dump( $str_b_pos ); 
//var_dump( $str_e_pos ); 
//echo '</pre>';
//exit;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=bNuYcIybOBcdMyz9FWdqUqRR"></script>
	<title>计算驾车时间与距离</title>
</head>
<body>
	<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	map.centerAndZoom(new BMap.Point(113.30764967515, 23.120049102076), 12);

	var p1 = new BMap.Point("<?=$arr_b_pos_coor[0]?>","<?=$arr_b_pos_coor[1]?>");
	var p2 = new BMap.Point("<?=$arr_e_pos_coor[0]?>","<?=$arr_e_pos_coor[1]?>");

	var output = "从<?=$str_b_pos?>到<?=$str_e_pos?>驾车需要";
	var searchComplete = function (results){
		if (transit.getStatus() != BMAP_STATUS_SUCCESS){
			return ;
		}
		var plan = results.getPlan(0);
		output += plan.getDuration(true) + "\n";                //获取时间
		output += "总路程为：" ;
		output += plan.getDistance(true) + "\n";             //获取距离
	}
	var transit = new BMap.DrivingRoute(map, {renderOptions: {map: map},
		onSearchComplete: searchComplete,
		onPolylinesSet: function(){
			setTimeout(function(){alert(output)},"1000");
	}});
	//transit.search("<?=$str_b_pos?>", "<?=$str_e_pos?>");//可以通过中文地址
	transit.search(p1, p2);//也可以通过坐标
</script>

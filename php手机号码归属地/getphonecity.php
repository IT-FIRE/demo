<?php
/* s.wx2015/6/11.方式1接口-------------------------------------------------------------e */
//$uri = 'http://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel='.$tel.'&t='.$now_timestamp;
//$data = Fires_curlPost($uri);

//$pro = substr($data, "56", "4");
//$ser = substr($data, "81", "4");

/* s.wx2015/6/11.方式2方法-------------------------------------------------------------e */
define( 'MOBI_PATH', dirname(__FILE__).'/mobile/' );//   /fires_helper/mobile

function get_random_phone_server()
{
	$server_array = array( 1 => '119.145.130.93', 2 => '121.9.245.206', 3 => '119.145.130.76', 4 => '121.9.245.205' , 5 => '119.145.130.77' , 6 => '121.9.242.4', 7 => '121.9.242.5' , 8 => '121.9.242.41' , 9 => '121.9.242.42' , 10 => '119.145.130.66', 11 => '121.9.245.194', 12 => '121.9.245.195', 13 => '121.9.245.226', 14 => '121.9.245.227');//

	$i = rand(1, count($server_array));

	return $server_array[$i];

}
function getphonecity( $mobi )
{
        $mobiLength = strlen( $mobi );
        if ( $mobiLength > 11 || $mobiLength < 7 ) return;
        
        $mobi7 = substr( $mobi, 0, 7 );
		$file = MOBI_PATH . substr( $mobi, 0, 3 ) . '/' . substr( $mobi, 3, 1 ) . '.dat';
		if(!file_exists($file)){
			
			$city = @file_get_contents("http://".get_random_phone_server()."/newsys/phone_api.php?fxapicode=hksdfj9324789&get_city=1&phone=".$mobi);

			if(strlen($city) > 100) return '';

			return $city;
		}
        $resultArray = file( $file );
        foreach ( $resultArray as $key => $val )
        {
                $lineArray = split( '\|', $val );
                if ( $mobi7 == $lineArray[0] )
                {
                        //$lineArray[2] = trim( $lineArray[2] );

						$tmp = split(" ", trim($lineArray[1]));
                        return trim($tmp[1]);
                }
        }

		$city = @file_get_contents("http://".get_random_phone_server()."/newsys/phone_api.php?fxapicode=hksdfj9324789&get_city=1&phone=".$mobi);

		if(!$city){
			usleep(10);
			$city = @file_get_contents("http://".get_random_phone_server()."/newsys/phone_api.php?fxapicode=hksdfj9324789&get_city=1&phone=".$mobi);


		}

		if(strlen($city) > 100) return '';

        return $city;
}
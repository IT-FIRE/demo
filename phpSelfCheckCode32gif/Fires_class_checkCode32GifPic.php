<?php
//fires_helper/font_1.ttf  or  font_2.ttf
define('ADMIN_FONTS_DIR', './');

class CheckCodeTool{
	private $_canvas_width;
	private $_canvas_height;
	public $_string;
	
	public function __construct($width = 700, $height = 250){
		$this->_canvas_width = $width;
		$this->_canvas_height = $height;
		$this->_string = $this->randCode();
	}
	
	public function getGIF(){
		/* 生成N帧GIF图像 */
		$imagedata = $this->animation($this->_canvas_width, $this->_canvas_height, $this->_string);
//		var_dump($imagedata);
//		exit;
		$gif = $this->next_construct($imagedata);
		
		return $this->GetAnimation();
	}
	/** 
	 * 生成四位随机字符串
	 */
	public function randCode(){
		$randCode = '';
		$chars = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPRSTUVWXYZ23456789';
		for($i=0; $i<6; ++$i){
			$randCode .= substr($chars, mt_rand(0, strlen($chars)-1), 1);
		}
		return $randCode;
	}
	/** 
	 * 生成具有n帧的GIF动画
	 */
	public function animation($canvas_width, $canvas_height, $string){  //animation:动画
		/* 生成32帧gif动画 */
		for ($i=0; $i<16; ++$i){
			ob_start();
			//canvas:画布
			$img = imagecreate($canvas_width, $canvas_height);
	
			/* 给画布分配颜色 */
			$canvas_color = imagecolorallocate($img, 255, 255, 255);
			imagefill($img, 0, 0, $canvas_color);
	
			/* 在画布上写字 */
			$font_space = 87;
//			if($i>0){  /* 屏蔽第一帧 */
				for($j=0; $j<strlen($string); ++$j){
					$font_color = imagecolorallocate($img, rand(10, 80), rand(81, 170), rand(171, 255));
					$font_file = ADMIN_FONTS_DIR . 'font_1.ttf';
	
					imagettftext($img, 140, rand(-15, 15), 120+$font_space*$j, imagesy($img)-80, $font_color, $font_file, $string[$j]);
				}
//			}
	
			/* 设置点干扰 */
			for($point_num=0; $point_num<30; ++$point_num){
				$point_color_random = imagecolorallocate($img, rand(81, 170), rand(10, 80), rand(171, 255));
				imagesetpixel($img, rand()%(imagesx($img)-50), rand()%(imagesy($img)-100), $point_color_random);
			}
	
			/* 设置线干扰 */
			for($line_num=0; $line_num<5; ++$line_num){
				$line_color_random = imagecolorallocate($img, rand(81, 170), rand(10, 80), rand(171, 255));
				$ellipse_or_straight = rand(0, 1); //0表示ellipse:椭圆（表示弧线）  1表示straight:直线
				if($ellipse_or_straight){ //画直线
					imageline($img, mt_rand(0, imagesx($img)), mt_rand(0, imagesy($img)), mt_rand(0, imagesx($img)), mt_rand(0, imagesy($img)), $line_color_random);
				}else{ //画弧线
					$w = mt_rand(0, imagesx($img));
					$h = mt_rand(0, imagesy($img));
					imagearc($img, imagesx($img)-floor($w/2), imagesy($img)-floor($h/2), $w, $h, rand(0, 180), rand(180, 270), $line_color_random);
				}
			}
	
			/* 将gif图像从缓冲区通过ob_get_contents()取出并保存到数组变量中 */
			imagegif($img);
			imagedestroy($img);
			for($num=0; $num<1; ++$num){
				$imagedata[] = ob_get_contents();
			}
			ob_clean();
			++$i;
		}
		return $imagedata;
	}
	
	
	/* 集成部分 */
	var $GIF = "GIF89a";                /* GIF header 6 bytes        */
	var $VER = "GIFEncoder V2.06";        /* Encoder version         */
	
	var $BUF = Array ( );   //buffer:缓冲
	var $LOP =  0;
	var $DIS =  2;
	var $COL = -1;
	var $IMG = -1;
	
	var $ERR = Array (
			'ERR00' =>"Does not supported function for only one image!",
			'ERR01' =>"Source is not a GIF image!",
			'ERR02' =>"Unintelligible flag ",
			'ERR03' =>"Could not make animation from animated GIF source",
	);
	
	public function next_construct($GIF_src, $GIF_dly=100, $GIF_lop=0, $GIF_dis=0,  $GIF_red=0, $GIF_grn=0, $GIF_blu=0, $GIF_mod='bin' ){
		//		$GIF_src = $data['check_code'];
	
		if (!is_array($GIF_src) && !is_array($GIF_tim)) //判断接收到的是否为一组gif图片数据数组
		{
			echo "%s: %s", $this->VER, $this->ERR['ERR00'];
			exit( 0 );
		}
		//××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××
		$this->LOP = ($GIF_lop > -1) ? $GIF_lop : 0;  //0
		$this->DIS = ($GIF_dis > -1) ? (( $GIF_dis < 3 ) ? $GIF_dis : 3) : 2;  //0
		$this->COL = ($GIF_red > -1 && $GIF_grn > -1 && $GIF_blu > -1) ? ($GIF_red | ($GIF_grn << 8) | ($GIF_blu << 16)) : -1;  //0
		/*	0				0				0
		 *	28			  * 216
		=	0			  = 0
		*/
		/* 这个for循环是保存取出的gif图片数据并检测生成的所有的gif图片是否有错误 */
		for ($i = 0, $src_count = count($GIF_src); $i < $src_count; $i++ ){
			//××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××
			if (strToLower($GIF_mod) == "url") //bin不执行  我猜测这个判断的意思应该是当前面生成的gif图片数据没有保存到变量中，而是保存到了文件中，这个时候就需要通过fopen()系列读取到每条数据然后保存到$this->BUF[]中，url就是指文件的全路径
			{
				$this->BUF[] = fread(fopen($GIF_src[$i], "rb"), filesize($GIF_src[$i]));  //将第$i个图片元素数据保存到$this->BUF[]中
			}
			elseif(strToLower($GIF_mod) == "bin") //bin执行
			{
				$this->BUF[] = $GIF_src[$i]; /* 确定是gif图片的二进制字符数据，因为上面是通过缓冲获得输出的图片数据:imagegif()保存到了变量数组中*/
			}
			else  //其它获得gif图片组数据的情况都报错，因为不可能
			{
				printf("%s: %s ( %s )!", $this->VER, $this->ERR[ 'ERR02' ], $GIF_mod);
				exit(0);
			}
			//××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××
			if (substr($this->BUF[$i], 0, 6) != "GIF87a" && substr($this->BUF[$i], 0, 6) != "GIF89a")  //gif图片组每个元素的数据信息的开头一定是GIF87a或GIF89a，不是则报错
			{
				printf( "%s: %d %s", $this->VER, $i, $this->ERR ['ERR01']);
				exit(0);
			}
			//××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××
			/* ord($this->BUF[0]{10})
			 * 165
			* 1010 0101
			& 0x07
			0000 0111
			=0000 0101
			=5
	
			2
			<<5
			= 2*25
			= 64
			*  3
			= 192
			+  13
			= 205
			*/
			for ($j = (13 + 3 * (2 << (ord($this->BUF[$i]{10}) & 0x07 ))), $k = TRUE; $k; $j++){
				switch ($this->BUF[$i]{$j})  //$this->BUF[0]{205}: ","
				{
					case "!":
						if ((substr($this->BUF[$i], ($j + 3), 8)) == "NETSCAPE"){
							echo "%s: %s ( %s source )!", $this->VER, $this->ERR ['ERR03'], ($i + 1);
							exit( 0 );
						}
						break;
					case ";":
						$k = FALSE;
						break;
				}
			}
		}
		/* 检查完是否有错误才执行接下来的代码 */
		$this->GIFAddHeader();
		for($i = 0, $count_buf = count($this->BUF); $i < $count_buf; $i++){
			$this->GIFAddFrames($i, $GIF_dly[$i]);   //GIF_dly[$i]不存在即为null
		}
		$this->GIFAddFooter();  //在所有图片拼接成的字符串数据末尾加“;”
	}
	
	/* 设置GIF头信息 */
	public function GIFAddHeader(){
		$cmap = 0;
		/* 0～48：0011 0000； 1～49：0011 0001；
		 * 0x80:  1000 0000         1000 0000
		&
		=		  0000 0000		    0000 0000
		*/
		if (ord($this->BUF[0]{10}) & 0x80) //{ord($this->BUF[0]{10}) & 0x80 }   :128
		{
			/*     192   64       5*/
			$cmap = 3 * ( 2 << ( ord ( $this->BUF [ 0 ]{10} ) & 0x07 ));
	
			$this->GIF .= substr ( $this->BUF [ 0 ], 6, 7);
			$this->GIF .= substr ( $this->BUF [ 0 ], 13, $cmap);  //这两条实际应该是拼接上了第0个gif图片元素数据除6号位之前的“GIF87a”的全部数据，即图片的完整数据，即图片本身
			$this->GIF .= "!\377\13NETSCAPE2.0\3\1" . $this->GIFWord ( $this->LOP ) . "\0";  // !\377\13NETSCAPE2.0\3\1\0
		}
	}
	
	/*  */
	public function GIFAddFrames ( $i, $d ){
		$Locals_str = 13 + 3 * (2 <<(ord($this->BUF[$i]{10}) & 0x07));  //$i=0; $Locals_str=205
	
		$Locals_end = strlen($this->BUF[$i]) - $Locals_str - 1;  //为下面的substr做铺垫，最后-1因为substr()是从0开始计算的
		$Locals_tmp = substr ($this->BUF[$i], $Locals_str, $Locals_end);  //获得图片（二进制）第205位以后的全部数据
	
		$Global_len = 2 << (ord( $this->BUF [0]{10} ) & 0x07 );  //64
		$Locals_len = 2 << (ord( $this->BUF[$i]{10} ) & 0x07);  //除了$i=0时为64，$i>0都是128  出现这个情况的原因：在画布上写字时屏蔽了第一帧，也就是第一帧上是没有写字的，自然第一帧的数据比后面帧的数据少了写入的文字部分
	
		/*                                  13  192*/
		$Global_rgb = substr($this->BUF[0], 13, 3 * (2 << ( ord ( $this->BUF[0]{10} ) & 0x07)));
		$Locals_rgb = substr ($this->BUF[$i], 13, 3 * (2 << ( ord ( $this->BUF[$i]{10} ) & 0x07)));
		/*                $i=0;                13  192
		 *                $i=1,2...            13  384
		*             */
	
		/*                           null                        null                    null */
		$Locals_ext = "!\xF9\x04" . chr(($this->DIS << 2) + 0) . chr(($d >> 0) & 0xFF) . chr(($d >> 8) & 0xFF) . "\x0\x0";  // !\xF9\x04\x0\x0
	
		if ( $this->COL > -1 && ord($this->BUF[$i]{10}) & 0x80){
			for($j = 0; $j<(2 << (ord( $this->BUF[$i]{10}) & 0x07)); $j++ ){
				/* 64  */
				/*       0                                                            0                                                         0 */
				if(ord($Locals_rgb{3 * $j + 0}) == ($this->COL>>0) & 0xFF && ord( $Locals_rgb {3 * $j + 1}) == ($this->COL>>8) & 0xFF && ord($Locals_rgb {3 * $j + 2}) == ($this->COL>>16) & 0xFF)
				{
					$Locals_ext = "!\xF9\x04" . chr(($this->DIS << 2) + 1) . chr (( $d >> 0) & 0xFF) . chr (($d >> 8) & 0xFF) . chr ($j) . "\x0";
					break;
				}
			}
		}
		switch ( $Locals_tmp {0} ){
			case "!":
				$Locals_img = substr($Locals_tmp, 8, 10);
				$Locals_tmp = substr($Locals_tmp, 18, strlen($Locals_tmp) - 18);
				break;
			case ",":
				$Locals_img = substr($Locals_tmp, 0, 10);
				$Locals_tmp = substr($Locals_tmp, 10, strlen($Locals_tmp) - 10);
				break;
		}
		if ( ord( $this->BUF[$i]{10} ) & 0x80 && $this->IMG > -1 )  //第一张GIF：$i=0; $this->IMG=-1;   false   第一张以后的所有GIF：$i>0; $this->IMG=1; true
		{
			if ( $Global_len == $Locals_len ) //目前的情况永远不等，不执行
			{
				if ( $this->GIFBlockCompare ( $Global_rgb, $Locals_rgb, $Global_len ) ){
					$this->GIF .= ( $Locals_ext . $Locals_img . $Locals_tmp );
				}
				else{
					$byte  = ord ( $Locals_img{9});
					$byte |= 0x80;
					$byte &= 0xF8;
					$byte |= ( ord ( $this->BUF [ 0 ]{10}) & 0x07);
					$Locals_img{9} = chr($byte);
					$this->GIF .= ($Locals_ext . $Locals_img . $Locals_rgb . $Locals_tmp);
				}
			}
			else{  //执行
				$byte  = ord($Locals_img{9});
				$byte |= 0x80;
				$byte &= 0xF8;
				$byte |= (ord($this->BUF[$i]{10}) & 0x07);
				$Locals_img {9} = chr($byte);
				$this->GIF .= ( $Locals_ext . $Locals_img . $Locals_rgb . $Locals_tmp );  //GIF图片完整的数据信息
			}
		}
		else{
			$this->GIF .= ( $Locals_ext . $Locals_img . $Locals_tmp );  //GIF图片完整的数据信息
		}
		$this->IMG  = 1;
	}
	
	public function GIFAddFooter(){
		$this->GIF .= ";";
	}
	
	public function GIFBlockCompare ( $GlobalBlock, $LocalBlock, $Len ){
		for ( $i = 0; $i < $Len; $i++ )
		{
			if($GlobalBlock { 3 * $i + 0 } != $LocalBlock { 3 * $i + 0 } || $GlobalBlock { 3 * $i + 1 } != $LocalBlock { 3 * $i + 1 } || $GlobalBlock { 3 * $i + 2 } != $LocalBlock{3 * $i + 2})
			{
				return ( 0 );
			}
		}
		return ( 1 );
	}
	
	public function GIFWord ( $int ){
		return ( chr ( $int & 0xFF ) . chr ( ($int >> 8) & 0xFF ) );
	}
	
	public function GetAnimation (){
	
		return ($this->GIF);
	}
}
 //$imgGIF = new CheckCodeTool();

// echo $imgGIF->_canvas_width, '<br/>', $imgGIF->_canvas_height, '<br/>', $imgGIF->_string;
// exit;
/* var_dump($imagedata);
exit; */

//header("content-type: image/gif");
//echo $imgGIF->getGIF();

//echo '<hr/>';
//$str = $imgGIG->_string;
//$gifEncoder = new GIFEncoder($randCode);
//echo $gifEncoder->GetAnimation();	// 显示GIF动画


class output {
	
	private $_obj;

	public function __construct(){
		$this->_obj = $imgGIF = new CheckCodeTool();
	}

	public function output_img(){
		
		header("content-type: image/gif");
		echo $this->_obj->getGIF();
	}

	public function output_str(){
		
		$str = $this->_obj->_string;
		echo $str;
	}
}

$output = new output();

//$output->output_str();
$output->output_img();
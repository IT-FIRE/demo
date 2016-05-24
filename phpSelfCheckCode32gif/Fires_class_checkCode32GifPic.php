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
		/* ����N֡GIFͼ�� */
		$imagedata = $this->animation($this->_canvas_width, $this->_canvas_height, $this->_string);
//		var_dump($imagedata);
//		exit;
		$gif = $this->next_construct($imagedata);
		
		return $this->GetAnimation();
	}
	/** 
	 * ������λ����ַ���
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
	 * ���ɾ���n֡��GIF����
	 */
	public function animation($canvas_width, $canvas_height, $string){  //animation:����
		/* ����32֡gif���� */
		for ($i=0; $i<16; ++$i){
			ob_start();
			//canvas:����
			$img = imagecreate($canvas_width, $canvas_height);
	
			/* ������������ɫ */
			$canvas_color = imagecolorallocate($img, 255, 255, 255);
			imagefill($img, 0, 0, $canvas_color);
	
			/* �ڻ�����д�� */
			$font_space = 87;
//			if($i>0){  /* ���ε�һ֡ */
				for($j=0; $j<strlen($string); ++$j){
					$font_color = imagecolorallocate($img, rand(10, 80), rand(81, 170), rand(171, 255));
					$font_file = ADMIN_FONTS_DIR . 'font_1.ttf';
	
					imagettftext($img, 140, rand(-15, 15), 120+$font_space*$j, imagesy($img)-80, $font_color, $font_file, $string[$j]);
				}
//			}
	
			/* ���õ���� */
			for($point_num=0; $point_num<30; ++$point_num){
				$point_color_random = imagecolorallocate($img, rand(81, 170), rand(10, 80), rand(171, 255));
				imagesetpixel($img, rand()%(imagesx($img)-50), rand()%(imagesy($img)-100), $point_color_random);
			}
	
			/* �����߸��� */
			for($line_num=0; $line_num<5; ++$line_num){
				$line_color_random = imagecolorallocate($img, rand(81, 170), rand(10, 80), rand(171, 255));
				$ellipse_or_straight = rand(0, 1); //0��ʾellipse:��Բ����ʾ���ߣ�  1��ʾstraight:ֱ��
				if($ellipse_or_straight){ //��ֱ��
					imageline($img, mt_rand(0, imagesx($img)), mt_rand(0, imagesy($img)), mt_rand(0, imagesx($img)), mt_rand(0, imagesy($img)), $line_color_random);
				}else{ //������
					$w = mt_rand(0, imagesx($img));
					$h = mt_rand(0, imagesy($img));
					imagearc($img, imagesx($img)-floor($w/2), imagesy($img)-floor($h/2), $w, $h, rand(0, 180), rand(180, 270), $line_color_random);
				}
			}
	
			/* ��gifͼ��ӻ�����ͨ��ob_get_contents()ȡ�������浽��������� */
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
	
	
	/* ���ɲ��� */
	var $GIF = "GIF89a";                /* GIF header 6 bytes        */
	var $VER = "GIFEncoder V2.06";        /* Encoder version         */
	
	var $BUF = Array ( );   //buffer:����
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
	
		if (!is_array($GIF_src) && !is_array($GIF_tim)) //�жϽ��յ����Ƿ�Ϊһ��gifͼƬ��������
		{
			echo "%s: %s", $this->VER, $this->ERR['ERR00'];
			exit( 0 );
		}
		//����������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������
		$this->LOP = ($GIF_lop > -1) ? $GIF_lop : 0;  //0
		$this->DIS = ($GIF_dis > -1) ? (( $GIF_dis < 3 ) ? $GIF_dis : 3) : 2;  //0
		$this->COL = ($GIF_red > -1 && $GIF_grn > -1 && $GIF_blu > -1) ? ($GIF_red | ($GIF_grn << 8) | ($GIF_blu << 16)) : -1;  //0
		/*	0				0				0
		 *	28			  * 216
		=	0			  = 0
		*/
		/* ���forѭ���Ǳ���ȡ����gifͼƬ���ݲ�������ɵ����е�gifͼƬ�Ƿ��д��� */
		for ($i = 0, $src_count = count($GIF_src); $i < $src_count; $i++ ){
			//����������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������
			if (strToLower($GIF_mod) == "url") //bin��ִ��  �Ҳ²�����жϵ���˼Ӧ���ǵ�ǰ�����ɵ�gifͼƬ����û�б��浽�����У����Ǳ��浽���ļ��У����ʱ�����Ҫͨ��fopen()ϵ�ж�ȡ��ÿ������Ȼ�󱣴浽$this->BUF[]�У�url����ָ�ļ���ȫ·��
			{
				$this->BUF[] = fread(fopen($GIF_src[$i], "rb"), filesize($GIF_src[$i]));  //����$i��ͼƬԪ�����ݱ��浽$this->BUF[]��
			}
			elseif(strToLower($GIF_mod) == "bin") //binִ��
			{
				$this->BUF[] = $GIF_src[$i]; /* ȷ����gifͼƬ�Ķ������ַ����ݣ���Ϊ������ͨ�������������ͼƬ����:imagegif()���浽�˱���������*/
			}
			else  //�������gifͼƬ�����ݵ������������Ϊ������
			{
				printf("%s: %s ( %s )!", $this->VER, $this->ERR[ 'ERR02' ], $GIF_mod);
				exit(0);
			}
			//����������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������
			if (substr($this->BUF[$i], 0, 6) != "GIF87a" && substr($this->BUF[$i], 0, 6) != "GIF89a")  //gifͼƬ��ÿ��Ԫ�ص�������Ϣ�Ŀ�ͷһ����GIF87a��GIF89a�������򱨴�
			{
				printf( "%s: %d %s", $this->VER, $i, $this->ERR ['ERR01']);
				exit(0);
			}
			//����������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������
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
		/* ������Ƿ��д����ִ�н������Ĵ��� */
		$this->GIFAddHeader();
		for($i = 0, $count_buf = count($this->BUF); $i < $count_buf; $i++){
			$this->GIFAddFrames($i, $GIF_dly[$i]);   //GIF_dly[$i]�����ڼ�Ϊnull
		}
		$this->GIFAddFooter();  //������ͼƬƴ�ӳɵ��ַ�������ĩβ�ӡ�;��
	}
	
	/* ����GIFͷ��Ϣ */
	public function GIFAddHeader(){
		$cmap = 0;
		/* 0��48��0011 0000�� 1��49��0011 0001��
		 * 0x80:  1000 0000         1000 0000
		&
		=		  0000 0000		    0000 0000
		*/
		if (ord($this->BUF[0]{10}) & 0x80) //{ord($this->BUF[0]{10}) & 0x80 }   :128
		{
			/*     192   64       5*/
			$cmap = 3 * ( 2 << ( ord ( $this->BUF [ 0 ]{10} ) & 0x07 ));
	
			$this->GIF .= substr ( $this->BUF [ 0 ], 6, 7);
			$this->GIF .= substr ( $this->BUF [ 0 ], 13, $cmap);  //������ʵ��Ӧ����ƴ�����˵�0��gifͼƬԪ�����ݳ�6��λ֮ǰ�ġ�GIF87a����ȫ�����ݣ���ͼƬ���������ݣ���ͼƬ����
			$this->GIF .= "!\377\13NETSCAPE2.0\3\1" . $this->GIFWord ( $this->LOP ) . "\0";  // !\377\13NETSCAPE2.0\3\1\0
		}
	}
	
	/*  */
	public function GIFAddFrames ( $i, $d ){
		$Locals_str = 13 + 3 * (2 <<(ord($this->BUF[$i]{10}) & 0x07));  //$i=0; $Locals_str=205
	
		$Locals_end = strlen($this->BUF[$i]) - $Locals_str - 1;  //Ϊ�����substr���̵棬���-1��Ϊsubstr()�Ǵ�0��ʼ�����
		$Locals_tmp = substr ($this->BUF[$i], $Locals_str, $Locals_end);  //���ͼƬ�������ƣ���205λ�Ժ��ȫ������
	
		$Global_len = 2 << (ord( $this->BUF [0]{10} ) & 0x07 );  //64
		$Locals_len = 2 << (ord( $this->BUF[$i]{10} ) & 0x07);  //����$i=0ʱΪ64��$i>0����128  ������������ԭ���ڻ�����д��ʱ�����˵�һ֡��Ҳ���ǵ�һ֡����û��д�ֵģ���Ȼ��һ֡�����ݱȺ���֡����������д������ֲ���
	
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
		if ( ord( $this->BUF[$i]{10} ) & 0x80 && $this->IMG > -1 )  //��һ��GIF��$i=0; $this->IMG=-1;   false   ��һ���Ժ������GIF��$i>0; $this->IMG=1; true
		{
			if ( $Global_len == $Locals_len ) //Ŀǰ�������Զ���ȣ���ִ��
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
			else{  //ִ��
				$byte  = ord($Locals_img{9});
				$byte |= 0x80;
				$byte &= 0xF8;
				$byte |= (ord($this->BUF[$i]{10}) & 0x07);
				$Locals_img {9} = chr($byte);
				$this->GIF .= ( $Locals_ext . $Locals_img . $Locals_rgb . $Locals_tmp );  //GIFͼƬ������������Ϣ
			}
		}
		else{
			$this->GIF .= ( $Locals_ext . $Locals_img . $Locals_tmp );  //GIFͼƬ������������Ϣ
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
//echo $gifEncoder->GetAnimation();	// ��ʾGIF����


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
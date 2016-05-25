<?php
//#s.wx2015/10/30
//@class name:		CgetDirSonNameN
//..................................................................................e

class CgetDirSonNameN {

	public function __construct() {
	
		//应忽略的文件名
		$this->sopa_n_notAllowFiles = array('.', '..', '.git');
	}
	
	//返回全路径
	public function FP_get_dir_real_path($sifs_n_dirPath) {
	
		return realpath($sifs_n_dirPath) . '\\';
	}

	//返回文件夹对象
	public function FP_get_dir_obj($sifs_n_dirPath) {
	
		return opendir($sifs_n_dirPath);
	}

	/* s.wx2015/10/30.main..................................................................................e */
	public function FP_get_dir_son_name($sifs_n_dirPath='', $sifu_i_level=0) {

		$sops_n_path = $this->FP_get_dir_real_path($sifs_n_dirPath);
		$sopo_path = $this->FP_get_dir_obj($sifs_n_dirPath);
	
		while ( false !== ( $tins_n_fileName=readdir($sopo_path) ) ){

			$tinb_canNotDo = in_array( $tins_n_fileName, $this->sopa_n_notAllowFiles );

			if ( !$tinb_canNotDo ){
			
				$tins_n_sonDirPath = $sops_n_path . $tins_n_fileName;
				
				if ( is_dir($tins_n_sonDirPath) ){
					
					echo '<br/>';
					for( $tinu_i=0; $tinu_i<$sifu_i_level; $tinu_i++ ){
					
						echo '-- ';
					}
					echo $tins_n_fileName;
					$this->FP_get_dir_son_name($tins_n_sonDirPath.'\\', $sifu_i_level+1);
				}else{
				
					echo '<br/>';
					for( $tinu_i=0; $tinu_i<$sifu_i_level; $tinu_i++ ){
					
						echo '-- ';
					}
					echo $tins_n_fileName;
				}
			}
		}
	}
}

$tons_n_path = realpath('../git/MFGR');
$tono_class = new CgetDirSonNameN();

$tono_class->FP_get_dir_son_name($tons_n_path);
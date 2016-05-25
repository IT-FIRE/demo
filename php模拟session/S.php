<?php
/**
 * --------------------s.wx2015/7/8.模拟session库变量设置
 *@param		NAME	func		S
					----》$vars	array		传递的参数变量
					----》$type	int
						------>0	设置模式	默认模式，$vars为array('aa'=>1, 'bb'=>array(1, 2, 3), 'cc'=>'你好');
						------>1	销毁模式	$vars为array('aa', 'cc')表示销毁变量aa和cc；$vars为array('SS')表示销毁所有与当前用户ip相等的数据
						------>2	初始化模式	$vars为array();
 * ----------------------------------------------------------------------------e
 *
 * session表
	wy_session
	文件名,文件内容,过期时间,ip
	sess_id,sess_data,expire,ip
 */
function S($vars=array(), $type=0){
	
	$cus_ip = $GLOBALS['cus_ip'];
	$virtualsess = isset($_COOKIE['virtualsess']) ? $_COOKIE['virtualsess'] : (uniqid().'_'.mt_rand(0,100000));
	setcookie('virtualsess', $virtualsess);

	switch ( $type ){
		
		case 0://设置模式
			if ( !empty($vars) ){
				
				$_db = Common::single_factory('Model_DB');
				$up_con = '';
				
				foreach( $vars as $k=>$v ){
					
					if ( isset($GLOBALS['SS'][$k]) && $GLOBALS['SS'][$k]!=$v && $v!=NULL ){//需更新的数据
						
						$t_v = addslashes(serialize($v));
						$up_vals = 'sess_data="' . $t_v . '", expire="'.(time()+3600).'"';
						$up_con = 'sess_id="'.$virtualsess.'__'.$k.'"';
						$_db->upd('wy_session', $up_vals, $up_con);

						$GLOBALS['SS'][$k] = $v;
						continue;
					}
					if ( !isset($GLOBALS['SS'][$k]) && $v!=NULL ){
					
						$t_v = addslashes(serialize($v));
						$GLOBALS['SS'][$k] = $v;

						$cols = '(`sess_id`, `sess_data`, `expire`, `post_date`, `ip`)';//需新增的数据
						$t_sess_id = $virtualsess . '__' . $k;
						$vals = '("'.$t_sess_id.'", "'.$t_v.'", "'.(time()+3600).'", "'.time().'", "'.$virtualsess.'")';
						
						$_db->ins('wy_session', $cols, $vals);
					}
				}
				return true;

			}else{

				return false;
			}
			break;
		case 1://销毁模式
			if ( !empty($vars) ){

				$_db = Common::single_factory('Model_DB');
				
				if ( $vars[0]==='SS' ){
				
					$de_con = 'ip="' . $virtualsess . '"';
					return $_db->delete($de_con, 'wy_session');
				}else{
				
					 $de_con = '';
					$t_count = 0;
					foreach( $vars as $k=>$v ){
						
						$t_count++;
						//$GLOBALS['SS'][$v] = NULL;
						unset($GLOBALS['SS'][$v]);
						if ( $t_count==count($vars) ){
						
							$de_con .= 'sess_id="' . $virtualsess . '__' . $v . '"';
							break;
						}
						
						$de_con .= 'sess_id="' . $virtualsess . '__' . $v . '" or ';
					}
					return $_db->delete($de_con, 'wy_session');
				}
				
			}else{
			
				return false; 
			}
			break;
		case 2://初始化模式

			$_db = Common::single_factory('Model_DB');

			$del_con = 'expire<='.(time()-3600);//销毁过期数据
			$_db->delete($del_con, 'wy_session');

			$condition = 'ip="'.$virtualsess.'"';
			//$condition = 'ip="123"';
			$data = $_db->fA('*', $condition, 'wy_session');

			if ( !empty($data) ){
			
				foreach( $data as $k=>$v ){
				
					$t_sess_id_arr = explode('__', $v['sess_id']);
					$GLOBALS['SS'][$t_sess_id_arr[1]] = unserialize($v['sess_data']);
				}
			}
			break;
	}
	
}
<?php
/**
 * --------------------s.wx2015/7/8.ģ��session���������
 *@param		NAME	func		S
					----��$vars	array		���ݵĲ�������
					----��$type	int
						------>0	����ģʽ	Ĭ��ģʽ��$varsΪarray('aa'=>1, 'bb'=>array(1, 2, 3), 'cc'=>'���');
						------>1	����ģʽ	$varsΪarray('aa', 'cc')��ʾ���ٱ���aa��cc��$varsΪarray('SS')��ʾ���������뵱ǰ�û�ip��ȵ�����
						------>2	��ʼ��ģʽ	$varsΪarray();
 * ----------------------------------------------------------------------------e
 *
 * session��
	wy_session
	�ļ���,�ļ�����,����ʱ��,ip
	sess_id,sess_data,expire,ip
 */
function S($vars=array(), $type=0){
	
	$cus_ip = $GLOBALS['cus_ip'];
	$virtualsess = isset($_COOKIE['virtualsess']) ? $_COOKIE['virtualsess'] : (uniqid().'_'.mt_rand(0,100000));
	setcookie('virtualsess', $virtualsess);

	switch ( $type ){
		
		case 0://����ģʽ
			if ( !empty($vars) ){
				
				$_db = Common::single_factory('Model_DB');
				$up_con = '';
				
				foreach( $vars as $k=>$v ){
					
					if ( isset($GLOBALS['SS'][$k]) && $GLOBALS['SS'][$k]!=$v && $v!=NULL ){//����µ�����
						
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

						$cols = '(`sess_id`, `sess_data`, `expire`, `post_date`, `ip`)';//������������
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
		case 1://����ģʽ
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
		case 2://��ʼ��ģʽ

			$_db = Common::single_factory('Model_DB');

			$del_con = 'expire<='.(time()-3600);//���ٹ�������
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
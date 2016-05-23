<?php
/* s.wx2015/7/23.每次进入都清掉用户上次未使用的图片-------------------------------------------------------------e */
//if( !is_object($_wsys_bjq_img) )	make_class('_wsys_bjq_img');
//$sql = 'delete from wsys_bjq_img where tb_name="none" and tb_id=0 and token="'.$token.'" and post_date<='.(time()-7200);//过期
//$sql = 'delete from wsys_bjq_img where tb_name="none" and tb_id=0 and token="'.$token.'"';
//$t_data = $_wsys_bjq_img->query($sql);
//--e



if($confirm == 1){

    echo '<pre>';
    var_dump( $_POST['content'] ); 
    echo '</pre>';
    exit;
    
}



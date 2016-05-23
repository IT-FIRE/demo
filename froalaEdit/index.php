<?php 
/*
编辑器测试表
froala_edit_img
索引id,图片,tk,post_date,是否已使用
id,img,token,post_date,has_use

CREATE TABLE `froala_edit_img` ( `id` INT( 10 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ) ENGINE=INNODB DEFAULT CHARSET=utf8;
ALTER TABLE `froala_edit_img` ADD `post_date` INT( 10 ) UNSIGNED NOT NULL DEFAULT '0';
ALTER TABLE `froala_edit_img` ADD `img` VARCHAR( 255 )  NOT NULL DEFAULT '' COMMENT '图片';
ALTER TABLE `froala_edit_img` ADD `token` VARCHAR( 200 )  NOT NULL DEFAULT '' COMMENT 'tk';
ALTER TABLE `froala_edit_img` ADD `has_use` TINYINT( 1 )  UNSIGNED DEFAULT '0' COMMENT '是否已使用';
*/



if ( isset($_COOKIE['tk']) )   $token = $_COOKIE['tk'];
else  $token = uniqid('bjq_') . mt_rand(0, 1000);

setcookie('tk', $token, time()+3600);

/* s.wx2015/7/23.每次进入都清掉未使用且过期的图片-------------------------------------------------------------e */
$host = 'localhost';
$port = '3306';
$user = 'root';
$pwd = '123abc';
$mysqlLink = mysql_connect("$host:$port", $user, $pwd);
$query = 'set names utf8';
mysql_query($query, $mysqlLink);
$query = 'use test';
mysql_query($query, $mysqlLink);

$query = 'delete from froala_edit_img where has_use=0 and post_date<='.(time()-7200);
mysql_query($query, $mysqlLink);

mysql_close($mysqlLink);
//--e
?>
<!DOCTYPE html>
<HTML>
<BODY>
<form action="add.php" method="post"  enctype="multipart/form-data" name="fm">
<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0">

	<tr class="firstalt" nowrap><td width="15%">文章内容</td>
<!-- wx.2015/7/21.新编辑器.start -->
<!--<td align=left><textarea NAME="content" id="content" rows="10" cols="80"  style="WIDTH:600px;HEIGHT:500px;"><?=stripslashes($_r[content])?></textarea><span id="span_content"></span></td>-->
<link href="froala_editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="froala_editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">
<link href="froala_editor/css/themes/royal.css" rel="stylesheet" type="text/css">
<style>
section {
	width: 80%;
	height:100%;
	margin: auto;
	text-align: left;
}
</style>
	<td align=left style="height:500px;">
		<!--<textarea NAME="content" id="content" rows="10" cols="80"  style="WIDTH:600px;HEIGHT:500px;">-->
		<!--<textarea NAME="content" id="content" id="eg-textarea" class="text-small">-->
		<textarea NAME="content" id="content" class="text-small">

		</textarea>
		<span id="span_content"></span>
	</td>
<script src="froala_editor/js/libs/jquery-1.11.1.min.js"></script>
<script src="froala_editor/js/froala_editor.min.js"></script>
<!--[if lt IE 9]>
<script src="froala_editor/js/froala_editor_ie8.min.js"></script>
<![endif]-->
<script src="froala_editor/js/plugins/tables.min.js"></script>
<script src="froala_editor/js/plugins/lists.min.js"></script>
<script src="froala_editor/js/plugins/colors.min.js"></script>
<script src="froala_editor/js/plugins/media_manager.min.js"></script>
<script src="froala_editor/js/plugins/font_family.min.js"></script>
<script src="froala_editor/js/plugins/font_size.min.js"></script>
<script src="froala_editor/js/plugins/block_styles.min.js"></script>
<script src="froala_editor/js/plugins/video.min.js"></script>
<script>
$(function(){
	var win_ie_ver = parseFloat(navigator.appVersion.split("MSIE")[1]);
	//if (win_ie_ver <= 8) {
		//$('#edit').editable({inlineMode: true, alwaysBlank: true, height: 500, width:800});
	//}else{
		//$('#edit').editable({inlineMode: false, alwaysBlank: true, height: 500, width:900});
	
	//$('#edit').editable({
	$('textarea#content').editable({
		inlineMode: false, alwaysBlank: true, height: 500, width:900,
		//language: "zh_cn",
		imageUploadURL: 'ajax_bjq.php?tk=<?php echo $token;?>',//上传到本地服务器
		//imageUploadParams: {id: "edit"},
		imageDeleteURL: 'ajax_imgd.php?tk=<?php echo $token;?>',
		imagesLoadURL: 'ajax_imgl.php?tk=<?php echo $token;?>'
	}).on('editable.afterRemoveImage', function (e, editor, $img) {
		// Set the image source to the image delete params. 
		editor.options.imageDeleteParams = {src: $img.attr('src')};
		// Make the delete request
		//.editor.deleteImage($img);
		editor.deleteImage($img);
	});
	//}
});
</script>
<!-- wx.2015/7/21.新编辑器.end -->
	</tr>

<tr class="tbhead">
    <td colspan=3 align="center">
        <input class="bginput" accesskey="s" type="submit" name="submit" value=" 提交 " > 
        <input class="bginput" accesskey="r" type="reset" name="" value=" 重置 " >
    </td>
</tr>

</table>

</form>
</BODY>
</HTML>
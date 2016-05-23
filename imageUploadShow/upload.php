<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" type="text/css" href="style/index_pass.css">
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
/* start.wx.20140802_02 */
//返回文件的大小
function filesize(ele) {
	// 返回 KB，保留小数点后两位
	//alert((ele.files[0].size / 1024).toFixed(2));
	return ( ele.files[0].size/1024 ).toFixed(2);
}
//最终同比缩放显示
var show = function(obj){
	var show_width = 0;
	var show_height = 0;
	if(img_width>372 && img_height>362)
	{
		if((img_height/362) <= (img_width/372)){
			show_width = 372;
			show_height = img_height/(img_width/372);
		}else{
			show_height = 362;
			show_width = img_width/(img_height/362);
		}
	}
	else if(img_width>372)
	{
		show_width = 372;
		show_height = img_height/(img_width/372);
	}
	else if(img_height>362)
	{
		show_height = 362;
		show_width = img_width/(img_height/362);
	}
	else
	{
		show_width = img_width;
		show_height = img_height;
	}
	//alert($(obj).next()[0].src);
	var width_minu = (370-show_width) / 2;
	var height_minu = (360-show_height) / 2;
	$(obj).next().next().hide(0);
	$(obj).parent().attr('style', 'height:360px; top:0px; margin:0;margin-left:'+width_minu+'px; margin-top:'+height_minu+'px');
	$(obj).next().attr('src', fileName);
	//var width_minu = (370-show_weight) / 2;
	//var height_minu = (360-show_height) / 2;// margin-left:'+width_minu+'px; margin-top:'+height_minu+'px;
	if($(obj).next()[0].complete)
	{
		$(obj).next().attr('style', 'width:'+show_width+'px;height:'+show_height+'px;');
	}
	else
	{
		$(obj).next()[0].onload = function(){
			$(obj).next().attr('style', 'width:'+show_width+'px;height:'+show_height+'px;');
			$(obj).next()[0].onload = null;
		}
	}
	//$('#img1').attr('style', 'width:'+show_width+'px;height:'+show_height+'px;margin-left:-'+Math.ceil(show_width/2)+'px;margin-top:-'+Math.ceil(show_height/2)+'px;');
}

//实时显示上传的图片
var img_width = 0;
var img_height = 0;
/**
 * @param object obj	上传的图片对象
 */
var show_img = function(obj){
	var fileList = obj.files;
	//alert(fileList.length);
	var imageType = /image.*/;
	for (var i = 0; i < fileList.length; i++) {
	    var file = fileList[i];
	    if (!file.type.match(imageType)) {
	    	continue;
		}
	    var reader = new FileReader();
		reader.onload = function (e) {
			fileName = e.target.result;
	    	var img = new Image();
		    img.src = fileName;
		    if(img.complete){
		    	img_width = img.width;
			    img_height = img.height;
				show(obj);
		    }else{
				img.onload = function(){
					img_width = img.width;
				    img_height = img.height;
				    img.onload = null;
				    show(obj);
				}
		    }
		};
		reader.readAsDataURL(file);
	}
}
/* wx.20140802_02.end */

$(document).ready(function(){
	/* start.wx.20140901.点击图片则触发点击<input type='file' */
	$(".up_box img").click(function(){
		$(this).prev().click();
	})
	/* wx.20140901.点击图片则触发点击<input type='file'.end */
	
	/* start.wx.20140802_01 */
	//选定图片后
	$('input[name="file[]"]').change(function(){
		//alert($(this).next()[0].src);
		//return;
		var size = filesize(this);
		//alert(size);
		//return;
		if(size >= 2048){
			alert('文件超出规定大小！请重新上传');
		}else{
			show_img(this);
		}
	});
	/* wx.20140802_01.end */
});
</script>
</head>
<body>
<div class="center">
	<div class="upload_box">
		<form id="fm1" method="post" enctype="multipart/form-data" action="./upload.php?act=upload">
		<ul class="up_box wrapfix">
			<li>
				<div class="img_box">
				<input type="file" id="file" name="file[]" style="display:none">
				<img src="images/xiangji.jpg" width="146" height="100" />
				<p>点击添加平面图</p>
				</div>
			</li>
			<li>
				<div class="img_box">
				<input type="file" id="file" name="file[]" style="display:none">
				<img src="images/xiangji.jpg" width="146" height="100" />
				<p>点击添加效果图</p>
				</div>
			</li>
			<li>
				<div class="img_box">
				<input type="file" id="file" name="file[]" style="display:none">
				<img src="images/xiangji.jpg" width="146" height="100" />
				<p>点击添加效果图</p>
				</div>
			</li>
			<li>
				<div class="img_box">
				<input type="file" id="file" name="file[]" style="display:none">
				<img src="images/xiangji.jpg" width="146" height="100" />
				<p>点击添加效果图</p>
				</div>
			</li>
		</ul>
		</form>
		<div class="up_btn"> <a class="sc_btn" style="cursor: pointer;">确认上传</a> <a class="cx_btn" style="cursor: pointer;">重新上传</a> </div>
	</div>
</div>
</body>
</html>

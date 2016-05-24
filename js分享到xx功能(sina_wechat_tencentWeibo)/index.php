<script language="javascript">
/**
 * --------------------s.wx141125
 * @param	wx_common_forward_sinaweibo	func	分享到新浪微博
			--------------------------》title	string	标题
 *-------------------------------------------------------------------------e
 */
var wx_common_forward_sinaweibo = function (title){
	var title = encodeURI(title);
    var _t = encodeURI(document.title);
    var _url = encodeURIComponent(document.location);//获取当前页面url
    var _assname = encodeURI('name');
    var _appkey = encodeURI('appkey');
    var _pic = encodeURI('');
    var _site = '';
    var _u = 'http://v.t.sina.com.cn/share/share.php?url=' + _url + '&appkey=' + _appkey + '&site=' + _site + '&pic=' + _pic + '&title=' + title + '&assname=' + _assname;
    window.open(_u, '', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no');
}
/**
 * --------------------s.wx141125
 * @param	wx_common_forward_tencentweibo		func	分享到腾讯微博
			-----------------------------》title	string	标题
			return	匹配到了返回ture,反之返回false
 *-------------------------------------------------------------------------e
 */
var wx_common_forward_tencentweibo = function (title){
	var title = encodeURI(title);
    var _t = encodeURI(document.title);
    var _url = encodeURIComponent(document.location);
    var _assname = encodeURI('name');
    var _appkey = encodeURI('appkey');
    var _pic = encodeURI('');
    var _site = 'http://www.quanshi.com';
    var _u = 'http://v.t.qq.com/share/share.php?url=' + _url + '&appkey=' + _appkey + '&site=' + _site + '&pic=' + _pic + '&title=' + title + '&assname=' + _assname;
    window.open(_u, '', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no');
}
/**
 * --------------------s.wx141125
 * @param	wx_common_WeiXinShareBtn		func	分享到朋友圈与发送给好友
			--------------------------》title	string	标题
								link	string	链接
								des		string	简单描述
								img_url	string	图片链接
								type		num		类型
								-----》1	分享朋友圈
									2	发送给好友
 *-------------------------------------------------------------------------e
 */
var wx_common_WeiXinShareBtn = function (title, link, des, img_url, type){

	switch ( type ){
		
		case 1:
			if (typeof WeixinJSBridge == "undefined") {
				alert(" 请先通过微信搜索 myweixinAccount添加myname为好友，通过微信分享 :) ");
			} else {
				WeixinJSBridge.invoke('shareTimeline', {
					"title": title,
					"link": link,
					"desc": des,
					"img_url": img_url
				});
			}
		break;
		case 2:
			//发送给好友
			if (typeof WeixinJSBridge == "undefined") {
				alert(" 请通过微信浏览器来分享 :) ");
			} else {
				WeixinJSBridge.invoke('sendAppMessage',{
					//"appid":appId,
					"img_url": "192.168.1.109/lib_tc/images/weibo.png",
					//"img_width":"640",
					//"img_height":"640",
					"link": document.location,
					"desc": des,
					"title": title
				});
			}
		break;
	}
}
</script>


<?php 
// $time = time();
//1411625120	2014-09-25 14:05:20
// $this_date = date('Y-m-d H:i:s', '1411625120');
$this_date = date('Y-m-d', '1411625120');
// var_dump($this_date);
?>
<script language="javascript">
window.onload = function(){
/**
 * js支持类型：a. 2014/10/1		b. 2014/10/1 10:01		c. 2014/10/1 10:01:15
 */
	var t_str = "<?php echo $this_date; ?>";
	var t_obj = new Date( t_str.replace(/-/g, '/') );
	alert(t_obj);//Thu Sep 25 2014 08:00:00 GMT+0800 (这里注意因为输出的是GMT+0800即东八区的时间，所以是08:00,也就是格林尼治的00:00)
	
}

/* start.wx.20140708.检查时间方法	起始日期不能大于结束日期 */
//@param btime	开始时间
//@param etime	结束时间
var check_time = function(btime, etime){
	var btime_stamp = parseInt((new Date(btime.replace(/-/g,'/'))).getTime());//格式化为时间戳格式
	var etime_stamp = parseInt((new Date(etime.replace(/-/g,'/'))).getTime());

	if(btime_stamp >= etime_stamp)//起始时间大于等于结束日期返回false
	{
		return false;
	}
	return true;
};
/* wx.20140708.检查日期方法	起始日期不能大于结束日期.end */
</script>
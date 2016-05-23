<?php
/**
 * 
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="./js_common/jquery-1.3.2.js"></script>
<script type="text/javascript" src="./WdatePicker/WdatePicker.js"></script>
</head>
<body>
<script language="javascript">
window.onload = function(){

	$('input[name="btime"]').click(function(){
		WdatePicker();
	});
}
</script>
<form>
	<label>日期：</label>
	<label>
		<input name="btime" type="text" class="riqi_ipt" id="d11" onClick="" />
	</label>
	<label style="margin:0 5px;">至</label>
	<label>
		<input name="etime" type="text" class="riqi_ipt" id="d12" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
	</label>
</form>
</body>
</html>

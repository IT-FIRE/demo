<script language="javascript">
/**
 * start.wx140927.表单验证
 * =======================================
 * 表单验证规则
 * rul1: 中文匹配
 * rul2: 空格匹配
 * rul3: 空 匹配
 * rul4: 数字（包括小数）匹配
 * =======================================
 */
var rul1, rul2, rul3, rul4;
var val1, val2, val3, val4, val5;

var set_rul = function(){

	rul1 = /[\u4e00-\u9fa5]+/;
	rul2 = /^\s$/;
	rul3 = /^$/;
	rul4 = /^(\d*) || (\d*\.\d*)$/;
}

window.onload = function(){
	/* start.wx140927.init */
	set_rul();
	/* wx140927.init.end */
	
	var val_obj = document.getElementsByTagName('input');

	val1 = val_obj[0];
	val2 = val_obj[1];
	val3 = val_obj[2];
	val4 = val_obj[3];
	val5 = val_obj[4];
	val1.onblur = function(){
		if( rul2.test(val1.value) )
		{
			alert(val1.value);
		}
	}
	val2.onblur = function(){
		if( rul4.test(val2.value) )
		{
			alert(val2.value);
		}
	}
}
/* start.wx140927.另一种检测是否为数字的方法 */
var CheckNum = function (charValue, alertValue)//另一种检测是否为数字的方法
{
	for(var iIndex=0; iIndex<charValue.length; iIndex++)
	{
		var cCheck = charValue.charAt(iIndex);
		if(!rul4(cCheck))
		{
				return false;
		}
		if(iIndex == 0){//最左边的那个数字不能是0
			if(parseInt(cCheck) == 0){
				return false;
			}
		}
	}
	return true;
}
/* wx140927.另一种检测是否为数字的方法.end */
</script>
<div>
	val1:<input type="text" value=""/><i>123</i><br/>
	val2:<input type="text" /><br/>
	val3:<input type="text" /><br/>
	val4:<input type="text" /><br/>
	val5:<input type="text" /><br/>
</div>

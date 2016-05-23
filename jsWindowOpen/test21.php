<?php

?>
<a id='aa'>aaaaaa</a>
<script lanugage="javascript">
document.getElementById('aa').onclick = function(){
	xposition=0; yposition=0;  
    if ( (parseInt(navigator.appVersion) >= 4 ) )
    {  
	    xposition = (screen.width - 720) / 2;
	    yposition = (screen.height - 600) / 2;
    }
	window.open ('test22.php', 'newwindow', 'height=600, width=720, top=50, left=50, screenx='+xposition+', screeny='+yposition+', toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no');
}
</script>
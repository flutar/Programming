<?php

	header('content-type:text/html; charset=utf-8');
	
	echo '<pre>';
	
	$arr=array('a','b','c',12=>'this is a test','username'=>'Micahel','password'=>'123456','age'=>'123');
	
	$i=1;
	
	foreach($arr as $key=>$val)
	
	{
	
		echo $val, '<br/>';	
	
		
	}
	
				echo '<hr color="red"/>';

	
	
	echo '</pre>';


	
?>
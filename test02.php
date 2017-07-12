<?php
	$str='ccjj';
	// echo strrev($str);//自带的字符串反转函数
	function res($str){
		if(strlen($str)>0){
			res(substr($str,1));
		}
		echo substr($str,0,1);
		return;
	}//利用递归函数反转字符串
	res($str);
	//xmd5

?>
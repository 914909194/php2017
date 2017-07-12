<?php
	if($_GET['sub']){
		$fs=$_GET['cj'];
		if($fs>=80&&$fs<=100){
			echo "<script> alert('成绩优秀')</script>";
		}else if($fs>=60&&$fs<80){
			echo "<script> alert('勉强合格')</script>";
		}else if($fs>100){
			echo "<script> alert('吹牛皮')</script>";
		}else{
			echo "<script> alert('去死吧')</script>";
		}	
	}



?>
<meta charset='utf-8'>

<caption><h1>输入分数查询成绩</h1></caption>
	<form action="chenji.php" method="get" >
		<lable for='ipt'>分数：</lable><input type='text' id='ipt' name='cj'></input>
		</br>
		<input type='submit' name='sub' value='提交查询' style='magin-top:20px'></input>
		<input type='reset' name='res' value='重置分数' style='margin-top:20px'></input>


	</from>

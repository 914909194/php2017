<?php
	// echo "chenjaing";
	//输出标量echo
	//输出数组print_r
	//输出类型var_dump
	echo "<table align='center' border='1' width='500'>";
	echo "<caption><h1>春江花月夜</h1></caption>";
	for($i=0;$i<100;$i++){
		if($i%2==0){
			$color='skyblue';
		}else{
			$color='red';
		}
		echo '<tr style="background:'.$color.'" onmouseover="aa(this)" onmouseout="bb(this)">';
		for($j=0;$j<10;$j++){
			echo '<td>'.$j.'</td>';
		}
		echo "</tr>";
	}
	echo "</table>";
?>
<script type="text/javascript" charset="utf-8">
	var clor=''
	function aa(obj){
		clor=obj.style.background;
		obj.style.background='yellow';
	};
	function bb(obj){
		obj.style.background=clor;
	}
	//eval('('+str+')')可以把字符串转换成对象；
</script>
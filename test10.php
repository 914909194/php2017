<?php
$info=array(
	"user"=>array(
		array(1,"lao1","male"),
		array(2,"lao2","male"),
		array(3,"lao3","male")
	),
	"score"=>array(
		array(1,80,60,13),
		array(2,80,60,13),
		array(3,80,60,13)
	)
);
foreach($info as $key=>$val){
	echo "<table align='center' border='1' width='500'>";
	echo "<caption><h1>".$key."</h1></caption>";
	foreach($val as $v){
		echo "<tr>";
			foreach($v as $s){
				echo "<td>";
				echo $s;
				echo "<td>";
			}
		echo "</tr>";
	}
	


	echo "</table>";
}



?>
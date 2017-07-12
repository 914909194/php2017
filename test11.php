<?php
	

if(isset($_GET['sub'])){
	$arr_all=array();
	for($i=1;$i<=5;$i++){
		$arr_all[$i]=array();
		for($j=1;$j<=7;$j++){
			$random=mt_rand(0,30);
			$arr_all[$i][1]= "第".$i."注: ";
			if(in_array($random,$arr_all[$i])){
				$j--;
				continue;
			}else{
				$arr_all[$i][$j+1]=$random;
			
			}
		}
	}
	// echo "<pre>";
	// var_dump($arr_all);
	// echo "</pre>";


}

?>

<meta charset='utf-8'>
<table border="1" width='500' align='center'>
	<caption><h1>大乐透</h1></caption>
	<form action="test11.php" method="get" >
	<input type='submit' name='sub' value='下注'>
	 <?php
	 $color="";
	 	for($i=1;$i<=5;$i++){
	 		if($i%2==0){
	 			$color="pink";
	 		}else{
	 			$color="skyblue";
	 		}
			echo "<tr  bgColor=".$color.">";
			for($j=1;$j<=7;$j++){
				echo "<td>";
				echo $arr_all[$i][$j];
				echo "</td>";
			}
			echo "</tr>";
		}
	 ?> 
	

	 
	</form>
</table>
<?php
	if(isset($_GET['sub'])){
		$num1=$_GET['num1'];
		$num2=$_GET['num2'];
		$ysf=$_GET['ysf'];
		$num=0;
		switch($ysf){
		case '+':
			$num=$num1+$num2;
		break;
		
		case '-':
			$num=$num1-$num2;
		break;
		
		case '*':
			$num=$num1*$num2;
		break;
		
		case '/':
			$num=$num1/$num2;
		break;
		
		case '%':
			$num=$num1%$num2;
		break;
		default:
			echo '输入有误';
		
	}
	}




?>
<meta charset='utf-8'>
<table border="1" width='500' align='center'>
	<caption><h1>计算器</h1></caption>
	<form action="jisuan.php" method="get" >
	  <tr>
	  	<td>
	  		<input type='text' name='num1' value='<?php echo $_GET['num1']   ?>'></input>
	  	</td>
	  	<td>
	  		<select name='ysf'>
	  			<option <?php echo($_GET['ysf']=="+" ?  "selected" : '')  ?>>+</option>
	  			<option <?php echo($_GET['ysf']=="-" ?  "selected" : '')  ?>>-</option>
	  			<option <?php echo($_GET['ysf']=="*" ?  "selected" : '') ?>>*</option>
	  			<option <?php echo($_GET['ysf']=="/" ?  "selected" : '') ?>>/</option>
	  			<option <?php echo($_GET['ysf']=="%" ?  "selected" : '') ?>>%</option>
	  		</select>
	  	</td>
	  	<td>
	  		<input type='text' name='num2' value='<?php echo $_GET['num2']   ?>'></input>
	  	</td>
	  	<td>
	  		<input type='submit' name='sub' value='计算'>
	  	</td>
	  	
	  </tr>
	  <?php
	  if(isset($_GET['sub'])){
	  	echo "<tr>";
		  echo "<td colspan='4'>".$num1."".$ysf."".$num2."=".$num."</td>";
	  	echo "</tr>";
	  }
	  
	  ?>  
	</form>
</table>
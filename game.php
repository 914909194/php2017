
<meta charset='utf-8'>
<div id="wo" style='border:1px solid #999; width:100%; height:500px; background:#ccc'>
	<form action="game.php" method="get" >
	  		<span>你出拳</span>
  			<select name='quan'>
	  			<option value='1' <?php echo($_GET['quan']=="1" ?  "selected" : '')  ?>>石头</option>
	  			<option value='2' <?php echo($_GET['quan']=="2" ?  "selected" : '')  ?>>剪刀</option>
	  			<option value='3' <?php echo($_GET['quan']=="3" ?  "selected" : '')  ?>>布</option>	
	  		</select>	
	  		<input type="submit" name='sub' value="提交"/>
	  		<div id="img" style='border:1px solid #999; width:300px; height:260px; background:#fff ;overflow:hidden;float:left;position: relative'>
				<img src='img/猜拳.png' id='woimg' style='position: absolute; width:300px;height:892px'></img>
			 </div>
		  
		   <div  style='float:right;width:300px; height:260px; background:#fff ;overflow:hidden;position: relative'>
		   	
			 <img src='img/猜拳.png' style='position: absolute' id='ni'></img>
		   </div>
		    <span style='float:right'>电脑出拳</span>
	</form>
  			
	  	
</div>
<?php
if(isset($_GET['sub'])){
		$idx=rand(0,2);?>
		<script> 
		
		var img=document.getElementById('ni');
		img.style.top=-300*<?php echo $idx ;?>+'px';
	
		</script>
		<?php
		if($_GET['quan']=='石头'){
			// var idx=parseInt(Math.random()*3);
			echo "<script> 
			var idx=parseInt(Math.random()*3);
		
			var img=document.getElementById('woimg');
			img.style.top=-300*0+'px';
	
		</script>";
			if($idx==0){
				
					echo '平局重来';
				
			}else if($idx==1){
				echo '你赢了';
			}else{
				echo '你输了';
			}
		}else if($_GET['quan']=='剪刀'){
			echo "<script> 
		
			var img=document.getElementById('woimg');
			img.style.top=-300*1+'px';
	
			</script>";
			if($idx==0){
				
					echo '你输了';
				
			}else if($idx==1){
				echo '平局';
			}else{
				echo '你赢了';
			}
		}else{
			echo "<script> 
			var idx=parseInt(Math.random()*3);
		
			var img=document.getElementById('woimg');
			img.style.top=-300*2+'px';
	
			</script>";
				if($idx==0){
				
					echo '你赢了';
				
			}else if($idx==1){
				echo '输了';
			}else{
				echo '平局';
			}
		}
		
	
	
	
}


?>
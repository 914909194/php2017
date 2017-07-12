<?php
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		// echo "<pre>";
		// var_dump($sfile);
		// echo "</pre>";
// 		
		$name=$sfile['name'];
		$arr=explode('.',$name);
		$len=count($arr)-1;
		//echo $arr[$len];
		$newarr=array('txt','md','exe');
		$flag=true;
		for($i=0;$i<count($newarr);$i++){
			if($newarr[$i]==$arr[$len]){
				$flag=false;
			}
		}
			if($flag==false){
			echo "<script>alert('上传文件非法')</script>";
		}else{
			$imgname=time();
			$img=$imgname.'.'.$arr[$len];	
			$baseurl=getcwd();	
			// echo $baseurl;
				$bb=move_uploaded_file($sfile['tmp_name'],$baseurl.'/upload/'.$img);
			if($bb){
				echo "success";
			}else{
				echo "fail";
			}
		}
		
		
	}


?>
<meta charset="utf-8">
<form action="test07.php" method="post" enctype="multipart/form-data">
	上传文件:<input type="file" name="sfile">
	     
	<input type="submit" name="sub" value="上传">
</form>
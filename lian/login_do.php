<?php

	$arr=$_REQUEST;
	// var_dump($arr);
	$name=isset($arr['name']) && !empty($arr['name']) ? trim($arr['name']) : "";
	$pwd=isset($arr['pwd']) && !empty($arr['pwd']) ? trim($arr['pwd']) : "";
	 //var_dump($name);
	 setcookie("name",$name,time()+60*5,'/','.shop.com');

	$con=mysqli_connect('127.0.0.1','root','root','lianxi');
	$sql="select * from login";
	$res=mysqli_query($con,$sql);
	if($res){
		echo json_encode(['code'=>200,'msg'=>"登陆成功"]);
	}else{
		echo json_encode(['code'=>201,'msg'=>"登陆失败"]);
	}
?>
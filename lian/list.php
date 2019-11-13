<?php

		header('Access-Control-Allow-Origin:*');
        // 响应类型
        header('Access-Control-Allow-Methods:*');
        //请求头
        header('Access-Control-Allow-Headers:*');
        // 响应头设置
        header('Access-Control-Allow-Credentials:false');
        //数据类型
        header('content-type:application:json;charset=utf8');

	 $data=array(
        array('id'=>1,'name'=>'老王','sex'=>'男'),
        array('id'=>2,'name'=>'老李','sex'=>'女'),
        array('id'=>3,'name'=>'老白','sex'=>'男')
    );
	// return json_encode(['code'=>'200','data'=>$data]);
    $arrs=json_encode($data);
    // print_r($_REQUEST);
    if(!empty($_REQUEST['jsonpCallback'])){
        $callback = $_REQUEST['jsonpCallback'];
        echo "$callback($arrs)";
    }
?>
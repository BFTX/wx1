<?php
/**
 * php curl函数测试 
 * 
 */
// 创建一个新cURL资源
$ch = curl_init();

// 设置URL和相应的选项
$options=array(
    CURLOPT_URL=>'http://localhost/wx1/test_php1.php',
    CURLOPT_FOLLOWLOCATION=>true,//支持跳转
    CURLOPT_AUTOREFERER=>TRUE,
    CURLOPT_TIMEOUT=>5,          //设置超时时间
    CURLOPT_RETURNTRANSFER=>true,  //失败返回false,成功返回文件流
    CURLOPT_HEADER=>true,         //设置是否返回头信息,默认不返回头信息
    CURLOPT_NOBODY=>false,         //是否返回body内容
    CURLOPT_SSL_VERIFYPEER=>false //终止从服务端验证
    
);
curl_setopt_array($ch, $options);

// 抓取URL并把它传递给浏览器
if( false===($content=curl_exec($ch))){
    echo('error_msg:'.curl_errno($ch).':'.curl_error($ch));   
}else{
    echo $content;
    var_dump( curl_getinfo($ch,CURLINFO_HTTP_CODE));
   // echo $content;
}

//关闭cURL资源，并且释放系统资源
curl_close($ch);

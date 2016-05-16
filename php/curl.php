<?php
/**
 * php curl函数测试 
 * 
 */
// 创建一个新cURL资源
$ch = curl_init();

// 设置URL和相应的选项
curl_setopt($ch, CURLOPT_URL, "http://office.com/test.php");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);//支持跳转
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);//支持跳转
curl_setopt($ch, CURLOPT_TIMEOUT,10);//设置超时时间 
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// 抓取URL并把它传递给浏览器
if( false===curl_exec($ch)){
    echo('error_msg:'.curl_errno($ch).':'.curl_error($ch));   
}else{
    echo 'success';
}

//关闭cURL资源，并且释放系统资源
curl_close($ch);

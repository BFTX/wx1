<?php
/**
 * php curl函数测试 
 * 
 */
// 创建一个新cURL资源
$ch = curl_init();

// 设置URL和相应的选项
$options=array(
    CURLOPT_URL=>'http://www.liliwaiwai.com/public/Uploads/File/User_upload/57329ce67a856.jpg',
    CURLOPT_FOLLOWLOCATION=>true,//支持跳转
    CURLOPT_AUTOREFERER=>TRUE,
    CURLOPT_TIMEOUT=>10,          //设置超时时间
    CURLOPT_RETURNTRANSFER=>true,  //失败返回false,成功返回文件流
    CURLOPT_HEADER=>true,         //设置是否返回头信息,默认不返回头信息
    CURLOPT_NOBODY=>true,         //是否返回body内容
    
);
curl_setopt_array($ch, $options);

// 抓取URL并把它传递给浏览器
if( false===($content=curl_exec($ch))){
    echo('error_msg:'.curl_errno($ch).':'.curl_error($ch));   
}else{
    echo htmlspecialchars($content),'<br/>';
    echo curl_getinfo($ch,CURLINFO_HTTP_CODE);
   // echo $content;
}

//关闭cURL资源，并且释放系统资源
curl_close($ch);

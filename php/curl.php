<?php
/**
 * php curl函数测试 
 * 
 */
 /**
  * 获取指定url返回的内容
  * @param string $url
  * @return mixed $content or boolen 成功返回内容体，失败返回false
  */
function wx_curl($url){
        // 创建一个新cURL资源
        $ch = curl_init();
        $status=false;
        // 设置URL和相应的选项
        $options=array(
            CURLOPT_URL=>$url,
            CURLOPT_FOLLOWLOCATION=>true,//支持跳转
            CURLOPT_AUTOREFERER=>TRUE,
            CURLOPT_TIMEOUT=>5,          //设置超时时间
            CURLOPT_RETURNTRANSFER=>true,  //失败返回false,成功返回文件流
            CURLOPT_HEADER=>false,         //设置是否返回头信息,默认不返回头信息
            CURLOPT_NOBODY=>false,         //是否返回body内容
            CURLOPT_SSL_VERIFYPEER=>false //终止从服务端验证
        );
        curl_setopt_array($ch, $options);

        // 抓取URL并把它传递给浏览器
        if( false===($content=curl_exec($ch))){//输出错误处理包含超时等 
            // echo('error_msg:'.curl_errno($ch).':'.curl_error($ch));   
            $status=false;
        }else{
                   
            if(200==curl_getinfo($ch,CURLINFO_HTTP_CODE)){
                $status=$content;
            };
        }

        //关闭cURL资源，并且释放系统资源
        curl_close($ch);
        return  $status;
}
/**
 * 下载图片文件
 * @param string $url
 * @return boolean 
 */
function wx_download($url){
    
   if( $res=wx_curl($url)){
       $filename=substr(strrchr($url,'/'),1);//获取文件名
       if(file_exists($filename))return true;//文件存在
       
       $handle=fopen($filename,'ab');//创建文件资源
       $status=fwrite($handle,$res);//写入资源 
       fclose($handle);
       
       if($status){
           return true;
       }else{
           return false;
       }
   }
   return false;
}
$url='https://cbu01.alicdn.com/img/ibank/2016/885/892/3118298588_1829132622.jpg_460x460.jpg';
var_dump(wx_download($url));






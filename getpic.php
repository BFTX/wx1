<?php

set_time_limit(0);
function get_curl($url){

    $ch = curl_init();
    $options=array(
        CURLOPT_URL=>$url,
        CURLOPT_FOLLOWLOCATION=>true,//支持跳转
        CURLOPT_AUTOREFERER=>TRUE,
        CURLOPT_TIMEOUT=>100,          //设置超时时间
        CURLOPT_RETURNTRANSFER=>true,  //失败返回false,成功返回文件流
        CURLOPT_HEADER=>true,         //设置是否返回头信息,默认不返回头信息
        CURLOPT_NOBODY=>false,         //是否返回body内容

    );
    curl_setopt_array($ch, $options);

    // 抓取URL并把它传递给浏览器
    if( false===($content=curl_exec($ch))){
        echo('error_msg:'.curl_errno($ch).':'.curl_error($ch));
    }else{
        // echo htmlspecialchars($content),'<br/>';
        if(200==curl_getinfo($ch,CURLINFO_HTTP_CODE)){
            return  $content;
        }
        return 0;

    }

    //关闭cURL资源，并且释放系统资源
    curl_close($ch);
    return false;
}

$domain='http://www.42bobo.com';
$conn=mysql_connect('192.168.2.101:3306','root','WXZQ220109');
if(!$conn){die('数据库连接失败！'.mysql_error());}
mysql_select_db('picture',$conn);
$res=mysql_query('select page_url from wx_page_url ',$conn);
while ($row=mysql_fetch_assoc($res)){
        $matches2=array();
        $content2=get_curl($domain.$row['page_url']);
        if($content2){
           if( preg_match_all('/http.*?\.jpg/im',$content2,$matches2)){
               //print_r($matches2);exit;
               foreach ($matches2[0] as $v){
                   $sql='insert into wx_img (img_url) values';
                   $sql.="('$v'),";
                     
                   $sql=substr($sql,0,-1);
                   mysql_query($sql,$conn);
               }
           }else{continue;}
            
        }else{
            continue;
        }
    }
 
mysql_close();
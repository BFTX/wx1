<?php
set_time_limit(0);
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
/***
 * start 
 * @var unknown
 */
 
//连接数据库
$conn=mysql_connect('192.168.2.101:3306','root','WXZQ220109');
if(!$conn){die('数据库连接失败！'.mysql_error());}
mysql_select_db('picture',$conn);


$domain='http://www.42bobo.com';
$category1='/news/other/13';
$res=array();
//获取
$content=file_get_contents('page_url.txt');
$page_arr=json_decode($content,true);
//print_r($page_arr);
$sql1='insert into wx_page_url (page_url) values';
foreach($page_arr as $v){
	foreach($v as $v2){
		$sql1.="('$v2'),";
	}
}
$sql1=substr($sql1,0,-1);
//echo $sql1;exit;
mysql_query($sql1,$conn);
exit;
for($i=2;$i<120;$i++){
    $sql1='insert into wx_page_url (page_url) values';
    $content=wx_curl($domain.$category1."_$i.html");
	if(!$content)continue;
    $matches1=array();
    $match_res=preg_match_all('/\/news\/class\/\d+\.html/im',$content,$matches1);
    //print_r($matches1);continue;
    if(!$match_res)continue;
	$res[]=$matches1[0];
    /* foreach ($matches1[0] as $v ){
        $sql1.="('$v'),";
    }
    $sql1=substr($sql1,0,-1); */
   // file_put_contents("sql1$i.txt", $sql1);
   // mysql_query($sql1,$conn);
}
file_put_contents('page_url.txt',json_encode($res));
exit;
$res_img=array();
foreach ($res[0] as $v){
    $content2=get_curl($domain.$v);
    if($content2){
        preg_match_all('/http.*?\.jpg/im',$content2,$res2);
        $res_img[]=$res2;
    }else{
        continue;
    }
}
//print_r($res_img);

$sql='insert into wx_img (img_url) values';
foreach ($res_img as $v){
    foreach ($v[0] as $v2){
        $sql.="('$v2'),";
    }
}
$sql=substr($sql,0,-1);
//file_put_contents('sql.txt', $sql);
//file_put_contents('res.txt', var_export($res_img,true));
if(false===mysql_query($sql,$conn)){die('写入数据库失败！'.mysql_error());};
mysql_close();















































































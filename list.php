<?php
/**
 * php-redis 做消息队列 
 */
 
/**
 * 配置类
 * @author Mr.Wx
 */
class config{
    public static $redis_host='192.168.1.21';
    public static $redis_port=6379;
    public static $key='write_list';
} 

/**
 * 初始化
 * @author Mr.Wx
 */
class init{
    public $redis_model=null;
    public $download=null;
    public function __construct(){
        //实例化redis
        $redis=new Redis();
        $redis->connect(config::$redis_host,config::$redis_port);
        $this->redis_model=$redis;
        
        //实例化下载类
        $this->download=new download();
    }
    
    
}

/**
 * 下载类
 */
class download{
    /**
     * 获取指定url返回的内容
     * @param string $url
     * @return mixed $content or boolen 成功返回内容体，失败返回false
     */
    public function wx_curl($url){
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
    public function wx_download($url,$path='/www/picture/'){
    
        if( $res=wx_curl($url)){
            $filename=substr(strrchr($url,'/'),1);//获取文件名
            if(file_exists($filename))return true;//文件存在
             
            $handle=fopen($path.$filename,'ab');//创建文件资源
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
}
    
/**
 * 运行类
 * @author Mr.Wx
 */
class run{
   public function core(){
       //初始化
       $init=new init();
       
       
       //循环执行
       while(true){
           //如果list表为空时，不在执行直接跳过 
           if(!$init->redis_model->lSize(config::$key))
               continue;
           //从最左边执行，获取最后一个key的值 
           $value=$init->redis_model->lRange(config::$key,-1,-1);
           $init->download->wx_download($value,$p)
               
       }
   }
   protected function is_continue($state){
       if($state===0)
           return true;
   }
}

/**
 * 前台运行
 * 程序写入日志
 */
class write{
    /**
     * 写入
     */
    public function push($key,$msg=''){
       $init=new init();
       if(!$init->rPush($key,$this->formate_str($msg))){
          $this->log($this->formate_str('写入失败！'));
       }
    }
    
    protected function formate_str($msg){
        return $msg.' 日期：'.date('Y-m-d H:i:s');
    }
    
    protected function log($msg='',$file='/var/log/list_write_error.log'){
        file_put_contents($file,$msg);
    }
}   

   

   

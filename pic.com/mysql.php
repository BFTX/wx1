<?php
/**
 * 
 */
namespace Wx\Mysql;
//include_once 'config.php';
use Wx\Config;
class mysql{
    public $conn=null;
    
    /**
     * 初始化连接数据库操作
     */
    public function __construct(){
        $this->conn=$this->connect();
    }
    
    /**
     * 连接数据库
     */
    public function connect(){
        try{
            //连接数据库 
            if(!$conn=mysql_connect(config::$mysql_host.':'.config::$mysql_port,config::$mysql_user,config::$mysql_psd))
                E($this->note(0));
            //选择数据库
            if(!mysql_select_db(config::$mysql_db,$conn))
                E($this->note(1));
            //设置字符集 
            if(!mysql_set_charset('utf8',$conn))
                E($this->note(2));
            //返回连接标识符
            return $conn;
        }catch(\Exception $e){
            show($e->getMessage());//打印错误信息  
        }
    }
    
    /**
     * 获取结果集 
     * @param unknown $sql
     */
    public function getAll($sql){
        try{
            //查询出错
            if(fale===($query=mysql_query($sql,$this->conn)))
                E($this->note(3));
            //结果集数组
            $res=array();
            while($row=mysql_fetch_assoc(mysql_query($sql,$this->conn))){
                 $res[]=$row;
            }
            //返回结果集
            return $res; 
            
        }catch (\Exception $e){
            show($e->getMessage());
        }
     
    }
    
    public function note($code){
        $arr=array(
            0=>'mysql数据库连接失败！',
            1=>'数据库选择操作失败！',
            2=>'字符集设置失败！',
            3=>'查询出错！'
        );
        return $arr[$code].mysql_error();
    }
} 
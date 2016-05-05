<?php
/**
 * php 基础知识测试
 * 
 */
class Test{
    
    public function __construct($fun_name=null){
        if($fun_name){
            $this->$fun_name();
        }
       
    }
    
    /**
     * heredoc 与 nowdoc 定界符的区别
     * heredoc 相当于双引号，nowdoc相当于单引号
     * 结束标识符必须是每行的开头 
     */
    public function hndoc(){
        $val=123456;
        
        //heredoc
        $str1=<<<A
            I,M a string str ,\$val 's value is $val
A;
        //nowdoc
        $str2=<<<'b'
            I,M a string str ,\$val 's value is $val
b;
        echo $str1,'<br/>',$str2;
    }
    
    /**
     * 字符串翻转
     * php系统自带字符串翻转函数strrev
     */
    public function m_strrev(){
        $str='abcdefg';
        $length=strlen($str);
        $new_str='';
        for($i=$length-1;$i>=0;$i--){//for循环条件1自动执行，条件2循环前判断执行，条件3循环后执行
            $new_str.=$str{$i};
        }
        echo $new_str;
    }
    
    /**
     * 遍历文件夹下的所有文件及子文件
     */
    public function get_files($file_path){
        $files=array();
        if(is_dir($file_path)){
            $handler=fopen($file_path,'r');
            while (false!==($file=fread($handler))){
                if($file!='.' && $file!='..'){
                    $tmp_file_path=$file_path.DIRECTORY_SEPARATOR.$file;
                    $files[]=$this->get_files($tmp_file_path);
                }
            }
            return $files;
        }else{
            return $file_path;
        }
    }
    
    
}
$test=new Test();
print_r($test->get_files('D:\g\wamp\www\wx1'));
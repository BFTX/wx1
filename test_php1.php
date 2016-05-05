<?php
/**
 * php 基础知识测试
 * 
 */
 


class Test{
    
    public function __construct($fun_name){
        $this->$fun_name();
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
    
}
$test=new Test('hndoc');
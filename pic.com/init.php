<?php
/**
 * 
 */
//实例化mysql类 
class init{
    public $mysql=null;
    public function __construct(){
        $this->mysql=new \Wx\Mysql\mysql();
    }
}
<?php
/**
 * 
 */
include 'init.php';

class pic{
    
    public function index(){
        $init=new init();
        $data=$init->mysql->getAll('select url from 3p_url');
        print_r($data);
    }
}

//执行
$pic=new pic();
$pic->index();
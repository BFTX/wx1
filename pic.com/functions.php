<?php
/**
 * 常用公共函数库 
 */
 
/**
 * 抛出异常
 * @param string $msg
 * @throws Exception
 */
function E($msg){
    throw new Exception($msg);
}

/**
 * 输出错误信息
 * @param unknown $msg
 */
function show($msg){
    header('Content-Type:text/html;charset=UTF-8');
    die($msg);
}

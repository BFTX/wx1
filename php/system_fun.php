<?php
/**
 * php 内置函数 
 */

/**
 * 判断扩展是否加载
 * @return boolean 
 */
extension_loaded($name='memcache');

/**
 * 获取指定字符串在该字符串中最后一次出现的位置
 * 获取指定字符串在该字符串中首次出现位置
 * @return int
 */
strrpos($str='sdf.io', '.');
strpos($str='sdf.io', '.');

/**
 * 匹配最后一次出现到最后
 * 匹配首次出现到最后 
 */
strrchr($str='sdj.oioew.sdj','.');//输出结果：.sdj
strstr($str="sdfgds.jsldjfds.sdj",'.');//输出结果：.jsldjfds.sdj

/**
 * 获取文件扩展名
 */
pathinfo($str='jsdjorjoer.sdj',PATHINFO_EXTENSION);//输出结果: sdj 

/**
 * 获取字符串出去最后一个字符
 */
substr($str='jsdgijotor!',0,-1); //输出结果 ：jsdgijotor
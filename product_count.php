#!/usr/local/php/bin/php
<?php
$redis_ip='127.0.0.1';
$redis_port='6379';
$mysql_ip='127.0.0.1';
$mysql_port='3307';
$mysql_user='root';
$mysql_pass='123456';
$mysql=mysql_connect($mysql_ip.':'.$mysql_port,$mysql_user,$mysql_pass);
if(!$mysql){
   die('mysql连接失败：'.mysql_error());
}
mysql_select_db();
$redis=new redis();
$redis->connect($redis_ip,$redis_port);
$product_count_keys=$redis->keys('product_count_*');

var_dump($product_count_keys);

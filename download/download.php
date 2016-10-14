<?php
set_time_limit(0);
ini_set('memory_limit','1024M');
include('../lib.php');

//连接数据库
$conn=mysql_connect('127.0.0.1:3306','root','123456');
if(!$conn){die('数据库连接失败！'.mysql_error());}
mysql_select_db('picture',$conn);
$data=mysql_query('select img_url from wx_img',$conn);
while($row=mysql_fetch_assoc($data)){
	if(!wx_download($row['img_url'])){
		continue;
	};
}
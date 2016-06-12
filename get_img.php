<?php

set_time_limit(0);
ini_set('memory_limit','1024M');
include('lib.php');

class mysql{
	public $connect=null;
	public $database='picture';
	public function __construct(){
		$this->connect=1;
	}
}
//连接数据库
$conn=mysql_connect('127.0.0.1:3306','root','123456');
if(!$conn){die('数据库连接失败！'.mysql_error());}
mysql_select_db('picture',$conn);

//图片地址
//var_dump(wx_download('http://pic.14bobo.com/desimgs/201605/201652131307179.jpg'));exit;
//http://pic.14bobo.com/desimgs/201605/201652131307179.jpg

$domain='http://www.42bobo.com';
$sql='select page_url from wx_page_url where id>5999 ';
/**
 * 根据查询出的url数据，抓取页面的图片url数组，保存成json写入文件
 * @param $conn mysql资源 
 * @param $sql  sql查询语句
 * @param $field sql 查询字段
 * @return 返回获取的图片数组
 */
function create_img_arr($conn,$sql,$field='page_url',$filename='imgs.txt',$domain){
	$data=mysql_query($sql,$conn);
    $imgs=array();
	while($row=mysql_fetch_assoc($data)){
		$content=wx_curl($domain.$row[$field]);if(!$content)continue;
		$matches=array();
		preg_match_all('/http.*?\.jpg/im',$content,$matches);
		if(!$matches[0])continue;
		$imgs[]=$res2[0];
	}
	file_put_contents($filename,json_encode($imgs));
    return $imgs;
}

/**
 * 生成sql 文件
 * @param array $arr 数据数组二维
 * @param string $table 数据表名
 * @param array  $fields 字段数组一维数组
 * @param string $filename 生成文件名
 * @return string $sql 返回sql文件内容
 */
function create_sql($arr,$table,$fields,$filename='insert.sql'){
	$str_fields=join(',',$fields);
	$sql="insert into $table ($str_fields)values ";
	foreach($arr as $v1){
		foreach($v1 as $v2){
			$sql.="('$v2'),";
		}
	}
	$sql=substr($sql,0,-1);
	file_put_contents($filename,$sql);
	return $sql;
}
$arr=json_decode(file_get_contents('imgs.txt'),true);
echo create_sql($arr,'wx_img',array('img_url'));
mysql_close();















































































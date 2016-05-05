<?php
/**
 * php可参考库
 *
 */
 
 
 /*
  * php数组去空
  */
 $new_arr=array_filter($arr); 
 
 /*
  * php数组重
  */
  $new_arr=array_unique($arr);
  
 /*
  *字符串除去最后一位
  */
  substr($a,0,-1);
 
 /*
  * php array_map映射，可使用匿名函数
  */ 
  array_map(function($v){$v['category_id'].=$pro_category;return $v;},$category);
  
  /*
   * 函数strtok用法，分割字符串为多个字符串
   * 注意仅第一次调用 strtok 函数时使用 string 参数。后来每次调用 strtok，都将只使用 token 参数
   * 第一次输出仅获取第一个字符串
   */
  $res=strtok('/www.baiduc.om/123/abc/defsiogweijo','/');
  while($res){
	  echo $res.'<br/>';
	  $res=strtok('/');
  };
  
 /*
  * php函数strstr,返回 haystack 字符串从 needle 第一次出现的位置开始到 haystack 结尾的字符串
  * 包含开始位置
  * 匹配之前可以用第三个参数，true
  */
  $str='www.baidu.com';
  echo strstr($str,'.');//.baidu.com
  echo strstr($str,'.',true);//www
  
/*
 * php函数substr_count统计字符在字符串中出现的次数
 */
    echo substr_count('baidu.com','.');

 /*
  * php 函数is_numeric检查变量是否是数字，或字符串数字
  */
  var_dump(is_numeric('12345dd'));
  
/*
 * php 函数 join 合并数组
 */
 echo join(',',array('wx','liliy'));//wxliliy
 echo join(array('a','wx'));//awx
 
/**
 * 将一维或多维数组转化为字符串
 * @param array or string $arr
 * @return string 
 * @author Mr.Wx 2016/03/08
 */
function array_to_string($arr){
	if(is_array($arr)){
		join(',',array_map('array_to_string',$arr));
	}else{
		return $arr;
	}
}  
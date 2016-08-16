<?php
/**
 * php 基础知识测试
 * 
 */
class Test{
    private $callback='';
    public function __construct($fun_name=null){
        if($fun_name){
            $this->$fun_name();
        }
        
        $this->callback=new callback();
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
        if(!is_readable($file_path)){
            die("文件$file_path不可读！！！");
        }
        $files=array();
        if(is_dir($file_path)){
            $handler=opendir($file_path);
            while (false!==($file=readdir($handler))){
                if($file!='.' && $file!='..'){
                    $tmp_file_path=$file_path.DIRECTORY_SEPARATOR.$file;
                    $files[]=$this->get_files($tmp_file_path);
                }
            }
            closedir($handler);
            return $files;
        }else{
            return $file_path;
        }
    }


	/**
	 * curl函数
	 */    
    public function curl($url){
	   
	    
	    
    } 
    
    /**
     *魔术函数 call 当调用类类未定义的函数时执行 
     */
    public function __call($name,$args){
        call_user_func_array(array($this->callback,$name),$args);
    }
}
/**
 * 回调函数列表
 * @author Mr.Wx
 */
class callback{
    public function wx_echo($a,$b){
        echo $a,' ',$b;
    }
}

echo md5(12332100);
exit;
//取整
echo intval('3.2');
exit;
$str=1234567;
$count=7;
echo "/^\d\{$count\}$/",'<br/>';
echo '/^\d{$count}$/';
var_dump(preg_match("/^\d\{$count\}$/",$str));
exit;


$a=1;
$b=2;
$c=3;
echo $a>$b?$a>$c?$a:$c:$b>$c?$b:$c;
echo $a>$b?$b>$c?$c:$b:$a>$c?$c:$a;
exit;
$str='沁园春·雪

作者：毛泽东【现代】赏析

北国风光，千里冰封，万里雪飘。

望长城内外，惟余莽莽；大河上下，顿失滔滔。

山舞银蛇，原驰蜡象，欲与天公试比高。

须晴日，看红装素裹，分外妖娆。

江山如此多娇，引无数英雄竞折腰。

惜秦皇汉武，略输文采；唐宗宋祖，稍逊风骚。

一代天骄，成吉思汗，只识弯弓射大雕。

俱往矣，数风流人物，还看今朝。';
echo <<<EOL
    <script>
        var str='$str';
        console.log(str.replace(/\n/g,'<br/>'));
    
    </script>
    
EOL;
exit;


echo str_replace('，','',$str);
exit;

echo strip_tags('<img />sldfjoej','<img>');
exit;


echo strlen(123);
exit;


$arr=array('id'=>'12','name'=>'wx');
$b=array();
print_r(array_merge($arr,$b));
exit;


$a=array(0=>1,1=>2);
$b=array(0=>2,1=>3);
print_r($a+$b);
$test=new Test();
$test->wx_echo(1,2);exit;

//print_r(array_slice(explode('.','www.baigu.com'), 0, -2));exit;
$str=<<<A
    <!-- 商品详情页商品推荐 -->
<div class="grid">
    <div class="grid-hd">
        <h3>商品推荐2</h3>
    </div>
    <ul class="grid-list" postion="1" >
            </ul>
</div>
A;
$a=1;
$b=2;
$c=0;
$GLOBALS['d']=23874;
function sum(){
   
    $GLOBALS['b']=$GLOBALS['b']+$GLOBALS['a'];
}
sum();
echo $b;
function add(){
    echo '$b-$a='.($b-$a);
}
add();
print_r($GLOBALS);exit;
preg_match('/postion="(\d*)"/',$str,$matches);
print_r($matches);exit;
var_dump(strpos($str,'<ul'));
echo join(',',array(1,943,8,394857934,0,));exit;

var_dump(is_numeric(0));
$array=array(0=>array('lw_category'=>0),1=>array('lw_category'=>1));
$array=array(5,5,9,9,0);
var_dump(array_count_values($array),'wx',array(0,2,3,4));
//echo $time=mktime(0,0,0,01,01,2015);
//echo date('Y-m-d H:i:s',$time);exit;
//$arr=array('keys'=>1);echo join(',',$arr);exit;
//$a=2;
//eval("if(isset($a)){$a=3;}");//双引号报错，因为解析了变量; Parse error: syntax error, unexpected '=', expecti
//eval("if(isset(\$a)){\$a=3;}else{\$a=1;}");
//echo $a;




















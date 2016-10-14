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
	public $a=array();
    public function wx_echo($a,$b){
        echo $a,' ',$b;
    }
	
}
class params{
    public function add($a){
        return ++$a;
    }
    public function arr($arr){
        print_r($arr=array_map(array('params','add'),$arr));
    }
   public function __get($var){
      return $var; 
   }
   public function __set($var,$value){
      $this->$var=$value; 
   }
   public function __destruct(){
       echo 'distruct';
   }
}
function check_title($title,$length=8){
    if(!$title)return false;
    $title=preg_replace('/[^\x{4e00}-\x{9fa5}]/u','',$title);
    return mb_strlen($title,'UTF-8')>=$length?true:false;
}
function wx(){
    echo 123;exit;
}
$desc='<div class="pk_sk_f1_lt">
                            <a href="/mob/product/index.html?id=9163243" target="_blank"> <img src="https://img.alicdn.com/bao/uploaded/i1/TB1UfR6MFXXXXbeXXXXXXXXXXXX_!!0-item_pic.jpg_120x120q50.jpg" alt="实拍2017春夏新款韩版复古创意编织女士斜跨小包链条PU单肩包"></a>
                        </div>';
                        echo PHP_VERSION;
echo preg_replace_callback('/src=([\'"])([^\'"]+?)\1/',function($m){return $m[0].'_123';}, $desc); 
exit;
function wx_dump($data,$close=false){
  
}
$str="早春 实价  特价  清货  清仓 女装 韩国  东大门   代购 正品 春天  夏天  秋天  冬天   大货   优质   品质   版型 外贸   订单 新品 价格   定价   不能 售价 出货 库存
独家    定制 特卖 活动 热卖   大卖 ";
echo preg_replace('/([\x{4e00}-\x{9fa5}}]+)?\s+/u','\''.'$1'.'\',',$str);
exit;
$str='{"insert":"insert into 3p_count_products (product_id,dynamic_sale,dynamic_click,dynamic_favour,cur_date) values(233905,0,1,0,20161220),(162463,0,1,0,20161220),(904960,0,1,0,20161220),(851663,0,1,0,20161220),(851666,0,1,0,20161220),(851667,0,1,0,20161220),(851668,0,1,0,20161220),(2114029,0,1,0,20161220),(1276211,0,1,0,20161220),(2085401,0,1,0,20161220),(724989,0,1,0,20161220),(113003,0,1,0,20161220),(1725119,0,1,0,20161220),(1701954,0,1,0,20161220),(113008,0,1,0,20161220),(1754985,0,3,0,20161220),(727829,0,1,0,20161220),(904978,0,1,0,20161220),(987724,0,1,0,20161220),(286948,0,1,0,20161220),(113010,0,1,0,20161220),(1821354,0,1,0,20161220),(888665,0,1,0,20161220),(1696501,0,1,0,20161220),(113019,0,1,0,20161220),(1218887,0,1,0,20161220),(1211621,0,1,0,20161220),(215788,0,1,0,20161220),(1979985,0,2,0,20161220),(727835,0,1,0,20161220),(648376,0,1,0,20161220),(835648,0,1,0,20161220),(1732426,0,1,0,20161220),(113026,0,1,0,20161220),(1974181,0,1,0,20161220),(113028,0,1,0,20161220),(280426,0,1,0,20161220),(1873668,0,1,0,20161220),(227373,0,1,0,20161220),(234668,0,1,0,20161220),(727843,0,1,0,20161220),(683293,0,1,0,20161220),(279672,0,1,0,20161220),(2106035,0,1,0,20161220),(727847,0,1,0,20161220),(1210906,0,1,0,20161220),(727849,0,1,0,20161220),(279677,0,1,0,20161220),(301030,0,1,0,20161220),(82296,0,1,0,20161220),(1572057,0,1,0,20161220),(2081872,0,1,0,20161220),(1532855,0,1,0,20161220),(2094188,0,1,0,20161220),(237502,0,1,0,20161220),(946302,0,1,0,20161220),(234673,0,1,0,20161220),(839223,0,1,0,20161220),(775072,0,1,0,20161220),(826913,0,1,0,20161220),(234677,0,1,0,20161220),(727851,0,1,0,20161220),(127596,0,1,0,20161220),(279680,0,1,0,20161220),(2069405,0,1,0,20161220),(2069409,0,2,0,20161220),(1873680,0,1,0,20161220),(1758580,0,1,0,20161220),(453133,0,1,0,20161220),(810263,0,1,0,20161220),(1785478,0,1,0,20161220),(153763,0,1,0,20161220),(1310713,0,1,0,20161220),(547881,0,1,0,20161220),(739447,0,1,0,20161220),(547882,0,1,0,20161220),(547883,0,1,0,20161220),(1204364,0,1,0,20161220),(1650802,0,1,0,20161220),(1650803,0,1,0,20161220),(1429350,0,1,0,20161220),(1570616,0,1,0,20161220),(2078162,0,1,0,20161220),(1605773,0,1,0,20161220),(292032,0,1,0,20161220),(284016,0,1,0,20161220),(1858385,0,1,0,20161220),(1858386,0,1,0,20161220),(514463,0,1,0,20161220),(1858387,0,2,0,20161220),(847260,0,1,0,20161220),(234693,0,1,0,20161220),(261587,0,1,0,20161220),(727871,0,1,0,20161220),(2060053,0,1,0,20161220),(1295141,0,1,0,20161220),(2069423,0,1,0,20161220),(2093482,0,1,0,20161220),(1076690,0,1,0,20161220),(1443944,0,1,0,20161220)","upd10":"update 3p_products p inner join\n             (select product_id,sum(dynamic_sale) as sale, sum(dynamic_click) as click , sum(dynamic_favour) as favour\n             from 3p_count_products where  cur_date>20161211   group by product_id) c on p.id=c.product_id set p.dynamic_sale=c.sale,\n              p.dynamic_click=c.click,p.dynamic_favour=c.favour","upd30":"update 3p_products p inner join\n            (select product_id,sum(dynamic_sale) as sale from 3p_count_products force index(cur_date_product_id) where  cur_date>20161121\n            group by product_id) c on p.id=c.product_id set p.dynamic_sale30=c.sale","upd90":"update 3p_products p inner join\n            (select product_id,sum(dynamic_sale) as sale from 3p_count_products force index(cur_date_product_id) where  cur_date>20160922\n            group by product_id) c on p.id=c.product_id set p.dynamic_sale90=c.sale"}';
print_r(json_decode($str,true));
exit;
$arr=array(1,4,5);
file_put_contents('arr.txt',join("\r\n",$arr));
foreach ($arr as $k=>$v){
       unset($arr[$k]);
}
unset($v);
print_r($arr);	   
exit;
$class=new callback();
$class->a['name']='wx';

var_dump(print_r($class->a,true));
var_dump(var_export($class->a,true));
exit;
wx();
echo 234;
exit;
$str='8960#实拍韩版不规则针织衫背心+时尚衬衫拼接网纱连衣裙两件';
echo $title=strip_tags(htmlspecialchars($str));
echo '<br/>';
var_dump(check_title($title));
exit;
$str='ab des';
var_dump(strpos($str,' '));
var_dump(preg_split('/\s+/',$str));

exit;
$params=new params();
$params->arr(array('a'=>2,4));


exit;
$str="s\t";
echo $str;
var_dump(strpos($str,'\\'));
exit;


$params=new params();
$params->name='wx';
echo $params->name;
echo $params->name;

exit;
$str='/';
print_r(explode('/',$str));
exit;
$str=' ';
echo $str;
exit;
$a1=array(0=>array(123),1=>array('234'));
$i=1;
$var='a'.$i;
print_r(${$var}[0]);

exit;
echo "".eval('echo 123;');
exit;
echo "<?php echo 123;?>";
exit;
$str=123456789011;
$arr=str_split($str);
print_r($arr);
print_r(array_splice($arr,0,1));
exit;
$str='set_top_recommend';
echo $str,'<br/>';
echo preg_replace('/^[a-z]+_/','',$str);
exit;
$a=3;
$b=$a==1?$a:2;
echo $b;
exit;
$a=1;
$b=1;
$c=1;
function b($a,$b,$c){
	echo $a,',';
	
	echo $GLOBALS['a'];
	
	global $a;
	echo $a;
}
b();
print_r(get_defined_vars());
exit;
echo http_build_query(array('user'=>md5('downself+1234456+status'),'ids'=>array(1,2,6,7)));
exit;
echo base64_encode('cat_pid=12');exit;
function wx_empty($str){
   return empty($str); 
}
var_dump(call_user_func('empty','0'));
exit;
$ip=$_SERVER['REMOTE_ADDR'];
$ip2long=sprintf('%u',ip2long($ip));
echo 'client_ip:',$ip,'<br/>ip2long:',$ip2long,'<br/>long2ip:',long2ip($ip2long);
exit;
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




















#!/usr/bin/php
<?php
/**
 * crontab script to update product's click sale favour
 * **************************************************** 
 * @author Mr.Wx completed 20161221
 */
set_time_limit(0);

$action=new action();
$action->start();


class sconfig{
    public  $redis_ip='192.168.5.101';
    public  $redis_port='6379';
    public $mysql_ip='192.168.5.101';
    public $mysql_port='3306';
    public $mysql_user='liliwaiwai';
    public $mysql_pass='Mqjrngcq1RsvAKD';
    public $mysql_db='liliwaiwai';
    public $limit=100;
    public $sql_file='/www/src/product_count_version2/failsql.sql';//保存失败sql文件
    public $origin_data_file='/www/src/product_count_version2/origin_data.txt';//保存原始数据
}


class action{
    public $init;
    public $keys;
    public $sql=array();//保存每次执行过程的sql语句
    public $origin_data=array();//原始数据
    public $usetime=array();
    public function __construct(){
        $this->init=new init();
    }
    
    public function start(){
        $keys=$this->getKeys();
        if(count($keys)<100){echo 'count<100';exit;}
        $keys=array_slice($keys,0,$this->init->config->limit);
        $this->keys=$keys;
        $this->core();
        $this->success('sale/click/favour update success;usetime:'.var_export($this->usetime,true));
    }

    /**
     * 执行方法
     */
    public function core(){
        $this->insertCount();
        $this->update_mixed10();
        $this->update_sale30();
        $this->update_sale90();
        $this->deleteKeys();
    }

    /**
     * 获取每天需要更新的商品id
     */
    public function getKeys(){
        $start=microtime(true);
        $keys=$this->init->redis->keys('product_count_*');
        //$keys=array_slice($keys,0,10000);
        $this->usetime['getRedisKeys']=microtime(true)-$start;
        return $keys;
    }

    /**
     * 获取redis 缓存数据，生成sql语句，写入统计表
     */
    public function getSql(){
        $start=microtime(true);
        if(!$this->keys)return false;
        $cur_date=date('Ymd',strtotime('-1 day'));
        $product_ids=array();
        $sql='insert into 3p_count_products (product_id,dynamic_sale,dynamic_click,dynamic_favour,cur_date) values';
        foreach($this->keys as $v){
            $id=substr(strrchr($v,'_'),1);
            if(is_numeric($id) && $id<2000000000){
                $product_ids[]=$id;//获取商品id
            }else{
                continue;
            }

            //拼接sql语句
            $item=$this->init->redis->hGetAll($v);
            if($item){
                $this->initdata[$v]=$item;
                $click=isset($item['click'])?$item['click']:0;
                $favour=isset($item['favour'])?$item['favour']:0;
                $sale=isset($item['sale'])?$item['sale']:0;
                	
                $sql.="($id,$sale,$click,$favour,$cur_date),";
            }
        }
        $sql=substr($sql,0,-1);//print_r($new_ids);exit;
        $this->usetime['getsql']=microtime(true)-$start;
        return $sql;
    }

    /**
     * 插入当天记录数据
     */
    public function insertCount(){
        $start=microtime(true);
        $sql=$this->getSql();
        $this->sql['insert']=$sql;
        $res=$this->init->query($sql);
        $this->usetime['insert']=microtime(true)-$start;
        if(!$res){
            $this->saveSql();
            die($this->msg('insert table count_products fail'));
        }
    }

    /**
     *更新商品表
     *10天的销量，点击量，收藏量
     *为默认操作
     */
    public function update_mixed10(){
        $start=microtime(true);
        $last_date=date('Ymd',strtotime('-10 days'));
        $sql="update 3p_products p inner join
        (select product_id,sum(dynamic_sale) as sale, sum(dynamic_click) as click , sum(dynamic_favour) as favour
        from 3p_count_products where  cur_date>$last_date   group by product_id) c on p.id=c.product_id set p.dynamic_sale=c.sale,
        p.dynamic_click=c.click,p.dynamic_favour=c.favour";
        $this->sql['upd10']=$sql;
        $res= $this->init->query($sql);
        $this->usetime['update_mixed10']=microtime(true)-$start;
        if(!$res){
            $this->saveSql();
            die($this->msg('10day\'s sale/click/favour update fail'));
        }
    }

    /**
     *更新商品表
     *30天的销量
     */
    public function update_sale30(){
        $start=microtime(true);
        $last_date=date('Ymd',strtotime('-30 days'));
        $sql="update 3p_products p inner join
            (select product_id,sum(dynamic_sale) as sale from 3p_count_products force index(cur_date_product_id) where  cur_date>$last_date
            group by product_id) c on p.id=c.product_id set p.dynamic_sale30=c.sale";
        $this->sql['upd30']=$sql;
        $res= $this->init->query($sql);
        $this->usetime['update_sale30']=microtime(true)-$start;
        if(!$res){
            $this->saveSql();
            die($this->msg('30day sale update fail'));
        }
    }

    /**
     *更新商品表
     *90天的销量
     */
    public function update_sale90(){
        $start=microtime(true);
        $last_date=date('Ymd',strtotime('-90 days'));
        $sql="update 3p_products p inner join
            (select product_id,sum(dynamic_sale) as sale from 3p_count_products force index(cur_date_product_id) where  cur_date>$last_date
            group by product_id) c on p.id=c.product_id set p.dynamic_sale90=c.sale";
        $this->sql['upd90']=$sql;
        $res= $this->init->query($sql);
        $this->usetime['update_sale90']=microtime(true)-$start;

        if(!$res){
            $this->saveSql();
            die($this->msg('90day sale update fail'));
        }
    }

    /**
     * 删除所有的product_count_*键
     */
    public function deleteKeys(){
        $start=microtime(true);
        foreach($this->keys as $v){
            $this->init->redis->delete($v);
        }
        $this->usetime['delete_keys']=microtime(true)-$start;
    }

    /**
     *  废弃 
     */
    public function failDo(){
       $res=$this->saveSql();
       if(!$res){
          return file_put_contents($this->init->config->origin_data_file,'date:'.date('Ymd H:i:s',strtotime('-1 day')).';origin_data:'.json_encode($this->origin_data)); 
       }
       return true;
    }

    /**
     * 保存操作失败的sql语句
     */
    public function saveSql(){
        $last_date=date('Ymd',strtotime('-10 days'));
        $sql10="update 3p_products p inner join
             (select product_id,sum(dynamic_sale) as sale, sum(dynamic_click) as click , sum(dynamic_favour) as favour
             from 3p_count_products where  cur_date>$last_date   group by product_id) c on p.id=c.product_id set p.dynamic_sale=c.sale,
              p.dynamic_click=c.click,p.dynamic_favour=c.favour";
        $last_date=date('Ymd',strtotime('-30 days'));
        $sql30="update 3p_products p inner join
            (select product_id,sum(dynamic_sale) as sale from 3p_count_products force index(cur_date_product_id) where  cur_date>$last_date
            group by product_id) c on p.id=c.product_id set p.dynamic_sale30=c.sale";
        $last_date=date('Ymd',strtotime('-90 days'));
        $sql90="update 3p_products p inner join
            (select product_id,sum(dynamic_sale) as sale from 3p_count_products force index(cur_date_product_id) where  cur_date>$last_date
            group by product_id) c on p.id=c.product_id set p.dynamic_sale90=c.sale";
        if(!isset($this->sql['upd10'])){
            $this->sql['upd10']=$sql10;
        }
        if(!isset($this->sql['upd30'])){
            $this->sql['upd30']=$sql30;
        }
        if(!isset($this->sql['upd90'])){
            $this->sql['upd90']=$sql90;
        }
        return file_put_contents($this->init->config->sql_file,'date:'.date('Ymd H:i:s').';sql:'.json_encode($this->sql).PHP_EOL,FILE_APPEND);
    }

    /**
     * 提示信息
     */
    public function msg($msg){
        return '日期：'.date('Y-m-d H:i:s').';错误信息：'.$msg.';mysql报错信息：'.mysql_error().PHP_EOL;
    }
    
    /**
     * 执行成功提示信息
     */
    public function success($msg){
        echo '日期：'.date('Y-m-d H:i:s').';success信息：'.$msg.PHP_EOL;
    }

    /**
     * 获取执行时间
     */
    public function get_usetime(){
        return $this->usetime;
    }
}
class smysql{
    private $instance=null;
    public function __construct($config){
        $this->connect($config);
    }
    public  function connect($config){
        $mysql=mysql_connect($config->mysql_ip.':'.$config->mysql_port,$config->mysql_user,$config->mysql_pass);
        if(!$mysql){
            die('mysql连接失败：'.mysql_error());
        }
        mysql_select_db($config->mysql_db,$mysql);
        $this->instance=$mysql;
        return $mysql;
    }

    public function query($sql){
        return mysql_query($sql,$this->instance);
    }
}

class init{
    public $redis;
    public $mysql;
    public $limit;
    public $config;
    public function __construct(){
        $config=new sconfig;
        $this->config=$config;
        $this->getRedis($config);
        $this->getMysql($config);
    }
    private function getRedis($config){
        $redis=new redis();
        $redis->connect($config->redis_ip,$config->redis_port);
        $this->redis=$redis;
    }
    private function getMysql($config){
        $mysql=new smysql($config);
        $this->mysql=$mysql;
    }
    public function query($sql){
        return $this->mysql->query($sql);
    }

}



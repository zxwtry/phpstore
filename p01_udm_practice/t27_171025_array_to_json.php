<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/14
 * Time: 10:30
 */

$a = array(
    "0_key" => "0_val",
    "1_key" => "1_val",
    "2_key" => "2_val",
);

$j = json_encode($a);

echo $j;

echo "<br/>";

$s = '{"0_key":"0_val","1_key":"1_val","2_key":"2_val"}';

$v = json_decode($s, true);

$v['so'] = $v;

//echo $v["2_key"];

echo json_encode($v);

//{"0_key":"0_val","1_key":"1_val","2_key":"2_val","so":{"0_key":"0_val","1_key":"1_val","2_key":"2_val"}}

//var_dump($v);


//echo implode('-', $v);
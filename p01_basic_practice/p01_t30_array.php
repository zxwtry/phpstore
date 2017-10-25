<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/23
 * Time: 10:34
 */


$arr = array(
    "k1" => "v1",
    "k2" => "v2",
    "k3" => "v3",
    "k4" => "v4"
);

//array_pop($arr);

array_shift($arr);
array_shift($arr);
var_dump($arr);
echo "<br />";
echo "<br />";
array_shift($arr);
var_dump($arr);
echo "<br />";
echo "<br />";
array_shift($arr);
var_dump($arr);
echo "<br />";
echo "<br />";



//var_dump($arr);

function def($a = "a", $b = "b", $c = "c") {
    echo $a;
    echo "<br/>";
    echo $b;
    echo "<br/>";
    echo $c;
    echo "<br/>";
}

//def("A", "B", "C");

//def($a = "A", $b = "B", $c = "C");
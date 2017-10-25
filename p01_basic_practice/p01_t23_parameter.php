<?php

//按值传递，测试

//     function byValue($num) {
//         $num ++;
//         echo $num;
//     }
//     $n = 3;
//     byValue($n);
//     echo "<br/>\n";
//     echo $n;
#4
#3


//按引用传递

//     function byReference(& $num) {
//         $num ++;
//         echo $num;
//         echo "<br/>\n";
//     }
//     $n = 3;
//     byReference($n);
//     echo $n;
#4
#4


//默认值

//     function byDefault($num=1) {
//         $num ++;
//         echo $num;
//         echo "<br/>\n";
//     }
//     $n = 3;
//     byDefault($n);
//     byDefault();
//     echo $n;
#4
#2
#3
?>
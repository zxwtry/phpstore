<?php

//     class A {
//         const CONST_VALUE = "const_value";
//     }

//     $class_name = 'A';

//     echo $class_name::CONST_VALUE;

//     echo "<br/>\n";

//     echo A::CONST_VALUE;
#输出
#const_value
#const_value



//     class A {
//         const CONST_VALUE = "const_value";
//     }

//     class B extends A {
//         public static $color = "red";

//         public static function doubleColon() {
//             echo parent::CONST_VALUE . "<br/> \n";
//             echo self::$color . "<br/> \n";
//         }
//     }

//     B::doubleColon();
#输出
#const_value
#red


//     class A {
//         protected function showColor() {
//             echo "A::showColor()<br/>\n";
//         }
//     }

//     class B extends A {
//         public function showColor() {
//             parent::showColor();
//             echo "B::showColor()<br/>\n";
//         }
//     }

//     $b = new B();
//     $b->showColor();

#输出
#A::showColor()
#B::showColor()



//     class A {
//         public function showColor() {
//             return $this->color;
//         }
//     }

//     class B {
//         public $color;
//         public function __construct() {
//             echo "using construct...";
//             $this->color = "yellow";
//         }
//         public function getColor() {
//             return A::showColor();
//         }
//     }

//     $b = new B;
//     echo $b->getColor();



//     class A {
//         static function color() {
//             return "color";
//         }

//         static function showColor() {
//             echo "show " . self::color();
//         }
//     }

//     class B extends A {
//         static function color() {
//             return "red";
//         }
//         static function showColor2() {
//             echo "show " . self::color();
//         }
//     }

//     A::showColor();
//     echo "<br/>\n";
//     B::showColor();
//     echo "<br/>\n";
//     B::showColor2();
#输出
#show color
#show color
#show red

?>
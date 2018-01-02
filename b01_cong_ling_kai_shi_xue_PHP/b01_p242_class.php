<?php
/**
 * User:  zxwtry
 * File:  b01_p242_clss.php
 * Date:  2017/12/29
 * Time:  17:24
 */


/*
    属性： public, protected, private

    类的上下文操作： 对象实例或$this

    类的静态成员
    class People {
        private static $number = 2;
        public static $value = 3;
        public static function get_number() {
            return self::$number;
        }
    }
    People::$value = 10;

    类常量： const关键字声明
 */

class People {
    const MAX_AGE = 200;
    private static $number = 2;
    public static $value = 3;
    public static function get_number() {
        return self::$number;
    }

    public static function add_number() {
        self::$number ++;
    }
}


function b01_p242_class_static() {
    echo People::get_number();
    echo "<br />";
    People::add_number();
    echo People::get_number();
    echo "<br />";
    People::add_number();
    echo People::get_number();
    echo "<br />";
    People::add_number();
    echo People::MAX_AGE;
    echo "<br />";
    echo People::$value;
    echo "<br />";
    /*
        2
        3
        4
        200
        3
     */
}


/*
    继承：PHP单继承
 */

class Student extends People {

}

function b01_p242_class_extends() {
    echo Student::get_number();
    echo "<br />";
    Student::add_number();
    echo Student::get_number();
    echo "<br />";
    Student::add_number();
    echo Student::get_number();
    echo "<br />";
    Student::add_number();
    echo Student::MAX_AGE;
    echo "<br />";
    echo Student::$value;
    echo "<br />";
    /*
        2
        3
        4
        200
        3
     */
}


b01_p242_class_extends();

<?php
/**
 * User:  zxwtry
 * File:  b01_p182_connect_mysql.php
 * Date:  2017/11/28
 * Time:  12:13
 */

/*
    连接到MySQL数据库
 */
function b01_p182_connect_mysql_mysql_connect() {
    //mysqli_connect ($host = '', $user = '', $password = '', $database = '', $port = '', $socket = '') {}
    $link = mysqli_connect('localhost', 'root', 'root', 'test', '3306');
    echo "<pre>";
    var_dump($link);
    /*
    object(mysqli)#1 (19) {
      ["affected_rows"]=>int(0)
      ["client_info"]=>string(79) "mysqlnd 5.0.11-dev - 20120503 - $Id: bf9ad53b11c9a57efdb1057292d73b928b8c5c77 $"
      ["client_version"]=>int(50011)
      ["connect_errno"]=>int(0)
      ["connect_error"]=>NULL
      ["errno"]=>int(0)
      ["error"]=>string(0) ""
      ["error_list"]=>array(0) {}
      ["field_count"]=>int(0)
      ["host_info"]=>string(20) "localhost via TCP/IP"
      ["info"]=>NULL
      ["insert_id"]=>int(0)
      ["server_info"]=>string(6) "5.6.36"
      ["server_version"]=>int(50636)
      ["stat"]=>string(135) "Uptime: 2828  Threads: 2  Questions: 2205  Slow queries: 0  Opens: 103  Flush tables: 1  Open tables: 96  Queries per second avg: 0.779"
      ["sqlstate"]=>string(5) "00000"
      ["protocol_version"]=>int(10)
      ["thread_id"]=>int(199)
      ["warning_count"]=>int(0)
    }
     */
}


/*
    创建数据库
    mysqli_query()执行SQL语句
    mysqli_query ($link, $query, $resultmode = MYSQLI_STORE_RESULT) {}
 */
function b01_p182_connect_mysql_mysql_query_create_database() {
    $link = mysqli_connect('localhost', 'root', 'root');
    $query = "create database fruit charset=utf8";
    if (mysqli_query($link, $query)) {
        echo "success";
    } else {
        echo "failure";
    }
    mysqli_close($link);
}


/*
    创建表
    mysqli_query()执行SQL语句
 */
function b01_p182_connect_mysql_mysql_query_create_table() {
    $link = mysqli_connect("localhost", 'root', 'root', 'fruit', '3306');
    $sql = <<<EOD
        create table apple (
          id int(11) primary key auto_increment,
          name varchar(15),
          price float
        ) charset=utf8 engine=InnoDB;
EOD;
    $res = mysqli_query($link, $sql);
    var_dump($res);
    mysqli_close($link);
}


/*
    插入数据
    mysqli_query()执行SQL语句
 */
function b01_p182_connect_mysql_mysql_query_insert() {
    $link = mysqli_connect('localhost', 'root', 'root', 'fruit', '3306');
    $sql = "insert into apple(name, price) values('type_a', 1.23);";
    $res = mysqli_query($link, $sql);
    var_dump($res);
    mysqli_close($link);
}


/*
    更新数据
    mysqli_query()执行SQL语句
 */
function b01_p182_connect_mysql_mysql_query_update() {
    $link = mysqli_connect('localhost', 'root', 'root', 'fruit', '3306');
    $sql = "update apple set name='type_A' where name='type_a';";
    $res = mysqli_query($link, $sql);
    var_dump($res);
    mysqli_close($link);
}


/*
    查询数据
    mysqli_query()执行SQL语句
 */
function b01_p182_connect_mysql_mysql_query_select() {
    $link = mysqli_connect('localhost', 'root', 'root', 'fruit', '3306');
    $sql = "select * from apple";
    $res = mysqli_query($link, $sql);
    echo "<pre>";
    var_dump($res);
    /*
        object(mysqli_result)#2 (5) {
          ["current_field"]=>
          int(0)
          ["field_count"]=>
          int(3)
          ["lengths"]=>
          NULL
          ["num_rows"]=>
          int(5)
          int(5)
          ["type"]=>
          int(0)
        }
     */
    mysqli_close($link);
}


/*
    查询数据
    mysqli_query()执行SQL语句
 */
function b01_p182_connect_mysql_mysql_query_select2() {
    $link = mysqli_connect('localhost', 'root', 'root');
    mysqli_select_db($link, 'fruit');
    $res = mysqli_query($link, "select * from app");
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "</tr>";
    }
    mysqli_close($link);
}


//b01_p182_connect_mysql_mysql_connect();
//b01_p182_connect_mysql_mysql_query_create_database();
//b01_p182_connect_mysql_mysql_query_create_table();
//b01_p182_connect_mysql_mysql_query_insert();
//b01_p182_connect_mysql_mysql_query_update();
//b01_p182_connect_mysql_mysql_query_select();
b01_p182_connect_mysql_mysql_query_select2();

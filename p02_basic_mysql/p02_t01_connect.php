<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31
 * Time: 22:05
 */

$con = mysqli_connect("localhost", "root", "root", "test", "3306");

//var_dump($con);

mysqli_query("", "use gic", "", "");


/**
 *  object(mysqli)#1
 * (19) {
 *  ["affected_rows"]=> int(0)
 *  ["client_info"]=> string(79)
 *          "mysqlnd 5.0.11-dev - 20120503 -
 *          $Id: bf9ad53b11c9a57efdb1057292d73b928b8c5c77 $"
 *  ["client_version"]=> int(50011)
 *  ["connect_errno"]=> int(0)
 *  ["connect_error"]=> NULL
 *  ["errno"]=> int(0)
 *  ["error"]=> string(0) ""
 *  ["error_list"]=> array(0) { }
 *  ["field_count"]=> int(0)
 *  ["host_info"]=> string(20)
 *      "localhost via TCP/IP"
 *  ["info"]=> NULL
 *  ["insert_id"]=> int(0)
 *  ["server_info"]=> string(6) "5.6.36"
 *  ["server_version"]=> int(50636)
 *  ["stat"]=> string(132)
 *      "Uptime: 5569 Threads: 3 Questions: 28
 *      Slow queries: 0 Opens: 69 Flush tables:
 *      1 Open tables: 62 Queries per second avg: 0.005"
 *  ["sqlstate"]=> string(5) "00000"
 *  ["protocol_version"]=> int(10)
 *  ["thread_id"]=> int(6)
 *  ["warning_count"]=> int(0)
 * }
 */

?>
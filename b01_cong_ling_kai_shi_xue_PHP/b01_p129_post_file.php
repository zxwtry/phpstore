<?php
/**
 * User:  zxwtry
 * File:  b01_p129_post_file.php
 * Date:  2017/11/9
 * Time:  17:53
 */

    /*
     *  $_FILES['userfile']['name']    客户端机器文件的原名称
     *  $_FILES['userfile']['type']    文件的MIME类型，不一定有值
     *  $_FIELS['userfile']['size']    已上传文件的大小，单位为字节
     *  $_FIELS['userfile']['tmp_name']    文件上传后，在服务端存储的临时文件名
     *  $_FIELS['userfile']['error']    和文件上传相关的错误代码
     */

    if (isset($_FILES['userfile'])) {

        $upload_file = "F:/" . basename($_FILES['userfile']['name']);
//        $upload_file = "F:/aa.txt";

        $upload_file = iconv("UTF-8", "GBK", $upload_file);
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)) {
            echo "文件上传成功<br/>";
        } else {
            echo "文件上传失败<br/>";
        }

        foreach ($_FILES['userfile'] as $key => $val) {
            echo "key: " . $key . "<br />";
            echo "val: " . $val . "<br /><br />";
        }

        die();
        /*
            文件上传成功
            key: name
            val: 00，通知.txt

            key: type
            val: text/plain

            key: tmp_name
            val: C:\Users\Administrator\AppData\Local\Temp\phpE7B.tmp

            key: error
            val: 0

            key: size
            val: 1904
         */
    }

?>

<form action="http://localhost:63342/phpstore/b01_cong_ling_kai_shi_xue_PHP/b01_p129_post_file.php?_ijt=e0ue4rij10bgu6fl5s2u11i76o"
    enctype="multipart/form-data" method="post">
    <!-- MAX_FILE_SIZE必须在所有input域的前面 -->
    <input type="hidden" name="MAX_FILE_SIZE" value="10000" />

    上传的文件：
    <input name="userfile" type="file" /> <br />
    <input type="submit" value="上传文件"/>

</form>

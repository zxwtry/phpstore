<?php
/**
 * User:  zxwtry
 * File:  b01_p127_post_data.php
 * Date:  2017/11/9
 * Time:  17:40
 */


    if (isset($_POST['submit'])) {
        echo "name: " . $_POST['name'] . "<br />";
        echo "age: " . $_POST['age'] . "<br />";
        die(); //程序结束
    }

?>


<form
    action="http://localhost:63342/phpstore/b01_cong_ling_kai_shi_xue_PHP/b01_p127_post_data.php?_ijt=em2sefp3glij4nrk4hkor8srd7"
    method="post"
>
    姓名：
    <input type="text", name="name" /> <br />
    年龄：
    <input type="text", name="age" /> <br />
    <input type="submit" name="submit" value="提交"/> <br />
</form>


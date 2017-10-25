<?php
var_dump($_POST{"username"});
//string(2) "aa"

var_dump($_REQUEST{"username"});
//string(2) "aa"

var_dump($_POST{"email"});
//string(2) "bb"

var_dump($_REQUEST{"email"});
//string(2) "bb"
?>

<form action="test11_outside_var.php" method="POST">
    你的名字：<input type="text" name="username"> <br />
    你的邮箱：<input type="text" name="email"> <br />
    <input type="submit" name="submit" value="提交">
</form>
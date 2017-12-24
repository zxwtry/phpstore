<?php
/**
 * User:  zxwtry
 * File:  b01_p207_regex.php
 * Date:  2017/12/24
 * Time:  12:54
 */


/*
    PHP与正则表达式

1， 简单的正则表达式
    使用多种元字符与操作符将小的表达式结合在一起创建更大的表达式。
    通过一对分隔符之间放入表达式模式的各种组件来构造一个正则表达式。
    PHP的分隔符是一对正斜杠（/）字符：/cat/

2， 特殊字符
    如果要匹配特殊字符，首先需要将这些字符转义（前面加反斜杠\）
    $    匹配字符串的结尾
    ()   标记一个子表达式的开始和结束位置。
    *    匹配前面的子表达式零次或多次
    +    匹配前面的子表达式一次或多次
    .    匹配除换行符'\n'之外的任何单字符
    [    标记一个中括号表达式的开始。
    ?    匹配前面的子表达式零次或一次，或指明一个非贪婪限定符。
    \    将下一个字符标记为 特殊字符、原义字符、后向引用、八进制转义符
    ^    匹配输入字符串的开始位置，方括号表达式中表示不接受该字符集合
    {    标记限定符表达式的开始
    |    两项之间的一个选择

3， 非打印字符
    \cx  匹配由x指明的控制字符
         \cM匹配一个Control-M或回车符
         x的值必须为A-Z或a-z之一
         否则，将c视为一个原义的'c'字符
    \f   匹配一个换行符，等价于\x0c 和 \cL
    \n   匹配一个换行符，等价于\x0a 和 \cJ
    \r   匹配一个回车符，等价于\x0d 和 \cM
    \s   匹配任何空白字符，包括空格、制表符、换页符等。等价于[\f\n\r\t\v]
    \S   匹配任何非空白字符，等价于[^\f\n\r\t\v]
    \t   匹配一个制表符，等价于\x09 和 \cI
    \v   等价于一个垂直制表符，等价于\x0b 和 \cK

4， 限定符及贪婪模式和非贪婪模式
    *    匹配前面的子表达式零次或多次，"zo*"能匹配"z"和"zoo"
    +    匹配前面的子表达式一次或多次，"zo+"能匹配"zo"和"zoo"，不能匹配"z"
    ?    匹配前面的子表达式零次或一次，"do(es)?"能匹配"do"和"does"
    {n}  n是非负整数，匹配确定的n次，"o{2}"不能匹配"fod"中的"o"，能匹配"food"中的"oo"
    {n,} n是非负整数，至少匹配n次，"o{2}"不能匹配"fod"中的"o"，能匹配"foood"中的所有o
    {n,m}m和n均为非负整数，其中n<=m，最少匹配n次，最多匹配m次
         "o{1,3}"将匹配前三个o

5， 处理两位数或三位数的章节号。
    /Chapter [1-9][0-9]* /    /前面的空格，避免文档注释

6， 贪婪模式和非贪婪模式
    贪婪模式："*"、"+"和"?"限定符都称之为贪婪的，会尽可能多匹配文字
    非贪婪模式："*"、"+"和"?"限定符后放置"?"，表示从贪婪匹配转为最小匹配
    对字符串：aabab
    如果使用 /a.*b/会匹配整个字符串
    如果使用 /a.*?b/会匹配 aab（第一第二第三字符），ab（第四第五字符）

7， 定位符
    "^" 和 "$"分别指字符串的开始和结束
    "\b"描述单词的前或后边界
    "\B"表示非单词边界
    不能对定位符使用限定符。"^*"不允许，字符串的开始，不会有连续多个位置。

8， 选择与编组
    圆括号将所有选择项括起来，相邻的选择项之间用"|"分隔。
    圆括号会有一个副作用，是相关的匹配会被缓存，"?:"放在第一个选项前来消除这种副作用
    （
        三个非捕获元："?:"、"?="、"?!"
        "?:"：消除圆括号的相关匹配项会缓存的副作用
        "?="：前向预查，在任何开始匹配圆括号内的正则表达式的位置来匹配搜索字符串
        "?!"：负向预查，在任何开始不匹配该正则表达式模式的位置来匹配搜索字符串
        /Windows(?=200|XP|7)/
    ）

9， 后向引用
    对一个正则表达式或部分模式两边添加圆括号将导致相关的匹配存储到临时缓存区中，
    所捕获的每个子匹配都按照在正则表达式模式中从左到右所遇到的内容存储。
    存储子匹配真的缓冲区编号从1开始，连续编号到最大99个子表达式。
    每个缓冲区都可以使用"\n"访问，其中n为一个标识特定缓冲区的一位或两位十进制数
    可以使用非捕获元 "?:"、"?="、"?!"来忽略对相关匹配的保存

    Is is the cost of of gasoline going up up?
    句子中存在单词多次重复的问题，/\b([a-z]+) \1\b/gi
    所捕获的，由([a-z]+)指定
    \1：指定第一个子匹配
    \b：单词边界元字符确保只检测单独的单词。不然，"is issued" 或 "this is"
        都会被该表达式不正确地识别。

10，各操作符的优先级（从高到低）
    \                       转义符
    (),(?:),(?=).[]         圆括号和方括号
    *,+,?,{n},{n,},{n,m}    限定符
    ^,$,\任何元字符          位置和顺序
    |                       "或"顺序

11，修饰符（位于定界符的后面）
    修饰符：进一步描述正则所匹配的内容
    匹配一个不区分大小写的"cat"，  /cat/i
    修饰符列表：
    i       不区分大小写的搜索
    g       查找全局搜索
    m       将一个字符串视为多行（multiple）
            默认情况，^和$字符匹配字符串中最开始和最末尾
            使用m修饰符将使^和$匹配字符串中每行的开始结尾。
    s       将一个字符串视为一行，忽略其中所有换行符，与m修饰符相反
    x       忽略正则表达式中的空白和注释
    U       第一次匹配后停止。
 */



/*
    PHP中提供正则函数preg_match()来验证匹配，
    preg_match ($pattern, $subject, array &$matches = null, $flags = 0, $offset = 0)
    preg_match返回pattern所匹配的次数：0次（没有匹配）或一次
    preg_match在第一次匹配之后将停止搜索

    如果只是想判断一个字符串是否在另外一个字符串中出现，strpos或strstr更好。


 */
function b01_p207_regex_preg_match() {
    $subjects = array(
        "catalog", "CaTalog", "CATALOG", "acatb", "caaat"
    );
    $pattern = "/cat/i";
    foreach ($subjects as $subject) {
        if (preg_match($pattern, $subject)) {
            echo "<p>" . $subject . " matched!</p><br/>";
        } else {
            echo "<p>" . $subject . " not matched!</p><br/>";
        }
    }
    /*
        catalog matched!
        CaTalog matched!
        CATALOG matched!
        acatb matched!
        caaat not matched!
     */
}


/*
    字符串替换
    preg_replace ($pattern, $replacement, $subject, $limit = -1, &$count = null)
 */
function b01_p207_regex_preg_replace() {
    $string = "菠菜原产于中国，俗称大菠菜";
    $pattern = "/菠菜/";
    $replacement = "白菜";
    echo preg_replace($pattern, $replacement, $string);
}


/*
    取得字符串中符合规定的部分
    preg_match_all ($pattern, $subject, array &$matches = null, $flags = PREG_PATTERN_ORDER, $offset = 0)
    在subject中搜索所有与pattern给出的正则表达式匹配的内容
        并将结果以flags指定的顺序放到matches中。
    搜索到第一个匹配项之后，接下来的搜索从上一个匹配项末尾开始。
    matches会被搜索的结果所填充，
    $matches[0]将包含整个模式匹配的文本，
    $matches[1]将包含与第一个捕获的括号中的子模式所匹配的文本。
 */
function b01_p207_regex_preg_match_all() {
    $html = file_get_contents("http://www.zxwtry.com");
    $a = "/<a[\s]+[^>]*href\=[\"']?([^>'\" ]+)[\"']?[^>]*>/i";
    preg_match_all($a, $html, $matches);

    for ($i = 0; $i < count($matches[0]); $i ++) {
        echo "<p>" . $matches[1][$i] ."</p>";
    }
    /*
        http://blog.csdn.net/zxwtry
        https://github.com/zxwtry
        http://www.miitbeian.gov.cn
     */
}


/*
    校验email是否正确
 */
function b01_p207_regex_email() {
    $pattern = "/^[a-z0-9]+([_\.-]*[a-z0-9]+)*@[a-z0-9]" .
        "([-]?[a-z0-9]+)\.[a-z]{2,3}(\.[a-z]{2})?$/i";
    $emails = array(
        "zxw_try@qq.com",
        "10000@qq.com",
        "baidu@baidu@baidu.com"
    );
    foreach($emails as $email) {
        if (preg_match($pattern, $email)) {
            echo "matches " . $email . "<br/>";
        } else {
            echo "not matches " . $email . "<br/>";
        }
    }
    /*
        matches zxw_try@qq.com
        matches 10000@qq.com
        not matches baidu@baidu@baidu.com
     */
}


/*
    校验电话号码是否正确
 */
function b01_p207_regex_telphone() {
    $pattern = "/^[+]?[0-9]+([xX-][0-9]+)*$/i";
    $telphones = array(
        "13912345678",
        "+86-1234567",
        "1391234567a"
    );
    foreach($telphones as $telphone) {
        if (preg_match($pattern, $telphone)) {
            echo "matches " . $telphone . "<br/>";
        } else {
            echo "not matches " . $telphone . "<br/>";
        }
    }
}


/*
    当编码为UTF-8时候，校验中文字符的正则
    /^[\x{4e00}-\x{9fa5}]+$/
 */
function b01_p207_regex_chinese_character() {
    $pattern_gbk = "/^[" . chr(0xa1) . "-" . chr(0xff) . "]+$/";
    $pattern_utf8 = "/^[\x{4e00}-\x{9fa5}]+$/u";
    $characters = array(
        "你",
        "hello"
    );
    foreach($characters as $character) {
        if (preg_match($pattern_utf8, $character)) {
            echo "matches " . $character . "<br>";
        } else {
            echo "not matches " . $character . "<br>";
        }
    }
    foreach($characters as $character) {
        if (preg_match($pattern_gbk, mb_convert_encoding(
            $character, "GBK", "UTF-8"
        ))) {
            echo "matches " . $character . "<br>";
        } else {
            echo "not matches " . $character . "<br>";
        }
    }

}

//b01_p207_regex_preg_match();
//b01_p207_regex_preg_replace();
//b01_p207_regex_preg_match_all();
//b01_p207_regex_email();
//b01_p207_regex_telphone();
//b01_p207_regex_chinese_character();

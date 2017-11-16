<?php
/**
 * User:  zxwtry
 * File:  b01_p141_mkdir_file.php
 * Date:  2017/11/12
 * Time:  12:51
 */

/*
    创建文件目录：mkdir
    bool mkdir ($pathname, $mode = 0777, $recursive = false, $context = null) {}

 */

/*
    创建文件：fopen
    resource fopen ($filename, $mode, $use_include_path = null, $context = null) {}

    参数mode以什么方式打开文件
    r       只读方式打开，将文件指针指向文件头

    r+      读写方式打开，将文件指针指向文件头

    w       写入方式打开，将文件指针指向文件头并将文件大小截为0；如果文件不存在，创建文件

    w+      读写方式打开，将文件指针指向文件头并将文件大小截为0；如果文件不存在，创建文件

    a       写入方式打开，将文件指针指向文件末尾。如果文件不存在，创建文件

    a+      读写方式打开，将文件指针指向文件末尾。如果文件不存在，创建文件

    x       创建并以写入方式打开，将文件指针指向文件头。
            如果文件已经存在，返回false，生成E_WARNING级别错误信息。
            如果文件不存在，尝试创建文件。
            此选项只可用于本地文件。

    x+      创建并以读写方式打开，将文件指针指向文件头。
            如果文件已经存在，返回false，生成E_WARNING级别错误信息。
            如果文件不存在，尝试创建文件。
            此选项只可用于本地文件。
 */



/*
    列出目录和文件

    (1) 打开目录
    resource opendir ($path, $context = null) {}
    opendir()函数打开一个目录句柄，可由closedir()，readdir()，rewinddir()使用

    (2) 读取目录
    string readdir ($dir_handle = null) {}
    $dir_handle是resource
    函数返回目录中下一个文件的文件名。
    文件名以在文件系统中的排序返回。

    (3) 关闭文件句柄
    void closedir ($dir_handle = null) {}
    函数关闭由$dir_handle指定的目录流。
    流必须之前被opendir()所打开

 */


function b01_p141_mkdir_file_list_all_files() {
    if ($handle = opendir('F:/tmp')) {
        while (false !== ($file = readdir($handle))) {
            $utf8 = iconv("GBK", "UTF-8", $file);
            echo "$utf8<br />";
        }
        closedir($handle);
    }
    /*
        .
        ..
        bcb22219gy1fhjinhb9l4j20hs0r9jv4.jpg
        BroadCastUDPClient.java
        BroadCastUDPServer.java
        cwnd快恢复.jpg
        cwnd慢开始和拥塞避免算法.jpg
        logs
        MultiCastUDPClient.java
        MultiCastUDPServer.java
        nethogs用自己电脑连接.png
        nethogs网络攻击.png
        Netty权威指南 第2版 带书签目录 完整版.pdf
        php
        phplog
     */
}



/*
    获得磁盘空间

    计算文件大小的函数 filesize()
    int filesize ($filename) {}
    成功 --> 返回文件大小的字节数
    失败 --> 返回FALSE，并生成一条E_WARNING
 */

function b01_p141_mkdir_file_list_disk_space($dir = "D:/aaaa/api") {
    $dh = opendir($dir);
    $size = 0;
    while ($file = readdir($dh)) {
        if ($file != "." and $file != "..") {
            $path = $dir . "/" . $file;
            if (is_dir($path)) {
                echo "$path<br />";
                $size += b01_p141_mkdir_file_list_disk_space($path);
            } elseif (is_file($path)) {
                echo "$path<br />";
                $size += filesize($path);
            }
        }
    }
    closedir($dh);
    return $size;

    /*
        D:/aaaa/api/add_favorite.php
        D:/aaaa/api/checkcode.php
        D:/aaaa/api/count.php
        D:/aaaa/api/creatimg.php
        D:/aaaa/api/get_keywords.php
        D:/aaaa/api/get_linkage.php
        D:/aaaa/api/get_menu.php
        D:/aaaa/api/index.html
        D:/aaaa/api/map.php
        D:/aaaa/api/phpsso.php
        D:/aaaa/api/reg_send_sms.php
        D:/aaaa/api/sms.php
        D:/aaaa/api/sms_idcheck.php
        D:/aaaa/api/video_api
        D:/aaaa/api/video_api/add_album_video.php
        D:/aaaa/api/video_api/add_video.php
        D:/aaaa/api/video_api/del_video.php
        D:/aaaa/api/video_api/edit_video.php
        D:/aaaa/api/video_api/ping.php
        D:/aaaa/api/video_api/video_info.php
        D:/aaaa/api/video_api.php
        总大小: 59252
     */
}


/*
    改变目录和文件的属性
    bool chmod ( string filename, int mode )
    chmod可以改变文件模式。
    如果成功，返回true
    如果失败，返回false

    int mode
    0777

    第二个数字：规定owner的权限
    第三个数字：规定用户组的权限
    第四个数字：规定其他所有人的权限

    421
    rwx
 */



/*
    写入数据到文件
    int fwrite ($handle, $string, $length = null) {}

    fwrite()把string内容写入文件指针 $handle处，
    写入成功，返回写入内容的长度
    写入失败，返回false

    指定了length，当写入了  min(length,string字节数)   个字节就会停止

 */


function b01_p141_mkdir_file_fwrite_ascii() {
    $str = "abcdefghigklmnopqrstuvwxyz";
    $filename= "F:/w.txt";
    $handle = fopen($filename, 'a+');
    if (! $handle) {
        exit("打开文件失败");
    }
    $cnt = fwrite($handle, $str);
    if ($cnt === false) {
        exit("写入文件失败");
    }
    echo "成功写入" . $cnt . "字节";
    fclose($handle);
    /*
        成功写入26字节
     */
}

function b01_p141_mkdir_file_fwrite_utf8() {
    $str = "你好世界";
    $filename= "F:/w.txt";
    $handle = fopen($filename, 'a+');
    if (! $handle) {
        exit("打开文件失败");
    }
    $cnt = fwrite($handle, $str);
    if ($cnt === false) {
        exit("写入文件失败");
    }
    echo "成功写入" . $cnt . "字节";
    fclose($handle);

    /*
        成功写入12字节
     */
}



/*
    使用file_put_contents()函数将数据写入文件中

    int file_put_contents ($filename, $data, $flags = 0, $context = null) {}

    $data可以是：string array 或  stream资源

    $flags可以使：FILE_USE_INCLUDE_PATH，FILE_APPEND 和/或 LOCK_EX
 */

function b01_p141_mkdir_file_file_put_contents() {
    file_put_contents("F:/w.txt", "我爱PHP", FILE_APPEND);
}



/*
    fread()函数 读取 文件的数据
    string fread ($handle, $length) {}

    fread函数从文件指针handle读取最多length个字节
    读取正常，返回所读取的字符串
    读取错误，返回false

    停止：
        最多length个字节
        到达EOF
        ......
 */

function b01_p141_mkdir_file_fread() {
    $fn = "F:/w.txt";
    $handle = fopen($fn,"rb");
    $content = fread($handle, filesize($fn));
    fclose($handle);
    echo $content;
}


/*
    file_get_contents()函数 读取 文件中的数据
    file_get_contents ($filename, $use_include_path = false, $context = null, $offset = 0, $maxlen = null) {}


 */
function b01_p141_mkdir_file_file_get_contents() {
    echo file_get_contents("F:/w.txt", false,
        null, 3, 4);
}


/*
    删除目录和文件

    删除目录：
        bool rmdir ($dirname, $context = null) {}

    删除文件：
        bool unlink ($filename, $context = null) {}


 */
function b01_p141_mkdir_file_rmdir_unlink($dir = "F:/tmp/api") {
    // 删除包含子目录的目录
    if ($dirHandle = opendir($dir)) {
        $old_cwd = getcwd();
        chdir($dir);
        while ($file = readdir($dirHandle)) {
            if ($file == '.' || $file == '..') continue;
            if (is_dir($file)) {
                if (! b01_p141_mkdir_file_rmdir_unlink($file))
                    return false;
            } else {
                if (! unlink($file))
                    return false;
            }
        }
        closedir($dirHandle);
        chdir($old_cwd);
        if (! rmdir($dir)) return false;
        return true;
    }
    return false;
}


//echo "总大小: " . b01_p141_mkdir_file_list_disk_space();

//b01_p141_mkdir_file_list_all_files();

//b01_p141_mkdir_file_fwrite_ascii();

//b01_p141_mkdir_file_fwrite_utf8();

//b01_p141_mkdir_file_file_put_contents();

//b01_p141_mkdir_file_fread();

//b01_p141_mkdir_file_file_get_contents();

//echo b01_p141_mkdir_file_rmdir_unlink();













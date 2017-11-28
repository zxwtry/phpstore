<?php
/**
 * User:  zxwtry
 * File:  b01_p167_gd.php
 * Date:  2017/11/19
 * Time:  17:53
 */


/*
    创建一个图片的步骤：
    1,  创建一个图片背景，以后所有操作都基于此背景
    2,  在图像上绘图，或输入文本
    3,  输出最终图形
    4,  清除内存中所有资源
 */
function b01_p167_gd_create_img() {
    $height = 300;
    $width = 400;
    $im = imagecreatetruecolor($width, $height);
    //一张 长$width  宽$height  黑色图像

    $white = imagecolorallocate($im, 255, 255, 255);
    $blue = imagecolorallocate($im, 0, 0, 202);
    //生成颜色

    imagefill($im, 100, 100, $blue);
    //在x,y坐标处，执行区域填充（x,y和相邻的点）

    imageline($im, 0, 0, $width, $height, $white);
    //画线

    imagestring($im, 4, 80, 150, "PHP", $white);
    //写字符

    header("content-type: image/png");
    imagepng($im);      //返回 bool(true)
    imagedestroy($im);
}


/*
    创建缩略图
    imagecopyresampled ($dst_image, $src_image, $dst_x, $dst_y,
        $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h) {}
 */
function b01_p167_gd_create_thumb() {
    $src_im = imagecreatefromjpeg('F:/Jellyfish.jpg');
    $dst_im = imagecreatetruecolor(100, 100);

    $src_x = 0;
    $src_y = 0;

    $dst_x = 0;
    $dst_y = 0;

    $src_w = 1024;
    $src_h = 768;

    $dst_w = 100;
    $dst_h = 100;

    imagecopyresampled ($dst_im, $src_im, $dst_x, $dst_y,
        $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);

    imagepng($dst_im, 'F:/a.png');

    imagedestroy($dst_im);
    imagedestroy($src_im);
}


/*
    给图片添加水印
 */
function b01_p167_gd_water_mark() {
    $image = imagecreatefromjpeg('F:/test_img/Jellyfish.jpg');
    $water_mark = imagecreatefrompng('F:/test_img/qq.png');

    $wm_width  = imagesx($water_mark);
    $wm_height = imagesy($water_mark);


    //将水印加载到图像上
    imagecopyresampled($image, $water_mark, 0, 0,
        0, 0, $wm_width, $wm_height, $wm_width, $wm_height);
    imagejpeg($image, "F:/test_img/Jellyfish_wm.jpg", 100);
    imagedestroy($image);
    imagedestroy($water_mark);
}

/*
    给图片加文字
    imagettftext (  $image, $size, $angle, $x, $y,
                    $color, $fontfile, $text) {}

    $image: 图像资源
    $size:  字体大小
    $angle:  角度值表示的角度，0表示从左向右读的文本，表示逆时针旋转$angle度数
             $angle = 90 表示从下向上读文本
    x:      第一个字符的基本点（不一定在字符上）
    y:      字体基线的位置，并不是字符的最底端
    color:  颜色索引，如果使用负值：关闭防锯齿的效果
    fontfile:   想要使用的TrueType字体的路径
    text:       文本字符串


    字符串进行编码转换：
    mb_convert_encoding ($str, $to_encoding, $from_encoding = null) {}
 */
function b01_p167_gd_word() {
    $image = imagecreatefromjpeg('F:/test_img/Jellyfish.jpg');

    $pink = imagecolorallocate($image, 255, 255, 255);

    $font_file = 'C:\WINDOWS\fonts\msyhbd.ttf';

    $str = "我喜欢PHP";

    //$str = mb_convert_encoding($str, "UTF-8", "GBK");
    imagettftext($image, 25, 10, 140, 240, $pink, $font_file, $str);
    imagejpeg($image, "F:/test_img/Jellyfist_text.jpg", 100);
    imagedestroy($image);
}




//b01_p167_gd_create_img();

//b01_p167_gd_create_thumb();

//b01_p167_gd_water_mark();

b01_p167_gd_word();
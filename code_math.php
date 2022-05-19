<?php
//开始session
session_start();
//调用验证码方法
getCode();
//生成验证码方法
function getCode() {
    $w = 100;    //设置图片宽度
    $h = 40;     //设置图片高度
 
    //创建图片
    $im = imagecreate($w, $h);
 
    // 设置数字的颜色
    $red = imagecolorallocate($im, 255, 0, 0);
    // 设置问号的颜色
    $white = imagecolorallocate($im, 255, 255, 255);
 
    //随机出两个1至20之间的数
    $num1 = rand(1, 20);
    $num2 = rand(1, 20);
 
    //将生成的验证码写入session，后面验证时用
    $_SESSION['code'] = $num1 + $num2;
 
    //设置干扰点颜色
    $point = imagecolorallocate($im, 118, 151, 199);
    //设置随机背景颜色
    $background = imagecolorallocate($im, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100));
 
    //画背景
    imagefilledrectangle($im, 0, 0, 100, 24, $background);
 
    //在画布上随机生成大量点，起干扰作用;
    for ($i = 0; $i < 100; $i++) {
        imagesetpixel($im, rand(0, $w), rand(0, $h), $point);
    }
 
    //设置图片内容
    imagestring($im, 5, 5, 4, $num1, $red);
    imagestring($im, 5, 30, 3, "+", $red);
    imagestring($im, 5, 45, 4, $num2, $red);
    imagestring($im, 5, 70, 3, "=", $red);
    imagestring($im, 5, 80, 2, "?", $white);
 
    header("Content-type: image/png");
 
    //输出图片
    imagepng($im);
    //释放图片所占内存
    imagedestroy($im);
}
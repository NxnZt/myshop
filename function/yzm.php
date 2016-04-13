<?php
/*
 *   验证码
 *
 * */
require '../init.php';
session_start();
//1.创建画布
$img=imagecreatetruecolor(100,40);
//2.分配颜色
$lightcolor=imagecolorallocate($img,mt_rand(130,255),mt_rand(130,255),mt_rand(130,255));
$darkcolor=imagecolorallocate($img,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
//3.填充背景
imagefill($img,0,0,$lightcolor);
//4.挥刀自宫
//画干扰点
for($i=0;$i<200;$i++){
    imagesetpixel($img,mt_rand(0,100),mt_rand(0,100),$darkcolor);
}
for($j=0;$j<5;$j++){
    imageline($img,mt_rand(0,100),mt_rand(0,40),mt_rand(0,100),mt_rand(0,40),$darkcolor);
}
//写字
$str='23456789qwertyuiopasdfghjklzxcvbnm';
$str=str_shuffle($str);
$str=substr($str,0,4);
//将验证码字符串存在session中
$_SESSION['vcode']=$str;
for($i=0;$i<4;$i++){
    $w=100/4;
    $x=$i*$w+10;
    $y=mt_rand(20,30);
    imagettftext($img,18,mt_rand(-40,40),$x,$y,$darkcolor,BASE_PATH.'public/fonts/4.ttf',$str{$i});
}
//5.保存或输出
header('content-type:image/png');
imagepng($img);
//6.销毁资源
imagedestroy($img);

?>

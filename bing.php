<?php

$content = file_get_contents('https://area.sinaapp.com/bingImg');

// 路径
$path = "C:/E/pic/wallpaper/";

$file = file_put_contents($path.date('Y-m-d').'.jpg', $content);

if (is_int($file) && $file > 0 )
{
	echo "下载成功";
}else{
	echo $file;
}
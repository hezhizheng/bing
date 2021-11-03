<?php
const BING_HOST = "https://www.bing.com";
const SAVE_PATH = "F:/bin_pic/";

$content = file_get_contents(BING_HOST.'/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=en-US');
$pic_url = json_decode($content,true)["images"][0]["url"] ?? "";

if ( !empty($pic_url) )
{
    $picContent = file_get_contents(BING_HOST.$pic_url);
    $file = file_put_contents(SAVE_PATH.date('Y-m-d').'.jpg', $picContent);
    if (is_int($file) && $file > 0 )
    {
        var_dump( "下载成功",$file);
    }else{
        var_dump( "下载失败",$file);
    }
}else{
    echo "下载失败，bing 地址获取失败";
}
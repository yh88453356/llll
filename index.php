<?php include('system/inc.php');
if(!file_exists('./install/install.lock')){
   header('location:/install/');
}
$seach=file_get_contents('https://www.360kan.com/');
$szz="# <a href='(.*?)' class='p0 g-playicon js-playicon'><img src='(.*?)' alt='(.*?)' /><span class='title'>(.*?)</span><span class='desc'>(.*?)</span><b></b>#";
preg_match_all($szz,$seach,$sarr);
$one=$sarr[1];//标题
$two=$sarr[2];
$three=$sarr[5];
include('moban/'.$mkcms_bdyun.'/index.php');?>
<?php
function multiexplode($delimiters, $string)
{
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}




function getUrl($getURL, $page)
{
    
    $newGetUrl=explode('page', $getURL);
    $l = count($newGetUrl);
    $getURLStr=($l>1)?$newGetUrl[0].'page='.$page : $newGetUrl[0].'&page='.$page;
    return $getURLStr;
}

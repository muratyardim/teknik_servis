<?php
$url = "http://www.imdb.com/title/tt1675434";
$cekilen_veri = file_get_contents($url);
echo $cekilen_veri;

function getir($baslangic, $son, $cekilmek_istenen)
{
    @preg_match_all('/' . preg_quote($baslangic, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $cekilmek_istenen, $m);
    return @$m[1];
}

?>
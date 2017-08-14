<?php
require_once('lichphatsong/simple_html_dom.php');
function getkenh($kenh)
{
    $url = "http://vtvgo.vn/xem-truc-tuyen-kenh-vtv" . $kenh . "-" . $kenh . ".html";
    $html = file_get_html($url);
    $tins = $html->find('script');
    foreach ($tins as $key => $value) {

        foreach (explode(' ', $source = $value->innertext) as $key2 => $kq) {
            if ($key2 == 15) {
                if (strlen($kq) == 119) {
                    $linkxuly = $kq;
                }
            }
        }


    }
    $str1 = str_replace("addPlayer('", "", $linkxuly);
    $str2 = str_replace("web", "wap", $str1);
    $link = trim(str_replace("',", "", $str2));
    return $link;
}


?>


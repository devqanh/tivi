<?php
if (isset($_GET['kenh'])) {
    switch ($_GET['kenh']) {
        case 1 :
            $kenh = 1;
            $kenhtivi = getkenh($kenh);
            $mau1 = 'class="doimau"';
            break;
        case 2 :
            $kenh = 2;
            $kenhtivi = getkenh($kenh);
            $mau2 = 'class="doimau"';
            break;
        case 3:
            $kenh = 3;
            $kenhtivi = getkenh($kenh);
            $mau3 = 'class="doimau"';
            break;
        case 4:
            $kenh = 4;
            $kenhtivi = getkenh($kenh);
            $mau4 = 'class="doimau"';
            break;
        case 5:
            $kenh = 5;
            $kenhtivi = getkenh($kenh);
            $mau5 = 'class="doimau"';
            break;
        case 6:
            $kenh = 6;
            $kenhtivi = getkenh($kenh);
            $mau6 = 'class="doimau"';
            break;
        case 7:
            $kenh = 7;
            $kenhtivi = "http://123.30.191.202/hls/antv.m3u8";
            break;
        case 8 :
            $kenh = 8;
            $kenhtivi = "http://125.235.29.16/livetv/keeng.m3u8";
            break;
        case 9:
            $kenh = 9;
            $kenhtivi = "http://sv2.xemtiviso.com/nextbest.php?id=itv&token=kph1CmtM7FbJCiDlr_muqA&e=1502729322";
            break;
    }
} else {
    $kenh = 1;
    $kenhtivi = getkenh($kenh);
    $mau1 = 'class="doimau"';
}
?>
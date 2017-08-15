<?php
require_once ("getkenh.php");
if(isset($_GET['kenh'])){
    switch ($_GET['kenh'])
    {
        case 1 :
            $kenh = 1 ;
            $kenhtivi =  getkenh($kenh);
            $mau1 = 'class="doimau"';
            break;
        case 2 :
            $kenh = 2 ;
            $kenhtivi =  getkenh($kenh);
            $mau2 = 'class="doimau"';
            break;
        case 3:
            $kenh = 3 ;
            $kenhtivi =  getkenh($kenh);
            $mau3 = 'class="doimau"';
            break;
        case 4:
            $kenh = 4 ;
            $kenhtivi =  getkenh($kenh);
            $mau4 = 'class="doimau"';
            break;
        case 5:
            $kenh = 5 ;
            $kenhtivi =  getkenh($kenh);
            $mau5 = 'class="doimau"';
            break;
        case 6:
            $kenh= 6 ;
            $kenhtivi =  getkenh($kenh);
            $mau6 = 'class="doimau"';
            break;
        case 7:
            $kenh =  7 ;
            $kenhtivi = "http://123.30.191.202/hls/antv.m3u8";
            break;
        case 8 :
            $kenh = 8 ;
            $kenhtivi = "http://125.235.29.16/livetv/keeng.m3u8";
            break;
        case 9:
            $kenh = 9 ;
            $kenhtivi ="http://sv2.xemtiviso.com/nextbest.php?id=itv&token=kph1CmtM7FbJCiDlr_muqA&e=1502729322";
            break;
    }
}
else {
    $kenh = 1;
    $kenhtivi =  getkenh($kenh);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <link rel="icon" href="http://sieuthidienmaytranthe.com/vnt_upload/product/category/unnamed.png">
    <meta property="og:title"              content="TIVI ONLLINE" />
    <meta property="og:description"        content="Hotline:01672149659 - Email:devqanh@gmail.com" />
    <meta property="og:image"              content="http://www.roundpulse.com/wp-content/uploads/2013/02/How-to-upload-videos-to-YouTube-from-Google-drive.png" />
    <meta charset="utf-8">
    <title>TIVI ONLINE</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="static/bootstrap.min.css">
    <script src="//ssl.p.jwpcdn.com/player/v/7.7.0/jwplayer.js"></script>
    <script src="//cdn.streamroot.io/jw7-hlsjs-provider/stable/jw7-hlsjs-provider.js"></script>
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/2.0.13/demo.css">
</head>

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#facebook-video-downloader">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">TIVI ONLINE </a>
                </div>
            </nav>
            <div class="well">
                <div class="centered">
                    <h2>Bạn đang xem VTV <?php echo $kenh; ?></h2>
                    <h5 style="text-align: right;font-weight: bold;color: #0400ff; margin: 20px 0 20px 0;">Hotline:01672149659 - Email:devqanh@gmail.com</h5>

                    <div class="col-mg-12 video">
                        <div id="streamroot"></div>
                        <script>
                            jwplayer.key = "dWwDdbLI0ul1clbtlw+4/UHPxlYmLoE9Ii9QEw==";
                            jwplayer('streamroot').setup({
                                file : "<?php echo $kenhtivi; ?>",
                                p2pConfig : { streamrootKey: 'YOUR_STREAMROOT_KEY' },
                                "height": 600,
                                "width": 1000,
                                autostart: true,
                                logo: {
                                    file: '/static/logo3.png',
                                    link: 'http://tv.webchuanseo.design/'
                                },

                                advertising: {
                                    client: 'vast',
                                    schedule: {
                                        adbreak1: {
                                            offset : 5 ,
                                            tag: '/static/ads.xml',
                                            skipoffset: 5
                                        }
                                    }
                                }
                            });
                        </script>
                        <ul class="icontv">
                            <li><a href="?kenh=1"><img <?php echo $mau1; ?> src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/1__.png" /></a> </li>
                            <li><a href="?kenh=2"><img <?php echo $mau2; ?> src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/2__.png" /></a> </li>
                            <li><a href="?kenh=3"><img <?php echo $mau3; ?> src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/3__.png" /></a> </li>
                            <li><a href="?kenh=4"><img <?php echo $mau4; ?> src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/4__.png" /></a> </li>
                            <li><a href="?kenh=5"><img <?php echo $mau5; ?> src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/5__.png" /></a> </li>
                            <li><a href="?kenh=6"><img <?php echo $mau6; ?> src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/6__.png" /></a> </li>
                            <li><a href="?kenh=7"><img src="http://htvc.vn/uploads/editor/images/1423638450_logoantv.png" /></a> </li>
                            <li><a href="?kenh=8"><img src="http://vod.mobitv.vn/medias_7/2016_06_25/1466827981115/bba67f0df563.png" /></a> </li>
                            <li><a href="?kenh=9"><img  src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/39__.png" /></a> </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="static/bootstrap.min.js" ></script>
</body>
</html>

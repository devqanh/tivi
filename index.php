<?php
require_once ("getkenh.php");
require_once("chonkenh.php");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <link rel="icon" href="static/img/favicon.png">
    <meta property="og:title"              content="TIVI ONLINE" />
    <meta property="og:description"        content="GET DỮ LIỆU TỪ VTVGO" />
    <meta property="og:image"              content="static/img/preview.jpg" />
    <meta charset="utf-8">
    <title>TIVI ONLINE</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="static/bootstrap.min.css">
    <script src="static/player/jwplayer.js"></script>
    <script src="static/player/jw7-hlsjs-provider.js"></script>
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="static/demo.css">
    <style>
        .boxtv {
            overflow: hidden;
        }
    </style>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-89546061-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
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
            <div class="well boxtv">
                <div class="centered">
                    <h2>Bạn đang xem VTV <?php echo $kenh; ?></h2>
                    <h5 style="text-align: right;font-weight: bold;color: #0400ff; margin: 20px 0 20px 0;">Hotline:01672149659 - Email:devqanh@gmail.com</h5>
                    <h6 class="thongbao"><?php echo $thongbao ; ?> </h6>
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
                                <?php echo $quangcao; ?>
                            });
                        </script>
                        <ul class="icontv">
                            <li><a href="kenh-1.html"><img <?php echo $mau1; ?> src="static/img/vtv1.png" /></a> </li>
                            <li><a href="kenh-2.html"><img <?php echo $mau2; ?> src="static/img/vtv2.png" /></a> </li>
                            <li><a href="kenh-3.html"><img <?php echo $mau3; ?> src="static/img/vtv3.png" /></a> </li>
                            <li><a href="kenh-4.html"><img <?php echo $mau4; ?> src="static/img/vtv4.png" /></a> </li>
                            <li><a href="kenh-5.html"><img <?php echo $mau5; ?> src="static/img/vtv5.png" /></a> </li>
                            <li><a href="kenh-6.html"><img <?php echo $mau6; ?> src="static/img/vtv6.png" /></a> </li>
                            <li><a href="kenh-7.html"><img src="static/img/antv.png" /></a> </li>
                            <li><a href="kenh-9.html"><img  src="static/img/vtv9.png" /></a> </li>
                            <li style="display: inline-grid;margin-top: 5%;"><a href="kenh-8.html"><img src="static/img/keeng.png" /></a> Đang thử nghiệm quảng cáo</li>

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

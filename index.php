<?php
require_once ("getkenh.php");
// get vtv 1
//$get = file_get_contents('http://m.tivi8k.net/vtv1-2.php');
//$source = explode(" " , $get);
//foreach ($source as $key => $value){
//
//       if($key == 15){
//          $url =  $value;
//       }
//
//}
//$string = str_replace("'", "",$url);
//$vtv1 = trim(str_replace(",","",$string));
// get hbo
if(isset($_GET['kenh'])){
    switch ($_GET['kenh'])
    {
        case 1 :
            $kenh = 1 ;
            break;
        case 2 :
            $kenh = 2 ;
            break;
        case 3:
            $kenh = 3 ;
            break;
        case 4:
            $kenh = 4 ;
            break;
        case 5:
            $kenh = 5 ;
            break;
        case 6:
            $kenh= 6 ;
            break;
        case 7:
            $kenh =  7 ;
            break;
        case 8 :
            $kenh = 8 ;
            break;
        case 9:
            $kenh = 9 ;
            break;
    }
}
else {
    $kenh = 1;
}
$kenhtivi =  getkenh($kenh);
?>
<?php
require_once ("getkenh.php");

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
    <style type="text/css">
        .centered {
            text-align: center;
            width: 90%;
            margin: 0 auto;
        }
        span.input-group-btn input.btn.btn-primary {
            font-size: 11px;
            padding: 11px;
        }
        input#url {
            pointer-events: none;
        }
        .btn {
            color: #ffffff !important;
            background: #008cba !important;
            border-color: #0079a1 !important;
        }
        .col-mg-12.video {
            margin-top: 4%;
        }
        #vid_url{
            word-break: break-all;
        }
        ul.icontv {
            padding: 3%;
        }

        ul.icontv li {
            float: left;
            margin-right: 30px;
        }
        a {
            border-bottom: none !important;

        }
    </style>
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
                    <h2>TIVI ONLINE </h2>
                    <h5 style="text-align: right;font-weight: bold;color: #0400ff; margin: 20px 0 20px 0;">Hotline:01672149659 - Email:devqanh@gmail.com</h5>

                    <div class="col-mg-12 video">
                        <div id="streamroot"></div>
                        <script>
                            jwplayer.key = "AC5FBIpaI0yuCOXqb0Vuf6rWuW97tgXs95q9xw==";
                            jwplayer('streamroot').setup({
                                file : "<?php echo $kenhtivi; ?>",
                                p2pConfig : { streamrootKey: 'YOUR_STREAMROOT_KEY' },
                                "height": 600,
                                "width": 1000
                            });
                        </script>
<ul class="icontv">
    <li><a href="?kenh=1"><img src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/1__.png" /></a> </li>
    <li><a href="?kenh=2"><img src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/2__.png" /></a> </li>
    <li><a href="?kenh=3"><img src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/3__.png" /></a> </li>
    <li><a href="?kenh=4"><img src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/4__.png" /></a> </li>
    <li><a href="?kenh=5"><img src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/5__.png" /></a> </li>
    <li><a href="?kenh=6"><img src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/6__.png" /></a> </li>
    <li><a href="?kenh=7"><img src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/27__.png" /></a> </li>
    <li><a href="?kenh=8"><img src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/36__.png" /></a> </li>
    <li><a href="?kenh=9"><img src="http://vtvgo-imgobj.b5695cde.cdnviet.com/images/39__.png" /></a> </li>
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

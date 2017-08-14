<?php
include "gp.php";
$url = 'https://photos.google.com/share/AF1QipO3B04rP7W0RdqCeyDbTzf9hbG9mHGYVNeCCSy86cVZjCNVOEHfC8Z8bBTcBRVMTg/photo/AF1QipOMB2xIHTRf6DkEnYR1TI_1MGLuZbFsJ31R7Vv8?key=eTZhOU15SUQ1anRPVXNZd3FpdzJkUzVpbUozVTN3';
$getGP = getPhotoGoogle($url);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Get link Google Photos</title>
</head>
<body>

<!-- Docs styles -->
<link rel="stylesheet" href="https://cdn.plyr.io/2.0.13/demo.css">
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }
</style>

<div class="container">
    <br/><br/>
    <div id="myElement">Loading...</div>
</div>

<script src="https://content.jwplatform.com/libraries/DbXZPMBQ.js"></script>
<script type="text/javascript">
    jwplayer("myElement").setup({
        playlist: [{
            "sources":<?php echo $getGP?>
        }],
        allowfullscreen: true,
        width: '100%',
        aspectratio: '16:9',
    });
</script>

</body>
</html>
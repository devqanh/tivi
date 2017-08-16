//                            jwplayer.key = "AC5FBIpaI0yuCOXqb0Vuf6rWuW97tgXs95q9xw==";
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
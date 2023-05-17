<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="description" content="<?php echo $sitetitle; ?>">

<link rel="preconnect" href="https://www.thevivanetworks.com">
<link rel="dns-prefetch" href="https://www.thevivanetworks.com" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>
<title><?php echo $sitetitle; ?></title>
<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico" />

<link rel="preload" href="fonts/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16WXh0pg.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/rancak.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" href="img/person-default.png" as="image">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

<style><?php require ($_SERVER['PEMILU'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>

<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
</head>
<body>
<h1 class="hide"><?php echo $sitetitle; ?></h1>
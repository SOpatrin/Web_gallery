<?php
    $URI = $_SERVER["REQUEST_URI"];
    $architecture = "/pages/architecture.php" == $URI ? "Архитектура" : "vl4dmati";
    $models = "/pages/models.php" == $URI ? "Модели" : $architecture;
    $about = "/pages/about.php" == $URI ? "О vl4dmati" : $models;
    $title = "/index.php" == $URI ? "vl4dmati" : $about;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="/reset.css"/>
    <link rel="stylesheet" type="text/css" href="/fonts/opensans/opensans.css"/>
    <link rel="stylesheet" type="text/css" href="/style.css"/>
    <title><?php echo $title ?></title>
    <!--[if lt IE 9]>-->
    <script>
        var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
        for (var i = 0; i < e.length; i++) {
          document.createElement(e[i]);
        }
    </script>
    <!--[endif]-->
</head>
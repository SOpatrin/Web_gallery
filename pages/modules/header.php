<?php
    $URI = $_SERVER["REQUEST_URI"];
    $architecture = "/pages/architecture.php" == $URI ? "#" : "/pages/architecture.php";
    $models = "/pages/models.php" == $URI ? "#" : "/pages/models.php";
    $about = "/pages/about.php" == $URI ? "#" : "/pages/about.php";
    $index = "/index.php" == $URI ? "#" : "/index.php";
?>
<header>
    <img src="/images/favicon.png" alt="vl4dmati">
    <nav class="sidebar">
        <a href=<?php echo $architecture ?>><div class="architecture">архитиктура</div></a><a href=<?php echo $models ?>><div class="models">модели</div></a><a href=<?php echo $about ?>><div class="about">о сайте</div></a><a href=<?php echo $index ?>><div class="head"><h1>vl4dmati</h1></div></a>
    </nav>
</header>
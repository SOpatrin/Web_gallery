<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $head = "$root/pages/modules/head.php";
    $header = "$root/pages/modules/header.php";
    $footer = "$root/pages/modules/footer.php";
?>
<!DOCTYPE html>
<html lang="ru">
<?php
    include_once($head);
?>
<body>
    <!-- header -->
    <?php
        include_once($header);
    ?>
    <!-- /header -->
    <section>
        <nav class="main">
            <p>Вы пришли сюда за рендерами домов?</p>
            <a href="/pages/architecture.php" class="main-menu main-architecture"><p>Больше архитектуры</p></a>
            <p>Или может быть за моделями?</p>
            <a href="/pages/models.php" class="main-menu main-model"><p>Больше моделей</p></a>
            <p>Понравилось?</p>
            <a href="/pages/about.php" class="main-menu main-about"><p>О сайте</p></a>
        </nav>
    </section>
    <?php
        include_once($footer);
    ?>
</body>
</html>
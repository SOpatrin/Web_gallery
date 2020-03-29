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
        <div class="about-main-content">
        <h2>Привет!</h2>
            <p>Вы когда-нибудь задумывались о том, сколько различного разнообразия контента производят пользователи интернета? Сотни картинок, статей, блогов, новостей.</p>
            <p>Всё это, в современных реалиях, имеет возможность распространяться по мировой сети за считаные мгновения. Но как часто вы видите не мемы, а рендеры различных объектов? Должно быть не часто...</p>
            <p>Однако теперь у вас есть возможность лицезреть лучшие работы современных моделлеров во всей красе, добро пожаловть на <b>vl4dmati</b>.</p>
        </div>
    </section>
    <?php
        include_once($footer);
    ?>
</body>
</html>
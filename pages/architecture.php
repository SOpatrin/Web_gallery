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
            <script>
                ;(function() {
                    for ( var i = 0; i <= 15; i++) {
                         
                        let div = document.createElement('div');
                        let img = document.createElement('img');
                        
                        div.className = "main-content";
                        div.innerHTML = "<a href='/source/architecture/" + (i % 5 + 1) + ".jpg' target='_blank'></a>";
                        div.style.backgroundImage = "url(/source/architecture/" + (i % 5 + 1) + ".jpg)";
                        
                        img.className = "print-img";
                        img.src = "/source/architecture/" + (i % 5 + 1) + ".jpg";
                        img.alt = "architecture " + (i % 5 + 1);
                        
                        document.getElementsByTagName('section')[0].appendChild(div);
                        document.getElementsByTagName('section')[0].appendChild(img);
                        
                    }
                }());
            </script>
    </section>
    <?php
        include_once($footer);
    ?>
</body>
</html>
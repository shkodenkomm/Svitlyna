<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "parts/config.php";
    include "parts/main_menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<body>
<head>
    <title>ФотоСерии</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "parts/head_links.php";
            echo $config->gtm["gan_head"];
            echo $config->gtm["gtm_head"];

    ?>

    <link rel="stylesheet" href="/css/series.css">
</head>
<header class ="row">
    <div class="col-1 col-s-0 col-m-0" ><p></p></div>
    <div class="col-10 col-s-12">
        <div class="main_logo">
            <?php
            $menu= new MainMenu();
            $menu->doit();
            ?>
        </div>
    </div>
    <div class="col-1 col-s-0 col-m-0"><p></p></div>
</header>
<main>
    <section class="row off">
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
        <!--  info -->
        <div class="col-8 col-s-12" >
            <article id="main_inforemer" style="background-color: white;white-space: pre-line;">
                <p></p>
            </article>
        </div>
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
    </section >


    <section>
        <div class="col-1 col-s-0 col-m-0"><p></p></div>
        <div class="col-10 col-s-12">
            <section id="tiles">
                <div class="col-6 sr" id="tile1">
                    <div class="sr_image">
                        <a href="/gals/family.php"">
                            <img src="/imgs/series/oksana_mega/2.jpg">
                        </a>
                    </div>
                    <div class="sr_caption">
                        Прогулка в Межигорье
                    </div>
                </div>
                <div class="col-6 sr" id="tile2">
                    <div class="sr_image">
                        <a href="#"">
                            <img src="/imgs/series/stasik_sci/2.jpg">
                        </a>
                    </div>
                    <div class="sr_caption">
                        Стасик-ученый
                    </div>
                </div>
        </div>
        <div class="col-1 col-s-0 col-m-0"><p></p></div>
    </section>
</main>
<script src="/js/slide.js"></script>
</body>
</html>

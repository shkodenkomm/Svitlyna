<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "parts/main_menu.php";
    include "parts/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php
      include "parts/head_links.php";
      echo $config->gtm["gan_head"];
      echo $config->gtm["gtm_head"];
    ?>

    <title>Серии</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/series.css">
    <script src="/js/utils.js"></script>
</head>

<body>
    <header class ="row">
        <div class="col-2 col-s-0 col-m-0" ><p></p></div>
        <div class="col-8 col-s-12">
            <div class="main_logo">
                <?php 
                    $menu= new MainMenu();
                    $menu->doit();                    
                ?>
            </div>
         </div>
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
    </header>
    <main>
        <section>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12">
                <section id="tiles">
                    <div class="seria col-6" id="tile1">
                        <div class="seria_caption col-12">
                            <a href="gals/series/natasha_sasha.php">Наташа и Саша в ожидании чуда</a>
                        </div>
                        <div class="tile_img col-12">
                            <a href="/gals/series/natasha_sasha.php" class="tile_img  col-12">
                                <img src="/imgs/series/natasha_sasha/Natasha_expecting_of_miracle.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="seria col-6" id="tile1">
                        <div class="seria_caption col-12">
                            <a href="gals/series/stasik_sci.php">Стасик-ученый</a>
                        </div>
                        <div >
                            <a href="/gals/series/stasik_sci.php" class="tile_img  col-12">
                                <img src="/imgs/series/stasik_sci/Stasik_scientist.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="seria col-6" id="tile3">
                        <div class="seria_caption col-12">
                            <a href="gals/series/oksana_mega.php">Семейная прогулка в Межигорье</a>
                        </div>
                        <div class="tile_img col-12">
                            <a href="/gals/series/oksana_mega.php" class="tile_img  col-12">
                                <img src="/imgs/series/oksana_mega/OksanaJam_Mejigore.jpg">
                            </a>
                        </div>
                    </div>
                 </section>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>
    </main>
</body>
</html>

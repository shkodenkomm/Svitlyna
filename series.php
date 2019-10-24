<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "parts/main_menu.php";
    include "parts/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  echo $config->gtm["gan_head"];?> 
    <title>Разные фото</title>

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
                    <div class="col-6" id="tile1">
                        <div class="tile_caption col-12">
                            Серия1
                        </div>
                        <div >
                            <a href="/gals/series/stasik_sci.php" class="tile_img  col-12">
                                <img src="/imgs/series/stasik_sci/preview/1_hq.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-6" id="tile2">
                        <div class="tile_caption col-12">
                            Серия 2
                        </div>
                        <div class="tile_img col-12">
                            <a href="/gals/series/oksana_mega.php" class="tile_img  col-12">
                                <img src="/imgs/series/oksana_mega/preview/1_hq.jpg">
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

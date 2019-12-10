<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "parts/head_links.php";
    include "parts/main_menu.php";
    include "parts/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "parts/head_links.php";
    echo $config->gtm["gan_head"];
    echo $config->gtm["gtm_head"];
  ?>
  <title>Фото</title>

  <meta name="description" content="Детский семейный фотограф. Киев">
  <link rel="stylesheet" href="/css/slide_show_main.css">

</head>

<body>
    <?php  include "parts/fbMsgPlugin.php"   ?>
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
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <!-- карусель -->
            <div class="col-8 col-s-12" >
             <?php
                 include  "parts/main_karusel.php";
             ?>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section >
        <section>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12">
                <section id="tiles">
                    <div class="col-6" id="tile1">
                        <div class="tile_caption col-12">
                            СЕМЕЙНАЯ ФОТОСЕССИЯ И ЛАВСТОРИ
                        </div>
                        <div >
                            <a href="/gals/family.php" class="tile_img  col-12">
                                <img src="/imgs/main_cats/IMGP7935_hq_hq.jpg">
                            </a>

                        </div>
                    </div>
                    <div class="col-6" id="tile2">
                        <div class="tile_caption col-12">
                            ДЕТСКАЯ ФОТОСЕССИЯ
                        </div>
                        <div class="tile_img col-12">
                            <a href="/gals/children.php" class="tile_img  col-12">
                                <img src="/imgs/main_cats/IMGP8351_hq_hq.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-6" id="tile3">
                        <div class="tile_caption col-12">
                            ПЕРСОНАЛЬНАЯ ФОТОСЕССИЯ
                        </div>
                        <div class="tile_img col-12">
                            <a href="/gals/personal.php" class="tile_img  col-12">
                                <img src="/imgs/main_cats/IMGP6235_hq_crop_hq.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-6" id="tile4">
                        <div class="tile_caption col-12">
                            ПРОГУЛКА С ЛОШАДЯМИ
                        </div>
                        <div class="tile_img col-12">
                            <a href="/gals/photo_walk_with_horses.php" class="tile_img  col-12">
                                <img src="/imgs/main_cats/IMGP3991_hq_hq.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-6" id="tile5">
                        <div class="tile_caption col-12">
                            ТАИНСТВО КРЕЩЕНИЯ
                        </div>
                        <div class="tile_img col-12">
                            <a href="/gals/crist.php" class="tile_img  col-12">
                                <img src="/imgs/gals/crist/10_a.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-6" id="tile6">
                        <div class="tile_caption col-12">
                            СЕРИИ
                        </div>
                        <div class="tile_img col-12">
                            <a href="/series.php" class="tile_img  col-12">
                                <img src="/imgs/main_cats/stitul.jpg">
                            </a>
                        </div>
                    </div>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>
    </main>
    <script src="/js/slide.js"></script>
</body>
</html>

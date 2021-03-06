<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "parts/head_links.php";
    include "parts/main_menu.php";
    include "parts/config.php";

    echo $config->gtm["gan_head"];
    echo $config->gtm["gtm_head"];
    ?>

    <title>Серии</title>
    <link rel="stylesheet" href="/css/series.css">

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


                <div class="seria col-6 middle_pad" id="tile8">
                    <div class="seria_caption col-12">
                        <a href="gals/series/ng_avto.php">Машина деда Мороза</a>
                    </div>
                    <div class="tile_img col-12">
                        <a href="/gals/series/ng_avto.php" class="tile_img  col-12">
                            <img src="/imgs/series/ng_avto/1.jpg">
                        </a>
                    </div>
                </div>
                <div class="seria col-6" id="tile9">
                    <div class="seria_caption col-12">
                        <a href="gals/series/ng_zoia.php">Новогоднее волшебство</a>
                    </div>
                    <div class="tile_img col-12">
                        <a href="/gals/series/ng_zoia.php" class="tile_img  col-12">
                            <img src="/imgs/series/ng_zoia/2.jpg">
                        </a>
                    </div>
                </div>

                <div class="seria col-6 middle_pad" id="tile7">
                    <div class="seria_caption col-12">
                        <a href="/gals/series/ny_tania.php">Новогодняя история</a>
                    </div>
                    <div class="tile_img col-12">
                        <a href="/gals/series/ny_tania.php" class="tile_img  col-12">
                            <img src="/imgs/series/ny_tania/1.jpg">
                        </a>
                    </div>
                </div>


                <div class="seria col-6" id="tile5">
                    <div class="seria_caption col-12">
                        <a href="gals/series/ny_yulia_nelia.php">А снег идет, а снег идет!</a>
                    </div>
                    <div class="tile_img col-12">
                        <a href="/gals/series/ny_yulia_nelia.php" class="tile_img  col-12">
                            <img src="/imgs/series/ny_yulia_nelia/ti3.jpg">
                        </a>
                    </div>
                </div>

                <div class="seria col-6 middle_pad" id="tile4">
                    <div class="seria_caption col-12">
                        <a href="gals/series/ny_katya.php">Новогодняя сказка</a>
                    </div>
                    <div class="tile_img col-12">
                        <a href="/gals/series/ny_katya.php" class="tile_img  col-12">
                            <img src="/imgs/series/ny_katya/NY_KatiaAleshaStasik.jpg">
                        </a>
                    </div>
                </div>
                <div class="seria col-6" id="tile6">
                    <div class="seria_caption col-12">
                        <a href="gals/series/slavutych_katya.php">Однажды туманным утром</a>
                    </div>
                    <div class="tile_img col-12">
                        <a href="/gals/series/slavutych_katya.php" class="tile_img  col-12">
                            <img src="/imgs/series/slavutych_katya/ti3.jpg">
                        </a>
                    </div>
                </div>

                <div class="seria col-6 middle_pad" id="tile2">
                    <div class="seria_caption col-12">
                        <a href="gals/series/stasik_sci.php">Стасик-ученый</a>
                    </div>
                    <div >
                        <a href="/gals/series/stasik_sci.php" class="tile_img  col-12">
                            <img src="/imgs/series/stasik_sci/Stasik_scientist.jpg">
                        </a>
                    </div>
                </div>
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

                <div class="seria col-6 middle_pad" id="tile3">
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

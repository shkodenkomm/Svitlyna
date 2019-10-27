<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Детский семейный фотограф. Киев">

  <link rel="stylesheet" href="/css/slide_show_main.css">
  <link rel="stylesheet" href="/css/main.css">
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
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <!-- карусель -->
            <div class="col-8 col-s-12" >
                <!-- Slideshow container -->
                <div class="slideshow-container"  onmouseover="showText()"  onmouseout="hideText()">
                    <div class ="d-dot-container" >
                        <div class ="dot-container">
                            <span class="dot" onclick="currentSlide(1)">
                                <img src="/imgs/main_slide/1.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(2)">
                                <img src="/imgs/main_slide/2.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(3)">
                                <img src="/imgs/main_slide/3.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(4)">
                                <img src="/imgs/main_slide/4.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(5)">
                                <img src="/imgs/main_slide/5.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(6)">
                                <img src="/imgs/main_slide/6.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(7)">
                                <img src="/imgs/main_slide/7.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(8)">
                                <img src="/imgs/main_slide/8.jpg" >
                            </span>                     
                            <span class="dot" onclick="currentSlide(9)">
                                <img src="/imgs/main_slide/9.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(10)">
                                <img src="/imgs/main_slide/10.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(11)">
                                <img src="/imgs/main_slide/11.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(12)">
                                <img src="/imgs/main_slide/12.jpg" >
                            </span>
                             <span class="dot" onclick="currentSlide(13)">
                                <img src="/imgs/main_slide/13.jpg" >
                            </span> 
                            <span class="dot" onclick="currentSlide(14)">
                                <img src="/imgs/main_slide/14.jpg" >
                            </span>                     
                        </div>
                    </div>

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/1.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/2.jpg" style="width:100%">
                        <div class="text"></div>
                      </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/3.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/4.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/5.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/6.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/7.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/8.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/9.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/10.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/11.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/12.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/13.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/13.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="/imgs/main_slide/14.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>

                  <!-- Next and previous buttons -->
                  <div class="arrow prev" onclick="plusSlides(-1)">
                      <a>&#10094;</a>
                  </div>
                  <div class="arrow next" onclick="plusSlides(1)">
                      <a>&#10095;</a>
                  </div>              

                <!-- The dots/circles -->
                </div>            
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

<!DOCTYPE html>
<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "../parts/main_menu.php";
    include "../parts/config.php";
?>
<html lang="ru">
<head>
  <?php  echo $config->gtm["gan_head"];
         echo $config->gtm["gtm_head"];
  ?> 
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Таинство крещения</title>

  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/track_gal.css">
  <script src="/js/utils.js"></script>
</head>
<body>
   <?php  echo $config->gtm["gtm_body"]; ?> 
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
  <section class="row root_img">
    <div class="col-2 col-s-0 col-m-0" ><p></p></div>
    <div class="col-8 col-s-12" >

      <!-- The Modal -->
      <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
      </div>

      <div class="row_gal desctop" >
        <div class="column-v4" id="f1">
          <img class="preview" src="/imgs/gals/crist/preview/1_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/5_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/9_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/13_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/17_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/21_a_hq.jpg">
          <img class="preview" src="/imgs/gals/crist/preview/29_a_hq.jpg">


        </div>
        <div class="column-v4" id="f2">
            <img class="preview" src="/imgs/gals/crist/preview/2_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/6_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/10_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/14_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/18_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/22_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/26_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/30_a_hq.jpg">


        </div>
        <div class="column-v4" id="f3">
            <img class="preview" src="/imgs/gals/crist/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/7_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/11_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/15_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/19_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/23_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/27_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/28_a_hq.jpg">
        </div>
          <div class="column-v4" id= "f4">
              <img class="preview" src="/imgs/gals/crist/preview/4_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/8_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/12_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/16_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/20_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/24_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/25_a_hq.jpg">
          </div>
      </div>

      <div class="row_gal tablet" >
        <div class="column-v2" id="t1">
            <img class="preview" src="/imgs/gals/crist/preview/1_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/3_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/5_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/7_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/9_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/11_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/13_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/15_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/17_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/19_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/21_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/23_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/25_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/27_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/28_a_hq.jpg">
            <img class="preview" src="/imgs/gals/crist/preview/30_a_hq.jpg">

        </div>
          <div class="column-v2" id="t2">
              <img class="preview" src="/imgs/gals/crist/preview/2_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/4_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/6_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/8_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/10_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/12_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/14_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/16_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/18_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/20_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/22_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/24_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/26_a_hq.jpg">
              <img class="preview" src="/imgs/gals/crist/preview/29_a_hq.jpg">
          </div>
        </div>

      <div class="row_gal mobile" >
        <div class="column-v" id="m1" > 

        </div>
      </div>
    </div>  
    <div class="col-2 col-s-0 col-m-0" ><p></p></div>  
  </section>
  <script src="/js/img_modal.js"></script>
</body>
</html>
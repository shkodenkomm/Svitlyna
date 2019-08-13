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
  <title>Семейная фотосессия</title>

  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/track_gal.css">
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
          <img class="preview" src="/imgs/gals/family/preview/1_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/5_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/9_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/13_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/17_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/21_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/25_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/29_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/33_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/37_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/41_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/45_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/35_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/49_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/53_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/57_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/61_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/65_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/69_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/72_s.jpg">
        </div>
        <div class="column-v4" id="f2">
          <img class="preview" src="/imgs/gals/family/preview/2_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/6_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/10_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/14_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/18_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/22_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/26_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/47_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/30_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/34_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/46_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/36_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/40_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/51_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/50_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/58_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/62_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/66_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/73_s.jpg">
        </div>
        <div class="column-v4" id="f3">
          <img class="preview" src="/imgs/gals/family/preview/3_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/7_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/11_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/23_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/27_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/43_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/39_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/38_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/42_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/44_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/32_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/55_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/54_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/59_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/63_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/67_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/71_f.jpg">
          <img class="preview" src="/imgs/gals/family/preview/74_s.jpg">
        </div>
        <div class="column-v4" id= "f4">
          <img class="preview" src="/imgs/gals/family/preview/4_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/8_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/12_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/15_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/16_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/19_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/24_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/20_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/48_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/31_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/28_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/52_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/56_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/60_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/64_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/68_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/70_f.jpg">
        </div> 
      </div>

      <div class="row_gal tablet" >
        <div class="column-v2" id="t1">
          <img class="preview" src="/imgs/gals/family/preview/1_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/5_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/2_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/6_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/9_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/13_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/17_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/10_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/14_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/18_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/22_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/21_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/25_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/26_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/47_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/46_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/40_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/36_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/30_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/34_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/29_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/33_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/37_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/41_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/45_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/35_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/49_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/53_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/51_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/50_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/57_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/61_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/65_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/69_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/58_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/62_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/66_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/72_s.jpg">
          <img class="preview" src="/imgs/gals/family/preview/74_s.jpg">
          
        </div>
        <div class="column-v2" id="t2">
          <img class="preview" src="/imgs/gals/family/preview/3_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/7_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/4_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/8_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/11_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/12_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/15_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/16_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/19_б.jpg">
          <img class="preview" src="/imgs/gals/family/preview/24_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/20_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/23_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/27_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/48_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/31_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/28_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/43_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/39_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/38_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/42_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/44_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/32_ю.jpg">
          <img class="preview" src="/imgs/gals/family/preview/52_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/56_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/55_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/54_с.jpg">
          <img class="preview" src="/imgs/gals/family/preview/59_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/63_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/67_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/60_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/64_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/68_о.jpg">
          <img class="preview" src="/imgs/gals/family/preview/70_f.jpg">
          <img class="preview" src="/imgs/gals/family/preview/71_f.jpg">
          <img class="preview" src="/imgs/gals/family/preview/73_s.jpg">
          </div>
        </div>

      <div class="row_gal mobile" >
        <div class="column-v" id="m1" > 
          <img class="preview" src="/imgs/gals/family/preview/1_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/2_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/3_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/4_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/5_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/6_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/7_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/8_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/9_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/10_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/11_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/12_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/13_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/14_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/15_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/16_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/17_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/18_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/19_б.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/20_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/21_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/22_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/23_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/24_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/25_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/26_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/27_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/28_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/29_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/30_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/31_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/32_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/33_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/34_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/35_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/36_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/37_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/38_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/39_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/40_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/41_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/42_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/43_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/44_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/45_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/46_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/47_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/48_ю.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/49_с.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/50_с.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/51_с.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/52_с.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/53_с.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/54_с.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/55_с.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/56_с.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/57_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/58_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/59_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/60_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/61_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/62_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/63_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/64_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/65_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/66_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/67_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/68_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/69_о.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/70_f.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/71_f.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/72_s.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/73_s.jpg" alt="">
          <img class="preview" src="/imgs/gals/family/preview/74_s.jpg" alt="">
        </div>
      </div>
    </div>  
    <div class="col-2 col-s-0 col-m-0" ><p></p></div>  
  </section>
  <script src="/js/img_modal.js"></script>
</body>
</html>
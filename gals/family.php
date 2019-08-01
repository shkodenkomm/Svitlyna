<!DOCTYPE html>
<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "../parts/main_menu.php";
?>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Семейная фотосессия</title>

  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/track_gal.css">
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
  <section class="row">
    <div class="col-2 col-s-0 col-m-0" ><p></p></div>
    <div class="col-8 col-s-12" >
      <div class="row_gal desctop" >
        <div class="column-v4" id="f1">
          <img src="/imgs/gals/family/preview/1_б_hq.jpg">
          <img src="/imgs/gals/family/preview/5_б_hq.jpg">
          <img src="/imgs/gals/family/preview/9_б_hq.jpg">
          <img src="/imgs/gals/family/preview/13_б_hq.jpg">
          <img src="/imgs/gals/family/preview/17_б_hq.jpg">
          <img src="/imgs/gals/family/preview/21_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/25_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/29_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/33_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/37_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/41_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/45_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/35_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/49_с_hq.jpg">
          <img src="/imgs/gals/family/preview/53_с_hq.jpg">
          <img src="/imgs/gals/family/preview/57_о_hq.jpg">
          <img src="/imgs/gals/family/preview/61_о_hq.jpg">
          <img src="/imgs/gals/family/preview/65_о_hq.jpg">
          <img src="/imgs/gals/family/preview/69_о_hq.jpg">
          <img src="/imgs/gals/family/preview/72_S_hq.jpg">
          <img src="/imgs/gals/family/preview/73_S_hq.jpg">
        </div>
        <div class="column-v4" id="f2">
          <img src="/imgs/gals/family/preview/2_б_hq.jpg">
          <img src="/imgs/gals/family/preview/6_б_hq.jpg">
          <img src="/imgs/gals/family/preview/10_б_hq.jpg">
          <img src="/imgs/gals/family/preview/14_б_hq.jpg">
          <img src="/imgs/gals/family/preview/18_б_hq.jpg">
          <img src="/imgs/gals/family/preview/22_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/26_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/47_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/30_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/34_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/46_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/36_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/40_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/51_с_hq.jpg">
          <img src="/imgs/gals/family/preview/50_с_hq.jpg">
          <img src="/imgs/gals/family/preview/58_о_hq.jpg">
          <img src="/imgs/gals/family/preview/62_о_hq.jpg">
          <img src="/imgs/gals/family/preview/66_о_hq.jpg">
          <img src="/imgs/gals/family/preview/74_S_hq.jpg">
        </div>
        <div class="column-v4" id="f3">
          <img src="/imgs/gals/family/preview/3_б_hq.jpg">
          <img src="/imgs/gals/family/preview/7_б_hq.jpg">
          <img src="/imgs/gals/family/preview/11_б_hq.jpg">
          <img src="/imgs/gals/family/preview/23_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/27_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/43_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/39_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/38_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/42_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/44_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/32_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/55_с_hq.jpg">
          <img src="/imgs/gals/family/preview/54_с_hq.jpg">
          <img src="/imgs/gals/family/preview/59_о_hq.jpg">
          <img src="/imgs/gals/family/preview/63_о_hq.jpg">
          <img src="/imgs/gals/family/preview/67_о_hq.jpg">
          <img src="/imgs/gals/family/preview/71_f_hq.jpg">
        </div>
        <div class="column-v4" id= "f4">
          <img src="/imgs/gals/family/preview/4_б_hq.jpg">
          <img src="/imgs/gals/family/preview/8_б_hq.jpg">
          <img src="/imgs/gals/family/preview/12_б_hq.jpg">
          <img src="/imgs/gals/family/preview/15_б_hq.jpg">
          <img src="/imgs/gals/family/preview/16_б_hq.jpg">
          <img src="/imgs/gals/family/preview/19_б_hq.jpg">
          <img src="/imgs/gals/family/preview/24_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/20_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/48_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/31_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/28_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/52_с_hq.jpg">
          <img src="/imgs/gals/family/preview/56_с_hq.jpg">
          <img src="/imgs/gals/family/preview/60_о_hq.jpg">
          <img src="/imgs/gals/family/preview/64_о_hq.jpg">
          <img src="/imgs/gals/family/preview/68_о_hq.jpg">
          <img src="/imgs/gals/family/preview/70_f_hq.jpg">
        </div> 
      </div>

      <div class="row_gal tablet" >
        <div class="column-v2" id="t1">
          <img src="/imgs/gals/family/preview/1_б_hq.jpg">
          <img src="/imgs/gals/family/preview/5_б_hq.jpg">
          <img src="/imgs/gals/family/preview/2_б_hq.jpg">
          <img src="/imgs/gals/family/preview/6_б_hq.jpg">
          <img src="/imgs/gals/family/preview/9_б_hq.jpg">
          <img src="/imgs/gals/family/preview/13_б_hq.jpg">
          <img src="/imgs/gals/family/preview/17_б_hq.jpg">
          <img src="/imgs/gals/family/preview/10_б_hq.jpg">
          <img src="/imgs/gals/family/preview/14_б_hq.jpg">
          <img src="/imgs/gals/family/preview/18_б_hq.jpg">
          <img src="/imgs/gals/family/preview/22_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/21_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/25_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/26_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/47_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/46_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/40_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/36_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/30_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/34_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/29_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/33_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/37_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/41_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/45_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/35_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/49_с_hq.jpg">
          <img src="/imgs/gals/family/preview/53_с_hq.jpg">
          <img src="/imgs/gals/family/preview/51_с_hq.jpg">
          <img src="/imgs/gals/family/preview/50_с_hq.jpg">
          <img src="/imgs/gals/family/preview/57_о_hq.jpg">
          <img src="/imgs/gals/family/preview/61_о_hq.jpg">
          <img src="/imgs/gals/family/preview/65_о_hq.jpg">
          <img src="/imgs/gals/family/preview/69_о_hq.jpg">
          <img src="/imgs/gals/family/preview/58_о_hq.jpg">
          <img src="/imgs/gals/family/preview/62_о_hq.jpg">
          <img src="/imgs/gals/family/preview/66_о_hq.jpg">
          <img src="/imgs/gals/family/preview/72_S_hq.jpg">
          <img src="/imgs/gals/family/preview/74_S_hq.jpg">
          
        </div>
        <div class="column-v2" id="t2">
          <img src="/imgs/gals/family/preview/3_б_hq.jpg">
          <img src="/imgs/gals/family/preview/7_б_hq.jpg">
          <img src="/imgs/gals/family/preview/4_б_hq.jpg">
          <img src="/imgs/gals/family/preview/8_б_hq.jpg">
          <img src="/imgs/gals/family/preview/11_б_hq.jpg">
          <img src="/imgs/gals/family/preview/12_б_hq.jpg">
          <img src="/imgs/gals/family/preview/15_б_hq.jpg">
          <img src="/imgs/gals/family/preview/16_б_hq.jpg">
          <img src="/imgs/gals/family/preview/19_б_hq.jpg">
          <img src="/imgs/gals/family/preview/24_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/20_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/23_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/27_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/48_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/31_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/28_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/43_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/39_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/38_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/42_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/44_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/32_ю_hq.jpg">
          <img src="/imgs/gals/family/preview/52_с_hq.jpg">
          <img src="/imgs/gals/family/preview/56_с_hq.jpg">
          <img src="/imgs/gals/family/preview/55_с_hq.jpg">
          <img src="/imgs/gals/family/preview/54_с_hq.jpg">
          <img src="/imgs/gals/family/preview/59_о_hq.jpg">
          <img src="/imgs/gals/family/preview/63_о_hq.jpg">
          <img src="/imgs/gals/family/preview/67_о_hq.jpg">
          <img src="/imgs/gals/family/preview/60_о_hq.jpg">
          <img src="/imgs/gals/family/preview/64_о_hq.jpg">
          <img src="/imgs/gals/family/preview/68_о_hq.jpg">
          <img src="/imgs/gals/family/preview/70_f_hq.jpg">
          <img src="/imgs/gals/family/preview/71_f_hq.jpg">
          <img src="/imgs/gals/family/preview/73_S_hq.jpg">
          </div>
        </div>

      <div class="row_gal mobile" >
        <div class="column-v" id="m1" > 

          <img src="/imgs/gals/family/preview/1_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/2_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/3_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/4_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/5_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/6_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/7_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/8_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/9_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/10_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/11_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/12_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/13_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/14_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/15_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/16_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/17_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/18_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/19_б_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/20_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/21_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/22_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/23_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/24_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/25_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/26_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/27_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/28_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/29_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/30_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/31_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/32_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/33_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/34_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/35_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/36_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/37_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/38_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/39_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/40_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/41_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/42_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/43_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/44_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/45_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/46_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/47_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/48_ю_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/49_с_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/50_с_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/51_с_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/52_с_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/53_с_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/54_с_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/55_с_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/56_с_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/57_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/58_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/59_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/60_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/61_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/62_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/63_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/64_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/65_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/66_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/67_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/68_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/69_о_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/70_f_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/71_f_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/72_S_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/73_S_hq.jpg" alt="">
          <img src="/imgs/gals/family/preview/74_S_hq.jpg" alt="">
        </div>
      </div>




    </div>  
    <div class="col-2 col-s-0 col-m-0" ><p></p></div>  
  </section>
</body>
</html>
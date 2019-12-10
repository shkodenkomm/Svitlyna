<?php
     include  "parts/objects/KaruselGenerator.php";
     $kg = new KaruselGenerator("/imgs/main_slide/");
?>

<div class="slideshow-container"  onmouseover="showText()"  onmouseout="hideText()">
        <div class ="d-dot-container" >
            <div class ="dot-container">

                <?php
                    for($i = 0; $i<count($kg->imgFiles)-1;++$i)
                    echo '
                        <span class="dot" onclick="currentSlide('.($i+1).')">
                            <img src="'.$kg->imgPath.$kg->imgFiles[$i].'" >
                        </span>
                        ';
                ?>

            </div>
        </div>

        <?php
            foreach ($kg->imgFiles as $f){
            echo  '
                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="'.$kg->imgPath.$f.'" style="width:100%">
                    <div class="text"></div>
                </div>
                ';
            }

        ?>


      <!-- Next and previous buttons -->
      <div class="arrow prev" onclick="plusSlides(-1)">
          <a>&#10094;</a>
      </div>
      <div class="arrow next" onclick="plusSlides(1)">
          <a>&#10095;</a>
      </div>

</div>

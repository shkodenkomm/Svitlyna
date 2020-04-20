<?php
    function insertCart(
        $link,$linkImg,$title,
        $article="",
        $linkText="",
        $cssFile="",
        $classCol="col-6 col-s-6"

    ){
        echo '
        <div class="cart '.$classCol.'">
            <div class="cart_img" >
                <a href="'.$link.'" class="cart_img_title"  col-12">
                <div> 
                        <img src="'.$linkImg.'">
                </div>
                </a>
            </div>
            <div class="blok">
                <div class="cart_title">
                    <div><h2><i>'.$title.'</i></h2></div>
                </div>
            
                <div class="cart_article">
                    <div>'.$article.'</div>
                </div>           
                <div class="cart_link">
                   <i><a href="'.$link.'">'.$linkText.'</a></i>
                </div>
            </div>
        
        </div>
        ';
    }

    function insertCarts(){

        echo '
        <link rel="stylesheet" href="/css/cart.css">
        ';

        insertCart("/gals/series/ng_avto.php",
            "/imgs/main_cats/personal.jpg",
            "Персональная фотосессия",
            "Это вид сьемки, цель которой подчеркнуть индивидуальность главного героя (мужчины или женщины), показать его красоту, уникальность, стиль.",
            "Подробнее");

        insertCart("/gals/series/ng_avto.php",
            "/imgs/main_cats/children_small.png",
            "Детская фотосессия",
            "Главный герой этой сьемки один ребенок или несколько детей. Детская фотосессия — это безграничное поле для фантазий и творчества.",
            "Подробнее");

        insertCart("/gals/series/ng_avto.php",
            "/imgs/main_cats/family.jpg",
            "Семейная фотосессия",
            "Этот вариант лучше всего подходит семьям, у которых есть дети. Цель сьемки запечатлеть взаимодействие между всеми членами семьи",
            "Подробнее");


        insertCart("/gals/series/ng_avto.php",
            "/imgs/main_cats/pregant_small.png",
            "Фотосессия беременности",
            "Это самый нежный, трогательный вид фотосессии, в котором главной героиней выступает будущая мама.",
            "Подробнее");


        insertCart("/gals/series/ng_avto.php",
            "/imgs/main_cats/love_story.jpg",
            "Love story",
            "Это фотосессия для влюбленной пары. Он и она главные и единственные герои этой самой романтичной сьемки.",
            "Подробнее");


        insertCart("/gals/series/ng_avto.php",
            "/imgs/main_cats/animals_small.png",
            "Фотосессия с лошадями ",
            "Фото прогулка с лошадями подходит людям, которые любят этих прекрасных животных, катание верхом и прогулки на природе.",
            "Подробнее");

        insertCart("/gals/series/ng_avto.php",
            "/imgs/main_cats/motherdother.jpg",
            "Фотосессия мама и дочка",
            "Идеальный вариант фотосессии для мамы с дочкой. Является вариантом семейной фотосессии, но весь фокус направлен на отношения мамы с дочкой, отражение их любви, ласки, заботы.",
            "Подробнее");

        insertCart("/gals/series/ng_avto.php",
            "/imgs/main_cats/crist_small.png",
            "Съемка крестин (таинства крещения)",
            "Фотосъемка крещения — это фото фиксация одного из самых важных церковных таинств, таинства крещения, которое проводиться раз в жизни.",
            "Подробнее");
    }
?>



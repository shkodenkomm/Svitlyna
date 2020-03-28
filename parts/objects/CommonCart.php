<?php
    function insertCart(
        $link,$linkImg,$title,
        $article="",
        $linkText="",
        $cssFile="/css/cart.css",
        $classCol="col-6"

    ){
        echo '
        <link rel="stylesheet" href="'.$cssFile.'">
        <div class="cart '.$classCol.'">
            <div class="cart_img" >
                <a href="'.$link.'" class="cart_img_title"  col-12">
                <img src="'.$linkImg.'">
                </a>
            </div>
        
            <div class="cart_title">
                <div>'.$title.'</div>
            </div>
        
            <div class="cart_article">
                <div>'.$article.'</div>
            </div>
        
            <div class="cart_link">
                <a href="'.$link.'">'.$linkText.'</a>
            </div>
        
        
        </div>
        ';
    }
?>



<?php

    include "../parts/common_gallery/CommonGallery.php";

    $gl = new CommonGallery(pathinfo(__FILE__, PATHINFO_FILENAME));
    $gl->pageTitle = "Super Puper Gallery";

    include "../parts/common_gallery.php"
?>

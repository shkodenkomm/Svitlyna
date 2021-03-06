<?php

class MainMenu{


    private $menu_html;
    private $logo_container;
    private $nav_container;
    private $style;

    function __construct()
    {
        $this->style[] = '<link rel="stylesheet" href="/css/top_nav.css">';
        $this->style[] = '<link rel="stylesheet" href="/css/drop_down.css">';

        $this->logo_container =
            '<div class="logo_container">'.
            '<img src="/imgs/logo.png" alt="PIG">
            </div>';

        $this->nav_container =
             '<div class=nav_container>  
                <nav class="topnav">  
                    <a class="nav-link" href="/">ГЛАВНАЯ</a>
                    <p>/</p>
                    <div class="dropdown" id="menu1">
                        <a class="dropbtn nav-link" href="#" onclick="toogleMenu(\'menu1\')">&nbsp;&nbsp;ПОРТФОЛИО&nbsp;&nbsp;</a>
                        <div class="dropdown-content">
                            <a href="/gals/family.php">Семейная фотосессия</a>
                            <a href="/gals/children.php">Детская фотосессия</a>
                            <a href="/gals/personal.php">Персональная фотосессия</a>
                            <a href="/gals/photo_walk_with_horses.php">Фотосессия с лошадями</a>
                            <a href="/gals/crist.php">Таинство крещения</a>
                        </div>
                    </div>
                    <p>/</p>
                    <a class="nav-link" href="/series.php">СЕРИИ</a>
                    <p>/</p>
                    <a style="color: grey" class="nav-link" href="#">СТАТЬИ</a>
                    <p>/</p>  
                    <a class="nav-link" href="/contacts.php">ОБО МНЕ</a>
                </nav>
             </div>';
    }

    function doit(){

        $this->menu_html = $this->style[0].$this->style[1].$this->logo_container.$this->nav_container;


        echo $this->menu_html;
    }
}

?>

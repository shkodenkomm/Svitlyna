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
            '<div class="logo_container">
                <span class="photoname">ЕЛЕНА ХОМЕНКО</span>
                <span class="palochka">&nbsp;&nbsp;|</span>
                <span>&nbsp;&nbsp;Фотограф Киев</span>
            </div>';

        $this->nav_container =
             '<div class=nav_container>  
                <nav class="topnav">  
                    <a class="nav-link" href="/">Главная</a>
                    <span>/</span>
                    <div class="dropdown" id="menu1">
                        <a class="dropbtn nav-link" href="#" onclick="toogleMenu(\'menu1\')">Портфолио</a>
                        <div class="dropdown-content">
                            <a href="/gals/personal.php">Персональная фотосессия</a>
                            <a href="/gals/children.php">Детская фотосессия</a>
                            <a href="/gals/family.php">Семейная фотосессия</a>
                            <a href="/gals/series/natasha_sasha.php">Фотосессия беременности</a>
                            <a href="/gals/series/love_story.php">Love story</a>
                            <a href="/gals/photo_walk_with_horses.php">Фотосессия с лошадями</a>
                            <a href="/gals/series/mother_doter.php">Фотосессия мама и дочка</a>
                            <a href="/gals/crist.php">Съемка крестин</a>
                            
                        </div>
                    </div>
                    <span>/</span>
                    <a class="nav-link" href="/series.php">Серии</a>
                    <span>/</span>
                    <a class="nav-link" href="/contacts.php">Контакты</a>
                </nav>
             </div>';
    }

    function doit(){

        $this->menu_html = $this->style[0].$this->style[1].$this->logo_container.$this->nav_container;


        echo $this->menu_html;
    }
}

?>

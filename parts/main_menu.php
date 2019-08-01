<?php

class MainMenu{


    private $menu_html;

    function __construct()
    {
        $this->menu_html = 
            '<link rel="stylesheet" href="/css/top_nav.css">
            <link rel="stylesheet" href="/css/drop_down.css">
            <div class="logo_container">
                <img src="/imgs/Cool-Text.png" alt="PIG">
             </div>          
             <div class=nav_container>  
                <nav class="topnav">  
                    <a class="nav-link" href="/">ГЛАВНАЯ</a>
                    <p>/</p>
                    <div class="dropdown" id="menu1">
                        <a class="dropbtn nav-link" href="#" onclick="toogleMenu(\'menu1\')">&nbsp;&nbsp;ПОРТФОЛИО&nbsp;&nbsp;</a>
                        <div class="dropdown-content">
                            <a href="/gals/family.php">Семейная фотосессия</a>
                            <a href="#">Детская фотосессия</a>
                            <a href="#">Портретная фотосессия</a>
                            <a href="#">Фотосессия с животными</a>
                        </div>
                    </div>
                    <p>/</p>
                    <a class="nav-link" href="#">УСЛУГИ</a>
                    <p>/</p>
                    <a class="nav-link" href="#">СЕРИИ</a>
                    <p>/</p>
                    <a class="nav-link" href="#">СТАТЬИ</a>
                    <p>/</p>  
                    <a class="nav-link" href="#">ОБО МНЕ</a>
                </nav>
             </div>';
    } 

    function doit(){

       echo $this->menu_html;
    }
}

?>
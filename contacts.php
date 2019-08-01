<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "parts/main_menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Контакты</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/contacts.css">
    <script src="/js/utils.js"></script>
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
    <main>
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12 serv-box" ><p></p></div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>
              
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12" >
               <section name="services">
                    <div class="col-4 serv-box">
                        <p>kuku</p>
                    </div>
                    <div class="col-4 serv-box">
                        <p>kuku</p>
                    </div>
                    <div class="col-4 serv-box">
                        <p>kuku</p>
                    </div>                   
               </section>         
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section >
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12 serv-box" ><p></p></div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>        
    </main>
</body>
</html>

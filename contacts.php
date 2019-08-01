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
        <section class="row ">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12 services" style="border-bottom: 2px solid grey" ><p></p></div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>
              
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12" >
               <section class="services row">
                    <div class="col-4 serv-box">
                        <article name="business">
                            <div class="serv-caption" >
                                <p>пакет</p>
                                <p>BUSINESS*</p>
                            </div>
                            <div class="serv-price">
                                <p>1000ГРН/1500ГРН</p>
                            </div>                            
                            <div class="serv-details">
                                <dl>
                                    <dt>
                                        <p>ДЛИТЕЛЬНОСТЬ ФОТОСЬЕМКИ</p>
                                        <p>1 час/2 часа</p>
                                    </dt>
                                    <dt>
                                        <p>КОЛИЧЕСТВО ФОТО(ЗА ЧАС)</p>
                                        <p>100-150 фото в цветокоррекции</p>
                                        <p>15 фото с ретушью кожи</p>
                                    </dt>
                                    <dt>
                                        <p>ФОТОСТУДИИ</p>
                                        <p>Акция действует только на фотостудии fotovosion.ua и Желтый кролик </p>
                                    </dt>
                                    <dt>
                                        <p>СРОК ГОТОВНОСТИ ФОТО</p>
                                        <p>7-10 дней</p>
                                    </dt>
                                    <dt>
                                        <p>СПОСОБ ПОЛУЧЕНИЯ ФОТО</p>
                                        <p>Вы можете получить фото через интернет(файлообменник) или на флешку</p>
                                    </dt>
                                    <dt>
                                        <p>ПРЕДВАРИТЕЛЬНАЯ КОНСУЛЬТАЦИЯ</p>
                                        <p>Отвечу на все вопросы</p>
                                    </dt>
                                </dl>
                            </div>
                        </article>
                    </div> 
                    <div class="col-4 serv-box">
                        <article name="light">
                            <div class="serv-caption" >
                                <p>пакет</p>
                                <p>LIGHT</p>
                            </div>
                            <div class="serv-price">
                                <p>1500ГРН</p>
                            </div>                            
                            <div class="serv-details">
                                <dl>
                                    <dt>
                                        <p>ДЛИТЕЛЬНОСТЬ ФОТОСЬЕМКИ</p>
                                        <p>1 час</p>
                                    </dt>
                                    <dt>
                                        <p>КОЛИЧЕСТВО ФОТО</p>
                                        <p>100-150 фото в цветокоррекции</p>
                                        <p>20 фото с ретушью кожи</p>
                                    </dt>
                                    <dt>
                                        <p>КОЛИЧЕСТВО ОБРАЗОВ</p>
                                        <p style="margin-bottom: 2rem;">1-2 образа</p>

                                    </dt>
                                    <dt>
                                        <p>СРОК ГОТОВНОСТИ ФОТО</p>
                                        <p>7-10 дней</p>
                                    </dt>
                                    <dt>
                                        <p>СПОСОБ ПОЛУЧЕНИЯ ФОТО</p>
                                        <p>Вы можете получить фото через интернет(файлообменник) или на флешку</p>
                                    </dt>
                                    <dt>
                                        <p>ПРЕДВАРИТЕЛЬНАЯ КОНСУЛЬТАЦИЯ</p>
                                        <p>Помощь с подбором одежды и локации для фотосессии</p>
                                    </dt>
                                </dl>
                            </div>
                        </article>
                    </div>
                    <div class="col-4 serv-box">
                        <article name="optimum">
                            <div class="serv-caption" >
                                <p>пакет</p>
                                <p>OPTIMUM</p>
                            </div>
                            <div class="serv-price">
                                <p>2200ГРН</p>
                            </div>                            
                            <div class="serv-details">
                                <dl>
                                    <dt>
                                        <p>ДЛИТЕЛЬНОСТЬ ФОТОСЬЕМКИ</p>
                                        <p>2 часа</p>
                                    </dt>
                                    <dt>
                                        <p>КОЛИЧЕСТВО ФОТО</p>
                                        <p>150-200 фото в цветокоррекции</p>
                                        <p>40 фото с ретушью кожи</p>
                                    </dt>
                                    <dt>
                                        <p>КОЛИЧЕСТВО ОБРАЗОВ</p>
                                        <p style="margin-bottom: 2rem;">2-5 образов</p>

                                    </dt>
                                    <dt>
                                        <p>СРОК ГОТОВНОСТИ ФОТО</p>
                                        <p>7-10 дней</p>
                                    </dt>
                                    <dt>
                                        <p>СПОСОБ ПОЛУЧЕНИЯ ФОТО</p>
                                        <p>Вы можете получить фото через интернет(файлообменник) или на флешку</p>
                                    </dt>
                                    <dt>
                                        <p>ПРЕДВАРИТЕЛЬНАЯ КОНСУЛЬТАЦИЯ</p>
                                        <p>Помощь с подбором одежды и локации для фотосессии</p>
                                    </dt>
                                </dl>
                            </div>
                        </article>
                    </div>                      
               </section>         
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section >
        
        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12 services" >
                <div style="display: flex;">
                    <hr/>
                    <div style="margin:auto; white-space: nowrap;">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</div>
                    <hr/>
                </div>
                <article style="white-space: pre-wrap;">Много 
                   неформатированого 
                   текста
                </article>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>        
    </main>
</body>
</html>

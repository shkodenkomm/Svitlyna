<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "parts/main_menu.php";
    include "parts/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  echo $config->gtm["gan_head"];?> 
    <title>Услуги</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/services.css">
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
        <section class="row desctop">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="col-8 col-s-12" >
                <section class="services row">
                    <div class="col-4 serv-box">
                        <article name="light_caption">
                            <div class="serv-caption" >
                                <p>Light</p>
                            </div>
                        </article>
                        <article name="light">
                            <div class="serv-details">
                                <dl>
                                    <dt>
                                        <p>1 час фотосъемки</p>
                                    </dt>
                                    <dt>
                                        <p>1 образ</p>
                                    </dt>
                                    <dt>
                                        <p>помощь с созданием образа, выбором локации, сценарием, позированием</p>
                                    </dt>
                                    <dt>
                                        <p>5 лучших фото в авторской художественной обработке, выбранные вами</p>
                                    </dt>
                                    <dt>
                                        <p>около 100 фото в базовой обработке (свето- и цвето- коррекция, кадрирование)</p>
                                    </dt>
                                    <dt>
                                        <p> - </p>
                                    </dt>
                                    <dt>
                                        <p> - </p>
                                    </dt>
                                    <dt>
                                        <p>срок изготовления фото до 2 недель</p>
                                    </dt>
                                    <dt>
                                        <div class="serv-price">
                                            <p>СТОИМОСТЬ</p>
                                            <p>при разрешении использовать фото для портфолио 1000 грн; конфиденциальной съемки 1500 грн</p>
                                        </div>
                                    </dt>
                                </dl>
                            </div>
                        </article>
                    </div>
                    <div class="col-4 serv-box">
                        <article name="optimum_caption">
                            <div class="serv-caption" >
                                <p>Optimum</p>
                            </div>
                        </article>
                        <article name="optimum">
                            <div class="serv-details">
                                <dl>
                                    <dt>
                                        <p>2 часа фотосьемки</p>
                                    </dt>
                                    <dt>
                                        <p>2 образа</p>
                                    </dt>
                                    <dt>
                                        <p>помощь с созданием образа, выбором локации, сценарием, позированием</p>
                                    </dt>
                                    <dt>
                                        <p>20 лучших фото в авторской художественной обработке, выбранные вами</p>
                                    </dt>
                                    <dt>
                                        <p>все удачные фото в базовой обработке (свето- и цвето- коррекция, кадрирование);</p>
                                    </dt>
                                    <dt>
                                        <p>фото книга 23х23 см на 10 разворотов;</p>
                                    </dt>
                                    <dt>
                                        <p> - </p>
                                    </dt>
                                    <dt>
                                        <p>срок изготовления фото в электронном виде до 2 недель, изготовление фотокниги до 3,5 недель</p>
                                    </dt>
                                    <dt>
                                        <div class="serv-price">
                                            <p>СТОИМОСТЬ</p>
                                            <p>при разрешении использовать фото для портфолио 1800 грн;  конфиденциальной съемки 2300 грн</p>
                                        </div>
                                    </dt>
                                </dl>
                            </div>
                        </article>
                    </div>
                    <div class="col-4 serv-box">
                        <article name="optimum_caption">
                            <div class="serv-caption" >
                                <p>Premium</p>
                            </div>
                        </article>
                        <article name="premium">
                            <div class="serv-details">
                                <dl>
                                    <dt>
                                        <p>2 -2,5 часа фотосьемки</p>
                                    </dt>
                                    <dt>
                                        <p>2 -3 образа</p>
                                    </dt>
                                    <dt>
                                        <p>помощь с созданием образа, выбором локации, сценарием, позированием</p>
                                    </dt>
                                    <dt>
                                        <p>30 лучших фото в авторской художественной обработке, выбранные вами на флешке;</p>
                                    </dt>
                                    <dt>
                                        <p>все удачные фото в базовой обработке (свето- и цвето- коррекция, кадрирование);</p>
                                    </dt>
                                    <dt>
                                        <p>фото книга 23х23 см на 15 разворотов;</p>
                                    </dt>
                                    <dt>
                                        <p>укладка и макияж</p>
                                    </dt>
                                    <dt>
                                        <p>срок изготовления фото в электронном виде до 2 недель, изготовление фотокниги до 3,5 недель</p>
                                    </dt>
                                    <dt>
                                        <div class="serv-price">
                                            <p>СТОИМОСТЬ</p>
                                            <p>договорная в зависимости от запроса, при разрешении использовать фото для портфолио скидка 30%</p>
                                        </div>
                                    </dt>
                                </dl>
                            </div>
                        </article>
                    </div>
                </section>
                <section class="services row">
                    <article class="additional_info">
                        <p>Дополнительная информация</p>
                    </article>
                </section>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section >
        <section class="row mobile">
            <div >
                <section class="services row">
                    <div class="col-4 serv-box">
                        <article name="light">
                            <div class="serv-caption" >
                                <p>Light</p>
                                <div class="serv-price">
                                    <p>СТОИМОСТЬ</p>
                                    <p>при разрешении использовать фото для портфолио 1000 грн; конфиденциальной съемки 1500 грн</p>
                                </div>
                            </div>
                            <div>Детали</div>
                            <div class="serv-details">
                                <dl>
                                    <dt>
                                        <p>1 час фотосъемки</p>
                                    </dt>
                                    <dt>
                                        <p>1 образ</p>
                                    </dt>
                                    <dt>
                                        <p>помощь с созданием образа, выбором локации, сценарием, позированием</p>
                                    </dt>
                                    <dt>
                                        <p>5 лучших фото в авторской художественной обработке, выбранные вами</p>
                                    </dt>
                                    <dt>
                                        <p>около 100 фото в базовой обработке (свето- и цвето- коррекция, кадрирование)</p>
                                    </dt>
                                    <dt>
                                        <p> - </p>
                                    </dt>
                                    <dt>
                                        <p> - </p>
                                    </dt>
                                    <dt>
                                        <p>срок изготовления фото до 2 недель</p>
                                    </dt>
                                </dl>
                            </div>
                        </article>
                    </div>
                    <div class="col-4 serv-box">
                        <article name="optimum_caption">
                            <div class="serv-caption" >
                                <p>Optimum</p>
                            </div>
                        </article>
                        <article name="optimum">
                            <div class="serv-details">
                                <dl>
                                    <dt>
                                        <p>2 часа фотосьемки</p>
                                    </dt>
                                    <dt>
                                        <p>2 образа</p>
                                    </dt>
                                    <dt>
                                        <p>помощь с созданием образа, выбором локации, сценарием, позированием</p>
                                    </dt>
                                    <dt>
                                        <p>20 лучших фото в авторской художественной обработке, выбранные вами</p>
                                    </dt>
                                    <dt>
                                        <p>все удачные фото в базовой обработке (свето- и цвето- коррекция, кадрирование);</p>
                                    </dt>
                                    <dt>
                                        <p>фото книга 23х23 см на 10 разворотов;</p>
                                    </dt>
                                    <dt>
                                        <p> - </p>
                                    </dt>
                                    <dt>
                                        <p>срок изготовления фото в электронном виде до 2 недель, изготовление фотокниги до 3,5 недель</p>
                                    </dt>
                                    <dt>
                                        <div class="serv-price">
                                            <p>СТОИМОСТЬ</p>
                                            <p>при разрешении использовать фото для портфолио 1800 грн;  конфиденциальной съемки 2300 грн</p>
                                        </div>
                                    </dt>
                                </dl>
                            </div>
                        </article>
                    </div>
                    <div class="col-4 serv-box">
                        <article name="optimum_caption">
                            <div class="serv-caption" >
                                <p>Premium</p>
                            </div>
                        </article>
                        <article name="premium">
                            <div class="serv-details">
                                <dl>
                                    <dt>
                                        <p>2 -2,5 часа фотосьемки</p>
                                    </dt>
                                    <dt>
                                        <p>2 -3 образа</p>
                                    </dt>
                                    <dt>
                                        <p>помощь с созданием образа, выбором локации, сценарием, позированием</p>
                                    </dt>
                                    <dt>
                                        <p>30 лучших фото в авторской художественной обработке, выбранные вами на флешке;</p>
                                    </dt>
                                    <dt>
                                        <p>все удачные фото в базовой обработке (свето- и цвето- коррекция, кадрирование);</p>
                                    </dt>
                                    <dt>
                                        <p>фото книга 23х23 см на 15 разворотов;</p>
                                    </dt>
                                    <dt>
                                        <p>укладка и макияж</p>
                                    </dt>
                                    <dt>
                                        <p>срок изготовления фото в электронном виде до 2 недель, изготовление фотокниги до 3,5 недель</p>
                                    </dt>
                                    <dt>
                                        <div class="serv-price">
                                            <p>СТОИМОСТЬ</p>
                                            <p>договорная в зависимости от запроса, при разрешении использовать фото для портфолио скидка 30%</p>
                                        </div>
                                    </dt>
                                </dl>
                            </div>
                        </article>
                    </div>
                </section>
                <section class="services row">
                    <article class="additional_info">
                        <p>Дополнительная информация</p>
                    </article>
                </section>
            </div>
        </section >
    </main>
</body>
</html>

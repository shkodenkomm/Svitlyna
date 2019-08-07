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

        <section class="row off">
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
            <div class="contakts col-8 col-s-12 " >
                <div class="col-2"><p></p></div>
                <div class="col-8">
                    <div class="lined-caption">
                        <hr/>
                        <h2 style="white-space: nowrap;" >Давайте знакомится</h2>
                        <hr/>
                    </div>
                    <article>
                        <p class="text1">Позвольте представится - Елена Хоменко, детский и семейный фотограф. Я очень люблю свою работу, поскольку она дарит мне возможность запечатлевать красоту окружающего мира и людей, их радость и искренние положительные эмоции. Я радуюсь вместе с моими героями и чувствую важность моей работы, поскольку фото память поможет им проживать заново неповторимые моменты их жизни и будет важным наследием для их будущих поколений.</p>
                        <p style="margin-bottom: 0">Я работаю в таких направлениях:</p>
                        <ul class="types">
                            <li>Семейная фотосессия и love story;</li>
                            <li>Детская фото сессия;</li>
                            <li>Портретная фотография;</li>
                            <li>Фотосессия с лошадями;</li>
                            <li>Таинство венчания и крещения;</li>
                            <li>Фото истории;</li>
                            <li>Фотосьемка праздников.</li>
                        </ul>
                        <p class="text1">Я помогу с созданием образов, выбором локации, сценарием, позированием. 
                        Фото получаются красивые, душевные и немного сказочные. Вместе мы создадим фото историю для вас и про вас! </p>
                    </article>               
                </div>
                <div class="col-2"><p></p></div>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section>      

        <section class="row">
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
            <div class="contakts col-8 col-s-12" >  
                <div class="col-2"><p></p></div>
                <div class="col-8">
                    <div class="lined-caption">
                        <hr/>
                        <h2>Контакты</h2>
                        <hr/>
                    </div>
                    <article>
                        <p style="margin-top: 0">Вы можете задать мне все интересующие вас вопросы по телефону либо в личных сообщениях!</p>
                        <p><a href="mailto:mail@svitlyna.in.ua">Написать письмо на mail@svitlyna.in.ua</a></p>
                        
                        <p class="phone">+38 097 99 444 80</p>

                        <p class="viber_desctop">
                            <a title="Viber" href="viber://chat?number=+380979944480">Viber</a>
                        </p>
                         
                        <p class="viber_mobile">
                            <a title="Viber" href="viber://add?number=+380979944480">Viber</a>
                        </p>
    
                        <a title="Telegram" href="tg://resolve?domain=Homenko Olena">Telegram</a>

                        <p class="social">
                            <a class="facebook" href="https://www.facebook.com/ElenaKhomenkoPhoto">Facebook</a>
                            <a class="instagram" href="https://www.instagram.com/elena_khomenko_photo">Instagram</a>
                        </p>
                    </article>
                </div>
                <div class="col-2"><p></p></div>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </section >
    </main>
</body>
</html>

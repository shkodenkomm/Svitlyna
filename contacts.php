<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "parts/main_menu.php";
    include "parts/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Контакты</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "parts/head_links.php";
             echo $config->gtm["gan_head"];
    ?>

    <link rel="stylesheet" href="/css/contacts.css">

</head>

<body>
    <header class ="row">
        <div class="col-1 col-s-0 col-m-0" ><p></p></div>
        <div class="col-10 col-s-12">
            <div class="main_logo">
                <?php 
                    $menu= new MainMenu();
                    $menu->doit();                    
                ?>
            </div>
         </div>
        <div class="col-1 col-s-0 col-m-0"><p></p></div>
    </header>
    <main>        
        <section class="row">
            <div class="col-1 col-s-0 col-m-0"><p></p></div>
            <div class="contakts col-10 col-s-12 " >
                <div class="col-2"><p></p></div>
                <div class="col-8">
                    <div class="lined-caption">
                        <hr/>
                        <h2 style="white-space: nowrap;" ><b>Давайте знакомиться!</b></h2>
                        <hr/>
                    </div>
                    <article id="self_text">
                        <p>Меня зовут Елена Хоменко. Я детский и семейный фотограф.</p> 
                        <div  id="photografer">
                            <img src="imgs/photografer.jpg" >
                            <p>Хочу поделиться своим счастьем😊</p>
                            <ul class="types">
                                <li>Счастье­ - это когда любишь свою работу.</li>
                               <li>Двойное счастье - это когда работа позволяет бывать в красивых местах, знакомится и общаться с новыми людьми.</li>
                               <li>Тройное счастье­ - это когда твоя работа приносит радость и благо другим людям, а иногда может даже спасти жизнь...</li>
                                </ul>
                        </div>
                        <p>Заинтриговала? Что же это за чудесная работа такая?!</p>
                        <p class="text1">"Все просто. Это работа фотографом Она дарит мне радость, вдохновение, знакомства с прекрасными людьми и местами. Она учит меня видеть красоту во всем, что меня окружает и передавать ее с помощью фотографии. Фотография­ это волшебство, поскольку она позволяет навсегда сохранить ценные моменты, которые никогда больше не повторятся. Она позволяет возвращаться в эти чудесные искренние счастливые мгновения и вновь переживать их. Фото память ­ это важное наследие для людей и их будущих поколений."</p>
                        <p class="text1">"Недавно я узнала, что на одной выставке детской фотографии женщина увидела фото, которое затронуло ее до глубины души. И она приняла важнейшее в своей жизни решение ... Она отказалась делать аборт!!! Сейчас ее ребеночку уже больше года!"</p>
                        <p class="text1">"Я благодарна Богу за то, что я тоже причастна к этому чудесному миру фотографии! Благодарю всех людей, которые помогают мне на моем пути становления Фотографом: моих учителей, родных и друзей, коллег и конечно же героев моих фото историй, которые доверились мне! Спасибо Вам большое, что вы у меня есть и верите в меня!!!!!"</p>
                        <p class="text1" style="margin-bottom: 0;">Я работаю в таких направлениях:</p>
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
            <div class="col-1 col-s-0 col-m-0"><p></p></div>
        </section>      

        <section class="row" >
            <div class="col-1 col-s-0 col-m-0"><p></p></div>
            <div class="contakts col-10 col-s-12" >
                <div class="col-2"><p></p></div>
                <div class="col-8">
                    <div class="lined-caption">
                        <hr/>
                        <h2>Контакты</h2>
                        <hr/>
                    </div>
                    <article>
                        <p style="margin-top: 0">Вы можете задать мне все интересующие вас вопросы по телефону либо в личных сообщениях!</p>

                        <p class="phone">+38 097 99 444 80</p>

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
            <div class="col-1 col-s-0 col-m-0"><p></p></div>
        </section >
    </main>
</body>
</html>

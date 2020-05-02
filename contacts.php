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

        <section class="row" >
            <div class="col-1 col-s-0 col-m-0"><p></p></div>
            <div class="contakts col-10 col-s-12" >
                <div class="col-2"><p></p></div>
                <div class="col-8">
                    <div class="lined-caption" style="margin-top: 10rem">

                        <h2>Контакты</h2>

                    </div>
                    <article>
                        <p style="margin-top: 5rem">Вы можете задать мне все интересующие вас вопросы или записатся на фотосесию по телефону
                            <span class="phone" >+38 097 99 444 80</span> </p>
                        <p>либо в личных сообщениях!

                        <div class="social">
                            <a title="Telegram" href="tg://resolve?domain=Homenko Olena"><img src="imgs/telegram.svg"></a>
                            <a class="facebook" href="https://www.facebook.com/ElenaKhomenkoPhoto"><img src="imgs/facebook.svg"></a>
                            <a class="instagram" href="https://www.instagram.com/elena_khomenko_photo"><img src="imgs/instagram.svg"></a>

                            <a class="viber_desctop" title="Viber" href="viber://chat?number=+380979944480"><img src="imgs/viber.svg"></a>
                            <a class="viber_mobile" title="Viber" href="viber://add?number=+380979944480"><img src="imgs/viber.svg"></a>
                        </div>
<!--                        <div class="social">-->
<!---->
<!--                        <p><a class="viber_desctop" title="Viber" href="viber://chat?number=+380979944480">Viber</a></p>-->
<!--                        <p><a class="viber_mobile" title="Viber" href="viber://add?number=+380979944480">Viber</a><p>-->
<!--                        <p><a title="Telegram" href="tg://resolve?domain=Homenko Olena">Telegram</a><p>-->
<!---->
<!--                        <p><a class="facebook" href="https://www.facebook.com/ElenaKhomenkoPhoto">Facebook</a><p>-->
<!--                        <p><a class="instagram" href="https://www.instagram.com/elena_khomenko_photo">Instagram</a><p>-->
<!--                        </div>-->
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

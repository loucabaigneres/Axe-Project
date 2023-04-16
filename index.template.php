<?php require_once('./conf/database.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Louca's Portfolio</title>

        <link rel="stylesheet" href="./css/style.css" />

        <link
            rel="stylesheet"
            href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css"
        />
        <link
            rel="stylesheet"
            href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css"
        />
        <link
            rel="stylesheet"
            href="https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css"
        />

        <script defer src="./js/sidebar.js"></script>
        <script defer src="./js/modal.js"></script>
        <script defer src="./js/filter.js"></script>
        <script defer src="./js/popup.js"></script>
        <script defer src="./js/localstorage.js"></script>
    </head>
    
    <body>
        <?php require_once('./php/sidebar.template.php') ?>

        <header>
            <a href="./profile.html">
                <img
                    class="header-pp"
                    src="<?= $user_pic ?>"
                    alt="🖼️"
                />
            </a>
            <img
                class="logo"
                src="./images/micromovie_temp.png"
                alt="MicroMovie"
            />
            <a id="cross" href="#"><span id="burger"></span></a>
        </header>

        <div id="button-modal">
            <i class="fi fi-rr-plus-small"></i>
        </div>
    
        <div class="overlay-popup">
            <div class="sign-up-popup">
                <h2>On dirait que vous n'êtes pas connecté...</h2>
                <h3>Connectez-vous pour accéder à plus de fonctionnalités !</h3>
                <div>
                    <button class="close-popup">Plus tard</button>
                    <button class="go-sign-up">Se connecter</button>
                </div>
            </div>
        </div>

        <?php require_once('./php/post/modal.template.php') ?>
        <?php require_once('./php/post/posts.template.php') ?>
    </body>
</html>

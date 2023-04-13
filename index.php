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
    </head>
    
    <body>
        <?php require_once('./sidebar.template.php') ?>
        <header>
            <a href="">
                <img
                    class="header-pp"
                    src="<? $user_pic ?>"
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
    </body>
</html>

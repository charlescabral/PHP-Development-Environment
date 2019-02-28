<?php require "../init.php"; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Learning PHP</title>
        <link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/material.min.css">
        <link rel="stylesheet" href="./assets/css/main.css">
    </head>

    <body>

        <div class="mdl-layout mdl-js-layout">

            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <a href="/" class="mdl-layout-logo"><i class="material-icons">home</i></a>
                </div>
            </header>

            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Title</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                </nav>
            </div>

            <main class="mdl-layout__content">
            <?php
                try {
                    require load();
                } catch (\Throwable $th) {
                    echo $th->getMessage();
                }
            ?>
            </main>
        </div>

        <script src="./assets/js/material.min.js"></script>
    </body>
</html>

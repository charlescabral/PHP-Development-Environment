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
                    <span class="mdl-layout-title">Title</span>
                    <div class="mdl-layout-spacer"></div>
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="/">Home</a>
                        <a class="mdl-navigation__link" href="/signup">Cadastrar</a>
                    </nav>
                </div>
            </header>

            <main class="mdl-layout__content">

                <div class="page-content container">

                    <?php require $layout->load(); ?>
                </div>
            </main>
        </div>

        <script src="./assets/js/material.min.js"></script>
    </body>
</html>
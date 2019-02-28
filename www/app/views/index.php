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

                <div class="page-content container">

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col">
                            <h1><?= $title; ?></h1>
                        </div>

                        <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--8dp">
                            <div class="mdl-card__supporting-text">

                                <ul class="demo-list-item mdl-list">
                                    <?php foreach ( $users as $user ): ?>
                                        <li class="mdl-list__item mdl-list__item--two-line">
                                            <span class="mdl-list__item-primary-content">
                                                <i class="material-icons mdl-list__item-icon">person</i>
                                                <?=$user->name;?>
                                                <span class="mdl-list__item-sub-title"><?=$user->email;?></span>
                                            </span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script src="./assets/js/material.min.js"></script>
    </body>
</html>
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
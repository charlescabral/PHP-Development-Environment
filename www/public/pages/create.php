<div class="page-content container">
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--8dp">
            <div class="mdl-card__supporting-text">
                <form action="/pages/forms/create.php" method="POST" class="form-contact">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="firstname" type="text" id="firstname">
                        <label class="mdl-textfield__label" for="firstname">Nome</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="lastname" type="text" id="lastname">
                        <label class="mdl-textfield__label" for="lastname">Sobrenome</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="email" type="email">
                        <label class="mdl-textfield__label" for="sample2">E-mail</label>
                        <span class="mdl-textfield__error">Email inválido</span>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="password" type="text" id="password">
                        <label class="mdl-textfield__label" for="password">Senha</label>
                    </div>

                    <?= get('message'); ?>

                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Cadastrar
                    </button>
                </form>
            </div>
        </div>

        <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--8dp">
            <div class="mdl-card__supporting-text">

                <ul class="demo-list-item mdl-list">
                    <?php foreach ( all('users') as $user ): ?>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>
                                <?=$user->firstname;?> <?=$user->lastname;?>
                                <span class="mdl-list__item-sub-title"><?=$user->email;?></span>
                            </span>
                            <span class="mdl-list__item-secondary-content">
                                <a class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored" href="?page=edit&id=<?=$user->id;?>">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored" href="?page=delete&id=<?=$user->id;?>">
                                    <i class="material-icons">delete</i>
                                </a>
                            </span>
                        </li>
                    <?php endforeach;?>
                </ul>

            </div>
        </div>
    </div>
</div>
<?php $user = find('users', 'id', $_GET['id']); ?>
<div class="page-content container">
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--8dp">
            <div class="mdl-card__supporting-text">
                <form action="/pages/forms/update.php" method="POST" class="form-contact">

                    <input type="hidden" name="id" value="<?=$user->id?>">

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="firstname" type="text" id="firstname" value="<?=$user->firstname?>">
                        <label class="mdl-textfield__label" for="firstname">Nome</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="lastname" type="text" id="lastname" value="<?=$user->lastname?>">
                        <label class="mdl-textfield__label" for="lastname">Sobrenome</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="email" type="email" value="<?=$user->email?>">
                        <label class="mdl-textfield__label" for="sample2">E-mail</label>
                        <span class="mdl-textfield__error">Email inválido</span>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="password" type="text" id="password" value="<?=$user->password?>">
                        <label class="mdl-textfield__label" for="password">Senha</label>
                    </div>

                    <?= get('message'); ?>

                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Atualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
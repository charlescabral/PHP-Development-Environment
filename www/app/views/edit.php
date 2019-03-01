<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col">
        <h1>Edição</h1>
    </div>

    <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--8dp">
        <div class="mdl-card__supporting-text">
            <form action="/user_update" method="POST" class="form-contact">
                
                <input type="hidden" name="id" value="<?=$userEncontrado->id;?>">

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="name" type="text" id="name" value="<?=$userEncontrado->name;?>">
                    <label class="mdl-textfield__label" for="name">Nome</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="email" type="email" value="<?=$userEncontrado->email;?>">
                    <label class="mdl-textfield__label" for="sample2">E-mail</label>
                    <span class="mdl-textfield__error">Email inválido</span>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="password" type="text" id="password" value="<?=$userEncontrado->password;?>">
                    <label class="mdl-textfield__label" for="password">Senha</label>
                </div>

                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
</div>
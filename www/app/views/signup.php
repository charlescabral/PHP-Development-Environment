<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col">
        <h1>Cadastro</h1>
    </div>

    <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--8dp">
        <div class="mdl-card__supporting-text">
            <form action="/user_store" method="POST" class="form-contact">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="name" type="text" id="name">
                    <label class="mdl-textfield__label" for="name">Nome</label>
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

                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
</div>
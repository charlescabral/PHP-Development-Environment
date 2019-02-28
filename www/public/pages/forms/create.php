<?php require "../../../init.php";

if (isEmpty()) {
	flash('message', 'Preencha todos os campos');

	return redirect("create");
}

$validate = validate([
	'firstname' => 's',
	'lastname' => 's',
	'email' => 'e',
	'password' => 's',
]);

$user = create('users', $validate);

if ($user) {
	flash('message', 'Cadstrado com sucesso', 'success');
	return redirect('create');
}

flash('message', 'Erro ao cadastrar');
redirect('create');
<?php require "../../../init.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {
	flash('message', 'Preencha todos os campos');

	return redirect("edit&id=" . $id);
}

$validate = validate([
	'firstname' => 's',
	'lastname' => 's',
	'email' => 'e',
]);

$atualizado = update('users', $validate, ['id', $id]);

if ($atualizado) {
	flash('message', 'Atualizado com sucesso', 'success');
	return redirect("edit&id=" . $id);
}

flash('message', 'Erro ao atualizar');
redirect("edit&id=" . $id);
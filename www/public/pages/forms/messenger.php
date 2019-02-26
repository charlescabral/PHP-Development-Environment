<?php require "../../../init.php";

if (isEmpty()) {
    flash('message', 'Preencha todos os campos');
    return redirect("contact");
}

$validate = validate([
    'name' => 's',
    'email' => 'e'
]);

$data = [
	'quem' => $validate->email,
	'para' => 'charles.cabral.neto@gmail.com',
	'mensagem' => $validate->name,
	'assunto' => $validate->name,
];

if( send($data) ){
    flash('message', 'Email enviado com sucesso!', 'success');
    return redirect("contact");
};

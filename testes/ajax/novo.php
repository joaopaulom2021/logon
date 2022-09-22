<?php
if(empty($_POST['nome'])){
	//Apresenta erro
	echo json_encode(['status'=>'error','message'=>utf8_encode('O campo \'Nome\' não pode estar vazio.')]);
	return;
} elseif(empty($_POST['email'])){
	//Apresenta erro
	echo json_encode(['status'=>'error','message'=>utf8_encode('O campo \'Email\' não pode estar vazio.')]);
	return;
} elseif(empty($_FILES['foto']['name'])){
	//Apresenta erro
	echo json_encode(['status'=>'error','message'=>utf8_encode('O campo \'Foto\' não pode estar vazio.')]);
	return;
}

//Apresenta sucesso
echo json_encode(['status'=>'success','message'=>utf8_encode('Dados atualizados com sucesso!')]);
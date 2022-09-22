<?php 
include_once '../cima.php';

//$novo
$novo = 'novo.php';
$nome = 'João Paulo';
$email = 'joaopaulomsilva2021@gmail.com';
?>
<form method="POST" id="form-novo">
	<input type="text" name="nome" value="<?php echo "$nome" ?>" />
	<input type="text" name="email" value="<?php echo "$email" ?>" />
	<input type="file" name="foto" />
	<button type="submit">Enviar</button>
</form>
<script>
$('#form-novo').submit(function(e){
	//Impede que página recarregue ao submeter
	e.preventDefault();
	
	var forms = new FormData(this);
	$.ajax({
		url: '<?php echo "$novo" ?>',
        type: 'POST',
        data: forms,
        success: function (data) {
            var dados = JSON.parse(data);
			if(dados['status']=='success'){
				//Apresenta sucesso
				alert(dados['message']+'');
			} else{
				//Apresenta erro
				alert(dados['message']+'');
			}
        },
        cache: false,
        contentType: false,
        processData: false
	});
});
</script>
<?php include_once '../baixo.php' ?>
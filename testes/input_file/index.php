<?php
if(isset($_FILES['files']['name'])){
	var_dump($_FILES);
	die();
}
?>
<html>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="files[]" multiple />
		<button type="submit">Enviar</button>
	</form>
</body>
</html>
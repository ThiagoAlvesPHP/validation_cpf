<?php

include 'validador_cpf.php';
if (!empty($_POST['dado'])) {
	$dado = $_POST['dado'];
	$new = new Helpers();
	$d = $new->CPF($dado);

	if(Helpers::CPF($dado) == true){ 
		echo "Valido<hr>"; 
	}else{ 
		echo "Inválido<hr>"; 
	}
}
?>

<form method="POST">
	<label>CPF</label><br>
	<input type="text" name="dado" maxlength="11" placeholder="Somente Números"><br>
	<button>Ok</button>
</form>
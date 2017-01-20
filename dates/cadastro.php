<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Raphael/Cadastro</title><link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<?php 
		$nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
		$sexo = $_GET["sexo"];
		$nasc = $_GET["nasc"];
		$idade = date("Y") - $nasc;
		$matricula = $_GET["matricula"];
		$setor = $_GET["setor"];
		$cargo = $_GET["cargo"];
		$email = $_GET["email"];	
	 ?>
	<div class="container">
	 <table class="tabela">
	 	<tr>
	 		<th>Nome</th>
	 		<th>Cargo</th>
	 		<th>Setor</th>
	 		<th>Matricula</th>
	 		<th>Sexo</th>
	 		<th>Email</th>
	 		<th>Idade</th>
	 	</tr>
	 	<tr class="head">
	 		<th><?php echo $nome ?></th>
	 		<th><?php echo $cargo?></th>
	 		<th><?php echo $setor ?></th>
	 		<th><?php echo $matricula?></th>
	 		<th><?php echo $sexo ?></th>
	 		<th><?php echo $email?></th>
	 		<th><?php echo $idade ?></th>
	 	</tr>

	 </table>
	 </div>
	 <br><br>
	 <div class="button">
	 <input type="button" class="buttonsend" value="Voltar" onClick="history.go(-1)"> 
	
	</div> 
	 
	 
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Raphael/Cadastro</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<?php 
		 
		$nome = $_GET["nome"];
		$tipo = $_GET["tipo"];
		$nasc = $_GET["nasc"];
		$idade = date("Y") - $nasc;
		$matricula = $_GET["matricula"];
		$setor = $_GET["setor"];
		$cargo = $_GET["cargo"];
		$email = $_GET["email"];
		$strcon = mysql_connect or die('Erro verificar, contactar suporte');	
		header('Content-Type: text/html; charset=utf-8');
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');
		$sql = "INSERT INTO usuarios(nome,cargo,setor,matricula,tipo,email,nasc) VALUES ('$nome','$cargo','$setor','$matricula','$tipo','$email','$nasc')";
		
		utf8_encode($sql);
		
		mysql_db_query('solicitacao_cadastro', $sql,$strcon) or die ("Não foi possivel registrar");
		mysql_close($strcon);
		echo "Usuário Cadastrado com Sucesso";
	
?>
	<div class="container">
	 <table class="tabela">
	 	 	<tr>
		 		<th>NOME</th>
		 		<th>CARGO</th>
		 		<th>SETOR</th>
		 		<th>MATRICULA</th>
		 		<th>TIPO</th>
		 		<th>EMAIL</th>
		 		<th>IDADE</th>
		 	</tr>
		 	

			<tr>
				<th><?echo $nome?></th>
				<th><?echo $cargo?></th>
				<th><?echo $setor?></th>
				<th><?echo $matricula?></th>
				<th><?echo $tipo?></th>
				<th><?echo $email?></th>
				<th><?echo $idade?></th>

			</tr>
	 	</table>
	 </div>

	 <br><br>
	 <div class="button">
	 <input type="button" class="button2" value="Ok" onClick="history.go(-1)"> 	
	</div> 
	 
	 
</body>

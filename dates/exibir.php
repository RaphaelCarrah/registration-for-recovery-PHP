<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro - PHP</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="..css/font-awesome.css">
</head>
<body>

	<?php 

		$strcon = mysql_connect('localhost','root','ti310915#') or die('Erro verificar, contactar suporte');	
		header('Content-Type: text/html; charset=utf-8');

		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');

		
		
		$query = "SELECT nome, cargo, setor,matricula,tipo,email,nasc FROM usuarios";
		mysql_db_query('solicitacao_cadastro', $query,$strcon) or die ("Não foi possivel registrar");
		$dados = mysql_query($query, $strcon) or die(mysql_error());
		$linha = mysql_fetch_assoc($dados);
		$total = mysql_num_rows($dados);

	
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
	 	
<?php

	if($total > 0) {

		do {
?>			<tr>
			<th><?=$linha['nome']?></th>
			<th><?=$linha['cargo']?></th>
			<th><?=$linha['setor']?></th>
			<th><?=$linha['matricula']?></th>
			<th><?=$linha['tipo']?></th>
			<th><?=$linha['email']?></th>
			<th><?=date("Y") - $linha['nasc']  ?></th>
			 </tr>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	
	}
	mysql_free_result($dados);
?>

	 </table>
	 </div>
	 <br><br>
	 <div class="buttonmargin">

	 <input type="button" class="button2" value="Voltar" onClick="history.go(-1)"> 
	
	</div> 
	 
	 
</body>
</html>
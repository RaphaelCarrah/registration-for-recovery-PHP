<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro - PHP</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
</head>
<body>

	<?php 

		$strcon = mysql_connect('localhost','root','ti310915#') or die('Erro verificar, contactar suporte');	
		header('Content-Type: text/html; charset=utf-8');

		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');

		
		
		$query = "SELECT ID, nome, cargo, setor,matricula,sexo,email,nasc FROM usuarios";
		mysql_db_query('solicitacao_cadastro', $query,$strcon) or die ("Não foi possivel registrar");
		$dados = mysql_query($query, $strcon) or die(mysql_error());
		$linha = mysql_fetch_assoc($dados);
		$total = mysql_num_rows($dados);

	
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
	 		<th>Ação</th>
	 	</tr>
	 	
<?php

	if($total > 0) {

		do {
?>			<tr >
				
				<th><?=$linha['nome']?></th>
				<th><?=$linha['cargo']?></th>
				<th><?=$linha['setor']?></th>
				<th><?=$linha['matricula']?></th>
				<th><?=$linha['sexo']?></th>
				<th><?=$linha['email']?></th>
				<th>
					<form method="get"  action="remover.php">
						<input type="radio" checked name="name" value="<?=$linha['nome']?>"/>
						<button type="submit" name="id" class="buttondelete" onclick="alert('Você tem certeza que deseja apagar?')" value="<?=$linha['ID']?>">
							<i class="fa fa-trash" aria-hidden="true"></i>
						</button>
					</form>				
				</th>
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
					<a href="../index.html"><button  class="button2"  >Voltar</button></a>

				</div>
	 
	 
</body>
</html>
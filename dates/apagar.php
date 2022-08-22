<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro - PHP</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<link rel="stylesheet" href="../css/tabelas.css">
</head>
<body>

	<?php 

		$strcon = mysql_connect() or die('Erro verificar, contactar suporte');	
		header('Content-Type: text/html; charset=utf-8');

		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');

		
		
		$query = "SELECT ID, nome, cargo, setor,matricula,tipo,email,nasc FROM usuarios";
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
			<th>EMAIL</th>
	 		<th>MATRICULA</th>
	 		<th colspan="2">AÇÃO</th>


	 	</tr>
	 	
<?php

	if($total > 0) {

		do {
?>			<tr >
				
				<th><?=$linha['nome']?></th>
				<th><?=$linha['cargo']?></th>
				<th><?=$linha['setor']?></th>
				<th><?=$linha['email']?></th>
				<th><?=$linha['matricula']?></th>
				<th>
					<form method="get"  action="remover.php">
						<input type="radio" class="hide" checked name="linha" value="<?=$linha?>"/>
						<button type="submit" name="id" class="buttondelete" onclick="alert('Você tem certeza que deseja apagar?')" value="<?=$linha['ID']?>">
							<i class="fa fa-trash" aria-hidden="true"></i>
						</button>
					</form>	

				</th>
				<th>					
					<form method="get"  action="email.php">
						<input type="radio" class="hide" checked name="name" value="<?=$linha['nome']?>"/>
						<input type="radio" class="hide" checked name="cargo" value="<?=$linha['cargo']?>"/>
						<input type="radio" class="hide" checked name="email" value="<?=$linha['email']?>"/>
						<input type="radio" class="hide" checked name="matricula" value="<?=$linha['matricula']?>"/>
						<input type="radio" class="hide" checked name="setor" value="<?=$linha['setor']?>"/>
						
						<button type="submit" name="cargo" class="buttonmail" value="<?=$linha['cargo']?>">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
						</button>
					</form>	</th>
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

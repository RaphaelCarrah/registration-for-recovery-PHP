
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Excluir</title>
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

		
		
		
		  $id = $_GET['id'];
		  $name = isset($_GET['name']) ;
		  $query = "DELETE from usuarios where id =".$id;  
		 
		  $res   = mysql_db_query('solicitacao_cadastro',$query, $strcon)or die(mysql_error());
		 
		  if($res){  
		      echo "<h1>Usuario $name foi excluído com sucesso.</h1>";
		  }else{  
		      echo "<h1>Tem certeza que $name este item está listado?</h1>";
		  }
?>
		<div class="container">
			<div class="content">
				<div class="buttonmargin">
					<a href="apagar.php"><button  class="button2"  >Voltar</button></a>

				</div>
			</div>
	 	</div>

</body>
</html>
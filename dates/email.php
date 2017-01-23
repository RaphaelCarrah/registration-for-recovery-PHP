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

		$n = $_GET['name'];
		$c = $_GET['cargo'];
		$s = $_GET['setor'];
		$m 	= $_GET['matricula'];
		$e = $_GET['email'];
		
	
?>
	<h2>
		<?php echo "Prezado Suporte,<br/> Venho por meio deste solicitar o reset do seguinte usuário;<br/>" ?>
		<?php echo "Nome: $n<br/>" ?>
		<?php echo "Cargo: $c<br/>" ?>
		<?php echo "Setor:  $s<br/>" ?>
		<?php echo "Matricula: $m<br/>" ?>
		<?php echo "Email: $e" ?>

	 </h2>
	 
	 <br><br>
	 <div class="buttonmargin">

	 <input type="button" class="button2" value="Voltar" onClick="history.go(-1)"> 
	
	</div> 
	 
	 
</body>
</html>

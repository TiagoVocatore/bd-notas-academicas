<html>
<head>
<title> página de login </title>
<meta   http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link   type="text/css" href="css/estilo.css" rel="stylesheet"/>
</head>
<body id="body_login">
<?php
Error_reporting (0);
// conexao
include "connect.php";
@$nome = $_POST['nome'];
@$senha = $_POST['senha'];

if($nome != "" && $senha != "") {
		$sql = mysqli_query($link,"SELECT * FROM usuario WHERE nome = '$nome'");
		$registro = mysqli_num_rows($sql);
		while($line = mysqli_fetch_array($sql)){
		$senha_user = $line['senha'];
		$id = $line['id'];	
		}
		
if ($registro) {
	if($senha_user == $senha) {
		SESSION_START();
		$_SESSION['login'] = $nome;
		$_SESSION['password'] = $senha;
		if ($id == 1) {
		header ('location:adm.php');
		}
		else {
			header ('location:index.php');
		}
	}
	
	else {
		echo "<div id=div_login> <p> Senha incorreta </p> 
		<p> Clique <a href=index.php> aqui </a> para voltar para a página inicial. </p> </div>";
	}
} 

else {
	echo "<div id=div_login> <p> Algo está errado. Tente logar novamente. </p> 
	<p> Clique <a href=index.php> aqui </a> para voltar para a página inicial. </p> </div>";
}
}

else {
	echo "<div id=div_login> <p> Por favor, preencha todos os campos! </p> 
	<p> Clique <a href=index.php> aqui </a> para voltar para a página inicial. </p> </div>";
}
?> 

</body>
</html>
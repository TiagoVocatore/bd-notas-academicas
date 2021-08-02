<?php
Error_reporting (0);
include "connect.php";
SESSION_START();
$login = $_SESSION['login'];
$senha_log = $_SESSION['password'];
$sql = mysqli_query($link,"SELECT * FROM usuario WHERE nome = '$login'");
while($line = mysqli_fetch_array($sql)){
	$senha = $line['senha'];
	$id = $line['id'];
}

if ($senha_log  == $senha && $id == 1) {
}
else {
	header ('location:index.php');
}

?>

<html>
<head>
<script src="js/hora.js"> </script>
<title> Exercícios em javascript </title>
<link   rel="stylesheet" href="css/bootstrap.min.css">
<link   rel="stylesheet" type="text/css" href="css/estilo.css">
<script type="text/javascript" src="js/bootstrap.min.js"> </script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"> </script>
<meta   http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body onload="carregar()">

<div class="container-fluid">
<div class="row">

<div class="col-sm-12"> <br>
	<nav class="navbar navbar-expand-sm">
	<ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" href="index.php">Início </a>
    </li>
	<li class="nav-item">
    <a class="nav-link" href="exercicios.php"> Exercícios de lógica </a>
    </li>
	<li class="nav-item">
    <a class="nav-link" href="logout.php">Sair </a>
    </li>
    </ul>
	</nav>
</div>

<div class="col-sm-3" align="center" > <br>
<div class="alert alert-light" role="alert">
	<div id="msg" class="text-primary"> Aqui vai aparecer a mensagem... </div>
	<img id="imagem" src="imagens/manha.jpg">
</div>
</div>

<div class="col-sm-4"> <br>
  <div class="alert alert-success" role="alert">
  <p class="text-justify"> Bem Vindo a tela de ADM!  </p>
  </div>
</div>

<div class="col-sm-4" align="center" > <br>
	<h5> Formulário de cadastro </h5>
	<form action="postar.php" method="POST" enctype="multipart/form-data">
	<input type="text" required name="aluno" class="input_cadastro" placeholder="Digite o nome do aluno">
	<input type="file"  required name="foto" class="input_cadastro">
	<input type="number" step="0.01" class="input_cadastro" name="bd_dados" placeholder="Nota em Banco de Dados">
	<input type="number" step="0.01" class="input_cadastro" name="est_dados" placeholder="Nota em Estrutura de dados">
	<input type="number" step="0.01" class="input_cadastro" name="web" placeholder="Nota em Programação Web">
	<input type="number" step="0.01" class="input_cadastro" name="logica" placeholder="Nota em Lógica">
	<input type="number" step="0.01" class="input_cadastro" name="calc" placeholder="Nota em Cálculo">
	<input type="number" step="0.01" class="input_cadastro" name="eng_sft" placeholder="Nota em Engenharia de Software"> <br> 
	<input type="submit" value="Enviar">
	</form>
</div>
  
<?php

	$sql = mysqli_query($link,"SELECT * FROM alunos order by nome");
	while($line = mysqli_fetch_array($sql)){
		$nome = $line['nome'];
		$id_aluno = $line['id_aluno'];
		$foto = $line['foto'];
		$bd_dados = $line['bd_dados'];
		$estrutura_dados = $line['estrutura_dados'];
		$pgm_web = $line['pgm_web'];
		$logica = $line['logica'];
		$calculo = $line['calculo'];
		$eng_software = $line['eng_software'];
		$media = ($bd_dados + $estrutura_dados + $pgm_web + $logica + $calculo +  $eng_software) / 6; ?>
	
<div class="col-sm-3" align="center" >
<div class="alert alert-secondary" role="alert">
	<form action="editar.php?id=<?php echo $id_aluno ?>" method="POST" enctype="multipart/form-data">
	<h5> <?php echo "Nome: <br> <input type=text name=aluno id=input_nome value='$nome'>"; ?> </h5> 
	<p>  <?php echo "Foto Cadastrada: <br>"?> <img src="imagens/<?php echo $foto?>" width="70px"> </p>
	<p>  <?php echo "Trocar foto: <br> <input type=file name=pic  id=input_file>"; ?> </p>
	<p>  <?php echo "Editar nota em banco de dados: <br> <input type=number step=0.01 
					name=bd_dados class=input_editar value='$bd_dados'>"; ?> </p>
	<p>  <?php echo "Editar nota em estrutura de dados: <br> <input type=number step=0.01 
					name=estrutura_dados class=input_editar value='$estrutura_dados'>"; ?> </p>
	<p>  <?php echo "Editar nota em programação web: <br> <input type=number step=0.01 name=pgm_web 
					class=input_editar value='$pgm_web'>"; ?> </p>
	<p>  <?php echo "Editar nota em lógica: <br> <input type=number step=0.01 
					name=logica class=input_editar value='$logica'>"; ?> </p>
	<p>  <?php echo "Editar nota em cálculo: <br> <input type=number step=0.01 
					name=calculo class=input_editar value='$calculo'>"; ?> </p>
	<p>  <?php echo "Editar nota em engenharia de software: <br> <input type=number 
					step=0.01 name=eng_software class=input_editar value='$eng_software'>"; ?> </p>
	<h5> <?php echo "Média atual: ".number_format($media, 2, ',', '.'); ?> </h5> 
	<input type="submit" value="Editar">
	</form>
	<a href="delete.php?id=<?php echo $id_aluno ?>"> Excluir </a>
</div> 
</div>

<?php  }  ?>

</div>

<div class="alert-primary" align="center"> <br> 
   <p> <img src="imagens/eu.png" width="70px"> Criado por: Tiago Vocatore - Ciência da Computação 2016-2019 </p>  
</div>
 
</div>
	
</body>
</html>
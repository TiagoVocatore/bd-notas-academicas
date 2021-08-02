<?php
Error_reporting (0);
include "connect.php";
SESSION_START();
@$nome = $_SESSION['login'];
@$sql = mysqli_query($link,"SELECT * FROM usuario WHERE nome = '$nome'");
while($line = mysqli_fetch_array($sql)){
	$id = $line['id'];
}

?>

<html>
<head>
<script src="js/hora.js"> </script>
<title> Exercícios e banco de dados </title>
<link   rel="stylesheet" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/display.js"></script>
<link   type="text/css" href="css/estilo.css" rel="stylesheet"/>
<script type="text/javascript" src="js/exercicios.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<meta   http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>

<body onload="carregar()">

<div class="container-fluid">
<div class="row">

<div class="col-sm-10"> <br>
	<nav class="navbar navbar-expand-sm">
    <ul class="navbar-nav">
    <li class="nav-item active">
    <a class="nav-link" href="index.php">Inicio</a>
    </li>
	<li class="nav-item">
    <a class="nav-link" href="exercicios.php">Exercícios de lógica</a>
    </li> 
	<?php
	if(@$id == 1) {
		echo "<li class=nav-item>
			  <a class=nav-link href=adm.php>Ir para tela de ADM</a>
              </li>
			  <li class=nav-item>
              <a class=nav-link href=logout.php>Sair</a>
              </li>";
	} ?>
    </ul>
	</nav>
</div>
 
<div class="col-sm-2"> <br>
	<?php
	if(@$id !=1) {
		echo "<form action=logar.php method=POST enctype=multipart/form-data>
			  <input type=text name=nome placeholder=login class=input_inicio>
			  <input type=password name=senha placeholder=senha class=input_inicio>
			  <input type=submit class=input_inicio value=Login>
			  </form>";
	} ?>
</div>
 
 

 
<div class="col-sm-3" align="center">	
	<?php if(@$id == 1) { echo "<br>"; } ?>	
	<div class="alert alert-light" role="alert">
	<div id="msg"> Aqui vai aparecer a mensagem... </div>
	<img id="imagem" src="imagens/manha.jpg" class="img-fluid">
</div>
</div>

<div class="col-sm-6">
	<?php if(@$id == 1) { echo "<br>"; } ?>
	<div class="alert alert-success" role="alert">
	<p class="text-justify"> Olá! Esse site foi criado com o objetivo de mostrar o meu conhecimento em html, 
	css e em ferramentas como javascript e bootstrap. Nele, você pode conferir a tabuada de algum número e resolver
	alguns exercícios de lógica. Além disso, você pode conferir uma lista de alunos armazenada em um banco de dados. Aproveite! </p>
	<p onclick="mudar('instrucoes')">  Clique aqui para seguir as instruções de como ativar o banco de dados  </p>
	<p id="instrucoes"  style="display: none"> <img src="imagens/atencao.png" class="img-fluid">
	<img src="imagens/importar_bd1.png" class="img-fluid">
	<img src="imagens/importar_bd2.png" class="img-fluid">
	<img src="imagens/importar_bd3.png" class="img-fluid"> </p>
</div>
</div>

<div class="col-sm-3" align="center">
	 <?php if(@$id == 1) { echo "<br>"; } ?>
	 <div class="alert alert-info" role="alert"> Ordenar por: 
	 <form id="form1" name="form1" method="get" action="index.php">
	 <label> <input type="radio" name="ordenacao" value="nome"> Nome</label> <br>
	 <label> <input type="radio" name="ordenacao" value="bd_dados"> Banco de dados </label>
	 <label> <input type="radio" name="ordenacao" value="est_dados"> Estrutura de dados </label>
	 <label> <input type="radio" name="ordenacao" value="web"> Programação Web</label> 
	 <label> <input type="radio" name="ordenacao" value="logica"> Lógica </label>
	 <label> <input type="radio" name="ordenacao" value="calc"> Cálculo </label>
	 <label> <input type="radio" name="ordenacao" value="eng_sft"> Eng. Software </label>
     <label> <input type="radio" name="ordenacao" value="media"> Média </label>  <br>
     <input type="submit" value="Ordenar"> 
     </form>
</div>
</div>

<?php
 $sql = mysqli_query($link,"SELECT * FROM alunos order by (bd_dados + estrutura_dados + pgm_web 
 + logica +calculo + eng_software) / 6 desc"); 
 
 if ((@$_GET['ordenacao']) == "nome") {
  $sql = mysqli_query($link,"SELECT * FROM alunos order by nome"); 
 }
 
 else if ((@$_GET['ordenacao']) == "bd_dados") {
  $sql = mysqli_query($link,"SELECT * FROM alunos order by bd_dados desc"); 
 }
 
 else if ((@$_GET['ordenacao']) == "est_dados") {
  $sql = mysqli_query($link,"SELECT * FROM alunos order by estrutura_dados desc"); 
 }
 
 else if ((@$_GET['ordenacao']) == "web") {
  $sql = mysqli_query($link,"SELECT * FROM alunos order by pgm_web desc"); 
 }
 
 else if ((@$_GET['ordenacao']) == "logica") {
  $sql = mysqli_query($link,"SELECT * FROM alunos order by logica desc"); 
 }
 
 else if ((@$_GET['ordenacao']) == "calc") {
  $sql = mysqli_query($link,"SELECT * FROM alunos order by calculo desc"); 
 }
 
 else if ((@$_GET['ordenacao']) == "eng_sft") {
  $sql = mysqli_query($link,"SELECT * FROM alunos order by eng_software desc"); 
 }
 
 else {
  $sql = mysqli_query($link,"SELECT * FROM alunos order by (bd_dados + estrutura_dados + pgm_web 
  + logica +calculo + eng_software) / 6 desc"); 	 
 }

 while($line = mysqli_fetch_array($sql)){
		$nome = $line['nome'];
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
	 <h5> <?php echo $nome; ?> </h5> 
     <p>  <?php echo "<img id=img_aluno src=imagens/$foto></img>"; ?> </p> 
     <p>  <?php echo "Banco de dados: ".number_format($bd_dados, 2, ',', '.'); ?> </p> 
     <p>  <?php echo "Estrutura de dados: ".number_format($estrutura_dados, 2, ',', '.'); ?> </p> 
     <p>  <?php echo "Programação Web: ".number_format($pgm_web, 2, ',', '.'); ?> </p> 
     <p>  <?php echo "Lógica: ".number_format($logica, 2, ',', '.'); ?> </p> 
     <p>  <?php echo "Cálculo: ".number_format($calculo, 2, ',', '.'); ?> </p> 
     <p>  <?php echo "Eng. Software: ".number_format($eng_software, 2, ',', '.'); ?> </p> 
     <h5> <?php echo "Média: ".number_format($media, 2, ',', '.'); ?> </h5> 
 </div> 
 </div>
 
<?php } ?>
</div>

<div class="alert-primary" align="center"> <br> 
	<p> <img src="imagens/eu.png" width="70px" class="img-fluid"> Criado por: Tiago Vocatore 
	- Ciência da Computação 2016-2019 </p>  
</div>
</div>

</body>
</html>
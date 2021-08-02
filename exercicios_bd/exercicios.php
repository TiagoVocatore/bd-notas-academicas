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
<title> Exercícios em javascript </title>
<link   rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/display.js"></script>
<script type="text/javascript" src="js/exercicios.js"></script>
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
 
<div class="col-sm-3"> <br>
<div class="alert alert-success" role="alert" align="center">
	<h5> Tabuada de um número </h5>
	<p> <input type="number" placeholder="número" class="input_exercicios" id="tnum1">  </p>
	<p> <input type="button" value="calcular" class="input_exercicios" onclick="contar()"> </p>
<div id ="rest">  </div>
</div>
</div>

<div class="col-sm-3"> <br>
<div class="alert alert-primary" role="alert" align="center">
	<h5> Calculos entre dois valores </h5>
	<p> <input type="number"  placeholder="1º número" class="input_exercicios" id="cnum1"> </p>
	<p> <input type="number" placeholder="2º número" class="input_exercicios" id="cnum2"> </p>
	<p> <input type="button" value="calcular" class="input_exercicios" onclick="calcular()"> </p>
<div id ="resc">  </div>
</div>
</div>


 
<div class="col-sm-3"> <br>
<div class="alert alert-secondary" role="alert" align="center">
	<h5> Brasileiro ou estrangeiro </h5>
	<p> <input type="text" placeholder="país de origem"id="lugar" class="input_brasileiro"> </p>
	<p> <input type="button" value="Enviar" onclick="país()" class="input_brasileiro"> </p>
<div id="resb">  </div>
</div>
</div>

<div class="col-sm-3"> <br>
<div class="alert alert-danger" role="alert" align="center">
	<h5> Voto </h5>
	<p> <input type="number" placeholder="idade" id="idade" class="input_exercicios"> </p>
	<p> <input type="button" value="Enviar" onclick="votar()" class="input_exercicios"> </p>
<div id="resv">  </div>
</div>
</div>

<div class="col-sm-12"> <br>
<div class="alert alert-light" role="alert" align="center">
	<h5> Como foi feito </h5>
	<div id="fttabuada" style="display: none"> <img src="imagens/tabuada.png" class="img-fluid"> </div> 
	<button type="button" onclick="mudar('fttabuada')" class="input_exercicios"> Mostrar Tabuada </button> <br>
	<div id="ftcalculo" style="display: none"> <img src="imagens/calculo.png" class="img-fluid"> </div> 
	<button type="button" onclick="mudar('ftcalculo')" class="input_exercicios"> Mostrar Cálculo </button> <br>
	<div id="ftpais" style="display: none"> <img src="imagens/pais.png" class="img-fluid"> </div> 
	<button type="button" onclick="mudar('ftpais')" class="input_exercicios"> Mostrar País </button> <br>
	<div id="ftvoto" style="display: none"> <img src="imagens/votar.png" class="img-fluid"> </div> 
	<button type="button" onclick="mudar('ftvoto')" class="input_exercicios"> Mostrar Voto </button>

</div>
</div>
</div>

<div class="alert-primary" align="center"> <br> 
   <p> <img src="imagens/eu.png" width="70px"> Criado por: Tiago Vocatore - Ciência da Computação 2016-2019 </p>  
</div>
  
</div>

</body>
</html>
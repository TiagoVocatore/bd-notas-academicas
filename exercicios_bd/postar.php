<?php

include "connect.php";
SESSION_START();
$login = $_SESSION['login'];
$senha_log = $_SESSION['password'];
$sql = mysqli_query($link,"SELECT * FROM usuario WHERE nome = '$login'");
while($line = mysqli_fetch_array($sql)){
	$senha = $line['senha'];	
	$id_user = $line['id'];
}

if ($senha_log  == $senha && $id_user == 1) {
$nome = $_POST['aluno'];
$bd_dados = $_POST['bd_dados'];
$est_dados = $_POST['est_dados'];
$pgm_web = $_POST['web'];
$logica = $_POST['logica'];
$calculo = $_POST['calc'];
$eng_software = $_POST['eng_sft'];
$arquivo = $_FILES['foto'];
$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
$arquivo_nome = md5(uniqid($arquivo['name'])).".".$extensao;
$diretorio = "imagens/";
move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$arquivo_nome);
	
	$registro = false;
	if($nome != "" && $bd_dados != "" && $est_dados != "" && $pgm_web != "" && $logica != "" && $calculo != "" && $eng_software != "" ) {
	$registro = true;
	} else {
	echo "<script> window.history.go(-1)</script>";
	}
	
	$sql = mysqli_query($link,"SELECT * FROM alunos");
	while($line = mysqli_fetch_array($sql)){
		@$id_aluno = $line['id_aluno'];
	}
	
	@$id_aluno = $id_aluno + 1;
	

		
	if ($registro == true) {
		
		mysqli_query($link, "INSERT INTO  alunos(nome, foto, bd_dados, pgm_web, estrutura_dados, logica, calculo, eng_software) 
	VALUES ('$nome', '$arquivo_nome', '$bd_dados', '$pgm_web', '$est_dados', '$logica' , '$calculo' , '$eng_software' )");
	
	header ('location:adm.php');
		
	}
	

	else {
		echo "não foi possivel cadastrar esse conteúdo";
	}
	
	
	
	


	
}
else {
	header ('location:index.php');

}

?>
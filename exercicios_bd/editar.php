<?php  
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


  
   
$nome = $_POST['aluno'];
$bd_dados = $_POST['bd_dados'];
$estrutura_dados = $_POST['estrutura_dados'];
$pgm_web = $_POST['pgm_web'];
$logica = $_POST['logica'];
$calculo = $_POST['calculo'];
$eng_software = $_POST['eng_software'];
$arquivo = $_FILES['pic'];
$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
$arquivo_nome = md5(uniqid($arquivo['name'])).".".$extensao;
$diretorio = "imagens/";
move_uploaded_file($_FILES['pic']['tmp_name'], $diretorio.$arquivo_nome);

$id_aluno = $_GET['id'];

if ($arquivo['name'] == ""){
	$sql = mysqli_query($link,"UPDATE `alunos` SET 
						  `nome` = '$nome', `estrutura_dados` = '$estrutura_dados', `bd_dados` = '$bd_dados', `pgm_web` = '$pgm_web', 
						  `logica` = '$logica', `calculo` = '$calculo', `eng_software` = '$eng_software' 
						   WHERE `alunos`.`id_aluno` = $id_aluno "); 
	
}

else {
	$sql = mysqli_query($link,"UPDATE `alunos` SET 
						  `nome` = '$nome', `estrutura_dados` = '$estrutura_dados', `foto` = '$arquivo_nome', `bd_dados` = '$bd_dados', `pgm_web` = '$pgm_web', 
						  `logica` = '$logica', `calculo` = '$calculo', `eng_software` = '$eng_software' 
						   WHERE `alunos`.`id_aluno` = $id_aluno "); 
	
}


echo ' <script> alert("Editado")</script>'; 
echo " <script> location.href='adm.php' </script>"; 

 ?>
 

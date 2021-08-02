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

$id_aluno = $_GET['id'];
$sql = mysqli_query($link,"DELETE FROM alunos where id_aluno='$id_aluno'"); 

echo ' <script> alert("Excluido")</script>'; 
echo " <script> location.href='adm.php' </script>"; 
 ?>
 

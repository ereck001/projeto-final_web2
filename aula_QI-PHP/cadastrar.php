<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$horario = $_POST['horario'];
$dia = $_POST['dia'];
$strcon = mysqli_connect('localhost','root','N803hj&oç','projphp') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO clientehora VALUES ";
$sql .= "('$nome', '$idade', '$sexo','$horario','$dia')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
//echo "Cliente cadastrado com sucesso!";
//echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
//echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>
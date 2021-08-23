<?php
$nome = $_POST['nomecompleto'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$n = $_POST['n'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$senha = $_POST['senha'];




$strcon = mysqli_connect('localhost','id15328605_root123','Qf#P(f|7Vfrl>Rr/','id15328605_64bits') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO fornecedor VALUES ";
$sql .= "('$nome', '$cnpj', '$email', '$tel', '$cep', '$end', '$n', '$cidade', '$estado', '$senha')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);

echo "Cliente cadastrado com sucesso!";
echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>

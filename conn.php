<?php
	$pdo = new PDO("mysql: host=localhost; dbname=carrinho","root", "");
?>
<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'carrinho');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>




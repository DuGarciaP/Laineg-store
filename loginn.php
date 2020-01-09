<?php
session_start();
include_once('conn.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuarios = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where usuario = '{$usuarios}' and senha = md5('{$senha}')";

$results = mysqli_query($conexao, $query);

$row = mysqli_num_rows($results);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($results);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('Location: carrinho.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
<?php
	session_start();
	include_once ('conn.php');
		
		$totalll = filter_input(INPUT_GET, 'total');
		$total = number_format($totalll, 2,',','.');

		$sessao = $_SESSION['pedido'];
		$verificar = $pdo-> prepare("SELECT * FROM carrinho_temporario WHERE temporario_sessao = :ses");
		$verificar -> bindValue(':ses', $sessao);
		$verificar -> execute();
		$linha = $verificar -> rowCount();
		
		foreach($verificar as $mostrar):
		$produto_id = $mostrar['temporario_produto'];
		$produto_quantidade = $mostrar['temporario_quantidade'];
		$produto_preco = $mostrar['temporario_preco'];
		$produto_data = date('Y-m-d H:i:s');
		
		$insere = $pdo->prepare("INSERT INTO carrinho_pedidos (pedido_produto, pedido_quantidade, pedido_preco ,pedido_valor_total, pedido_data, pedido_sessao) VALUES ('$produto_id','$produto_quantidade','$produto_preco','$total','$produto_data','$sessao')");
		$insere ->execute();
		endforeach;
		if(!$_SESSION['nome']):
			echo '<script>window.location="login.php"</script>';
		else:
			echo '<script>window.location="continuar.php"</script>';
			session_destroy();
		endif;
?>
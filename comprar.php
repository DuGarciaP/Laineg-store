<?php
	session_start();
	include_once ('conn.php');
	
	$produto = filter_input(INPUT_GET, 'prod');
	
	$verificar = $pdo->prepare("SELECT * FROM carrinho_produtos WHERE produto_id = :prod");
	$verificar -> bindValue(':prod', $produto);
	$verificar -> execute();

	$linhas = $verificar -> rowCount();

	foreach($verificar as $aparecer):
	$pre = $aparecer['produto_preco'];
	endforeach;
	
	$produto_id = $aparecer['produto_id'];
	$produto_nome = $aparecer['produto_nome'];
	$produto_quantidade = 1;
	$produto_preco = $aparecer['produto_preco'];
	$produto_data = date('Y-m-d H:i:s');
	
	$rand = rand(1000,100000);
	
	if(!$_SESSION['pedido']):
		$_SESSION['pedido'] = $rand;
		$sessao = $_SESSION['pedido'];
	else:
		$sessao = $_SESSION['pedido'];
	endif;
	
	$verificacao = $pdo->prepare("SELECT * FROM carrinho_temporario WHERE temporario_produto = :product AND temporario_sessao = :sessao");
	$verificacao -> bindValue(':product', $produto);
	$verificacao -> bindValue(':sessao', $sessao);
	$verificacao -> execute();

	$linha = $verificacao -> rowCount();
	foreach($verificacao as $mostre):
		$quant = $mostre['temporario_quantidade'];
	endforeach;
	if($linha >= 1):
		$valor = $quant + 1;
		$preco = $valor * $pre;
		$update = $pdo->prepare("UPDATE carrinho_temporario SET temporario_quantidade = :val, temporario_preco = :pre WHERE temporario_sessao = :ses AND temporario_produto = :tp ");
		$update -> bindValue(':val', $valor);
		$update -> bindValue(':ses', $sessao);
		$update -> bindValue(':pre', $preco);
		$update -> bindValue(':tp', $produto);
		$update -> execute();
		if($update):
			// echo '<script>alert("Adicionado + unidade a este produto")</script>';
			echo '<script>window.location="shop.php"</script>';
		else:
			echo '<script>alert("ERROR:Produto não pode ser adicionado ao carrrinho")</script>';
			echo '<script>window.location="shop.php"</script>';
		endif;
	else:
		$insere = $pdo->prepare("INSERT INTO carrinho_temporario (temporario_produto, temporario_quantidade, temporario_preco, temporario_data, temporario_sessao) VALUES (:produto, :qtd, :preco, :data, :sessao)");
		$insere ->bindValue(':produto', $produto_id);
		$insere ->bindValue(':qtd', $produto_quantidade);
		$insere ->bindValue(':preco', $produto_preco);
		$insere ->bindValue(':data', $produto_data);
		$insere ->bindValue(':sessao', $sessao);
		$insere ->execute();
		
		if($insere):
			// echo '<script>alert("Produto adicionado ao carrinho")</script>';
			echo '<script>window.location="shop.php"</script>';
		else:
			echo '<script>alert("ERROR:Produto não pode ser adicionado ao carrinho")</script>';
			echo '<script>window.location="shop.php"</script>';
		endif;
	endif;
?>
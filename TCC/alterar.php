<?php
	session_start();
	include_once ('conn.php');
	
	$id = filter_input(INPUT_GET, 'ref');
	$preco = filter_input(INPUT_GET, 'preco');
	$qtd = filter_input(INPUT_GET, 'qtd');
	
	$verificar = $pdo->prepare("SELECT * FROM carrinho_temporario WHERE temporario_id = :id");
	$verificar -> bindValue(':id', $id);
	$verificar -> execute();
	
	$valor =  $preco * $qtd;
	
	if($qtd <= 0):
		$delete = $pdo->prepare("DELETE FROM carrinho_temporario WHERE temporario_id = :id");
		$delete -> bindValue(':id', $id);
		$delete -> execute();

		if($delete):
			echo '<script>alert("Este produto foi deletado com sucesso!")</script>';
			echo '<script>window.location="carrinho.php"</script>';
		else:
			echo '<script>alert("ERRO:Este Produto não pôde ser excluído!")</script>';
			echo '<script>window.location="carrinho.php"</script>';
		endif;
	else:
		$update = $pdo->prepare("UPDATE carrinho_temporario SET temporario_quantidade = :val, temporario_preco = :preco WHERE temporario_id= :tp ");
		$update -> bindValue(':val', $qtd);
		$update -> bindValue(':preco', $valor);
		$update -> bindValue(':tp', $id);
		$update -> execute();
		if($update):
			// echo '<script>alert("Adicionado mais unidades")</script>';
			echo '<script>window.location="carrinho.php"</script>';
		else:
			echo '<script>alert("ERROR:Produto não pode ser adicionado ao carrinho")</script>';
			echo '<script>window.location="carrinho.php"</script>';
		endif;
	endif;
?>
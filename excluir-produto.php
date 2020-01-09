<?php
	session_start();
	include_once ('conn.php');
	
	$id = filter_input(INPUT_GET, 'ref');
	
	$delete = $pdo->prepare("DELETE FROM carrinho_temporario WHERE temporario_id = :id");
	$delete -> bindValue(':id', $id);
	$delete -> execute();

	if($delete):
		echo '<script>window.location="carrinho.php"</script>';
	else:
		echo '<script>alert("Não pode ser excluido")</script>';
		echo '<script>window.location="carrinho.php"</script>';
	endif;
?>
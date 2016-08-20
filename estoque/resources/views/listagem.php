<!DOCTYPE html>
<html>
<head>
	<title>Listagem de produtos</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Listagem de Produtos</h1>
	<table>
		<?php foreach($produtos as $p): ?>
			<tr>
				<td><?php echo $p->nome ?></td>
				<td><?php echo $p->valor ?></td>
				<td><?php echo $p->descricao ?></td>
				<td><?php echo $p->quantidade ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
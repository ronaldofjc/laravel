<!DOCTYPE html>
<html>
<head>
	<title>Listagem de produtos</title>
	<link rel="stylesheet" href="/css/app.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<h1>Listagem de Produtos</h1>
		<table class="table table-striped table-bordered table-hover">
			<?php foreach($produtos as $p): ?>
				<tr>
					<td><?php echo $p->nome ?></td>
					<td><?php echo $p->valor ?></td>
					<td><?php echo $p->descricao ?></td>
					<td><?php echo $p->quantidade ?></td>
					<td><a href="/produtos/mostra/<?php echo $p->id ?>">
							<span class="glyphicon glyphicon-search"></span>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>
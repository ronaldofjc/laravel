<!DOCTYPE html>
<html>
<head>
	<title>Controle de Estoque</title>
	<link rel="stylesheet" href="/css/app.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<h1>Detalhes do Produto: <?php echo $p->nome ?></h1>
		<ul>
			<li><b>Valor: </b><?php echo $p->valor ?></li>
			<li><b>Descrição: </b><?php echo $p->descricao ?></li>
			<li><b>Quantidade em Estoque: </b><?php echo $p->quantidade ?></li>
		</ul>
	</div>
</body>
</html>
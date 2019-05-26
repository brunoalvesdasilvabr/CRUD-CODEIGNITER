<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lista de produtos tabela">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title>Lista de produtos tabela</title>
</head>
<body>

			<div class="container">
					<div class="row">
						<h1>Lista de produtos tabela</h1>
						<a href="index.php/produtos/add" class="btn btn-success margin-button15">Novo Produto</a>
							<table class="table table bordered">
								<thead>
									<tr>
										<th class="text-center">Produto</th>
										<th class="text-center">Preço</th>
										<th class="text-center">Ações</th>
									</tr>
								</thead>
								<?php
									$contador = 0;
									foreach ($produtos as $produto){
										echo '<tr>';
										echo '<td>' . $produto->nome. '</td>';
										echo '<td class="text-right">' . $produto->preco . '</td>';
										echo '<td class="text-center">';
										echo '<a class="btn btn-primary" href="/produtos/editar/"' . $produto->id . 'title="Editar carrinho"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>';
										echo '<a class="btn btn-danger" href="/produtos/apagar/"' . $produto->id . 'title="Apagar carrinho"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>';
										echo '<a class="btn btn-info" href="/produtos/apagar/"' . $produto->id . 'title="Detalhar carrinho"><span class="glyphicon glyphicon-open" aria-hidden="true"></span>';
										$contador++;
									}
								?>
							</table>

							<div class="row">
							<div class="col-md-12">
							 Total de registros: <?php echo $contador ?>
							
							</div>
							
							</div>
					</div>
			</div>
<script src="https://ajax.googlelapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js/"></script>
</body>
</html>
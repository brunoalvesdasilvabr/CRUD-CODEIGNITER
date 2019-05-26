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
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title>Lista de produtos tabela</title>
</head>
<body>

			<div class="container">
					<div class="row">
                        <h1>Novo Produto</h1>
                        <ol class="breakcrumb">
                            <li><a href="/">Inicio</a></li>
                            <li class="active">Novo Produto</li>


                            <form action="index.php/produtos/salvar" name="form_add" method="post">
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Nome</label>
                                    <input type="text" name="nome" value="" class="form-control">
                                </div>
                             </div>

                             <div class="col-md-8">
                                    <label>Preço</label>
                                    <input type="text" name="preco" value="" class="form-control">
                                </div>
                             </div>

                             <div class="col-md-8">
                                    <label>Ativo</label>
                                    <select name="ativo" class="form-control">
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>
                             </div>

                             <div class="col-md-2">
                                  
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                             </div>

                            </form>
						
					</div>
			</div>
<script src="https://ajax.googlelapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js/"></script>
</body>
</html>
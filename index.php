<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
    	* { font-family: monospace;}
    
    </style>

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<!--LOGO-->
			<div class="col-md-3">
				<br>
				<img src="http://placehold.it/60x60">
				<br>
				<br>
			</div>
			<!--TEXTO LOGO-->
			<div class="col-md-9">
				<h4>-</h4>
			</div>
		</div>
		<div class="col-md-12">
			
			<?php include_once("barra_usuario.php");?>
		</div>
	</div>
	<div class="row">
		<!--CORPO -->
		<div class="col-md-12">
			<div class="col-xs-12">
				<span>Pedido:</span><br><br>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-2">Código</div>
				<div class="col-xs-5">Descrição</div>
				<div class="col-xs-2">Qtd</div>
				<div class="col-xs-2">Valor</div>
				<div class="col-xs-1">Ação</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-2">
					<input class="form-control" type="text" name="txtCodigo" id="txtCodigo" placeholder="Código">
				</div>
				<div class="col-xs-5">
					<input class="form-control" type="text" name="txtCodigo" id="txtCodigo" placeholder="Código">	
				</div>
				<div class="col-xs-2">
					<input class="form-control" type="text" name="txtCodigo" id="txtCodigo" placeholder="Código">	
				</div>
				<div class="col-xs-2">
					<input class="form-control" type="text" name="txtCodigo" id="txtCodigo" placeholder="Código">	
				</div>
				<div class="col-xs-1">
					<input class="btn btn-primary" type="submit" name="btnPesquisa" id="btnPesquisa" placeholder="Código" value="Pesquisar">	
				</div>
		</div>
	</div>
	<!--RODAPE-->
	<div class="row">
		<div class="col-md-12">
			<?php include_once("rodape.php");?>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/basic.js"></script>
    <script type="text/javascript">

	$(document).ready(function(){

		$(window).keydown(function(event) {
			if(event.keyCode == 118){
			event.preventDefault();
			popupCentral('buscaProdOrc.php', 'Busca de Materiais', '600','300');
			
			}
		});

	});

    </script>
  </body>
</html>
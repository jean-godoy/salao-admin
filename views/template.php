<!-- //load tamplate -->
<!DOCTYPE html>
<html>
<head>
	<title>Godoy Tattoo</title>
	<link rel="stylesheet" href="<?= BASE_URL;?>assets/bootstrap/bootstrap-4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= BASE_URL;?>assets/css/style.css">
	<script type="text/javascript" src="<?= BASE_URL;?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?= BASE_URL;?>assets/js/script.js"></script>
</head>
<body>
	<div class="main">
		<?php date_default_timezone_set('America/Sao_Paulo') ?>
		<div class="dark-blue head">
			<h1>Godoy Tattoo</h1>
			<label class="user-name">Usuario: <?= $_SESSION['user_name'];?></label>

		</div>
		<!-- <nav class="menu">

		<div id="wrapper">
  

		  <input type="checkbox" id="menu" name="menu" class="none menu-checkbox">

		  <div class="menuR">
		    <label class="menu-toggle" for="menu"><span>Toggle</span></label>
			     <ul>
			    	
			     	<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>">Home</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>funcionarios">Funcionarios</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>clientes">Clientes</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>pesquisar">Pesquisar</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>ordem">Ordem de Serviços</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>relatorios">Relatorios</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>financeiro">Financeiro</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>login/logOut">Sair</a></li>

			     </ul> 
			 </div>
			</div>
			</nav>     -->

		<nav class="menu">

			
			
			<div class="menu-r">
				<ul class="list-group col-12">
					<li class="dark-blue list-group-item" class="menu-li">Menu</li>

					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>">Home</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>funcionarios">Funcionarios</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>clientes">Clientes</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>pesquisar">Pesquisar</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>ordem">Ordem de Serviços</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>relatorios">Relatorios</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>financeiro">Financeiro</a></li>
					<li class="list-group-item list-group-item-action" class="menu-li"><a href="<?= BASE_URL;?>login/logOut">Sair</a></li>
				</ul>
			</div>
		</nav> 
		
	</div>




<?php $this->loadViewInTemplate($viewName, $viewData);?>

<footer class="footer">
	Godoy Inc - Sexta Feira &copy - <?= date('Y', time());?>
</footer>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= BASE_URL;?>assests/js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL;?>assets/popper/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL;?>/bootstrap/bootstrap-4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<section class="main-funcionarios">
	<h1>Pagamento</h1>
	<hr>
	<h3>Conta de <?= $pagamento['nome']?></h3>
	<ul class="">
		<li class="li">Saldo R$: <?= Generic::number($pagamento['valor'])?></li>
	</ul>

	<form class="" method="post" action="<?= BASE_URL?>financeiro/efetuarPagamento">

		<div class="form-row">

		    <div class="form-group col-md-2">
		     	<label for="inputValor">Valor R$:</label>
		     	<input type="text" class="form-control" id="inputValor"  name="valor" >
		    </div>	

		<input class="none" type="text" name="id" value="<?= $pagamento['id']?>">
		<input class="none" type="text" name="nome" value="<?= $pagamento['nome']?>">
		<!-- Valor R$: <input type="text" name="valor"> -->

		<a class="bt-right red btn btn-secondary btn-lg" href="<?= BASE_URL;?>">Cancelar</a>
		<input class="bt-right btn btn-primary btn-lg" type="submit" name="" value="Sacar">

		</div>
	</form>

</section>
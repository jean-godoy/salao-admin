<section class="">
	<h1>Sacar caixa</h1>
	<hr>

	<ul>
		<li>Saldo Total (bruto) R$: <?= Generic::number($bruto['valor'])?></li>
		<li>Saldo Caixa R$: <?= Generic::number($caixa['valor'])?></li>
	</ul>
	<hr>

	<form class="" method="post" action="<?= BASE_URL?>financeiro/efetuarSaque">
		
		<div>
			Valor R$: <input class="" type="text" name="valor">
		</div>

		<div>
			Descrição: <input class="" type="text" name="descricao">
		</div>

			<input type="submit" name="sacar" value="Sacar">

	</form>


</section>
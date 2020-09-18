<section class="selecao-extrato">

	<form method="post" action="<?= BASE_URL?>financeiro/intervalo">

		<div class="head-ext">Selecione intervalo</div>

		<input class="inp-extrato" type="text" name="inicio" placeholder="Data Inicio">
		<input class="inp-extrato" type="text" name="final" placeholder="Data Final">

		<input class="btn-extrato" type="submit" name="cadastro" value="Gerar extrato">

	</form>

	<a class="btn-extrato" href="">Extrato Total</a>
	<a class="btn-extrato red" href="">Cancelar</a>
	

</section>
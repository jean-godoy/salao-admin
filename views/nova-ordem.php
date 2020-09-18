<div class="main-funcionarios">

	<h1>Nova Ordem</h1>
	<hr>
	Funcionário: <?= $funcionario['nome'];?><br>
	Cliente: <?= $cliente['nome'];?>
	<hr>
	<form class="" method="post" action="<?= BASE_URL;?>ordem/gerar" >

		<div class="form-row">

		    <div class="form-group col-md-4">
		     	<label for="inputServico">Serviço</label>
		     	<input type="text" class="form-control" id="inputServico"  name="servico" >
		    </div>

			<input class="none" type="text" value="<?= $cliente['id'];?>" name="id_cliente">
			<input class="none" type="" value="<?= $funcionario['id'];?>" name="id_fun">
			<!-- Serviço:    <input class="" type="text" name="servico"><br> -->

			 <div class="form-group col-md-4">
		     	<label for="inputDescricao">Descrição</label>
		     	<input type="text" class="form-control" id="inputDescricao"  name="descricao" >
		    </div>

			<!-- Descrição:  <input class="" type="text" name="descricao"><br> -->

			 <div class="form-group col-md-4">
		     	<label for="inputValor">Valor R$</label>
		     	<input type="text" class="form-control" id="inputValor"  name="valor" >
		    </div>

			<!-- Valor R$: 		<input class="" type="text" name="valor"> -->

			<a class="bt-right red btn btn-secondary btn-lg" href="<?= BASE_URL;?>">Cancelar</a>
			<input class="bt-right btn btn-primary btn-lg" type="submit" name="cadastro" value="Cadastrar">
			
		</div>
	</form>


	


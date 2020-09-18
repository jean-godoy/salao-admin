<section class="main-funcionarios">
	
	<h2>Cliente Pesquisa</h2>

	<div class="form-row">
		<div class="form-group col-md-8">
	      	<label for="inputNome">Nome Completo</label>
	      	<label class="form-control" id="inputNome"><?php echo $cliente['nome'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputSexo">Sexo</label>
	      	<label class="form-control" id="inputSexo"><?php echo Generic::sexo($cliente['sexo']);?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputData">Data de Nacimento</label>
	      	<label class="form-control" id="inputData"><?php echo Generic::dataOut($cliente['data_nasc']);?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputEndereco">Endereço</label>
	      	<label class="form-control" id="inputEndereco"><?php echo $cliente['endereco'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputNumero">Numero</label>
	      	<label class="form-control" id="inputNumero"><?php echo $cliente['numero'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputBairro">Bairro</label>
	      	<label class="form-control" id="inputBairro"><?php echo $cliente['bairro'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputCidade">Cidade</label>
	      	<label class="form-control" id="inputCidade"><?php echo $cliente['cidade'];?></label>
	    </div>	

	    <div class="form-group col-md-4">
	      	<label for="inputEstado">Estado</label>
	      	<label class="form-control" id="inputEstado"><?php echo $cliente['estado'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputTelefone">Telefone</label>
	      	<label class="form-control" id="inputTelefone"><?php echo $cliente['telefone'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputEmail">E-mail</label>
	      	<label class="form-control" id="inputEmail"><?php echo $cliente['email'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputCPF">CPF</label>
	      	<label class="form-control" id="inputCPF"><?php echo $cliente['cpf'];?></label>
	    </div>


	</div>	
	 <a class="bt-right btn btn-primary btn-lg" href="<?= BASE_URL;?>pesquisar/funcionariosP">OK</a>
	<a class="bt-right red btn btn-secondary btn-lg" href="<?= BASE_URL;?>pesquisar/clienteEditar/<?= $cliente['id'];?>">Editar</a>
	<div class="space"></div>
</section>




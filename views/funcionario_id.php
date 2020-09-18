
<section class="main-funcionarios">
	
	<div class="form-row">
		<div class="form-group col-md-8">
	      	<label for="inputNome">Nome Completo</label>
	      	<label class="form-control" id="inputNome"><?php echo $funcionario['nome'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputSexo">Sexo</label>
	      	<label class="form-control" id="inputSexo"><?php echo Generic::sexo($funcionario['sexo']);?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputData">Data de Nacimento</label>
	      	<label class="form-control" id="inputData"><?php echo Generic::dataOut($funcionario['data_nasc']);?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputEndereco">Endereço</label>
	      	<label class="form-control" id="inputEndereco"><?php echo $funcionario['endereco'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputNumero">Numero</label>
	      	<label class="form-control" id="inputNumero"><?php echo $funcionario['numero'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputBairro">Bairro</label>
	      	<label class="form-control" id="inputBairro"><?php echo $funcionario['bairro'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputCidade">Cidade</label>
	      	<label class="form-control" id="inputCidade"><?php echo $funcionario['cidade'];?></label>
	    </div>	

	    <div class="form-group col-md-4">
	      	<label for="inputEstado">Estado</label>
	      	<label class="form-control" id="inputEstado"><?php echo $funcionario['estado'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputTelefone">Telefone</label>
	      	<label class="form-control" id="inputTelefone"><?php echo $funcionario['telefone'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputEmail">E-mail</label>
	      	<label class="form-control" id="inputEmail"><?php echo $funcionario['email'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputRG">RG</label>
	      	<label class="form-control" id="inputRG"><?php echo $funcionario['rg'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputCPF">CPF</label>
	      	<label class="form-control" id="inputCPF"><?php echo $funcionario['cpf'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputProfissao">Profissão</label>
	      	<label class="form-control" id="inputProfissao"><?php echo $funcionario['profissao'];?></label>
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="inputPorcentagem">Porcentagem</label>
	      	<label class="form-control" id="inputPorcentagem"><?php echo $funcionario['porcentagem'];?></label>
	    </div>

	</div>	
	 <a class="bt-right btn btn-primary btn-lg" href="<?= BASE_URL;?>pesquisar/funcionariosP">OK</a>
	<a class="bt-right red btn btn-secondary btn-lg" href="<?= BASE_URL;?>pesquisar/funcionarioEditar/<?= $funcionario['id'];?>">Editar</a>
	<div class="space"></div>
</section>























<!-- <div class="cliente_id">
	
	<ul class="">
		<li class="">id: <?php echo $funcionario['id'];?></li>
		<li class="">Nome: <?php echo $funcionario['nome'];?></li>
		<li class="">Sexo: <?php echo $funcionario['sexo'];?></li>
		<li class="">Data de Nascimento: <?php echo $funcionario['data_nasc'];?></li>
		<li class="">Endereço: <?php echo $funcionario['endereco'];?></li>
		<li class="">Número: <?php echo $funcionario['numero'];?></li>
		<li class="">Bairro: <?php echo $funcionario['bairro'];?></li>
		<li class="">Cidade: <?php echo $funcionario['cidade'];?></li>
		<li class="">Estado <?php echo $funcionario['estado'];?></li>
		<li class="">Telefone: <?php echo $funcionario['telefone'];?></li>
		<li class="">RG: <?php echo $funcionario['rg'];?></li>
		<li class="">CPF: <?php echo $funcionario['cpf'];?></li>
		<li class="">E-mail: <?php echo $funcionario['email'];?></li>
		
	</ul>

	<a class="" href="<?= BASE_URL;?>pesquisar/funcionariosP">Cancelar</a>
	<a class="" href="<?= BASE_URL;?>pesquisar/funcionarioEditar/<?= $funcionario['id'];?>">Editar</a>

</div> -->




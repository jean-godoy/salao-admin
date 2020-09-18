

 <div class="main-funcionarios">

	<form action="<?= BASE_URL;?>pesquisar/editarFuncionario" method="post">

	<h1>Funcionarios - editar</h1>
	<input display="none" class="none" type="text" name="id" value="<?php echo $funcionario['id'];?>">
  <div class="form-row">

    <div class="form-group col-md-12">
      <label for="inputEmail4">Nome Completo</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome Completo" name="nome" value="<?= $funcionario['nome'];?>">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Sexo</label>
      <input type="text" class="form-control" id="inputSex" placeholder="Sexo" name="sexo" value="<?= $funcionario['sexo'];?>">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Data de Nascimento</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="07/06/2020" name="data_nasc" value="<?= Generic::dataOut($funcionario['data_nasc']);?>" >
    </div>

  <!-- </div> -->

  <div class="form-group col-md-8">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0" name="endereco" value="<?= $funcionario['endereco'];?>" >
  </div>

	<div class="form-group col-md-4">
	    <label for="inputNumber">Numero</label>
	    <input type="text" class="form-control" id="inputNumber" placeholder="000" name="numero" value="<?= $funcionario['numero'];?>" >
	  </div>

  <div class="form-group col-md-6">
    <label for="inputBairro">Bairro</label>
    <input type="text" class="form-control" id="inputBairro" placeholder="Bairro" name="bairro" value="<?= $funcionario['bairro'];?>">
  </div>

  <div class="form-group col-md-6">
    <label for="inputCity">Cidade</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Cidade" name="cidade" value="<?= $funcionario['cidade'];?>">
  </div>

  <!-- <div class="form-row"> -->

    <div class="form-group col-md-3">
      <label for="inputEstado">Estado</label>
      <input type="text" class="form-control" id="inputEstado" placeholder="Estado" name="estado" value="<?= $funcionario['cidade'];?>">
    </div>
   
	 <div class="form-group col-md-3">
	    <label for="inputTel">Telefone</label>
	    <input type="text" class="form-control" id="inputTel" placeholder="47999999999" name="telefone" value="<?= $funcionario['telefone'];?>">
	 </div>

	  <div class="form-group col-md-3">
	    <label for="inputMail">E mail</label>
	    <input type="email" class="form-control" id="inputMail" name="email" placeholder="brother@sytle.com" value="<?= $funcionario['email'];?>">
	 </div>

	 <div class="form-group col-md-3">
	    <label for="inputRG">RG</label>
	    <input type="text" class="form-control" id="inputRG" placeholder="RG, somente números" name="rg" value="<?= $funcionario['rg'];?>">
	 </div>

   
	 <div class="form-group col-md-4">
	    <label for="inputCPF">CPF</label>
	    <input type="text" class="form-control" id="inpuCPF" placeholder="47999999999" name="cpf" value="<?= $funcionario['cpf'];?>">
	 </div>

	  <div class="form-group col-md-4">
	    <label for="inputProfissao">Profissão</label>
	    <input type="text" class="form-control" id="inputProfissao" placeholder="Profissão" name="profissao" value="<?= $funcionario['profissao'];?>">
	 </div>

	 <div class="form-group col-md-4">
	    <label for="inputPorcentagem">Porcentagem</label>
	    <input type="text" class="form-control" id="inputPorcentagem" placeholder="Digite uma porcentagem, somente números" name="porcentagem" value="<?= $funcionario['porcentagem'];?>">
	 </div>

</div>

 
  <button type="submit" class="bt-right btn btn-primary btn-lg">Cadastrar</button>
  <a href="<?= BASE_URL;?>" class="bt-right red btn btn-secondary btn-lg">Cancelar</a>
</form>

<div class="space"></div>
</div>
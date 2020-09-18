

<form action="<?= BASE_URL;?>pesquisar/editarCliente" method="post">

	<h1>Clientes - editar</h1>
	<input display="none" class="none" type="text" name="id" value="<?php echo $cliente['id'];?>">
  <div class="form-row">

    <div class="form-group col-md-12">
      <label for="inputEmail4">Nome Completo</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome Completo" name="nome" value="<?= $cliente['nome'];?>" >
    </div>

    <div class="form-group col-md-6">
      <label for="inputSexo">Sexo</label>
      <input type="sexo" class="form-control" id="inputSexo" placeholder="Sexo" name="sexo" value="<?= $cliente['sexo'];?>">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Data de Nascimento</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="07/06/2020" name="data_nasc" value="<?= $cliente['data_nasc'];?>">
    </div>

  <!-- </div> -->

  <div class="form-group col-md-8">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0" name="endereco" value="<?= $cliente['endereco'];?>">
  </div>

	<div class="form-group col-md-4">
	    <label for="inputNumber">Numero</label>
	    <input type="text" class="form-control" id="inputNumber" placeholder="000" name="numero" value="<?= $cliente['numero'];?>">
	  </div>

  <div class="form-group col-md-6">
    <label for="inputBairro">Bairro</label>
    <input type="text" class="form-control" id="inputBairro" placeholder="Bairro" name="bairro" value="<?= $cliente['bairro'];?>">
  </div>

  <div class="form-group col-md-6">
    <label for="inputCity">Cidade</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Cidade" name="cidade" value="<?= $cliente['cidade'];?>">
  </div>

  <!-- <div class="form-row"> -->

    <div class="form-group col-md-3">
      <label for="inputEstado">Estado</label>
      <input type="email" id="inputEstado" class="form-control" name="estado" value="<?= $cliente['email'];?>" >
     
    </div>
   
	 <div class="form-group col-md-3">
	    <label for="inputTel">Telefone</label>
	    <input type="text" class="form-control" id="inputTel" placeholder="47999999999" name="telefone" value="<?= $cliente['telefone'];?>">
	 </div>

	  <div class="form-group col-md-3">
	    <label for="inputMail">E mail</label>
	    <input type="email" class="form-control" id="inputMail" name="email" placeholder="brother@sytle.com" value="<?= $cliente['email'];?>">
	 </div>

   
	 <div class="form-group col-md-3">
	    <label for="inputCPF">CPF</label>
	    <input type="text" class="form-control" id="inpuCPF" placeholder="47999999999" name="cpf" value="<?= $cliente['cpf'];?>">
	 </div>

</div>

 
  <button type="submit" class="bt-right btn btn-primary btn-lg">Cadastrar</button>
  <a href="<?= BASE_URL;?>" class="bt-right red btn btn-secondary btn-lg">Cancelar</a>
</form>

</div>
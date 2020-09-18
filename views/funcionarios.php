<div class="main-funcionarios">
<fieldset>
	<form action="<?= BASE_URL;?>funcionarios/addSave" method="post">

	<h1>Cadastro de Funcionarios</h1>

  <div class="form-row">

    <div class="form-group col-md-12">
      <label for="inputEmail4">Nome Completo</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome Completo" name="nome" >
    </div>

    <div class="form-group col-md-6">
      <label for="inputSexo">Sexo</label>
      <select id="inputSexo" class="form-control" name="sexo">
        <option selected>Sexo...</option>
        <option value="1">Masculino</option>
        <option value="0">Feminino</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Data de Nascimento</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="07/06/2020" name="data_nasc" >
    </div>

  <!-- </div> -->

  <div class="form-group col-md-8">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0" name="endereco">
  </div>

	<div class="form-group col-md-4">
	    <label for="inputNumber">Numero</label>
	    <input type="text" class="form-control" id="inputNumber" placeholder="000" name="numero">
	  </div>

  <div class="form-group col-md-6">
    <label for="inputBairro">Bairro</label>
    <input type="text" class="form-control" id="inputBairro" placeholder="Bairro" name="bairro">
  </div>

  <div class="form-group col-md-6">
    <label for="inputCity">Cidade</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Cidade" name="cidade">
  </div>

  <!-- <div class="form-row"> -->

    <div class="form-group col-md-3">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control" name="estado">
        <option selected>Escolher...</option>
        <option>AC</option>
        <option>AL</option>
        <option>AP</option>
        <option>AM</option>
        <option>BA</option>
        <option>CE</option>
        <option>DF</option>
        <option>ES</option>
        <option>GO</option>
        <option>MA</option>
        <option>MT</option>
        <option>MS</option>
        <option>MG</option>
        <option>PA</option>
        <option>PB</option>
        <option>PR</option>
        <option>PE</option>
        <option>PI</option>
        <option>RJ</option>
        <option>RN</option>
        <option>RS</option>
        <option>RO</option>
        <option>RR</option>
        <option>SC</option>
        <option>SP</option>
        <option>SE</option>
        <option>TO</option>
      </select>
    </div>
   
	 <div class="form-group col-md-3">
	    <label for="inputTel">Telefone</label>
	    <input type="text" class="form-control" id="inputTel" placeholder="47999999999" name="telefone">
	 </div>

	  <div class="form-group col-md-3">
	    <label for="inputMail">E-mail</label>
	    <input type="email" class="form-control" id="inputMail" name="email" placeholder="brother@sytle.com">
	 </div>

	 <div class="form-group col-md-3">
	    <label for="inputRG">RG</label>
	    <input type="text" class="form-control" id="inputRG" placeholder="RG, somente números" name="rg">
	 </div>

   
	 <div class="form-group col-md-4">
	    <label for="inputCPF">CPF</label>
	    <input type="text" class="form-control" id="inpuCPF" placeholder="47999999999" name="cpf">
	 </div>

	  <div class="form-group col-md-4">
	    <label for="inputProfissao">Profissão</label>
	    <input type="text" class="form-control" id="inputProfissao" placeholder="Profissão" name="profissao">
	 </div>

	 <div class="form-group col-md-4">
	    <label for="inputPorcentagem">Porcentagem</label>
	    <input type="text" class="form-control" id="inputPorcentagem" placeholder="Digite uma porcentagem, somente números" name="porcentagem">
	 </div>

</div>

 
  <button type="submit" class="bt-right btn btn-primary btn-lg">Cadastrar</button>
  <a href="<?= BASE_URL;?>" class="bt-right red btn btn-secondary btn-lg">Cancelar</a>
</form>
<div class="space"></div>
</fieldset>
</div>   
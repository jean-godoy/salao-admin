
<section class="cliente_edit">
<h1>Editar Relatório</h1>

<div class="form-row">	
	<form action="<?= BASE_URL;?>relatorios/edit" method="post">
		
		<input display="none" class="none" type="text" name="id" value="<?php echo $relatorio['id'];?>"><br>

		<div class="form-row">

	    <div class="form-group col-md-12">
	      <label for="inputServico">Serviço</label>
	      <input type="text" class="form-control" id="inputServico" value="<?php echo $relatorio['servico'];?>" name="servico" >
	    </div>
		
		<!-- Serviço: <input class="" type="text" name="servico" value="<?php echo $relatorio['servico'];?>"><br> -->

		<div class="form-group col-md-12">
	      <label for="inputDescricao">Descrição</label>
	      <input type="text" class="form-control" id="inputDescricao" value="<?php echo $relatorio['descricao'];?>" name="descricao" >
	    </div>

		
		<!-- Descricao: <input class="" type="" name="descricao" value="<?php echo $relatorio['descricao'];?>"><br> -->
		
		<div class="form-group col-md-12">
	      <label for="inputValor">Valor R$</label>
	      <input type="text" class="form-control" id="inputValor" value="<?php echo $relatorio['valor'];?>" name="valor" >
	    </div>
		
		<!-- Valor: <input class="" type="" name="valor" value="<?php echo $relatorio['valor'];?>"><br> -->
		
		<a class="red btn btn-secondary btn-lg bt-right" href="<?= BASE_URL;?>">Voltar</a>	
		<input class="bt-right btn btn-primary btn-lg" type="submit" value="Editar">
	
	</form>
</div>

 </section> 
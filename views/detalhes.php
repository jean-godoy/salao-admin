<section class="main-funcionarios">
	<h1>Relatório Completo</h1>
	<hr>
	 <!-- <h1>Relatorios referente ao Mês <?= $m;?></h1>
	<h3>Resultados encontrado(s): <?= $row;?></h3>
	 -->
	<table class="table">
		<thead class="thead-dark">
			<tr>
	 			<th class="col-3">Funcionario</th>
				<th class="col-3">Cliente</th>
		 		<th class="col-2">Serviço</th>
				<th class="col-2">Descrição</th>
				<th class="col-3">Valor</th>
				<th class="col-3">Hora</th>
				<th class="col-3">Data</th>
			</tr>
		</thead>
	 
		<tbody>
			<tr>
				<td class="none" ><?= $ordem['id'];?></td>
				<td class=""><?= $funcionario['nome'];?></td>
				<td class=""><?= $cliente['nome'];?></td>
				<td class=""><?= $ordem['servico'];?></td>
				<td class=""><?= $ordem['descricao'];?></td>
		 		<td class="" >R$ <?= number_format($ordem['valor'],2,",",".");?></td>
		 		<td class="" ><?=  date('H:i:s', strtotime($ordem['data'])); ?></td>
		 		<td class="" ><?=  date('d/m/Y', strtotime($ordem['data'])); ?></td>
				
					<!-- <a href="<?= BASE_URL;?>contatos/edit/<?= $mes['nome'];?>">[Editar]</a>
					<a href="<?= BASE_URL;?>contatos/delete/<?= $mes['servico'];?>">[Excluir]</a> -->
				</td>
			</tr>
		<tbody>

	</table>
	<a class="bt-right btn btn-primary btn-lg" href="<?= BASE_URL;?>">OK</a>
	<a class="yellow bt-right red btn btn-secondary btn-lg" href="<?= BASE_URL;?>relatorios/editar/<?=$ordem['id'];?>">Editar</a>
</section>

<section class="main-funcionarios">	
	<h1>Relatorios referente ao Mês <?= $m;?></h1>
	<h3>Resultados encontrado(s): <?= $row;?></h3>

	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th class="col-3">SERVIÇO</th>
				<th class="col-3">VALOR</th>
				<th class="col-3">HORA</th>
				<th class="col-3">DATA</th>
				<th class="col-2">MAIS</th>
			</tr>
		</thead>
	
		<tbody>

	 <?php foreach($mes	 as $item):?>

		<tr>
			<td class="none" ><?= $item['id'];?></td>
			<td class=""><?= $item['servico'];?></td>
	 		<td class="" >R$ <?= number_format($item['valor'],2,",",".");?></td>
	 		<td class="" ><?=  date('H:i:s', strtotime($item['data'])); ?></td>
	 		<td class="" ><?=  date('d/m/Y', strtotime($item['data'])); ?></td>
	 		<td class=""><a href="<?= BASE_URL;?>relatorios/detalhes/<?=$item['id'];?>">[...]</a></td>
			
			
		</tr>

	<?php endforeach; ?>
	</tbody>


	</table>
	<a class="bt-right btn btn-primary btn-lg" href="<?= BASE_URL;?>">OK</a>
	<a class="bt-right red btn btn-secondary btn-lg" href="<?= BASE_URL;?>relatorios/mensal">Voltar</a>
</section>


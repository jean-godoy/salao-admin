<section class="main-funcionarios">
	<h1>Relatorio referente ao periodo de:</h1>
	<h3><?= Generic::dataOut($inicio);?> há <?= Generic::dataOut($final);?></h3>

	<!-- <ul class=""> -->

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

	<?php foreach($intervalo as $item):?>
	
		<!-- <li class="periodo-li li">R$ 
			<?= Generic::number($item['valor']);?>  
			<div class="periodo-data"><?= Generic::dataTimeOut($item['data']);?></div>
		</li> -->
		<tr>
			 <td class="none" ><?= $item['id'];?></td>
			<td class=""><?= $item['servico'];?></td>
	 		<td class="" >R$ <?= number_format($item['valor'],2,",",".");?></td>
	 		<td class="" ><?=  date('H:i:s', strtotime($item['data'])); ?></td>
	 		<td class="" ><?=  date('d/m/Y', strtotime($item['data'])); ?></td>
	 		<td class=""><a href="<?= BASE_URL;?>relatorios/detalhes/<?=$item['id'];?>">[...]</a></td>
			
			
		</tr>
	<?php endforeach ?>

	<!-- </ul> -->
	</tbody>

	</table>

	


</section>
<a class="btn" href="<?= BASE_URL;?>">OK</a>
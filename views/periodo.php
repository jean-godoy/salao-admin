<section class="periodo">
	<h1>Extrato referente ao periodo de:</h1>
	<h2><?= Generic::dataOut($inicio);?> há <?= Generic::dataOut($final);?></h2>

	<ul class="list-group">

	<?php foreach($intervalo as $item):?>
	
		<li class="m1 list-group-item <?= $item['class']?>"><a class="a" href="<?= BASE_URL?>financeiro/detalhes/<?= $item['id_conta']?>">R$ 
			<?= Generic::number($item['valor']);?> 
			<div class="periodo-data"> <?= $item['motivo']?> - <?= Generic::dataTimeOut($item['data']);?></div></a>
		</li>
	<?php endforeach ?>

	</ul>

</section>



<section class="extrato_main">
		
	<h1>Extratos Geral</h1>
	<hr>	

	<div class="">

		<article class="extrato">

			<h3>Liquido</h3>

			<?php foreach($liquido as $item):?>
			
				<li class=""><?= Generic::number($item['valor']);?></a></li>
			<?php endforeach ?>
		</article>
		

		<article class="extrato">
			<h2>bruto</h2>
			<?php foreach($bruto as $item):?>
			
				<li class=""><?= Generic::number($item['valor']);?></a></li>
			<?php endforeach ?>
		</article>

		

	</div>


	<article class="total_g">
		<span class="total h">Total:</span>
		<span class="total t">Total Bruto: <?= Generic::number($total);?></span>
		<span class="total f">Total Funcionarios: <?=Generic::number($totalF);?></span>
		<span class="total l">Total Liquido: <?= Generic::number($totalL);?></span>
	</article>
		
</section>

<a class="btn" href="<?= BASE_URL;?>">Ok</a>
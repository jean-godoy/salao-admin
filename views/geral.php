<section class="main-funcionarios">
	<h1>Visão Geral</h1>
	<hr>
	<ul>
			<li class="li">Nome: Caixa</li>
			<li class="li">Valor R$: <?=  Generic::number($caixa['valor'])?></li>
			<hr>
		<?php foreach($geral as $item): ?>
			<li class="li">Conta: <?=$item['nome'];?></li>
			<li class="li">Valor R$: <?=  Generic::number($item['valor'])?></li>
			<hr>
		<?php endforeach; ?>	
	</ul>
	<a class="btn" href="<?= BASE_URL?>">OK</a>
	<button type="button" class="btn btn-primary">Primary</button>
	<div class="space"></div>
</section>
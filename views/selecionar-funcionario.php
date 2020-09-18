<section class="ordem">
	

	<ul class="list-group">
		<li class="dark-blue list-group-item">Selecione um funcioário</li>

		<?php foreach($funcionarios as $item): ?>

			<li class="list-group-item"><a class="a"  href="<?= BASE_URL?>financeiro/pagamento/<?= $item['id']?>"><?= $item['nome']?></a></li>

		<?php endforeach; ?>
	</ul>


</section>
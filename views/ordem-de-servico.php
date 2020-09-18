

<section class="ordem">
	
	<ul class="list-group">
		<li class="dark-blue list-group-item">Selecione um funcioário</li>

	<?php foreach($funcionarios as $item):?>
	
		<li class="list-group-item">Nome: <a class="" href="<?= BASE_URL;?>ordem/clientes/<?= $item['id']?>"><?= $item['nome']; ?></a></li>
	<?php endforeach ?>
	
	</ul>
	

</section>

<!-- <?php var_dump($funcionarios); ?> -->
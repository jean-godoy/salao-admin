<?php 

$item = array(); 
$dados['id_funcionario'] = $id_fun;

?>

<section class="ordem">

<ul class="list-group">
	<li class="dark-blue list-group-item">Selecione um cliente</li>

	<?php foreach($clientes as $item):?>
	
		<li class="list-group-item">Nome: <a class="" href="<?= BASE_URL;?>ordem/nova/<?= $item['id']?>/<?= $id_fun?>"><?= $item['nome']; ?></a></li>
	<?php endforeach ?>

</ul>

</section>

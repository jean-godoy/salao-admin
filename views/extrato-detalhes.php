
<section class="main-funcionarios">
	
	<h1>Extrato Detalhado</h1>

	<table class="table">
		<thead class="thead-dark">
	
			<tr>
				<th class="col-3">NOME</th>
				<th class="col-2">VALOR</th>
				<th class="col-3">MOTIVO</th>
				<th class="col-4">DESCRIÇÃO</th>
				<th class="col-2">HORA</th>
				<th class="col-2">DATA</th>
			</tr>
		</thead>
		
		<tbody>

			<tr>
				<td class=""><?= $detalhes['nome']?></td>
				<td class=""><?= $detalhes['valor']?></td>
				<td class=""><?= $detalhes['motivo']?></td>
				<td class=""><?= $detalhes['descricao']?></td>
				<td class=""><?= Generic::hora($detalhes['data'])?></td>
				<td class=""><?= Generic::dataOut($detalhes['data'])?></td>
			</tr>
		</tbody>
		

	</table>

	<a class="bt-right btn btn-primary btn-lg" href="<?= BASE_URL?>">OK</a>

</section>
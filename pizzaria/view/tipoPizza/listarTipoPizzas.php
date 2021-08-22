<div class="container">
	<fieldset>
		<h2 class="text-center">Os tipos de Pizzas</h2>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Id:</th>
					<th>Nome:</th>
					<th>Ações:</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($tipoPizza->findAll() as $key => $elem){
				?>
				<tr>
					<td><?= $elem['id'] ?></td>
					<td><?= $elem['nome'] ?></td>
					<td>
						<a href='?acao=editar_tipoPizza&id=<?= $elem['id'] ?>'
							class="btn btn-warning btn-circle">EDITAR
						</a>
						<a href='?acao=deletar_tipoPizza&id=<?= $elem['id'] ?>'
							class="btn btn-danger btn-circle">DELETAR
						</a>
					</td>
			<?php } ?>
				</tr>
			</tbody>
		</table>
	</fieldset>
</div>

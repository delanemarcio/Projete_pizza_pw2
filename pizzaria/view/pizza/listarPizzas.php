<div class="container">

		<h2 class="text-center">Pizzas</h2>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Id:</th>
					<th>Nome:</th>
					<th>Descricao:</th>
					<th>Valor:</th>
					<th>ID Tipo Pizza:</th>
					<th>Ações:</th>
				</tr>
			</thead>
			<tbody>
				<?php	foreach ($pizza->findAll() as $key => $elem){ ?>
				<tr>
					<td><?= $elem['id']; ?></td>
					<td><?= $elem['nome'] ?></td>
					<td><?= $elem['descricao'] ?></td>
					<td><?= $elem['valor'] ?></td>
					<td><?= $elem['id_tipo_pizza'] ?></td>
					<td>
						<a href='?acao=editar_pizza&id=<?= $elem['id'] ?>'
							class="btn btn-warning btn-circle">EDITAR
						</a>
						<a href='?acao=deletar_pizza&id=<?= $elem['id'] ?>'
							class="btn btn-danger btn-circle">DELETAR
						</a>
					</td>
				<?php } ?>
				</tr>
			</tbody>
		</table>
</div>

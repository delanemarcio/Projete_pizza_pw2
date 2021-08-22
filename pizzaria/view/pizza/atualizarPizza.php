<div class="container">
	<form method="post" class="form-group">

			<h2 class="text-center">Atualize a Pizza</h2>

			<label class="control-label" >Nome: </label>
			<div class="form-group input-group">
				<input type="text" name="nome" value="<?= $resultPizza['nome'] ?>" class="form-control" />
			</div>

			<label class="control-label" >descricao: </label>
			<div class="form-group input-group">

				<input type="descricao" name="descricao" value="<?= $resultPizza['descricao'] ?>" class="form-control" />
			</div>

			<label class="control-label" >valor: </label>
			<div class="form-group input-group">
				<input type="number" name="valor" value="<?= $resultPizza['valor'] ?>" class="form-control" />
			</div>
			<br>
			<div class="form-group input-group">
				<select class="form-control" name="tipoPizza">
					<?php foreach ($tipoPizza->findAll() as $key => $elem){ ?>
						<option value="<?= $elem['id']?>"> <?= $elem['nome']?></option>
					<?php } ?>
				</select>
			</div>
			<br>
			<div class="form-group input-group">
				<input type="hidden" name="id" value="<?= $resultPizza['id'] ?>">
				<input type="submit" name="acao" value="Atualizar Pizza" class="btn btn-success">
			</div>

	</form>
</div>

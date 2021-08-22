<div class="container">
	<form method="post" class="form-group">

			<h2 class="text-center">Cadastrar Pizza</h2>

			<label class="control-label" >Nome: </label>
			<div class="form-group input-group">
				<input type="text" name="nome" class="form-control" />
			</div>

			<label class="control-label" >descricao: </label>
			<div class="form-group input-group">

				<input type="descricao" name="descricao" class="form-control" />
			</div>

			<label class="control-label" >valor: </label>
			<div class="form-group input-group">
				<input type="number" name="valor" class="form-control" />
			</div>
			<br>
			<div class="form-group input-group">
				<select class="form-control"	 name="tipoPizza">
					<?php foreach ($tipoPizza->findAll() as $key => $elem){ ?>
						<option value="<?= $elem['id']?>"><?= $elem['nome']?></option>
					<?php } ?>
				</select>
			</div>
			<br>
			<div class="form-group input-group">
				<input type="submit" name="acao" value="Cadastrar Pizza" class="btn btn-success">
			</div>

	</form>
</div>

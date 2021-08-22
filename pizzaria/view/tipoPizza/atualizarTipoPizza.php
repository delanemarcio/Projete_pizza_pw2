<div class="container">
	<form method="post" class="form-group">
			<h2 class="text-center">Atualizar tipo de pizza</h2>
			<label class="control-label" >Nome: </label>
			<div class="form-group input-group">
				<input type="text" name="tipoPizza" class="form-control"  value="<?= $resultTipo['nome'] ?>"/>
			</div>
			<input type="hidden" name="id" value="<?= $resultTipo['id'] ?>">
			<br>
			<div class="form-group input-group">
				<input type="submit" name="acao" value="Atualizar Tipo de Pizza" class="btn btn-success">
			</div>
	</form>
</div>

<?php

require_once "./controllers/Pizzas.php";
require_once "./controllers/TipoPizzas.php";

  include_once "view/header.php";

  	$pizza = new Pizzas();
  	$tipoPizza = new TipoPizzas();

  	?>
<?php

  	if (isset($_POST['acao'])) {

  		switch ($_POST['acao']) {

  			case 'Cadastrar Pizza':

  			$pizza->setNome($_POST['nome']);
  			$pizza->setDescricao($_POST['descricao']);
			$pizza->setValor($_POST['valor']);
  			$pizza->setTipoPizza($_POST['tipoPizza']);
			if ($pizza->insert()) { ?>
				<div class="alert alert-success alert-dismissable">
					Inserido com sucesso
				</div>
				<?php
			}
		
  			
  			break;

  			case 'Atualizar Pizza':
  			$pizza->setNome($_POST['nome']);
  			$pizza->setDescricao($_POST['descricao']);
  			$pizza->setValor($_POST['valor']);
			$pizza->setTipoPizza($_POST['tipoPizza']);

  				$pizza->update($_POST['id']); ?>
  				<div class="alert alert-success alert-dismissable">
  					Atualizado com sucesso
  				</div>
  				<?php
  			break;

  			case 'Cadastrar Tipo Pizza':
  			$tipoPizza->setNome($_POST['tipoPizza']);
?>
  			<?php
  				if ($tipoPizza->insert()) {
  					?>
  					<div class="alert alert-success alert-dismissable">
  						Inserido com sucesso
  					</div>
  					<?php
  				}

  				break;
  				case 'Atualizar Tipo de Pizza':
  				$tipoPizza->setNome($_POST['tipoPizza']);
  				if ($tipoPizza->update($_POST['id'])) {
  					?>
  					<div class="alert alert-success alert-dismissable">
  						Atualizado com sucesso
  					</div>
  					<?php
  				}
  				break;
  			}
		}

  		if (isset($_GET['acao'])) {
  			switch ($_GET['acao']) {

  				case 'deletar_pizza':
  				$id = (int)$_GET['id'];
  				if ($pizza->delete($id)) {
  					?>
  					<div class="alert alert-success alert-dismissable">
  						Deletada com sucesso
  					</div>
  					<?php
  				}
  				break;

  				case 'editar_pizza':
  				$id = (int)$_GET['id'];
  				$resultPizza = $pizza->find($id);
  				include "view/pizza/atualizarPizza.php";
  				break;

  				case 'nova_pizza':
  				include "view/pizza/cadastrarPizza.php";
  				break;
				  
  				case 'listar_pizzas':
  				include "view/pizza/listarPizzas.php";
  				break;


  				case 'deletar_tipoPizza':
  				$id = (int)$_GET['id'];
  				if ($tipoPizza->delete($id)) {
  					?>
  					<div class="alert alert-success alert-dismissable">
  						Deletado com sucesso
  					</div>
  					<?php
  				}
  				break;
  				case 'editar_tipoPizza':
  				$id = (int)$_GET['id'];
  				$resultTipo = $tipoPizza->find($id);
  				include "view/tipoPizza/atualizarTipoPizza.php";
  				break;
  				case 'novo_tipoPizza':
  				include "view/tipoPizza/cadastrarTipoPizza.php";
  				break;
  				case 'listar_tipoPizzas':
  				include "view/tipoPizza/listarTipoPizzas.php";
  				break;
  			}
  		
	}
	
	include "view/footer.php";
<?php 
// controlador da pagina inicial
class ordemController extends controller{

	// verifica se usuario esta logado, caso contrario redireciona para login
	public function __construct(){
		$u = new Login();

		if(!$u->isLogged()){
			header("Location: ".BASE_URL."login");
		}

	}

	//action, metodo padrao
	public function index(){

		$dados = array('' =>  '');

		$resultado = new Ordem();
		$dados['funcionarios'] = $resultado->getFuncionarios();


		// inclue arquivo que esta dentro da pasta view, e envia paramentro
		$this->loadTemplate('ordem-de-servico', $dados);

	}

	public function clientes($id){
		//recebe o id do funcionario selecionado e exibe uma lista de seleção de clientes
		
		$resultado = new Pesquisar();
		$dados['id_fun'] = $id;
		$dados['clientes'] = $resultado->getClientes();
		$this->loadTemplate('cliente-ordem', $dados);
	}

	public function nova($id_cliente, $id_fun){
		$dados = array();
		
		$generic = new Generic();
		$dados['funcionario'] = $generic->getFuncionario($id_fun);
		$dados['cliente'] = $generic->getCliente($id_cliente);

		$this->loadTemplate('nova-ordem', $dados);
	}

	public function gerar(){


		if(!empty($_POST['servico'])){
			
			$dados = array(
				'idC' => $_POST['id_cliente'],
				'idF' => $_POST['id_fun'],
				'servico' => $_POST['servico'],
				'descricao' => $_POST['descricao'],
				'valor' => $_POST['valor'],
				'data' => date('Y-m-d H:i:s', time()),
			);

			$motivo = "Pagamento Funcionario";
			$descricao = "Pagamento da % do funcionario";
			$class = "green";

			$add = new Ordem();
			//equação que faz a divisão por porcentagem resultado e sobra
			$valor = $dados['valor'];
			//pega o valor da porcentagem pre definido na tabela funcionarios->porcentagem
			$percentual =  $add->getPorcentagem($dados['idF']);

			$valor_funcionario = $valor - (($percentual['porcentagem'] / 100) * $valor);

			$valor_caixa = $valor - $valor_funcionario;
		
			//adiciona na tabela conta o valor do funcionario acrecentado ++
			$add->addConta($dados['idF'], $valor_funcionario);

			$add->addConta('199', $valor_caixa);

			// adiciona ao extrado dados do pagamento do funcionario
			$add->extrato($dados['idF'], $valor_funcionario, $motivo, $descricao, $class, $dados['data']);

			// adiciona ao extrado dados do pagamento do loja
			$add->extrato('199', $valor_caixa, 'Pagamento caixa', 'Pagamento da % da loja', 'yellow', $dados['data']);

			var_dump($dados);
			// $add->addCaixa($valor_caixa, $dados['data']);
			// $add->addContaFuncionario($dados['idF'], $valor_funcionario, $dados['data']);
			if($add->addOrdem($dados) == true)
			{
				echo "Ordem Cadastrada";
				echo "<a class='btn' href='".BASE_URL."'>Ok</a>";
			}
		}

		
	}

	



}


 ?>
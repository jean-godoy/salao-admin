<?php 

class pesquisarController extends controller{

	// verifica se usuario esta logado, caso contrario redireciona para login
	public function __construct(){
		$u = new Login();

		if(!$u->isLogged()){
			header("Location: ".BASE_URL."login");
		}
	}

	public function index(){
		$dados = array();
		$this->loadTemplate('pesquisar', $dados);
	}

	public function clientesP(){
		
		$resultado = new Pesquisar();
		$dados['clientes'] = $resultado->getClientes();
		$this->loadTemplate('clientes_consulta', $dados);
	}

	public function funcionariosP(){
		$resultado = new Pesquisar();
		$dados['funcionarios'] = $resultado->getFuncionarios();
		// var_dump($dados);
		$this->loadTemplate('funcionarios_consulta', $dados);	
	}

	public function id($id){
		$res = new Pesquisar();
		$dados['cliente'] =  $res->getClienteId($id);
		// var_dump($dados);:
		$this->loadTemplate('cliente_id', $dados);
	}

	public function funcionarioId($id){
		$res = new Pesquisar();
		$dados['funcionario'] =  $res->getFuncionarioId($id);
		// var_dump($dados);:
		$this->loadTemplate('funcionario_id', $dados);
	}

	public function funcionarios(){
		$dados = array();
		$this->loadTemplate('funcionarios_consulta', $dados);
	}

	public function clienteEditar($id){
		$res = new Pesquisar();
		$dados['cliente'] =  $res->getClienteId($id);
		// var_dump($dados);
		$this->loadTemplate('cliente-editar', $dados);
	}

	public function funcionarioEditar($id){
		$res = new Pesquisar();
		$dados['funcionario'] = $res->getFuncionarioId($id);
		$this->loadTemplate('funcionario-editar', $dados);
	
	}

	public function editarCliente(){

		

			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$sexo = $_POST['sexo'];
			$data_nasc = Generic::dataIn($_POST['data_nasc']);
			$endereco =  $_POST['endereco'];
			$numero =  $_POST['numero'];
			$bairro =  $_POST['bairro'];
			$cidade =  $_POST['cidade'];
			$estado = $_POST['estado'];
			$telefone =  $_POST['telefone'];
			$cpf =  $_POST['cpf'];
			$email =  $_POST['email'];

			$editado = new Pesquisar();

			if($editado->editClient($id, $nome, $sexo, $data_nasc, $endereco, $numero, $bairro, $cidade, $estado, $telefone, $cpf, $email) == true){
		
				echo "
					<div class='editado'>
					 	<label>
					 		Cliente: ".$nome." editado com sucesso!
					 		<a class='btn' href='".BASE_URL."'>Ok</a>
					 	</label>
					 </div>
				";
			}

		
	}


	public function editarFuncionario(){

		

			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$sexo = $_POST['sexo'];
			$data_nasc = Generic::dataIN($_POST['data_nasc']);
			$endereco =  $_POST['endereco'];
			$numero =  $_POST['numero'];
			$bairro =  $_POST['bairro'];
			$cidade =  $_POST['cidade'];
			$estado = $_POST['estado'];
			$telefone =  $_POST['telefone'];
			$rg =  $_POST['rg'];
			$cpf =  $_POST['cpf'];
			$email =  $_POST['email'];
			$profissao = $_POST['profissao'];
			$porcentagem = $_POST['porcentagem'];

			$editado = new Pesquisar();

			if($editado->editFun($id, $nome, $sexo, $data_nasc, $endereco, $numero, $bairro, $cidade, $estado, $telefone, $rg, $cpf, $email, $profissao, $porcentagem) == true){
				echo "string";
				echo "
					<div class='editado'>
					 	<label>
					 		Funcionario: ".$nome." editado com sucesso!
					 		<a class='btn' href='".BASE_URL."'>Ok</a>
					 	</label>
					 </div>
				";
			}

		
	}
}


 ?>

 
<?php 

class relatoriosController extends controller{

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

		


		// inclue arquivo que esta dentro da pasta view, e envia paramentro
		$this->loadTemplate('relatorios', $dados);

	}

	public function diario(){
		$dados = array('' =>  '');
		$this->loadTemplate('diario', $dados);
	}

	public function dia_resultado(){

		$dia = $_POST['dia'];
		$res = new Relatorios();
		$dados['d'] = $dia;
		$dados['dia'] = $res->getDay($dia);
		$dados['row'] = $res->getRow('Day',$dia);
		
		$this->loadTemplate('dia-resultado', $dados);

	}

	public function mensal(){

		$dados = array('' =>  '');

		// var_dump($dados);

		// inclue arquivo que esta dentro da pasta view, e envia paramentro
		$this->loadTemplate('mes', $dados);
	}

	public function mes_resultado(){

		$mes = $_POST['mes'];
		$res = new Relatorios();
		$dados['m'] = $mes;
		$dados['mes'] = $res->getMonth($mes);
		$dados['row'] = $res->getRow('Month',$mes);
		$this->loadTemplate('mes-resultado', $dados);

	}

	public function anual(){

		$dados = array('' =>  '');

		// var_dump($dados);

		// inclue arquivo que esta dentro da pasta view, e envia paramentro
		$this->loadTemplate('ano', $dados);
	}

	public function ano_resultado(){

		$ano = $_POST['ano'];
		$res = new Relatorios();
		$dados['a'] = $ano;
		$dados['ano'] = $res->getYear($ano);
		$dados['row'] = $res->getRow('year',$ano);
		$this->loadTemplate('ano-resultado', $dados);

	}


	//modtra relatorio completo de uma unica ordem, buscando pelo id
	public function detalhes($id){
		
		$dados = array();
		$r = new Relatorios();
		$dados['ordem'] = $r->getOrdem($id);
		$dados['funcionario'] = $r->getFuncionario($dados['ordem']['id_f']);
		$dados['cliente'] = $r->getCliente($dados['ordem']['id_c']);
		
		// var_dump($dados['cliente']);
		$this->loadTemplate('detalhes', $dados);
	}

	//abre função para edição buscando conteudo pelo id
	public function editar($id){
		$dados= array();
		$r = new Relatorios();
		// $dados['id_ordem'] = $id;
		$dados['relatorio'] = $r->getOrdem($id);
		$this->loadTemplate('editar-relatorio', $dados);
	}


	// captura todos os post, e manda para o model Relatorios, para edição
	public function edit(){
		$dados = array(
			'id' => $_POST['id'],
			'servico' => $_POST['servico'],
			'descricao' => $_POST['descricao'],
			'valor' => $_POST['valor']
		);

		$e = new Relatorios();

		if($e->editando($dados) == true){
			
			

				
				echo "
					<div class='editado'>
					 	<label>
					 		Relatorio editado com sucesso!
					 		<a class='btn' href='".BASE_URL."'>Ok</a>
					 	</label>
					 </div>
				";
			}


	}

	public function intervalo(){

		$dados = array();
		$this->loadTemplate('intervalo-relatorio', $dados);
	}

	public function getIntervalo(){

		$dados = array();

		$inicio = Generic::dataA($_POST['inicio']);
		$final = Generic::dataA($_POST['final']);
		$tabela = "ordem_servico";
		

		if($inicio < $final){	
			$int = new Relatorios();
			$dados['inicio'] = $inicio;
			$dados['final'] = $final;
			$dados['intervalo'] = $int->intervalo($inicio, $final, $tabela);

		}else{
			$dados['mensagem'] = "A primeira data tem que ser menor que a ultima!";
			$dados['caminho'] = "relatorios/intervalo";
			$this->loadTemplate('alert', $dados);
			die();


		}
		// var_dump($dados);

		$this->loadTemplate('relatorio-resultado-intervalo', $dados);
	}

}



 ?>
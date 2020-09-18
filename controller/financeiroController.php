<?php 

class financeiroController extends controller{

	// verifica se usuario esta logado, caso contrario redireciona para login
	public function __construct(){
		$u = new Login();

		if(!$u->isLogged()){
			header("Location: ".BASE_URL."login");
		}

	}
	
	//action, metodo padrao
	public function index(){
		
		// manda todos dados para exibição no view, caso necessario
		$dados = array('' =>  '');

		// inclue arquivo que esta dentro da pasta view, e envia paramentro
		$this->loadTemplate('financeiro', $dados);

	}

	public function extrato(){
		$dados = array();
		// $financeiro = new Financeiro();
		// $dados['liquido'] = $financeiro->liquido();
		// $dados['bruto'] = $financeiro->bruto();
		// $dados['rowL'] = $financeiro->getRow('valor', 'conta_caixa');
		// $dados['rowB'] = $financeiro->getRow('valor', 'conta_funcionarios');
		// $dados['totalL'] = Generic::soma($dados['rowL'], $dados['liquido'], 'valor');
		// $dados['totalF'] = Generic::soma($dados['rowB'], $dados['bruto'], 'valor');
		// $dados['total'] = $dados['totalL'] + $dados['totalF'];

		// var_dump($dados['soma']);
		$this->loadTemplate('selecione-extrato', $dados);
	}

	public function intervalo(){

		$dados = array();
		$dados['inicio'] = Generic::dataA($_POST['inicio']);
		$dados['final'] = Generic::dataA($_POST['final']);

		if($dados['inicio'] < $dados['final']){
			$int = new Financeiro();
			$dados['intervalo'] = $int->intervalo($dados['inicio'], $dados['final'], 'extrato');
			// $dados['tudo'] = $int->tudo();
			// var_dump($dados['intervalo']);
		}else{
			$dados['mensagem'] = "A <b>primeira data</b> tem que ser <b>menor que a ultima!</b>";
			$dados['caminho'] = "financeiro/extrato";
			$this->loadTemplate('alert', $dados);
			die();
		}

		$this->loadTemplate('periodo', $dados);
	}

	public function sacar_caixa(){
		$dados = array();

		$saque = new Financeiro();
		$dados['bruto'] = $saque->ValorBruto();
		$dados['caixa'] = $saque->getCaixa();
		// var_dump($dados);
		$this->loadTemplate('sacar-caixa', $dados);

	}

	public function efetuarSaque(){

		$dados = array();
		$valor = $_POST['valor'];
		$descricao = $_POST['descricao'];
		$data = date('Y-m-d H:i:s', time());
		$class = "red";
		$motivo = "saque";

		$saque = new Financeiro();
		$dados['caixa'] = $saque->getCaixa();

		if($dados['caixa']['valor'] >= $valor){

			$saque->saque($valor);
			$saque->extrato('199', $valor, $motivo,  $descricao, $class, $data);
		}
	}

	public function geral(){
		$dados = array();

		$geral = new Financeiro();
		$dados['caixa'] = $geral->getCaixa();
		$dados['geral'] = $geral->getGeral();
		// var_dump($dados['caixa']['valor']);

		$this->loadTemplate('geral', $dados);

	}

	public function detalhes($id){

		$dados = array();

		$detalhes = new Financeiro();
		$dados['detalhes'] = $detalhes->extratoDetalhes($id);
		// var_dump($dados);

		$this->loadTemplate('extrato-detalhes', $dados);
	}

	public function pagarFuncionario(){

		$dados = array();

		$pagar = new Financeiro();
		$dados['funcionarios'] = $pagar->getGeral();


		$this->loadTemplate('selecionar-funcionario', $dados);
	}

	public function pagamento($id){
		$dados= array();

		$pag = new Financeiro();
		$dados['pagamento'] = $pag->pagar($id);

		$this->loadTemplate('pagamento', $dados);

	}

	public function efetuarPagamento(){

		$dados = array();
		$dados['id'] = $_POST['id'];
		$dados['nome'] = $_POST['nome'];
		$dados['valor'] = $_POST['valor'];

		$motivo = "pagamento";
		$descricao = "Referente ao pagamento das porcentagens";
		$class = "red";
		$data = date('Y-m-d H:i:s', time());

		$efetuar = new Financeiro();
		
		$efetuar->pagamento($dados['id'], $dados['valor']);
		$efetuar->extrato($dados['id'], $dados['valor'], $motivo,  $descricao, $class, $data);
		
		echo "Pagamento efetuado com sucesso!";
		echo "<hr>";
		echo "Você pagou R$: ".$dados['valor']." há ".$dados['nome'];
		echo "<a class='btn' href='".BASE_URL."'>OK</a>";

	}


}


 ?>
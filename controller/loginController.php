<?php 

Class loginController extends controller{

	//no caso de login não puchamos o tamplate inicial, mas sim um template de login independente usando metodo loadView
	public function index(){

		$dados = array('aviso' => '');

		// if(isset($_POST['email']) && !empty($_POST)){

		// 	if(!empty($_POST['email']) && !empty($_POST['senha'])){
                                                                   
		// 		$email = addslashes($_POST['email']);
		// 		$senha = md5($_POST['senha']);

		// 		$u = new usuarios();

		// 		if($u->checkLog($email, $senha)){
		// 			$user = $u->getUser();
		// 			$_SESSION['user'] = $user['id'];
		// 			$_SESSION['nome'] = $user['nome'];
		// 			header("Location: /login");
		// 		}else{
		// 			$dados['aviso'] = "Email ou senha invalidos";
		// 		}
		// 	}else{
		// 		$dados['aviso'] = "Preencha todos os campos";
		// 	}
		// }

		$this->loadView('login', $dados);
	}

	public function checkLog(){

		if(isset($_POST['user']) && !empty($_POST)){

			$user = $_POST['user'];
			$pass = $_POST['pass'];

			$u = new Login();

			if($u->checked($user, $pass) === true){
				
				$user = $u->getUser();

				$_SESSION['user_id'] = $user['id'];
				$_SESSION['user_name'] = $user['user'];

				header("Location: ".BASE_URL."home");

			}else{
				echo "usuario nao cadastrado";
			}

			var_dump($_SESSION);
		}
	}

	public function logOut(){
		unset($_SESSION['user_name']);
		unset($_SESSION['user_id']);
		header("Location: ".BASE_URL."login");
	}

}

 ?>
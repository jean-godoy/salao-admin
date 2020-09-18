<?php 

class Login extends model{

	private $Dados;

	public function checked($user, $pass){

		$sql = "SELECT * FROM login WHERE user = :user AND pass = :pass";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':user', $user);
		$sql->bindValue(':pass', md5($pass));
		$sql->execute();

		if($sql->rowCount() > 0 ){
			$this->Dados = $sql->fetch();
			return true;
		}else{
			return false;
		}

	}

	public function getUser(){
		 return $this->Dados;
	}

	public function isLogged(){

		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
			return true;
		}else{
			return false;
			die();
		}

	}

}

 ?>
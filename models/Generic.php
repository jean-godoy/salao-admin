<?php 

class Generic extends model{

	//busca funcionario pelo id
	public function getFuncionario($id){
		$dados = array();

		$sql = "SELECT * FROM funcionarios WHERE id = :id";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		}

		return $dados;
	}

	//busca cliente pelo id
	public function getCliente($id){
		$dados = array();

		$sql = "SELECT * FROM clientes WHERE id = :id";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		}

		return $dados;
	}


	private function emailExists($email){
		$sql = "SELECT * FROM clientes WHERE email = :email";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}

	public static function soma($row, array $valor, $indice){
		$r = null;
		for ($i=0; $i < $row ; $i++) { 
			
			$r = $r + $valor[$i][$indice];

		}

		return $r;

	}

	public static function number($valor){
		$dados = number_format($valor,2,",",".");
		return $dados;
	}

	public static function dataTimeOut($data){
		$dados = date('H:i:s \ - \ d/m/Y ', strtotime($data));
		return $dados;
	}

	public static function hora($hora){
		$dados = date('H:i:s', strtotime($hora));
		return $dados;
	}

	public static function dataIn($data){
		$dados = date('Y-m-d', strtotime($data));
		return $dados;
	}

	public static function dataOut($data){
		$dados = date('d/m/Y', strtotime($data));
		return $dados;
	}

	public static function dataA($data){
		$dados = implode("-",array_reverse(explode("/",$data)));
		return $dados;
	}

	public static function sexo($sexo){

		if($sexo == 1){
			return "Masculino";
		}elseif ($sexo == 0) {
			return "Feminino";
		}

	}

	public function checkEmail($tabela, $email)
	{
		$sql = "SELECT * FROM {$tabela} WHERE email = (:email) ";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':email', $email);
		// $sql->bindValue(':tabela', $tabela);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else{
			return false;
		}

	}

	public static function message($type,$mensagem)
	{
		return "
			<div class='{$type} message'>
				<p>{$mensagem}</p>
			</div>
		";
	}

}
 ?>
<?php  


class Ordem extends model{

	public function getFuncionarios(){
		$dados = array();

		$sql = "SELECT * FROM funcionarios";
		$sql = $this->Db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
		}

		return $dados;
	}

	public function addOrdem(array $dados){

			$sql = "INSERT INTO ordem_servico (id_f, id_c, servico, descricao, valor, data) VALUES (:id_f, :id_c, :servico, :descricao, :valor, :data)";

			
			$sql = $this->Db->prepare($sql);
			$sql->bindValue(':id_f', $dados['idF']);
			$sql->bindValue(':id_c', $dados['idC']);
			$sql->bindValue(':servico', $dados['servico']);
			$sql->bindValue(':descricao', $dados['descricao']);
			$sql->bindValue(':valor', $dados['valor']);
			$sql->bindValue(':data', $dados['data']);
			
	
			$sql->execute();
		
			return true;

	}

	public function addCaixa($valor, $data){

		$sql = "INSERT INTO conta_caixa (valor, data) VALUES (:valor, :data)";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':valor', $valor);
		$sql->bindValue(':data', $data);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else{
			return "erro na conta caixa";
		}

	}

	public function addContaFuncionario($id,$valor,$data){
		$sql = "INSERT INTO conta_funcionarios (id_f,valor,data) VALUES (:id_f, :valor, :data)";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id_f', $id);
		$sql->bindValue(':valor', $valor);
		$sql->bindValue(':data', $data);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else{
			return "erro inserir na conta funcionarios";
		} 
	}

	public function getPorcentagem($id_funcionario){

		$sql = "SELECT porcentagem FROM funcionarios WHERE id = :id";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id_funcionario);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
			return $dados;
		}else{
			return "Nenhuma porcentagem encontrada";
		}
	}

	public function addConta($id, $valor)
	{
		$sql = "UPDATE conta SET valor = valor + :valor  WHERE id = :id";

		$sql = $this->Db->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->bindValue(':valor', $valor);
			$sql->execute();

			// if($sql->rowCount() > 0){
			// 	$array = $sql->fetch();
			// 	return true;			
			// }

	}

	public function extrato($id_conta, $valor, $motivo, $descricao, $class, $data){

		$sql = "INSERT INTO extrato (id_conta, valor, motivo, descricao, class, data) VALUES (:id_conta, :valor, :motivo, :descricao, :class, :data)";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id_conta', $id_conta);
		$sql->bindValue(':valor', $valor);
		$sql->bindValue(':motivo' , $motivo);
		$sql->bindValue(':descricao', $descricao);
		$sql->bindValue(':class', $class);
		$sql->bindValue(':data', $data);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else{
			return false;
		}

	}



}

?>
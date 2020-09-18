<?php 

class Financeiro extends model{

	//monta o relatorio liquido
	public function liquido(){

		$sql = "SELECT valor FROM conta_caixa";
		$sql = $this->Db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
			return $dados;
		}else{
			return "Nenhum valor encontrado";
		}
	}

	public function bruto(){

		$sql = "SELECT valor FROM conta_funcionarios";
		$sql = $this->Db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
			return $dados;
		}else{
			return "Nenhum valor encontrado na conta Funcionrios";
		}

	}

	//pega numero de resultado
	public function getRow($indice, $tabela){

		$sql = "SELECT {$indice} FROM {$tabela}";
		$sql = $this->Db->prepare($sql);
		// $sql->bindValue(':indice', $indice);
		// $sql->bindValue(':tabela', $tabela);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->rowCount();
			return $dados;
		}else{
			return "Nenhum valor encontrado";
		}
	}

	public function intervalo($inicio, $final, $tabela){

		$sql = "SELECT * FROM {$tabela} WHERE data BETWEEN '{$inicio}' AND '{$final}'";
		$sql = $this->Db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
			return $dados;
		}else{
			return "Nenhum valor encontrado";
		}
	}

	public function tudo(){
		$sql = "SELECT conta_funcionarios.valor, conta_caixa.valor FROM conta_funcionarios, conta_caixa";
		$sql = $this->Db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
			return $dados;
		}else{
			return "Nenhum valor encontrado";
		}

	}

	public function getCaixa(){

		$sql = "SELECT valor FROM conta WHERE id = '199'";
		$sql = $this->Db->prepare($sql);

		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
			return $dados;
		}else{
			return "Nenhum dado encontrado";
		}
	}

	public function getGeral(){

		$sql = "SELECT conta.*, funcionarios.nome FROM conta, funcionarios WHERE conta.id = funcionarios.id";
		$sql = $this->Db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
			return $dados;
		}else{
			return "Nenhum dado encontrado";
		}
	}

	public function valorBruto(){
		$sql = "SELECT SUM(valor) AS valor  FROM conta";
		$sql = $this->Db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
			return $dados;
		}else{
			return "Nenhum dado encontrado";
		}
	}

	public function saque($valor){

		$sql = "UPDATE conta SET valor = valor - :valor  WHERE id = 199";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':valor', $valor);
		$sql->execute();
	}

	public function extrato($id_conta, $valor, $motivo, $descricao, $class, $data){

		$sql = "INSERT INTO extrato (id_conta, valor, motivo, descricao, class, data) VALUES (:id_conta, :valor, :motivo, :descricao, :class, :data)";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id_conta', $id_conta);
		$sql->bindValue(':valor', $valor);
		$sql->bindValue(':motivo', $motivo);
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

	public function extratoDetalhes($id){

		$sql = "SELECT extrato.*, funcionarios.nome FROM extrato, funcionarios WHERE id_conta = :id ";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
			return $dados;
		}else{
			return "Nenhum extrato disponivel";
		}

	}

	public function pagar($id){

		$sql = "SELECT conta.*, funcionarios.nome FROM conta, funcionarios WHERE conta.id = :id ";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
			return $dados;
		}else{
			return "Nenhum extrato disponivel";
		}
	}

	public function pagamento($id,$valor){

		$sql = "UPDATE conta SET valor = valor - :valor  WHERE id = :id";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->bindValue(':valor', $valor);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}



}


 ?>
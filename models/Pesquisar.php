<?php 

class Pesquisar extends model{

	public function getClientes(){
		$dados = array();

		$sql = "SELECT * FROM clientes";
		$sql = $this->Db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
		}

		return $dados;

	}

	public function getClienteId($id){
		$dados = array();
		$sql = "SELECT * FROM clientes WHERE id = :id";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue('id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		}

		return $dados;
	}

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

	public function getFuncionarioId($id){
		$dados = array();
		$sql = "SELECT * FROM funcionarios WHERE id = :id";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue('id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		}

		return $dados;
	}

	public function editClient($id, $nome, $sexo, $data_nasc, $endereco, $numero, $bairro, $cidade, $estado, $telefone, $cpf, $email)
	{
		$sql = "UPDATE clientes SET nome = :nome, sexo = :sexo, data_nasc = :data_nasc, endereco = :endereco, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, telefone = :telefone, cpf = :cpf, email = :email WHERE id = :id";

		$sql = $this->Db->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':sexo', $sexo);
			$sql->bindValue(':data_nasc', $data_nasc);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':numero', $numero);
			$sql->bindValue(':bairro', $bairro);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':estado', $estado);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':cpf', $cpf);
			$sql->bindValue(':email', $email);
		
			$sql->execute();

			if($sql->rowCount() > 0){
				// $dados = $sql->fetch();
				return true;			
			}

	}

	public function editFun($id, $nome, $sexo, $data_nasc, $endereco, $numero, $bairro, $cidade, $estado, $telefone, $rg, $cpf, $email, $profissao, $porcentagem)
	{
		$sql = "UPDATE funcionarios SET nome = :nome, sexo = :sexo, data_nasc = :data_nasc, endereco = :endereco, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, telefone = :telefone, rg = :rg, cpf = :cpf, email = :email, profissao = :profissao, porcentagem = :porcentagem WHERE id = :id";

		$sql = $this->Db->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':sexo', $sexo);
			$sql->bindValue(':data_nasc', $data_nasc);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':numero', $numero);
			$sql->bindValue(':bairro', $bairro);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':estado', $estado);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':rg', $rg);
			$sql->bindValue(':cpf', $cpf);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':profissao', $profissao);
			$sql->bindValue(':porcentagem', $porcentagem);
		
			$sql->execute();

			if($sql->rowCount() > 0){
				// $array = $sql->fetch();
				return true;			
			}

	}
}



 ?>
<?php 

class Funcionarios extends model{

	private $Last_id;

	public function add($nome,$sexo,$data_nasc,$endereco,$numero, $bairro, $cidade, $estado, $telefone, $rg, $cpf,$profissao, $porcentagem, $email){

		

			$sql = "INSERT INTO funcionarios (nome,sexo,data_nasc,endereco,numero,bairro,cidade,estado,telefone,rg,cpf,profissao,porcentagem,email) VALUES (:nome,:sexo,:data_nasc,:endereco, :numero, :bairro, :cidade, :estado, :telefone, :rg, :cpf, :profissao, :porcentagem, :email)";

			$sql = $this->Db->prepare($sql);
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
			$sql->bindValue(':profissao', $profissao);
			$sql->bindValue(':porcentagem', $porcentagem);
			$sql->bindValue(':email', $email);
			$sql->execute();

			$this->Last_id = $this->Db->lastInsertId();	
			return true;
		
		
	

		
	}


	public function novaConta($id_funcionario, $valor){
		$sql = "INSERT INTO conta(id,valor) VALUES (:id, :valor)";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id_funcionario);
		$sql->bindValue(':valor', $valor);
		$sql->execute();
	}

	private function emailExists($email){
		$sql = "SELECT * FROM funcionarios WHERE email = :email";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function lastId(){
			return $this->Last_id;
		}	



}





 ?>
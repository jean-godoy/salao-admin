<?php 

class Clientes extends model{

	public function add($nome, $sexo, $data_nasc, $endereco, $numero, $bairro, $cidade, $estado, $telefone, $cpf, $email){

		// if($this->emailExists($email) == false){
			echo $nome;
			echo "<br>".$email;
			echo "<br>".$endereco;

			$sql = "INSERT INTO clientes (nome, sexo, data_nasc, email, endereco, numero, bairro, cidade, estado, telefone, cpf) VALUES (:nome, :sexo, :data_nasc, :email, :endereco, :numero, :bairro, :cidade, :estado, :telefone, :cpf)";

			
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
			$sql->bindValue(':cpf', $cpf);
			$sql->bindValue(':email', $email);
			$sql->execute();
			
			return true;
		// }else{
		// 	return false;
		// }
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



}

 ?>
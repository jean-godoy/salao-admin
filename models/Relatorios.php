<?php

class Relatorios extends model{

	public function getYear($year){
		$dados = array();

		$sql = "SELECT *, Year(data) FROM ordem_servico WHERE 1 AND Year(data) = :year ";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':year', $year);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
		}

		return $dados;
	}

	public function getMonth($mes){
		$dados = array();

		$sql = "SELECT *, Month(data) FROM ordem_servico WHERE 1 AND Month(data) = :mes ";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':mes', $mes);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
		}

		return $dados;
	}

	public function getDay($day){
		$dados = array();

		$sql = "SELECT *, Day(data) FROM ordem_servico WHERE 1 AND Day(data) = :day ";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':day', $day);
		$sql->execute();

		if($sql->rowCount() > 0){
			
			$dados = $sql->fetchAll();
		}

		return $dados;
	}

	public function getRow($T, $day){
		$sql = "SELECT COUNT(*) as c FROM ordem_servico  WHERE 1 AND {$T}(data) = {$day} ";
		// $sql->bindValue(':day', $day);
		$sql = $this->Db->query($sql);

		if($sql->rowCount() > 0){
			$sql = $sql->fetch();
			return $sql['c'];
		}else{
			return 0;
		}
	}

	public function getFuncionario($id){
		$dados = array();
		$sql = "SELECT nome FROM funcionarios WHERE id = :id ";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		}

		return $dados;

	}

	public function getCliente($id){
		$dados = array();
		$sql = "SELECT nome FROM clientes WHERE id = :id ";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		}

		return $dados;

	}

	public function getOrdem($id){
		$dados = array();
		$sql = "SELECT * FROM ordem_servico WHERE id = :id ";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		}

		return $dados;

	}

	public function editando(array $dados){

		$sql = "UPDATE ordem_servico SET servico = :servico, descricao = :descricao, valor = :valor WHERE id = :id";
		$sql = $this->Db->prepare($sql);
		$sql->bindValue(':id', $dados['id']);
		$sql->bindValue(':servico', $dados['servico']);
		$sql->bindValue(':descricao', $dados['descricao'] );
		$sql->bindValue(':valor', $dados['valor']);

		$sql->execute();
		return true;

	}

	public function intervalo($inicio, $final, $tabela){


		$i = date('Y-m-d', strtotime($inicio));
		$f = date('Y-m-d', strtotime($final));
		$sql = "SELECT * FROM {$tabela} WHERE data BETWEEN '{$i}' AND '{$f}'";
		$sql = $this->Db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
			return $dados;
		}else{
			return "Nenhum valor encontrado";
		}
	}



}

?>
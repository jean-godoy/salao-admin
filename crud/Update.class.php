<?php 

class Update extends Connect{

	private $Tabela;
	private $Termos;
	private $Id;
	private $Result;
	private $Update;
	private $Conn;
	private $Start;
	private $Dados;
	private $Where;


	public function exeUpdate($Tabela, array $Termos, $Where, $Id){
		$this->Tabela = $Tabela;
		$this->Termos = $Termos;
		$this->Where = $Where;
		$this->Id = $Id;
		$this->getSyntax();
		$this->Execute();
	}

	private function getSyntax(){

		foreach ($this->Termos as $key => $value) {
			$Places[] = $key." = '".$value."'";
		}
		
		$Places = implode(', ', $Places);
		$this->Update = "UPDATE {$this->Tabela} SET {$Places} WHERE {$this->Where} = '{$this->Id}' ";
 	}

 	private function Conectar(){
 		$this->Conn = parent::getConn();
 		$this->Start = $this->Conn->prepare($this->Update);
 		$this->Start->setFetchMode(PDO::FETCH_ASSOC);
 	}

 	private function Execute(){
		$this->Conectar();

		try{
			$this->Start->execute();
			$this->Result = true;
			$this->Dados = $this->Start;
		} catch (Exception $e) {
			echo $e;
		}
	}

	public function getResult(){
		return $this->Result;
	}

	public function getRowCount(){
			return $this->Start->rowCount();
		}

		public function getDados(){
			return $this->Dados;
		}


		public function verClasse(){
			echo "<pre>";
			echo "debugando classe read";
			var_dump($this);
			echo "</pre>";
		}
}


 ?>

 <!-- // UPDATE `sextafeira`.`agendamentos` SET `id_agenda` = NULL, `id_cliente` = '', `nome` = 'editado', `data_agendamento` = '', `hora` = '', `desenho_descricao` = '', `valor` = '', `n_sessoes` = '', `sessao_atual` = '', `status` = '' WHERE `agendamentos`.`id_agenda` = 13; -->
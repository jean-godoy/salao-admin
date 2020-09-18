<?php 

class Create extends Connect{

	private $Tabela;
	private $Termos;
	private $Result;
	private $Create;
	private $Conn;
	private $Start;
	private $Dados;

	public function exeCreate($Tabela, array $Dados){
		$this->Tabela = (string) $Tabela;
		$this->Dados = $Dados;
		$this->getSintax();
		$this->Execute();
	}

	public function getResult(){
		return $this->Result;
	}

	private function Conectar(){
		$this->Conn = parent::getConn();
		$this->Start = $this->Conn->prepare($this->Create);
	}

	private function getSintax(){
		
		$Fileds = implode(', ', array_keys($this->Dados));
		
		$Places = ':'.implode(', :', array_keys($this->Dados));

		$this->Create = "INSERT INTO {$this->Tabela} ({$Fileds}) VALUES ($Places)";
	}

	private function Execute(){
		$this->Conectar();

		try{
			$this->Start->execute($this->Dados);
			$this->Result = $this->Conn->lastInsertId();

		}catch (Exception $e) {
			echo $e;
		}
	}

	public function verClasse(){
		echo "<pre>";
		echo "debugando classe read - <br>";
		print_r($this);
		// echo '--------------------------';
		//  echo $Fileds;
		// echo '--------------------------';
		// var_dump($Places);
		echo "</pre>";
	}


}



 ?>
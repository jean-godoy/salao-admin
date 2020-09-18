<?php 

class Delete extends Connect{

	private $Tabela;
	private $Result;
	private $Delete;
	private $Conn;
	private $Start;
	private $Dados;

	public function exeDelete($Tabela, array $Dados = null){
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
		$this->Start = $this->Conn->prepare($this->Delete);
	}

	private function getSintax(){
		
		$Fileds = implode(', ', array_keys($this->Dados));
		
		$Places = implode(', :', array_values($this->Dados));
						
		$this->Delete = "DELETE FROM `{$this->Tabela}` WHERE {$Fileds} = {$Places}";
	}  
	                 
	private function Execute(){
		$this->Conectar();

		try{
			$this->Start->execute($this->Dados);
			$this->Result = True;

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
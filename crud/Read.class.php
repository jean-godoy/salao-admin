<?php 

	class Read extends Connect{

		private $Tabela;
		private $Termos;
		private $Result;
		private $Read;
		private $Conn;
		private $Start;
		private $Dados;

		public function exeRead($Tabela, $Termos = NULL){
			$this->Tabela = (string) $Tabela;
			$this->Termos = (string) $Termos;
			$this->getSyntax();
			$this->Execute();
 		}


 		private function getSyntax(){
			$this->Read = "SELECT * fROM {$this->Tabela} {$this->Termos}";
		}	

		public function Conectar(){
			$this->Conn = parent::getConn();
			$this->Start = $this->Conn->prepare($this->Read);
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

		public function getRowCount(){
			return $this->Start->rowCount();
		}

		public function getDados(){
			return $this->Dados;
		}


		public function verClasse(){
			echo "<pre>";
			echo "debugando classe read";
			var_dump($this->Dados);
			echo "</pre>";
		}

	}

 ?>
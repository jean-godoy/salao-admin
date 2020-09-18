<?php 

//definde conecxao com a db pelo $this->Db

class model{
	protected $Db;

	public function __construct(){
			global $db;
			$this->Db = $db;
	}
}


 ?>
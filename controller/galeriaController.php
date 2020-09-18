<?php 

class galeriaController extends controller{

	public function index(){
		$dados = array(
			'qt' => 182
		);

		$this->loadTemplate('galeria', $dados);
	}



	
}


 ?>
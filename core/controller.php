<?php 

// ajudadores:
// segundo a regra geral, o primoiro a ser acessado e o controller assim q acessamos o site

class controller{

	// carrega arquivo da pasta views pelo parametro
	public function loadView($viewName, $viewData = array()){

		// esse metodo estrai os dados do array transformando o key(array) em varial e o conteudo e o value
		extract($viewData);

		require 'views/'.$viewName.'.php';
	}

	// carrega um unico arquivo tamplete
	public function loadTemplate($viewName, $viewData = array()){
		require 'views/template.php';
	}


	// carrega a view dentro do template
	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}


}

 ?>
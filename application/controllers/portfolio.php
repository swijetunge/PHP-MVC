<?php

class portfolio extends controller {
		
	public function __construct() {
		parent::__construct();
		
		if(isset($_GET['p']) && $_GET['p']!='')
		{
			$this->renderPage($_GET['p']);
		} else {
			$this->renderPage('portfolio');
		}
		
	}
}

?>
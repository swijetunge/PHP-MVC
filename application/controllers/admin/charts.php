<?php

class charts extends controller {
		
	public function __construct() {
		parent::__construct();

		if(isset($_GET['p']) && $_GET['p']!=''){
			
			$this -> renderPage('admin/sb-'.$_GET['p']);
		
		} else {
			
			$this -> renderPage('error');
		}
		
	}
}

?>
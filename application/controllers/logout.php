<?php

class logout extends controller {
		
	public function __construct() {
		parent::__construct();
		
		session_destroy();	
					
		header('Location:admin');
	}
}

?>
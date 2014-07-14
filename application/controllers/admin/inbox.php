<?php

class inbox extends controller {
		
	public function __construct() {
		parent::__construct();

		$this->renderPage('admin/sb-inbox');
	}
}

?>
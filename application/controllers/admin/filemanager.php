<?php

class filemanager extends controller {
		
	public function __construct() {
		parent::__construct();

		$this->renderPage('admin/sb-filemanager');
	}
}

?>
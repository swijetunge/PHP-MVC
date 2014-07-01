<?php

class blog extends controller {
		
	public function __construct() {
		parent::__construct();

		$this->renderPage('blog');
	}
}

?>
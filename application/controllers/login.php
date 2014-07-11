<?php

class login extends controller {
		
	public function __construct() {
		parent::__construct();
		
		$errorHandler = new ErrorHandler();
		
		// check for form submission - if it doesn't exist then send back to contact form
		if (isset($_POST['login']) && $_POST['login'] == 'admin') {
			
			// get the posted data
			$this->username = $_POST['sb-email'];
			$this->password = $_POST['sb-password'];
			
			$validator = new Validator($errorHandler);
				
			$validation = $validator->check($_POST, array (
				'sb-email' => array(
								'required' => true,
								'minlength' => 7,
								'email' => true
							),
				'sb-password' => array(
								'required' => true,
								'minlength' => 3
							)
			));
			
			if($validation->fails())
			{
				if($validation->errors()->first('sb-email')) {
					$this->error = $validation->errors()->first('sb-email');
					
				} elseif ($validation->errors()->first('sb-password')) {
					$this->error = $validation->errors()->first('sb-password');
					
				} 
				
			} else {
				
				if($this->username == "sandun@employee-comms.co.uk" && $this->password == "123") {
					
					$this->username = '';
					$this->password = '';
					
					$_SESSION['loggedin'] = true;
					header('Location:admin');
				
				}									
				
			}
			
		}
				
		$this->renderPage('admin/sb-login');
	}
}

?>
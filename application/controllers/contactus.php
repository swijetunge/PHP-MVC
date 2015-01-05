<?php

class contactus extends controller {
	
	public $error=null, $note=null;
	public $name, $email, $phone, $message;
		
	public function __construct() {
		parent::__construct();

		$errorHandler = new errorHandler();
		
		// check for form submission - if it doesn't exist then send back to contact form
		if (isset($_POST['save']) && $_POST['save'] == 'contact') {
			
			// get the posted data
			$this->name = $_POST['name'];
			$this->email = $_POST['email'];
			$this->phone = $_POST['phone'];
			$this->message = $_POST['message'];
			
			$validator = new validator($errorHandler);
				
			$validation = $validator->check($_POST, array (
				'name' => array(
								'required' => true,
								'maxlength' => 20,
								'minlength' => 3,
								'alnum'	=> true	
							),
				'email' => array(
								'required' => true,
								'maxlength' => 255,
								'email' => true
							),
				'phone' => array(
								'required' => true,
								'minlength' => 10
							),
				'message' => array(
								'required' => true
							)
			));
			
			if($validation->fails())
			{
				// echo '<pre>';
				// print_r($validation->errors()->first('name'));
				// echo '</pre>';
				
				if($validation->errors()->first('name')) {
					$this->error = $validation->errors()->first('name');
					
				} elseif ($validation->errors()->first('email')) {
					$this->error = $validation->errors()->first('email');
					
				} elseif ($validation->errors()->first('phone')) {
					$this->error = $validation->errors()->first('phone');
					
				} elseif ($validation->errors()->first('message')) {
					$this->error = $validation->errors()->first('message');
					
				} 
				
			} else {
					// echo "ok";
					
					$this->note = 'Thank you for your message.';	
					$headers = "From: $this->email\r\n"; 
					$headers .= "Reply-To: $this->email\r\n";
					
					// write the email content
					$email_content = "Name: $this->name\n";
					$email_content .= "Email Address: $this->email\n";
					$email_content .= "Phone Number: $this->phone\n";
					$email_content .= "Message:\n\n $this->message";
						
					// send the email
					// mail ('sandun.wijetunge@teamrewards.co.uk', 'YOUR WEBSITE NAME - Contact Form Submission', $email_content, $headers); 
						
					// send the user back to the form
					$this->note = 'Thank you for your message.';
					
					$this->name = '';
					$this->email = '';
					$this->phone = '';
					$this->message = '';
					
				}
			
		}

		$this->renderPage('contactus');

	}

}

?>
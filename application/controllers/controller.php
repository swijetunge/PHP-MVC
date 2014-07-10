<?php 

class controller {
		
	public function __construct() {
		
		session_start();		
		
	}
	
	public function renderPage($page) {
		
		$filename = $_SERVER['DOCUMENT_ROOT'].'/application/views/'.$page.'.php';
		
		if (file_exists($filename)) {
			
			    include($_SERVER['DOCUMENT_ROOT'].'/application/views/' .$page. '.php');
			
			} else {
		
			    echo '<html>
			            <head>
			                <meta http-equiv="Refresh" content="0;url=http://'.$_SERVER['SERVER_NAME'].'/errors.html" />
			            </head><body></body>
			          </html>';
				
				die();
						
			}
		
		
		
	}	
	
		
}

?>

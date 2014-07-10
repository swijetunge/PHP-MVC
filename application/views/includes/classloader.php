<?php

function __autoload($classname) {
	
	if(file_exists($_SERVER['DOCUMENT_ROOT']. '/application/models/' .$classname. '.php')) {
		
		require_once($_SERVER['DOCUMENT_ROOT']. '/application/models/' .$classname. '.php');
	}
	elseif(file_exists($_SERVER['DOCUMENT_ROOT']. '/application/models/entityclasses/' .$classname. '.php')) {
		
		require_once($_SERVER['DOCUMENT_ROOT']. '/application/models/entityclasses/' .$classname. '.php');
	}
	else if(file_exists($_SERVER['DOCUMENT_ROOT']. '/application/controllers/' .$classname. '.php')) {
		
		require_once($_SERVER['DOCUMENT_ROOT']. '/application/controllers/' . $classname. '.php');
	} 
	else if(file_exists($_SERVER['DOCUMENT_ROOT']. '/application/controllers/admin/' .$classname. '.php')) {
		
		require_once($_SERVER['DOCUMENT_ROOT']. '/application/controllers/admin/' . $classname. '.php');
	} 
	else if(file_exists($_SERVER['DOCUMENT_ROOT']. '/application/controllers/handlers/' .$classname. '.php')) {
		
		require_once($_SERVER['DOCUMENT_ROOT']. '/application/controllers/handlers/' . $classname. '.php');
	} 
	else {
		// die('Cannot find ' .$classname. '.php');

	    echo '<html>
	            <head>
	                <meta http-equiv="Refresh" content="0;url=http://'.$_SERVER['SERVER_NAME'].'/errors.html" />
	            </head><body></body>
	          </html>';
		
		die();
				
	}
	
}

?>
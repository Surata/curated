<?php
class MY_Controller extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
    }

    function params()		  
    {		    
    	$result = $_POST;		   
    	 // Check if Content Type is JSON		    
    	if( isset( $_SERVER['CONTENT_TYPE'] ) &&		        
    		strpos( $_SERVER['CONTENT_TYPE'], "application/json" ) !== false )		    
    	{      		      
			$jsonData = json_decode( trim( file_get_contents( 'php://input' ) ), true );  		     
			$result = $jsonData;		    	    

    		return $result;		  
    	}
    }
}
<?php

class MY_Model extends CI_Model 
{
	public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
            $this->load->database();
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
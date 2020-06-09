<?php
	session_start();
	try
	{
		$connection = oci_connect("isop","passwd123","localhost/XE");
			
		if(!$connection)
		{				
            $error = oci_error();
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
        else 	
    	{	
            echo 'connected'; 
            oci_close($connection);
        }
	}
		
	catch(Exception $error)
	{
		echo '<span style="color: red">Błąd łączenia z serwerem.</span>';
		echo '<br/> For dev info: '.$error;
	}

?>
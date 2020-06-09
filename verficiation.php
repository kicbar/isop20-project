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
            header('Location: menu.php');
            /*echo 'connected</br>'; 
            $sql_check_connection = "select fname from clients where pesel = '95012309090' ";
            $sql_check_connection_compiled = oci_parse($connection, $sql_check_connection);
            oci_execute($sql_check_connection_compiled); 
            $get_fname = oci_fetch_object($sql_check_connection_compiled);
            $fname_client = $get_fname->FNAME;
            echo 'Fname from database is: '.$fname_client;
            oci_free_statement($sql_check_connection_compiled);*/
            oci_close($connection);
        }
	}
		
	catch(Exception $error)
	{
		echo '<span style="color: red">Błąd łączenia z serwerem.</span>';
		echo '<br/> For dev info: '.$error;
	}
?>
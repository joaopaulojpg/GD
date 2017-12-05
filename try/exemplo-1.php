<?php 

try 
{

	throw new Exception("Houve um erro", 1);
	
}
catch (Exception $e)
{

	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));
}



 ?>
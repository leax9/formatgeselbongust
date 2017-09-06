<?php
/*
* Connection with database
* author: Sales Fabregat, Alejandro
* version: 2015/03/15
*/
class BDBonGust extends mysqli
{
	function __construct()
	{
		parent::__construct(
			"localhost",
			"root",
			"root",
			"formatgeselbongust"
		);
		
		if (mysqli_connect_error()) {
            die('Error de Conexión (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
	}
}

?>

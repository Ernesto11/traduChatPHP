<?php
	$serverName = "dbdatabase12.database.windows.net";
	$connectionInfo = array("Database"=>"dbbasedatos","UID"=>"ernestobrenes96", "PWD"=>"ernesSapri13", "CharacterSet"=>"UTF-8");
	$con = sqlsrv_connect($serverName,$connectionInfo);

	if($con){
		echo "conexión exitosa"
	}else{
		echo "fallo en la conexión"
	}

?>
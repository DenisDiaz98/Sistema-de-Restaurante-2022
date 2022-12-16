<?php

	include("../../dbconnection.php");

	$registros = mysqli_query($sqlconnection, "SELECT MAX(orderID) `orderID` FROM `tbl_order`") or die ("problemas en la consulta");
	
	while($reg = mysqli_fetch_array($registros))
	{
		echo "Numero de orden: ". $reg['orderID'] ." <br>";
	}
	
	mysqli_close($sqlconnection);
?>

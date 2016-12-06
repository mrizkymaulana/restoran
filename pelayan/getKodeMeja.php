<?php  
	mysql_connect("localhost","root","");
	mysql_select_db("db_restoran");

	if(isset($_POST["kode_meja"]))
	{
		$output = '';
		$query = "SELECT * FROM data_meja WHERE kode_meja = '".$_POST["kode_meja"]."'";
		$result = mysql_query($query) or die(mysql_error());
		while ($row = mysql_fetch_array($result)) {
			$output .= $row["kode_meja"];
		}
		echo $output;

	}

	
?>
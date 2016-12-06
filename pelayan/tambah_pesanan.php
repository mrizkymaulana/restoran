<?php  
	$host="localhost";
	$user="root";
	$pass="";
	$database="db_restoran";
	mysql_connect($host,$user,$pass);
	mysql_select_db($database);
	
	$kode_meja = $_POST["kode_meja"];
	$pelanggan = $_POST["nama_pelanggan"];

	$query = mysql_query("INSERT INTO data_pesanan VALUES('','1','$kode_meja','$pelanggan')") or die(mysql_error());
	echo "<script>
		alert('Proses Berhasil');
        window.location=\"?pelayan=pelayan-meja-kursi\"</script>
    </script>";
	
?>
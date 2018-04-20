<?php
function connect_db()
{
	
$conn = mysqli_connect("localhost", "root", "", "db_adrenaline");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
return $conn;
}	
?>
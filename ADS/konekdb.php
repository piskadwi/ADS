<?php
$host="localhost";
$user="root";
$password="";
$konek=mysql_connect($host, $user, $password);
$nama_db="endorse";
$konek_db=mysql_select_db($nama_db, $konek);
	if($konek_db){
	//echo "Terhubung";
	}else{
	echo "gagal";
	}
?>
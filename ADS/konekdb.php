<?php
$host ="localhost";
$user ="root";
$password="";
$db="endorse";
$konek=mysqli_connect($host,$user,$password);
if (!$konek){
	echo "GAGAL TERHUBUNG!".mysqli_connect_error();
	exit();
	}else{
		$pilihdb=mysqli_select_db($konek,$db);
		if(!$pilihdb){
			echo "GAGAL TERHUBUNG KE DB".mysqli_connect_error();
			}
		}
?>

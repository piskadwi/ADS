<?php
$host ="localhost";
$user ="root";
$password="";
$db="endorse";
$konek=mysqli_connect($host, $user, $password,$db);
if ($konek){
	//echo "BERHASIL!";
	}else{
		echo "GAGAL!";
		}
?>

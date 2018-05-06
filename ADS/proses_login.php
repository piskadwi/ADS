<?php
session_start();
$email=$_POST['email'];
$_SESSION['email'] = $email;

include "konekdb.php";
if(!$_POST['email'] || !$_POST['password']){
	echo "<script>
	alert('Masukan user dan password!');
	location.href = ('proses_login.php');
	</script>";
}else if($_POST['email'] || $_POST['password']){
	$email=$_POST['email'];
	$pasw=$_POST['password'];
	$kueri="select * from login where email='$email' and password='$pasw'";
	$cek_kueri=mysqli_query($konek,$kueri);
	$hasil=mysqli_fetch_array($cek_kueri);
	if($hasil){
		echo "<script>
		alert('User dan password benar!');
		location.href = ('index.php?p=home');
		</script>";
	}else{
		echo "<script>
		alert('User atau password salah!');
		location.href = ('index.php?p=form_login');
		</script>";
	}
}
?>

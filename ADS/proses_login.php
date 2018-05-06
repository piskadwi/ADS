<?php
include "konekdb.php";
$email=$_POST['email'];
$password=$_POST['password'];
$data=mysqli_query($konek,"SELECT *FROM login WHERE email='$email' AND password ='$password'");
$row=mysqli_fetch_array($data);
if($row['email']== $email AND $row['password']==$password){
	session_start();
	$_SESSION['email']=$row['email'];
	$_SESSION['password']=$row['password'];
	header('location:home.php');
}else{
	echo "LOGIN GAGAL!";
	header('location:form_login.php');
	}
/*

if(!$_POST['email'] || !$_POST['password']){
	echo "<script>
	alert('Masukan user dan password!');
	location.href = ('proses_login.php');
	</script>";
}else if($_POST['email'] || $_POST['password']){
	$email=$_POST['email'];
	$pasw=$_POST['password'];
	$kueri="select * from login where email='$email' and password='$pasw'";
	$cek_kueri=mysql_query($kueri);
	$hasil=mysql_fetch_row($cek_kueri);
	if($hasil){
		echo "<script>
		alert('User dan password benar!');
		location.href = ('home.php');
		</script>";
	}else{
		echo "<script>
		alert('User atau password salah!');
		location.href = ('form_login.php');
		</script>";
	}
}*/
?>
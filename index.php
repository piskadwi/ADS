<?php
session_start();
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endorsin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php
      include 'konekdb.php';
    $email=$_SESSION['email'];
    $query="select * from login where email='$email'";
    $hasil=mysqli_query($konek, $query) or die (mysql_error());
	while($baris=mysqli_fetch_row($hasil)){
    $idnya=$baris['0'];
    $emailnya=$baris['1'];
    $paswnya=$baris['2'];
    $statusnya=$baris['3'];
	}
	?>
    <ul class="nav nav-tabs nav-justified">
    <?php
	if($statusnya=='vendor' || $statusnya=='influencer'){
	?>
    <?php
	if($statusnya=='vendor'){
    ?>
    
        <li class="active"><a href="index.php?p=home">Home </a></li>
        <li><a href="index.php?p=vendor">Vendor </a></li>
        <?php
	}else{($statusnya=='influencer')
        ?>
        <li><a href="index.php?p=influencer">Influencer </a></li>
        <?php
	}?>
       <li><a href="index.php?p=prosess_logout">Logout </a></li>
       <?php
	}?>
    </ul>
    
<div class="container">
<?php
if(!empty($_GET['p'])){
	$page=$_GET['p'];
	require_once("".$page.".php");
	}else{
		require_once("form_login.php");
	}
	?>
</div>
</body>

</html>
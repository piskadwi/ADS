<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="ADS/assets/css/styles.css">
</head>

<body>
    <div class="container"><img src="assets/img/profile.jpg"></div>
    <div class="container">
        <div class="col-md-5 col-md-offset-0"><img class="img-circle" src="assets/img/1515456591895.jpg" width="370"></div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <h2>Bayu Skak</h2>
                    <p>bayu eko moektito adalah seorang aktor, komedian dan personalia youtube berkebangsaan indonesia </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-0">
                    <p class="text-left">975 K </p>
                    <p class="text-left">Follower </p>
                </div>
                <div class="col-md-3">
                    <p class="text-left">180 </p>
                    <p class="text-left">Endorsement </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-6"><img src="assets/img/YouTube_logo_(2017).png" width="100"></div>
                <div class="col-md-3"><img src="assets/img/new-instagram-text-logo.png" width="100"></div>
            </div>
        </div>
    </div>
     <div class="container">
        <div class="col-md-4">
			<a href="index.php?p=influencer">
            <button class="btn btn-default btn-block btn-lg" type="button">Request </button>
			</a>
		</div>
        <div class="col-md-4">
            <button class="btn btn-default btn-block btn-lg" type="button">Kalender </button>
		</div>
        <div class="col-md-4">
			<a href="#">
            <button class="btn btn-default btn-block btn-lg" type="button">Gallery </button>
			</a>
		</div>
    </div>
     <div class="container">
    <div class="container">
        <div class="col-md-12">
            <div class="media">
                <div class="media-left">
                    <a></a>
                </div>
                <div class="media-body">
                    <h4>Request </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                </div>
            </div>
            <?php 
			include "konekdb.php";
						if(@$_POST['list'] && $_POST['id_vendor']){
							$select=$_POST['list'];
							$cari=$_POST['id_vendor'];
							if($select=="id_vendor"){
								$kueri="select id_req,id_vendor,id_produk,tanggal,kategori,harga,status from request where id_req='$cari'";
								$hasil=mysqli_query($konek,$kueri) or die(mysqli_error());
							}
						}else{
						$kueri="select id_req,id_vendor,id_produk,tanggal,kategori,harga,status from request";
						$hasil=mysqli_query($konek,$kueri);
						}
?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        	<th>Id </th>
                            <th>Id Vendor </th>
                            <th>Id Produk </th>
                            <th>Tanggal </th>
                            <th>Kategori </th>
                            <th>Harga </th>
                            <th>Status </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
   
   while ($vendor = mysqli_fetch_row($hasil)){
?>
   <tr>
      <td><?php echo $vendor[0]; ?></td>
      <td><?php echo $vendor[1]; ?></td>
      <td><?php echo $vendor[2]; ?></td>
      <td><?php echo $vendor[3]; ?></td>
      <td><?php echo $vendor[4]; ?></td>
      <td><?php echo $vendor[5]; ?></td>
      <td><?php echo $vendor[6]; ?></td>
 
                        <?php }
						?>
                                
                                <!--<button class="btn btn-warning btn-sm" type="button">Confirm </button>-->
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
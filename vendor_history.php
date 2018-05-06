<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
   <div class="container"><img src="assets/img/vendor.jpg"></div>
    <div class="container">
        <div class="col-md-4 col-md-offset-0"><img class="img-circle profil" src="assets/img/29094481_2059121520794599_2018166344540749824_n.jpg"></div>
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
			<a href="Rquest.html">
            <button class="btn btn-default btn-block btn-lg" type="button"><a href="index.php?p=vendor">Request</a> </button>
			</a>
		</div>
        <div class="col-md-4">
			<a href="History.html">
            <button class="btn btn-default btn-block btn-lg" type="button"><a href="index.php?p=vendor_history">History </a></button>
			</a>
		</div>
        <div class="col-md-4">
			<a href="Gallery.html">
            <button class="btn btn-default btn-block btn-lg" type="button"><a href="index.php?p=vendor_galery">Gallery</a> </button>
			</a>
		</div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="media">
                <div class="media-left">
                    <a></a>
                </div>
                <div class="media-body">
                    <h4>History</h4>
                    <p>Menu ini menampilkan data transaksi selama proses endorsement periode awal hingga akhir </p>
                </div>
            </div>
             <?php 
			include "konekdb.php";
						if(@$_POST['list'] && $_POST['id_vendor']){
							$select=$_POST['list'];
							$cari=$_POST['id_vendor'];
							if($select=="id_vendor"){
								$kueri="select id_vendor,id_produk,tanggal,harga from request where id_vendor='$cari'";
								$hasil=mysqli_query($konek,$kueri) or die(mysqli_error());
							}
						}else{
						$kueri="select id_vendor,id_produk,tanggal,harga from request";
						$hasil=mysqli_query($konek,$kueri);
						}
?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id_Vendor </th>
                            <th>Produk </th>
                            <th>Tanggal </th>
                            <th>Transaksi </th>
                        </tr>
                    </thead>
                     <tbody>
                    <?php
   
   while ($history = mysqli_fetch_row($hasil)){
?>
   <tr>
      <td><?php echo $history[0]; ?></td>
      <td><?php echo $history[1]; ?></td>
      <td><?php echo $history[2]; ?></td>
      <td><?php echo $history[3]; ?></td>
      
 
                        <?php }
						?>
                                
                                <!--<button class="btn btn-warning btn-sm" type="button">Confirm </button>-->
                </table>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
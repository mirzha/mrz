<?php 
include 'koneksi.php';
$db = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservasi Hotel Tretes Raya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- coba -->
   <link rel="stylesheet" type="text/css" href="..\css\bootstrap.min.css">  
  <link rel="stylesheet" type="text/css" href="..\jquery/jquery-ui.css">
  <script src="../jquery-3.1.1-baru.js"></script>
  <script type="text/javascript" src="..\jquery-3.1.1.js"></script>
  <script type="text/javascript" src="..\jquery/jquery-ui.js"></script>
  <!-- coba -->
</head>
<body style="background-color: #bdc3c7">

<nav class="navbar navbar-default">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
      <li> <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="kamar.php"><span class="glyphicon glyphicon-bed"></span> Kamar Hotel</a></li>
      <li class="active" ><a href="pemesanan.php"><span class="glyphicon glyphicon-shopping-cart"></span> Pemesanan</a></li>
      <li><a href="pembayaran.php"><span class="glyphicon glyphicon-transfer"></span> Pembayaran</a></li>
    </ul>
  </div>
</nav> 
<!--Pemesanan-->
  <table class="table table-hover">
  <thead>
  <tr>        
    <th>Kode Kamar</th>
    <th>Nama Kamar</th>
    <th>Tipe Kamar</th>
    <th>Harga</th>
    <th>Jumlah Kasur</th>
    <th>No Kamar</th>
    <th>Keterangan</th>
    <th>Opsi</th>
  </tr>
  </thead>

<!-- PEMESANAN -->
<?php
  $no = 1;
  foreach($db->tampil_data('kamar') as $x){
  ?>
  <tbody>
  <tr>    
    <td><?php echo $x['kd_kamar']; ?></td>
    <td><?php echo $x['nama_kamar']; ?></td>
    <td><?php echo $x['tipe_kamar']; ?></td>
    <td><?php echo $x['harga']; ?></td>
    <td><?php echo $x['jumlah_kasur']; ?></td>
    <td><?php echo $x['no_kamar']; ?></td>
    <td><?php echo $x['keterangan']; ?></td>
    <form action="proses_pemesanan.php" method="POST" role="form">
    <td><input type="submit" name="Pesan" value="Pesan Sekarang" class="submitbtn" align="right" /></td>
  </tr>
 </tbody>
  <?php
  }
  ?>
</table>
<!--Pemesanan-->
</div>
  <br><br>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-footer">
    <br><br>
      <a class="eleven colums" align="center"><center>Copyright © 2016 Sistem Reservasi Hotel</center></a>
      <a class="eleven colums" align="center"><center>Teknik Informatika Politeknik Negeri Malang </center></a>
    <br><br> 
    </div> 
</body>
</html>
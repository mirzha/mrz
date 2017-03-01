<?php 
include 'koneksi.php';
$db = new database();
foreach($db->get_topID() as $x){
  $top = $x['kd_pembayaran'];
}
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

  <style type="text/css">
  body{background:#efefef;font-family:arial;}
  #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.5em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:auto;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
   
  </style>
</head>
<body>

<body style="background-color: #bdc3c7">

<nav class="navbar navbar-default">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
      <li> <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="kamar.php"><span class="glyphicon glyphicon-bed"></span> Kamar Hotel</a></li>
      <li><a href="pemesanan.php"><span class="glyphicon glyphicon-shopping-cart"></span> Pemesanan</a></li>
      <li class="active"><a href="pembayaran.php"><span class="glyphicon glyphicon-transfer"></span> Pembayaran</a></li>
    </ul>
  </div>
</nav> 
  
<!-- PEMESANAN -->
  <div id="wrapshopcart">
    
   <h1>Berikut adalah data lengkap Anda : </h1>
    <table border = '1'>
 <tr>
    <td>Kode Pemesanan</td>
    <td>No Kamar</td>
    <td>Nama Kamar</td>
    <td>Nama Lengkap</td>
    <td>No Identitas</td>
    <td>No Telp</td>
    <td>Total Pembayaran</td>
    <td>Alamat</td>
    </tr>
  <?php
  $no = 1;
  foreach($db->tampil_data3('pembayaran','reservasi','kamar',$top) as $x){
  ?>
  <tbody>
  <tr>    
    <td><?php echo $x['kd_pemesanan']; ?></td>
    <td><?php echo $x['no_kamar']; ?></td>
    <td><?php echo $x['nama_kamar']; ?></td>
    <td><?php echo $x['nama_lengkap']; ?></td>
    <td><?php echo $x['no_identitas']; ?></td>
    <td><?php echo $x['no_hp']; ?></td>
    <td><?php echo $x['harga']; ?></td>
    <td><?php echo $x['alamat']; ?></td>
    <form action="preview.php" method="POST" role="form">
  </tr>
 </tbody>
  <?php
  }
  ?>
</table>
  <input type="submit" name="kirim" value="Cetak" class="submitbtn"/>
   <h3>Silahkan Lakukan Pembayaran Ke Nomer Rekening Berikut ini ...</h3>
     <?php
  $no = 1;
  foreach($db->tampil_data('rekening') as $x){
  ?>
  <tbody>
  <tr>
    <h4><?php echo "No Rekening" ?>   <?php echo $x['no_rekening']; ?></h4>  
    <h4><?php echo "Atas Nama"?>   <?php echo $x['nama_pemilik']; ?></h4>
  </tr>
 </tbody>
  <?php
  }
  ?> 
  </div>

 </body>
</html>
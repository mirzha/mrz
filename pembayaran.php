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
  label{display:inline-block;width:12em;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
   
  </style>
  <!-- coba -->
</head>
<body style="background-color: #bdc3c7">

<nav class="navbar navbar-default">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
      <li> <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="kamar.php"><span class="glyphicon glyphicon-bed"></span> Kamar Hotel</a></li>
      <li ><a href="pemesanan.php"><span class="glyphicon glyphicon-shopping-cart"></span> Pemesanan</a></li>
      <li class="active"><a href="pembayaran.php"><span class="glyphicon glyphicon-transfer"></span> Pembayaran</a></li>
    </ul>
  </div>
</nav> 
  
<div class="container">
</div>
<!-- Pembayaran--> 
  <form action="proses.php?aksi=input" method="post">   
    <table class="table table-hover"> 
  <h1>Form Registrasi Pelanggan</h1>
   <p>Silakan lengkapi form di bawah ini untuk melakukan pembayaran : </p>
    <tr>
    <th>Nama Lengkap</th>
    <th><input type="text" name="nama_lengkap"></th>
  </tr>
  <tr>
    <th>Kode Pemesanan</th>
    <th>:
    <select name="kd_pemesanan"> 
        <?php
            $query ="SELECT kd_pemesanan,kd_pesan,check_in,check_out,waktu FROM reservasi ORDER BY kd_pemesanan";
            $sql = mysql_query($query);
            while($hasil = mysql_fetch_array($sql)){
              echo "<option value='".$hasil[kd_pemesanan]."'>$hasil[kd_pemesanan]</option>";
            }
        ?>
    </select>
    </th>
  </tr>
  <tr>
    <th>Alamat</th>
    <th><textarea name="alamat" ></textarea></th>
  </tr>
   <tr>
    <th>No Telephon</th>
    <th><input type="text" name="no_hp"></th>
  </tr> 
  <tr>
    <th>No Identitas</th>
    <th><input type="text" name="no_identitas"></th>
  </tr> 
   <tr>
    <th></th>
    <th><input type="submit" value="Simpan"></th>
  </tr>
</table>
</form>

  <!-- FOOTER
<br><br>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-footer">
    <br><br>
      <a class="eleven colums" align="center"><center>Copyright © 2016 Sistem Reservasi Hotel</center></a>
      <a class="eleven colums" align="center"><center>Teknik Informatika Politeknik Negeri Malang </center></a>
    <br><br> 
    </div>
-->
</body>
</html>


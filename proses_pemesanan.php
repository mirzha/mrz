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
  <link rel="stylesheet" href="js/jquery-ui.css" type="text/css"/>
	<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script>
	$(function() {
    $( "#datepicker" ).datepicker({
		 dateFormat: "yy-mm-dd",
	});
	});
	$(function() {
    $( "#datepicker2" ).datepicker({
		 dateFormat: "yy-mm-dd",
	});
	});
	</script>
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
<div class="col-sm-6">
        <div class="panel panel-default">       
        <div class="panel-heading">
        <legend><h1><span class="glyphicon glyphicon-pencil"></span> Pilih Check in & Check Out</h1></legend>
        <div class="panel-body">
            <form action="proses.php?aksi=tambah2" method="POST" role="form">
        <br><br>
        <div class="form-group">
				<label for="">Pilih Kamar</label>  
				<br>
				<select name="kamar" class="form-control">  
				<?php    
				$query = "SELECT kd_kamar,nama_kamar FROM kamar ORDER BY nama_kamar";  
				$sql = mysql_query($query);  
				while($hasil = mysql_fetch_array($sql)){  
				echo "<option value='".$hasil[kd_kamar]."'>$hasil[nama_kamar]</option>";   
				}
				?>  
				</select><br>  
                <label for="">Check In</label>
                <input type="text" name="check_in" class="form-control" id="datepicker">
                <label for="">Check Out</label>
                <input type="text" name="check_out" class="form-control" id="datepicker2"><br>
            </div>           
            <button type="submit" class="btn btn-primary" name="Pesan">Pesan Sekarang</button>
        </form>
<!--Pemesanan-->



</div>
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

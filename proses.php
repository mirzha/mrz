<?php
include 'koneksi.php';
$db = new database();

 $aksi = $_GET['aksi'];

 if($aksi == "input")
 {
 	$db->inputpembayaran($_POST['nama_lengkap'],$_POST['kd_pemesanan'],$_POST['no_identitas'],$_POST['no_hp'],$_POST['alamat']);
 	header("location:proses_pembayaran.php");
 }

 elseif($aksi == "tambah2")
 {
 	$db->inputreservasi($_POST['kamar'],$_POST['check_in'],$_POST['check_out']);
 	header("location:hasil_pemesanan.php");
 }
?>
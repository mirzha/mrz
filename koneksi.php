<?php


class database
{	
	function __construct()
	{
		mysql_connect("localhost", "root", "");
		mysql_select_db("tugasbesar");
	}

	function tampil_data($tabel){ 
	$data = mysql_query("select * from $tabel");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
  	}
	
	
	function tampil_data2($tabel1,$tabel2){ 
	$data = mysql_query("SELECT A.kd_pemesanan, B.nama_kamar, B.no_kamar, B.tipe_kamar, A.check_in, A.check_out FROM $tabel1 A, $tabel2 B WHERE A.kd_pesan=B.kd_kamar ORDER BY A.kd_pemesanan ASC");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
  	}	

  	function get_topID(){
	$data = mysql_query("select kd_pembayaran from pembayaran order by kd_pembayaran desc limit 1");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;	
  	}	

  	function tampil_data3($tabel1,$tabel2,$tabel3,$parm1){ 
	$data = mysql_query("SELECT A.kd_pemesanan, C.no_kamar, C.nama_kamar, A.nama_lengkap, A.no_identitas, A.no_hp, C.harga, A.alamat FROM $tabel2 B join $tabel1 A on B.kd_pemesanan=A.kd_pemesanan join $tabel3 C on B.kd_pesan=C.kd_kamar where A.kd_pembayaran = '$parm1'");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
  	}
	
	function inputpemesanan($nama_kamar,$tipe_kamar,$jumlah_kasur,$no_kamar,$harga,$keterangan)
	{
		mysql_query("insert into kamar values('','$nama_kamar','$tipe_kamar','$jumlah_kasur','$no_kamar','$harga','$keterangan')");
	}
	
	function inputreservasi($kamar,$check_in,$check_out)
	{
		mysql_query("INSERT INTO reservasi values('','$kamar','$check_in','$check_out',now())");
	}	
	
  	function inputpembayaran($nama_lengkap,$kd_pemesanan,$no_identitas,$no_hp,$alamat)
	{
		mysql_query("insert into pembayaran values('','$nama_lengkap','$kd_pemesanan','$alamat','$no_hp','$no_identitas')");
	}

}

?>
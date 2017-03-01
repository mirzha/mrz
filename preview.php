<?php 
include 'koneksi.php';
$db = new database();
foreach($db->get_topID() as $x){
  $top = $x['kd_pembayaran'];
}
?>
<html>
<body onLoad="window.print()">
<table border=1 width=70% align=center>
<tr>
	<td>
	<table border=0 width="100%" align="center">
		<tr>
			<th colspan=2>
				<table border=0 align="center">
					<tr>
						<th width="10%">
						</th>
						<th>
							<b><font face=arial>Tretes Raya Hotel</font><br>
							<font> Jl Malabar No 9 Tretes Pasuruan </font>
							</b>
						</th>
					</tr>
				</table>
			</th>
		</tr>
			<form action 
			<table border=0 width="100%" align="center">
				<tr><p style="color:grey" align="center">-----------------------------------------------------------------------------</p></tr>
				<tr>
                	<td colspan="5" align="center" style="background:#FF6; color:#333"><u>Struck Pemesanan Kamar Anda</u></td>
                </tr>
                <tr>
                	<td span style="color:black" width="160" align="justify"><u>Kode Pemesanan</td>
                    <td span style="color:black" width="160" align="center"><u>No Kamar</td>
                    <td span style="color:black" width="160" align="left"><u>Nama Lengkap</td>
					<td span style="color:black" width="160" align="left"><u>No Identitas</td>
					<td span style="color:black" width="160" align="left"><u>No Telp</td>
					<td span style="color:black" width="160" align="left"><u>Total Pembayaran</td>
					<td span style="color:black" width="160" align="left"><u>Alamat</td>
                </tr>
				<?php
					foreach($db->tampil_data3('pembayaran','reservasi','kamar',$top) as $x){
  				?>
				<tr>
					<td span style="color:grey" align="justify"><?php echo $x['kd_pemesanan']; 
					?></td>
					<td span style="color:grey" align="center"><?php echo $x['no_kamar']; 
					?></td>
					<td span style="color:grey" align="left"><?php echo $x['nama_lengkap'];
					?></td>
					<td span style="color:grey" align="left"><?php echo $x['no_identitas'];
					?></td>
					<td span style="color:grey" align="left"><?php echo $x['no_hp'];
					?></td>
					<td span style="color:grey" align="left"><?php echo $x['harga'];
					?></td>
					<td span style="color:grey" align="left"><?php echo $x['alamat'];
					?></td>
				</tr>
							
<?php
}
?>		
				</table>
				
		<?php
				
				date_default_timezone_set('Asia/Jakarta');
				$jam=date("H:i:s");
				echo '<tr align=center>';
					echo '<td><b>' . date("d-m-Y") . ' | ' . $jam.' </b><br>
					"Silahkan Melakukan Pembayaran ke bank terdekat"	
					
					</td>';	
				echo '</tr>';
				
				
					

		?>
		
	</table>
	</td>
</tr>
</table>
</body>
</html>
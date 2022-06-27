<?php
$koneksi = new mysqli ("localhost", "root", "", "db_perpus_rumi");
//Jika download plugin mpdf tanpa composer (versi lama)
define('_MPDF_PATH','../assets/mpdf/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');

//Jika download plugin mpdf dengan composer (versi baru)
//require_once __DIR__ . '/vendor/autoload.php';
//$mpdf = new \Mpdf\Mpdf();

//Menggabungkan dengan file koneksi yang telah kita buat

$nama_dokumen="anggota-".date('d-m-Y')."";
ob_start();
?>

<!DOCTYPE html>
<html>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" border="1">
	<thead>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>TTL</th>
			<th>Jenis Kelamin</th>
			<th>DEPARTEMEN</th>
		</tr>
	</thead>
	<tbody>
		<?php

		$sql = $koneksi-> query ("SELECT * FROM `tb_anggota`");

		while ($data=$sql-> fetch_assoc()){

			?>
			<tr>
				<td><?php echo $data['nim'];?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['tempat_lahir'] .', '. $data['tanggal_lahir'];?></td>
				<td><?php echo $data['j_k'];?></td>
				<td><?php echo $data['dep'];?></td>
			</tr>

		<?php } ?>
	</tbody>
</table>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
$db1->close();
?>
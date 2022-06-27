<?php

$koneksi = new mysqli ("localhost", "root", "", "db_perpus_rumi");

$filename = "anggota_excel-(".date('d-m-Y').").xls";
header("content-disposition: attachment; filename=$filename");
header("content-type: application/vdn.ms-excel");
?>
<table border="1">

	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>TTL</th>
		<th>Jenis Kelamin</th>
		<th>DEPARTEMEN</th>
	</tr>

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
</table>
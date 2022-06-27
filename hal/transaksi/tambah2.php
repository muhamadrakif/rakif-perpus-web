<?php
$pinjam     =date("Y-m-d");
$tujuh_hari = mktime(0,0,0, date('n'),date('j')+7,date('Y'));
$kembali	= date('Y-m-d', $tujuh_hari);
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Tambah Data
	</div>
	<div class="panel-body">
		
		<form method="POST">
			<div class="form-group">
				<label>Judul Buku</label>
				<select class="form-control" name="judul">
					<?php
					$sql1 = $koneksi-> query ("SELECT * FROM `tb_buku`");
					while ($data1=$sql1-> fetch_assoc()){
						?>
						<option value="<?php echo  $data1['id'].' - '.$data1['judul'].' - '.$data1['jumlah_buku'];?>" > <?php echo $data1['judul'].' - '. $data1['pengarang'];?> </option>
						<?php
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<select class="form-control" name="nama">
					<?php
					$sql2 = $koneksi-> query ("SELECT * FROM `tb_anggota`");
					while ($data2=$sql2-> fetch_assoc()){
						?>
						<option value="<?php echo $data2['nim'].' - '. $data2['nama'];?>" > <?php echo $data2['nim'].' - '. $data2['nama'];?> </option>
						<?php
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="tgl_pinjam">Tanggal Pinjam</label>
				<input class="form-control" name="tgl_pinjam" value="<?php echo $pinjam;?>" readonly/>
			</div>
			<div class="form-group">
				<label for="tgl_kembali">Tanggal Kembali</label>
				<input class="form-control" name="tgl_kembali"  value="<?php echo $kembali;?>" readonly/>
			</div>                               
			<div>

				<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

			</div>
		</div>
	</form>
	
</div>
</div>
<?php

@$judul_split = explode(" - ", $_POST ['judul']);
@$jumlah_buku = $judul_split[2];	
@$judul = $judul_split[1];
@$id = $judul_split[0];
@$nama_split = explode(" - ", $_POST ['nama']);
@$nama1 = $nama_split[1];
@$nim = $nama_split[0];
@$tgl_pinjam = $_POST ['tgl_pinjam'];
@$tgl_kembali = $_POST ['tgl_kembali'];

@$simpan = $_POST ['simpan'];  


if ($simpan){
	if($jumlah_buku == 0){
		?>
		<script type="text/javascript">

			alert ("Buku kosong");
			window.location.href="?page=transaksi";

		</script>
		<?php
	}else{
		$sql4 = $koneksi-> query("INSERT INTO `tb_transaksi` (`id`, `id_buku`, `buku`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (NULL, '$id', '$judul', '$nim', '$nama1', '$tgl_pinjam', '$tgl_kembali', 'Pinjam')");
		$sql5 = $koneksi-> query("UPDATE `tb_buku` SET jumlah_buku='$jumlah_buku'-1
			where `id` = '$id' and `judul` = '$judul'");
		if ($sql4){
			?>
			<script type="text/javascript">

				alert ("Data Berhasil Disimpan");
				window.location.href="?page=transaksi";

			</script>
			<?php
		}
	}
}
?>

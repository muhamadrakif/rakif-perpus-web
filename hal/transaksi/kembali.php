<?php

$id= $_GET['id'];
$id_buku= $_GET['id_buku'];

$sql= $koneksi-> query("UPDATE `tb_transaksi` SET `status` = 'Kembali' WHERE `tb_transaksi`.`id` = '$id'");
$sql= $koneksi-> query("UPDATE `tb_buku` SET `jumlah_buku` = (jumlah_buku+1) WHERE `tb_buku`.`id` = '$id_buku'");

?>
<script>
	alert("Proses Kembalikan Buku Berhasil");
	window.location.href="?page=transaksi";
</script>

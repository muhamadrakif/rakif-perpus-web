<?php
@$nim = $_GET ['nim'];
$sql = $koneksi ->query("DELETE FROM `tb_anggota` WHERE `tb_anggota`.`nim` = '$nim'");
?>

<script type="text/javascript">
	window.location.href="?page=anggota";
</script>


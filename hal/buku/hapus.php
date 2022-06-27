<?php
@$id = $_GET ['id'];
$sql = $koneksi ->query("DELETE FROM `tb_buku` WHERE `tb_buku`.`id` = '$id'");
?>

<script type="text/javascript">
	window.location.href="?page=buku";
</script>
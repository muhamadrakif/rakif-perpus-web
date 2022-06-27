<?php
$id= $_GET['id'];
$tgl_kembali= $_GET['tgl_kembali'];
$lambat=$_GET['telat'];

if ($lambat>7){
	?>
   <script type="text/javascript">

    alert ("Tidak dapat diperpanjang, karena telah lebih dari 7 hari");
    window.location.href="?page=transaksi";

</script>
<?php
}else{
	$tgl_kembali_pecah= explode("-",$tgl_kembali);
	$tahun = $tgl_kembali_pecah[0];
	$bulan = $tgl_kembali_pecah[1];
	$tgl = $tgl_kembali_pecah[2]+7;
	$next= mktime(0,0,0, $bulan,$tgl,$tahun);
	$harinext=date("Y-m-d",$next);
// echo $harinext;
	$sql= $koneksi-> query("UPDATE tb_transaksi set tgl_kembali='$harinext' where id=$id");
	if ($sql){
        ?>
        <script type="text/javascript">

            alert ("Perpanjangan Berhasil");
            window.location.href="?page=transaksi";

        </script>
        <?php
    }
}
?>
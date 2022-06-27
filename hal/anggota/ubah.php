<?php

$nim = $_GET['nim'];
$sql = $koneksi -> query("SELECT * FROM `tb_anggota` WHERE `nim` ='$nim'");
$tampil = $sql -> fetch_assoc();
//$tahun2 = $tampil['tahun_terbit'];
//$lokasi = $tampil['lokasi'];
?>

<div class="panel panel-default">
  <div class="panel-heading">
   Tambah Data
 </div>
 <div class="panel-body">

  <form method="POST">
    <div class="form-group">
      <label>NIM</label>
      <input class="form-control" name="nim" value=<?php echo $tampil['nim'];?> />

    </div>
    <div class="form-group">
      <label>Nama</label>
      <input class="form-control" name="nama" value=<?php echo $tampil['nama'];?> />

    </div>
    <div class="form-group">
      <label>Tempat Lahit</label>
      <input class="form-control" name="tempat_lahir" value=<?php echo $tampil['tempat_lahir'];?> />

    </div>

    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input class="form-control" type="date" name="tanggal_lahir" value=<?php echo $tampil['tanggal_lahir'];?> />

    </div>

    <div class="form-group">
      <label>Jenis Kelamin</label>
      <select class="form-control" name="j_k">
        <option value="Laki-Laki" <?php if($tampil['j_k'] =='Laki-Laki'){echo"selected";}?> >Laki-Laki</option>
        <option value="Perempuan" <?php if($tampil['j_k'] =='Perempuan'){echo"selected";}?> >Perempuan</option>

      </select>
    </div>

    <div class="form-group">
      <label>Departemen</label>
      <input class="form-control" name="dep" value=<?php echo $tampil['dep'];?> />

    </div>

    <div>

     <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

   </div>
 </div>
</form>

</div>   



<?php

@$nim = $_POST ['nim'];
@$nama = $_POST ['nama'];
@$tempat_lahir = $_POST ['tempat_lahir'];
@$tanggal_lahir = $_POST ['tanggal_lahir'];
@$j_k = $_POST ['j_k'];
@$dep = $_POST ['dep'];

@$simpan = $_POST ['simpan'];  

if ($simpan){

  $sql = $koneksi-> query("UPDATE `tb_anggota` SET `nim` = '$nim', `nama` = '$nama', `tempat_lahir` = '$tempat_lahir', `tanggal_lahir` = '$tanggal_lahir', `j_k` = '$j_k', `dep` = '$dep' WHERE `tb_anggota`.`nim` = $nim;");

  if ($sql){
   ?>
   <script type="text/javascript">

     alert ("Data Berhasil Disimpan");
     window.location.href="?page=anggota";

   </script>
   <?php
 }
}



?>
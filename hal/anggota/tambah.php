<div class="panel panel-default">
  <div class="panel-heading">
   Tambah Data
 </div>
 <div class="panel-body">

  <form method="POST">
    <div class="form-group">
      <label>NIM</label>
      <input class="form-control" name="nim"/>

    </div>
    <div class="form-group">
      <label>Nama</label>
      <input class="form-control" name="nama"/>

    </div>
    <div class="form-group">
      <label>Tempat Lahit</label>
      <input class="form-control" name="tempat_lahir"/>

    </div>

    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input class="form-control" type="date" name="tanggal_lahir"/>

    </div>

    <div class="form-group">
      <label>Jenis Kelamin</label>
      <select class="form-control" name="j_k">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>

      </select>
    </div>

    <div class="form-group">
      <label>Departemen</label>
      <input class="form-control" name="dep"/>

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

  $sql = $koneksi-> query("insert into tb_anggota (nim, nama, tempat_lahir, tanggal_lahir, j_k, dep)
    values('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$j_k', '$dep')");

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
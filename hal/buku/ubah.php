<?php

$id = $_GET['id'];
$sql = $koneksi -> query("SELECT * FROM `tb_buku` WHERE `id` ='$id'");
$tampil = $sql -> fetch_assoc();
//$tahun2 = $tampil['tahun_terbit'];
//$lokasi = $tampil['lokasi'];
?>

<div class="panel panel-default">
  <div class="panel-heading">
   Ubah Data
 </div>
 <div class="panel-body">

  
  <form method="POST">
    <div class="form-group">
      <label>Judul</label>
      <input class="form-control" name="judul" value=<?php echo $tampil['judul'];?>
      />

    </div>
    <div class="form-group">
      <label>Pengarang</label>
      <input class="form-control" name="pengarang" value=<?php echo $tampil['pengarang'];?> />

    </div>
    <div class="form-group">
      <label>Penerbit</label>
      <input class="form-control" name="penerbit" value=<?php echo $tampil['penerbit'];?> />

    </div>
    <div class="form-group">
      <label>Tahun Terbit</label>
      <input class="form-control" name="tahun" value=<?php echo $tampil['tahun_terbit'];?> />
      
    </div>
    <div class="form-group">
      <label>ISBN</label>
      <input class="form-control" name="isbn" value=<?php echo $tampil['isbn'];?> />

    </div>
    <div class="form-group">
      <label>Jumlah Buku</label>
      <input class="form-control" type="number" name="jumlah" value=<?php echo $tampil['jumlah_buku'];?> />

    </div>
    <div class="form-group">
      <label>Lokasi</label>
      <select class="form-control" name="lokasi"  >
        <option value="rak1"<?php if($tampil['lokasi'] =='rak1'){echo"selected";}?>>Rak 1</option>
        <option value="rak2"<?php if ($tampil['lokasi'] =='rak2'){echo"selected";}?>>Rak 2</option>
        <option value="rak3"<?php if ($tampil['lokasi'] =='rak3'){echo"selected";}?>>Rak 3</option> 
        
      </select>
    </div>
    
    <div class="form-group">
      <label>Tanggal Input</label>
      <input class="form-control" type="date" name="tanggal" value=<?php echo $tampil['tanggal_input'];?> />

    </div>

    <div>

     <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">

   </div>
 </div>
</form>

</div>  
<?php

@$judul = $_POST ['judul'];
@$pengarang = $_POST ['pengarang'];
@$penerbit = $_POST ['penerbit'];
@$tahun = $_POST ['tahun'];
@$isbn = $_POST ['isbn'];
@$jumlah = $_POST ['jumlah'];
@$lokasi = $_POST ['lokasi'];
@$tanggal = $_POST ['tanggal'];

@$ubah = $_POST ['ubah'];  

if ($ubah){
  
  $sql = $koneksi-> query("UPDATE `tb_buku` SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun', isbn='$isbn', jumlah_buku='$jumlah', lokasi='$lokasi', tanggal_input='$tanggal' where id=$id");

  if ($sql){
   ?>
   <script type="text/javascript">

     alert ("Data Berhasil Diubah");
     window.location.href="?page=buku";

   </script>
   <?php
 }
}



?>
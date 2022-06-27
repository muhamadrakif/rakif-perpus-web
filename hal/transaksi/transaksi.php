<a href="?page=transaksi&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
<!-- Advanced Tables -->
<div class="panel panel-default">
    
    <div class="panel-heading">
        Data Transaksi
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Judul Buku</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                        <th>Terlambat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $no = 1;
                    $sql = $koneksi-> query ("SELECT * FROM `tb_transaksi` WHERE `status` = 'Pinjam'");
                    while ($data=$sql-> fetch_assoc()){

                        ?>


                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['buku'];?></td>
                            <td><?php echo $data['nim'];?></td>
                            <td><?php echo $data['nama'];?></td>
                            <td><?php echo $data['tgl_pinjam'];?></td>
                            <td><?php echo $data['tgl_kembali'];?></td>
                            <td><?php echo $data['status'];?></td>
                            <td>
                                <?php 

                                $denda = 1000;
                                $tgl_dateline1 = $data['tgl_kembali'];
                                $tanggal_kembali = date('Y-m-d');
                                $lambat = terlambat($tgl_dateline1,$tanggal_kembali);
                                $denda1 = $lambat*$denda;
                                if($lambat>0){
                                    echo "<font color='red'>$lambat hari<br>(Rp $denda1)</font>";
                                }
                                else{
                                    echo $lambat.' Hari';
                                }


                                ?>
                            </td>
                            
                            <td>
                                <a href="?page=transaksi&aksi=kembali&id=<?php echo $data['id'];?>&id_buku=<?php echo $data['id_buku'];?>" class="btn btn-info">Kembali</a>
                                <a href="?page=transaksi&aksi=perpanjang&id=<?php echo $data['id'];?>&tgl_kembali=<?php echo $data['tgl_kembali'];?>&telat=<?php echo $lambat ?>" class="btn btn-danger">Perpanjang</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </div>
        </div>

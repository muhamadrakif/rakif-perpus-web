     <h2>Admin Dashboard</h2>   
     <h5>Welcome, Love to see you back. </h5>

     <!-- /. ROW  -->
     <hr />
     <div class="row">
     	<div class="col-md-3 col-sm-6 col-xs-6">           
     		<div class="panel panel-back noti-box">
     			<span class="icon-box bg-color-red set-icon">
     				<i class="fa fa-envelope-o"></i>
     			</span>
     			<div class="text-box" >
     				<p class="main-text">
               <?php

                $sql = $koneksi->  query ("SELECT COUNT(jumlah_buku) FROM tb_buku");
                while ($data=$sql-> fetch_assoc()){
                  echo $data['COUNT(jumlah_buku)'];
                  }
                ?> 

               </p>
     				<p class="text-muted">Jumlah Buku</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3 col-sm-6 col-xs-6">           
     		<div class="panel panel-back noti-box">
     			<span class="icon-box bg-color-green set-icon">
     				<i class="fa fa-bars"></i>
     			</span>
     			<div class="text-box" >
     				<p class="main-text">
                  <?php

                $sql = $koneksi->  query ("SELECT COUNT(nim) FROM tb_anggota;");
                while ($data=$sql-> fetch_assoc()){
                  echo $data['COUNT(nim)'];
                  }
                ?> 

               </p>
     				<p class="text-muted">Anggota</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3 col-sm-6 col-xs-6">           
     		<div class="panel panel-back noti-box">
     			<span class="icon-box bg-color-blue set-icon">
     				<i class="fa fa-bell-o"></i>
     			</span>
     			<div class="text-box" >
     				<p class="main-text">
            
               <?php

                $sql = $koneksi->  query ("SELECT COUNT(nama) AS total FROM tb_transaksi WHERE status = 'pinjam';");
                while ($data=$sql-> fetch_assoc()){
                  echo $data['total'];
                  }
                ?>       
               </p>
     				<p class="text-muted">Peminjam</p>
     			</div>
     		</div>
     	</div>
     </div>
        <!-- /. ROW  -->
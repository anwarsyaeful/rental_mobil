<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mobil</h1>
          </div>
			
			<a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-3">Tambah Data</a>

			<?php echo $this->session->flashdata('pesan') ?>

          <table class="table table-hover table-striped table-bordered">
          	 <thead>
          	 	<tr>
	          		<th width="20px">No</th>
	          		<th>Gambar</th>
	          		<th>Type</th>
	          		<th>Merk</th>
	          		<th>No. Plat</th>
	          		<th>Status</th>
	          		<th>Aksi</th>
          		</tr>
         	 </thead>
         	 <tbody>
         	 	<?php 
         	 		$no=1;
         	 		foreach($mobil as $mb) :  ?>
         	 			<tr>
	         	 			<td><?php echo $no++ ?></td>
	         	 			<td>
	         	 				<img width="70px" src="<?php echo base_url().'assets/upload/'.$mb->gambar?>">
	         	 			</td>
	         	 			<td><?php echo $mb->kode_type ?></td>
	         	 			<td><?php echo $mb->merk ?></td>
	         	 			<td><?php echo $mb->no_plat ?></td>
	         	 			<td><?php 
	         	 				if($mb->status=="0") {
	         	 					echo "<span class='badge badge-light'> Tidak Tersedia </span>";
	         	 				}else {
	         	 					echo "<span class='badge badge-info'> Tersedia </span>";
	         	 				}

	         	 			?></td>
	         	 			<td>
	         	 				<a href="<?php echo base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>
	         	 				<a href="<?php echo base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>
	         	 				<a href="<?php echo base_url('admin/data_mobil/update_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
	         	 			</td>
	         	 		</tr>
         	 	<?php endforeach; ?>
         	 </tbody>
         	</table>
		</section>
</div>
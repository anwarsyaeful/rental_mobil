<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div>
			
			<a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-3">Tambah Customer</a>

			<?php echo $this->session->flashdata('pesan') ?>

			<table class="table table-striped table-bordered table-hover">
				<tr>
					<th width="20px">No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No. Telepon</th>
					<th width="170px">Aksi</th>
				</tr>

				<?php 
				$no = 1;
				foreach ($customer as $cs) : ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $cs->nama ?></td>
						<td><?php echo $cs->alamat ?></td>
						<td><?php echo $cs->no_telepon ?></td>
						<td>
							<a href="<?php echo base_url('admin/data_customer/detail_customer/').$cs->id_customer ?>" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>
							<a href="<?php echo base_url('admin/data_customer/delete_customer/').$cs->id_customer ?>" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>
							<a href="<?php echo base_url('admin/data_customer/update_customer/').$cs->id_customer ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
						</td>
					</tr>

				<?php endforeach; ?>
			</table>

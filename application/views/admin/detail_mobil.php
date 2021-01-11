<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Mobil</h1>
          </div>
		</section>

		<?php foreach($detail as $dt) : ?>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<img style="width: 100%" src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>">
						</div>

							<div class="col-md-6">
								<table class="table">
									<tr>
										<td><strong>Type Mobil</strong></td>
										<td>
										<?php 
											if($dt->kode_type == "SDN"){
												echo "Sedan";
											}elseif($dt->kode_type == "HTB"){
												echo "Hatchback";
											}elseif($dt->kode_type == "MPV"){
												echo "Multi Purpose Vechile";
											}else{
												echo "<span class='text-danger'>Type Mobil Belum Terdaftar</span>";
											}
										?>
										</td>
									</tr>	

									<tr>
										<td><strong>Merk</strong></td>
										<td><?php echo $dt->merk ?></td>
									</tr>

									<tr>
										<td><strong>No. Plat</strong></td>
										<td><?php echo $dt->no_plat ?></td>
									</tr>	

									<tr>
										<td><strong>Warna</strong></td>
										<td><?php echo $dt->warna ?></td>
									</tr>

									<tr>
										<td><strong>AC</strong></td>
										<td>
											<?php 
												if($dt->ac == "0"){
													echo "<span class='text-danger'>Tidak Tersedia</span>";
												}else{
													echo "<span class='text-primary'>Tersedia</span>";
												}
											 ?>
										</td>
									</tr>

									<tr>
										<td><strong>Supir</strong></td>
										<td>
											<?php 
												if($dt->supir == "0"){
													echo "<span class='text-danger'>Tidak Tersedia</span>";
												}else{
													echo "<span class='text-primary'>Tersedia</span>";
												}
											 ?>
										</td>
									</tr>

									<tr>
										<td><strong>MP3 Player</strong></td>
										<td>
											<?php 
												if($dt->mp3_player == "0"){
													echo "<span class='text-danger'>Tidak Tersedia</span>";
												}else{
													echo "<span class='text-primary'>Tersedia</span>";
												}
											 ?>
										</td>
									</tr>

									<tr>
										<td><strong>Central Lock</strong></td>
										<td>
											<?php 
												if($dt->central_lock == "0"){
													echo "<span class='text-danger'>Tidak Tersedia</span>";
												}else{
													echo "<span class='text-primary'>Tersedia</span>";
												}
											 ?>
										</td>
									</tr>

									<tr>
										<td><strong>Harga Sewa/Hari</strong></td>
										<td>Rp. <?php echo number_format($dt->harga,0,',','.')  ?></td>
									</tr>

									<tr>
										<td><strong>Denda</strong></td>
										<td>Rp. <?php echo number_format($dt->denda,0,',','.') ?></td>
									</tr>

									<tr>
										<td><strong>Tahun</strong></td>
										<td><?php echo $dt->tahun ?></td>
									</tr>

									<tr>
										<td><strong>Status</strong></td>
										<td>
											<?php 
												if($dt->status == "0"){
													echo "<span class='badge badge-light'>Tidak Tersedia</span>";
												}else{
													echo "<span class='badge badge-info'>Tersedia</span>";
												}
											 ?>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<a class="btn btn-sm btn-danger mt-4 mr-1" href="<?php echo base_url('admin/data_mobil') ?>">Back</a>

								            <a class="btn btn-sm btn-warning mt-4" href="<?php echo base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>">Edit</a>	
										</td>
									</tr>
								</table>
							</div>	
					</div>	
				</div>
			</div>
		<?php endforeach; ?>
</div>
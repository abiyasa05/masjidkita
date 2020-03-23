                        <div class="col-sm-6">
					        <div class="panel">
					            <div class="panel-body demo-nifty-btn">
					
					                <!--Rounded Buttons-->
					                <!--===================================================-->
					                <button class="btn btn-default btn-rounded">Tambah</button>
					                <!--===================================================-->
					
					            </div>
					        </div>
					    </div>
<!-- BOOTSTRAP MODALS-->
    <!--====================================================-->
                   <div class="row">
					    <div class="col-sm-12">
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">Data Donasi</div>
					
					            <div class="panel-body">
					                <div class="table-responsive">
					                    <table class="table table-striped">
					                        <thead>
					                            <tr>
					                                <th>Nama</th>
					                                <th>Jumlah Donasi</th>
					                                <th>No Telp Donasi</th>
													<th>Tanggal Awal Donasi</th>
													<th>Tanggal Terakhir Donasi</th>
													<th>Keterangan</th>
					                            </tr>
					                        </thead>
					                        <tbody>
												<?php $no=1;?>
                                                <?php
                                                foreach($tampil as $res) {
                                                ?>
					                            <tr>
					                                <td><a href="#fakelink" class="btn-link">
                                                    <?php echo $res->nama_donasi;?>
                                                    
                                                    </a></td>
					                                <td><?php echo $res->jumlah_donasi;?></td>
					                                </td>
                                                   <td><?php echo $res->no_telp_donasi;?></td>
												   <td><?php echo $res->tanggal_awal_donasi;?></td>
												   <td><?php echo $res->tanggal_terakhir_donasi;?></td>
													<td>
													<button data-target="#edit<?php echo $res->id_donasi?>" data-toggle="modal" class="btn btn-warning">Edit</button>
													<button data-target="#hapus<?php echo $res->id_donasi?>" data-toggle="modal" class="btn 		btn-danger">Hapus</button>
                                                    </td>
                                                </tr>
												<?php
												$no++;
                                                }
                                                ?>
					                        </tbody>
					                    </table>
					                </div>
					            </div>
					            <!--===================================================-->
					            <!-- End Striped Table -->
					
					        </div>
                        </div>
                         <!--Default Bootstrap Modal-->
    <!--===================================================-->
    <?= form_open_multipart('donasi/tambah'); ?>
    <div  class="modal fade" id="tambah" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Data Donasi</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                     <!--Block Styled Form -->
					            <!--===================================================-->
					            <form>
					                <div class="panel-body">
					                    <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Nama Donasi</label>
					                                <input type="text" name="nama_donasi" class="form-control">
					                            </div>
					                        </div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Jumlah Donasi</label>
					                                <input type="number" name="jumlah_donasi" class="form-control">
					                            </div>
					                        </div>
											<div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">No Telp Donasi</label>
					                                <input type="number" name="no_telp_donasi" class="form-control">
					                            </div>
					                        </div>
											<div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Tanggal Awal Donasi</label>
					                                <input type="date" name="tanggal_awal_donasi" class="form-control">
					                            </div>
					                        </div>
											<div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Tanggal Terakhir Donasi</label>
					                                <input type="date" name="tanggal_terakhir_donasi" class="form-control">
					                            </div>
					                        </div>
											<div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Keterangan</label>
					                                <input type="text" name="keterangan" class="form-control">
					                            </div>
					                        </div>
					                    </div>

					                    
					                </div>
					               
					            </form>
					            <!--===================================================-->
					            <!--End Block Styled Form -->
                </div>
                
                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
	<!--End Default Bootstrap Modal-->
	    <!--Default Bootstrap Modal-->
	<!--===================================================-->
	<?php
    foreach($tampil as $res) {
	?>
	<?= form_open_multipart('donasi/edit'); ?>
    <div class="modal fade" id="edit<?php echo $res->id_donasi?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Edit</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
					<!--Block Styled Form -->
					            <!--===================================================-->
					            <form>
									<input type="hidden" name="id_donasi" value="<?php echo $res->id_donasi?>">
					                <div class="panel-body">
					                    <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Nama Donasi</label>
					                                <input type="text" name="nama_donasi" value="<?php echo $res->nama_donasi?>" class="form-control">
					                            </div>
					                        </div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Jumlah Donasi</label>
					                                <input type="text" name="jumlah_donasi"  value="<?php echo $res->jumlah_donasi?>" class="form-control">
					                            </div>
					                        </div>
											<div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">No Telp Donasi</label>
					                                <input type="number" name="no_telp_donasi"  value="<?php echo $res->no_telp_donasi?>" class="form-control">
					                            </div>
												<div class="form-group">
					                                <label class="control-label">Tanggal Awal Donasi</label>
					                                <input type="text" name="tanggal_awal_donasi"  value="<?php echo $res->tanggal_awal_donasi?>" class="form-control">
					                            </div>
												<div class="form-group">
					                                <label class="control-label">Tanggal Terakhir Donasi</label>
					                                <input type="text" name="tanggal_awal_donasi"  value="<?php echo $res->tanggal_awal_donasi?>" class="form-control">
					                            </div>
												<div class="form-group">
					                                <label class="control-label">Keterangan</label>
					                                <input type="text" name="keterangan"  value="<?php echo $res->keterangan?>" class="form-control">
					                            </div>
					                        </div>
					                    </div>

					                    
					                </div>
					                
					            </form>
					            <!--===================================================-->
					            <!--End Block Styled Form -->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Keluar</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
	<!--End Default Bootstrap Modal-->
	<!--Default Bootstrap Modal-->
	<!--===================================================-->
	
	<?= form_open_multipart('donasi/hapus/'. $res->id_donasi ); ?>
    <div class="modal fade" id="hapus<?php echo $res->id_donasi?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Hapus</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
					<!--Block Styled Form -->
					            <!--===================================================-->
					            <?php echo"Apakah anda yakin ingin menghapus data ini?????"?>
					            <!--===================================================-->
					            <!--End Block Styled Form -->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Keluar</button>
                    <button class="btn btn-primary">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
	<!--End Default Bootstrap Modal-->
	

	<?php echo form_close();?>
<?php } ?>
</div>
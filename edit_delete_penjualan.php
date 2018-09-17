<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id_penjualan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Penjualan</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_penjualan.php">
				<input type="hidden" class="form-control" name="id_penjualan" value="<?php echo $row['id_penjualan']; ?>">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nama Pembeli:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama_pembeli" value="<?php echo $row['nama_pembeli']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID Obat:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_obat" value="<?php echo $row['id_obat']; ?>">
					</div>
				</div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Nama Obat:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_obat" value="<?php echo $row['nama_obat']; ?>">
                    </div>
                </div>

                <div class="row form-group ">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Jumlah:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah" value="<?php echo $row['jumlah']; ?>">
                    </div>
                </div>

                  <div class="row form-group ">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Tanggal Jual:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tgl_jual" value="<?php echo $row['tgl_jual']; ?>">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">ID Pegawai:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id_pegawai" value="<?php echo $row['id_pegawai']; ?>">
                    </div>
                </div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="delete_<?php echo $row['id_penjualan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Penjualan</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['id_penjualan'].' '.$row['nama_pembeli']. ' '.$row['tgl_jual']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_penjualan.php?id_penjualan=<?php echo $row['id_penjualan']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
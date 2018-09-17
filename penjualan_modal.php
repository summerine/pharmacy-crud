<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Penjualan</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_penjualan.php">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID Penjualan:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_penjualan" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nama Pembeli: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama_pembeli" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID Obat:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_obat" required>
					</div>
				</div>

					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nama Obat:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama_obat" required>
					</div>
				</div>

					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Jumlah:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="jumlah" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tanggal Jual:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tgl_jual" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID Pegawai:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_pegawai" required>
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>
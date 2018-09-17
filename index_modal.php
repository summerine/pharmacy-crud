<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">

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
						<label class="control-label modal-label">Nama: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tipe:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tipe" required>
					</div>
				</div>

					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Golongan:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="golongan" required>
					</div>
				</div>

					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tanggal Expire:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tgl_expire" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Harga Beli:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="harga_beli" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Harga Jual:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="harga_jual" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID Supplier:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_supplier" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stok:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="stok" required>
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
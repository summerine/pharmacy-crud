<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id_obat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Obat</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id_obat" value="<?php echo $row['id_obat']; ?>">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nama:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tipe:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tipe" value="<?php echo $row['tipe']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Golongan:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="golongan" value="<?php echo $row['golongan']; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tanggal Expire:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tgl_expire" value="<?php echo $row['tgl_expire']; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Harga Beli:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="harga_beli" value="<?php echo $row['harga_beli']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Harga Jual:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="harga_jual" value="<?php echo $row['harga_jual']; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID Supplier:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_supplier" value="<?php echo $row['id_supplier']; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stok:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="stok" value="<?php echo $row['stok']; ?>">
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



<div class="modal fade" id="delete_<?php echo $row['id_obat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Obat</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['nama'].' '.$row['tgl_expire']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id_obat=<?php echo $row['id_obat']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
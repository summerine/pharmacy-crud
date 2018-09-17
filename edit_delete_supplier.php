<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id_supplier']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Supplier</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_supplier.php">
				<input type="hidden" class="form-control" name="id_supplier" value="<?php echo $row['id_supplier']; ?>">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nama</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Alamat:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
					</div>
				</div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Kota</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kota" value="<?php echo $row['kota']; ?>">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">No Telpon</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_telpon" value="<?php echo $row['no_telpon']; ?>">
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



<div class="modal fade" id="delete_<?php echo $row['id_supplier']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Supplier</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['id_supplier'].' '.$row['nama']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_supplier.php?id_supplier=<?php echo $row['id_supplier']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
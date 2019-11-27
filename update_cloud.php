    <div class="modal fade" id="update_cloud<?php echo $row['no_form']?>" aria-hidden="true">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<form method="POST" action="update_query_cloud.php">
    				<div class="modal-header">
    					<h3 class="modal-title">Assign Layanan</h3>
    				</div>
    				<div class="modal-body">
    					<div class="col-md-2"></div>
    					<div class="col-md-8">
    						<div class="form-group">
    							<label>Nomor Permintaan</label>
    							<input type="text" name="no_form" value="<?php echo $row['no_form']?>" class="form-control" required="required" readonly>
    						</div>
    						<div class="form-group">
    							<label>Ganti Status</label>
                                
                                <select name="status_transaksi">
                                    <option value="Menunggu Helpdesk">Menunggu Helpdesk</option>
                                    <option value="Menunggu Tim Teknis">Menunggu Tim Teknis</option>
                                    <option value="Menunggu Pemohon">Menunggu Pemohon</option>
                                </select>
    						</div>
    						
    					</div>
    				</div>
    				<div style="clear:both;"></div>
    				<div class="modal-footer">
    					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
    					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
    				</div>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
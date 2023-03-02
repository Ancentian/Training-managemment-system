<?php $sdate = "";$edate="";
$sdate = $_GET['sdate'];
$edate = $_GET['edate'];
?>
<div class="page-wrapper">
	<div class="content">
		<div class="page-header">
			<div class="page-title">
				<h4><?php echo strtoupper($product[0]['productName'])?> Usage Report</h4>
				<h6>Manage your Feeds</h6>
			</div>
			<div class="page-btn" hidden>
				<a href="<?php echo base_url('inventory/addproduct')?>" class="btn btn-added"><img src="<?php echo base_url() ?>res/assets/img/icons/plus.svg" alt="img" class="me-1">Add Product</a>
			</div>
		</div>
		<?php if ($this->session->flashdata('success-msg')) { ?>
			<div class="alert alert-success"><?php echo $this->session->flashdata('success-msg'); ?></div>
		<?php } ?>
		<?php if ($this->session->flashdata('error-msg')) { ?>
			<div class="alert alert-danger"><?php echo $this->session->flashdata('error-msg'); ?></div>
		<?php } ?>	

		<div class="card">
			<div class="card-body">
				<div class="table-top">
					<div class="search-set">
						<div class="search-path">
							<a class="btn btn-filter" id="filter_search">
								<img src="<?php echo base_url() ?>res/assets/img/icons/filter.svg" alt="img">
								<span><img src="<?php echo base_url() ?>res/assets/img/icons/closes.svg" alt="img"></span>
							</a>
						</div>
						<div class="search-input">
							<a class="btn btn-searchset"><img src="<?php echo base_url() ?>res/assets/img/icons/search-white.svg" alt="img"></a>
						</div>
					</div>

				</div>

				<div class="card" id="filter_inputs">
					<div class="card-body pb-0">
						<form action="<?php echo base_url('reports/productReport/'.$product[0]['product_id'])?>" method="GET">
							<div class="row">
								<div class="col-lg-5 col-sm-6 col-12">
									<label>FROM</label>
									<div class="form-group">
										<div class="input-groupicon">
											<input type="text" name="sdate" value="<?php echo $sdate;?>" class="datetimepicker">
											<div class="addonset">
												<img src="<?php echo base_url() ?>res/assets/img/icons/calendars.svg" alt="img">
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-5 col-sm-6 col-12">
									<label>TO</label>
									<div class="form-group">
										<div class="input-groupicon">
											<input type="text" name="edate" value="<?php echo $edate;?>" class="datetimepicker">
											<div class="addonset">
												<img src="<?php echo base_url() ?>res/assets/img/icons/calendars.svg" alt="img">
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-1 col-sm-6 col-12 ms-auto">
									<label></label>
									<div class="form-group">
										<button class="btn btn-warning btn-sm" type="submit"><img src="<?php echo base_url() ?>res/assets/img/icons/search-whites.svg" alt="img"></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table datanew">
						<thead>
							<tr>
								<th>*</th>
								<th>Feed Name</th>
								<th>Paddock</th>
								<th>Quantity Used</th>
								<th>Created At</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; $totQty = 0; foreach($product as $key) { $totQty += $key['qty']; ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo strtoupper($key['productName'])?></td>
								<td><?php echo ucfirst($key['paddockName'])?></td>
								<td><?php echo $key['qty']?></td>
								<td><?php echo $key['created_at']?></td>
							</tr>
							<?php $i++; }?>
						</tbody>
						<tfoot>
							<tr>
								<th ></th>
								<th>TOTAL</th>
								<th></th>
								<th><?php echo $totQty; ?></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>
</div>

<div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="addtag" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Product</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<form action="#" id="productform">
					<input type="hidden" value="" name="id"/>
					<div class="row">
						<div class="col-lg-6 col-sm-6 col-12">
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" name="prodName">
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-12">
							<div class="form-group">
								<label>Minimum Qty</label>
								<input type="text" name="unit">
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-12">
							<div class="form-group">
								<label>Minimum Qty</label>
								<input type="text" name="minQty">
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-12">
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" name="qty">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" name="description"></textarea>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label> Product Image</label>
								<div class="image-upload">
									<input type="file" name="photo">
									<div class="image-uploads">
										<img src="assets/img/icons/upload.svg" alt="img">
										<h4>Drag and drop a file to upload</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()" class="btn btn-submit">Save</button>
				<button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>



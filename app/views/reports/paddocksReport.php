<div class="page-wrapper">
	<div class="content">
		<div class="page-header">
			<div class="page-title">
				<h4>Paddocks List</h4>
				<h6>Manage Paddocks</h6>
			</div>
			<div class="page-btn">
				<a href="#" data-bs-toggle="modal" data-bs-target="#createPaddock" class="btn btn-added"><img src="<?php echo base_url() ?>res/assets/img/icons/plus.svg" alt="img" class="me-1">Create Paddock</a>
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
						<div class="row">
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="form-group">
									<input type="text" placeholder="Enter Brand Name">
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="form-group">
									<input type="text" placeholder="Enter Brand Description">
								</div>
							</div>
							<div class="col-lg-1 col-sm-6 col-12 ms-auto">
								<div class="form-group">
									<a class="btn btn-filters ms-auto"><img src="<?php echo base_url() ?>res/assets/img/icons/search-whites.svg" alt="img"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive">
					<table class="table datanew">
						<thead>
							<tr>
								<th>#</th>
								<th>Paddock Name</th>
								<th>Cattle</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; foreach($paddocks as $key) {?>
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $key['paddockName']?></td>
								<td><?php echo $this->cattle->count_cattle($key['id'])?></td>
								<td>
									<a class="btn btn-info" href="<?php echo base_url('reports/paddockFeedReport/'.$key['id'])?>">
										<i class="fa fa-eye"></i>
									</a>
								</td>
							<?php $i++; }?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>
</div>

<div class="modal fade" id="createPaddock" tabindex="-1" aria-labelledby="create" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Create</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('management/storePaddock')?>" method="POST" class="">
					<div class="row">
						<div class="col-lg-6 col-sm-12 col-12">
							<div class="form-group">
								<label>Paddock Name</label>
								<input type="text" name="paddockName">
							</div>
						</div>         
					</div>
					<div class="col-lg-12">
						<button class="btn btn-submit me-2" type="submit">Submit</button>
						<!-- <a class="btn btn-submit me-2" type="submit">Submit</a>
						<a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

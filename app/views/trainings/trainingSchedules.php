<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Members</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home/index')?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Members</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by ID ...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Name ...">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Phone ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php } ?>
        <!-- Start Toastr Alert -->
        <?php $this->load->view('alert');  ?>
        <!-- End Toastr Alert -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Members</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    
                                    <a href="<?php echo base_url('members/addMember') ?>" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>*</th>
                                        <th>Training</th>
                                        <th>Cooperative</th>
                                        <th>Training Date</th>
                                        <th>Created By</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($schedules as $key) {?>
                                    <tr>
                                    <td><?php echo $i; ?></td>
                                    <td> <a href="<?php echo base_url('training/mark_trainingAttendance/'.$key->training_id."/".$key->cooperative_id) ?>" style="color: blue;" onmouseover="this.style.color='red';" onmouseout="this.style.color='blue';"><?php echo strtoupper($key->training_name) ?></a></td>
                                    <td><?php echo $key->cooperative_name?></td> 
                                    <td><?php echo $key->training_date?></td>
                                    <td><?php echo $key->first_name." ".$key->last_name?></td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="<?php echo base_url('members/memberProfile?memberID='. $key->id_number)?>" class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <a href="<?php echo base_url('loans/applyLoan?memberID='. $key->member_id)?>" class="btn btn-sm bg-success-light me-2">
                                                <i class="fa fa-money"></i>
                                            </a>
                                            <a href="<?php echo base_url('members/editMember?memberID='. $key->member_id)?>" class="btn btn-sm bg-danger-light">
                                                <i class="feather-edit"></i>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; }?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



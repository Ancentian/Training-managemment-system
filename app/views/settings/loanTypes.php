<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Loans</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Loans</li>
                    </ul>
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
                                    <h3 class="page-title">Loans</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal"><i class="fas fa-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>

                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>*</th>
                                    <th>Loan Type</th>
                                    <th>Interst Rate</th>
                                    <th>Loans</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($loanTypes as $key) {?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $key['loan_type']; ?></td>
                                    <td><?php echo $key['interest_rate']; ?>%</td>
                                    <td></td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <a href="edit-department.html" class="btn btn-sm bg-danger-light">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a href="edit-department.html" class="btn btn-sm bg-danger-light">
                                                <i class="feather-trash"></i>
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

    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Add Loan Type</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('loans/storeLoanType')?>" method="post">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Loan Type Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms">
                                    <label>Type Name <span class="login-danger">*</span></label>
                                    <input type="text" name="loan_type" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms">
                                    <label>Interest Rate <span class="login-danger">*</span></label>
                                    <input type="text" name="interest_rate" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


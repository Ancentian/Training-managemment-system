<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Member</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="teachers.html">Member</a></li>
                        <li class="breadcrumb-item active">Add Member</li>
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
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('members/storeMember')?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Basic Details</span></h5>
                                </div>        
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms" required>
                                        <label>First Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Last Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>ID/Passport No. <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="id_number" placeholder="Enter ID/Passport No." required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>County <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="county" required>
                                            <option value="">--Choose--</option>
                                            <option value="meru">Meru</option>
                                            <option value="embu">Embu</option>
                                            <option value="tharaka">Tharaka</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Cooperative <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="cooperative_id" required>
                                            <option value="">--Choose--</option>
                                            <?php foreach($cooperatives as $key) {?>
                                            <option value="<?php echo $key->id;?>"><?php echo $key->cooperative_name;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Training Cluster <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="training_cluster" required>
                                            <option value="">--Choose--</option>
                                            <option value="cluster1">cluster 1</option>
                                            <option value="cluster2">cluster 2</option>
                                            <option value="cluster3">Cluster 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Gender <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="gender" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone Number <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Age <span class="login-danger">*</span></label>
                                        <input type="number" class="form-control" name="age" placeholder="Enter Age">
                                    </div>
                                </div>
                                
                                </div>                                             
                                <div class="col-12 ">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary justify-content-center">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script src="<?php echo base_url() ?>res/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/js/feather.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/apexchart/chart-data.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/select2/js/select2.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/plugins/datatables/datatables.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

<script src="<?php echo base_url() ?>res/assets/js/script.js"></script>

</body>

</html>



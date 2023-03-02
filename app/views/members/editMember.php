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
                        <form action="<?php echo base_url('members/storeMember')?>" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Basic Details</span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Role <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="role_id" required>
                                            <?php foreach($roles as $key) {?>
                                            <option value="<?php echo $key['id']?>"><?php echo $key['role_name']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Group <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="group_id" required>
                                            <?php foreach($groups as $key) {?>
                                            <option value="<?php echo $key['id']?>"><?php echo $key['group_name']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Member ID <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="member_id" value="<?php echo $member['member_id']?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms" required>
                                        <label>First Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="first_name" value="<?php echo $member['first_name']?>" >
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Middle Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="middle_name" value="<?php echo $member['middle_name']?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Last Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="last_name" value="<?php echo $member['last_name']?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone Number 1 <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="phonenumber1" value="<?php echo $member['phonenumber1']?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone Number 2 <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="phonenumber2" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Email <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $member['email']?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>ID/Passport No. <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="id_number" value="<?php echo $member['id_number']?>" required>
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
                                        <label>Marital Status <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="marital_status">
                                            <option value="married">Married</option>
                                            <option value="single">Single</option>
                                            <option value="window">Window</option>
                                            <option value="windower">Windower</option>
                                            <option value="divorced">Divorced</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon">
                                        <label>Date Of Birth <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" name="date_of_birth" type="text" placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Occupation <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="occupation" placeholder="Enter Occupation">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon">
                                        <label>Joining Date <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" name="join_date" type="text" placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                                
                                <!-- <div class="col-12">
                                    <h5 class="form-title"><span>Login Details</span></h5>
                                </div>
                                
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Password <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="password" placeholder="Enter Password">
                                    </div>
                                </div> -->
                                
                                <div class="col-12">
                                    <h5 class="form-title"><span>Address</span></h5>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="form-group local-forms">
                                        <label>Address <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter address">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>City <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="city" placeholder="Enter City">
                                    </div>
                                </div> -->
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Location <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="location" placeholder="Enter Location">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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



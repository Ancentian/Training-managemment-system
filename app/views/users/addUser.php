<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User Management</h4>
                <h6>Add/Update User</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo base_url('staff/store'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="password" value="<?php echo $this->auth_model->generate_hash('pass12345');?>">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="select" name="role_id" required>
                                    <option>Select</option>
                                    <option value="admin">Admin</option>
                                    <option value="superadmin">Super Admin</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-submit me-2" type="submit">Submit</button>
                            <!-- <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a> -->
                            <!-- <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>



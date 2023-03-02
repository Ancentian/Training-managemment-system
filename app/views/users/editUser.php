<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User Management</h4>
                <h6>Edit/Update User</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo base_url('staff/updateUser/'.$user['id']); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" value="<?php echo $user['firstname']?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" value="<?php echo $user['lastname']?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?php echo $user['email']?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="select" name="role_id" required>
                                    <!-- <option>Select</option> -->
                                    <option value="admin" <?php if($user['role_id']=='admin'){echo "selected"; }?> >Admin</option>
                                    <option value="superadmin"<?php if($user['role_id']=='superadmin'){echo "selected"; }?>>Super Admin</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-submit me-2" type="submit">Submit</button>
                            <!-- <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a> -->
                            <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>



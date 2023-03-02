<?php //var_dump($members->training_id[0]);die; ?>
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Attendance List</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home/index')?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Attendance List</li>
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
                                    <h3 class="page-title">Attendance List for <?php echo $members->training_id[0]?></h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">

                                    <a href="<?php echo base_url('members/addMember') ?>" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <div class="mb-3">
                              <label for="search">Search:</label>
                              <input type="text" id="search" class="form-control" placeholder="Search By Name, ID Number">
                          </div>
                          <form action="<?php echo base_url('training/storeAttendance')?>" method="POST">
                            <table class="table  table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>*</th>
                                        <th>Name</th>
                                        <th>Cooperative</th> 
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" id="check-all" type="checkbox">
                                            </div>
                                        </th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($members as $key) {?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $key->first_name." ".$key->last_name?></td>
                                            <td><?php echo ucfirst($key->cooperative_name)?></td>
                                            <td><input type="text" value="<?php echo $key->training_id?>" name="training_id[]" hidden></td>
                                            <td><input type="text" value="<?php echo $key->cooperative_id?>" name="cooperative_id[]" hidden></td>
                                            <td><input type="text" value="<?php echo $key->id_number?>" name="member_id[]" hidden></td>
                                            <td>
                                               <div class="form-check check-tables">
                                                <input class="form-check-input check-item" type="checkbox" value="1" name="attendance_value[]">
                                                <input type="hidden" name="attendance_value[]" value="0">
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; }?>
                                </tbody>
                            </table>
                            <div class="col-12 ">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary mt-3 justify-content-center">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Schedule Training</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Member</a></li>
                        <li class="breadcrumb-item active">Schedule Training</li>
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
                        <form action="<?php echo base_url('training/storeSchedule')?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h4 >Training Details</h4>
                                </div>        
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms" required>
                                        <label>Cooperative <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="cooperative_id" required>
                                            <option value="">--Choose--</option>
                                            <?php foreach($cooperatives as $key) {?>
                                                <option value="<?php echo $key->id;?>"><?php echo $key->cooperative_name;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Training <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="training_id" required>
                                            <option value="">--Choose--</option>
                                            <?php foreach($trainings as $key) {?>
                                                <option value="<?php echo $key->id;?>"><?php echo $key->training_name;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                <div class="form-group local-forms calendar-icon">
                                    <label>Date <span class="login-danger">*</span></label>
                                    <input class="form-control datetimepicker" id="training_date_edit" name="training_date" type="text"
                                    placeholder="YYYY-MM-DD">
                                </div>
                            </div>      
                            </div>   
                            <div class="invoice-add-table">
                                <h4>Training Topics</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-white" id="tableTraining">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px">#</th>
                                                <th class="col-md-11">Training Topic</th>  
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><input class="form-control"style="min-width:150px" type="text" id="description" name="training_topic[]" required></td>
                                                <td><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn"><i class="fa fa-plus"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
<script type="text/javascript">
    // Start Add Multiple Shop Items
    var rowIdx = 1;
    $("#addBtn").on("click", function ()
    {
        // Adding a row inside the tbody.
        $("#tableTraining tbody").append(`
            <tr id="R${++rowIdx}">
            <td class="row-index text-center"><p> ${rowIdx}</p></td>
            <td><input class="form-control" type="text" style="min-width:150px" id="description" name="training_topic[]"></td>

            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="feather-trash"></i></a></td>
            </tr>`);
    });
    $("#tableTraining tbody").on("click", ".remove", function ()
    {
        // Getting all the rows next to the row
        // containing the clicked button
        var child = $(this).closest("tr").nextAll();
        // Iterating across all the rows
        // obtained to change the index
        child.each(function () {
        // Getting <tr> id.
            var id = $(this).attr("id");

        // Getting the <p> inside the .row-index class.
            var idx = $(this).children(".row-index").children("p");

        // Gets the row number from <tr> id.
            var dig = parseInt(id.substring(1));

        // Modifying row index.
            idx.html(`${dig - 1}`);

        // Modifying row id.
            $(this).attr("id", `R${dig - 1}`);
        });

        // Removing the current row.
        $(this).closest("tr").remove();

        // Decreasing total number of rows by 1.
        rowIdx--;
    });

</script>

</script>

</body>

</html>



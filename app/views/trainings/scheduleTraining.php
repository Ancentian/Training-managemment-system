<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Training</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home')?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Training</li>
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
                        <input type="text" class="form-control" placeholder="Search by Year ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Toastr -->
        <?php $this->load->view('alert'); ?>
        <!-- End Toastr-->
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Training List</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">



                                    <a href="#" data-bs-toggle="modal" data-bs-target="#schedule-training" class="btn btn-primary">Add Training <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped" id="mydata">
                            <thead class="student-thread">
                                <tr>
                                    <th>*</th>
                                    <th>Training</th>
                                    <th>Date</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div id="schedule-training" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Schedule Training</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form action="<?php echo base_url('members/storeMember')?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title"><span>Basic Details</span></h5>
                        </div>        
                        
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Cooperative <span class="login-danger">*</span></label>
                                <select class="form-control select" name="cooperative" required>
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
                    </div>  
                    <div class="invoice-add-table">
                        <h4>Training Topics</h4>
                        <div class="table-responsive">
                            <table class="table table-hover table-white" id="tableTraining">
                                <thead>
                                    <tr>
                                        <th style="width: 20px">#</th>
                                        <th class="col-md-10">Training Topic</th>  
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

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="btn_save" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Training Modal -->
<div id="edit-training" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Training Training</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form>
                   <div class="row">
                    <div class="col-12 col-sm-12" hidden>
                        <div class="form-group local-forms">
                            <label>ID<span class="login-danger">*</span></label>
                            <input type="text" id="id_edit" name="id_edit" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12">
                        <div class="form-group local-forms">
                            <label>Training Name<span class="login-danger">*</span></label>
                            <input type="text" id="training_name_edit" name="training_name_edit" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12">
                        <div class="form-group local-forms calendar-icon">
                            <label>Date <span class="login-danger">*</span></label>
                            <input class="form-control datetimepicker" id="training_date_edit" name="training_date_edit" type="text"
                            placeholder="YYYY-MM-DD">
                        </div>
                    </div>                            
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="btn_update" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>

<!-- Delete Training -->
<div id="Training_Delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Training Training</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form>
                   <strong>Are you sure to delete this record?</strong>
               </div>
               <div class="modal-footer">
                <input type="hidden" name="id_delete" id="id_delete" class="form-control">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                <button type="submit" id="btn_delete" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>



<footer>
    <p>Copyright © 2023 CoWA.</p>
</footer>
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
    $(document).ready(function(){
        show_product(); //call function show all product

        $('#mydata').dataTable();

        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('training/training_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var rowIdx = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                        '<td>'+rowIdx+'</td>'+
                        '<td>'+data[i].training_name+'</td>'+
                        '<td>'+data[i].training_date+'</td>'+
                        '<td style="text-align:right;">'+
                        '<a href="javascript:void(0);" class="btn btn-success btn-sm training_edit" data-id="'+data[i].id+'" data-training_name="'+data[i].training_name+'" data-training_date="'+data[i].training_date+'"><i class="fa fa-edit"></i></a>'+' '+
                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm training_delete" data-id="'+data[i].id+'"><i class="fa fa-trash"></i></a>'+
                        '</td>'+
                        '</tr>';
                        rowIdx++;
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save product
        $('#btn_save').on('click',function(){
            var training_name = $('#training_name').val();
            var training_date = $('#training_date').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('training/store_training')?>",
                dataType : "JSON",
                data : {training_name:training_name , training_date:training_date},
                success: function(data){
                    $('[name="training_name"]').val("");
                    $('[name="training_date"]').val("");
                    $('#add-training').modal('hide');
                    
                    show_product();

                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.training_edit',function(){
            var id = $(this).data('id');
            var training_name = $(this).data('training_name');
            var training_date = $(this).data('training_date');

            $('#edit-training').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="training_name_edit"]').val(training_name);
            $('[name="training_date_edit"]').val(training_date);
        });

        //update record to database
        $('#btn_update').on('click',function(){
            var id = $('#id_edit').val();
            var training_name = $('#training_name_edit').val();
            var training_date = $('#training_date_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('training/update')?>",
                dataType : "JSON",
                data : {id:id, training_name:training_name , training_date:training_date},
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="training_name_edit"]').val("");
                    $('[name="training_date_edit"]').val("");
                    $('#edit-training').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.training_delete',function(){
            var id = $(this).data('id');

            $('#Training_Delete').modal('show');
            $('[name="id_delete"]').val(id);
        });

        //delete record to database
        $('#btn_delete').on('click',function(){
            var id = $('#id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('training/delete')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="id_delete"]').val("");
                    $('#Training_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

    });


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

</body>
</html>
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

                                    
                                    
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add-training" class="btn btn-primary">Add Training <i class="fas fa-plus"></i></a>
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
        <div id="add-training" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Add Training</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     <form>
                         <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms">
                                    <label>Training Name<span class="login-danger">*</span></label>
                                    <input type="text" id="training_name" name="training_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms calendar-icon">
                                    <label>Date <span class="login-danger">*</span></label>
                                    <input class="form-control datetimepicker" id="training_date" name="training_date" type="text"
                                    placeholder="YYYY-MM-DD">
                                </div>
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
<script src="<?php echo base_url() ?>res/assets/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/toastr/toastr.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/script.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        show_training(); //call function show all product
         
        $('#mydata').dataTable();
          
        //function show all product
        function show_training(){
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
                    
                    show_training();
                    toastr.success('Training added successfully','Success');
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
                    show_training();
                    toastr.success('Training Updated successfully','Success');
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
                    show_training();
                    toastr.success('Training Deleted successfully','Success');
                }
            });
            return false;
        });
 
    });
 
</script>

</body>
</html>
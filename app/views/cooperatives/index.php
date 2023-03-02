<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Cooperatives</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Cooperatives</li>
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
                                    <h3 class="page-title">Cooperatives</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCooperative"><i class="fas fa-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>

                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>*</th>
                                    <th>Cooperative</th>
                                    <th>Location</th>
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

    <div id="addCooperative" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Add Cooperative</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Cooperative Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms">
                                    <label>Cooperative Name <span class="login-danger">*</span></label>
                                    <input type="text" name="cooperative_name" id="cooperative_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms">
                                    <label>Location<span class="login-danger">*</span></label>
                                    <input type="text" name="location" id="location" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="btn_save" class="btn btn-primary">Save </button>
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
                url   : '<?php echo site_url('cooperatives/cooperative_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var rowIdx = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id+'</td>'+
                                '<td>'+data[i].cooperative_name+'</td>'+
                                '<td>'+data[i].location+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-success btn-sm training_edit" data-id="'+data[i].id+'" data-training_name="'+data[i].training_name+'" data-training_date="'+data[i].training_date+'"><i class="fa fa-edit"></i></a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm training_delete" data-id="'+data[i].id+'"><i class="fa fa-trash"></i></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //Save product
        $('#btn_save').on('click',function(){
            var cooperative_name = $('#cooperative_name').val();
            var location = $('#location').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('cooperatives/store_cooperative')?>",
                dataType : "JSON",
                data : {cooperative_name:cooperative_name , location:location},
                success: function(data){
                    $('[name="cooperative_name"]').val("");
                    $('[name="location"]').val("");
                    $('#addCooperative').modal('hide');
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
 
</script>

</body>
</html>


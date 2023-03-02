<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User List</h4>
                <h6>Manage your User</h6>
            </div>
            <div class="page-btn">
                <a href="<?php echo base_url('staff/addUser') ?>" class="btn btn-added"><img src="<?php echo base_url() ?>res/assets/img/icons/plus.svg" alt="img" class="me-2">Add User</a>
            </div>
        </div>

        <?php if ($this->session->flashdata('success-msg')) { ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('success-msg'); ?></div>
        <?php } ?>
        <?php if ($this->session->flashdata('error-msg')) { ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error-msg'); ?></div>
        <?php } ?>  

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="<?php echo base_url() ?>res/assets/img/icons/filter.svg" alt="img">
                                <span><img src="<?php echo base_url() ?>res/assets/img/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset">
                                <img src="<?php echo base_url() ?>res/assets/img/icons/search-white.svg" alt="img">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter User Name">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Disable</option>
                                        <option>Enable</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img src="<?php echo base_url() ?>res/assets/img/icons/search-whites.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Profile</th>
                                <th>Name </th>
                                <th>Email </th>
                                <th>Role </th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($users as $key) {?>
                            <tr id="<?php echo $key['id']?>">
                                <td><?php echo $i;?></td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img class="border border-success rounded-circle" src="<?php echo base_url() ?>res/assets/img/user.png" alt="product">
                                    </a>
                                </td>
                                <td><?php echo $key['firstname']." ".$key['lastname']?></td>
                                <td><?php echo $key['email']?> </td>
                                <td><?php echo ucfirst($key['role_id'])?> </td>
                                <td><?php echo $key['created_at']?> </td>
                                <td>
                                    <a class="me-3" href="<?php echo base_url('staff/editUser/'.$key['id']) ?>">
                                        <img src="<?php echo base_url() ?>res/assets/img/icons/edit.svg" alt="img">
                                    </a>

                                    <a class="me-3 removeUser">
                                        <img src="<?php echo base_url() ?>res/assets/img/icons/delete.svg" alt="img">
                                    </a>
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
</div>
<script src="<?php echo base_url() ?>res/assets/js/jquery-3.6.0.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/feather.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/js/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/select2/js/custom-select.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/moment.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>

<script src="<?php echo base_url() ?>res/assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/plugins/morris/raphael-min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/morris/chart-data.js"></script>

<script src="<?php echo base_url() ?>res/assets/js/script.js"></script>

<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

<script type="text/javascript">
    $(".removeUser").click(function(){
        var id = $(this).parents("tr").attr("id");
    
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this Record!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonClass: "btn-primary",
        cancelButtonText: "No, Cancel!",
        closeOnConfirm: false,
        closeOnCancel: true
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: "<?php echo base_url('staff/deleteUser')?>/"+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Deleted!", "Your Your Record has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
     
    });

        $(document).ready(function() {
    $('#ranch').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    
</script>
</body>
</html>

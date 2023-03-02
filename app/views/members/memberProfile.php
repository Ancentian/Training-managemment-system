    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Member Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Invoices</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="inovices-widget-header">
                                <span class="inovices-widget-icon">
                                    <img src="assets/img/icons/invoices-icon1.svg" alt="">
                                </span>
                                <div class="inovices-dash-count">
                                    <div class="inovices-amount">KES. <?php echo number_format($totsavings['totSavings'])?></div>
                                </div>
                            </div>
                            <p class="inovices-all">Total Savings</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="inovices-widget-header">
                                <span class="inovices-widget-icon">
                                    <img src="assets/img/icons/invoices-icon2.svg" alt="">
                                </span>
                                <div class="inovices-dash-count">
                                    <div class="inovices-amount">$4,5884</div>
                                </div>
                            </div>
                            <p class="inovices-all">Paid Invoices <span>60</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="inovices-widget-header">
                                <span class="inovices-widget-icon">
                                    <img src="assets/img/icons/invoices-icon3.svg" alt="">
                                </span>
                                <div class="inovices-dash-count">
                                    <div class="inovices-amount">KES. </div>
                                </div>
                            </div>
                            <p class="inovices-all">Loans <span></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="inovices-widget-header">
                                <span class="inovices-widget-icon">
                                    <img src="assets/img/icons/invoices-icon4.svg" alt="">
                                </span>
                                <div class="inovices-dash-count">
                                    <div class="inovices-amount">KES. </div>
                                </div>
                            </div>
                            <p class="inovices-all">Loan Dues <span>80</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card bg-white">

                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="nav-item"><a class="nav-link active" href="#bottom-justified-info" data-bs-toggle="tab">Basic Info</a></li>
                            <li class="nav-item"><a class="nav-link" href="#bottom-justified-savings" data-bs-toggle="tab">Savings</a></li>
                            <li class="nav-item"><a class="nav-link" href="#bottom-justified-loans" data-bs-toggle="tab">Loans</a></li>
                            <li class="nav-item"><a class="nav-link" href="#bottom-justified-others" data-bs-toggle="tab">Others</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="bottom-justified-info">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="student-personals-grp">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="heading-detail">
                                                            <h4>Personal Details :</h4>
                                                        </div>
                                                        <div class="personal-activity">
                                                            <div class="personal-icons">
                                                                <i class="feather-user"></i>
                                                            </div>
                                                            <div class="views-personal">
                                                                <h4>Name</h4>
                                                                <h5><?php echo $member['first_name']. " ". $member['last_name']?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="personal-activity">
                                                            <div class="personal-icons">
                                                                <img src="<?php echo base_url() ?>res/assets/img/icons/buliding-icon.svg" alt="">
                                                            </div>
                                                            <div class="views-personal">
                                                                <h4>Group </h4>
                                                                <h5><?php echo ucfirst($member['group_name'])?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="personal-activity">
                                                            <div class="personal-icons">
                                                                <i class="feather-phone-call"></i>
                                                            </div>
                                                            <div class="views-personal">
                                                                <h4>Mobile</h4>
                                                                <h5><?php echo $member['phonenumber1']?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="personal-activity">
                                                            <div class="personal-icons">
                                                                <i class="feather-mail"></i>
                                                            </div>
                                                            <div class="views-personal">
                                                                <h4>Email</h4>
                                                                <h5><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4bebbb194b3b9b5bdb8fab7bbb9">[email&#160;protected]</a></h5>
                                                            </div>
                                                        </div>
                                                        <div class="personal-activity">
                                                            <div class="personal-icons">
                                                                <i class="feather-user"></i>
                                                            </div>
                                                            <div class="views-personal">
                                                                <h4>Gender</h4>
                                                                <h5><?php echo ucfirst($member['gender'])?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="personal-activity">
                                                            <div class="personal-icons">
                                                                <i class="feather-calendar"></i>
                                                            </div>
                                                            <div class="views-personal">
                                                                <h4>Date of Birth</h4>
                                                                <h5><?php echo $member['date_of_birth']?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="personal-activity">
                                                            <div class="personal-icons">
                                                                <i class="feather-italic"></i>
                                                            </div>
                                                            <div class="views-personal">
                                                                <h4>Marital Status</h4>
                                                                <h5><?php echo ucfirst($member['marital_status'])?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="personal-activity mb-0">
                                                            <div class="personal-icons">
                                                                <i class="feather-map-pin"></i>
                                                            </div>
                                                            <div class="views-personal">
                                                                <h4>Address</h4>
                                                                <h5><?php echo ucfirst($member['location'])?></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="student-personals-grp">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="heading-detail">
                                                            <h4>About Me</h4>
                                                        </div>
                                                        <div class="hello-park">
                                                            <h5>Hello I am Joe Parks</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur officia deserunt mollit anim id est laborum.</p>

                                                        </div>
                                                        <div class="hello-park">
                                                            <h5>Education</h5>
                                                            <div class="educate-year">
                                                                <h6>2008 - 2009</h6>
                                                                <p>Secondary Schooling at xyz school of secondary education, Mumbai.</p>
                                                            </div>
                                                            <div class="educate-year">
                                                                <h6>2011 - 2012</h6>
                                                                <p>Higher Secondary Schooling at xyz school of higher secondary education, Mumbai.</p>
                                                            </div>
                                                            <div class="educate-year">
                                                                <h6>2012 - 2015</h6>
                                                                <p>Bachelor of Science at Abc College of Art and Science, Chennai.</p>
                                                            </div>
                                                            <div class="educate-year">
                                                                <h6>2015 - 2017</h6>
                                                                <p class="mb-0">Master of Science at Cdm College of Engineering and Technology, Pune.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="bottom-justified-savings">
                                <div class="table-responsive">
                                    <table class="table table-stripped table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>*</th>
                                                <th>Date </th>
                                                <th>Amount</th>
                                                <th>Invoice to</th>
                                                <th>Amount</th>

                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; $amount = 0; foreach($savings as $key) { $amount += $key['amount']; ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $key['saving_date']?></td>
                                                <td><?php echo $key['amount']?></td>

                                                <td class="text-primary"></td>
                                                <td><span class="badge bg-success-light">Paid</span></td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                            <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Invoice</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone Invoice</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++; }?>
                                        </tbody>
                                        <tfoot>
                                            <th>TOTAL</th>
                                            <th></th>
                                            <th><?php echo number_format($amount, 2); ?></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="bottom-justified-loans">
                                <div class="table-responsive">
                                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>*</th>
                                    <th>Loan Type</th>
                                    <th>Rate</th>
                                    <th>Loans Amount</th>
                                    <th>Interest</th>
                                    <th>Amount Payable</th>
                                    <th>Amount Paid</th>
                                    <th>Date</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($loans as $key) {?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    
                                    <td><?php echo $key['loan_type']; ?></td>
                                    <td><?php echo $key['interest_rate']; ?>%</td>
                                    <td><?php echo $key['loan_amount']; ?></td>
                                    <td><?php echo $key['interest_amount']; ?></td>
                                    <td><?php echo $key['amount_payable']; ?></td>
                                    <td><?php echo $this->loans->get_loanPaidAmount($key['id']) ?></td>
                                    <td><?php echo $key['date_of_request']; ?></td>
                                    <td class="text-end" >
                                        <div class="actions">
                                            
                                            <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            
                                            </a>
                                        </div>
                                    </td>
                                </tr>     
                                <?php $i++; }?>                           
                            </tbody>
                        </table>
                                    
                                </div>
                            </div>
                            <div class="tab-pane" id="bottom-justified-others">
                                Tab content 4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" hidden>
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>*</th>
                                            <th>Date </th>
                                            <th>Amount</th>
                                            <th>Invoice to</th>
                                            <th>Amount</th>
                                            
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; $amount = 0; foreach($savings as $key) { $amount =+ $key['amount']; ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $key['saving_date']?></td>
                                            <td><?php echo $key['amount']?></td>

                                            <td class="text-primary"></td>
                                            <td><span class="badge bg-success-light">Paid</span></td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Invoice</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone Invoice</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; }?>
                                    </tbody>
                                    <tfoot>
                                        <th>TOTAL</th>
                                        <th></th>
                                        <th><?php echo number_format($amount); ?></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



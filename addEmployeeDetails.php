<?php

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>../assets/css/style.css">
<script type="text/javascript" src="<?php echo base_url();?>../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>../assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>../assets/js/validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <div class="container"style="margin-top: 30px">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <strong>Add Employee</strong>
            </h3>
        </div>
        <div class="panel-body">
            <form class="add_employee" name="add_employee" method="post">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="empname" errorMessage="Enter value in Emplyee name" id="empname" class="form-control check-valid"  errorMessage="Enter value in Emplyee name" placeholder="Employee Name" tabindex="1">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                            <input type="password" name="password" id="password" class="form-control check-valid" isvalidate = "true" errorMessage="Enter value in Password" placeholder="Password" tabindex="2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <select name="city" errorMessage="Select value in City" id="city" class="form-control check-valid" tabindex="3">
                                <option value="">Select City</option>
                                <option value="Surat">Surat</option>
                                <option value="Valsad">Valsad</option>
                                <option value="Bharuch">Bharuch</option>
                                <option value="Vapi">Vapi</option>
                                <option value="Navsari">Navsari</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input type="date" name="dob" id="dob" class="form-control check-valid" isvalidate = "true" errorMessage="Enter value in DOB" placeholder="Date of birth" tabindex="4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" name="email" email-check="Please Enter valid Email"  errorMessage="Enter value in Email" id="email" class="form-control check-valid" placeholder="Email Address" tabindex="5">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <div class="input-group">
                        <input type="file" name="file" id="profile"class="check-valid" errorMessage="Choose profile" tabindex="6"/>
                </div>
                </div>
            </div>
            </div>
            <input type="button" id="register" name="register" class="btn btn-success" value="Register"/>
            <hr style="margin-top:10px;margin-bottom:10px;">
            </form>
            <a href="<?php echo base_url().'Employee_controller/DisplayEmp'; ?>"><button id="viewEmployee" name="Display" class="btn btn-primary">Show Records</button></a>
        </div>
        </div>
    </div>
</div>





<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/script.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<div class="container" style="margin-top: 30px ">
    <button id="AddEmp" name="addemp" class="btn btn-primary">Add Employee</button>
    <table id="example" class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
<!--            <th style="visibility: hidden">Id</th>-->
            <th>Employee Name</th>
            <th>City</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        </thead>
    </table>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable({
            "ajax":
                {
                    url  :"<?php echo base_url().'Employee_controller/viewEmp' ?>",
                    type  :'GET'
                }
        });
        $("#AddEmp").click(function () {
            window.location.href="<?php echo base_url().'Employee_controller' ?>";
        });
    });
</script>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Employee_modal');
        $this->load->helper('url');

    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('addEmployeeDetails');

    }
    public function addEmp()
    {
        $insert_data = array(
            'empname' => $_POST['empname'],
            'password' => $_POST['password'],
            'city' => $_POST['city'],
            'dob' => $_POST['dob'],
            'email' => $_POST['email'],
            'profile' => $this->uploadProfile()
        );

//        echo $empname. "".$password."".$city."".$dob."".$email."".$profile;
        $this->Employee_modal->InsertEmployee($insert_data);
        return;
    }
    public function uploadProfile()
    {
        if(isset($_FILES['file']['name']))
        {
            $filename = $_FILES['file']['name'];
            $tmpfile = $_FILES['file']['tmp_name'];
            move_uploaded_file($tmpfile,"uploads/".$filename);
            return $filename;
        }
    }
    public function DisplayEmp()
    {
        $this->load->view('viewEmployeeDetails');
    }
    public function viewEmp()
    {
        $query =$this->Employee_modal->getEmployee();
        $data=[];
        foreach ($query->result() as $rec)
        {
            $data[] = array(
                $rec->empname,
                $rec->city,
                $rec->dob,
                $rec->email,
                '<img src="http://localhost/CRUD-ci/uploads/'.$rec->profile.'" width="50"/>',
                '<a href="deleteEmp/'.$rec->id.'" onclick="return deletechecked();"><i class="fa fa-trash" style="font-size:25px;color:red;margin-left:15px;cursor: pointer"></i></a>',
                '<a href="EditEmp/'.$rec->id.'"><i class="fa fa-pencil" style="font-size:25px;color:#0073aa;margin-left:15px;cursor: pointer"></i></a>',
            );
        }
        $result = array(
            "data" => $data
        );
        echo json_encode($result);

    }
    function deleteEmp()
    {
        $id = $this->uri->segment(3);
        $this->Employee_modal->removeEmp($id);
        redirect(base_url() . "Employee_controller/DisplayEmp");
    }
    function EditEmp()
    {
        $id = $this->uri->segment(3);
        $data["records"] = $this->Employee_modal->fetchEmp($id);
        $this->load->view('UpdateEmployeeDetails',$data);

    }
    function updateEmp()
    {
        $id =  $_POST['hiddenid'];
        $update_data = array(
            'empname' => $_POST['empname'],
            'password' => $_POST['password'],
            'city' => $_POST['city'],
            'dob' => $_POST['dob'],
            'email' => $_POST['email'],
        );
        $this->Employee_modal->UpdateEmployee($id,$update_data);
        return;
    }
    function uploadEmpProfile()
    {
        $id =  $_POST['hiddenid'];
        $filename = $_FILES['profile']['name'];
        $tmpfile = $_FILES['profile']['tmp_name'];
        move_uploaded_file($tmpfile,"uploads/".$filename);
        $update_data = array(
            'profile' => $filename,
        );
        $this->Employee_modal->Uploadprofile($id,$update_data);
        return;
    }
}

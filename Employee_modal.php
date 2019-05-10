<?php
class Employee_modal extends CI_Model {

    function InsertEmployee($data)
    {
        $this->db->insert('employee',$data);
    }
    function getEmployee()
    {
        $query = $this->db->get('employee');
        return $query;
    }
    function removeEmp($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('employee');
    }
    function fetchEmp($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('employee');
        return $query->result();
    }
    function UpdateEmployee($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('employee',$data);

    }
    function Uploadprofile($id,$filename)
    {
        $this->db->where('id', $id);
        $this->db->update('employee',$filename);
    }
}
?>

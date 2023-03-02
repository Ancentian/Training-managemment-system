<?php

class Cooperative_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    /*
        Get all the records from the database
    */
    public function get_cooperatives()
    {
        $cooperative = $this->db->get('cooperatives');
        return $cooperative->result();
    }

    /*
        Store the record in the database
    */
    public function save_cooperative()
    {
        $data = array(
                'cooperative_name'  => $this->input->post('cooperative_name'), 
                'location' => $this->input->post('location'), 
            );
        $result = $this->db->insert('cooperatives',$data);
        return $result;
    }

    function update_training(){
        $id = $this->input->post('id');
        $training_name = $this->input->post('training_name');
        $training_date = $this->input->post('training_date');
 
        $this->db->set('training_name', $training_name);
        $this->db->set('training_date', $training_date);
        $this->db->where('id', $id);
        $result=$this->db->update('trainings');
        return $result;
    }

    public function count_members($id)
    {
        $this->db->where('group_id', $id);
        $query = $this->db->get('members');
        echo $query->num_rows();
    }

    /*
        Delete a record in the database
    */
    public function delete_staff($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        return $this->db->affected_rows();
    }

    function delete_training(){
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $result=$this->db->delete('trainings');
        return $result;
    }

}
?>

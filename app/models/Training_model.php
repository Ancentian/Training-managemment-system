<?php

class Training_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    /*
        Get all the records from the database
    */
    public function get_trainings()
    {
        $training = $this->db->get('trainings');
        return $training->result();
    }

    public function trainings()
    {
        $this->db->select()->from('trainings');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_trainingByName($training_id)
    {
        $this->db->where('id', $training_id);
        $this->db->select()->from('trainings');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_trainingSchedules()
    {
        $this->db->select('training_schedules.*, trainings.id as trainID, trainings.training_name, cooperatives.id as coID, cooperatives.cooperative_name, users.id, users.first_name, users.last_name');
        $this->db->from('training_schedules');
        $this->db->join('trainings', 'trainings.id = training_schedules.training_id');
        $this->db->join('cooperatives', 'cooperatives.id = training_schedules.cooperative_id');
        $this->db->join('users', 'users.id = training_schedules.created_by');
        $training = $this->db->get();
        return $training->result();
    }

    public function get_cooperativeMembers($training_id, $cooperative_id)
    {
        $this->db->where('training_schedules.training_id', $training_id);
        $this->db->where('training_schedules.cooperative_id', $cooperative_id);
        $this->db->select('training_schedules.*, members.id as memID, members.first_name, members.last_name, members.id_number, members.cooperative_id, cooperatives.id as copID, cooperatives.cooperative_name, trainings.id as trainID, trainings.training_name');
        $this->db->from('training_schedules');
        $this->db->join('members', 'members.cooperative_id = training_schedules.cooperative_id');
        $this->db->join('cooperatives', 'cooperatives.id = training_schedules.cooperative_id');
        $this->db->join('trainings', 'trainings.id = training_schedules.training_id');
        $this->db->order_by('members.first_name', 'ASC');
        $query  = $this->db->get();
        return $query->result();
    }

    /*
        Store the record in the database
    */
    public function save_training($data)
    {
        $result = $this->db->insert('trainings',$data);
        return $result;
    }

    public function save_schedule($data)
    {
        $this->db->insert('training_schedules', $data);
        return $this->db->affected_rows();
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

<?php

class Member_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    /*
        Get all the records from the database
    */
    public function get_members()
    {
        $this->db->select('members.*, cooperatives.id as copID, cooperatives.cooperative_name, users.id, users.first_name as fname, users.last_name as lname');
        $this->db->from('members');
        $this->db->join('cooperatives', 'cooperatives.id = members.cooperative_id');
        $this->db->join('users', 'users.id = members.created_by');
        $this->db->order_by('members.id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_memberByID($member_id)
    {
        $this->db->where('members.member_id', $member_id);
        $this->db->select('members.*, groups.id as groupID, groups.group_name')->from('members');
        $this->db->join('groups', 'groups.id = members.group_id');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_memberSavings($member_id)
    {
        $this->db->where('member_savings.member_id', $member_id);
        $this->db->select('member_savings.*, members.id as memID, members.group_id, members.member_id, members.first_name, members.last_name, members.phonenumber1, groups.id as groupID, groups.group_name');
        $this->db->from('member_savings');
        $this->db->join('members', 'members.member_id = member_savings.member_id', 'LEFT');
        $this->db->join('groups', 'groups.id = members.group_id');
        $this->db->order_by('member_savings.id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_memberTotalSavings($member_id)
    {
        $this->db->where('member_id', $member_id);
        $this->db->select('member_id, sum(amount) as totSavings')->from('member_savings');
        $query = $this->db->get();
        return $query->row_array();
    }

    // public function get_membersByGroupID()
    // {
    //     $member_id = $this->session->userdata('user_aob')->member_id;
    //     $this->db->where('users.member_id', $member_id);
    //     $this->db->select('users.member_id, members.member_id, members.group_id');
    //     $this->db->from('users');
    //     $this->db->join('members', 'members.member_id = users.member_id');
    //     $query = $this->db->get();
    //     $group_id = $query->row_array()['group_id'];
    //     return $group_id;
    // }

    /*
        Store the record in the database
    */
    public function store_member($data)
    {
        $this->db->insert('members', $data);
        return $this->db->affected_rows();
    }

    function show_employee($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return $this->db->affected_rows();
    }

    function update_user($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return $this->db->affected_rows();
    }

    function fetch_userById($id)
    {
        $this->db->where('id', $id);
        $this->db->select()->from('users');
        $query = $this->db->get();
        return $query->result_array()[0];
    }

     function fetchprofile_byId($id)
    {
        $this->db->where('id', $id);
        $this->db->select()->from('users');
        $query = $this->db->get();
        return $query->result()[0];
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

}
?>

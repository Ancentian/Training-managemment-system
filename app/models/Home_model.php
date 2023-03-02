<?php

class Home_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    /*
        Get all the records from the database
    */
    // public function count_cattle()
    // {
    //     $query = $this->db->get('cattle_tags');
    //     echo $query->num_rows();
    // }

    // public function count_paddocks()
    // {
    //     $query = $this->db->get('paddocks');
    //     echo $query->num_rows();
    // }

    // public function get_feedData()
    // {
    //     $this->db->select('products_usage.id as prodUsID,products_usage.product_id, SUM(products_usage.qty) as usedQty,products_usage.created_at, products.id as prodID, products.productName,products.productType,paddocks.id as paddockID, paddocks.paddockName');
    //     $this->db->from('products_usage');
    //     $this->db->join('products', 'products.id = products_usage.product_id');
    //     $this->db->join('paddocks', 'paddocks.id = products_usage.paddock_id');
    //     $this->db->group_by('products_usage.product_id');
    //     //$this->db->limit(5);
    //     $result = $this->db->get();
    //     return $result;
    // }

    /*
        Store the record in the database
    */
    public function store_user($data)
    {
        $this->db->insert('users', $data);
        return $this->db->affected_rows();
    }

    function fetch_admin()
    {
        $this->db->limit(1);
        $query = $this->db->get('sms_recipients');
        return $query->row_array();
    }

    public function update_setAdmin($data)
    {
        $this->db->where('id', 1);
        $this->db->update('sms_recipients', $data);
            //return $this->db->affected_rows();    
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

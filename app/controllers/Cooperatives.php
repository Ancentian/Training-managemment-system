<?php
if (!defined('BASEPATH'))
    exit ('No direct script access allowed');

class Cooperatives extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();  
        $this->load->model('home_model');
        $this->load->model('member_model', 'member');
        $this->load->model('training_model');
        $this->load->model('cooperative_model');
    }

    /*
     * Default method for this controller - Auth
     */
    function index()
    {
        $this->data['pg_title'] = "Cooperatives";
        $this->data['page_content'] = 'cooperatives/index';
        $this->load->view('layout/training', $this->data);
    }

    function cooperative_data(){
        $data = $this->cooperative_model->get_cooperatives();
        echo json_encode($data);
    }


    function store_cooperative()
    {
        $data = $this->cooperative_model->save_cooperative();
        echo json_encode($data);
    }

    function update(){
        $data = $this->training_model->update_training();
        echo json_encode($data);
    }

    function deleteLoan($id)
    {
        $delete = $this->loans->delete_loan($id);
        if ($delete > 0) {
            $this->session->set_flashdata('success', 'Loan Deleted Successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed, please try again');
        }
        redirect('loans/index');
    }

    function delete(){
        $data = $this->training_model->delete_training();
        if ($data > 0) {
            $this->session->set_flashdata('success', 'Loan Deleted Successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed, please try again');
        }
        echo json_encode($data);
    }

}
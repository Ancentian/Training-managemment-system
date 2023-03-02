<?php
if (!defined('BASEPATH'))
    exit ('No direct script access allowed');

class Home extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();  
        $this->load->helper('url');
        $this->load->model('home_model');
    }

    /*
     * Default method for this controller - Auth
     */
    function index()
    {
        $this->data['pg_title'] = "Home";
        $this->data['page_content'] = 'home/index';
        $this->load->view('layout/template', $this->data);
    }

    function myprofile()
    {
        $this->data['pg_title'] = "My Profile";
        $this->data['page_content'] = 'home/myprofile';
        $this->load->view('layout/template', $this->data);
    }

    function updatepass()
    {
        $forminput = $this->input->post();
        // echo $forminput['pconfirm']."<br>".$forminput['password'];
        // die;
        if ($forminput['password'] != $forminput['pconfirm']) {
            $this->session->set_flashdata('error-msg', 'Passwords do not match!');
            redirect('dashboard/myprofile');
        }
        $inserted = $this->users_model->updatepass($forminput['password']);
        if ($inserted > 0) {
            $this->session->set_flashdata('success-msg', 'Password updated successfully');
        } else {
            $this->session->set_flashdata('error-msg', 'Failed, please try again');
        }
        redirect('dashboard/myprofile');
    }


}
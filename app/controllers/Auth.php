<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }
    //finish the session of a logged in user
    function logout()
    {
        // echo "here";die;
        $this->session->unset_userdata('user_aob');
        $this->session->sess_destroy();
        $this->session->set_flashdata('error-msg','You are logged out!');
        redirect('auth/index');
    }

    function login_post()
    {
        if ($this->session->userdata('user_aob')) {
            redirect('home/index');
        }
        $formInput = $this->input->post();
        $member_id = $formInput['member_id'];
        $password = $formInput['password'];
        //var_dump($formInput);die;
        // define data to send
        $logindata = ['member_id' => $member_id, 'password' => $password];

        $loginresponse = json_decode($this->auth_model->login($logindata));
        // var_dump($loginresponse);die;
        // echo $loginresponse->message;die;
        if ($loginresponse->status == '1') {
            $this->session->set_userdata('user_aob', $loginresponse->userdata);
            redirect('home/index');
        } else {

            $this->session->set_flashdata('error-msg', $loginresponse->message);
            redirect('auth/index');
        }

    }

    function register()
    {
        $this->load->view('register');
    }

    function forgot_password()
    {
        $this->load->view('forgot-password');
    }

}

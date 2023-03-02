<?php
if (!defined('BASEPATH'))
    exit ('No direct script access allowed');

/**
 * @property CI_Session $session
 * @property CI_Input $input
 * @property CI_URI $uri
 * @property CI_Config $config
 * @property CI_DB_mysqli_driver $db
 * @property CI_Form_validation $form_validation
 * @property CI_Security $security
 *
 * This class manages all user module related functions.
 * Data is managed by sending CURL requests to the API; to the relevant endpoint
 */
class Staff extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_aob')) {
            $this->session->set_flashdata('error-msg', "You must login to continue!");
            redirect('user/index');
        }
        $this->load->model('staff_model');
        $this->load->model('auth_model');
    }

    function index()
    {
        $this->data['users'] = $this->staff_model->fetch_staff();
        $this->data['pg_title'] = "Users";
        $this->data['page_content'] = 'users/index';
        $this->load->view('layout/users', $this->data);
    }

    function addUser()
    {
        $this->data['pg_title'] = "Add User";
        $this->data['page_content'] = 'users/addUser';
        $this->load->view('layout/template', $this->data);
    }

    function editUser(int $id)
    {
        $this->data['user'] = $this->staff_model->fetch_userById($id);
        $this->data['pg_title'] = "Edit User";
        $this->data['page_content'] = 'users/editUser';
        $this->load->view('layout/template', $this->data);
    }

    public function store()
    {
        $forminput = $this->input->post();

        $inserted = $this->staff_model->store_user($forminput);
        if ($inserted > 0) {
            $this->session->set_flashdata('success-msg', 'User Added successfully');
        } else {
            $this->session->set_flashdata('error-msg', 'Failed, please try again');
        }
        return redirect('staff/index');
    }

    function updateUser(int $id)
    {
        $forminput = $this->input->post();

        $inserted = $this->staff_model->update_user($id, $forminput);
        if ($inserted > 0) {
            $this->session->set_flashdata('success-msg', 'User updated successfully');
        } else {
            $this->session->set_flashdata('error-msg', 'Failed, please try again');
        }
        redirect('staff/index');
    }

    function deleteUser($id)
    {
        $inserted = $this->staff_model->delete_staff($id);
        if ($inserted > 0) {
            $this->session->set_flashdata('success-msg', 'Staff deleted successfully');
        } else {
            $this->session->set_flashdata('error-msg', 'Failed, please try again');
        }
        redirect('staff/index');
    }

}
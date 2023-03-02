<?php
if (!defined('BASEPATH'))
    exit ('No direct script access allowed');

class Training extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();  
        $this->load->model('home_model');
        $this->load->model('member_model', 'member');
        $this->load->model('training_model');
        $this->load->model('cooperative_model', 'cooperative');
        //$this->load->library('uri');
    }

    /*
     * Default method for this controller - Auth
     */
    function index()
    {
        $this->data['pg_title'] = "Training";
        $this->data['page_content'] = 'trainings/index';
        $this->load->view('layout/training', $this->data);
    }


    function scheduleTraining()
    {
        $this->data['cooperatives'] = $this->cooperative->get_cooperatives();
        $this->data['trainings'] = $this->training_model->get_trainings();
        $this->data['pg_title'] = "Training";
        $this->data['page_content'] = 'trainings/scheduleTraining';
        $this->load->view('layout/member', $this->data);
    }

    function addSchedule()
    {
        $this->data['cooperatives'] = $this->cooperative->get_cooperatives();
        $this->data['trainings'] = $this->training_model->get_trainings();
        $this->data['pg_title'] = "Home";
        $this->data['page_content'] = 'trainings/addSchedule';
        $this->load->view('layout/member', $this->data);
    }

    function training_data(){
        $data = $this->training_model->get_trainings();
        echo json_encode($data);
    }

    function trainingSchedules()
    {
        $this->data['schedules'] = $this->training_model->get_trainingSchedules();
        $this->data['pg_title'] = "Home";
        $this->data['page_content'] = 'trainings/trainingSchedules';
        $this->load->view('layout/template', $this->data);
    }

    function mark_trainingAttendance($training_id, $cooperative_id)
    {
        $training_id = $this->uri->segment(3);
        $cooperative_id = $this->uri->segment(4);
        //var_dump($training_id);die;
        $this->data['members'] = $this->training_model->get_cooperativeMembers($training_id, $cooperative_id);
        $this->data['pg_title'] = "Mark Attendance";
        $this->data['page_content'] = 'trainings/markAttendance';
        $this->load->view('layout/template', $this->data);
    }


    function store_training()
    {
        $data = array(
                'training_name'  => $this->input->post('training_name'), 
                'training_date' => $this->input->post('training_date'), 
            );
        $this->training_model->save_training($data);
        if ($data > 0) {
            $this->session->set_flashdata('success', 'Training Added Successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed, please try again');
        }
        echo json_encode($data);
    }

    function storeSchedule()
    {
        $forminput = $this->input->post();

        $cooperative = $forminput['cooperative_id'];
        $training = $forminput['training_id'];
        $date = $forminput['training_date'];
        $topic = $forminput['training_topic'];
        $trainer = $this->session->userdata('user_aob')->id;

        $data = array('cooperative_id' => $cooperative, 'training_id' => $training, 'training_date' => $date, 'created_by' => $trainer);

        $this->training_model->save_schedule($data);
        $schedule_id = $this->db->insert_id();
        //var_dump($schedule_id);die;
        foreach($topic as $key){
            $this->db->insert('training_topics', ['schedule_id' => $schedule_id, 'training_topic' => $key, 'trainer' => $trainer]);
        }
        $inserted = $this->db->affected_rows();
        if ($inserted > 0) {
            $this->session->set_flashdata('success', 'Training Scheduled Successfully');
        }else{
            $this->session->set_flashdata('error', 'Err! Failed Try Again');
        }
        return redirect('training/trainingSchedules'); 
    }

    function storeAttendance()
    {
        $forminput = $this->input->post();

        $training = $forminput['training_id'];
        $cooperative = $forminput['cooperative_id'];
        $member = $forminput['member_id'];
        $attendance = $forminput['attendance_value'];
        $trainer = $this->session->userdata('user_aob')->id;
        $i = 0;
        foreach($training as $key){
            $cooperative_id = $cooperative[$i];
            $member_id = $member[$i];
            $attendance_value = $attendance[$i];
            $this->db->insert('trainings_attendance', ['training_id' => $key, 'cooperative_id' => $cooperative_id, 'member_id' => $member_id, 'attendance_value' => $attendance_value, 'marked_by' => $trainer]);
            $i++;
        }

        $inserted = $this->db->affected_rows();
        //var_dump($inserted);die;
        if ($inserted > 0) {
            $this->session->set_flashdata('success', 'Attendance Marked Successfully');
        }else{
            $this->session->set_flashdata('error', 'Err! Failed Try Again');
        }
        return redirect('training/trainingSchedules');
    }

    function update(){
        $data = $this->training_model->update_training();
        echo json_encode($data);
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
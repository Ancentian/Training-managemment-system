<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reports extends BASE_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('reports_model', 'reports');
        $this->load->model('cattle_model', 'cattle');
        $this->load->model('inventory_model', 'inventory');
        $this->load->model('management_model', 'management');
        $this->load->model('send_message');
    }

    /*
       Display all records in page
    */
    public function cattleReports()
    {
        $sdate = "";$edate = "";
        $forminput = $this->input->get();
        $sdate = $forminput['sdate'];
        $edate = $forminput['edate'];
        //var_dump($forminput);die;
        $this->data['cattle'] = $this->cattle->fetch_cattleTags($sdate, $edate);
        $this->data['pg_title'] = "Request Report";
        $this->data['page_content'] = 'reports/cattleReports';
        $this->load->view('layout/template', $this->data);
        
    }

    public function feedReports()
    {
        $sdate = "";$edate = "";
        $forminput = $this->input->get();
        $sdate = $forminput['sdate'];
        $edate = $forminput['edate'];
        $this->data['usages'] = $this->reports->get_allUsages();
        $this->data['pg_title'] = "Request Report";
        $this->data['page_content'] = 'reports/feedReports';
        $this->load->view('layout/template', $this->data); 
    }

    public function paddocksReport()
    {
        $this->data['paddocks'] = $this->management->get_paddocks();
        $this->data['pg_title'] = "Paddocks";
        $this->data['page_content'] = 'reports/paddocksReport';
        $this->load->view('layout/template', $this->data);
    }

    public function productReport($id)
    {
        $sdate = "";$edate = "";
        $forminput = $this->input->get();
        $sdate = $forminput['sdate'];
        $edate = $forminput['edate'];
        $this->data['product'] = $this->reports->get_productUsageByID($id, $sdate, $edate);
        $this->data['pg_title'] = "Request Report";
        $this->data['page_content'] = 'reports/productReport';
        $this->load->view('layout/template', $this->data);
    }

    public function paddockFeedReport($id)
    {
        $this->data['feed'] = $this->reports->get_paddockFeedByID($id);
        $this->data['pg_title'] = "Request Report";
        $this->data['page_content'] = 'reports/paddockFeedReport';
        $this->load->view('layout/template', $this->data);
    }

    public function paymentReports()
    {
        $sdate = "";$edate = "";
        $forminput = $this->input->get();
        $sdate = $forminput['sdate'];
        $edate = $forminput['edate'];
        $this->data['payments'] = $this->reports->get_allPayments($sdate,$edate);
        $this->data['pg_title'] = "Payment Report";
        $this->data['page_content'] = 'reports/paymentReport';
        $this->load->view('layout/template', $this->data);
    }

    public function sendSummary()
    {
        $todaySales = $this->summary->fetch_todaysIncome();//paid
        $todaysProduction = $this->summary->all_productions_today();
        //var_dump($todaysProduction);die;
        $paidUnpaid = $this->summary->total_incomeProductions();//Total Income(Paid&UnPaid) since Prod Started
        $totalIncome = $this->summary->total_income();//Total Income(Paid) since Production Started
        //var_dump($paidUnpaid);die;
        $totalDue = $paidUnpaid - $totalIncome;
        //$tot = $todaySales + $totalIncome;

        //var_dump($tot);die;
        $time = date("h:i:sa");
        //$tm = "06:36:02pm";

        $smsadmins = $this->employee_model->fetch_admin();
        $rec = $smsadmins['recipients'];
        
         $msg = "AUTOMATED DAILY REPORTS
Embroidery
Today's Income $todaySales

GRAND TOTALS:
Total Income $paidUnpaid
Outstanding Debts: $totalDue
Paid Debts $totalIncome";
//var_dump($msg);die;

        $this->send_message->send($msg, $rec);
    }
    
    
    /*
      Delete a record
    */
    public function deletePayment($id)
    {
        $item = $this->reports->delete($id);
        $this->session->set_flashdata('success-msg', "Deleted Successfully!");
        redirect(base_url('reports/paymentReports'));
    }


}
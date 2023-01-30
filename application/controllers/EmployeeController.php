<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('gsModel');
    }

    public function index()
    {
        $this->load->view('template/header');
        $data['employee'] = $this->gsModel->getEmployee();
        $this->load->view('index', $data);
        $this->load->view('template/footer');
    }

    public function store()
    {
        $epfno = $this->input->post('epfno');

        $data = [
            'epfno' => $this->input->post('epfno'),
            'sapno' => $this->input->post('sapno'),
            'nic' => $this->input->post('nicno'),
            'fname' => $this->input->post('fname'),
            'depart' => $this->input->post('depart'),
        ];

        $result = $this->gsModel->searchEmp($epfno);

        if (!empty($result)) {
            $this->session->set_flashdata("invalid","Employee Already Registered, Please try again.");
            redirect('employee');
        } else {
            $this->gsModel->insertEmployee($data);
            $this->session->set_flashdata("invalid","Employee Added Successfully!!");
            redirect('employee');
        }
    }

    // public function delete($epfno)
    // {
    //     $this->gsModel->deleteEmployee($epfno);
    //     redirect('employee');
    // }
}

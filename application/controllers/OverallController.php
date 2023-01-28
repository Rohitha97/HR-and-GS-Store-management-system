<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OverallController extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('gsModel');
        $this->load->helper('date');
    }
    public function overall()
	{
        $this->load->view('template/header');
        $data['overall'] = $this->gsModel->getOverall();
		$this->load->view('Overall/overall', $data);
        $this->load->view('template/footer');
	}

    public function add()
    {
        $epfno =$this->input->post('epfno');
        $result = $this->gsModel->searchEmp($epfno);
        
        if (!empty($result)) {
            $data['epfno'] = $result;
		    $this->load->view('Overall/overall-add',$data);  
        } else{
            $this->session->set_flashdata("invalid","Please enter valid EPF Number");
            redirect('overall');
        }
    }

    public function store()
    {

        $Issuedate = $this->input->post('idate');
        $input_date = new DateTime($Issuedate);
        $current_date = new DateTime();
        $difference = $input_date->diff($current_date);

        $data = [
            'qty' => $this->input->post('qty'),
            'rdate' => $this->input->post('rdate'),
            'idate' => $this->input->post('idate'),
            'udate' => $difference->days,
            'oldh' => $this->input->post('oldh'),
            'appr' => $this->input->post('appr'),
            'spn' => $this->input->post('spn'),
            'epfno' =>  $_SESSION['epfno'],
        ];

        $this->gsModel->insertOverall($data);
        redirect('overall');
    }

    public function tableUpdate($id)
    {
        $data = $this->gsModel->editOverall($id);

        $Issuedate = $data->idate;
        $input_date = new DateTime($Issuedate);
        $current_date = new DateTime();

        $difference = $input_date->diff($current_date);

        $data = [
            'qty' => $data->qty,
            'rdate' => $data->rdate,
            'idate' => $data->idate,
            'udate' => $difference->days,
            'oldh' => $data->oldh,
            'appr' => $data->appr,
            'spn' => $data->spn,
        ];

        $data['overall'] = $this->gsModel->updateOverall($data, $id);
        redirect('overall');
    }


    public function edit($id)
    {
        $data['overall'] = $this->gsModel->editOverall($id);
		$this->load->view('Overall/overall-edit',$data);
    }

    public function update($id)
    {
        $Issuedate = $this->input->post('idate');
        $input_date = new DateTime($Issuedate);
        $current_date = new DateTime();
        $difference = $input_date->diff($current_date);
        
        $data = [
            'qty' => $this->input->post('qty'),
            'rdate' => $this->input->post('rdate'),
            'idate' => $this->input->post('idate'),
            'udate' => $difference->days,
            'oldh' => $this->input->post('oldh'),
            'appr' => $this->input->post('appr'),
            'spn' => $this->input->post('spn'),
        ];

        $data['overall'] = $this->gsModel->updateOverall($data, $id);
        redirect('overall/edit/'.$id);
    }

    public function delete($id)
    {
        $this->gsModel->deleteOverall($id);
		redirect('overall');
    }

    public function email()
    {
        $this->session->set_flashdata("email", "Email Send Successfully");
        redirect('overall');
    }

}

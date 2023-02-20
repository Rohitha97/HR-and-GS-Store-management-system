<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TrouserController extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('gsModel');
        $this->load->helper('date');
    }
    public function trouser()
	{
        $this->load->view('template/header');
        $data['trouser'] = $this->gsModel->getTrouser();
		$this->load->view('trouser/trouser', $data);
        $this->load->view('template/footer');
	}

    public function tableUpdate($id)
    {
        $data = $this->gsModel->editTrouser($id);

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

        $data['trouser'] = $this->gsModel->updateTrouser($data, $id);
        redirect('trouser');
    }


    public function add()
    {

        $epfno =$this->input->post('epfno');
        $result = $this->gsModel->searchEmp($epfno);
        

        if (!empty($result)) {
            $data['epfno'] = $result;
		    $this->load->view('trouser/trouser-add',$data);
        } else{
            $this->session->set_flashdata("invalid","Please enter valid EPF Number");
            redirect('trouser');
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

        $this->gsModel->insertTrouser($data);
        redirect('trouser');
    }

    
    public function edit($id)
    {
        $data['trouser'] = $this->gsModel->editTrouser($id);
		$this->load->view('trouser/trouser-edit',$data);
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

        $data['trouser'] = $this->gsModel->updateTrouser($data, $id);
        redirect('trouser/edit/'.$id);
    }

    public function delete($id)
    {
        $this->gsModel->deleteTrouser($id);
		redirect('trouser');
    }

    public function email()
    {
        $this->session->set_flashdata("email", "Email Send Successfully");
        redirect('trouser');
    }
}

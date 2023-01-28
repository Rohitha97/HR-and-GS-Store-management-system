<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TshirtController extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('gsModel');
        $this->load->helper('date');
    }
    
    public function tshirt()
	{
        $this->load->view('template/header');
        $this->load->model('gsModel');
        $data['tshirt'] = $this->gsModel->getTshirts();
		$this->load->view('tshirt/tshirts', $data);
        $this->load->view('template/footer');
	}

    public function add()
    {
        $this->load->model('gsModel', 'gs');

        $epfno =$this->input->post('epfno');
        $result = $this->gs->searchEmp($epfno);
        
        if (!empty($result)) {
            $data['epfno'] = $result;
		    $this->load->view('tshirt/tshirts-add',$data);
        } else{
            $this->session->set_flashdata("invalid","Please enter valid EPF Number");
            redirect('tshirt');
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

        $this->gsModel->insertTshirts($data);
        redirect('tshirt');
    }
    public function tableUpdate($id)
    {
        $data = $this->gsModel->editTshirts($id);

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

        $data['tshirt'] = $this->gsModel->updateTshirts($data, $id);
        redirect('tshirt');
    }


    
    public function edit($id)
    {
        $data['tshirt'] = $this->gsModel->editTshirts($id);
		$this->load->view('tshirt/tshirts-edit',$data);
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

        $data['tshirt'] = $this->gsModel->updateTshirts($data, $id);
        redirect('tshirt/edit/'.$id);
    }

    public function delete($id)
    {
        $this->gsModel->deleteTshirts($id);
		redirect('tshirt');
    }

    public function email()
    {
        $this->session->set_flashdata("email", "Email Send Successfully");
        redirect('tshirt');
    }



}

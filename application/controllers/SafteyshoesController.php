<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SafteyshoesController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('gsModel');
        $this->load->helper('date');

    }
    public function safetyshoes()
    {
        $this->load->view('template/header');
        $data['safetyshoes'] = $this->gsModel->getSafetyshoes();
        $this->load->view('safetyshoes/safetyshoes', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $this->load->model('gsModel', 'gs');
        $epfno = $this->input->post('epfno');
        $result = $this->gs->searchEmp($epfno);
      
        if (!empty($result)) {
            $data['epfno'] = $result;
            $this->load->view('safetyshoes/safetyshoes-add', $data);
        } else {
            $this->session->set_flashdata("invalid", "Please enter valid EPF Number");
            redirect('safetyshoes');
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
            'epfno' =>  $this->input->post('epfno'),
        ];

        $this->gsModel->insertSafetyshoes($data);
        redirect('safetyshoes');
    }

    public function edit($id)
    {
        $data['safetyshoes'] = $this->gsModel->editSafetyshoes($id);
        $this->load->view('safetyshoes/safetyshoes-edit', $data);
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

        $data['safetyshoes'] = $this->gsModel->updateSafetyshoes($data, $id);
        redirect('safetyshoes/edit/'.$id);
    }

    public function tableUpdate($id)
    {
        $data = $this->gsModel->editSafetyshoes($id);

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

        $data['safetyshoes'] = $this->gsModel->updateSafetyshoes($data, $id);
        redirect('safetyshoes');
    }


    public function delete($id)
    {
        $this->gsModel->deleteSafetyshoes($id);
        redirect('safetyshoes');
    }

    public function email()
    {
        $this->session->set_flashdata("email", "Email Send Successfully");
        redirect('safetyshoes');
    }

}

<?php

class overallModel extends CI_Model
{
    public function insertEmployee($data)
    {
       return $this->db->insert('emp_data',$data);
    }

    public function searchEmp($epfno)
    {
        $this->db->select('*');
        $this->db->from('emp_data');
        $this->db->where('epfno', $epfno);
        $result = $this->db->get();
        return $result;
    }

    public function insertSafetyshoes($data)
    {
        return $this->db->insert('safetyshoes',$data);
    }

    public function getSafetyshoes()
    {
        $query = $this->db->get('safetyshoes');
        return $query->result();
    }

    public function insertTshirts($data)
    {
        return $this->db->insert('tshirts',$data);
    }
    public function getTshirts()
    {
        $query = $this->db->get('tshirts');
        return $query->result();
    }

    public function insertTrouser($data)
    {
        return $this->db->insert('trouser',$data);
    }
    public function getTrouser()
    {
        $query = $this->db->get('trouser');
        return $query->result();
    }

    public function insertOverall($data)
    {
        return $this->db->insert('overall',$data);
    }
    public function getOverall()
    {
        $query = $this->db->get('overall');
        return $query->result();
    }

    public function editOverall($id)
    {
        $query = $this->db->get_where('overall', ['id' => $id]);
        return $query->row();
    }

    public function updateOverall($data, $id)
    {
        return $this->db->update('overall', $data, ['id' => $id]);
    }





}

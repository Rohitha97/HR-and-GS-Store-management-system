<?php

class gsModel extends CI_Model
{
   
   
   // --------------------- Employee Model  ----------------------------
    public function insertEmployee($data)
    {
       return $this->db->insert('emp_data',$data);
    }
    public function getEmployee()
    {
        $query = $this->db->get('emp_data');
        return $query->result();
    }
    public function searchEmp($epfno)
    {
        $this->db->select('*');
        $this->db->from('emp_data');
        $this->db->where('epfno', $epfno);
        $result = $this->db->get();
        return  $result->result_array();
    }
    // public function searchdata($id)
    // {
    //     $query = $this->db->get_where('safetyshoes', ['id' => $id]);
    //     return $query->row();
    // }
    // public function searchdata($id)
    // {
    //     $query = $this->db->get_where('safetyshoes', ['id' => $id]);
    //     return $query->row();
    // }
    public function deleteEmployee($epfno)
    {
        return $this->db->delete('emp_data',['epfno' => $epfno]);
    }
    // -----------------------------------------------------------------





    // --------------------- safetyshoes Model  ----------------------------
    public function insertSafetyshoes($data)
    {
        return $this->db->insert('safetyshoes',$data);
    }

    public function getSafetyshoes()
    {
        $query = $this->db->query('SELECT emp_data.epfno, emp_data.sapno, emp_data.fname, safetyshoes.id, safetyshoes.qty, safetyshoes.rdate, safetyshoes.idate, safetyshoes.udate, safetyshoes.oldh, safetyshoes.appr, safetyshoes.spn
        FROM emp_data
        INNER JOIN safetyshoes
        ON safetyshoes.epfno = emp_data.epfno;');
        return $query->result();
    }

    // public function getSafetyshoes()
    // {
    //     $query = $this->db->query('SELECT emp_data.epfno, emp_data.sapno, emp_data.fname, safetyshoes.id, safetyshoes.qty, safetyshoes.rdate, safetyshoes.idate, safetyshoes.udate, safetyshoes.oldh, safetyshoes.appr, safetyshoes.spn
    //     FROM emp_data
    //     INNER JOIN safetyshoes
    //     ON safetyshoes.epfno = emp_data.epfno;');
    //     return $query->result();
    // }
    public function editSafetyshoes($id)
    {
        $query = $this->db->query('SELECT emp_data.epfno, emp_data.sapno, emp_data.fname,emp_data.depart, safetyshoes.id, safetyshoes.qty, safetyshoes.rdate, safetyshoes.idate, safetyshoes.udate, safetyshoes.oldh, safetyshoes.appr, safetyshoes.spn
        FROM emp_data
        INNER JOIN safetyshoes
        ON safetyshoes.epfno = emp_data.epfno
        WHERE safetyshoes.id = '.$id.';');
        return $query->row();
    }

    public function updateSafetyshoes($data, $id)
    {
        return $this->db->update('safetyshoes', $data, ['id' => $id]);
    }
    public function deleteSafetyshoes($id)
    {
        return $this->db->delete('safetyshoes',['id' => $id]);
    }
    // -----------------------------------------------------------------




    // --------------------- tshirts Model  ----------------------------
    public function insertTshirts($data)
    {
        return $this->db->insert('tshirts',$data);
    }
    public function getTshirts()
    {
        $query = $this->db->query('SELECT emp_data.epfno, emp_data.sapno, emp_data.fname, tshirts.id, tshirts.qty, tshirts.rdate, tshirts.idate, tshirts.udate, tshirts.oldh, tshirts.appr, tshirts.spn
        FROM emp_data
        INNER JOIN tshirts
        ON tshirts.epfno = emp_data.epfno;');
        return $query->result();
    }
    public function editTshirts($id)
    {
        $query = $this->db->query('SELECT emp_data.epfno, emp_data.sapno, emp_data.fname, emp_data.depart, tshirts.id, tshirts.qty, tshirts.rdate, tshirts.idate, tshirts.udate, tshirts.oldh, tshirts.appr, tshirts.spn
        FROM emp_data
        INNER JOIN tshirts
        ON tshirts.epfno = emp_data.epfno
        WHERE tshirts.id = '.$id.';');
        return $query->row();
    }

    public function updateTshirts($data, $id)
    {
        return $this->db->update('tshirts', $data, ['id' => $id]);
    }
    public function deleteTshirts($id)
    {
        return $this->db->delete('tshirts', ['id' => $id]);
    }
    // -----------------------------------------------------------------






    // --------------------- trouser Model  ----------------------------
    public function insertTrouser($data)
    {
        return $this->db->insert('trouser',$data);
    }
    public function getTrouser()
    {
        $query = $this->db->query('SELECT emp_data.epfno, emp_data.sapno, emp_data.fname, trouser.id, trouser.qty, trouser.rdate, trouser.idate, trouser.udate, trouser.oldh, trouser.appr, trouser.spn
        FROM emp_data
        INNER JOIN trouser
        ON trouser.epfno = emp_data.epfno;');
        return $query->result();
    }
    public function editTrouser($id)
    {
        $query = $this->db->query('SELECT emp_data.epfno, emp_data.sapno, emp_data.fname,emp_data.depart, trouser.id, trouser.qty, trouser.rdate, trouser.idate, trouser.udate, trouser.oldh, trouser.appr, trouser.spn
        FROM emp_data
        INNER JOIN trouser
        ON trouser.epfno = emp_data.epfno
        WHERE trouser.id = '.$id.';');
        return $query->row();
    }

    public function updateTrouser($data, $id)
    {
        return $this->db->update('trouser', $data, ['id' => $id]);
    }
    public function deleteTrouser($id)
    {
        return $this->db->delete('trouser', ['id' => $id]);
    }
    // -------------------------------------------------------------------





    //---------------------- Overall Model  ----------------------------
    public function insertOverall($data)
    {
        return $this->db->insert('overall',$data);
    }
    public function getOverall()
    {
        $query = $this->db->query('SELECT emp_data.epfno, emp_data.sapno, emp_data.fname, overall.id, overall.qty, overall.rdate, overall.idate, overall.udate, overall.oldh, overall.appr, overall.spn
        FROM emp_data
        INNER JOIN overall
        ON overall.epfno = emp_data.epfno;');
        return $query->result();
    }

    public function editOverall($id)
    {
        $query = $this->db->query('SELECT emp_data.epfno, emp_data.sapno, emp_data.fname,emp_data.depart, overall.id, overall.qty, overall.rdate, overall.idate, overall.udate, overall.oldh, overall.appr, overall.spn
        FROM emp_data
        INNER JOIN overall
        ON overall.epfno = emp_data.epfno
        WHERE overall.id = '.$id.';');
        return $query->row();
    }

    public function updateOverall($data, $id)
    {
        return $this->db->update('overall', $data, ['id' => $id]);
    }

    public function deleteOverall($id)
    {
        return $this->db->delete('overall', ['id' => $id]);
    }

    // -------------------------------------------------------------------




}

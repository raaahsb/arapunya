<?php

namespace App\Models;

use CodeIgniter\Model;

class Employee_model extends Model
{
    protected $table = 'employees';

    public function getKaryawan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveKaryawan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
}

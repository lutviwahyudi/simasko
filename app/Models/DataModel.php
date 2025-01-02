<?php

namespace App\Models;

use CodeIgniter\Model;

final class DataModel extends Model
{
    protected $table = 'tb_schedule';
    protected $primary_key = 'id';
    protected $allowedFields = ['suhu', 'ph', 'kontrol', 'pompa', 'updated_at'];

    //memperbaharui data secara real time
    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';

    public function getData()
    {
        return $this->findAll();
    }

    public function insertDataIntoTable2($data)
    {
        return $this->db->table($this->table)
            ->insert($data);
    }
}

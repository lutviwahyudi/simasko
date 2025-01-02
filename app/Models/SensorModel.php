<?php

namespace App\Models;

use CodeIgniter\Model;

class SensorModel extends Model
{
    protected $table = 'tb_parameter';
    protected $primary_key = 'id';
    protected $allowedFields = ['suhu', 'ph', 'kontrol', 'pompa'];

    //memperbaharui data secara real time
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getSensor()
    {
        return $this->findAll();
    }

    public function getNilai()
    {
        return $this->db->table($this->table)->select('suhu')->get()->getResultArray();
    }
    public function getDataFromTable1()
    {
        return $this->db->table($this->table)
            ->select('suhu, ph, kontrol, pompa, updated_at')
            ->get()
            ->getResultArray();
    }
}

<?php

namespace App\Controllers;

use App\Models\SensorModel;
use App\Models\DataModel;
use App\Models\AuthModel;

class Schedule extends BaseController
{
    protected $DataModel;
    protected $AuthModel;
    protected $SensorModel;
    public function __construct()
    {
        $this->SensorModel = new SensorModel();
        $this->AuthModel = new SensorModel();
        $this->DataModel = new DataModel();
    }

    public function index()
    {

        // Ambil data dari Tabel 1
        $dataFromTable1 = $this->SensorModel->getDataFromTable1();

        // Simpan data ke Tabel 2
        foreach ($dataFromTable1 as $sen) {
            $this->DataModel->insertDataIntoTable2($sen);
        }

        $data = [
            'title' => 'Halaman | Tabel',
            'user' => $this->AuthModel->findAll(),
            'data' => $this->DataModel->getData()
        ];

        return view('page/table', $data);
    }
}

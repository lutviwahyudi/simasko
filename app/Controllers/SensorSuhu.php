<?php

namespace App\Controllers;

use App\Models\SensorModel;

class SensorSuhu extends BaseController
{
    protected $SensorModel;
    public function __construct()
    {
        $this->SensorModel = new SensorModel();
    }
    public function index()
    {


        $websoket = json_decode(file_get_contents('php://input'), true);
        $sensor = $websoket['payload'];



        $data = array(
            'suhu' => $sensor,
            'time' => $this->SensorModel->getSensor()
        );

        $this->SensorModel->Update(1, $data);
    }
}

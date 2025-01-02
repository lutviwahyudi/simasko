<?php

namespace App\Controllers;
use App\Models\AuthModel;
use App\Models\SensorModel;
use App\Models\DataModel;

class Home extends BaseController
{
    protected $AuthModel;
    protected $SensorModel;
    protected $DataModel;
    public function __construct() {
        $this->AuthModel = new AuthModel();
        $this->SensorModel = new SensorModel();
        $this->DataModel = new DataModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Halaman login'
        ];

        return view('page/login', $data);
    }

    public function regis()
    {
        $data = [
            'title' => 'Halaman Regis'
        ];
        
        return view('page/regis', $data);
    }

    public function submit_regis()
    {
        $validation = \config\Services::validation();

        $validation->setRules([
            'name' => 'min_length[3]|max_length[100]',
            'email' => 'valid_email|max_length[100]',
            'address' => 'min_length[4]|max_length[100]',
            'password' => 'min_length[8]|'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // ambil data password yang ada di form regis
        $password = $this->request->getPost('password');
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'date-of-birth' => $this->request->getPost('date-of-birth'),
            'address' => $this->request->getPost('address'),
            'password' => $hashedPassword
        ];

        // jika data berhasil masuk ke database
        if ($this->AuthModel->insert($data)) {
            return redirect()->to('/home')->with('success', 'Berhasil sign up, silahkan login');
        }else {
            return redirect()->back()->withInput()->with('errors', 'ada yang salah dalam memasukan data');
        }
    }

    public function submit_login()
    {
        $validation = \config\Services::validation();

        // set validasinya
        $validation->setRules([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // ambil data dari form 
        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');

        // cek keberadaan user sesuai dengan yang ada didatabase
        // ambil data dari database
        $user = $this->AuthModel->where('name', $name)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'username tidak ada atau salah');
        }

        //verikasi password
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('errors', 'password anda salah');
        } else {
            return redirect()->to('home/dashboard')->with('success', 'selamat anda berhasil login');
        }

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/')->with('success', 'Bye-bye cantik :)');    
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Halaman Dashboard',
            'user' => $this->AuthModel->findAll(),
            'sensor' => $this->SensorModel->getSensor(),
            'data' => $this->DataModel->getData()
        ];
        
        return view('page/dashboard', $data);
    }


    public function sensorSuhu()
    {
        $data = [
            'title' => 'Halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('data/sensorSuhu', $data);
    }

    public function sensorPh()
    {
        $data = [
            'title' => 'Halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('data/sensorPh', $data);
    }

    public function status()
    {
        $data = [
            'title' => 'halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('data/status', $data);
    }

    public function kontrol()
    {
        $data = [
            'title' => 'halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('data/kontrol', $data);
    }

    public function pompa()
    {
        $data = [
            'title' => 'halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('data/pompa', $data);
    }

    public function waktu()
    {
        $data = [
            'title' => 'Halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('data/waktu', $data);
    }


    public function senData()
    {

        // Mendapatkan objek URI dari request
        $uri = $this->request->getUri();

        // Mengambil segmen URI menggunakan metode getSegment()
        $suhu = $uri->getSegment(3);
        $ph = $uri->getSegment(4);
        $status = $uri->getSegment(5);

        $data = array(
            'suhu' => $suhu,
            'ph' => $ph,
            'status' => $status
        );

        $this->SensorModel->Update(1, $data);
    }
    

    public function table()
    {
        $data = [
            'title' => 'Halaman Tabel',
            'user' => $this->AuthModel->findAll(),
            'data' => $this->DataModel->getData()
        ];
        
        return view('page/table', $data);
    }
}

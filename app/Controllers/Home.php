<?php

namespace App\Controllers;
use App\Models\AuthModel;

class Home extends BaseController
{
    protected $AuthModel;
    public function __construct() {
        $this->AuthModel = new AuthModel();
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
}

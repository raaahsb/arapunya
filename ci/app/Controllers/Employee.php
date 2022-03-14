<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Employee_model;

class Employee extends Controller
{
    public function index()
    {
        $model = new Employee_model;
        $data['title']     = 'Data Vaksin Karyawan';
        $data['getKaryawan'] = $model->getKaryawan();

        echo view('header', $data);
        echo view('employee_view', $data);
        echo view('footer', $data);
    }

    public function add()
    {
        $model = new Employee_model;
        $data = array(
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'usia'         => $this->request->getPost('usia'),
            'status_vaksin_1'  => $this->request->getPost('status_vaksin_1'),
            'status_vaksin_2'  => $this->request->getPost('status_vaksin_2')
        );
        $model->saveKaryawan($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data Vaksinasi Karyawan");
                window.location="' . base_url('employee') . '"
            </script>';
    }
}

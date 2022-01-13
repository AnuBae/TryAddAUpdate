<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model', 'karyawan');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['karyawan'] = $this->karyawan->getKaryawan();
        $data['log'] = $this->karyawan->getLogActivity();

        $this->load->view('home', $data);
    }

    function TambahData($id_karyawan)
    {
        // $name = $this->karyawan->getName($id_karyawan);
        // echo $name->nama;

        $data['time'] = date("h:i");
        $data['id_karyawan'] = $id_karyawan;
        $this->karyawan->addLogActivity($data);

        redirect("home");
    }
}

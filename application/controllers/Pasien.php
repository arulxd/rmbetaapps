<?php
 
class Pasien extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_pasien');
      // $this->load->library('datatables');
      $this->load->helper('form');
    } 

    function index()
    {
        $data['tbl_pasien'] = $this->model_pasien->get_all_tbl_pasien();
        $this->load->view('pasien/pasien_list',$data);
    }

  function tambah()
  {
     $data['tbl_pasien'] = $this->model_pasien->get_all_tbl_pasien();
        $this->load->view('pasien/pasien_form_tambah',$data);
  }


function simpan()
  {
    $this->load->view('pasien/pasien_form_tambah',$data);
      $key = $this->input->post('norm');
      $data['no_rm']            = $this->input->post('norm');
      $data['nama_pasien']      = $this->input->post('nama_pasien');
      $data['alamat']           = $this->input->post('alamat');
      $data['jenis_kelamin']    = $this->input->post('jenis_kelamin');
      $data['nama_bapak'] = $this->input->post('nama_bapak');
      $data['tanggal'] = $this->input->post('tanggal');

      $this->model_pasien->get_all_tbl_pasien($key);
      $this->model_pasien->add_tbl_pasien($data);
        redirect('index.php');
  }

}

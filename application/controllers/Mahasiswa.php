<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Mahasiswa_model', 'mahasiswa');
   }


   public function index()
   {
      $data['judul'] = 'Daftar Mahasiswa';
      $data['mahasiswa'] = $this->mahasiswa->getAllMahasiswa();

      if ($this->input->post('keyword')) {
         $data['mahasiswa'] = $this->mahasiswa->cariDataMahasiswa();
      }


      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('mahasiswa/index', $data);
      $this->load->view('templates/footer');
   }

   public function tambah()
   {
      $data['judul'] = 'Tambah Data Mahasiswa';

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      $this->form_validation->set_rules('nim', 'Nim', 'trim|required');
      $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
      $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar');
         $this->load->view('mahasiswa/tambah', $data);
         $this->load->view('templates/footer');
      } else {
         $this->mahasiswa->tambahDataMahasiswa();
         $this->session->set_flashdata('flash', 'Ditambahkan');
         redirect('mahasiswa/index');
      }
   }

   public function hapus($id)
   {
      $this->mahasiswa->hapusDataMahasiswa($id);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect('mahasiswa/index');
   }

   public function detail($id)
   {
      $data['judul'] = 'Detail Data Mahasiswa';
      $data['mahasiswa'] = $this->mahasiswa->getMahasiswaById($id);

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('mahasiswa/detail', $data);
      $this->load->view('templates/footer');
   }

   public function ubah($id)
   {
      $data['judul'] = 'Ubah Data Mahasiswa';
      $data['mahasiswa'] = $this->mahasiswa->getMahasiswaById($id);

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      $this->form_validation->set_rules('nim', 'Nim', 'trim|required');
      $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
      $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar');
         $this->load->view('mahasiswa/ubah', $data);
         $this->load->view('templates/footer');
      } else {
         $this->mahasiswa->ubahDataMahasiswa($id);
         $this->session->set_flashdata('flash', 'Diubah');
         redirect('mahasiswa/index');
      }
   }


   // redirect('mahasiswa/index');
}

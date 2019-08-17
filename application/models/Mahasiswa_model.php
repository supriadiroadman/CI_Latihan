<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
   public function getAllMahasiswa()
   {
      // $query = $this->db->get('tb_mhs');
      // return $query->result_array();
      return $this->db->get('tb_mhs')->result_array();
   }

   public function tambahDataMahasiswa()
   {
      $data = [
         'nama' => $this->input->post('nama'),
         'nim' => $this->input->post('nim'),
         'tgl_lahir' => $this->input->post('tgl_lahir'),
         'jurusan' => $this->input->post('jurusan')
      ];
      $this->db->insert('tb_mhs', $data);
   }

   public function hapusDataMahasiswa($id)
   {
      $this->db->delete('tb_mhs', ['id' => $id]);
   }

   public function getMahasiswaById($id)
   {
      return  $this->db->get_where('tb_mhs', ['id' => $id])->row_array();
   }

   public function ubahDataMahasiswa($id)
   {
      $data = [
         'nama' => $this->input->post('nama'),
         'nim' => $this->input->post('nim'),
         'tgl_lahir' => $this->input->post('tgl_lahir'),
         'jurusan' => $this->input->post('jurusan')
      ];
      $this->db->where('id', $id);
      $this->db->update('tb_mhs', $data);
   }

   public function cariDataMahasiswa()
   {
      $keyword =  $this->input->post('keyword');

      $this->db->like('nama', $keyword);
      $this->db->or_like('nim', $keyword);
      $this->db->or_like('tgl_lahir', $keyword);
      $this->db->or_like('jurusan', $keyword);
      return $this->db->get('tb_mhs')->result_array();
   }
}

/* End of file M_mahasiswa.php */

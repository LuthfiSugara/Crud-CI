<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function getAllMahasiswa(){
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tambahDataMahasiswa($upload){
		$data = [
			'nama' => $this->input->post('nama', true),
			'nrp' => $this->input->post('nrp', true),
			'email' => $this->input->post('email', true),
			'jurusan' => $this->input->post('jurusan'),
			'gambar' => $upload['file']['file_name']
		];

		$this->db->insert('mahasiswa', $data);
	}

	public function upload(){
	    $config['upload_path'] = './uploads/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']  = '0';
	    $config['remove_space'] = TRUE;
	  
	    $this->load->library('upload', $config); // Load konfigurasi uploadnya
	    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
	      // Jika berhasil :
	      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
	      return $return;
	    }else{
	      // Jika gagal :
	      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
	      return $return;
	    }
	}

	public function hapusDataMahasiswa($id){
		$this->db->where('id',$id);
		$this->db->delete('mahasiswa');
	}

	public function getMahasiswaById($id){
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}

	public function ubahDataMahasiswa($upload){
		$data = [
			'nama' => $this->input->post('nama', true),
			'nrp' => $this->input->post('nrp', true),
			'email' => $this->input->post('email', true),
			'jurusan' => $this->input->post('jurusan'),
			'gambar' => $upload['file']['file_name']

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $data);
	}

	public function cariDataMahasiswa(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('nrp',$keyword);
		$this->db->or_like('email',$keyword);
		$this->db->or_like('jurusan',$keyword);
		return $this->db->get('mahasiswa')->result_array();
	}
	

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */
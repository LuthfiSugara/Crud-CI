<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model');
		$this->load->helper(array('form', 'url'));	
	}

	public function index(){
		$data['gambar'] = $this->model->view();
		$this->load->view('success_form', $data);
	}

	public function tambah(){
		$data = array();

		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
		  // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
		  $upload = $this->model->upload();
		  
		  if($upload['result'] == "success"){ // Jika proses upload sukses
		     // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
		    $this->model->save($upload);
		    
		    redirect('upload'); // Redirect kembali ke halaman awal / halaman view data
		  }else{ // Jika proses upload gagal
		    $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		  }
		}

		$this->load->view('upload_form', $data);
	}

}

/* End of file Upload.php */
/* Location: ./application/controllers/Upload.php */